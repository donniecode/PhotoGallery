@extends('layouts.app')


@section('content')
    <h3>Create Album</h3>

    {!! Form::open(['action' => 'App\Http\Controllers\AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    {{ Form::text('name', '', ['placeholder' => 'Album Name', 'class' => 'mt-1 form-control form-group']) }}
    {{ Form::textarea('description', '', ['placeholder' => 'Album Description', 'class' => 'mt-1 form-control form-group']) }}
    {{ Form::file('cover_image', ['class' => 'mt-2']) }}
    <br>
    {{ Form::submit('submit', ['class' => 'btn btn-primary mt-2']) }}
    {!! Form::close() !!}

@endsection