@extends('layouts.app')

@section('content')
    <h1 class="clearfix">
        <a class="btn btn-primary float-right" href="/admin/countries/create">Land toevoegen</a>
        Landen
    </h1>
    @if (false === empty($countries))
        <table class="table table-sm table-hover">
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Vlag</th>
                    <th>Poule</th>
                    <th align="right"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($countries as $country)
                <tr>
                    <td>{{ $country->name }}</td>
                    <td>{{ $country->flag }}</td>
                    <td>{{ $country->poule }}</td>
                    <td align="right">
                        <div class="btn-group btn-group-sm" role="group" aria-label="buttons">
                            <a href="/admin/countries/{{ $country->id }}/edit" class="btn btn-outline-secondary">bewerken</a>
                            <a href="/admin/countries/{{ $country->id }}/delete" class="btn btn-outline-danger">verwijderen</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>Er zijn nog geen landen om weer te geven.</p>
    @endif

@endsection