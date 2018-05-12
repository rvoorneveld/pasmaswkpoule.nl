@extends('layouts.app')

@section('content')
    <h1>Gebruikers</h1>
    @if (false === empty($users))
        <table class="table table-sm table-hover">
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Score</th>
                    <th align="right"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <button type="button" class="btn btn-sm {{ ($isAdmin = 20 === $user->isAdmin) ? 'btn-outline-warning' : 'btn-outline-success' }}" disabled>{{ true === $isAdmin ? 'Administrator' : 'Gebruiker' }}</button>
                    </td>
                    <td>{{{ $user->score->points ?? 0 }}}</td>
                    <td align="right">
                        <div class="btn-group btn-group-sm" role="group" aria-label="buttons">
                            <a href="/admin/users/{{ $user->id }}/edit" class="btn btn-outline-secondary">bewerken</a>
                            <a href="/admin/users/{{ $user->id }}/delete" class="btn btn-outline-danger">verwijderen</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>Er zijn nog geen gebruikers om weer te geven.</p>
    @endif

@endsection