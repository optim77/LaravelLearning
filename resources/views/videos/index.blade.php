@extends('master')
@section('content')
    <div class="row">

        @foreach($videos as $video)
            <div class="col-md-6">
                <div class="display-4">
                    <a href="{{  url('videos', $video->id)  }}">
                        {{ $video->title }}
                    </a>
                </div>
                <iframe class="rounded w-100 h-100" src="{{$video->embed}}?showinfo=0"></iframe>
                <div class="lead">{{$video->description}}</div>
                <div class="text-muted">{{$video->user->name}}</div>
            </div>


            @endforeach

    </div>
@stop