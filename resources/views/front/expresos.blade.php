@extends('layouts.apzi')

@section('content')
<div class="container" style="width: 100%;padding-right: 0px;padding-left: 0px;text-align: center;padding-top:30%;">
    <a href="{{ route('taxis', $municipio->id) }}">    
    <figure class="figure" style="width: 20%;margin-left: 2%;border-radius: 4px;border: 1px solid #000c4f;"><img class="img-fluid figure-img" style="width: 60%;margin-bottom: 40%;margin-top: 10%;" src="/assets/img/taxi.svg?h=dc70e5134e1fec6b23f5ebad63e052d3">
            <figcaption class="figure-caption" style="width: 100%;margin-left: 0px;font-size: 11px;background: #000c4f;font-family: 'ITC Avant Garde Gothic Std Medium';font-weight: normal;border-radius: 0;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;color: #fff;border-style: none;">Taxis</figcaption>
        </figure>
</a>
<a href="{{ route('carga', $municipio->id) }}">   
        <figure class="figure" style="width: 20%;margin-left: 2%;border-radius: 4px;border: 1px solid #000c4f;"><img class="img-fluid figure-img" style="width: 60%;margin-bottom: 40%;margin-top: 10%;" src="/assets/img/carga.svg?h=b94c0d9cf3d22fbeedc7e6577f7812e2">
            <figcaption class="figure-caption" style="width: 100%;margin-left: 0px;font-size: 11px;background: #000c4f;font-family: 'ITC Avant Garde Gothic Std Medium';font-weight: normal;border-radius: 0;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;color: #fff;border-style: none;">Carga</figcaption>
        </figure>
</a>
<a href="{{ route('domiciliarios', $municipio->id) }}">
        <figure class="figure" style="width: 20%;margin-left: 2%;border-radius: 4px;border: 1px solid #000c4f;"><img class="img-fluid figure-img" style="width: 60%;margin-bottom: 40%;margin-top: 10%;" src="/assets/img/mensajeria.svg?h=83cf56c02d4376fdb121080cf3cb393a">
            <figcaption class="figure-caption" style="width: 100%;margin-left: 0px;font-size: 11px;background: #000c4f;font-family: 'ITC Avant Garde Gothic Std Medium';font-weight: normal;border-radius: 0;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;color: #fff;border-style: none;">Mensajeria</figcaption>
        </figure>
</a>
<a href="{{ route('expresos', $municipio->id) }}">
        <figure class="figure" style="width: 20%;margin-left: 2%;border-radius: 4px;border: 1px solid #000c4f;"><img class="img-fluid figure-img" style="width: 60%;margin-bottom: 40%;margin-top: 10%;" src="/assets/img/expreso.svg?h=631812cdefd91dd676358ff3380febc5">
            <figcaption class="figure-caption" style="width: 100%;margin-left: 0px;font-size: 11px;background: #000c4f;font-family: 'ITC Avant Garde Gothic Std Medium';font-weight: normal;border-radius: 0;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;color: #fff;border-style: none;">Expresos</figcaption>
        </figure>
</a>
    </div>
    <h1 style="width: 94%;margin-left: 3%;color: #000c4f;font-size: 30px;font-family: 'ITC Avant Garde Gothic Std Medium';border-bottom: 2px solid #000c4f;line-height: 27px;margin-top: 5%;">Expresos</h1>
    @foreach($transporte as $transp)
    @if(is_null($transp->id_icono))
    <!-- Start: 1 Row 2 Columns -->
    <div style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
        <div class="container">
            <div class="row" style="width: 98%;margin-left: 1%;margin-right: 0;border: 1px solid #000c4f;border-radius: 4px;border-top-left-radius: 4px;">
                <div class="col-md-6" style="width: 100%;">
                    <div class="row" style="background: #ffff00;border-top-right-radius: 4px;border-bottom: 1px solid #000c4f;border-left: 1px none #000c4f;border-top-left-radius: 4px;">
                        <div class="col" style="width: 100%;padding-right: 0;padding-left: 0;">
                            <h1 style="width: 90%;font-size: 14px;color: #000c4f;font-family: 'ITC Avant Garde Gothic Std Medium';line-height: 16px;margin-bottom: 0;text-align: center;margin-left: 5%;"><br>{{$transp->placa}}<br><br></h1>
                        </div>
                    </div>
                    <div class="row" style="background: #f2f2f2;border-bottom-right-radius: 4px;border-left-style: none;border-bottom-left-radius: 4px;">
                        <div class="col" style="width: 50%;padding-left: 0;padding-right: 0;border-top: 1px none #000c4f ;border-right: 1px none #000c4f ;border-left: 1px none #000c4f ;">
                        <a href="tel:{{$transp->telefono}}"><i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-phone" style="color: #000c4f;"></i><i class="fa fa-angle-double-left" style="margin-left: 5%;color: #000c4f;"></i>
                            <h1 style="font-size: 15px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';"><br>{{$transp->telefono}}<br><br></h1>
