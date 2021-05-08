<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>APZI</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

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
    style="border-radius: 0px;border-style: none;border-top-width: 1px;border-right-width: 0px;border-right-style: none;border-bottom-width: 1px;border-bottom-style: none;border-left-width: 0px;">

    <!-- Start: Collapsible sidebar left or right . Content overla -->
    <div style="border-style: none;height: 15%;background: #000c4f;">
        <div class="overlay"></div>
        <div id="sidebar">
            <div class="sidebar-header">
                <div id="close-sidebar" style="background: #000c4f;"><i class="fa fa-chevron-left"></i></div>
                <center style="max-width:100%; margin-left:0px; margin-top:20%;"><img
                        src="/assets/img/logo4.png?h=7ae7fe938b90454021c2e842cf2a753d" style="width: 30%;" /></center>
            </div>
            <center style="max-width:100%; margin-left:0px;">
                <div class="col-md-6"
                    style="padding-right: 0;margin-left: 0px;margin-bottom:5%; margin-right: 0px; max-width: 100%;padding-left: 0;background-color: #ffff00;border-style: none;padding-top: 0;">
                    <i class="fa fa-map-marker"
                        style="font-size: 13px;width: 3%;padding-left: 5%;color: #000c4f;"></i><span
                        style="font-size: 13px;padding-left: 7%;width: 40%;color: #000c4f;font-family: 'Montserrat Regular';">Estás
                        en {{ $municipio->nombre }}</span>
                </div>
            </center>
            <div class="sidebar-content">
                <a class="btn btn-primary w-100 sidebar-btn" role="button" href="/"
                    style="padding-top: 2%; padding-bottom: 2%; border-radius: 4px; background: #fff; color: #000c4f; font-size: 13px; border: 1px solid #000c4f; font-family: 'ITC Avant Garde Gothic Std Demi'; text-align: left;"><img
                        src="/assets/img/casa.svg?h=7334c2a44666ed6638f133cd6da94fa7"
                        style="width: 15%; margin-right:5%;" />Inicio</a>
                <a class="btn btn-primary w-100 sidebar-btn" role="button" href="#"
                    style="padding-top: 2%; padding-bottom: 2%; border-radius: 4px; background: #fff; color: #000c4f; font-size: 13px; border: 1px solid #000c4f; font-family: 'ITC Avant Garde Gothic Std Demi'; text-align: left;"><img
                        src="/assets/img/mapa.svg?h=d408d38985f98701d1e716a42e786cdf"
                        style="width: 15%; margin-right:5%;" />Ciudad</a>
                <a class="btn btn-primary w-100 sidebar-btn" role="button" href="#"
                    style="padding-top: 2%; padding-bottom: 2%; border-radius: 4px; background: #fff; color: #000c4f; font-size: 13px; border: 1px solid #000c4f; font-family: 'ITC Avant Garde Gothic Std Demi'; text-align: left;"><img
                        src="/assets/img/btn_soy_turista.svg?h=e09bcde756e83b96e09615f2248cc955"
                        style="width: 15%; margin-right:5%;" />Soy Turista</a>
                <a class="btn btn-primary w-100 sidebar-btn" role="button" href="#"
                    style="padding-top: 2%; padding-bottom: 2%; border-radius: 4px; background: #fff; color: #000c4f; font-size: 13px; border: 1px solid #000c4f; font-family: 'ITC Avant Garde Gothic Std Demi'; text-align: left;"><img
                        src="/assets/img/btn_domicilios.svg?h=70ef7ca953911d3c38d1f9381ec09e36"
                        style="width: 15%; margin-right:5%;" />Directorio</a>
                <a class="btn btn-primary w-100 sidebar-btn" role="button" href="#"
                    style="padding-top: 2%; padding-bottom: 2%; border-radius: 4px; background: #fff; color: #000c4f; font-size: 13px; border: 1px solid #000c4f; font-family: 'ITC Avant Garde Gothic Std Demi'; text-align: left;"><img
                        src="/assets/img/btn_transporte.svg?h=c641b1c38fb0a679afac8483fb019b79"
                        style="width: 15%; margin-right:5%;" />Transporte</a>
                <a class="btn btn-primary w-100 sidebar-btn" role="button" href="#"
                    style="padding-top: 2%; padding-bottom: 2%; border-radius: 4px; background: #fff; color: #000c4f; font-size: 13px; border: 1px solid #000c4f; font-family: 'ITC Avant Garde Gothic Std Demi'; text-align: left;"><img
                        src="/assets/img/btn_emergencias.svg?h=76fa7052ed4ac591ce833a0418a2c3b6"
                        style="width: 15%; margin-right:5%;" />Emergencias</a>
                <a class="btn btn-primary w-100 sidebar-btn" role="button" href="#"
                    style="padding-top: 2%; padding-bottom: 2%; border-radius: 4px; background: #fff; color: #000c4f; font-size: 13px; border: 1px solid #000c4f; font-family: 'ITC Avant Garde Gothic Std Demi'; text-align: left;"><img
                        src="/assets/img/condiciones.svg?h=c8118fe2f7132ef4e5d6fcd10b1c758c"
                        style="width: 15%; margin-right:5%;" />Condiciones de Uso</a>
                <a class="btn btn-primary w-100 sidebar-btn" role="button" href="#"
                    style="padding-top: 2%; padding-bottom: 2%; border-radius: 4px; background: #fff; color: #000c4f; font-size: 13px; border: 1px solid #000c4f; font-family: 'ITC Avant Garde Gothic Std Demi'; text-align: left;"><img
                        src="/assets/img/servicios.svg?h=34a218e6ad61fda8d5a46ab79f024bef"
                        style="width: 15%; margin-right:5%;" />Contáctenos</a>
                <center style="margin-top:5%;"><span
                        style="font-size: 13px;color: #505050;font-family: 'ITC Avant Garde Gothic Std Demi'; ">INGENIO
                        360</span></center>
            </div>
        </div>
        <div id="content" style="border-style: none;height: 15%;">
            <div class="container container-topbar"><button class="btn btn-primary open-sidebar" type="button"
                    style="margin: 0px;padding-left: 1%;padding-right: 1%;"><i class="fa fa-bars hamburger-btn"
                        style="font-size: 24px;text-align: left;"></i></button><img style="width: 6%;"
                    src="https://drive.google.com/uc?id=1qTTNaHsQRNqZeiv-F6rhwWS_yLvtO4N7" />
                <div style="width: 60%;text-align: left;margin-left: 0%;"><a class="navbar-brand" href="#"
                        style="width: 100%;margin-right: 0;color: #fff;font-size: 16px;line-height: 10px;font-family: 'ITC Avant Garde Gothic Std Demi';">TODO
                        LO QUE NECESITAS</a><a class="navbar-brand" href="#"
                        style="width: 100%;margin-right: 0;color: #fffF00;font-size: 22px;line-height: 10px;font-family: 'ITC Avant Garde Gothic Std Bold';">EN
                        UN SOLO SITIO</a></div>
                <a onclick="goBack()">
                    <i class="fa fa-mail-reply" style="width: 10%;font-size: 25px;color: #fff;"></i>
                </a>
            </div>
            <div class="container"
                style="padding-left: 0;padding-right: 0;width: 100%;border-style: none;color: transparent;">
                <div class="row"
                    style="width: 100%;margin-right: 0;margin-left: 0;border-style: none;background: #f2f2f2;">
                    <div class="col-md-6"
                        style="width: 45%;padding-right: 0;padding-left: 0;background: linear-gradient(90deg, #ffff00 83%, #f2f2f2 100%), #ffff00;border-style: none;padding-top: 0;">
                        <i class="fa fa-map-marker"
                            style="font-size: 13px;width: 3%;padding-left: 5%;color: #000c4f;"></i><span
                            style="font-size: 13px;padding-left: 7%;width: 40%;color: #000c4f;font-family: 'Montserrat Regular';">Estás
                            en {{ $municipio->nombre }}</span>
                    </div>
                    <div class="col-md-6"
                        style="width: 55%;padding-right: 0px;padding-left: 0px;background: #f2f2f2;border-style: none;">
                        <i class="fa fa-search"
                            style="font-size: 13px;padding-left: 3%;color: #000c4f;border-style: none;"></i><input
                            type="search" class="form-control-sm"
                            style="width: 75%;height: 20px;border-radius: 7px;padding-left: 3%;margin-left: 2%;color: #000c4f;font-family: 'Montserrat Regular';font-size: 14px;text-align: left;margin-top: 0px;margin-bottom: 2%;border: 1px solid #000c4f ;border-bottom-width: 1px;"
                            placeholder="Qué Buscas?" /><i class="fa fa-microphone"
                            style="font-size: 16px;padding-left: 3%;color: #000c4f;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End: Collapsible sidebar left or right . Content overla -->

