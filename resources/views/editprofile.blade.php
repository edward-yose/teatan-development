@extends('layout')

@section('title', 'Edit Profile')

@section('content')

<style>
 body {
    background: #BA68C8
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: #BA68C8;
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

</style>

<div class="editpro" style="background-color: wheat">


<div class="container rounded bg-white mt-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="row mt-2">
                <div class="d-flex flex-coluamn align-items-center text-center p-3 py-5">
            </div>
            <div class="row mt-2">
                <span class="font-weight-bold">{{$user->name}}</span>
            </div>
            <div class="row mt-5">
                <span class="text-black-50">{{$user->email}}</span></div>
            </div>
            <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Log Out</button></div>
        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <h6>Back to home</h6>
                    </div>
                    {{-- <h1 class="text-center">Edit Personal Profile</h1> --}}
                </div>

                <div class="row mt-1">
                    <h1 class="text-center">Edit Personal Profile</h1>
                </div>

                <form action="{{route('update-profile')}}" method="post">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="full name" value="{{$user->name}}"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Email" value="{{$user->email}}"></div>
                    </div>
                    <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                </form>


            </div>
        </div>
    </div>
</div>

</div>


@endsection
