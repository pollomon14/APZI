@extends('layouts.apzi')

@section('content')

    @foreach ($directorios as $dir)


        @if ($dir->tipo_de_plan === 1)
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
                            <div class="row">

<div class="col"
    style="border-left: 1px solid #000c4f;background: #000c4f;font-size: 14px;color: #fff;padding-top: 3%;padding-bottom: 3%;padding-right: 0;padding-left: 0;border-bottom-right-radius: 4px;">

    <span style="font-size: 14px;font-family: 'Montserrat Regular';">Ver Más
        Información</span><i class="fa fa-arrow-circle-right" style="margin-left: 5%;"></i>
</div>

</div>
                        </div>
                    </div>
                </div>
            </div><!-- End: 1 Row 2 Columns -->

        @endif


    @endforeach

    @include('front.menugeneral')
@endsection
