<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Cmpatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css">
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <img id="logo" src="{{asset('/img/filmist-logo.svg')}}" height="40">
        </header>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
