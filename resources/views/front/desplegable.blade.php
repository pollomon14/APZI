<!DOCTYPE html>
<html style="height: 100%;width: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>apzi4</title>
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asul">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css?h=320bd0471c3e8d6b9dd55c98e185506c">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=bcdc409fdae368be9da0953549197fcd">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>

<body
    style="background: url(&quot;/assets/img/IMG-20200119-WA0083.jpg?h=35ffb9bcff296a4f765cf08369750b43&quot;) no-repeat, #f2f2f2;margin-bottom: 0px;background-size: cover, auto;height: 100%;min-height: 100%;width: 100%;min-width: 100%;">
    <img src="/assets/img/logo.png?h=00675d6dbaa0a4f2569f48a8189b9b2e"
        style="width: 39%;margin-left: 30%;margin-top: 30%;">
    <div class="dropdown" style="text-align: center;width: 100%;"><button class="btn btn-primary dropdown-toggle"
            aria-expanded="false" data-toggle="dropdown" type="button"
            style="width: 60%;text-align: center;background: #000c4f;font-family: 'ITC Avant Garde Gothic Std Demi';font-size: 16px;">Elige
            Tu Ciudad</button>
        <div class="dropdown-menu"
            style="width: 60%;opacity: 1;margin-top: 0;background: transparent;border-style: none;border-color: transparent;">
            <a class="dropdown-item" href="{{ route('index',1) }}"
                style="background: #fff;color: #000c4f;font-family: 'Montserrat Regular';"><i
                    class="fa fa-arrow-circle-right float-right"
                    style="padding-top: 2%;color: #000c4f;"></i>&nbsp;Zipaquirá<i class="fa fa-map-marker float-left"
                    style="padding-top: 2%;color: #000c4f;padding-right: 5%;"></i></a>
            <div class="dropdown-divider"
                style="border-color: transparent;background: transparent;height: 4px;opacity: 1;margin-bottom: 0;margin-top: 0;">
            </div><a class="dropdown-item" href="{{ route('index',2) }}"
                style="background: #fff;color: #000c4f;font-family: 'Montserrat Regular';">&nbsp;Cajica<i
                    class="fa fa-arrow-circle-right float-right" style="padding-top: 2%;color: #000c4f;"></i><i
                    class="fa fa-map-marker float-left" style="padding-top: 2%;color: #000c4f; padding-right: 5%;"></i></a>
            <div class="dropdown-divider"
                style="border-color: transparent;background: transparent;height: 4px;opacity: 1;margin-bottom: 0;margin-top: 0;">
            </div><a class="dropdown-item" href="{{ route('index',3) }}"
                style="background: #fff;color: #000c4f;font-family: 'Montserrat Regular';">&nbsp;Chía<i
                    class="fa fa-arrow-circle-right float-right" style="padding-top: 2%;color: #000c4f;"></i><i
                    class="fa fa-map-marker float-left" style="padding-top: 2%;color: #000c4f; padding-right: 5%;"></i></a>
            <div class="dropdown-divider"
                style="border-color: transparent;background: transparent;height: 4px;opacity: 1;margin-bottom: 0;margin-top: 0;">
            </div><a class="dropdown-item" href="{{ route('index',4) }}"
                style="background: #fff;color: #000c4f;font-family: 'Montserrat Regular';">&nbsp;Cogua<i
                    class="fa fa-arrow-circle-right float-right" style="padding-top: 2%;color: #000c4f;"></i><i
                    class="fa fa-map-marker float-left" style="padding-top: 2%;color: #000c4f; padding-right: 5%;"></i></a>
            <div class="dropdown-divider"
                style="border-color: transparent;background: transparent;height: 4px;opacity: 1;margin-bottom: 0;margin-top: 0;">
            </div><a class="dropdown-item" href="{{ route('index',5) }}"
                style="background: #fff;color: #000c4f;font-family: 'Montserrat Regular';">&nbsp;Sopó<i
                    class="fa fa-arrow-circle-right float-right" style="padding-top: 2%;color: #000c4f;"></i><i
                    class="fa fa-map-marker float-left" style="padding-top: 2%;color: #000c4f; padding-right: 5%;"></i></a>
            <div class="dropdown-divider"
                style="border-color: transparent;background: transparent;height: 4px;opacity: 1;margin-bottom: 0;margin-top: 0;">
            </div><a class="dropdown-item" href="{{ route('index',6) }}"
                style="background: #fff;color: #000c4f;font-family: 'Montserrat Regular';">&nbsp;Cajicá<i
                    class="fa fa-arrow-circle-right float-right" style="padding-top: 2%;color: #000c4f;"></i><i
                    class="fa fa-map-marker float-left" style="padding-top: 2%;color: #000c4f; padding-right: 5%;"></i></a>
            <div class="dropdown-divider"
                style="border-color: transparent;background: transparent;height: 4px;opacity: 1;margin-bottom: 0;margin-top: 0;">
            </div>
        </div>
    </div>
      <div id="map"></div>

    <script>
        window.onload = () => {
            'use strict';
            getLocation();
            if ('serviceWorker' in navigator) {
            navigator.serviceWorker
                    .register('/sw.js');
            }
        }

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js">
    </script>
    <script src="/assets/js/script.min.js?h=618b97a50c192fc65f74b6a8b801de57"></script>

	<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOOLCTVuwX6giO4HiY9XD33RPeebSr19A&callback=initMap&libraries=&v=weekly" async>

	</script>
    <script type="text/javascript">

    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 8,
          center: { lat: 40.731, lng: -73.997 },
        });


      }

        function showLocation(position) {
           var latitude = position.coords.latitude;
           var longitude = position.coords.longitude;
           var input = position.coords.latitude + ","
           + position.coords.longitude;
            const latlngStr = input.split(",", 2);
            const latlng = {
              lat: parseFloat(latlngStr[0]),
              lng: parseFloat(latlngStr[1]),
            };
            const geocoder = new google.maps.Geocoder();
                geocoder.geocode({ location: latlng }, (results, status) => {
                  if (status === "OK") {
                    if (results[0]) {
                      //cadena completa
                      console.log(results[0].formatted_address);
                      var direccion = results[0].formatted_address.split(",", 3);
                      var ciudad = direccion[1];

                      console.log(ciudad);
                      if (ciudad==" Zipaquirá"){
                          window.location.href = "https://app.apziweb.com/front/index/1";
                      }
                      else if (ciudad==" Cajicá"){
                          window.location.href = "https://app.apziweb.com/front/index/2";
                      }

                      else{
                         console.log("No encontro ciudad Apzi");
                      }


                    } else {
                      console.log("No results found");
                    }
                  } else {
                    console.log("Geocoder failed due to: " + status);
                  }
                });

        }
        function errorHandler(err) {
           if(err.code == 1) {
              console.log("Gps apagado");
           } else if( err.code == 2) {
              console.log("Posicion no determinada");
           }
        }
        function getLocation(){
           if(navigator.geolocation){
              // timeout at 60000 milliseconds (60 seconds)
              var options = {timeout:60000};
              navigator.geolocation.getCurrentPosition
              (showLocation, errorHandler, options);
           } else{
              alert("Sorry, browser does not support geolocation!");
           }
        }
     </script>


</body>

</html>
