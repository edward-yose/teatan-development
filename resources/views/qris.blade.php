@extends('layout')

@section('title', 'Payment')

@section('content')

<div class="qris" style="background-color: wheat;">
<div class="row mx-0 pt-5 d-flex justify-content-center" >
    <div class="col-xs-4 col-sm-6 col-md-5 col-lg-4 col-xl-3">
      <div class="card shadow-lg">
            <div class="card-header card-header-divider text-center pt-4" style="width: 150%; background-color: white "> <img src="https://1.bp.blogspot.com/-_aXTEL0Y66A/YI5zRDoUvnI/AAAAAAAAE4U/X9Z0En02MtQbVkYEiTPIDjOF9aSalKtagCLcBGAsYHQ/s1600/Logo%2BQRIS.png" class="img-fluid" style="max-height: 100px;" width="205" alt=""><br>
                <h3>Please Pay using DANA/OVO/GOPAY/LinkAJA</h3>
                <img src="https://media-cldnry.s-nbcnews.com/image/upload/t_fit-2000w,f_auto,q_auto:best/MSNBC/Components/Photo/_new/110322-qr-code-hmed-425p.jpg" style="width:300px; height: 300px;" alt=""> </div>
            <div class="card-body px-0" style="width: 150%; background-color: white">
              <p class="text-center"><small><strong>Total: Rp {{$total}}</strong></small></p>
              <p class="text-muted text-center">After payment your tea will be proceed !! <br>
               <br> Thank you for your purchase<br>
             </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

