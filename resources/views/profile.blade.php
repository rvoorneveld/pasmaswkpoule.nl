@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-6 col-xl-6">
            <h1>Profiel</h1>
            <form method="post" name="updateProfileForm" action="/profile">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $user->email }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Naam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" value="{{ $user->name }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Opslaan</button>
            </form>
            <hr>
            <h1>Gravatar</h1>
        </div>
    </div>
@endsection