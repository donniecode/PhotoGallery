@extends('layouts.app')


@section('content')
    <h3>Index Album</h3>
    
    @if(count($albums) > 0)
        <?php
        $colcount = count($albums);
        $i = 1;
        ?>

    <div id="albums">
        <div class="container text-center">
            <div class="row">

                @foreach ($albums as $album)
                @if ($i == $colcount)
                    <div class="col-12">
                        <a href="/albums/ {{ $album->id }}">
                            <img  class="rounded" src="{{url('/storage/album_covers/')}}/{{$album->cover_image }}"   alt=" {{ $album->name }}">
                        </a>
                        <h4> {{ $album->name }}</h4>
                    </div>
                   
                @else
                    <div class="col">
                        <a href="/albums/ {{ $album->id }}">
                            <img  class="rounded" src="{{url('/storage/album_covers/')}}/{{$album->cover_image }}" width="100" height="100"  alt=" {{ $album->name }}">
                        </a>
                        <h4> {{ $album->name }}</h4>
                    </div>
                @endif
                @endforeach
            
            </div>
        </div>
    </div>
    @else
        <div class="alert alert-warning">
            No Albums To Display
        </div>
    @endif


@endsection