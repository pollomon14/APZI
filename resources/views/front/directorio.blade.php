@extends('layouts.apzi')

@section('content')


    <!-- Start: 1 Row 2 Columns -->
    <div style="width: 100%;border-style: none;margin-top: 0%;">
        <div class="container" style="padding-left: 0;padding-right: 0;width: 100%;border-style: none;">
            <div class="row"
                style="width: 100%;margin-right: 0;margin-left: 0;margin-top: 0px;border-style: none;border-top: 1px solid #000c4f ;">
                <div class="col-md-6"
                    style="width: 50%;padding-right: 0px;padding-left: 0px;background: #f2f2f2;padding-bottom: 2%;">
                    <!-- Start: Filter -->
                    <div class="filter">

                        <i class="fa fa-filter" style="color: #000c4f;"></i>
                        <select>
                            <option value="">Todos</option>
                            <option value="">Servicios</option>
                            <option value="">Establecimientos</option>

                        </select>



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
        data-ride="carousel" data-duration="2000" data-interval="5000" data-pause="hover">

        <!--========= Indicators =========-->
        <ol class="carousel-indicators range_slides_carousel_indicators">
            <li data-target="#range_slides_4_columns_carousel" data-slide-to="0" class="active"></li>
            <li data-target="#range_slides_4_columns_carousel" data-slide-to="1"></li>
        </ol>

        <!--========= Wrapper for slides =========-->
        <div class="carousel-inner range_slides_carousel_inner" role="listbox">

            <!--========= First slide =========-->
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-3 col-sm-3 col-md-3 range_slides_item_image">
                        <a href="#"><img src="/assets/img/logo_ayf.jpg?h=4dc35bac5932914a057180585f180b9f"
                                alt="slider 01"></a>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 range_slides_item_image">
                        <a href="#"><img src="/assets/img/logo_natalia.jpg?h=789a48c45904bc1c3d09d4dc3af71e18"
                                alt="slider 02"></a>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 range_slides_item_image">
                        <a href="#"><img src="/assets/img/logo_hm.jpg?h=030130878473d49f6db7d3b355daf8c7"
                                alt="slider 03"></a>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 range_slides_item_image">
                        <a href="#"><img src="/assets/img/logo_ingenio.jpg?h=b57838d0cc01d94e66a2ba20f00673ce"
                                alt="slider 04"></a>
                    </div>
                </div>
            </div>

            <!--========= Second Slide =========-->
            <div class="carousel-item">
                <div class="row">
                    <div class="col-3 col-sm-3 col-md-3 range_slides_item_image">
                        <a href="#"><img src="/assets/img/logo_baca.jpg?h=629ee1038807489bbfbe96a536ce78f9"
                                alt="slider 05"></a>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 range_slides_item_image">
                        <a href="#"><img src="/assets/img/logo_optica.jpg?h=36c61508d23bc1a2be7968c72483e464"
                                alt="slider 06"></a>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 range_slides_item_image">
                        <a href="#"><img src="/assets/img/logo_pistacho.jpg?h=3489c1774b8ee5d9fee7d2aabc49811a"
                                alt="slider 07"></a>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 range_slides_item_image">
                        <a href="#"><img src="/assets/img/logo_granja.jpg?h=a5f07921c30e0fe4a8cf138d501f6fdc"
                                alt="slider 08"></a>
                    </div>
                </div>
            </div>



        </div>

    </div>
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
                    <div class="col"><i class="fa fa-eject rubberBand animated infinite"
                            style="width: 100%;color: #000c4f;"></i>
                        <h1
                            style="width: 100%;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';color: #000c4f;margin-bottom: 0;">
                            Ver</h1>
                        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">
                            Portafolio</h1>
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
                    <a href="tel:{{ $dir->telefono }}"><i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-phone"
                        style="color: #000c4f;"></i><i class="fa fa-angle-double-left"
                        style="margin-left: 5%;color: #000c4f;"></i>
                    <h1
                        style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                        <br>{{ $dir->telefono }}<br><br>
                    </h1></a>
                </div>
                <div class="col" style="width: 50%;padding-left: 0;padding-right: 0;">
                <a href="https://api.whatsapp.com/send?phone=+57%20{{ $dir->whatsapp }}"><i class="fa fa-angle-double-right"
                        style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-whatsapp"
                        style="color: #000c4f;font-weight: bold;"></i><i class="fa fa-angle-double-left"
                        style="margin-left: 5%;color: #000c4f;"></i>
                    <h1
                        style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                        <br>{{ $dir->whatsapp }}<br><br>
                    </h1></a>
                </div>
            </div>
            @elseif (!is_null($dir->telefono)&& is_null($dir->whatsapp))
            <div class="row" style="background: #f2f2f2;">
                <div class="col"
                    style="width: 100%;padding-left: 0;padding-right: 0;border-top: 1px none #000c4f ;border-left: 1px solid #000c4f ;">
                    <a href="tel:{{ $dir->telefono }}"><i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-phone"
                        style="color: #000c4f;"></i><i class="fa fa-angle-double-left"
                        style="margin-left: 5%;color: #000c4f;"></i>
                    <h1
                        style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                        <br>{{ $dir->telefono }}<br><br>
                    </h1></a>
                </div>
            </div>
            @elseif (is_null($dir->telefono)&&!is_null($dir->whatsapp))
            <div class="row" style="background: #f2f2f2;">
                <div class="col" style="width: 100%;padding-left: 0;padding-right: 0; border-left: 1px solid #000c4f ;">
                <a href="https://api.whatsapp.com/send?phone=+57%20{{ $dir->whatsapp }}"><i class="fa fa-angle-double-right"
                        style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-whatsapp"
                        style="color: #000c4f;font-weight: bold;"></i><i class="fa fa-angle-double-left"
                        style="margin-left: 5%;color: #000c4f;"></i>
                    <h1
                        style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                        <br>{{ $dir->whatsapp }}<br><br>
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
                    <div class="col">
                        <a href="https://drive.google.com/uc?id={{$dir->catalogo}}"><i class="fa fa-eject rubberBand animated infinite"
                            style="width: 100%;color: #000c4f;"></i>
                        <h1
                            style="width: 100%;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';color: #000c4f;margin-bottom: 0;">
                            Ver</h1>
                        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">
                            Portafolio</h1></a>
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
                    <a href="tel:{{ $dir->telefono }}"><i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-phone"
                        style="color: #000c4f;"></i><i class="fa fa-angle-double-left"
                        style="margin-left: 5%;color: #000c4f;"></i>
                    <h1
                        style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                        <br>{{ $dir->telefono }}<br><br>
                    </h1></a>
                </div>
                <div class="col" style="width: 50%;padding-left: 0;padding-right: 0;">
                <a href="https://api.whatsapp.com/send?phone=+57%20{{ $dir->whatsapp }}"><i class="fa fa-angle-double-right"
                        style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-whatsapp"
                        style="color: #000c4f;font-weight: bold;"></i><i class="fa fa-angle-double-left"
                        style="margin-left: 5%;color: #000c4f;"></i>
                    <h1
                        style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                        <br>{{ $dir->whatsapp }}<br><br>
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
                                    <a href="tel:{{ $dir->telefono }}"><h1
                                        style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';margin-bottom: 0;padding-bottom: 1%;padding-top: 1%;">
                                        <br><i class="fa fa-angle-double-right"
                                            style="color: #000c4f;margin-right: 2%;"></i><i class="fa fa-phone"
                                            style="color: #000c4f;"></i><i class="fa fa-angle-double-left"
                                            style="color: #000c4f;margin-left: 2%;"></i>&nbsp;
                                        {{ $dir->telefono }}<br><br>
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
@endsection