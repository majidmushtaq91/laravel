@extends('layouts.default')

@section('content')

<p>{{{ $user->email or 'Majid@samtechpk.com' }}}</p>
    @foreach($user->posts as $post )
        <li>
            {{{ $post->title }}}
        </li>
    @endforeach
@stop


@section('sidebar')
@parent


@stop
