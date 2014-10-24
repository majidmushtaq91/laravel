<!---Include Header --->
@include('layouts.header')


<!---Include Navigation Bar --->
    @include('partials.menu')
        <div class="container theme-showcase" role="main">
            @yield('content')

            <!---Include Sidebar--->
            @section('sidebar')
                <h2>Sidebar</h2>
            @show
        </div>

<!---Include Footer --->
@include('layouts.footer')
