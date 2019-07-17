<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Cmpatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/css/all.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <a class="nav-icons" id="menu-btn"><i class="fa fa-bars"></i></a>
            <img id="logo" src="{{asset('/img/filmlist-logo.svg')}}" height="35">
            <a class="nav-icons" id="log-btn"><i class="fa fa-plus"></i></a>
        </header>
        <div id="nav">
            <div class="menu-bg"></div>
            <div class="content">
                <div class="head">
                    <a class="nav-icons" id="menu-btn-active"><i class="fa fa-bars"></i></a>
                    <img id="logo" src="{{asset('/img/filmlist-logo-blk.svg')}}" height="35">
                    <a class="nav-icons" id="log-btn active"><i class="fa fa-plus"></i></a>
                </div>
                <div class="links">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/') }}">Lists</a></li>
                        <li><a href="{{ url('/seen') }}">Seen</a></li>
                        <li><a href="{{ url('/watchlist') }}">Watchlists</a></li>
                    </ul>
                </div>
                <div class="popular-films">
                    <h3>Popular films</h3>
                </div>
            </div>
        </div>

        <div class="container">
            @yield('content')
        </div>
        <script src="{{asset('/js/main.js')}}"></script>
    </body>
</html>