@show
<div class="container" style="padding: 0 !important;">
    @yield('content')
</div>
 <!-- Start: Footer Basic -->
 <div class="footer-basic" style="padding-bottom: 0;padding-top: 0;">
        <footer style="width: 100%;">
            <!-- Start: Social Icons -->
            <div class="social" style="width: 100%;padding-bottom: 0;">
            <a href="#" style="width: 15%;height: none;margin-left: 0%;margin-right: 0;opacity: 1;line-height: 0px;border-top-left-radius: none;border-top-right-radius: 0;border-bottom-right-radius: 0;border-style: none;border-right: 2px solid #000C4F ;"><img src="/assets/img/mapa.svg?h=d408d38985f98701d1e716a42e786cdf" style="width: 80%;margin-bottom: 10%;"><span style="font-size: 9px;">MAPA</span></a>
            <a href="#" style="width: 15%;height: none;margin-left: 0%;margin-right: 0;opacity: 1;line-height: 0px;border-top-left-radius: none;border-top-right-radius: 0;border-bottom-right-radius: 0;border-style: none;border-right: 2px solid #000C4F ;"><img src="/assets/img/comidas.svg?h=b6938b632794e078d60944a42e08cf2e" style="width: 80%;margin-bottom: 10%;"><span style="font-size: 9px;">COMIDAS</span></a>
            <a href="#" style="width: 15%;height: none;margin-left: 0%;margin-right: 0;opacity: 1;line-height: 0px;border-top-left-radius: none;border-top-right-radius: 0;border-bottom-right-radius: 0;border-style: none;border-right: 2px solid #000C4F ;"><img src="/assets/img/hospedaje.svg?h=811d29000a70250b3b70f60a79406116" style="width: 80%;margin-bottom: 10%;"><span style="font-size: 9px;">HOSPEDAJE</span></a>
            <a href="#" style="width: 15%;height: none;margin-left: 0%;margin-right: 0;opacity: 1;line-height: 0px;border-top-left-radius: none;border-top-right-radius: 0;border-bottom-right-radius: 0;border-style: none;border-right: 2px solid #000C4F ;"><img src="/assets/img/ocio.svg?h=595d9f51f91f2526dd288581bdf87a3d" style="width: 80%;margin-bottom: 10%;"><span style="font-size: 9px;">OCIO</span></a>
            <a href="#" style="width: 15%;height: none;margin-left: 0%;margin-right: 0;opacity: 1;line-height: 0px;border-top-left-radius: none;border-top-right-radius: 0;border-bottom-right-radius: 0;border-style: none;border-right: 2px solid #000C4F ;"><img src="/assets/img/bancos.svg?h=b2c6029cac07ada31f0971952002ffe3" style="width: 80%;margin-bottom: 10%;"><span style="font-size: 9px;">BANCOS</span></a>
            <a href="#" style="width: 15%;height: none;margin-left: 0%;margin-right: 0;opacity: 1;line-height: 0px;border-top-left-radius: none;border-top-right-radius: 0;border-bottom-right-radius: 0;border-style: none;border-right: 2px none var(--dark) ;"><img src="/assets/img/artesanias.svg?h=5b8e6ad8fb7f268316922e9795cc63a2" style="width: 80%;margin-bottom: 10%;"><span style="font-size: 9px;margin-top: 0;">ARTESANIAS</span></a>
            </div><!-- End: Social Icons -->
        </footer>
    </div><!-- End: Footer Basic -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script
    src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js">
</script>
<script src="/assets/js/script.min.js?h=618b97a50c192fc65f74b6a8b801de57"></script>
<script>
    function goBack() {
      window.history.back();
    }
    </script>
</body>

</html>
