@extends('layouts.apzi')

@section('content')



<div class="container" style="width: 100%;padding-right: 0px;padding-left: 0px;margin-top: 5%;text-align: center;">
    <figure class="figure" style="width: 20%;border-radius: 4px;border: 1px solid #000c4f;"><img class="img-fluid figure-img" style="width: 60%;margin-bottom: 40%;margin-top: 10%;" src="/assets/img/btn_emergencias.svg?h=76fa7052ed4ac591ce833a0418a2c3b6">
        <figcaption class="figure-caption" style="width: 100%;margin-left: 0px;font-size: 10px;background: #000c4f;font-family: 'ITC Avant Garde Gothic Std Medium';font-weight: normal;border-radius: 0;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;color: #fff;border-style: none;">Emergencias</figcaption>
    </figure>
    <figure class="figure" style="width: 20%;border-radius: 4px;border: 1px solid #000c4f;margin-left: 10%;"><img class="img-fluid figure-img" style="width: 60%;margin-bottom: 40%;margin-top: 10%;" src="/assets/img/servicios.svg?h=34a218e6ad61fda8d5a46ab79f024bef">
        <figcaption class="figure-caption" style="width: 100%;margin-left: 0px;font-size: 11px;background: #000c4f;font-family: 'ITC Avant Garde Gothic Std Medium';font-weight: normal;border-radius: 0;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;color: #fff;border-style: none;">Servicios</figcaption>
    </figure>
</div>
<h1 style="width: 94%;margin-left: 3%;color: #000c4f;font-size: 30px;font-family: 'ITC Avant Garde Gothic Std Medium';border-bottom: 2px solid #000c4f;line-height: 27px;margin-top: 5%;">Emergencias</h1><!-- Start: 1 Row 2 Columns -->
<!-- aqui -->






