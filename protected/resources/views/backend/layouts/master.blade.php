<html>
    <head>
        <title>Admin - @yield('title')</title>
    </head>
    <body>
        <h1>Administrator</h1>
        @section('sidebar')
            <h3>Đây là sidebar chính.</h3>
        @show
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>