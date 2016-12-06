<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome To PhotoShare</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #0f0f0f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

    <div style='position:absolute;z-index:0;left:0;top:0;width:100%;height:100%'>
        <img src='/uploads/backgroundImg/background.jpg' style='width:100%;height:100%' alt='[]' />
    </div>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a class="loginStyle" href="{{ url('/login') }}">Login</a>
                    <a class="loginStyle" href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Welcome to PhotoShare
                </div>

                <div class="links loginStyle">
                    <a href='/image'>Gallery</a>
                    <a href='/photographers'>Photographers</a>
                    <a href='/forums'>Chatter</a>
                    <a href='/home'>Shop</a>
                    <a href='/home'>About Us</a>
                </div>



                <br>

                <br>
                <div class="btn-sample">
                    <a class="btn btn-primary" href="/image" role="button" style="font-size: 50px">Open The Website</a>

                </div>
            </div>
        </div>
    </body>
</html>
