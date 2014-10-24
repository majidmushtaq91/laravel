@extends('layouts.default')

@section('content')

    <h2>Homepage</h2>
@stop


@section('sidebar')
@parent

<?php echo route('get.post.single') ?>
@stop
