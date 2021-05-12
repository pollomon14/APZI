@extends('layouts.apzi')

@section('content')

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  

<style>

#carrousel {
  margin: 0px;
  padding-top: 25%;
}

#carrousel .title {
  margin-bottom: 10px;
  font-size: 30px;
}
#carrousel .owl-carousel img {
  max-height: 100%;
  max-width: 100%;
  width: auto;
  height: auto;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  height: 300px;
  object-fit: cover;
  -moz-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
  -webkit-box-shadow: 12px 12px 10px -10px rgba(0, 0, 0, 0.25);
  -moz-box-shadow: 12px 12px 10px -10px rgba(0, 0, 0, 0.25);
  box-shadow: 12px 12px 10px -10px rgba(0, 0, 0, 0.25);
}
#carrousel .owl-carousel .owl-item {
  height: 300px;
  position: relative;
  transform: scale(0.7);
  -ms-transform: scale(0.7);
  transition: all 0.2s;
  -webkit-transform: all 0.2s;
  z-index: 1;
}
@media (max-width: 768px) {
  #carrousel .owl-carousel .owl-item {
     height: 420px;
  }
}
@media (max-width: 380px) {
  #carrousel .owl-carousel .owl-item {
    height: 350px;
  }
}
#carrousel .owl-carousel .owl-stage-outer {
  padding-bottom: 10px;
}
#carrousel .owl-item.big {
  transform: scale(1.5);
  -ms-transform: scale(1.5);
  z-index: 3;
}
#carrousel .owl-item.medium {
  transform: scale(0.8);
  -ms-transform: scale(0.8);
  z-index: 2;
}
#carrousel .owl-item.medium.mdright {
  /*border: solid 1px red;*/
  position: relative;
  left: -30px;
}
@media (min-width: 768px) {
  #carrousel .owl-item.medium.mdright {
    left: 0px;
  }
}
#carrousel .owl-item.medium.mdleft {
  /*border: solid 1px blue;*/
  position: relative;
  right: -30px;
}
@media (min-width: 768px) {
  #carrousel .owl-item.medium.mdleft {
    right: 0px;
  }
}
#carrousel .owl-item.smallRight.active {
  transform: scale(0.7);
  -ms-transform: scale(0.7);
  position: relative;
  left: -30px;
}
#carrousel .owl-item.smallLeft.active {
  transform: scale(0.7);
  -ms-transform: scale(0.7);
  position: relative;
  right: -30px;
}
#carrousel .owl-nav {
  position: absolute;
  top: 30%;
  width: 100%;
}
#carrousel .owl-nav .owl-prev {
  position: absolute;
    left: 4%;
    margin-top: 10%;
    background: rgba(255,255,255,0.8);
    color: #000c4f !important;
    font-size: 28px !important;
}

#carrousel .owl-nav .owl-next {
  position: absolute;
    right: 4%;
    margin-top: 10%;
    background: rgba(255,255,255,0.8);
    color: #000c4f !important;
    font-size: 28px !important;
}

</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <div id="carrousel">
    <div class="container">
        <div class="col-md-12">
            <div class="owl-carousel owl-theme">
            @if(!is_null($local->imagen1)) 
              <img src="https://drive.google.com/uc?id={{$local->imagen1}}" >
            @endif
            @if(!is_null($local->imagen2))   
              <img src="https://drive.google.com/uc?id={{$local->imagen2}}" >
              @endif
            @if(!is_null($local->imagen3))
              <img src="https://drive.google.com/uc?id={{$local->imagen3}}" >
              @endif
            @if(!is_null($local->imagen4))
              <img src="https://drive.google.com/uc?id={{$local->imagen4}}" >
              @endif
            @if(!is_null($local->imagen5))
              <img src="https://drive.google.com/uc?id={{$local->imagen5}}" >
              @endif
            @if(!is_null($local->imagen6)) 
              <img src="https://drive.google.com/uc?id={{$local->imagen6}}" >
              @endif
            @if(!is_null($local->imagen7))
              <img src="https://drive.google.com/uc?id={{$local->imagen7}}" >
              @endif
            @if(!is_null($local->imagen8))
              <img src="https://drive.google.com/uc?id={{$local->imagen8}}" >
              @endif
            @if(!is_null($local->imagen9)) 
              <img src="https://drive.google.com/uc?id={{$local->imagen9}}" >
              @endif
            @if(!is_null($local->imagen10))
              <img src="https://drive.google.com/uc?id={{$local->imagen10}}" >
              @endif
            </div>
        </div>
     <!-- <div class="text-center">
        <button id="play-carousel" type="button" class="btn btn-dark">play</button>
      </div>!-->
    </div>
