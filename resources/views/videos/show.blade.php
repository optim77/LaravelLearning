@extends('master')
@section('content')



        <div class="col-md-6">
            <div class="display-4">
                {{ $video->title }}
            </div>
            <iframe class="rounded w-100 h-100" src="{{$video->embed}}?showinfo=0"></iframe>
            <div class="lead">{{$video->description}}</div>
            <div class="text-muted">{{$video->user->name}}</div>
            <a class="btn btn-warning" href="{{ action('VideosController@edit', $video->id)  }}">Edit</a>
        </div>



@stop