@extends('layouts.default')

@section('content')




<h1>{{{ $post->title}}}</h1>
<p>{{{$post->content }}}</p>

@stop

@section('sidebar')
@parent
<ul>
    <li>Hello WOrld</li>
</ul>
@stop
