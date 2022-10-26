@extends('layouts.app')


@section('content')
    <h3 class="title">{{ $photo->title }}</h3>
    <p>{{ $photo->description }}</p>
    <a href="/albums/{{ $photo->album_id }}">Back To Gallery</a>
    <hr>
    <img src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" alt="" srcset="">


    {!! Form::open(['action' => ['App\Http\Controllers\PhotosController@destroy', $photo->id], 'method' => 'POST']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete Photo', ['class' => 'btn btn-danger mt-2']) }}
    {!! Form::close() !!}

    <small>Size: {{ $photo->size }}</small>


@endsection