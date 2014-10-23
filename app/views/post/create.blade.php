@extends('layouts.default')

@section('content')


@stop

@section('sidebar')
@parent
<ul>
    <li>Hello WOrld</li>
</ul>


    <form action="" method="post">
        <div class="field-group">
             <input type="text" name="title"/>
        </div>
        <div class="field-group">
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="submit"/>
    </form>

@stop
