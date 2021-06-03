@extends('layouts.apzi')

@section('content')


    <!-- Start: 1 Row 2 Columns -->
    <div style="width: 100%;border-style: none;margin-top: 0%;    padding-top: 20%;position: fixed;z-index: 100;">
        <div class="container" style="padding-left: 0;padding-right: 0;width: 100%;border-style: none;">
            <div class="row"
                style="width: 100%;margin-right: 0;margin-left: 0;margin-top: 0px;border-style: none;">
                <div class="col-md-6"
                    style="width: 50%;padding-right: 0px;padding-left: 0px;background: #f2f2f2;padding-bottom: 2%;">
                    <!-- Start: Filter -->
                    <div class="filter">

                        <i class="fa fa-filter" style="color: #000c4f;"></i>
                        <?php $cate=1; ?>
                        {!! Form::open(['route' => ['busquedasCategorias', $cate], 'method' => 'categorias']) !!}
                            <select name='categorias' id='categorias' onchange="this.form.submit()">
                                <option value="Todos">Todos</option>
                                @foreach($categorias as $cat)
                                    <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="municipio" id="municipio" value={{ $municipio->id }} >

                        {!! Form::close() !!}


                    </div><!-- End: Filter -->
                </div>
                <div class="col-md-6" style="width: 50%;padding-left: 0px;background: #f2f2f2;padding-bottom: 2%;">
                    <div class="form-check" style="margin-left: 7%;margin-top: 3%;"><input class="form-check-input"
                            type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1"
                            style="font-family: 'Montserrat Regular';color: #000c4f;font-size: 13px;">Con domicilios</label>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End: 1 Row 2 Columns -->
    <!-- Start: 4 Col Small Slider -->
    <!--*-*-*-*-*-*-*-*-*-*- BOOTSTRAP CAROUSEL *-*-*-*-*-*-*-*-*-*-->

    <div id="range_slides_4_columns_carousel" class="carousel slide range_slides_carousel_wrapper swipe_x ps_easeOutCirc"
        data-ride="carousel" data-duration="2000" data-interval="5000" style="padding-top:35%" >



        <!--========= Wrapper for slides =========-->
        <div class="carousel-inner range_slides_carousel_inner" role="listbox">
         @php
        $count=count($destacados);
        @endphp

            @for($j=0;$j<$count;$j+=4)
            @if($j===0)
            <div class="carousel-item active">
                <div class="row">
            @else
        <div class="carousel-item">
                <div class="row">
            @endif
            @php
            if(($count-$j)>=4){
            $m=$j+4;
            }else{
            $m=$j+($count-$j);
            }
            @endphp
        @for($i=$j;$i<$m;$i++)
        @php
                                                $var= $iconos->find($destacados[$i]->logo);
                                                $var2="x";
                                                if (!is_null($var)){
                                                    $var2=($var->link);
                                                }

                                            @endphp

                    <div class="col-3 col-sm-3 col-md-3 range_slides_item_image">

                                            <a href="{{route('local',[$destacados[$i]->id,$municipio->id])}}">
                                            <img style="width: 100px;border-radius: 10px; position:auto; z-index:900"
                                                    src="https://drive.google.com/uc?id={{ $var2 }}"></a>
                                                    </div>

        @endfor

        </div></div>
        @endfor

    </div></div>
    <!--*-*-*-*-*-*-*-*-*-*- END BOOTSTRAP CAROUSEL *-*-*-*-*-*-*-*-*-*-->


    <!-- End: 4 Col Small Slider -->


    <h1
        style="width: 94%;margin-left: 3%;color: #000c4f;font-size: 30px;font-family: 'ITC Avant Garde Gothic Std Medium';border-bottom: 2px solid #000c4f;line-height: 27px;">
        A</h1><!-- Start: divider-text-middle -->
    <div style="text-align:center;"></div><!-- End: divider-text-middle -->
    @foreach ($directorio as $dir)

                <!-- Start: 1 Row 2 Columns -->
                @if ($dir->tipo_de_plan === 4)
                    <div style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
                        <div class="container">
                            <div class="row"
                                style="width: 98%;margin-left: 1%;margin-right: 0;border: 1px solid #000c4f;border-radius: 4px;">
                                <div class="col-md-6" style="width: 30%;padding-right: 0;padding-left: 0;">

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
                    <a href="tel:{{ $var2[0] }}"><i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-phone"
                        style="color: #000c4f;"></i><i class="fa fa-angle-double-left"
                        style="margin-left: 5%;color: #000c4f;"></i>
                    <h1
                        style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                        <br>{{ $var2[0] }}<br><br>
                    </h1></a>
                </div>
                <div class="col" style="width: 50%;padding-left: 0;padding-right: 0;">
                @php
                                                $var= $dir->whatsapp;
                                                $var2= explode("|" ,$var);
                                            @endphp
                <a href="https://api.whatsapp.com/send?phone=+57%20{{ $var2[0]  }}"><i class="fa fa-angle-double-right"
                        style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-whatsapp"
                        style="color: #000c4f;font-weight: bold;"></i><i class="fa fa-angle-double-left"
                        style="margin-left: 5%;color: #000c4f;"></i>
                    <h1
                        style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                        <br>{{ $var2[0] }}<br><br>
                    </h1></a>
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


                     <input type="hidden" name="id"  value="{{ $dir->id}}">
                     <input type="hidden" name="nombre" value="{{ $dir->nombre}}">
                     <input type="hidden" name="telefono" value="{{ $dir->telefono}}">
                     <input type="hidden" name="tipo" id="tipo" value="tel">
                     <button href="tel:{{ $var2[0] }}" class="btn-submit"><i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-phone"
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
                <a href="https://api.whatsapp.com/send?phone=+57%20{{ $var2[0] }}"><i class="fa fa-angle-double-right"
                        style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-whatsapp"
                        style="color: #000c4f;font-weight: bold;"></i><i class="fa fa-angle-double-left"
                        style="margin-left: 5%;color: #000c4f;"></i>
                    <h1
                        style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                        <br>{{ $var2[0] }}<br><br>
                    </h1></a>
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
                            <div class="row"
                                style="width: 98%;margin-left: 1%;margin-right: 0;border: 1px solid #000c4f;border-radius: 4px;">
                                <div class="col-md-6" style="width: 30%;padding-right: 0;padding-left: 0;">
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
                                            @endphp<a href="tel:{{ $var2[0] }}"><i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-phone"
                        style="color: #000c4f;"></i><i class="fa fa-angle-double-left"
                        style="margin-left: 5%;color: #000c4f;"></i>
                    <h1
                        style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                        <br>{{ $var2[0] }}<br><br>
                    </h1></a>
                </div>
                <div class="col" style="width: 50%;padding-left: 0;padding-right: 0;">
                @php
                                                $var= $dir->whatsapp;
                                                $var2= explode("|" ,$var);
                                            @endphp
                <a href="https://api.whatsapp.com/send?phone=+57%20{{ $var2[0] }}"><i class="fa fa-angle-double-right"
                        style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-whatsapp"
                        style="color: #000c4f;font-weight: bold;"></i><i class="fa fa-angle-double-left"
                        style="margin-left: 5%;color: #000c4f;"></i>
                    <h1
                        style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                        <br>{{ $var2[0] }}<br><br>
                    </h1></a>
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
                    <div class="row"
                        style="width: 98%;margin-left: 1%;margin-right: 0;border: 1px solid #000c4f;border-radius: 4px;">
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
                                    <a href="tel:{{ $var2[0] }}"><h1
                                        style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';margin-bottom: 0;padding-bottom: 1%;padding-top: 1%;">
                                        <br><i class="fa fa-angle-double-right"
                                            style="color: #000c4f;margin-right: 2%;"></i><i class="fa fa-phone"
                                            style="color: #000c4f;"></i><i class="fa fa-angle-double-left"
                                            style="color: #000c4f;margin-left: 2%;"></i>&nbsp;
                                        {{ $var2[0] }}<br><br>
                                    </h1></a>
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
                    <div class="row"
                        style="width: 98%;margin-left: 1%;margin-right: 0;border: 1px solid #000c4f;border-radius: 4px;">
                        <div class="col-md-6" style="width: 100%;">
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
                                    <a href="tel:{{ $dir->telefono }}"><h1
                                        style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';margin-bottom: 0;padding-top: 1%;padding-left: 1%;">
                                        <br><i class="fa fa-angle-double-right"
                                            style="color: #000c4f;margin-right: 2%;"></i><i class="fa fa-phone"
                                            style="color: #000c4f;"></i><i class="fa fa-angle-double-left"
                                            style="color: #000c4f;margin-left: 2%;"></i>&nbsp;
                                        {{ $dir->telefono }}<br><br>
                                    </h1></a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div><!-- End: 1 Row 2 Columns -->

        @endif


    @endforeach
    {{ $directorio->links() }}
    @include('front.menugeneral')


@endsection
