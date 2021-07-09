@extends('layouts.apzi')

@section('content')
<div class="photo-gallery">
<div class="container-fluid">
  <div class="px-lg-5">

    <div class="row">
@foreach ($eventos as $even)

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm" style="border:1px solid #000c4f !important; border-radius: 4px !important;     box-shadow: 0px 2px 15px -3px #000 !important;"> <img src="https://drive.google.com/uc?id={{$even->imagen}}" alt="" class="img-fluid card-img-top" style="width:100%!important; height:200px; margin-top:5%;">
          <h3 style="font-size: 23px; font-family: 'ITC Avant Garde Gothic Std Demi';margin:3%; text-align:center; color: #000c4f;">{{$even->titulo}}</h3>
	
		  <div class="p-4" style="padding: 0rem!important;">
            
            <p class="small text-muted mb-0" style="margin-left:2%; margin-right:2%; font-size: 14px !important;color: #000c4f !important;font-family: 'Montserrat Regular'; text-align:center;">{{Str::limit($even->descripcion, 70, ' ...') }}</p>
            <a class="stretched-link bs4_modal_trigger" href="#" data-modal-id="bs4_sngl_cmrce{{ $even->id }}" data-toggle="modal" style="width:100%; border-style: none;margin-top: 0;margin-right: 0;margin-bottom: 0;margin-left: 0;padding: 0;border-radius: 0px;">
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
            </div></a>
          </div>
        </div>
      </div>
      <div id="bs4_sngl_cmrce{{ $even->id }}" class="modal fade bs4_modal bs4_blue bs4_bg_white bs4_bd_black bs4_bd_semi_trnsp bs4_none_radius bs4_shadow_none bs4_center bs4_animate bs4FadeInDown bs4_duration_md bs4_easeOutQuint bs4_size_sngl_cmrce" role="dialog" data-modal-backdrop="true" data-show-on="click" data-modal-delay="false" data-modal-duration="false" style="padding-top:20%">
                            
                           
                                        <!-- Start: Auto Modal Popup -->
    
            <div class="modal-content" style="background-color:#fff">
                <div class="modal-header"
                    style="background: #ffff00;padding-top: 1%;padding-bottom: 1%;border-top: 1px solid #000c4f;border-right: 1px solid #000c4f;border-bottom: 1px solid #000c4f;border-left: 1px solid #000c4f;border-top-left-radius: 4px;border-top-right-radius: 4px;color: #000c4f;">
                    <h4 class="modal-title text-uppercase"
                        style="color: #000c4f;font-family: 'ITC Avant Garde Gothic Std Demi';">{{$even->titulo}}</h4><button
                        type="button" class="close" data-dismiss="modal" onclick="location.reload();" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body"
                    style="border-color: #ffff00;border-right: 1px solid #000c4f;border-bottom: 1px solid #000c4f;border-left: 1px solid #000c4f;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;">
                    <div class="row">
                        <div class="col-lg-6" style="width: 100%;"><img style="width: 100%;"
                                src="https://drive.google.com/uc?id={{$even->imagen}}">
                            <p
                                style="margin-top: 4%;font-family: 'Montserrat Regular';font-size: 14px;color: #000c4f;text-align: center;">
                                {{$even->descripcion}}</p><button class="btn btn-primary" onclick="location.href='{{$even->link}}'" type="button"
                                style="background: #000c4f;color: #fff;font-family: 'Montserrat Regular';">{{$even->texto_boton}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End: Auto Modal Popup -->
                                   
                                 
                  
                     
      <!-- End -->
      @endforeach
      </div>
        </div>
      </div>
      @include('front.menugeneral')
@endsection