<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <style>
        * {
            font-family: sans-serif;
        }

        img {
            width: 70%;
        }

        .header {
            padding: 0%;
            margin: 0;
            background-color: #FF5C00;
            font-size: 25px;

        }

        .footer {
            display: flex;
            flex-direction: column;
            background-color: #FF5C00;

        }

        .footer img {
            width: 3%;
            background-color: #FF5C00;
            padding-bottom: 0.5rem;
        }

    </style>

</head>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


<body>
<div class=header>

    <nav class="navbar navbar-expand-lg navbar-light mr-md-0">
        <div class=navbar-head style="background-color: #FF5C00">
            <a class="navbar-brand" href="/" style="color: white; font-size:50px">
                <img src="{{Storage::url('TeaTanFULL.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse " id="navbarSupportedContent" style="padding-right:3%">
            <ul class="navbar-nav ml-auto">
                @if(\Illuminate\Support\Facades\Auth::user())
                    <li class="nav-item active">
                        <a class="nav-link active" style="color: white" href="{{route('show-home')}}"><p>Home</p>  <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" style="color: white" href="{{route('show-menu')}}"><p>Menu</p>  <span
                                class="sr-only">(current)</span></a>
                    </li>
                @endif
                <li class="nav-item active">
                    <a class="nav-link" href="/" style="color: white"><p>About Us</p></a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::guest())
                    <a href="/login">
                        <button type="button" class="btn btn-primary btn-lg">Login</button>
                    </a>
                @else
                    <a href="/login">
                        <button type="button" class="btn btn-primary btn-lg">Update Profile</button>
                    </a>
                @endif
            </ul>
        </div>
    </nav>
@yield('content')

</body>
</footer>

<div class="footer text-center">
    <p style="font-size:20px;"> Follow us at:</p>
    <a class="" href="https://www.instagram.com/the_tea_tan/">
        <img src="{{Storage::url('ig.png')}}" alt="">
    </a>
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-dark" href="\">TeaTan</a>
    </div>
</div>

</footer>
</html>
