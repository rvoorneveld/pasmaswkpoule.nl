@extends('layouts.app')

@section('content')
    <h1>Programma & Uitslagen</h1>
    @if (false === empty($games))
        <form method="post" name="saveGamesForm" action="/games/save">
            {{csrf_field()}}
            <table class="table">
                <thead>
                    <tr>
                        <th>Poule</th>
                        <th>Datum</th>
                        <th>Tijd</th>
                        <th colspan="6">Wedstrijd</th>
                        <th>Kaarten</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($games as $game)

                    @php
                        $gamePrediction = $userPredictions[$game->id] ?? false;
                        $goalsHome = $gamePrediction['goalsHome'] ?? 0;
                        $goalsAway = $gamePrediction['goalsAway'] ?? 0;
                        $cardsYellow = $gamePrediction['goalsHome'] ?? 0;
                        $cardsRed = $gamePrediction['goalsHome'] ?? 0;
                    @endphp
                    <tr>
                        <td>{{$game->homeCountry->poule}}</td>
                        <td>{{$game->date}}</td>
                        <td>{{$game->time}}</td>
                        <td style="text-align: right;">
                            {{$game->homeCountry->name}}
                            <img class="flag" src="/images/flags/{{$game->homeCountry->flag}}" />
                        </td>
                        <td><input name="{{$game->id}}[goalsHome]" type="text" class="form-control" placeholder="0" value="{{$goalsHome}}"></td>
                        <td>-</td>
                        <td><input name="{{$game->id}}[goalsAway]" type="text" class="form-control" placeholder="0" value="{{$goalsAway}}"></td>
                        <td>
                            <img class="flag" src="/images/flags/{{$game->awayCountry->flag}}" />
                            {{$game->awayCountry->name}}
                        </td>
                        <td>
                            <select name="{{$game->id}}[cardsYellow]">
                                @for($i = 1; $i <= 10; $i++)
                                    @php
                                        $selected = ($i === $cardsYellow) ? ' selected="selected"' : '';
                                    @endphp
                                    <option value="{{$i}}"{{$selected}}>{{$i}}</option>
                                @endfor
                            </select>
                        </td>
                        <td>
                            <select name="{{$game->id}}[cardsRed]">
                                @for($i = 1; $i <= 10; $i++)
                                    @php
                                        $selected = ($i === $cardsRed) ? ' selected="selected"' : '';
                                    @endphp
                                    <option value="{{$i}}"{{$selected}}>{{$i}}</option>
                                @endfor
                            </select>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <input class="btn btn-primary" type="submit" name="submit" value="Opslaan">
        </form>
    @endif
@endsection