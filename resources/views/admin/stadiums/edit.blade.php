@extends('layouts.app')

@section('content')
    <form name="editStadiumsForm" method="post" action="/admin/stadiums/{{ $stadium->id }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label for="name">Naam</label>
            <input name="name" type="text" class="form-control" id="name" value="{{ $stadium->name }}" required>
        </div>
        <div class="form-group">
            <label for="url">Url</label>
            <input name="url" type="text" class="form-control" id="url" value="{{ $stadium->url }}" required>
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