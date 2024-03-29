@extends('layouts.apzi')

@section('content')
<div class="carousel slide" data-ride="carousel" id="carousel-1" style="border-style: none;padding-top: 80px;">
        <div class="carousel-inner">
        @php
        $evencount=count($eventos);
        @endphp
        @for($i=0;$i<$evencount;$i++)
        @php
        $even=$eventos[$i];
        @endphp
       @if(($even->tipo===1)||($even->tipo===5))
        @if($i==0)
            <div class="carousel-item active">
        @else
        <div class="carousel-item ">
        @endif
            <img class="w-100 d-block"
                    src="https://drive.google.com/uc?id={{$even->imagen}}" alt="Slide Image" style="height:350px">
                   @php
                   $par = $i%2 
                   @endphp
                    @if ($par ===0)
                    <a href="{{$even->link}}"><h1
                    style="width: 100%;color: #fff;background: #000c4f;text-align: center;font-size: 16px;font-family: 'ITC Avant Garde Gothic Std Demi';font-weight: normal;margin-bottom: 0;padding-top: 1%;padding-bottom: 1%;border: 1px solid #000c4f ;">
                    @php
                                                $var3= $iconos->find($even->id_icono);
                                                $var4="x";
                                                if (!is_null($var3)){
                                                    $var4=($var3->link);
                                                }
                                            @endphp
                    <i class="{{$var4}}" style="font-weight: bold;"></i>&nbsp;{{$even->texto_boton}}
                </h1></a>
                @else
                <a href="{{$even->link}}"><h1
                    style="width: 100%;color: #000c4f;background: #ffff00;text-align: center;font-size: 16px;font-family: 'ITC Avant Garde Gothic Std Demi';font-weight: normal;margin-bottom: 0;padding-top: 1%;padding-bottom: 1%;border: 1px solid #000c4f ;">
                    @php
                                                $var3= $iconos->find($even->id_icono);
                                                $var4="x";
                                                if (!is_null($var3)){
                                                    $var4=($var3->link);
                                                }
                                            @endphp
                    <i class="{{$var4}}" style="font-weight: bold;"></i>&nbsp;{{$even->texto_boton}}
                </h1></a>
                @endif              
            </div>
@endif
                    @endfor 
        </div>
        
        <div style="width: 100%;color: var(--dark);">
            <!-- Start: Previous --><a class="carousel-control-prev" href="#carousel-1" role="button"
                data-slide="prev" style="padding-top:25%;"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a>
            <!-- End: Previous -->
            <!-- Start: Next --><a class="carousel-control-next" style="padding-top:25%;" href="#carousel-1" role="button" data-slide="next"><span
                    class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a><!-- End: Next -->
        </div>
    </div>
    @foreach ($eventos as $ev)
