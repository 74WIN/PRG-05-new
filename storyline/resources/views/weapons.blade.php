<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Weapons</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        main{
            border: solid black;
            background-color: #ffffff;
            padding: 20px;
            position: relative;
            display: flex;
        }
        .cardBorder{
            border: solid;
            padding: 20px;
            margin-bottom: 10px;
        }

        .buttonFavo{
            border: solid;
            border-radius: 30px;
            background-color: white;
            width: 150px;
            cursor: pointer;
            margin-bottom: 10px;
            text-align: center;
        }

        .buttonInfo{
            border: solid;
            border-radius: 30px;
            background-color: white;
            width: 100px;
            cursor: pointer;
            margin-bottom: 5px;
            text-align: center;
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
            font-size: 13px;
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
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Weapons
        </div>

        <div class="links">
            <a href="{{ url('/user') }}">Profile</a>
            <a href="{{ url('/weapon') }}">Weapons</a>
            <a href="{{ url('/element') }}">Elements</a>
            <a href="{{ url('/about') }}">About</a>

        </div>
    </div>
</div>
<main>
    <div id="cards">
        <div class="cardBorder" id="0">
            <img class="image" src=""/>
            <h2>Sword</h2>
            <p class="buttonInfo">Info</p>
            <p class="buttonFavo">Add Favorite</p>
        </div>
        <div class="cardBorder" id="1">
            <img class="image" src=""/>
            <h2>Axe</h2>
            <p class="buttonInfo">Info</p>
            <p class="buttonFavo">Add Favorite</p>
        </div>
        <div class="cardBorder" id="2">
            <img class="image" src=""/>
            <h2>Bow</h2>
            <p class="buttonInfo">Info</p>
            <p class="buttonFavo">Add Favorite</p>
        </div>
        <div class="cardBorder" id="3">
            <img class="image" src=""/>
            <h2>Dagger</h2>
            <p class="buttonInfo">Info</p>
            <p class="buttonFavo">Add Favorite</p>
        </div>
        <div class="cardBorder" id="4">
            <img class="image" src=""/>
            <h2>Staff</h2>
            <p class="buttonInfo">Info</p>
            <p class="buttonFavo">Add Favorite</p>
        </div>
        <div class="cardBorder" id="5">
            <img class="image" src=""/>
            <h2>Lance</h2>
            <p class="buttonInfo">Info</p>
            <p class="buttonFavo">Add Favorite</p>
        </div>
        <div class="cardBorder" id="6">
            <img class="image" src=""/>
            <h2>Long Sword</h2>
            <p class="buttonInfo">Info</p>
            <p class="buttonFavo">Add Favorite</p>
        </div>
    </div>
    <div id="box">
    </div>
</main>
</body>
</html>
