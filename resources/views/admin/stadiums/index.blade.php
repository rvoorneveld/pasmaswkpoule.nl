@extends('layouts.app')

@section('content')
    <h1 class="clearfix">
        <a class="btn btn-primary float-right" href="/admin/stadiums/create">Stadion toevoegen</a>
        SECURE - Stadions
    </h1>
    @if (false === empty($stadiums))
        <table class="table table-sm table-hover">
            <thead>
            <tr>
                <th>Naam</th>
                <th align="right"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($stadiums as $stadium)
                <tr>
                    <td>{{ $stadium->name }}</td>
                    <td align="right">
                        <div class="btn-group btn-group-sm" role="group" aria-label="buttons">
                            <a href="/admin/stadiums/{{ $stadium->id }}/edit" class="btn btn-outline-secondary">bewerken</a>
                            <a href="/admin/stadiums/{{ $stadium->id }}/delete" class="btn btn-outline-danger">verwijderen</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>Er zijn nog geen stadions om weer te geven.</p>
    @endif

@endsection