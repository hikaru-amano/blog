<html>
    <head>
        <title>ブログ</title>
    </head>
    <body>
        @section('sidebar')
            
        @show

        <div class="container">
            @yield('title')
            @yield('content')
        </div>
    </body>
</html>