</div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
      <script id="rendered-js" >
$('.owl-carousel').owlCarousel({
  center: true,
  loop: true,
  nav: true,
  items: 5,
  navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
  responsive: {
    0: {
      items: 2 },

    768: {
      items: 3 },

    990: {
      items: 5 } },


  onInitialized: coverFlowEfx,
  onTranslate: coverFlowEfx });


function coverFlowEfx(e) {
  if ($('.owl-dots')) {
    $('.owl-dots').remove();
  }
  idx = e.item.index;
  $('.owl-item.big').removeClass('big');
  $('.owl-item.medium').removeClass('medium');
  $('.owl-item.mdright').removeClass('mdright');
  $('.owl-item.mdleft').removeClass('mdleft');
  $('.owl-item.smallRight').removeClass('smallRight');
  $('.owl-item.smallLeft').removeClass('smallLeft');
  $('.owl-item').eq(idx - 1).addClass('medium mdleft');
  $('.owl-item').eq(idx).addClass('big');
  $('.owl-item').eq(idx + 1).addClass('medium mdright');
  $('.owl-item').eq(idx + 2).addClass('smallRight');
  $('.owl-item').eq(idx - 2).addClass('smallLeft');
}

var click = false;

$('#play-carousel').click(function (evt) {
  click = !click;
  if (click) {
    $('.status').html('Autoplay: ON');
    $('.owl-carousel').trigger('play.owl.autoplay', [1000, 1000]);
    $(this).html("Stop");
  } else {
    $('.owl-carousel').trigger('stop.owl.autoplay');
    $(this).html("Play");
    $('.status').html('Autoplay: OFF');
  }

});
//# sourceURL=pen.js
    </script>
