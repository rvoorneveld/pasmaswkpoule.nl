@php
    $carbon = new \Carbon\Carbon();
@endphp

@extends('layouts.app')

@section('carousel')
    @if (false === empty($images))
        @php
            $totalImages = count($images);
        @endphp
    <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        @for ($i = 0; $i < $totalImages; $i++)
            <li data-target="#carouselIndicators" data-slide-to="{{ $i }}"{{ $i === 0 ? ' class="active"' : '' }}></li>
        @endfor
        </ol>
        <div class="carousel-inner">
            @foreach ($images as $key => $image)
                <div class="carousel-item{{ $key === 0 ? ' active' : '' }}" style="background-image: url('/images/carousel/{{ $image->getFileName() }}');"></div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Vorige</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Volgende</span>
        </a>
    </div>
    @endif
@endsection

@section('content')
<h1>Welkom {{ Auth::user()->name }}</h1>
@if (true === $showFillPredictionsAlert)
    <div class="alert alert-warning alert-important" role="alert">
        <a class="alert-link" href="/games">Vergeet niet om je voorspellingen in te vullen!</a>
    </div>
@endif
@if (false === empty($lastPredictionsScore))
    <div class="alert alert-primary alert-important" role="alert">
        <h4 class="alert-heading">Jouw punten</h4>
        <a class="alert-link" href="/ranking">Je hebt afgelopen ronde {{ $lastPredictionsScore->points ?? 0 }} punt(en) behaald!</a>
    </div>
@endif
<div class="row">
    <div class="col-sm-12 col-lg-6 col-xl-4 p-4 bg-dark text-center text-white">
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

    <div class="col-sm-12 col-lg-6 col-xl-4 p-4 bg-dark text-center text-white">
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
        <div class="col-sm-12 col-lg-6 col-xl-4 p-4">
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
