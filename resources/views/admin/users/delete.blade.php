@extends('layouts.app')

@section('content')
    <h1>Gebruiker verwijderen</h1>
    <form name="deleteUserForm" method="post" action="/admin/users/{{ $user->id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <div class="form-group">
            <label for="name">Naam</label>
            <input name="name" type="text" class="form-control" id="name" value="{{ $user->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" value="{{ $user->email }}" disabled>
        </div>
        <div class="form-group">
            <label for="isAdmin">Admin?</label>
            <select name="isAdmin" class="form-control" id="isAdmin" disabled>
                <option value="10"{{ (10 === $user->isAdmin) ? ' selected' : '' }}>Gebruiker</option>
                <option value="20"{{ (20 === $user->isAdmin) ? ' selected' : '' }}>Administrator</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Verwijderen</button>
    </form>
@endsection