@extends('layouts.app')

@section('content')
    <h1>Ranglijst</h1>
    @if (false === empty($ranking))
        <table class="table">
            <thead>
                <tr>
                    <th scope="row">Naam</th>
                    <th scope="row">Score</th>
                </tr>
            </thead>
            <tbody>
            @foreach($ranking as $i => $rank)
                <tr{{{ $i <= 3 ? ' class=table-success' : '' }}}>
                    <td>{{ $rank->user->name }}</td>
                    <td>{{ $rank->points }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>Er zijn nog geen scores om weer te geven.</p>
    @endif

@endsection