@extends('layout')

@section('title', 'about us')

@section('content')

<style>
 
    .container img{
        padding-top: 2%;
        width: 100%;
        height: 10%;
        
    }
    .container{
        padding-bottom:2% 
    }
    .about{
        margin-top:1rem; 
        background-color: #F2AAAA;
        border-radius:1rem;
    }
    .about p{
        padding:2%;
        text-align: center;
    }
</style>

<div class="aboutUs"style="background-color: #FBC095;">
    <div class="container" >
        <img src="{{Storage::url('banner.png')}}" alt="">
        <div class="about" >
            <p>
                Teatan is a beverage product in the form of contemporary tea which is intended for all people and all ages.
                Teatan is a product that is different from existing products in general because Teatan does not open stores anywhere and in any form.
                Teatan operates completely online.
                Teatan sells high quality tea and uses selected tea leaves.
                The unique impression given by Teatan is the main highlight of the product.
                
            </p>
        </div>
    </div>
</div>
    
@endsection