@extends('layout')

@section('title', 'Menu')

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
    .card .card-img-top{
        width: 100%;
        height: 40rem;
        align-items: center;
      
    }
    .card .card-title{
        font-size: 2rem;
        text-align: center;
        font-weight: bold;
        padding-top: 1rem;
        padding-bottom: 1rem; 

    }

</style>


<div class="menucard" >
    <div class="container">
        <div class="row ">
            @foreach($drinks as $drink)
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" style="background-color: #FBC095" src="{{url('/storage/'.$drink->photo)}}" alt="Card image cap">
                    <div class="card-body" style="background-color: #FF5C00 ;color: white">
                        <h5 class="card-title">{{$drink->name}}</h5>
                        <p class="card-text">{{$drink->description}}</p>
                        <a href="#" class="btn btn-primary">View Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


    @endsection
