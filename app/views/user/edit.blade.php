@extends('layouts.default')


@section('content')
    @if(isset($success))
        {{{$success}}}
    @endif
    {{ Form::model($user, array('route' => array('user.update', $user->id), 'class' => 'form', 'method' => 'put')) }}

        <li>
            {{ Form::label('email', 'Your Email') }}
            {{ Form::email('email')}}
            {{ $errors->first('email') }}

        </li>

        <li>
            {{ Form::label('password', 'Your Password') }}

            {{ Form::password('password', null, array('class' => 'form-controller', 'placeholder' => 'Enter your password'))}}
            {{ $errors->first('password') }}
        </li>

        <li>
            {{ Form::label('permission', 'Permission') }}

            {{ Form::select('permission', array(1 => 'Webmaster', 2 => 'Editor', 3 => 'Member'))}}
        </li>

        <li>
            {{ Form::submit('Save') }}

        </li>

    {{ Form::close() }}

@stop