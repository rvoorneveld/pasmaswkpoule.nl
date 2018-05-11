@extends('layouts.app')

@section('content')
    <form name="editUserForm" method="post" action="/admin/users/{{ $user->id }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label for="name">Naam</label>
            <input name="name" type="text" class="form-control" id="name" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" value="{{ $user->email }}" required>
        </div>
        <div class="form-group">
            <label for="isAdmin">Admin?</label>
            <select name="isAdmin" class="form-control" id="isAdmin" required>
                <option value="10"{{ (10 === $user->isAdmin) ? ' selected' : '' }}>Gebruiker</option>
                <option value="20"{{ (20 === $user->isAdmin) ? ' selected' : '' }}>Administrator</option>
            </select>
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