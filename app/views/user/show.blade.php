@extends('layouts.default')

@section('content')

<p>{{{ $user->email or 'Majid@samtechpk.com' }}}</p>

@stop
