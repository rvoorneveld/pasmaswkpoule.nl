@extends('layouts.app')

@section('content')
    <form name="deleteUserForm" method="post" action="/admin/stadiums/{{ $stadium->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <div class="form-group">
            <label for="name">Naam</label>
            <input name="name" type="text" class="form-control" id="name" value="{{ $stadium->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="url">Url</label>
            <input name="url" type="text" class="form-control" id="url" value="{{ $stadium->url }}" disabled>
        </div>
        <button type="submit" class="btn btn-primary">Verwijderen</button>
    </form>
@endsection