@foreach($emergencias as $emergencia)
<div style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
    <div class="container">
        <div class="row" style="width: 98%;margin-left: 1%;margin-right: 0;border: 1px solid #000c4f;border-radius: 4px;">
            <div class="col-md-6" style="width: 30%;padding-right: 0;padding-left: 0;">
                @if (is_null($emergencia->maps))
                @foreach($iconos as $icono)
                @if ($emergencia->id_icono === $icono->id) 
                <a href="{{$emergencia->maps}}" target="_blank">
                    <div class="row d-flex align-items-center" style="height: 100%;">
                        <div class="col"><img style="width: 80%;margin-top: 2%;" src="https://drive.google.com/uc?id={{ $icono->link }}"></div>
                    </div>
                </a>
                @break
                @endif ()
                @endforeach
                @elseif (is_null($emergencia->desplegable))
                @foreach($iconos as $icono)
                @if ($emergencia->id_icono === $icono->id)
                <a href="{{$emergencia->maps}}" target="_blank">
                    <div class="row d-flex align-items-center" style="height: 60%;">
                        <div class="col"><img style="width: 60%;margin-top: 2%;" src="https://drive.google.com/uc?id={{ $icono->link }}"></div>
                    </div>
                </a>
                @break
                @endif
                @endforeach
                <div class="row" style="margin-right: 0;margin-left: 0;">
                    <div class="col" style="padding-right: 0;padding-left: 0;"><i class="fa fa-map-marker rubberBand animated infinite" style="width: 100%;color: #000c4f;"></i>
                        <a href="{{$emergencia->maps}}" target="_blank">
                            <h1 style="width: 100%;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';color: #000c4f;margin-bottom: 0px;line-height: 6px;">Ubicación</h1>
                        </a>
                    </div>
                </div>
                @else
                @foreach($iconos as $icono)
                @if ($emergencia->id_icono === $icono->id)
                <a href="{{$emergencia->maps}}" target="_blank">
                    <div class="row d-flex align-items-center" style="height: 75%;">
                        <div class="col"><img style="width: 80%;margin-top: 2%;" src="https://drive.google.com/uc?id={{ $icono->link }}"></div>
                    </div>
                </a>
                @break
                @endif
                @endforeach
                <div class="row" style="margin-right: 0;margin-left: 0;">
                    <div class="col" style="padding-right: 0;padding-left: 0;"><i class="fa fa-map-marker rubberBand animated infinite" style="width: 100%;color: #000c4f;"></i>
                        <a href="{{$emergencia->maps}}" target="_blank">
                            <h1 style="width: 100%;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';color: #000c4f;margin-bottom: 0px;line-height: 6px;">Ubicación</h1>
                        </a>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-md-6" style="width: 70%;">
                <div class="row" style="border-bottom: 1px solid #000c4f;border-left: 1px solid #000c4f;background: #ffff00;border-top-right-radius: 4px;">
                    <div class="col" style="width: 90%;padding-right: 0;padding-left: 0;max-width: 90%;">
                        <h1 style="width: 90%;font-size: 14px;color: #000c4f;font-family: 'ITC Avant Garde Gothic Std Medium';line-height: 16px;margin-bottom: 0;text-align: center;margin-left: 5%;"><br>{{ $emergencia->nombre }}<br><br></h1>
                    </div>
                    @if (!is_null($emergencia->id_evento))
                    <div class="col" style="width: 10%;padding-right: 0;padding-left: 0;max-width: 10%;margin-top: -10px;">
                        <!-- Start: Modal commerce popup button -->
                        <div class="text-center" style="border-style: none;"><a class="stretched-link bs4_modal_trigger" href="#" data-modal-id="bs4_sngl_cmrce" data-toggle="modal" style="border-style: none;margin-top: 0;margin-right: 0;margin-bottom: 0;margin-left: 0;padding: 0;border-radius: 0px;"><i class="fa fa-star" style="color: #FFF;background: #000C4F;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;border-radius: 25px;border: 2px solid #ffff00 ;"></i></a>
                            <div id="bs4_sngl_cmrce" class="modal fade bs4_modal bs4_blue bs4_bg_white bs4_bd_black bs4_bd_semi_trnsp bs4_none_radius bs4_shadow_none bs4_center bs4_animate bs4FadeInDown bs4_duration_md bs4_easeOutQuint bs4_size_sngl_cmrce" role="dialog" data-modal-backdrop="true" data-show-on="click" data-modal-delay="false" data-modal-duration="false">
                                <div class="modal-dialog" style="background-color:#fff">
                                    <div class="modal-content"><a class="bs4_btn_x_out_shtr bs4_sngl_cmrce_close" href="#" data-dismiss="modal">X</a>
                                        <div class="row">
                                        @php
                                                $var= $eventos->find($emergencia->id_evento);
                                                $var2="x";
                                                $var3="x";
                                                $var4="x";
                                                if (!is_null($var)){
                                                    $var2=($var->titulo);
                                                }
                                                if (!is_null($var)){
                                                    $var3=($var->descripcion);
                                                }
                                                if (!is_null($var)){
                                                    $var4=($var->imagen);
                                                }
                                               
                                            @endphp
                                            <div class="col-12 col-md-5">
                                                <div class="bs4_sngl_cmrce_img"><img src="https://drive.google.com/uc?id={{ $var4 }}" alt="bs4_single_commerce_01" height="50%"/></div>
                                            </div>
                                            <div class="col-12 col-md-7" style="padding-bottom: 30px;">
                                                <div class="bs4_sngl_cmrce_txt">
                                                    <h1>{{ $var2 }}</h1>
                                                    <p style="padding-top: 15px;">{{ $var3 }}</p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End: Modal commerce popup button -->

                    </div>
                    @endif

                </div>
                <div class="row" style="background: #f2f2f2;border-bottom-right-radius: 4px;">
                    <div class="col" style="width: 50%;padding-left: 0;padding-right: 0;border-top: 1px none #000c4f ;border-right: 1px none #000c4f ;border-left: 1px solid #000c4f ;"><a href="tel:{{ $emergencia->telefono }}"><i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-phone" style="color: #000c4f;"></i><i class="fa fa-angle-double-left" style="margin-left: 5%;color: #000c4f;"></i>
                        <h1 style="font-size: 15px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';"><br>{{ $emergencia->telefono }}<br><br></h1></a>
                    </div>
                </div>
                @if (!is_null($emergencia->desplegable))
                @php
                                                $var= $emergencia->desplegable;
                                                $i = substr_count($var,"|");
                                                $var2= explode("|" ,$var);
                                                $var3= explode("-",$var2[0]);

                                            @endphp
                <div class="row">
                    <div class="col" style="border-left: 1px solid #000c4f;background: #000c4f;font-size: 14px;color: #fff;padding-right: 0;padding-left: 0;border-bottom-right-radius: 10px;">
                        <!-- Start: Mega Menu Dropdown 100% Editable - Ambrodu -->
                        <div class="dropdown megamenu" style="width: 100%;"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button" style="width: 100%;margin-right: 0;margin-bottom: 0;margin-left: 0;padding-right: 0;background: #000c4f;font-family: 'Montserrat Regular';border-bottom-style: none;border-bottom-color: #ffff00;border-radius: 0px;border-bottom-right-radius: 4px;">Ver Más Números&nbsp;</button>
                            <div class="dropdown-menu animate slideIn" style="background: #000c4f;">
                                <div class="container" style="padding-bottom: 0;">
                                    <div class="row">
                                        <div class="col-md-4">
                                        
                                        <hr style="background: #ffff00;">
                                        <a href="tel:{{$var3[0]}}">
                                                <h5 class="text-white" style="font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';line-height: 6px;"><i class="fa fa-phone" style="margin-right: 5%;margin-left: 5%;"></i>{{$var2[0]}}</h5>
                                              </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End: Mega Menu Dropdown 100% Editable - Ambrodu -->
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div><!-- End: 1 Row 2 Columns -->
@endforeach
@endsection