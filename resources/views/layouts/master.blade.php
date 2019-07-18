<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Cmpatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://unpkg.com/@barba/core"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/css/all.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>@yield('title')</title>
    </head>
    <body>

        <header>
            <img id="logo" src="{{asset('/img/filmlist-logo.svg')}}" height="35">
            <nav>
                <ul>
                    <li><a href="{{ url('/seen') }}">Seen</a></li>
                    <li><a href="{{ url('/') }}">Lists</a></li>
                    <li><a href="{{ url('/watchlist') }}">Watchlist</a></li>
                </ul>
            </nav>
            <a id="log-btn"><i class="fa fa-plus"></i>Log</a>
        </header>
        <div class="screen-wipe"></div>
        <div id="barba-wrapper">
            <div class="barba-container">
                <div class="container">
                    @yield('content')
                </div>
                <div class="wipe-bg transition-wipe">

                </div>
                <script src="{{asset('/js/color-thief.min.js')}}" type="text/javascript"></script>
                <script src="{{asset('/js/barba.min.js')}}" type="text/javascript"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
                <script src="{{asset('/js/main.js')}}"></script>
            </div>
        </div>

    </body>
</html>