</body>
</html>


    <h1 class="text-uppercase" style="font-family: 'ITC Avant Garde Gothic Std Medium';color: #000c4f;font-size: 16px;text-align: center;background: #ffff00;padding-top: 2%;padding-bottom: 2%;padding-right: 2%;padding-left: 2%;box-shadow: 0px 1px 5px #000c4f;">{{$local->nombre}}</h1>
    <p style="width: 90%;margin-left: 5%;text-align: center;font-family: 'Montserrat Regular';font-size: 14px;color: #000c4f;">{{$local->descripcion}}</p>
    @if(!is_null($local->direccion)) 
    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button" style="width: 96%;margin-right: 0;margin-left: 2%;background: #000c4f;border-radius: 0px;font-family: 'ITC Avant Garde Gothic Std Medium';font-size: 14px;margin-bottom: 0;"><i class="fas fa-map-marker-alt float-left" style="color: #ffff00;text-align: left;margin-left: 2%;font-size: 20px;margin-right: 10%;"></i>{{$local->direccion}}&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</button>
        <div class="dropdown-menu" style="width: 96%;margin-top: 0;border-top-left-radius: 0px;border-top-right-radius: 0px;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;">
        <div class="container" style="padding: 0;background-color: #f2f2f2; margin-left: 2%; margin-right: 2%; width: 96%;">
        <iframe src="{{$local->ubicacion}}" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        </div>
    </div>
    @endif
    @if(!is_null($local->id_horario))
    <div class="dropdown" style="margin-top: 2%;"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button" style="width: 96%;margin-right: 0;margin-left: 2%;background: #000c4f;border-radius: 0px;font-family: 'ITC Avant Garde Gothic Std Medium';font-size: 14px;margin-bottom: 0;">Horario de Atencion&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-clock-o float-left" style="color: #ffff00;margin-left: 2%;font-size: 20px;margin-right: 10%;"></i></button>
        <div class="dropdown-menu" style="width: 96%;margin-top: 0;background: #f2f2f2;border-radius: 0px;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;"><a class="dropdown-item" href="#" style="padding: 0;background: #f2f2f2;"></a><!-- Start: 1 Row 2 Columns -->
            <div class="container" style="padding: 0;background-color: #f2f2f2; margin-left: 2%; margin-right: 2%; width: 96%;">
                <div class="row" style="margin-right: 0;margin-left: 0;">
                                            @php
                                                $var= $horarios->find($local->id_horario);
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
                                            @endphp
                    <div class="col-md-6" style="width: 50%;padding: 0;text-align: right;margin-right: 0%;background: #f2f2f2;border-right: 1px solid #000c4f ;">
                        <p style="margin-right: 5%;font-family: 'ITC Avant Garde Gothic Std Demi';color: #000c4f;font-size: 14px;border-right-color: #000c4f;padding-top: 0;padding-bottom: 0;">
                            @if($var4[0]==='L-V')
                          {{"Lunes a Viernes"}}
                        @elseif($var4[0]==="L-D")
                           {{"Lunes a Domingo"}}
                           @elseif($var4[0]==="L")
                          {{"Lunes"}}
                          @elseif($var4[0]==="M")
                          {{"Martes"}}
                          @elseif($var4[0]==="Mi")
                          {{"Miercoles"}}
                          @elseif($var4[0]==="J")
                          {{"Jueves"}}
                          @elseif($var4[0]==="V")
                          {{"Viernes"}}
                          @elseif($var4[0]==="S")
                          {{"Sabado"}}
                        @elseif($var4[0]==="D")
                          {{"Domingo"}}
                          @elseif($var4[0]==="L-J")
                          {{"Lunes a Jueves"}}
                          @elseif($var4[0]==="L-S")
                          {{"Lunes a Sabado"}}
                          @elseif($var4[0]==="S-D")
                          {{"Sabado y Domingo"}}
                          @elseif($var4[0]==="D-D")
                          {{"Domingo a Domingo"}}
                         @endif 
                         
                      </p>
                     
                    </div>
           
                    <div class="col-md-6" style="width: 50%;padding: 0;">
                        <p style="margin-left: 5%;background: #f2f2f2;color: #000c4f;font-size: 14px;">{{$var4[1]}}</p>
                    </div>
                    @endfor
                </div>
                <p style="font-family: 'ITC Avant Garde Gothic Std Demi';color: #000c4f;font-size: 14px;border-right-color: #000c4f;padding-top: 0;padding-bottom: 0; text-align:center;">
                      {{$var->observacion}}
                      </p>
            </div><!-- End: 1 Row 2 Columns -->
        </div>
    </div>
    @endif
    <div class="container" style="width: 100%;padding-right: 0px;padding-left: 0px;margin-top: 5%;text-align: center;">
    @if(is_null($local->catalogo) && is_null($local->video) && is_null($local->producto)&& !is_null($local->cant_visitas))    
    <figure class="figure" data-aos="flip-left" data-aos-duration="50" data-aos-once="true" style="width: 50%;  margin-bottom: 0;margin-left: 2%;border-radius: 4px;border: 1px solid #000c4f;">
            <h1 style="font-family: 'DS-Digital Italic';padding-bottom: 7%;  font-size: 1.5rem;">{{$local->cant_visitas}}</h1>
            <figcaption class="figure-caption" style="width: 100%;margin-left: 0px;font-size: 11px;background: #ffff00;font-family: 'ITC Avant Garde Gothic Std Medium';font-weight: normal;border-radius: 0;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;color: #000c4f;border-style: none;">Visitas</figcaption>
        </figure>
     @elseif(!is_null($local->cant_visitas))
     <figure class="figure" data-aos="flip-left" data-aos-duration="50" data-aos-once="true" style="width: 20%;margin-left: 2%;border-radius: 4px;border: 1px solid #000c4f;">
            <h1 style="font-family: 'DS-Digital Italic';padding-top: 7%;padding-bottom: 22%;">{{$local->cant_visitas}}</h1>
            <figcaption class="figure-caption" style="width: 100%;margin-left: 0px;font-size: 11px;background: #ffff00;font-family: 'ITC Avant Garde Gothic Std Medium';font-weight: normal;border-radius: 0;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;color: #000c4f;border-style: none;">Visitas</figcaption>
        </figure>
        @endif   
        @if(is_null($local->cant_visitas) && is_null($local->video) && is_null($local->producto)&& !is_null($local->catalogo))    
        <figure class="figure" style="width: 50%;margin-left: 2%;border-radius: 4px;border: 1px solid #000c4f; margin-bottom: 0;"><img class="img-fluid figure-img" style="width: 30%;margin-bottom: 10%;" src="/assets/img/directorio%20(2).svg?h=c62e9ffb34c67c5bc58fcc7347e3ec3a">
            <figcaption class="figure-caption" style="width: 100%;margin-left: 0px;font-size: 11px;background: #ffff00;font-family: 'ITC Avant Garde Gothic Std Medium';font-weight: normal;border-radius: 0;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;color: #000c4f;border-style: none;">Catalogo</figcaption>
        </figure>
     @elseif (!is_null($local->catalogo))
     <figure class="figure" style="width: 20%;margin-left: 2%;border-radius: 4px;border: 1px solid #000c4f;"><img class="img-fluid figure-img" style="width: 60%;margin-bottom: 40%;margin-top: 10%;" src="/assets/img/directorio%20(2).svg?h=c62e9ffb34c67c5bc58fcc7347e3ec3a">
            <figcaption class="figure-caption" style="width: 100%;margin-left: 0px;font-size: 11px;background: #ffff00;font-family: 'ITC Avant Garde Gothic Std Medium';font-weight: normal;border-radius: 0;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;color: #000c4f;border-style: none;">Catalogo</figcaption>
        </figure>
        @endif  
        @if(!is_null($local->video))
        <figure class="figure" style="width: 20%;margin-left: 2%;border-radius: 4px;border: 1px solid #000c4f;"><img class="img-fluid figure-img" style="width: 60%;margin-bottom: 40%;margin-top: 10%;" src="/assets/img/video.svg?h=24ffd557226f6ef6f0d303aebbde5371">
            <figcaption class="figure-caption" style="width: 100%;margin-left: 0px;font-size: 11px;background: #ffff00;font-family: 'ITC Avant Garde Gothic Std Medium';font-weight: normal;border-radius: 0;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;color: #000c4f;border-style: none;">Video</figcaption>
        </figure>
        @endif
        @if(!is_null($local->producto))
        <figure class="figure" style="width: 20%;margin-left: 2%;border-radius: 4px;border: 1px solid #000c4f;"><img class="img-fluid figure-img" style="width: 60%;margin-bottom: 40%;margin-top: 10%;" src="/assets/img/producto_destacado.svg?h=967ab525715dda1d3a26c3da8c550142">
            <figcaption class="figure-caption" style="width: 100%;margin-left: 0px;font-size: 11px;background: #ffff00;font-family: 'ITC Avant Garde Gothic Std Medium';font-weight: normal;border-radius: 0;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;color: #000c4f;border-style: none;">Producto</figcaption>
        </figure>
        @endif
    </div><!-- Start: 1 Row 3 Columns -->
    @if(!is_null($local->whatsapp))
    <div class="container" style="width: 90%;margin-left: 5%;padding: 0;margin-top: 4%;margin-right: 0;background: #fff;border: 1px solid #000c4f;box-shadow: 0px 0px 4px #000c4f;margin-bottom: 2%;">
    <a href="https://api.whatsapp.com/send?phone=+57%20{{$local->whatsapp}}">    
    <div class="row" style="margin-right: 0;margin-left: 0;width: 100%;padding-top: 1%;padding-bottom: 1%;border-bottom: 1px none #000c4f ;">
            <div class="col-md-4" style="width: 20%;padding: 0;text-align: center;"><i class="fab fa-whatsapp" style="color: #000c4f;font-size: 20px;font-style: normal;font-weight: bold;"></i></div>
            <div class="col-md-4" style="width: 70%;padding: 0;">
                <h1 style="color: #000c4f;font-size: 16px;font-family: 'ITC Avant Garde Gothic Std Medium';margin-bottom: 0;margin-right: 0px;margin-top: 1%;">Whatsapp</h1>
            </div>
            <div class="col-md-4" style="width: 10%;padding: 0;"><i class="fa fa-arrow-circle-right" style="text-align: center;font-size: 16px;color: #000c4f;"></i></div>
        </div>
