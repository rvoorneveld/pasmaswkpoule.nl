@extends('layouts.app')

@section('content')
<h1>Welkom {{ Auth::user()->name }}</h1>
@if (true === $showFillPredictionsBox)
    <div class="alert alert-warning alert-important" role="alert">
        Vergeet niet om je <a class="alert-link" href="/games">voorspellingen</a> in te vullen!
    </div>

@endif
<div class="row justify-content-center">
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Wedstrijden vandaag</h2>
            </div>
            @if (false === empty($todaysGames))
                <table class="table">
                    <tbody>
                    @foreach($todaysGames as $todaysGame)
                        <tr>
                            <th scope="row">{{ $todaysGame->time}}</th>
                            <td>{{ html_entity_decode($todaysGame->homeCountry->name) }}</td>
                            <td><img class="flag" src="/images/flags/{{$todaysGame->homeCountry->flag}}" /></td>
                            <td>-</td>
                            <td><img class="flag" src="/images/flags/{{$todaysGame->awayCountry->flag}}" /></td>
                            <td>{{ html_entity_decode($todaysGame->awayCountry->name) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>Geen wedstrijden vandaag.</p>
            @endif
        </div>

        @if (false === empty($feed))
                <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                    <div class="my-3 p-3">
                        <h2 class="display-5">Laatste nieuws</h2>
                        <div class="list-group">
                            @foreach($feed['items'] as $item)
                                <a href="{{ $item->get_link() }}" target="_blank" class="list-group-item list-group-item-action">
                                    <span class="font-weight-light">{{ $item->get_date('j M') }}</span>
                                    {{ $item->get_title() }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
