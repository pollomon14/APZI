@extends('layouts.apzi')

@section('content')
    @if (isset($directorios))

    @foreach ($directorios as $dir)


                <!-- Start: 1 Row 2 Columns -->
                @if ($dir->tipo_de_plan === 4)
                    <div style="text-align: center;margin-top: 5%;margin-bottom: 5%; column-span: 90%">
                        <div class="container">
                            <div class="row caja"
                                style="width: 98%;margin-left: 1%;margin-right: 0;border: 1px solid #000c4f;border-radius: 4px;">
                                <div class="col-md-6" style="width: 30%;padding-right: 0;padding-left: 0;">
                                    <input type="hidden" name="domicilio" class="domicilio" value="{{ $dir->domicilio }}">

                @if (is_null($dir->direccion) && !is_null($dir->catalogo))
                                    <div class="row d-flex align-items-center" style="height: 62%;">
                                            @php
                                                $var= $iconos->find($dir->logo);
                                                $var2="x";
                                                if (!is_null($var)){
                                                    $var2=($var->link);
                                                }
                                                $var3= $subcategorias->find($dir->id_subcategoria);
                                                $var4="x";
                                                if (!is_null($var3)){
                                                    $var4=($var3->nombre);
                                                }
                                            @endphp
                                            <div class="col"><img style="width: 100px;border-radius: 10px;"
                                                    src="https://drive.google.com/uc?id={{ $var2 }}"></div>





                </div>
                 @elseif(!is_null($dir->catalogo))
                <div class="row d-flex align-items-center" style="height: 70%;">
                                            @php
                                                $var= $iconos->find($dir->logo);
                                                $var2="x";
                                                if (!is_null($var)){
                                                    $var2=($var->link);
                                                }
                                                $var3= $subcategorias->find($dir->id_subcategoria);
                                                $var4="x";
                                                if (!is_null($var3)){
                                                    $var4=($var3->nombre);
                                                }
                                            @endphp
                                            <div class="col"><img style="width: 100px;border-radius: 10px;"
                                                    src="https://drive.google.com/uc?id={{ $var2 }}"></div>



                </div>
                @else
                <div class="row d-flex align-items-center" style="height: 100%;">
                                            @php
                                                $var= $iconos->find($dir->logo);
                                                $var2="x";
                                                if (!is_null($var)){
                                                    $var2=($var->link);
                                                }
                                                $var3= $subcategorias->find($dir->id_subcategoria);
                                                $var4="x";
                                                if (!is_null($var3)){
                                                    $var4=($var3->nombre);
                                                }
                                            @endphp
                                            <div class="col"><img style="width: 100px;border-radius: 10px;"
                                                    src="https://drive.google.com/uc?id={{ $var2 }}"></div>



                </div>
                @endif
                @if(!is_null($dir->catalogo))
                <div class="row" style="height: 25%;margin-right: 0;margin-left: 0;">
                    <div class="col" style="padding:0;">
                        <!-- Start: Modal commerce popup button -->

                        <div class="text-center" style="border-style: none;">
                            <a class="stretched-link bs4_modal_trigger" href="#" data-modal-id="bs4_sngl_cmrce{{ $dir->id }}" data-toggle="modal" style="border-style: none;margin-top: 0;margin-right: 0;margin-bottom: 0;margin-left: 0;padding: 0;border-radius: 0px;">
                        <i class="fa fa-eject rubberBand animated infinite"
                            style="width: 100%;color: #000c4f;"></i>
                        <h1
                            style="width: 100%;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';color: #000c4f;margin-bottom: 0;">
                            Ver</h1>
                        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">
                            Portafolio</h1>
                    </a>
                            <div id="bs4_sngl_cmrce{{ $dir->id }}" class="modal fade bs4_modal bs4_blue bs4_bg_white bs4_bd_black bs4_bd_semi_trnsp bs4_none_radius bs4_shadow_none bs4_center bs4_animate bs4FadeInDown bs4_duration_md bs4_easeOutQuint bs4_size_sngl_cmrce" role="dialog" data-modal-backdrop="true" data-show-on="click" data-modal-delay="false" data-modal-duration="false">
                                <div class="modal-dialog" style="background-color:#fff">
                                    <div class="modal-content"><a class="bs4_btn_x_out_shtr bs4_sngl_cmrce_close" href="#" data-dismiss="modal">X</a>
                                        <div class="row" style="height: 100%;">

                                        <iframe src="https://drive.google.com/file/d/{{ $dir->catalogo }}/preview" height="100%" ></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End: Modal commerce popup button -->
                    </div>
                </div>
                @endif
                </div>
                <div class="col-md-6" style="width: 70%;">

                        <div class="row">
                            <div class="col" style="border-bottom: 1px solid #000c4f ;border-left: 1px solid #000c4f ;">
                                <span
                                    style="font-family: 'Montserrat Regular';color: #000c4f;font-size: 14px;">{{$var4}}</span>
                            </div>
                        </div>


            <div class="row" style="border-bottom: 1px solid #000c4f;border-left: 1px solid #000c4f;background: #ffff00;">
                <div class="col" style="width: 100%;padding-right: 0;padding-left: 0;">
                    <h1
                        style="width: 90%;font-size: 14px;color: #000c4f;font-family: 'ITC Avant Garde Gothic Std Medium';line-height: 16px;margin-bottom: 0;text-align: center;margin-left: 5%;">
                        <br>{{ $dir->nombre }}<br><br>
                    </h1>
                </div>
            </div>
            @if (!is_null($dir->direccion))
            <div class="row">
                <div class="col"
                    style="border-bottom: 1px solid #000c4f;border-left: 1px solid #000c4f;padding-right: 0;padding-left: 0;">
                    <h1
                        style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;font-weight: normal;margin-bottom: 5%;">
                        <br>{{ $dir->direccion }}<br>
                    </h1>
                </div>
            </div>
            @endif
            @if (!is_null($dir->telefono)&&!is_null($dir->whatsapp))
            <div class="row" style="background: #f2f2f2;">
                <div class="col"
                    style="width: 50%;padding-left: 0;padding-right: 0;border-top: 1px none #000c4f ;border-right: 1px solid #000c4f ;border-left: 1px solid #000c4f ;">
                    @php
                                                $var= $dir->telefono;
                                                $var2= explode("|" ,$var);
                                            @endphp
                    <button class="btn-submit"  onclick="realizaProceso('{{ $dir->id}}', '{{ $dir->nombre}}','{{ $dir->telefono}}','tel');return false;" ><i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-phone"
                    style="color: #000c4f;"></i><i class="fa fa-angle-double-left"
                    style="margin-left: 5%;color: #000c4f;"></i>
                <h1
                    style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                    <br>{{ $var2[0] }}<br><br>
                </h1></button>
                </div>
                <div class="col" style="width: 50%;padding-left: 0;padding-right: 0;">
                @php
                                                $var= $dir->whatsapp;
                                                $var2= explode("|" ,$var);
                                            @endphp
                       <button class="btn-submit"  onclick="realizaProceso('{{ $dir->id}}', '{{ $dir->nombre}}','{{ $dir->telefono}}','wp');return false;" ><i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-whatsapp"
                        style="color: #000c4f;"></i><i class="fa fa-angle-double-left"
                        style="margin-left: 5%;color: #000c4f;"></i>
                    <h1
                        style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                        <br>{{ $var2[0] }}<br><br>
                    </h1></button>
                </div>
            </div>
            @elseif (!is_null($dir->telefono)&& is_null($dir->whatsapp))
            <div class="row" style="background: #f2f2f2;">
                <div class="col"
                    style="width: 100%;padding-left: 0;padding-right: 0;border-top: 1px none #000c4f ;border-left: 1px solid #000c4f ;">
                    @php
                                                $var= $dir->telefono;
                                                $var2= explode("|" ,$var);
                                            @endphp



                     <button class="btn-submit"  onclick="realizaProceso('{{ $dir->id}}', '{{ $dir->nombre}}','{{ $dir->telefono}}','tel');return false;" ><i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-phone"
                            style="color: #000c4f;"></i><i class="fa fa-angle-double-left"
                            style="margin-left: 5%;color: #000c4f;"></i>
                        <h1
                            style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                            <br>{{ $var2[0] }}<br><br>
                        </h1></button>


                </div>
            </div>
            @elseif (is_null($dir->telefono)&&!is_null($dir->whatsapp))
            <div class="row" style="background: #f2f2f2;">
                <div class="col" style="width: 100%;padding-left: 0;padding-right: 0; border-left: 1px solid #000c4f ;">
                @php
                                                $var= $dir->whatsapp;
                                                $var2= explode("|" ,$var);
                                            @endphp
               <button class="btn-submit"  onclick="realizaProceso('{{ $dir->id}}', '{{ $dir->nombre}}','{{ $dir->telefono}}','wp');return false;" ><i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-whatsapp"
                style="color: #000c4f;"></i><i class="fa fa-angle-double-left"
                style="margin-left: 5%;color: #000c4f;"></i>
            <h1
                style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                <br>{{ $var2[0] }}<br><br>
            </h1></button>
                </div>
            </div>
            @endif

            <a href="{{route('local',[$dir->id,$municipio->id])}}">
                <div class="row">

                        <div class="col"
                            style="border-left: 1px solid #000c4f;background: #000c4f;font-size: 14px;color: #fff;padding-top: 3%;padding-bottom: 3%;padding-right: 0;padding-left: 0;border-bottom-right-radius: 4px;">
                            <span style="font-size: 14px;font-family: 'Montserrat Regular';">Ver Más Información</span><i
                                class="fa fa-arrow-circle-right" style="margin-left: 5%;"></i>
                        </div>
                </div>
            </a>
            </div>
            </div>
            </div>
            </div><!-- End: 1 Row 2 Columns -->
            @elseif ($dir->tipo_de_plan === 3)
                    <div style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
                        <div class="container">
                            <div class="row caja"
                                style="width: 98%;margin-left: 1%;margin-right: 0;border: 1px solid #000c4f;border-radius: 4px;">
                                <div class="col-md-6" style="width: 30%;padding-right: 0;padding-left: 0;">
                                    <div class="row d-flex align-items-center" style="height: 70%;">
                                        <input type="hidden" name="domicilio" class="domicilio" value="{{ $dir->domicilio }}">
                                            @php
                                                $var= $iconos->find($dir->logo);
                                                $var2="x";
                                                if (!is_null($var)){
                                                    $var2=($var->link);
                                                }
                                                $var3= $subcategorias->find($dir->id_subcategoria);
                                                $var4="x";
                                                if (!is_null($var3)){
                                                    $var4=($var3->nombre);
                                                }
                                            @endphp
                                            <div class="col"><img style="width: 100px;border-radius: 10px;"
                                                    src="https://drive.google.com/uc?id={{ $var2 }}"></div>



                </div>
                <div class="row" style="height: 25%;margin-right: 0;margin-left: 0;">
                     <div class="col" style="width: 10%;padding-right: 0;padding-left: 0;max-width: 10%;margin-top: -10px;">
                        <!-- Start: Modal commerce popup button -->

                        <div class="text-center" style="border-style: none;"><a class="stretched-link bs4_modal_trigger" href="#" data-modal-id="bs4_sngl_cmrce{{ $dir->id }}" data-toggle="modal" style="border-style: none;margin-top: 0;margin-right: 0;margin-bottom: 0;margin-left: 0;padding: 0;border-radius: 0px;">
                        <i class="fa fa-eject rubberBand animated infinite"
                            style="width: 100%;color: #000c4f;"></i>
                        <h1
                            style="width: 100%;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';color: #000c4f;margin-bottom: 0;">
                            Ver</h1>
                        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">
                            Portafolio</h1>
                    </a>
                            <div id="bs4_sngl_cmrce{{ $dir->id }}" class="modal fade bs4_modal bs4_blue bs4_bg_white bs4_bd_black bs4_bd_semi_trnsp bs4_none_radius bs4_shadow_none bs4_center bs4_animate bs4FadeInDown bs4_duration_md bs4_easeOutQuint bs4_size_sngl_cmrce" role="dialog" data-modal-backdrop="true" data-show-on="click" data-modal-delay="false" data-modal-duration="false">
                                <div class="modal-dialog" style="background-color:#fff">
                                    <div class="modal-content"><a class="bs4_btn_x_out_shtr bs4_sngl_cmrce_close" href="#" data-dismiss="modal">X</a>
                                        <div class="row" style="height: 100%;">

                                        <iframe src="https://drive.google.com/file/d/{{ $dir->catalogo }}/preview" height="100%" ></iframe>                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End: Modal commerce popup button -->




                    </div>
                </div>
                </div>
                <div class="col-md-6" style="width: 70%;">

                        <div class="row">
                            <div class="col" style="border-bottom: 1px solid #000c4f ;border-left: 1px solid #000c4f ;">
                                <span
                                    style="font-family: 'Montserrat Regular';color: #000c4f;font-size: 14px;">{{$var4}}</span>
                            </div>
                        </div>


            <div class="row" style="border-bottom: 1px solid #000c4f;border-left: 1px solid #000c4f;background: #ffff00;">
                <div class="col" style="width: 100%;padding-right: 0;padding-left: 0;">
                    <h1
                        style="width: 90%;font-size: 14px;color: #000c4f;font-family: 'ITC Avant Garde Gothic Std Medium';line-height: 16px;margin-bottom: 0;text-align: center;margin-left: 5%;">
                        <br>{{ $dir->nombre }}<br><br>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col"
                    style="border-bottom: 1px solid #000c4f;border-left: 1px solid #000c4f;padding-right: 0;padding-left: 0;">
                    <h1
                        style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;font-weight: normal;margin-bottom: 5%;">
                        <br>{{ $dir->direccion }}<br>
                    </h1>
                </div>
            </div>
            <div class="row" style="background: #f2f2f2;">
                <div class="col"
                    style="width: 50%;padding-left: 0;padding-right: 0;border-top: 1px none #000c4f ;border-right: 1px solid #000c4f ;border-left: 1px solid #000c4f ;">
                    @php
                                                $var= $dir->telefono;
                                                $var2= explode("|" ,$var);
                                            @endphp
                               <button class="btn-submit"  onclick="realizaProceso('{{ $dir->id}}', '{{ $dir->nombre}}','{{ $dir->telefono}}','tel');return false;" ><i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-phone"
                                style="color: #000c4f;"></i><i class="fa fa-angle-double-left"
                                style="margin-left: 5%;color: #000c4f;"></i>
                            <h1
                                style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                                <br>{{ $var2[0] }}<br><br>
                            </h1></button>
                </div>
                <div class="col" style="width: 50%;padding-left: 0;padding-right: 0;">
                @php
                                                $var= $dir->whatsapp;
                                                $var2= explode("|" ,$var);
                                            @endphp
               <button class="btn-submit"  onclick="realizaProceso('{{ $dir->id}}', '{{ $dir->nombre}}','{{ $dir->telefono}}','wp');return false;" ><i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-whatsapp"
                style="color: #000c4f;"></i><i class="fa fa-angle-double-left"
                style="margin-left: 5%;color: #000c4f;"></i>
            <h1
                style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                <br>{{ $var2[0] }}<br><br>
            </h1></button>
                </div>
            </div>

            <a href="{{route('local',[$dir->id,$municipio->id])}}">
                <div class="row">

                        <div class="col"
                            style="border-left: 1px solid #000c4f;background: #000c4f;font-size: 14px;color: #fff;padding-top: 3%;padding-bottom: 3%;padding-right: 0;padding-left: 0;border-bottom-right-radius: 4px;">
                            <span style="font-size: 14px;font-family: 'Montserrat Regular';">Ver Más Información</span><i
                                class="fa fa-arrow-circle-right" style="margin-left: 5%;"></i>
                        </div>

                </div>
            </a>
            </div>
            </div>
            </div>
            </div><!-- End: 1 Row 2 Columns -->
        @elseif ($dir->tipo_de_plan === 2)
            <!-- Start: 1 Row 2 Columns -->
            <div style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
                <div class="container">
                    <div class="row caja"
                        style="width: 98%;margin-left: 1%;margin-right: 0;border: 1px solid #000c4f;border-radius: 4px;">
                        <input type="hidden" name="domicilio" class="domicilio" value="{{ $dir->domicilio }}">
                        @php
                                                $var= $iconos->find($dir->logo);
                                                $var2="x";
                                                if (!is_null($var)){
                                                    $var2=($var->link);
                                                }
                                                $var3= $subcategorias->find($dir->id_subcategoria);
                                                $var4="x";
                                                if (!is_null($var3)){
                                                    $var4=($var3->nombre);
                                                }
                                            @endphp
                        <div class="col-md-6 d-flex align-items-center"
                            style="width: 30%;padding-right: 0;padding-left: 0;"><img style="width: 100%;"
                                src="https://drive.google.com/uc?id={{ $var2 }}"></div>
                        <div class="col-md-6" style="width: 70%;">
                            <div class="row">
                                <div class="col" style="border-bottom: 1px solid #000c4f ;border-left: 1px solid #000c4f ;">
                                    <span
                                        style="font-family: 'Montserrat Regular';color: #000c4f;font-size: 14px;">{{ $var4 }}</span>
                                </div>
                            </div>
                            <div class="row"
                                style="border-bottom: 1px solid #000c4f;border-left: 1px solid #000c4f;background: #ffff00;">
                                <div class="col" style="width: 100%;padding-right: 0;padding-left: 0;">
                                    <h1
                                        style="width: 90%;font-size: 14px;color: #000c4f;font-family: 'ITC Avant Garde Gothic Std Medium';line-height: 16px;margin-bottom: 0;text-align: center;margin-left: 5%;">
                                        <br>{{ $dir->nombre }}<br><br>
                                    </h1>
                                </div>
                            </div>
                            @if (!is_null($dir->direccion))
                            <div class="row">
                                <div class="col"
                                    style="border-bottom: 1px solid #000c4f;border-left: 1px solid #000c4f;padding-right: 0;padding-left: 0;">
                                    <h1
                                        style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;font-weight: normal;margin-bottom: 5%;">
                                        <br>{{ $dir->direccion }}<br>
                                    </h1>
                                </div>
                            </div>
                            @endif
                            @if (!is_null($dir->telefono))
                            <div class="row" style="background: #f2f2f2;">
                                <div class="col"
                                    style="width: 50%;padding-left: 0;padding-right: 0;border-top: 1px none #000c4f ;border-right: 1px none #000c4f ;border-left: 1px solid #000c4f ;">
                                    @php
                                                $var= $dir->telefono;
                                                $var2= explode("|" ,$var);
                                            @endphp
                                          <button class="btn-submit"  onclick="realizaProceso('{{ $dir->id}}', '{{ $dir->nombre}}','{{ $dir->telefono}}','tel');return false;" ><i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-phone"
                                            style="color: #000c4f;"></i><i class="fa fa-angle-double-left"
                                            style="margin-left: 5%;color: #000c4f;"></i>
                                        <h1
                                            style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                                            <br>{{ $var2[0] }}<br><br>
                                        </h1></button>
                                </div>
                            </div>
                            @endif
                            <a href="{{route('local',[$dir->id,$municipio->id])}}">
                            <div class="row">

                                    <div class="col"
                                        style="border-left: 1px solid #000c4f;background: #000c4f;font-size: 14px;color: #fff;padding-top: 3%;padding-bottom: 3%;padding-right: 0;padding-left: 0;border-bottom-right-radius: 4px;">

                                        <span style="font-size: 14px;font-family: 'Montserrat Regular';">Ver Más
                                            Información</span><i class="fa fa-arrow-circle-right" style="margin-left: 5%;"></i>
                                    </div>

                            </div>
                                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- End: 1 Row 2 Columns -->
        @elseif ($dir->tipo_de_plan === 1)
            <!-- Start: 1 Row 2 Columns -->
            <div style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
                <div class="container">
                    <div class="row caja"
                        style="width: 98%;margin-left: 1%;margin-right: 0;border: 1px solid #000c4f;border-radius: 4px;">
                        <div class="col-md-6" style="width: 100%;">
                            <input type="hidden" name="domicilio" class="domicilio" value="{{ $dir->domicilio }}">
                            <div class="row">
                            @php
                                                $var3= $subcategorias->find($dir->id_subcategoria);
                                                $var4="x";
                                                if (!is_null($var3)){
                                                    $var4=($var3->nombre);
                                                }
                                            @endphp
                                <div class="col" style="border-bottom: 1px solid #000c4f ;border-left: 1px none #000c4f ;">
                                    <span
                                        style="font-family: 'Montserrat Regular';color: #000c4f;font-size: 14px;">{{$var4}}</span>
                                </div>
                            </div>
                            <div class="row"
                                style="background: #ffff00;border-bottom: 1px solid #000c4f ;border-left: 1px none #000c4f ;">
                                <div class="col"
                                    style="width: 100%;padding-right: 0;padding-left: 0;border-left-style: none;">
                                    <h1
                                        style="width: 90%;font-size: 14px;color: #000c4f;font-family: 'ITC Avant Garde Gothic Std Medium';line-height: 16px;margin-bottom: 0;text-align: center;margin-left: 5%;">
                                        <br>{{ $dir->nombre }}<br><br>
                                    </h1>
                                </div>
                            </div>

                            @if (!is_null($dir->direccion)&& is_null($dir->telefono))
                            <div class="row">
                                <div class="col"
                                    style="padding-right: 0;padding-left: 0;border-left: 1px none #000c4f ;">
                                    <h1
                                        style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;font-weight: normal;margin-bottom: 5%;">
                                        <br>{{ $dir->direccion }}<br>
                                    </h1>
                                </div>
                            </div>
                            @elseif (!is_null($dir->direccion))
                            <div class="row">
                                <div class="col"
                                    style="padding-right: 0;padding-left: 0;border-bottom: 1px solid #000c4f ;border-left: 1px none #000c4f ;">
                                    <h1
                                        style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;font-weight: normal;margin-bottom: 5%;">
                                        <br>{{ $dir->direccion }}<br>
                                    </h1>
                                </div>
                            </div>
                            @endif
                            @if (!is_null($dir->telefono))
                            <div class="row"
                                style="background: #f2f2f2;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;">
                                <div class="col"
                                    style="width: 50%;padding-left: 0;padding-right: 0;border-top: 1px none #000c4f ;border-right: 1px none #000c4f ;border-left: 1px none #000c4f ;">
                                    <button class="btn-submit"  onclick="realizaProceso('{{ $dir->id}}', '{{ $dir->nombre}}','{{ $dir->telefono}}','tel');return false;" ><i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-phone"
                                        style="color: #000c4f;"></i><i class="fa fa-angle-double-left"
                                        style="margin-left: 5%;color: #000c4f;"></i>
                                    <h1
                                        style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                                        <br>{{ $dir->telefono}}<br><br>
                                    </h1></button>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div><!-- End: 1 Row 2 Columns -->

        @endif


    @endforeach

    @else
        <script>window.location = "/front/directorio/{{session()->get('municipio_id')}}";</script>
    @endif



    @include('front.menugeneral')
@endsection

