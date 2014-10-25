@extends('layouts.default')

@section('content')


<?php $i = 1; ?>
<table class="table">
    <tr>
        <th>Post #</th>
        <th>Title</th>
        <th>Posted By</th>
    </tr>
@foreach($posts as $post)

    <tr>
        <td>{{{$i}}}</td>
        <td>{{{$post->title}}}</td>
        <td>user id #</td>
    </tr>


<?php $i++?>
@endforeach

</table>
@stop

@section('sidebar')
@parent
<ul>
    <li>Hello WOrld</li>

</ul>
@stop
