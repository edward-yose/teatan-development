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
</style>


<div class="menucard" >
    <div class="container">
        <div class="row ">
            @foreach($drinks as $drink)
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{url('/storage/'.$drink->photo)}}" alt="Card image cap">
                    <div class="card-body">
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
