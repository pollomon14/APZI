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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152927881-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-152927881-1');

    </script>

</head>

<body
    style="border-radius: 0px;border-style: none;border-top-width: 1px;border-right-width: 0px;border-right-style: none;border-bottom-width: 1px;border-bottom-style: none;border-left-width: 0px;">

    <main>
        <div class="content-movil">
            <!-- Start: Collapsible sidebar left or right . Content overla -->
            <div style="border-style: none;background: #000c4f;position:fixed;z-index:101;">
                <div class="overlay"></div>
                <div id="sidebar">
                    <div class="sidebar-header">
                        <div id="close-sidebar" style="background: #000c4f;"><i class="fa fa-chevron-left"></i></div>
                        <center style="max-width:100%; margin-left:0px; margin-top:20%;"><img
                                src="/assets/img/logo4.png?h=7ae7fe938b90454021c2e842cf2a753d" style="width: 30%;" />
                        </center>
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
                        <!-- Start: Mega Menu Dropdown 100% Editable - Ambrodu -->

                        <div class="dropdown megamenu"
                            style="width: 100%;margin-left: 5%;  padding-bottom: 2%; padding-top: 2%;"><button
                                class="btn btn-primary dropdown-toggle" aria-expanded="false" data-toggle="dropdown"
                                type="button"
                                style="padding-top: 2%;margin:0;width:90%; padding-bottom: 2%; border-radius: 4px; background: #fff; color: #000c4f; font-size: 13px; border: 1px solid #000c4f; font-family: 'ITC Avant Garde Gothic Std Demi'; text-align: left;"><img
                                    src="/assets/img/idioma.svg"
                                    style="width: 15%; margin-right:5%;" />Elige Tu Idioma&nbsp;</button>
                            <div class="dropdown-menu animate slideIn" style="background: #fff; width:90%">
                                <div class="container" style="padding-bottom: 0;">
                                    <div class="row">
                                        <div class="col-md-4"
                                            style="padding: 0; width: 88%; border: 1px solid #000c4f; border-radius: 0px 0 4px 4px;">

                                            <hr style="background: #000c4f; margin-top:5%; margin-bottom:5%;">
											<a href="#" onclick="doGTranslate('es|en');return false;" title="English" class="gflag nturl"
                            style="background-position:-0px -0px; display:inline-flex;">
							<img src="//gtranslate.net/flags/blank.png"
                                height="16" width="16" alt="English" style="margin-right: 5px;" />
                                            <h5
                                                style="color:#000c4f;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                                              Ingles</h5></a>
                                              <hr style="background: #000c4f; margin-top:5%; margin-bottom:5%;">
											<a href="#"
                            onclick="doGTranslate('es|fr');return false;" title="French" class="gflag nturl"
                            style="background-position:-200px -100px; display:inline-flex;">
							<img src="//gtranslate.net/flags/blank.png"
                                height="16" width="16" alt="French" style="margin-right: 5px;"/>
                                            <h5
                                                style="color:#000c4f;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                                                Frances</h5></a>
                                                <hr style="background: #000c4f; margin-top:5%; margin-bottom:5%;">
											<a href="#"
                            onclick="doGTranslate('es|de');return false;" title="German" class="gflag nturl"
                            style="background-position:-300px -100px; display:inline-flex;">
							<img src="//gtranslate.net/flags/blank.png"
                                height="16" width="16" alt="German" style="margin-right: 5px;" />
                                            <h5
                                                style="color:#000c4f;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                                               </i>Aleman</h5></a>
                                               <hr style="background: #000c4f; margin-top:5%; margin-bottom:5%;">
											<a href="#"
                            onclick="doGTranslate('es|it');return false;" title="Italian" class="gflag nturl"
                            style="background-position:-600px -100px; display:inline-flex;">
							<img src="//gtranslate.net/flags/blank.png"
                                height="16" width="16" alt="Italian" style="margin-right: 5px;"/>
                                            <h5
                                                style="color:#000c4f;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                                              Italiano</h5></a>
                                              <hr style="background: #000c4f; margin-top:5%; margin-bottom:5%;">
											<a href="#"
                            onclick="doGTranslate('es|pt');return false;" title="Portuguese" class="gflag nturl"
                            style="background-position:-300px -200px; display:inline-flex;">
							<img src="//gtranslate.net/flags/blank.png"
                                height="16" width="16" alt="Portuguese" style="margin-right: 5px;" />
                                            <h5
                                                style="color:#000c4f;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';">
                                               Portugues</h5></a>
                                               <hr style="background: #000c4f; margin-top:5%; margin-bottom:5%;">
											<a href="#"
                            onclick="doGTranslate('es|es');return false;" title="Spanish" class="gflag nturl"
                            style="background-position:-600px -200px; display:inline-flex;">
							<img src="//gtranslate.net/flags/blank.png"
                                height="16" width="16" alt="Spanish" style="margin-right: 5px;" />
                                            <h5
                                                style="color:#000c4f;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium'; ">
                                               Español</h5></a>
                                               <hr style="background: #000c4f; margin-top:5%; margin-bottom:5%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End: Mega Menu Dropdown 100% Editable - Ambrodu -->

                        <style type="text/css">
                            <!--
                            a.gflag {
                                vertical-align: middle;
                                font-size: 16px;
                                padding: 1px 0;
                                background-repeat: no-repeat;
                                background-image: url(//gtranslate.net/flags/16.png);
                            }

                            a.gflag img {
                                border: 0;
                            }

                            a.gflag:hover {
                                background-image: url(//gtranslate.net/flags/16a.png);
                            }

                            #goog-gt-tt {
                                display: none !important;
                            }

                            .goog-te-banner-frame {
                                display: none !important;
                            }

                            .goog-te-menu-value:hover {
                                text-decoration: none !important;
                            }

                            body {
                                top: 0 !important;
                            }

                            #google_translate_element2 {
                                display: none !important;
                            }

                            -->
                        </style>

                        <div id="google_translate_element2"></div>
                        <script type="text/javascript">
                            function googleTranslateElementInit2() {
                                new google.translate.TranslateElement({
                                    pageLanguage: 'es',
                                    autoDisplay: false
                                }, 'google_translate_element2');
                            }

                        </script>
                        <script type="text/javascript"
                            src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2">
                        </script>


                        <script type="text/javascript">
                            /* <![CDATA[ */
                            eval(function(p, a, c, k, e, r) {
                                e = function(c) {
                                    return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String
                                        .fromCharCode(c + 29) : c.toString(36))
                                };
                                if (!''.replace(/^/, String)) {
                                    while (c--) r[e(c)] = k[c] || e(c);
                                    k = [function(e) {
                                        return r[e]
                                    }];
                                    e = function() {
                                        return '\\w+'
                                    };
                                    c = 1
                                };
                                while (c--)
                                    if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
                                return p
                            }('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',
                                43, 43,
                                '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'
                                .split('|'), 0, {}))
                            /* ]]> */

                        </script>


                        <div class="dropdown megamenu"
                            style="width: 100%;margin-left: 5%;  padding-bottom: 2%; padding-top: 2%;"><button
                                class="btn btn-primary dropdown-toggle" aria-expanded="false" data-toggle="dropdown"
                                type="button"
                                style="padding-top: 2%;margin:0;width:90%; padding-bottom: 2%; border-radius: 4px; background: #fff; color: #000c4f; font-size: 13px; border: 1px solid #000c4f; font-family: 'ITC Avant Garde Gothic Std Demi'; text-align: left;"><img
                                    src="/assets/img/mapa.svg?h=d408d38985f98701d1e716a42e786cdf"
                                    style="width: 15%; margin-right:5%;" />Elige Tu Ciudad&nbsp;</button>
                            <div class="dropdown-menu animate slideIn" style="background: #fff; width:90%">
                                <div class="container" style="padding-bottom: 0;">
                                    <div class="row">
                                        <div class="col-md-4"
                                            style="padding: 0; width: 88%; border: 1px solid #000c4f; border-radius: 0px 0 4px 4px;">

                                            <hr style="background: #000c4f;">
                                            <a href="{{ route('index',1) }}">
                                            <h5
                                                style="color:#000c4f;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';line-height: 6px;">
                                                <i class="fas fa-map-marker-alt"
                                                    style="margin-right: 5%;margin-left: 5%;"></i>Zipaquira</h5></a>
                                            <hr style="background: #000c4f;">
                                            <a href="{{ route('index',2) }}">
                                            <h5
                                                style="color:#000c4f;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';line-height: 6px;">
                                                <i class="fas fa-map-marker-alt"
                                                    style="margin-right: 5%;margin-left: 5%;"></i>Cajica</h5></a>
                                            <hr style="background: #000c4f;">
                                            <a href="{{ route('index',3) }}">
                                            <h5
                                                style="color:#000c4f;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';line-height: 6px;">
                                                <i class="fas fa-map-marker-alt"
                                                    style="margin-right: 5%;margin-left: 5%;"></i>Chia</h5></a>
                                            <hr style="background: #000c4f;">
                                            <a href="{{ route('index',4) }}">
                                            <h5
                                                style="color:#000c4f;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';line-height: 6px;">
                                                <i class="fas fa-map-marker-alt"
                                                    style="margin-right: 5%;margin-left: 5%;"></i>Cogua</h5></a>
                                            <hr style="background: #000c4f;">
                                            <a href="{{ route('index',5) }}">
                                            <h5
                                                style="color:#000c4f;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';line-height: 6px;">
                                                <i class="fas fa-map-marker-alt"
                                                    style="margin-right: 5%;margin-left: 5%;"></i>Sopo</h5></a>
                                            <hr style="background: #000c4f;">        
                                            <a href="{{ route('index',6) }}">        
                                            <h5
                                                style="color:#000c4f;font-size: 14px;font-family: 'ITC Avant Garde Gothic Std Medium';line-height: 6px;">
                                                <i class="fas fa-map-marker-alt"
                                                    style="margin-right: 5%;margin-left: 5%;"></i>Tocancipa</h5></a>
                                            
                                            <hr style="background: #000c4f;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End: Mega Menu Dropdown 100% Editable - Ambrodu -->
                        <hr style="background: #000c4f;">
                        <a class="btn btn-primary w-100 sidebar-btn" role="button" href="{{ route('index',$municipio->id) }}"
                            style="padding-top: 2%; padding-bottom: 2%; border-radius: 4px; background: #fff; color: #000c4f; font-size: 13px; border: 1px solid #000c4f; font-family: 'ITC Avant Garde Gothic Std Demi'; text-align: left;"><img
                                src="/assets/img/casa.svg?h=7334c2a44666ed6638f133cd6da94fa7"
                                style="width: 15%; margin-right:5%;" />Inicio</a>
                        <a class="btn btn-primary w-100 sidebar-btn" role="button" href="{{ route('turismo', $municipio->id) }}"
                            style="padding-top: 2%; padding-bottom: 2%; border-radius: 4px; background: #fff; color: #000c4f; font-size: 13px; border: 1px solid #000c4f; font-family: 'ITC Avant Garde Gothic Std Demi'; text-align: left;"><img
                                src="/assets/img/btn_soy_turista.svg?h=e09bcde756e83b96e09615f2248cc955"
                                style="width: 15%; margin-right:5%;" />Soy Turista</a>
                        <a class="btn btn-primary w-100 sidebar-btn" role="button" href="{{ route('directorio', $municipio->id) }}"
                            style="padding-top: 2%; padding-bottom: 2%; border-radius: 4px; background: #fff; color: #000c4f; font-size: 13px; border: 1px solid #000c4f; font-family: 'ITC Avant Garde Gothic Std Demi'; text-align: left;"><img
                                src="/assets/img/btn_domicilios.svg?h=70ef7ca953911d3c38d1f9381ec09e36"
                                style="width: 15%; margin-right:5%;" />Directorio</a>
                        <a class="btn btn-primary w-100 sidebar-btn" role="button" href="{{ route('taxis', $municipio->id) }}"
                            style="padding-top: 2%; padding-bottom: 2%; border-radius: 4px; background: #fff; color: #000c4f; font-size: 13px; border: 1px solid #000c4f; font-family: 'ITC Avant Garde Gothic Std Demi'; text-align: left;"><img
                                src="/assets/img/btn_transporte.svg?h=c641b1c38fb0a679afac8483fb019b79"
                                style="width: 15%; margin-right:5%;" />Transporte</a>
                        <a class="btn btn-primary w-100 sidebar-btn" role="button" href="{{ route('emergencias', $municipio->id) }}"
                            style="padding-top: 2%; padding-bottom: 2%; border-radius: 4px; background: #fff; color: #000c4f; font-size: 13px; border: 1px solid #000c4f; font-family: 'ITC Avant Garde Gothic Std Demi'; text-align: left;"><img
                                src="/assets/img/btn_emergencias.svg?h=76fa7052ed4ac591ce833a0418a2c3b6"
                                style="width: 15%; margin-right:5%;" />Emergencias</a>
                        <hr style="background: #000c4f;">
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
                <div id="content" style="border-style: none;height: 15%;height:80px;">
                    <div class="container container-topbar" style="height:50px;"><button class="btn btn-primary open-sidebar" type="button"
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
                        style="padding-left: 0;padding-right: 0;width: 100%; height:30px;border-style: none;color: transparent;">
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
                            {!! Form::open(['route' => 'busquedas']) !!}
                                    @csrf
                                  
                                        <i class="fa fa-microphone"
                                    style="font-size: 16px;padding-left: 3%;color: #000c4f;" onclick="procesar()" id="procesar"></i>
                                        <input type="search" name="busqueda" id="texto" class="form-control-sm"
                                        style="width: 70%;height: 20px;border-radius: 7px;padding-left: 3%;margin-left: 2%;color: #000c4f;font-family: 'Montserrat Regular';font-size: 14px;text-align: left;margin-top: 0px;margin-bottom: 2%;border: 1px solid #000c4f ;border-bottom-width: 1px;"
                                        placeholder="Qué Buscas?"/>
                                        <input type="hidden" name="municipio" value={{ $municipio->id }} >
                                        <button><i class="fa fa-search"
                                            style="font-size: 13px;padding-left: 3%;color: #000c4f;border-style: none;"></i>
                                        </button>
                                        {!! Form::close() !!}
                                    </div>
                           


                            <!--<button onkeypress="procesar()" id="procesar">Escuchar</button>-->
                            
                               


                        </div>
                    </div>
                </div>
            </div><!-- End: Collapsible sidebar left or right . Content overla -->

        @show
        <div class="container" style="padding: 0 !important;">
            @yield('content')
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script
            src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js">
        </script>

        <script src="/assets/js/script2.min.js"></script>

        <script>
            function goBack() {
                window.history.back();
            }

        </script>
        <script>
            var recognition;
            var recognizing = false;
            if (!('webkitSpeechRecognition' in window)) {
                alert("¡API no soportada!");
            } else {

                recognition = new webkitSpeechRecognition();
                recognition.lang = "es-VE";
                recognition.continuous = true;
                recognition.interimResults = true;

                recognition.onstart = function() {
                    recognizing = true;
                    console.log("empezando a eschucar");
                }
                recognition.onresult = function(event) {

                    for (var i = event.resultIndex; i < event.results.length; i++) {
                        if (event.results[i].isFinal)
                            document.getElementById("texto").value += event.results[i][0].transcript;
                    }

                    //texto
                }
                recognition.onerror = function(event) {}
                recognition.onend = function() {
                    recognizing = false;
               
                    console.log("terminó de eschucar, llegó a su fin");

                }

            }

            function procesar() {

                if (recognizing == false) {
                    recognition.start();
                    recognizing = true;
             
                } else {
                    recognition.stop();
                    recognizing = false;
              
                }
            }

        </script>



        <script>

            function realizaProceso(valorCaja1, valorCaja2,valorCaja3, valorCaja4){

                $.ajax({
                    type: 'POST',
                    url: "{{ route('contador') }}",
                    data: {
                        nombre: valorCaja2,
                        telefono: valorCaja3,
                        id: valorCaja1,
                        tipo: valorCaja4,
                        '_token': $('input[name=_token]').val(),
                    },
                    success: function(data) {
                        console.log (data['data']);
                        if (data['opcion']=='tel')
                            location.href = "tel:" + data['data'];
                        else if (data['opcion']=='wp')
                        location.href = "https://api.whatsapp.com/send?phone=+57%20" + data['data'];
                    }
                });

            }






                $('#formCheck-1').on("click", function() {
                var elements = document.getElementsByClassName("domicilio");
                if ($(this).is(':checked')) {
                    for (var i = 0; i < elements.length; i++) {
                    //Get the HTML element from the HTMLCollection object.
                    var listItem = elements.item(i);
                    //Log the text inside the list item to the console.
                    if (listItem.value==0){
                        document.getElementsByClassName('row caja')[i].style.display ='none';
                    }

                }

                }
                else{

                    for (var i = 0; i < elements.length; i++) {
                    //Get the HTML element from the HTMLCollection object.
                    var listItem = elements.item(i);
                    //Log the text inside the list item to the console.
                        document.getElementsByClassName('row caja')[i].style.display ='flex';


                }


                }
            });








        </script>
</main>
</div>
</body>

</html>
