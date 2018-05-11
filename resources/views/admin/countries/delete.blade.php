@extends('layouts.app')

@section('content')
    <form name="deleteCountriesForm" method="post" action="/admin/countries/{{ $country->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <div class="form-group">
            <label for="name">Naam</label>
            <input name="name" type="text" class="form-control" id="name" value="{{ $country->name }}" disabled>
        </div>
        <button type="submit" class="btn btn-primary">Verwijderen</button>
    </form>
@endsection