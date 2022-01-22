@extends('layouts.master')

@include('layouts.navigation')

<form class="form-inline" method="POST" action="/home">
    @csrf
    <input class="form-control mr-sm-3" style="width: 90%"; type="search" placeholder="Search" aria-label="Search" name="search" id="search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
</form>

<div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 50px; margin-left: 300px; margin-right: 300px">
    @foreach($drinks as $drink)
        <div class="col">
            <div class="card" style="height: 100%">
                {{--            {{dd($drink->cover)}}--}}
                <img src="{{Storage::url($drink->cover)}}" class="card-img-top mx-auto" style="width: 100px; height: 250px;">
                <div class="card-body" style="background-color: sandybrown">
                    <h5 class="card-title">{{$drink->name}}</h5>
                    <div class="card-text">{{$drink->author}}</div>
                    <div class="card-text">{{$drink->price}}</div>
                    <form method="get" action="{{route('show-drink-detail', $drink->id)}}">
                        <button type="submit" class="btn btn-primary">View Detail</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="container d-flex justify-content-center p-4" style="margin-bottom: 5rem">
    {{$drinks->links()}}
</div>

@include('layouts.footer')
