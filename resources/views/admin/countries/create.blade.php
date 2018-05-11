@extends('layouts.app')

@section('content')
    <form name="createCountriesForm" method="post" action="/admin/countries">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Naam</label>
            <input name="name" type="text" class="form-control" id="name" value="" required>
        </div>
        <button type="submit" class="btn btn-primary">Toevoegen</button>
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