</a>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End: 1 Row 2 Columns -->
    @else
    <!-- Start: 1 Row 2 Columns -->
    <div style="text-align: center;margin-top: 5%;margin-bottom: 5%;">
        <div class="container">
            <div class="row" style="width: 98%;margin-left: 1%;margin-right: 0;border: 1px solid #000c4f;border-radius: 4px;">
                <div class="col-md-6" style="width: 30%;padding-right: 0;padding-left: 0;">
                    <div class="row d-flex align-items-center" style="height: 70%;">
                    @php
                                                $var= $iconos->find($transp->id_icono);
                                                $var2="x";
                                                if (!is_null($var)){
                                                    $var2=($var->link);
                                                }
                                            @endphp

                        <div class="col"><img style="width: 80%;" src="https://drive.google.com/uc?id={{ $var2 }}"></div>
                    </div>
                    <div class="row" style="height: 25%;margin-right: 0;margin-left: 0;">
                    @if(!is_null($transp->id_horario))
                                                @php
                                                date_default_timezone_set("America/Bogota");
                                                $hora= (new DateTime())->format('H:i');
                                                $dia=date("l");
                                                $hour=explode(":",$hora);
                                                $var= $horarios->find($transp->id_horario);
                                                $var2="x";
                                                if (!is_null($var)){
                                                    $var2=($var->horario);
                                                }
                                                $count = substr_count($var2,";");
                                                $var3= explode(";" ,$var2);
                                            @endphp
                                            @for ($i=0; $i<=$count; $i++)
                                            @php
                                                $var4= explode("|",$var3[$i]);
                                                $var5=explode("-",$var4[1]);
                                                $var6=explode(":",$var5[0]);
                                                $var7=explode(":",$var5[1]);

                                  
                                            @endphp
    

                                            @if($var4[0]==='L-V' && ($dia==="Monday" || $dia==="Tuesday" || $dia==="Wednesday" || $dia==="Thursday" || $dia==="Friday"))
    @if($hour[0] > $var6[0] && $hour[0] < $var7[0])
        <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
        </div>
    @break
    @elseif($hour[0] == $var6[0] || $hour[0] == $var7[0]) 
        @if($hour[0] == $var6[0] && $hour[1] >= $var6[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @elseif($hour[0] == $var7[0] && $hour[1] <= $var7[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @else         
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--red);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">inactivo</h1>
            </div> 
        @break
        @endif
    @endif                        
@elseif($var4[0]==="L-D" && ($dia==="Monday" || $dia==="Tuesday" || $dia==="Wednesday" || $dia==="Thursday" || $dia==="Friday" || $dia==="Saturday" || $dia==="Sunday"))
    @if($hour[0] > $var6[0] && $hour[0] < $var7[0])
        <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
        </div>
    @break
    @elseif($hour[0] == $var6[0] || $hour[0] == $var7[0]) 
        @if($hour[0] == $var6[0] && $hour[1] >= $var6[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @elseif($hour[0] == $var7[0] && $hour[1] <= $var7[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @else         
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--red);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">inactivo</h1>
            </div> 
        @break
        @endif
    @endif                        
@elseif($var4[0]==="L" && $dia==="Monday")
    @if($hour[0] > $var6[0] && $hour[0] < $var7[0])
        <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
        </div>
    @break
    @elseif($hour[0] == $var6[0] || $hour[0] == $var7[0]) 
        @if($hour[0] == $var6[0] && $hour[1] >= $var6[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @elseif($hour[0] == $var7[0] && $hour[1] <= $var7[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @else         
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--red);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">inactivo</h1>
            </div> 
        @break
        @endif
    @endif                        
@elseif($var4[0]==="M" && $dia==="Tuesday")
    @if($hour[0] > $var6[0] && $hour[0] < $var7[0])
        <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
        </div>
    @break
    @elseif($hour[0] == $var6[0] || $hour[0] == $var7[0]) 
        @if($hour[0] == $var6[0] && $hour[1] >= $var6[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @elseif($hour[0] == $var7[0] && $hour[1] <= $var7[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @else         
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--red);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">inactivo</h1>
            </div> 
        @break
        @endif
    @endif                        
@elseif($var4[0]==="Mi" && $dia==="Wednesday")
    @if($hour[0] > $var6[0] && $hour[0] < $var7[0])
        <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
        </div>
    @break
    @elseif($hour[0] == $var6[0] || $hour[0] == $var7[0]) 
        @if($hour[0] == $var6[0] && $hour[1] >= $var6[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @elseif($hour[0] == $var7[0] && $hour[1] <= $var7[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @else         
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--red);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">inactivo</h1>
            </div> 
        @break
        @endif
    @endif                        
@elseif($var4[0]==="J" && $dia==="Thursday")
    @if($hour[0] > $var6[0] && $hour[0] < $var7[0])
        <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
        </div>
    @break
    @elseif($hour[0] == $var6[0] || $hour[0] == $var7[0]) 
        @if($hour[0] == $var6[0] && $hour[1] >= $var6[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @elseif($hour[0] == $var7[0] && $hour[1] <= $var7[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @else         
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--red);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">inactivo</h1>
            </div> 
        @break
        @endif
    @endif                        
@elseif($var4[0]==="V" && $dia==="Friday")
    @if($hour[0] > $var6[0] && $hour[0] < $var7[0])
        <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
        </div>
    @break
    @elseif($hour[0] == $var6[0] || $hour[0] == $var7[0]) 
        @if($hour[0] == $var6[0] && $hour[1] >= $var6[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @elseif($hour[0] == $var7[0] && $hour[1] <= $var7[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @else         
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--red);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">inactivo</h1>
            </div> 
        @break    
        @endif
    @endif                        
@elseif($var4[0]==="S" && $dia==="Saturday")
    @if($hour[0] > $var6[0] && $hour[0] < $var7[0])
        <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
        </div>
    @break
    @elseif($hour[0] == $var6[0] || $hour[0] == $var7[0]) 
        @if($hour[0] == $var6[0] && $hour[1] >= $var6[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @elseif($hour[0] == $var7[0] && $hour[1] <= $var7[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @else         
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--red);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">inactivo</h1>
            </div> 
        @break
        @endif
    @endif                        
@elseif($var4[0]==="D" && $dia==="Sunday")
    @if($hour[0] > $var6[0] && $hour[0] < $var7[0])
        <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
        </div>
    @break
    @elseif($hour[0] == $var6[0] || $hour[0] == $var7[0]) 
        @if($hour[0] == $var6[0] && $hour[1] >= $var6[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @elseif($hour[0] == $var7[0] && $hour[1] <= $var7[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @else         
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--red);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">inactivo</h1>
            </div> 
        @break
        @endif
    @endif                        
@elseif($var4[0]==="L-J" && ($dia==="Monday" || $dia==="Tuesday" || $dia==="Wednesday" || $dia==="Thursday" ))
    @if($hour[0] > $var6[0] && $hour[0] < $var7[0])
        <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
        </div>
    @break
    @elseif($hour[0] == $var6[0] || $hour[0] == $var7[0]) 
        @if($hour[0] == $var6[0] && $hour[1] >= $var6[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @elseif($hour[0] == $var7[0] && $hour[1] <= $var7[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @else         
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--red);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">inactivo</h1>
            </div> 
        @break
        @endif
    @endif                        
@elseif($var4[0]==="L-S" && ($dia==="Monday" || $dia==="Tuesday" || $dia==="Wednesday" || $dia==="Thursday" || $dia==="Friday" || $dia==="Saturday" ))
    @if($hour[0] > $var6[0] && $hour[0] < $var7[0])
        <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
        </div>
    @break
    @elseif($hour[0] == $var6[0] || $hour[0] == $var7[0]) 
        @if($hour[0] == $var6[0] && $hour[1] >= $var6[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @elseif($hour[0] == $var7[0] && $hour[1] <= $var7[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @else         
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--red);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">inactivo</h1>
            </div> 
        @break
        @endif
    @endif     
@elseif($var4[0]==="S-D" && ($dia==="Saturday" || $dia==="Sunday"))
    @if($hour[0] > $var6[0] && $hour[0] < $var7[0])
        <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
        </div>
    @break
    @elseif($hour[0] == $var6[0] || $hour[0] == $var7[0]) 
        @if($hour[0] == $var6[0] && $hour[1] >= $var6[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @elseif($hour[0] == $var7[0] && $hour[1] <= $var7[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @else         
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--red);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">inactivo</h1>
            </div>
        @break     
        @endif
    @endif                        
@elseif($var4[0]==="D-D")
    @if($hour[0] > $var6[0] && $hour[0] < $var7[0])
        <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
        </div>
    @break
    @elseif($hour[0] == $var6[0] || $hour[0] == $var7[0]) 
        @if($hour[0] == $var6[0] && $hour[1] >= $var6[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @elseif($hour[0] == $var7[0] && $hour[1] <= $var7[1])
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--green);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">activo</h1>
            </div>
        @break
        @else         
            <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--red);"></i>
            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">inactivo</h1>
            </div>
        @break      
        @endif
    @else
        <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--red);"></i>
        <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">inactivo</h1>
        </div>
    @break   
    @endif
@else
    <div class="col"><i class="fa fa-circle swing animated infinite" style="width: 100%;color: var(--red);"></i>
    <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;">inactivo</h1>
    </div>     
@break                          
@endif 

                         

                    @endfor
       
    @endif
                    </div>
                </div>
                <div class="col-md-6" style="width: 70%;">
                    <div class="row" style="border-bottom: 1px solid #000c4f;border-left: 1px solid #000c4f;background: #ffff00;border-top-right-radius: 4px;">
                        <div class="col" style="width: 100%;padding-right: 0;padding-left: 0;">
                            <h1 style="width: 90%;font-size: 14px;color: #000c4f;font-family: 'ITC Avant Garde Gothic Std Medium';line-height: 16px;margin-bottom: 0;text-align: center;margin-left: 5%;">
                            @if(!is_null($transp->placa) && !is_null($transp->nombre))
                            <br>{{$transp->placa}} - {{$transp->nombre}}<br><br></h1>
                            @elseif(!is_null($transp->placa) && is_null($transp->nombre))
                            <br> {{$transp->placa}}<br><br></h1>
                           @endif 
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="border-bottom: 1px solid #000c4f;border-left: 1px solid #000c4f;padding-right: 0;padding-left: 0;">
                            <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';color: #000c4f;font-weight: 400;margin-bottom: 5%;">
                            @if(!is_null($transp->carroceria) && !is_null($transp->capacidad))
                            <br>{{$transp->carroceria}} / {{$transp->capacidad}}</h1>
                            @elseif(is_null($transp->carroceria) && !is_null($transp->capacidad))
                            <br> {{$transp->capacidad}}</h1>
                            @elseif(!is_null($transp->carroceria) && is_null($transp->capacidad))
                            <br> {{$transp->carroceria}}</h1>
                           @endif 
                        </div>
                    </div>
                    <div class="row" style="background: #f2f2f2;">
                    @if(!is_null($transp->whatsapp) && !is_null($transp->telefono))
                        <div class="col" style="width: 50%;padding-left: 0;padding-right: 0;border-top: 1px none #000c4f ;border-right: 1px solid #000c4f ;border-left: 1px solid #000c4f ;">
                    <a href="tel:{{$transp->telefono}}">
                        <i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-phone" style="color: #000c4f;"></i><i class="fa fa-angle-double-left" style="margin-left: 5%;color: #000c4f;"></i>
                            <h1 style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';"><br>{{$transp->telefono}}<br><br></h1>
</a>
                        </div>
                        <div class="col" style="width: 50%;padding-left: 0;padding-right: 0;">
                        <a href="https://api.whatsapp.com/send?phone=+57%20{{$transp->whatsapp}}">
                        <i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-whatsapp" style="color: #000c4f;font-weight: bold;"></i><i class="fa fa-angle-double-left" style="margin-left: 5%;color: #000c4f;"></i>
                            <h1 style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';"><br>{{$transp->whatsapp}}<br><br></h1>
</a>
                        </div>
                        @elseif(is_null($transp->whatsapp) && !is_null($transp->telefono))
                        <div class="col" style="width: 100%;padding-left: 0;padding-right: 0;border-top: 1px none #000c4f ;border-left: 1px solid #000c4f ;">
                    <a href="tel:{{$transp->telefono}}">
                        <i class="fa fa-angle-double-right" style="margin-right: 5%;color: #000c4f;"></i><i class="fa fa-phone" style="color: #000c4f;"></i><i class="fa fa-angle-double-left" style="margin-left: 5%;color: #000c4f;"></i>
                            <h1 style="font-size: 14px;width: 100%;color: #000c4f;line-height: 6px;font-family: 'ITC Avant Garde Gothic Std Medium';"><br>{{$transp->telefono}}<br><br></h1>
</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End: 1 Row 2 Columns -->
    @endif
    @endforeach
    @include('front.menugeneral')
    @endsection