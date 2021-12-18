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
    .card .card-img-top{
        width: 100%;
        height: 25rem;
        align-items: center;
    }
    .card .card-text{
        font-size: 2rem;
        text-align: center;
        font-weight: bold;
        padding-top: 1rem;
        padding-bottom: 1rem; 
    }

</style>


<div class="menucard" >
    <div class="container">
        <div class="feature">
            <div class="text-feat">
                <h1 style=" font-weight: 700">BanTea</h1>
                <p style=" font-weight: 700">the Banana Tea</p>
            </div>
        </div>
        <div class="row " style="padding-top: 1rem">
            @foreach($drinks as $drink)
            <div class="col-sm-4" >
                <div class="card" style="width: 18rem;background-color: #FBC095;" >
                    <img class="card-img-top mx-auto"  style="width:60%;" src="{{url('/storage/'.$drink->photo)}}" alt="Card image cap">
                    <div class="card-body" style="background-color: #FF5C00;">
                        <p class="card-text">{{$drink->name}}</p>
                        <h5 class="card-title">T{{$drink->description}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


    @endsection