</a>   
    </div><!-- End: 1 Row 3 Columns -->
    <hr style="margin-top: 1%;margin-bottom: 1%;color: #000c4f;font-weight: normal;"><!-- Start: 1 Row 3 Columns -->
    @endif
    @if(!is_null($local->telefono))
    <div class="container" style="width: 90%;margin-left: 5%;padding: 0;margin-top: 2%;margin-right: 0;background: #fff;border: 1px solid #000c4f;box-shadow: 0px 0px 4px #000c4f;margin-bottom: 2%;">
    <a href="tel:{{$local->telefono}}">        
    <div class="row" style="margin-right: 0;margin-left: 0;width: 100%;padding-top: 1%;padding-bottom: 1%;border-bottom: 1px none #000c4f ;">
            <div class="col-md-4" style="width: 20%;padding: 0;text-align: center;"><i class="fas fa-phone-volume" style="text-align: center;font-size: 20px;color: #000c4f;"></i></div>
            <div class="col-md-4" style="width: 70%;padding: 0;">
                <h1 style="color: #000c4f;font-size: 16px;font-family: 'ITC Avant Garde Gothic Std Medium';margin-bottom: 0;margin-right: 0px;margin-top: 1%;">Llamar</h1>
            </div>
            <div class="col-md-4" style="width: 10%;padding: 0;"><i class="fa fa-arrow-circle-right" style="text-align: center;font-size: 16px;color: #000c4f;"></i></div>
        </div>
