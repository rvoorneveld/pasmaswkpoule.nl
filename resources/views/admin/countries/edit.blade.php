@extends('layouts.app')

@section('content')
    <h1>Land bewerken</h1>
    <form name="editCountriesForm" method="post" action="/admin/countries/{{ $country->id }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label for="name">Naam</label>
            <input name="name" type="text" class="form-control" id="name" value="{{ $country->name }}" required>
        </div>
        <div class="form-group">
            <label for="poule">Poule</label>
            <input name="poule" type="text" class="form-control" id="poule" value="{{ $country->poule }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
        @if ($errors->any())
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </form>
@endsection