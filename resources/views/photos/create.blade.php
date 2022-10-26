@extends('layouts.app')


@section('content')
    <h3>Upload Photo</h3>

    {!! Form::open(['action' => 'App\Http\Controllers\PhotosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    {{ Form::text('title', '', ['placeholder' => 'Photo Title', 'class' => 'mt-1 form-control form-group']) }}
    {{ Form::textarea('description', '', ['placeholder' => 'Photo Description', 'class' => 'mt-1 form-control form-group']) }}
    {{ Form::hidden('album_id', $album_id) }}
    {{ Form::file('photo', ['class' => 'mt-2']) }}
    <br>
    {{ Form::submit('submit', ['class' => 'btn btn-primary mt-2']) }}
    {!! Form::close() !!}

@endsection