@extends('layouts.app')

@section('content')
    <h1>Ranglijst</h1>
    @if (false === empty($ranking))
        <table class="table">
            <thead>
                <tr>
                    <th>Plaats</th>
                    <th>Naam</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
            @foreach($ranking as $i => $rank)
                <tr>
                    <td>{{ $intRank = ($i + 1) }}</td>
                    <td>{{ $rank->user->name }}</td>
                    <td>
                        @if ($intRank <= 6)
                            <h{{ $intRank }}>
                                <span class="badge badge-light">{{ $rank->points }}</span>
                            </h{{ $intRank }}>
                        @else
                            {{ $rank->points }}
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>Er zijn nog geen scores om weer te geven.</p>
    @endif

@endsection