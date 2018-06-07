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
                    <th>Paid</th>
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
                        <button type="button" class="btn btn-sm btn-info" disabled>{{ 20 === $user->isAdmin ? 'Administrator' : 'Gebruiker' }}</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm {{ ($hasPaid = null !== $user->hasPaid) ? 'btn-success' : 'btn-warning' }}" disabled>{{ true === $hasPaid ? "Betaald op {$user->hasPaid}" : 'Niet betaald' }}</button>
                    </td>
                    <td>{{{ $user->score->points ?? 0 }}}</td>
                    <td align="right">
                        <a href="/admin/users/{{ $user->id }}/edit">bewerken</a>
                        <a href="/admin/users/{{ $user->id }}/delete">verwijderen</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>Er zijn nog geen gebruikers om weer te geven.</p>
    @endif

@endsection