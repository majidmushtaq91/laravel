@extends('layouts.default')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{{{ $user->email or 'Majid@samtechpk.com' }}}</h3>
    </div>
    <div class="panel-body">
        @if(count($user->posts) > 0)
            @foreach($user->posts as $post )
                <li>
                    {{{ $post->title }}}
                </li>
            @endforeach
        @else
        <li>Nothing found !</li>
        @endif

    </div>
</div>

<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title">Categories</h3>
    </div>
    <div class="panel-body">
        @foreach($user->categories as $cat )
        <li>
            {{{ $cat->name }}}
        </li>
        @endforeach
    </div>
</div>
@stop


@section('sidebar')
@parent


@stop
