@extends('layouts.master')

@include('layouts.navigation')
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
</head>

<div class="about">

    <img style="width: 50%" class="" src="{{Storage::url("banner.png")}}" alt="">
</div>

@include('layouts.footer')
