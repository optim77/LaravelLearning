@extends('master')
@section('content')

    <div class="row">

        @include('videos.form_errors')

        {!! Form::model($video,['method' => 'PATCH','class' => 'form-horizontal','action' => ['VideosController@update',$video->id]]) !!}

        @include('videos.form',['buttonText' => 'Edit video'])

        {!! Form::close() !!}
    </div>

@stop