@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (false === empty($todaysGames))
                <div class="card">
                    <div class="card-header">Wedstrijden van de dag</div>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Tijd</th>
                                <th scope="col">Thuis</th>
                                <th scope="col"></th>
                                <th scope="col">Uit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($todaysGames as $todaysGame)
                            <tr>
                                <th scope="row">{{$todaysGame->time}}</th>
                                <td>{{$todaysGame->homeCountry->name}}</td>
                                <td>-</td>
                                <td>{{$todaysGame->awayCountry->name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
