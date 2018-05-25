@extends('layouts.app')
@section('content')
    @if (false === empty($stadiums))
        <h1>Stadions</h1>
        <div class="row">
            @foreach($stadiums as $stadium)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="/images/stadiums/{{ $stadium->image }}" data-holder-rendered="true">
                        <div class="card-body">
                            <h5>{{ $stadium->name }}</h5>
                            <p class="card-text">
                                {{{ html_entity_decode($stadium->description) }}}
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">{{ $stadium->city->name }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection