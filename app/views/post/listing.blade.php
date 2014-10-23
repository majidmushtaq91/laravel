@extends('layouts.default')

@section('content')


<?php $i = 1; ?>
@foreach($posts as $post)

    <h4>{{{$i}}} : {{{ $post->title}}}</h4>
    <p>{{{$post->content}}}</p>
    <i></i>
    <hr />

<?php $i++?>
@endforeach

@stop

@section('sidebar')
@parent
<ul>
    <li>Hello WOrld</li>

</ul>
@stop
