@extends('master')
@section('content')

    <div class="row">

        @include('videos.form_errors')

        {!! Form::open(['url' => 'videos', 'class' => 'form-horizontal']) !!}

            @include('videos.form',['buttonText' => 'Add video'])

        {!! Form::close() !!}
    </div>

@stop