</a>
    </div><!-- End: 1 Row 3 Columns -->
    <hr style="margin-top: 1%;margin-bottom: 1%;color: #000c4f;font-weight: normal;"><!-- Start: 1 Row 3 Columns -->
    @endif
    @if(!is_null($local->facebook))
    <div class="container" style="width: 90%;margin-left: 5%;padding: 0;margin-top: 2%;margin-right: 0;background: #fff;border: 1px solid #000c4f;box-shadow: 0px 0px 4px #000c4f;margin-bottom: 2%;">
    <a href="{{$local->facebook}}">     
    <div class="row" style="margin-right: 0;margin-left: 0;width: 100%;padding-top: 1%;padding-bottom: 1%;border-bottom: 1px none #000c4f ;">
    
        <div class="col-md-4" style="width: 20%;padding: 0;text-align: center;font-weight: normal;"><i class="fab fa-facebook-f" style="text-align: center;font-size: 20px;color: #000c4f;"></i></div>
            <div class="col-md-4" style="width: 70%;padding: 0;">
                <h1 style="color: #000c4f;font-size: 16px;font-family: 'ITC Avant Garde Gothic Std Medium';margin-bottom: 0;margin-right: 0px;margin-top: 1%;">Facebook</h1>
            </div>
            <div class="col-md-4" style="width: 10%;padding: 0;"><i class="fa fa-arrow-circle-right" style="text-align: center;font-size: 16px;color: #000c4f;"></i></div>
        </div>
