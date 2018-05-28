@extends('layouts.app')

@section('carousel')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/carousel/lnvbl5jmxp7cpshbii1x.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/carousel/nmkfkdjgbakfzul9ckb5.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/carousel/whxuhveznu9jtq3h5byt.jpg" alt="Second slide">
            </div>
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
                    @foreach($todaysGames as $game)
                        <tr>
                            <th scope="row">{{ $game->time}}</th>
                            <td>{{ html_entity_decode($game->homeCountry->name) }}</td>
                            <td><img class="flag" src="/images/flags/{{$game->homeCountry->flag}}" /></td>
                            <td>-</td>
                            <td><img class="flag" src="/images/flags/{{$game->awayCountry->flag}}" /></td>
                            <td>{{ html_entity_decode($game->awayCountry->name) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>Geen wedstrijden vandaag.</p>
            @endif
        </div>

        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Eerstvolgende wedstrijden</h2>
            </div>
            @if (false === empty($upcommingGames))
                <table class="table">
                    <tbody>
                    @foreach($upcommingGames as $game)
                        <tr>
                            <th scope="row">{{ $game->time}}</th>
                            <td>{{ html_entity_decode($game->homeCountry->name) }}</td>
                            <td><img class="flag" src="/images/flags/{{$game->homeCountry->flag}}" /></td>
                            <td>-</td>
                            <td><img class="flag" src="/images/flags/{{$game->awayCountry->flag}}" /></td>
                            <td>{{ html_entity_decode($game->awayCountry->name) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>

    </div>
</div>
@endsection
