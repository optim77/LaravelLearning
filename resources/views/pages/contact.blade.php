@extends('master')
@section('content')
<h2>Contact</h2>
    <h1 class="display-4">{{ $header  }}</h1>
    <h1 class="display-4">{{ $date->format('d:m:Y')  }}</h1>
    <h1 class="display-4">{{ $visited  }}</h1>
@stop