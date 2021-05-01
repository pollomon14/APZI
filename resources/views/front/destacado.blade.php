@extends('layouts.apzi')

@section('content')


{{ $local->id }}
{{ $local->nombre }}
{{ $local->responsable }}
{{ $local->telefono }}
{{ $local->whatsapp }}
{{ $local->instagram }}


<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">

<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

<link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  <title>CodePen - Waterwheel with owl carousel 2</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
<link rel='stylesheet' href='styles/owl.carousel.min.css'>

<style>
.container {
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
	}
.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 0px;
    padding-left: 0px;
}
#carrousel {
  margin: 10px;
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
              <img src="/assets/img/granja1.jpg?h=4531fb5f6ca66ae975f606baf6d5eee4" >
			  <img src="/assets/img/granja2.jpg?h=8c4232b5ea7b08cda21a18c89f4e6194">
			  <img src="/assets/img/granja3.jpg?h=33e9b758a80a786e69bb18457e58e614">
			  <img src="/assets/img/granja4.jpg?h=bb4fc39c7389936404b40990d6f771e3">
			  <img src="/assets/img/granja5.jpg?h=f8f8c8b089c83b2d068aa101dc0b7a87">
			  <img src="/assets/img/granja1.jpg?h=4531fb5f6ca66ae975f606baf6d5eee4" >
			  <img src="/assets/img/granja2.jpg?h=8c4232b5ea7b08cda21a18c89f4e6194">
			  <img src="/assets/img/granja3.jpg?h=33e9b758a80a786e69bb18457e58e614">

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


    <h1 class="text-uppercase" style="font-family: 'ITC Avant Garde Gothic Std Medium';color: #000c4f;font-size: 16px;text-align: center;background: #ffff00;padding-top: 2%;padding-bottom: 2%;padding-right: 2%;padding-left: 2%;">Avicola &amp; Salsamentaria la Granja ojitos lindos</h1>
    <p style="width: 90%;margin-left: 5%;text-align: center;font-family: 'Montserrat Regular';font-size: 14px;color: #000c4f;">Paragraph ojitos lindos hace lo que ella quiere y asume que nosotros vamos a estar de acuerdo y ya no se que mas carreta escribir</p>
    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button" style="width: 96%;margin-right: 0;margin-left: 2%;background: #000c4f;border-radius: 0px;font-family: 'ITC Avant Garde Gothic Std Medium';font-size: 14px;margin-bottom: 0;"><i class="fa fa-map-marker float-left" style="color: #ffff00;text-align: left;"></i>Carrera 6 # 7 - 19 Centro&nbsp; &nbsp;&nbsp;</button>
        <div class="dropdown-menu" style="width: 96%;margin-top: 0;border-top-left-radius: 0px;border-top-right-radius: 0px;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;"><a class="dropdown-item" href="#"><iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="400" style="width: 100%;height: 100%;"></iframe></a></div>
    </div>
    <div class="dropdown" style="margin-top: 2%;"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button" style="width: 96%;margin-right: 0;margin-left: 2%;background: #000c4f;border-radius: 0px;font-family: 'ITC Avant Garde Gothic Std Medium';font-size: 14px;margin-bottom: 0;">Horario de Atencion&nbsp; &nbsp;&nbsp;<i class="fa fa-clock-o float-left" style="color: #ffff00;"></i></button>
        <div class="dropdown-menu" style="width: 96%;margin-top: 0;background: #f2f2f2;border-radius: 0px;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;"><a class="dropdown-item" href="#" style="padding: 0;background: #f2f2f2;"></a><!-- Start: 1 Row 2 Columns -->
            <div class="container" style="padding: 0;">
                <div class="row" style="margin-right: 0;margin-left: 0;">
                    <div class="col-md-6" style="width: 50%;padding: 0;text-align: right;margin-right: 0%;background: #f2f2f2;border-right: 1px solid #000c4f ;">
                        <p style="margin-right: 5%;font-family: 'ITC Avant Garde Gothic Std Demi';color: #000c4f;font-size: 14px;border-right-color: #000c4f;padding-top: 0;padding-bottom: 0;">Lunes a Viernes</p>
                    </div>
                    <div class="col-md-6" style="width: 50%;padding: 0;">
                        <p style="margin-left: 5%;background: #f2f2f2;color: #000c4f;font-size: 14px;">8:00am a 5:00pm</p>
                    </div>
                </div>
            </div><!-- End: 1 Row 2 Columns -->
        </div>
    </div><!-- Start: 1 Row 3 Columns -->
    <div class="container" style="width: 100%;margin-left: 0%;padding: 0;margin-top: 2%;margin-right: 0;background: #f2f2f2;">
        <div class="row" style="margin-right: 0;margin-left: 0;width: 100%;padding-top: 1%;padding-bottom: 1%;border-bottom: 1px none #000c4f ;">
            <div class="col-md-4" style="width: 20%;padding: 0;text-align: center;"><i class="fab fa-whatsapp" style="color: #000c4f;font-size: 16px;font-style: normal;font-weight: normal;"></i></div>
            <div class="col-md-4" style="width: 70%;padding: 0;">
                <h1 style="color: #000c4f;font-size: 16px;font-family: 'ITC Avant Garde Gothic Std Medium';margin-bottom: 0;margin-right: 0px;">Whatsapp</h1>
            </div>
            <div class="col-md-4" style="width: 10%;padding: 0;"><i class="fa fa-arrow-circle-right" style="text-align: center;font-size: 16px;color: #000c4f;"></i></div>
        </div>
    </div><!-- End: 1 Row 3 Columns -->
    <hr style="margin-top: 1%;margin-bottom: 1%;color: #000c4f;font-weight: normal;"><!-- Start: 1 Row 3 Columns -->
    <div class="container" style="width: 100%;margin-left: 0%;padding: 0;margin-top: 2%;margin-right: 0;background: #f2f2f2;">
        <div class="row" style="margin-right: 0;margin-left: 0;width: 100%;padding-top: 1%;padding-bottom: 1%;border-bottom: 1px none #000c4f ;">
            <div class="col-md-4" style="width: 20%;padding: 0;text-align: center;"><i class="fas fa-phone-volume" style="color: #000c4f;font-size: 16px;font-style: normal;font-weight: normal;"></i></div>
            <div class="col-md-4" style="width: 70%;padding: 0;">
                <h1 style="color: #000c4f;font-size: 16px;font-family: 'ITC Avant Garde Gothic Std Medium';margin-bottom: 0;margin-right: 0px;">Llamar</h1>
            </div>
            <div class="col-md-4" style="width: 10%;padding: 0;"><i class="fa fa-arrow-circle-right" style="text-align: center;font-size: 16px;color: #000c4f;"></i></div>
        </div>
    </div><!-- End: 1 Row 3 Columns -->
    @endsection
