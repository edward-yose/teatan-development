@extends('layout')

@section('title', 'Menu')

@section('content')

<style>
    .container{
        background-color: #F2AAAA;
        padding: 2%;
        border-radius: 1px;
        max-width: auto;

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
    .p{
        font-size: 14px;
        
    }

</style>


<div class="menucard" >
    <div class="container">
        <div class="row ">
            @foreach($drinks as $drink)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" style="background-color: #FBC095" src="{{url('/storage/'.$drink->photo)}}" alt="Card image cap">
                    <div class="card-body" style="background-color: #FF5C00 ;color: white">
                        <h5 class="card-title">{{$drink->name}}</h5>
                        <p class="card-text">{{$drink->description}}</p>
                        <form action="{{route('addToCart', $drink->id)}}" method="get">
                            @csrf
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


    @endsection
