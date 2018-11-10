<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Dev Meetup
        </div>
        <div class="links">
            <a href="{{url('about')}}">About</a>
            <a href="{{url('areas')}}">Find a meetup in your area</a>
            <a href="{{url('login')}}">Log In</a>
            <a href="{{url('register')}}">Create an Account</a>
        </div>
        <div>
            <h3>You are looking at the following meetup: {{$meetup->title}}</h3>
            <ul>
                <li>Date of Meetup: {{$meetup->date_of_meetup}}</li>
                <li>Location: {{$meetup->area_id}} </li>  <!-- TODO: fetch actual location instead of ID -->
                <li>{{$meetup->description}}</li>
                <li>create by user: {{$meetup->user_id}}</li> <!-- TODO: fetch actual username instead of ID -->
            </ul>
        </div>
    </div>
</div>
</body>
</html>
