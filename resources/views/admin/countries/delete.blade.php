@extends('layouts.app')

@section('content')
    <h1>Land verwijderen</h1>
    <form name="deleteCountriesForm" method="post" action="/admin/countries/{{ $country->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <div class="form-group">
            <label for="name">Naam</label>
            <input name="name" type="text" class="form-control" id="name" value="{{ $country->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="flag">Vlag</label>
            <input name="flag" type="text" class="form-control" id="flag" value="{{ $country->flag }}" disabled>
        </div>
        <div class="form-group">
            <label for="poule">Poule</label>
            <input name="poule" type="text" class="form-control" id="poule" value="{{ $country->poule }}" disabled>
        </div>
        <button type="submit" class="btn btn-primary">Verwijderen</button>
    </form>
@endsection