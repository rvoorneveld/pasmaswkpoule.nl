@extends('layouts.app')

@section('content')
    <h1>Stadion toevoegen</h1>
    <form name="createStadiumsForm" method="post" action="/admin/stadiums">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Naam</label>
            <input name="name" type="text" class="form-control" id="name" value="" required>
        </div>
        <div class="form-group">
            <label for="url">Url</label>
            <input name="url" type="text" class="form-control" id="url" value="" required>
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