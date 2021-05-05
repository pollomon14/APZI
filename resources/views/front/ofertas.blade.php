@extends('layouts.apzi')

@section('content')
<div class="photo-gallery">
<div class="container-fluid">
  <div class="px-lg-5">

    <div class="row">
@foreach ($eventos as $even)

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm" style="border:1px solid #000c4f !important; border-radius: 4px !important;     box-shadow: 0px 2px 15px -3px #000 !important;"> <img src="https://drive.google.com/uc?id={{$even->imagen}}" alt="" class="img-fluid card-img-top" style="width:100%!important; ">
          <h3 style="font-size: 23px; font-family: 'ITC Avant Garde Gothic Std Demi';margin:3%; text-align:center; color: #000c4f;">{{$even->titulo}}</h3>
	
		  <div class="p-4" style="padding: 0rem!important;">
            
            <p class="small text-muted mb-0" style="margin-left:2%; margin-right:2%; font-size: 14px !important;color: #000c4f !important;font-family: 'Montserrat Regular'; text-align:center;">{{$even->descripcion}}</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill px-3 py-2 mt-4" style="justify-content: flex-end !important; border-radius: 0px 0px 4px 4px !important; margin-top:2% !important; background-color:#ffff00">
              <p class="small mb-0"><span class="font-weight-bold" style="color:#000c4f; font-family: 'Montserrat Regular'; text-align:right;">{{$even->texto_boton}} &nbsp;&nbsp;&nbsp;</span></p>
              @php
                                                $var= $iconos->find($even->id_icono);
                                                $var2="x";
                                                if (!is_null($var)){
                                                    $var2=($var->link);
                                                }
                                            @endphp
              <i class="{{$var2}}" style="color:#000c4f"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->
      @endforeach
      </div>
        </div>
      </div>
@endsection