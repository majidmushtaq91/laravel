@include('layouts.header')



@include('partials.menu')
<div class="container theme-showcase" role="main">
@yield('content')

@section('sidebar')
    <h2>Sidebar</h2>
@show
</div>


@include('layouts.header')