@if($ev->tipo===2)
    <!-- Start: Auto Modal Popup -->
    <div class="modal fade" role="dialog" tabindex="-1" id="contactModal"
        style="border: 1px solid #000c4f;border-radius: 4px;border-top-left-radius: 4;opacity: 1;background: rgba(0,0,0,0.7);">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header"
                    style="background: #ffff00;padding-top: 1%;padding-bottom: 1%;border-top: 1px solid #000c4f;border-right: 1px solid #000c4f;border-bottom: 1px solid #000c4f;border-left: 1px solid #000c4f;border-top-left-radius: 4px;border-top-right-radius: 4px;color: #000c4f;">
                    <h4 class="modal-title text-uppercase"
                        style="color: #000c4f;font-family: 'ITC Avant Garde Gothic Std Demi';">{{$ev->titulo}}</h4><button
                        type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #000c4f;opacity: 1; font-size: 2rem;"><span
                            aria-hidden="true" >×</span></button>
                </div>
                <div class="modal-body"
                    style="border-color: #ffff00;border-right: 1px solid #000c4f;border-bottom: 1px solid #000c4f;border-left: 1px solid #000c4f;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;">
                    <div class="row">
                        <div class="col-lg-6" style="width: 100%;"><img style="width: 100%;"
                                src="{{$ev->imagen}}">
                            <p
                                style="margin-top: 4%;font-family: 'Montserrat Regular';font-size: 14px;color: #000c4f;text-align: center;">
                                {{$ev->descripcion}}</p><button class="btn btn-primary" type="button" onclick="location.href='{{$ev->link}}'"
                                style="background: #000c4f;color: #fff;font-family: 'Montserrat Regular';">{{$ev->texto_boton}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End: Auto Modal Popup -->
    @endif

@endforeach

    <!-- Start: 1 Row 3 Columns -->
    @if($municipio->id ===1)
    <div
        style="width: 80%;margin-left: 10%;margin-right: 0%;margin-top: 10%;margin-bottom: 20%;border-style: none;border-left-style: none;box-shadow: 0px 0px 12px 0px;border-radius: 4px;">
        <div class="container"
            style="width: 100%;text-align: center;padding-right: 0;padding-left: 0;border-radius: 0;border-width: 1px;border-style: none;border-top-style: none;border-right-style: none;border-bottom-width: 2px;border-bottom-style: none;border-left-style: none; border-bottom-color: #000c4f;">
            <a href="{{ route('turismo', $municipio->id) }}">
            <div class="row"
                style=" border-bottom-color: #000c4f; width: 100%;padding-left: 0%;text-align: left;margin-left: 0;margin-top: 0;margin-right: 0;padding-right: 0%;margin-bottom: 0;border-bottom-width: 1px;border-bottom-style: solid;">
                <div class="col-md-4" style="width: 18%;padding: 0px;text-align: center;"><img
                        style="width: 90%;font-size: 16px;text-align: center;line-height: 22px;filter: contrast(100%);margin-top: 15%;margin-right: 0px;margin-bottom: 0px;margin-left: 5%;"
                        src="/assets/img/btn_soy_turista.svg?h=e09bcde756e83b96e09615f2248cc955"></div>
                <div class="col-9 col-md-4" style="width: 70%;padding: 0px;max-width: 70%;">
                    <h1
                        style="font-size: 20px;color: #000c4f;width: 90%;margin-bottom: 1%;line-height: 0px;margin-top: 10%;font-family: 'ITC Avant Garde Gothic Std Demi';margin-left: 4%;">
                        <strong>Soy turista</strong>
                    </h1>
                    <p
                        style=" color: #000c4f; width: 90%;margin-bottom: 4%;font-size: 12px;line-height: 12px;margin-top: 5%;font-weight: normal;font-family: 'Montserrat Regular';margin-left: 4%;">
                        Sitios turísticos y de interés &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </div>
               
                <div class="col-1 col-md-4"
                    style="width: 12%;text-align: left;padding-left: 2%;padding-right: 0;padding-top: 7%;max-width: 12%;"><i
                        class="fa fa-arrow-circle-right"
                        style="color: #000C4F;margin-right: 0px;line-height: 0px;margin-left: 0;width: 100%;font-size: 20px;text-align: left;padding-top: 0;"></i>
                </div>
            </div>
            </a>
        </div>
        <div class="container"
            style="width: 100%;text-align: center;padding-right: 0;padding-left: 0;border-radius: 0;border-width: 1px;border-style: none;border-top-style: none;border-right-style: none;border-bottom-width: 2px;border-bottom-style: none;border-left-style: none;border-bottom-color: #000c4f;">
            <a href="{{ route('directorio', $municipio->id) }}">
            <div class="row"
                style=" border-bottom-color: #000c4f; width: 100%;padding-left: 0%;text-align: left;margin-left: 0;margin-top: 0;margin-right: 0;padding-right: 0%;margin-bottom: 0;border-bottom-width: 1px;border-bottom-style: solid;">
                <div class="col-md-4" style="width: 18%;padding: 0px;text-align: center;"><img
                        style="width: 90%;font-size: 16px;text-align: center;line-height: 22px;filter: contrast(100%);margin-top: 15%;margin-right: 0px;margin-bottom: 0px;margin-left: 5%;"
                        src="/assets/img/btn_domicilios.svg?h=70ef7ca953911d3c38d1f9381ec09e36"></div>
                <div class="col-9 col-md-4" style="width: 70%;padding: 0px;max-width: 70%;">
                    <h1
                        style="font-size: 20px;color: #000c4f;width: 90%;margin-bottom: 1%;line-height: 0px;margin-top: 10%;font-family: 'ITC Avant Garde Gothic Std Demi';margin-left: 4%;">
                        <strong>Directorio</strong>
                    </h1>
                    <p
                        style=" color: #000c4f; width: 90%;margin-bottom: 4%;font-size: 12px;line-height: 12px;margin-top: 5%;font-weight: normal;font-family: 'Montserrat Regular';margin-left: 4%;">
                        Productos y servicios a domicilio</p>
                </div>
                
                    <div class="col-1 col-md-4"
                        style="width: 12%;text-align: left;padding-left: 2%;padding-right: 0;padding-top: 7%;max-width: 12%;"><i
                            class="fa fa-arrow-circle-right"
                            style="color: #000C4F;margin-right: 0px;line-height: 0px;margin-left: 0;width: 100%;font-size: 20px;text-align: left;padding-top: 0;"></i>
                    </div>
                
            </div></a>
        </div>
        <div class="container"
            style="width: 100%;text-align: center;padding-right: 0;padding-left: 0;border-radius: 0;border-width: 1px;border-style: none;border-top-style: none;border-right-style: none;border-bottom-width: 2px;border-bottom-style: none;border-left-style: none;border-bottom-color: #000c4f;">
            <a href="{{ route('taxis', $municipio->id) }}">
            <div class="row"
                style=" border-bottom-color: #000c4f; width: 100%;padding-left: 0%;text-align: left;margin-left: 0;margin-top: 0;margin-right: 0;padding-right: 0%;margin-bottom: 0;border-bottom-width: 1px;border-bottom-style: solid;">
                <div class="col-md-4" style="width: 18%;padding: 0px;text-align: center;"><img
                        style="width: 90%;font-size: 16px;text-align: center;line-height: 22px;filter: contrast(100%);margin-top: 15%;margin-right: 0px;margin-bottom: 0px;margin-left: 5%;"
                        src="/assets/img/btn_transporte.svg?h=c641b1c38fb0a679afac8483fb019b79"></div>
                <div class="col-9 col-md-4" style="width: 70%;padding: 0px;max-width: 70%;">
                    <h1
                        style="font-size: 20px;color: #000c4f;width: 90%;margin-bottom: 1%;line-height: 0px;margin-top: 10%;font-family: 'ITC Avant Garde Gothic Std Demi';margin-left: 4%;">
                        <strong>Transporte</strong>
                    </h1>
                    <p
                        style=" color: #000c4f; width: 90%;margin-bottom: 4%;font-size: 12px;line-height: 12px;margin-top: 5%;font-weight: normal;font-family: 'Montserrat Regular';margin-left: 4%;">
                        Servicio de Taxis, Mensajería y más</p>
                </div>
                
                <div class="col-1 col-md-4"
                    style="width: 12%;text-align: left;padding-left: 2%;padding-right: 0;padding-top: 7%;max-width: 12%;"><i
                        class="fa fa-arrow-circle-right"
                        style="color: #000C4F;margin-right: 0px;line-height: 0px;margin-left: 0;width: 100%;font-size: 20px;text-align: left;padding-top: 0;"></i>
                </div>
                
            </div></a>
        </div>
        <div class="container"
            style="width: 100%;text-align: center;padding-right: 0;padding-left: 0;border-radius: 0;border-bottom-left-radius: 4px;border-bottom-right-radius: 4px;border-width: 1px;border-style: none;border-top-style: none;border-right-style: none;border-bottom-width: 1px;border-bottom-style: none;border-left-style: none; border-bottom-color: #000c4f;">
            <a href="{{ route('emergencias', $municipio->id) }}">
            <div class="row"
                style=" border-bottom-color: #000c4f; width: 100%;padding-left: 0%;text-align: left;margin-left: 0;margin-top: 0;margin-right: 0;padding-right: 0%;margin-bottom: 0;border-bottom-width: 1px;border-bottom-style: none;">
                <div class="col-md-4" style="width: 18%;padding: 0px;text-align: center;"><img
                        style="width: 90%;font-size: 16px;text-align: center;line-height: 22px;filter: contrast(100%);margin-top: 15%;margin-right: 0px;margin-bottom: 0px;margin-left: 5%;"
                        src="/assets/img/btn_emergencias.svg?h=76fa7052ed4ac591ce833a0418a2c3b6"></div>

                    <div class="col-9 col-md-4" style="width: 70%;padding: 0px;max-width: 70%;">
                        <h1
                            style="font-size: 20px;color: #000c4f;width: 90%;margin-bottom: 1%;line-height: 0px;margin-top: 10%;font-family: 'ITC Avant Garde Gothic Std Demi';margin-left: 4%;">
                            <strong>Emergencias</strong>
                        </h1>
                        <p
                            style=" color: #000c4f; width: 90%;margin-bottom: 4%;font-size: 12px;line-height: 12px;margin-top: 5%;font-weight: normal;font-family: 'Montserrat Regular';margin-left: 4%;">
                            Atención de emergencias y servicios públicos</p>
                    </div>


                    <div class="col-1 col-md-4"
                        style="width: 12%;text-align: left;padding-left: 2%;padding-right: 0;padding-top: 7%;max-width: 12%;">
                        
                            <i class="fa fa-arrow-circle-right"
                                style="color: #000C4F;margin-right: 0px;line-height: 0px;margin-left: 0;width: 100%;font-size: 20px;text-align: left;padding-top: 0;"></i>
                        
                    </div>
                    

            </div></a>

        </div>
    </div><!-- End: 1 Row 3 Columns -->
    @elseif(($municipio->id ===2)||($municipio->id ===4))
    <div
        style="width: 80%;margin-left: 10%;margin-right: 0%;margin-top: 10%;margin-bottom: 20%;border-style: none;border-left-style: none;box-shadow: 0px 0px 12px 0px;border-radius: 4px;">
        <div class="container"
            style="width: 100%;text-align: center;padding-right: 0;padding-left: 0;border-radius: 0;border-width: 1px;border-style: none;border-top-style: none;border-right-style: none;border-bottom-width: 2px;border-bottom-style: none;border-left-style: none;border-bottom-color: #000c4f;">
            <a href="{{ route('directorio', $municipio->id) }}">
            <div class="row"
                style=" border-bottom-color: #000c4f; width: 100%;padding-left: 0%;text-align: left;margin-left: 0;margin-top: 0;margin-right: 0;padding-right: 0%;margin-bottom: 0;border-bottom-width: 1px;border-bottom-style: solid;">
                <div class="col-md-4" style="width: 18%;padding: 0px;text-align: center;"><img
                        style="width: 90%;font-size: 16px;text-align: center;line-height: 22px;filter: contrast(100%);margin-top: 15%;margin-right: 0px;margin-bottom: 0px;margin-left: 5%;"
                        src="/assets/img/btn_domicilios.svg?h=70ef7ca953911d3c38d1f9381ec09e36"></div>
                <div class="col-9 col-md-4" style="width: 70%;padding: 0px;max-width: 70%;">
                    <h1
                        style="font-size: 20px;color: #000c4f;width: 90%;margin-bottom: 1%;line-height: 0px;margin-top: 10%;font-family: 'ITC Avant Garde Gothic Std Demi';margin-left: 4%;">
                        <strong>Directorio</strong>
                    </h1>
                    <p
                        style=" color: #000c4f; width: 90%;margin-bottom: 4%;font-size: 12px;line-height: 12px;margin-top: 5%;font-weight: normal;font-family: 'Montserrat Regular';margin-left: 4%;">
                        Productos y servicios a domicilio</p>
                </div>
                
                    <div class="col-1 col-md-4"
                        style="width: 12%;text-align: left;padding-left: 2%;padding-right: 0;padding-top: 7%;max-width: 12%;"><i
                            class="fa fa-arrow-circle-right"
                            style="color: #000C4F;margin-right: 0px;line-height: 0px;margin-left: 0;width: 100%;font-size: 20px;text-align: left;padding-top: 0;"></i>
                    </div>
                
            </div></a>
        </div>
        <div class="container"
            style="width: 100%;text-align: center;padding-right: 0;padding-left: 0;border-radius: 0;border-width: 1px;border-style: none;border-top-style: none;border-right-style: none;border-bottom-width: 2px;border-bottom-style: none;border-left-style: none;border-bottom-color: #000c4f;">
            <a href="{{ route('taxis', $municipio->id) }}">
            <div class="row"
                style=" border-bottom-color: #000c4f; width: 100%;padding-left: 0%;text-align: left;margin-left: 0;margin-top: 0;margin-right: 0;padding-right: 0%;margin-bottom: 0;border-bottom-width: 1px;border-bottom-style: solid;">
                <div class="col-md-4" style="width: 18%;padding: 0px;text-align: center;"><img
                        style="width: 90%;font-size: 16px;text-align: center;line-height: 22px;filter: contrast(100%);margin-top: 15%;margin-right: 0px;margin-bottom: 0px;margin-left: 5%;"
                        src="/assets/img/btn_transporte.svg?h=c641b1c38fb0a679afac8483fb019b79"></div>
                <div class="col-9 col-md-4" style="width: 70%;padding: 0px;max-width: 70%;">
                    <h1
                        style="font-size: 20px;color: #000c4f;width: 90%;margin-bottom: 1%;line-height: 0px;margin-top: 10%;font-family: 'ITC Avant Garde Gothic Std Demi';margin-left: 4%;">
                        <strong>Transporte</strong>
                    </h1>
                    <p
                        style=" color: #000c4f; width: 90%;margin-bottom: 4%;font-size: 12px;line-height: 12px;margin-top: 5%;font-weight: normal;font-family: 'Montserrat Regular';margin-left: 4%;">
                        Servicio de Taxis, Mensajería y más</p>
                </div>
                
                <div class="col-1 col-md-4"
                    style="width: 12%;text-align: left;padding-left: 2%;padding-right: 0;padding-top: 7%;max-width: 12%;"><i
                        class="fa fa-arrow-circle-right"
                        style="color: #000C4F;margin-right: 0px;line-height: 0px;margin-left: 0;width: 100%;font-size: 20px;text-align: left;padding-top: 0;"></i>
                </div>
                
            </div></a>
        </div>
        <div class="container"
            style="width: 100%;text-align: center;padding-right: 0;padding-left: 0;border-radius: 0;border-bottom-left-radius: 4px;border-bottom-right-radius: 4px;border-width: 1px;border-style: none;border-top-style: none;border-right-style: none;border-bottom-width: 1px;border-bottom-style: none;border-left-style: none; border-bottom-color: #000c4f;">
            <a href="{{ route('emergencias', $municipio->id) }}">
            <div class="row"
                style=" border-bottom-color: #000c4f; width: 100%;padding-left: 0%;text-align: left;margin-left: 0;margin-top: 0;margin-right: 0;padding-right: 0%;margin-bottom: 0;border-bottom-width: 1px;border-bottom-style: none;">
                <div class="col-md-4" style="width: 18%;padding: 0px;text-align: center;"><img
                        style="width: 90%;font-size: 16px;text-align: center;line-height: 22px;filter: contrast(100%);margin-top: 15%;margin-right: 0px;margin-bottom: 0px;margin-left: 5%;"
                        src="/assets/img/btn_emergencias.svg?h=76fa7052ed4ac591ce833a0418a2c3b6"></div>

                    <div class="col-9 col-md-4" style="width: 70%;padding: 0px;max-width: 70%;">
                        <h1
                            style="font-size: 20px;color: #000c4f;width: 90%;margin-bottom: 1%;line-height: 0px;margin-top: 10%;font-family: 'ITC Avant Garde Gothic Std Demi';margin-left: 4%;">
                            <strong>Emergencias</strong>
                        </h1>
                        <p
                            style=" color: #000c4f; width: 90%;margin-bottom: 4%;font-size: 12px;line-height: 12px;margin-top: 5%;font-weight: normal;font-family: 'Montserrat Regular';margin-left: 4%;">
                            Atención de emergencias y servicios públicos</p>
                    </div>


                    <div class="col-1 col-md-4"
                        style="width: 12%;text-align: left;padding-left: 2%;padding-right: 0;padding-top: 7%;max-width: 12%;">
                        
                            <i class="fa fa-arrow-circle-right"
                                style="color: #000C4F;margin-right: 0px;line-height: 0px;margin-left: 0;width: 100%;font-size: 20px;text-align: left;padding-top: 0;"></i>
                        
                    </div>
                    

            </div></a>

        </div>
    </div><!-- End: 1 Row 3 Columns -->
    @else
    <div
        style="width: 80%;margin-left: 10%;margin-right: 0%;margin-top: 10%;margin-bottom: 20%;border-style: none;border-left-style: none;box-shadow: 0px 0px 12px 0px;border-radius: 4px;">
        <div class="container"
            style="width: 100%;text-align: center;padding-right: 0;padding-left: 0;border-radius: 0;border-width: 1px;border-style: none;border-top-style: none;border-right-style: none;border-bottom-width: 2px;border-bottom-style: none;border-left-style: none;border-bottom-color: #000c4f;">
            <a href="{{ route('directorio', $municipio->id) }}">
            <div class="row"
                style=" border-bottom-color: #000c4f; width: 100%;padding-left: 0%;text-align: left;margin-left: 0;margin-top: 0;margin-right: 0;padding-right: 0%;margin-bottom: 0;border-bottom-width: 1px;border-bottom-style: solid;">
                <div class="col-md-4" style="width: 18%;padding: 0px;text-align: center;"><img
                        style="width: 90%;font-size: 16px;text-align: center;line-height: 22px;filter: contrast(100%);margin-top: 15%;margin-right: 0px;margin-bottom: 0px;margin-left: 5%;"
                        src="/assets/img/btn_domicilios.svg?h=70ef7ca953911d3c38d1f9381ec09e36"></div>
                <div class="col-9 col-md-4" style="width: 70%;padding: 0px;max-width: 70%;">
                    <h1
                        style="font-size: 20px;color: #000c4f;width: 90%;margin-bottom: 1%;line-height: 0px;margin-top: 10%;font-family: 'ITC Avant Garde Gothic Std Demi';margin-left: 4%;">
                        <strong>Directorio</strong>
                    </h1>
                    <p
                        style=" color: #000c4f; width: 90%;margin-bottom: 4%;font-size: 12px;line-height: 12px;margin-top: 5%;font-weight: normal;font-family: 'Montserrat Regular';margin-left: 4%;">
                        Productos y servicios a domicilio</p>
                </div>
                
                    <div class="col-1 col-md-4"
                        style="width: 12%;text-align: left;padding-left: 2%;padding-right: 0;padding-top: 7%;max-width: 12%;"><i
                            class="fa fa-arrow-circle-right"
                            style="color: #000C4F;margin-right: 0px;line-height: 0px;margin-left: 0;width: 100%;font-size: 20px;text-align: left;padding-top: 0;"></i>
                    </div>
                
            </div></a>
        </div>
        <div class="container"
            style="width: 100%;text-align: center;padding-right: 0;padding-left: 0;border-radius: 0;border-bottom-left-radius: 4px;border-bottom-right-radius: 4px;border-width: 1px;border-style: none;border-top-style: none;border-right-style: none;border-bottom-width: 1px;border-bottom-style: none;border-left-style: none; border-bottom-color: #000c4f;">
            <a href="{{ route('emergencias', $municipio->id) }}">
            <div class="row"
                style=" border-bottom-color: #000c4f; width: 100%;padding-left: 0%;text-align: left;margin-left: 0;margin-top: 0;margin-right: 0;padding-right: 0%;margin-bottom: 0;border-bottom-width: 1px;border-bottom-style: none;">
                <div class="col-md-4" style="width: 18%;padding: 0px;text-align: center;"><img
                        style="width: 90%;font-size: 16px;text-align: center;line-height: 22px;filter: contrast(100%);margin-top: 15%;margin-right: 0px;margin-bottom: 0px;margin-left: 5%;"
                        src="/assets/img/btn_emergencias.svg?h=76fa7052ed4ac591ce833a0418a2c3b6"></div>

                    <div class="col-9 col-md-4" style="width: 70%;padding: 0px;max-width: 70%;">
                        <h1
                            style="font-size: 20px;color: #000c4f;width: 90%;margin-bottom: 1%;line-height: 0px;margin-top: 10%;font-family: 'ITC Avant Garde Gothic Std Demi';margin-left: 4%;">
                            <strong>Emergencias</strong>
                        </h1>
                        <p
                            style=" color: #000c4f; width: 90%;margin-bottom: 4%;font-size: 12px;line-height: 12px;margin-top: 5%;font-weight: normal;font-family: 'Montserrat Regular';margin-left: 4%;">
                            Atención de emergencias y servicios públicos</p>
                    </div>


                    <div class="col-1 col-md-4"
                        style="width: 12%;text-align: left;padding-left: 2%;padding-right: 0;padding-top: 7%;max-width: 12%;">
                        
                            <i class="fa fa-arrow-circle-right"
                                style="color: #000C4F;margin-right: 0px;line-height: 0px;margin-left: 0;width: 100%;font-size: 20px;text-align: left;padding-top: 0;"></i>
                        
                    </div>
                    

            </div></a>

        </div>
    </div><!-- End: 1 Row 3 Columns -->
    @endif
    <center>
        <h1
            style="width: 100%;margin-bottom: 4%;font-size: 16px;color: #000C4F;font-family: 'ITC Avant Garde Gothic Std Demi';">
            UN DIRECTORIO HECHO APP</h1>
    </center>
    @include('front.menugeneral')
@endsection
