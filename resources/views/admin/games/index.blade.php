@extends('layouts.app')

@section('content')
    <h1>SECURE - Programma & Uitslagen</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" name="saveGamesForm" action="/admin/games/store">
        {{ csrf_field() }}
        <fieldset>
            <legend>Nieuwe wedstrijd toevoegen</legend>
            <table class="table">
                <thead>
                <tr>
                    <th>Type</th>
                    <th>Stadion</th>
                    <th>Datum</th>
                    <th>Tijd</th>
                    <th colspan="3">Wedstrijd</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            @if(false === empty($types))
                                <select class="form-control" name="new[typeId]">
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            @endif
                        </td>
                        <td>
                            @if(false === empty($stadiums))
                                <select class="form-control" name="new[stadiumId]">
                                    @foreach($stadiums as $stadium)
                                        <option value="{{ $stadium->id }}">{{ $stadium->name }}</option>
                                    @endforeach
                                </select>
                            @endif
                        </td>
                        <td>
                            <input name="new[date]" type="text" class="form-control" value="" style="width:100px;">
                        </td>
                        <td>
                            <input name="new[time]" type="text" class="form-control" value="" style="width:100px;">
                        </td>
                        <td>
                            @if(false === empty($countries))
                                <select class="form-control" name="new[homeId]">
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            @endif
                        </td>
                        <td>-</td>
                        <td>
                            @if(false === empty($countries))
                                <select class="form-control" name="new[awayId]">
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            @endif
                        </td>
                        <td>
                            <input class="btn btn-primary" type="submit" name="submit" value="Voeg toe">
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
    </form>
    @if (false === empty($games))
        <form method="post" name="saveGamesForm" action="/admin/games/save">
            {{ csrf_field() }}
            <fieldset>
                <legend>Alle wedstrijden</legend>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Stadion</th>
                            <th>Datum</th>
                            <th>Tijd</th>
                            <th colspan="5">Wedstrijd</th>
                            <th colspan="2">Kaarten</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($games as $game)
                        <tr>
                            <td>
                                @if(false === empty($types))
                                    <select
                                        class="form-control"
                                        name="{{ $game->id }}[typeId]"
                                    >
                                        @foreach($types as $type)
                                            <option
                                                    value="{{ $type->id }}"
                                                    {{{ ($game->typeId === $type->id) ? 'selected' : '' }}}
                                            >{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </td>
                            <td>
                                @if(false === empty($stadiums))
                                    <select
                                            class="form-control"
                                            name="{{ $game->id }}[stadiumId]"
                                    >
                                        @foreach($stadiums as $stadium)
                                            <option
                                                value="{{ $stadium->id }}"
                                                {{{ ($game->stadiumId === $stadium->id) ? 'selected' : '' }}}
                                            >{{ $stadium->name }}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </td>
                            <td>
                                <input
                                    name="{{ $game->id }}[date]"
                                    type="text"
                                    class="form-control"
                                    value="{{ $game->date }}"
                                >
                            </td>
                            <td>
                                <input
                                    name="{{ $game->id }}[time]"
                                    type="text"
                                    class="form-control"
                                    value="{{ $game->time }}"
                                    style="width:100px;"
                                >
                            </td>
                            <td style="text-align: right;">
                                @if(false === empty($countries))
                                    <select
                                        class="form-control"
                                        name="{{ $game->id }}[homeId]"
                                    >
                                        @foreach($countries as $country)
                                            <option
                                                value="{{ $country->id }}"
                                                {{{ ($game->homeCountry->id === $country->id) ? 'selected' : '' }}}
                                            >{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </td>
                            <td>
                                <input
                                    name="{{ $game->id }}[goalsHome]"
                                    type="text"
                                    class="form-control"
                                    placeholder="0"
                                    value="{{ $game->goalsHome }}"
                                    {{ $disabled = (true === $game->inFuture) ? 'disabled' : '' }}
                                    style="width:50px;"
                                >
                            </td>
                            <td>-</td>
                            <td>
                                <input
                                    name="{{ $game->id }}[goalsAway]"
                                    type="text"
                                    class="form-control"
                                    placeholder="0"
                                    value="{{ $game->goalsAway }}"
                                    {{ $disabled }}
                                    style="width:50px;"
                                >
                            </td>
                            <td>
                                @if(false === empty($countries))
                                    <select
                                        class="form-control"
                                        name="{{ $game->id }}[awayId]"
                                    >
                                    @foreach($countries as $country)
                                        <option
                                            value="{{ $country->id }}"
                                            {{{ ($game->awayCountry->id === $country->id) ? 'selected' : '' }}}
                                        >{{ $country->name }}</option>
                                    @endforeach
                                    </select>
                                @endif
                            </td>
                            <td>
                                <select
                                    class="form-control"
                                    name="{{$game->id}}[cardsYellow]"
                                    {{ $disabled }}
                                >
                                    @for($i = 0; $i <= 10; $i++)
                                        @php
                                            $selected = ($i === $game->cardsYellow) ? ' selected' : '';
                                        @endphp
                                        <option value="{{$i}}"{{$selected}}>{{$i}}</option>
                                    @endfor
                                </select>
                            </td>
                            <td>
                                <select
                                    class="form-control"
                                    name="{{$game->id}}[cardsRed]"
                                    {{ $disabled }}
                                >
                                    @for($i = 0; $i <= 5; $i++)
                                        @php
                                            $selected = ($i === $game->cardsRed) ? ' selected' : '';
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
            </fieldset>
        </form>
    @endif
@endsection