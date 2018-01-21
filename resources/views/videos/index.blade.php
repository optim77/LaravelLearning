@extends('master')
@section('content')
    <div class="row">

        @if(Session::has('video_created'))

            <div class="alert alert-success">{{Session::get('video_created')}}</div>

            @endif


        @foreach($videos as $video)
            <div class="col-md-12 p-5 mb-3">
                <div class="display-4">
                    <a href="{{  url('videos', $video->id)  }}">
                        {{ $video->title }}
                    </a>
                </div>
                <iframe class="rounded w-100 h-100" src="{{$video->embed}}?showinfo=0"></iframe>
                <div class="lead">{{str_limit($video->description,$limit = 80)}}</div>
                <div class="text-muted">{{$video->user->name}}</div>
            </div>


            @endforeach

    </div>
@stop