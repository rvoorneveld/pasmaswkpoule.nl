@php
    $carbon = new \Carbon\Carbon();
@endphp

@extends('layouts.app')

@section('content')
    <h1>Programma & Uitslagen</h1>

    @if (false === empty($poules))
        <form method="post" name="saveGamesForm" action="/games/save">
            <div class="row">
        @foreach($poules as $poule)
            <div class="col-sm text-center">
                <h2 class="mt-4">Poule {{ $strPoule = $poule->poule }}</h2>
                    {{ csrf_field()}}
                    @if (true === isset($games[$strPoule]))
                        <table class="table table-borderless table-striped">
                            <tbody>
                        @foreach ($games[$strPoule] as $game)
                            @php
                                $date = $carbon->setTimeFromTimeString("{$game->date} {$game->time}");
                                $disabled = false === $date->isFuture() ? ' disabled' : '';
                                $gamePrediction = $userPredictions[$game->id] ?? false;
                                $goalsHome = $gamePrediction['goalsHome'] ?? '';
                                $goalsAway = $gamePrediction['goalsAway'] ?? '';
                                $cardsYellow = $gamePrediction['cardsYellow'] ?? '';
                                $cardsRed = $gamePrediction['cardsRed'] ?? '';
                            @endphp
                            <tr>
                                <td>
                                    {{{ $date->format('d') }}}<br />
                                    {{ $date->format('M') }}
                                </td>
                                <td>
                                    <img class="flag" src="/images/flags/{{$game->homeCountry->flag}}" /><br />
                                    {{ html_entity_decode($game->homeCountry->name) }}
                                </td>
                                <td width="60">
                                    <input
                                        maxlength="1"
                                        style="max-width:50px; text-align:center; font-size:18px;"
                                        name="{{$game->id}}[goalsHome]"
                                        type="text"
                                        class="form-control"
                                        value="{{ $goalsHome }}"{{ $disabled }}
                                    >
                                </td>
                                <td width="25">-</td>
                                <td width="60">
                                    <input maxlength="1"
                                        style="max-width:50px; text-align:center; font-size:18px;"
                                        name="{{$game->id}}[goalsAway]"
                                        type="text"
                                        class="form-control"
                                        value="{{ $goalsAway }}"
                                        {{ $disabled }}
                                    >
                                </td>
                                <td>
                                    <img class="flag" src="/images/flags/{{$game->awayCountry->flag}}" /><br />
                                    {{ html_entity_decode($game->awayCountry->name) }}
                                </td>
                                <td width="60">
                                    <input
                                        maxlength="1"
                                        style="max-width:50px; text-align:center; font-size:18px; background: yellow;"
                                        name="{{$game->id}}[cardsYellow]"
                                        type="text"
                                        class="form-control"
                                        value="{{ $cardsYellow }}"
                                        {{ $disabled }}
                                    >
                                </td>
                                <td width="60">
                                    <input
                                        maxlength="1"
                                        style="max-width:50px; text-align:center; font-size:18px; background: red;"
                                        name="{{$game->id}}[cardsRed]"
                                        type="text"
                                        class="form-control"
                                        value="{{ $cardsRed }}"
                                        {{ $disabled }}
                                    >
                                </td>
                            </tr>
                        @endforeach
                            <tr>
                                <td colspan="9" class="bg-light">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Opslaan">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    @endif
                </div>
        @endforeach
            </div>
        </form>
    @endif
@endsection
