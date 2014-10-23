@extends('layouts.default')

@section('content')


@foreach($posts as $post)

<h1>{{{ $post->title}}}</h1>
@endforeach


@stop

@section('sidebar')
@parent
<ul>
    <li>Hello WOrld</li>
</ul>
@stop
