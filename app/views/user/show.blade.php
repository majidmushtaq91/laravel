@extends('layouts.default')

@section('content')

<p>{{{ $user->email or 'Majid@samtechpk.com' }}}</p>

@stop


@section('sidebar')
@parent
<ul>
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
</ul>

@stop
