@extends('layouts.default')

@section('content')

    @if(count($users) > 0)
        @foreach($users as $user)

        <p>{{{ $user->email }}}</p>
            {{{ $user->password or 'default value'}}}
        @endforeach;
    @endif

@stop
