@extends('layouts.app')

@section('content')
    <h1>Stadions</h1>
    @if (false === empty($stadiums))
        <table class="table">
            <thead>
                <tr>
                    <th scope="row">Naam</th>
                </tr>
            </thead>
            <tbody>
            @foreach($stadiums as $stadium)
                <tr>
                    <td>
                        <a href="{{$stadium->url}}" target="_blank">
                            {{$stadium->name}}
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>Er zijn nog geen stadia om weer te geven.</p>
    @endif

@endsection