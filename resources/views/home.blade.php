@php
    $carbon = new \Carbon\Carbon();
@endphp

@extends('layouts.app')

@section('carousel')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('/images/carousel/lnvbl5jmxp7cpshbii1x.jpg');"></div>
            <div class="carousel-item" style="background-image: url('/images/carousel/nmkfkdjgbakfzul9ckb5.jpg');"></div>
            <div class="carousel-item" style="background-image: url('/images/carousel/whxuhveznu9jtq3h5byt.jpg');"></div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection

@section('content')
<h1>Welkom {{ Auth::user()->name }}</h1>
@if (true === $showFillPredictionsAlert)
    <div class="alert alert-warning alert-important" role="alert">
        Vergeet niet om je <a class="alert-link" href="/games">voorspellingen</a> in te vullen!
    </div>
@else
    <div class="alert alert-success alert-important" role="alert">
        Je hebt alle voorspellingen ingevuld!
    </div>
@endif
<div class="row">
    <div class="col-sm-12 col-lg-6 col-xl-3 p-4 bg-dark text-center text-white">
        <h2 class="pb-3">Wedstrijden vandaag</h2>
        @if (false === empty($todaysGames))
            <table class="table">
                <tbody>
                @foreach($todaysGames as $game)
                    <tr>
                        <td>{{ $carbon->setTimeFromTimeString("{$game->date} {$game->time}")->format('H:i') }}</td>
                        <td>
                            <img class="flag" src="/images/flags/{{$game->homeCountry->flag}}" /><br />
                            {{ html_entity_decode($game->homeCountry->name) }}
                        </td>
                        <td>
                            <img class="flag" src="/images/flags/{{$game->awayCountry->flag}}" /><br />
                            {{ html_entity_decode($game->awayCountry->name) }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>Geen wedstrijden vandaag.</p>
        @endif
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-3 p-4 bg-dark text-center text-white">
        <h2 class="pb-3">Komende wedstrijden</h2>
        @if (false === empty($upcommingGames))
            <table class="table">
                <tbody>
                @foreach($upcommingGames as $game)
                    <tr>
                        <td>
                            {{{ ($date = $carbon->setTimeFromTimeString("{$game->date} {$game->time}"))->format('d') }}}<br />
                            {{ $date->format('M') }}
                        </td>
                        <td>
                            <img class="flag" src="/images/flags/{{$game->homeCountry->flag}}" /><br />
                            {{ html_entity_decode($game->homeCountry->name) }}
                        </td>
                        <td>
                            <img class="flag" src="/images/flags/{{$game->awayCountry->flag}}" /><br />
                            {{ html_entity_decode($game->awayCountry->name) }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

    @if (false === empty($feed))
        <div class="col-sm-12 col-lg-6 col-xl-3 p-4">
            <h2 class="pb-3 text-center">Laatste nieuws</h2>
            <div class="list-group">
            @foreach($feed as $key => $item)
                @if ($key > 4) @php continue; @endphp @endif
                <a target="_blank" href="{{ $item->get_link() }}" class="list-group-item list-group-item-action">{{ $item->get_title() }}</a>
            @endforeach
            </div>
        </div>
    @endif
</div>
@endsection
