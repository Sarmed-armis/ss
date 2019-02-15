<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #6FA279;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 400;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }
            .RE{
              height: 400px;
              weight:400px;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 90px;
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
            .RR {
              color:#fff;
              font-size: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a  class"RR" href="{{ url('/home') }}">الرئيسيه</a>
                    @else
                        <a  class"RR" href="{{ route('login') }}">الدخول</a>

                        @if (Route::has('register'))
                            <a class"RR" href="{{ route('register') }}">يرجى التسجيل قبل الدخول</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
              <div class="container">
    <div class="row">
        <div class="col-xs-3">
            <a href="#" class="thumbnail">
              <img src="icon.jpg" class="img-responsive RE" alt="Hot Air Balloons">
            </a>
        </div>
        <p class="lead">Name:Haider</p>
        <p class="lead">supervised by zainab alqudsy</p>
        <p class="lead">level:fourth stage of computer scince</p>

            </div>
        </div>
    </body>
</html>
