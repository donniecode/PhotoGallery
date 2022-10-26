@extends('layouts.app')

@section('content')
    <h1>{{ $album->name }}</h1>
        <a href="/albums" class="btn btn-secondary">Go Back</a>
        <a href="/photos/create/{{ $album->id }}" class="btn btn-primary">Upload Photo To Album</a>
    <hr>

    @if(count($album->photos) > 0)
    <?php
    $colcount = count($album->photos);
    $i = 1;
    ?>

<div id="photos">
    <div class="container text-center">
        <div class="row">

            @foreach ($album->photos as $photo)
           
            @if ($i == $colcount)
                <div class="col">
                    <a href="/photos/ {{ $photo->id }}">
                        <img  class="rounded" src="{{url('/storage/photos/')}}/{{ $photo->album_id }}/{{$photo->photo }}"   alt=" {{ $photo->title }}">
                    </a>
                    <h4> {{ $photo->title }}</h4>
                </div>
               
            @else
                <div class="col">
                    <a href="/photos/ {{ $photo->id }}">
                        <img width="200" height="200"  class="rounded" src="{{url('/storage/photos/')}}/{{ $photo->album_id }}/{{$photo->photo }}"   alt=" {{ $photo->title }}">
                    </a>
                    <h4> {{ $photo->title }}</h4>
                </div>
            @endif
            @endforeach
        
        </div>
    </div>
</div>
@else
    <div class="alert alert-warning">
        No Photos To Display
    </div>
@endif


@endsection