</a>
    </div><!-- End: 1 Row 3 Columns -->
    <hr style="margin-top: 1%;margin-bottom: 1%;color: #000c4f;font-weight: normal;"><!-- Start: 1 Row 3 Columns -->
    @endif
    @if(!is_null($local->instagram))
    <div class="container" style="width: 90%;margin-left: 5%;padding: 0;margin-top: 2%;margin-right: 0;background: #fff;border: 1px solid #000c4f;box-shadow: 0px 0px 4px #000c4f;margin-bottom: 2%;">
    <a href="{{$local->instagram}}">    
    <div class="row" style="margin-right: 0;margin-left: 0;width: 100%;padding-top: 1%;padding-bottom: 1%;border-bottom: 1px none #000c4f ;">
            <div class="col-md-4" style="width: 20%;padding: 0;text-align: center;"><i class="fab fa-instagram" style="font-weight: bold;color: #000c4f;font-size: 20px;"></i></div>
            <div class="col-md-4" style="width: 70%;padding: 0;">
                <h1 style="color: #000c4f;font-size: 16px;font-family: 'ITC Avant Garde Gothic Std Medium';margin-bottom: 0;margin-right: 0px;margin-top: 1%;">Instagram</h1>
            </div>
            <div class="col-md-4" style="width: 10%;padding: 0;"><i class="fa fa-arrow-circle-right" style="text-align: center;font-size: 16px;color: #000c4f;"></i></div>
        </div>
</a>   
    </div><!-- End: 1 Row 3 Columns -->
    <hr style="margin-top: 1%;margin-bottom: 1%;color: #000c4f;font-weight: normal;"><!-- Start: 1 Row 3 Columns -->
    @endif
    @if(!is_null($local->pagina))    
    <div class="container" style="width: 90%;margin-left: 5%;padding: 0;margin-top: 2%;margin-right: 0;background: #fff;border: 1px solid #000c4f;box-shadow: 0px 0px 4px #000c4f;margin-bottom: 2%;">
    <a href="{{$local->pagina}}">    
    <div class="row" style="margin-right: 0;margin-left: 0;width: 100%;padding-top: 1%;padding-bottom: 1%;border-bottom: 1px none #000c4f ;">
            <div class="col-md-4" style="width: 20%;padding: 0;text-align: center;"><i class="fa fa-globe" style="text-align: center;font-size: 20px;color: #000c4f;"></i></div>
            <div class="col-md-4" style="width: 70%;padding: 0;">
                <h1 style="color: #000c4f;font-size: 16px;font-family: 'ITC Avant Garde Gothic Std Medium';margin-bottom: 0;margin-right: 0px;margin-top: 1%;">Sitio Web</h1>
            </div>
            <div class="col-md-4" style="width: 10%;padding: 0;"><i class="fa fa-arrow-circle-right" style="text-align: center;font-size: 16px;color: #000c4f;"></i></div>
        </div>
</a>
    </div><!-- End: 1 Row 3 Columns -->
    <hr style="margin-top: 1%;margin-bottom: 1%;color: #000c4f;font-weight: normal;"><!-- Start: 1 Row 3 Columns -->
    @endif
    @if(!is_null($local->correo))
    <div class="container" style="width: 90%;margin-left: 5%;padding: 0;margin-top: 2%;margin-right: 0;background: #fff;border: 1px solid #000c4f;box-shadow: 0px 0px 4px #000c4f;margin-bottom: 2%;">
    <a href="mailto:{{$local->correo}}">     
    <div class="row" style="margin-right: 0;margin-left: 0;width: 100%;padding-top: 1%;padding-bottom: 1%;border-bottom: 1px none #000c4f ;">
            <div class="col-md-4" style="width: 20%;padding: 0;text-align: center;"><i class="far fa-envelope" style="text-align: center;font-size: 20px;color: #000c4f;font-weight: bold;"></i></div>
            <div class="col-md-4" style="width: 70%;padding: 0;">
                <h1 style="color: #000c4f;font-size: 16px;font-family: 'ITC Avant Garde Gothic Std Medium';margin-bottom: 0;margin-right: 0px;margin-top: 1%;">Correo Electronico</h1>
            </div>
            <div class="col-md-4" style="width: 10%;padding: 0;"><i class="fa fa-arrow-circle-right" style="text-align: center;font-size: 16px;color: #000c4f;"></i></div>
        </div>
</a>
    </div><!-- End: 1 Row 3 Columns -->
    <hr style="margin-top: 5%;margin-bottom: 2%;color: #000c4f;font-weight: normal;">
    @endif
    @if($local->tipo_de_plan===5)
    @include('front.menuturismo')
    @else
    @include('front.menugeneral')
    @endif
    @endsection
