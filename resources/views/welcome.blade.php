<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!--  CDN BOOTSTRAP -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            html, body { font-family: 'Nunito', sans-serif; font-weight: 200; margin: 0; box-sizing: border-box; }
            section { position: relative; height: 100vh; width: 100%; }
            .left, .right { width: 50%; }
            .left { background: url('/img/twiter.jpg') no-repeat;  background-size: cover; background-position: center; }
            img { width: 100%; }
            input { border:none; border-bottom: 1px solid #999; width: 50%;}
            span { font-weight: 600; }
            footer { position: absolute; bottom: 2%; font-size: 12px;}
        </style>
    </head>
    <body>
        <section class="d-flex flex-nowrap">
            <div class="left"></div>
            <div class="right d-flex justify-content-center align-items-center">
                <div class="container d-flex flex-column justify-content-center align-items-center">
              
                    <h1 class="title text-center">Welcome</h1>
                    @if (Route::has('login'))
                    <div>                       
                        @auth
                        <a href="{{ url('/twitter') }}" class="btn btn-outline-info">Tweet</a>
                       
                        <a class="btn btn-outline-info" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        @else
                        <a href="{{ route('login') }}" class="btn btn-outline-info">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-info">Register</a>
                        @endif
                    @endauth
                    </div>
                    @endif
                    <img src="/img/tweet.png" alt="tweet" />
                </div>
                <footer>2020 - Laure Compoint</footer>
            </div>
        </section>
    </body>
</html>