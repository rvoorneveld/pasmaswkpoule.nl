@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-7 col-xl-7 p-4 bg-dark text-center text-white">
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
                            <td>{{ $rank->name }}</td>
                            <td>
                                @if ($intRank <= 6)
                                    <h{{ $intRank }}>
                                        <span class="badge badge-light">{{ $rank->total ?? 0 }}</span>
                                    </h{{ $intRank }}>
                                @else
                                    {{ $rank->total ?? 0 }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>Er zijn nog geen scores om weer te geven.</p>
            @endif
        </div>
        <div class="col-sm-12 col-lg-5 col-xl-5 p-4 text-center">
            <h1>Top 10 - Afgelopen ronde</h1>
            @if (false === empty($topten))
                <table class="table">
                    <thead>
                    <tr>
                        <th>Plaats</th>
                        <th>Naam</th>
                        <th>Score</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($topten as $i => $toptenrow)
                        <tr>
                            <td>{{ $intRank = ($i + 1) }}</td>
                            <td>{{ $toptenrow->name }}</td>
                            <td>{{ $toptenrow->points ?? 0 }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection