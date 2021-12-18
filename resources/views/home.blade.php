@extends('layout')

@section('title', 'Home')

@section('content')

<style>
    .container{
        background-color: #F2AAAA;
        padding: 2rem;
        border-radius:1rem;

    }
    .menucard{
        background-color: #FBC095;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .col-sm-4{
        padding-bottom: 1rem;
    }
    .feature{
        background-image: url("https://th.bing.com/th/id/OIP.8kKESEvCL3gp4gUJKDLyVgHaE8?w=297&h=198&c=7&r=0&o=5&dpr=1.1&pid=1.7");
        height: 30rem;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding-bottom: 1rem;

    }
    .text-feat{
        display: flex;
        flex-direction: column;
        padding-left: 1rem;
        padding-top: 1rem;
        color: #d84a98;;

    }
    .card-img-top{
        height: 20%;
        background-color: #FBC095;
    }
    .card-body{
        color: white;
    }
</style>


<div class="menucard" >
    <div class="container">
        <div class="feature">
            <div class="text-feat">
                <h1>BanTea</h1>
                <p>the Banana Tea</p>
            </div>
        </div>
        <div class="row " style="padding-top: 1rem">
            @foreach($drinks as $drink)
            <div class="col-sm-4" >
                <div class="card" style="width: 18rem;background-color: #FBC095;" >
                    <img class="card-img-top mx-auto"  style="width:60%;" src="{{url('/storage/'.$drink->photo)}}" alt="Card image cap">
                    <div class="card-body" style="background-color: #FF5C00;">
                        <p class="card-text">{{$drink->name}}</p>
                        <h5 class="card-title">{{$drink->description}}</h5>
                    </div>
                </div>
            </div>

            @endforeach
{{--            <div class="col-sm-4" >--}}
{{--                <div class="card" style="width: 18rem;background-color: #FBC095;" >--}}
{{--                    <img class="card-img-top mx-auto" style=" width:53%;" src="{{Storage::url('matcha.png')}}" alt="Card image cap">--}}
{{--                    <div class="card-body" style="background-color: #FF5C00;">--}}
{{--                        <p class="card-text">Matchazilla</p>--}}
{{--                        <h5 class="card-title">  perfect for getting rid of the wear and tear caused by eating fried food but not buying a drink </h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4" >--}}
{{--                <div class="card" style="width: 18rem;background-color: #FBC095;" >--}}
{{--                    <img class="card-img-top mx-auto" style=" width:56%;" src="{{Storage::url('blushing.png')}}" alt="Card image cap">--}}
{{--                    <div class="card-body" style="background-color: #FF5C00;">--}}
{{--                        <p class="card-text">Blushing Tea</p>--}}
{{--                        <h5 class="card-title">An extraordinary mix between strawberry and tea! Blushing tea can make you blushed! it's limted so grab it fast! </h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>


    @endsection
