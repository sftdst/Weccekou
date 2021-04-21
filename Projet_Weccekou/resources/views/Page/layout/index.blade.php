<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WECCEKOU - Landing Page</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body id="page-top" class="landing-page no-skin-config">
<div class="navbar-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">WECCEKOU</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="#page-top">Acceuil</a></li>
                    <li><a class="page-scroll" href="#trading">Trading</a></li>
                    <li><a class="page-scroll" href="#features">Echanger</a></li>
                    <li><a class="page-scroll" href="#contact">Contact</a></li>
                    <li><a class="" href="login.html">connexion</a></li>
                    <li><a class="" href="register.html">inscription</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h1>WECCEKOU<br/>
                        votre plateforme,<br/>
                        d'echange cryptomonnaie<br/>
                        et de trading en Afrique</h1>
                    <p>l'echange devient plus simple grace au paiement local.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="register.html" role="button">Connexion</a>
                        <a class="btn btn-lg btn-primary" href="{{URL::to('/registration')}}" role="button">Inscription</a>
                        <!-- <a class="caption-link" href="#" role="button">Inspinia Theme</a> -->
                    </p>
                </div>
                <div class="carousel-image wow zoomIn">
                    <img src="img/landing/laptop.png" alt="laptop"/>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one"></div>

        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption blank">
                    <h1>l'echange deviens plus simple <br/> utiliser votre smartphone.</h1>
                    <p>avec votre portefeuille local acheter en toute simplicité.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back two"></div>
        </div>
    </div>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- slide -->
<section  class="container features">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>Echanger plus +120 cryptomonnaies<br/> <span class="navy"> avec votre meilleure plateforme d'echange</span> </h1>
            <p>WECCEKOU portefeuille vous permet de voir votre solde actuelle, échanger les differentes cryptomonnaies, recevoir, traiter et envoyer des paiements en crypto et en fiat. <br/> Parfait pour toute entreprise à la recherche d'outils de paiement rapides, flexibles et axés sur l'innovation : échanges cryptographiques, programmes d'affiliation et au-delà.Créer votre compte WECCEKOU Business gratuit et sans engagement dès aujourd'hui!
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 text-center wow fadeInLeft">
            <div>
                <i class="fa fa-mobile features-icon"></i>
                <h2>Portefeuille multicryptomonnaies</h2>
                <p>stocket plusieurs cryptomonnaie btc ethereum en votre devise de choix</p>
            </div>
            <div class="m-t-lg">
                <i class="fa fa-bar-chart features-icon"></i>
                <h2>Trading</h2>
                <p>Evaluer plus vos possibilités de gains an faisant des speculation avec votre portefeuille cryptomonnaie.</p>
            </div>
        </div>
        <div class="col-md-6 text-center  wow zoomIn">
            <img src="img/landing/perspective.png" alt="dashboard" class="img-responsive">
        </div>
        <div class="col-md-3 text-center wow fadeInRight">
            <div>
                <i class="fa fa-envelope features-icon"></i>
                <h2>Achat et vente</h2>
                <p>achter avec votre paiment electronique visa mastercard orange money wave uba upay proximo postcash.</p>
            </div>
            <div class="m-t-lg">
                <i class="fa fa-google features-icon"></i>
                <h2>Transfert</h2>
                <p>Evaluer plus vos possibilités de gains an faisant des speculation avec votre portefeuille cryptomonnaie.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>MULTI-DEVISE</h1>
            <p>Acheter avec les paiement local et internationnal </p>
            <p>10+ monnaies électroniques
                sur votre compte
                USD, EUR, BTC, LTC, ETH, DASH, BCH <br>
                et autres monnaies électroniques dans votre
                compte PAYEER gratuit !</p>
        </div>
    </div>
    <div class="row features-block">
        <div class="col-lg-6 features-text wow fadeInLeft">
            <small>Weccekou</small>
            <h2>Portefeuile personnel </h2>
            <p>WECCEKOU portefeuille vous permet de voir votre solde actuelle. échanger les differentes cryptomonnaies. pour recevoir, traiter et envoyer des paiements en crypto et en fiat. Parfait pour toute entreprise à la recherche d'outils de paiement rapides, flexibles et axés sur l'innovation: échanges cryptographiques, programmes d'affiliation et au-delà.Créer votre compte <a class="" href="register.html">WECCEKOU</a> Business gratuit et sans engagement dès aujourd'hui!
            </p>
            <a href="" class="btn btn-primary">Learn more</a>
        </div>
        <div class="col-lg-6 text-right wow fadeInRight">
            <img src="{{asset('img/landing/dashboard.png')}}" alt="dashboard" class="img-responsive pull-right">

        </div>
    </div>
</section>
<!-- fin slide -->

<section id="trading" class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Trader en quelque clique avec votre smartphone</h1>
                <p>l'echange devient plus facile avec votre version mobile addapte à vos requetes </p>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-lg-3 features-text wow fadeInLeft">
                <small>WECCEKOU</small>
                <h2>MOBILE </h2>
                <p>votre apllication mobile vous donne plus de fonctionnalité avec plus de facilter d'echange et de rapidité et avec votre portefeuille integrer </p>
                <a href="" class="btn btn-primary">Learn more</a>
            </div>
            <div class="col-lg-6 text-right m-t-n-lg wow zoomIn">
                <img src="{{asset('img/landing/iphone.jpg')}}" class="img-responsive" alt="dashboard">
            </div>
            <div class="col-lg-3 features-text text-right wow fadeInRight">
                <small>WECCEKOU</small>
                <h2>MOBILE </h2>
                <p>votre apllication mobile vous donne plus de fonctionnalité avec plus de facilter d'echange et de rapidité et avec votre portefeuille integrer.</p>
                <a href="" class="btn btn-primary">Learn more</a>
            </div>
        </div>
    </div>

</section>

<section id="contact" class="gray-section team contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Contactez Nous</h1>
                <p>grace à notre systeme de paiment internationale faite  votre transaction partout dans le monde.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 wow fadeInLeft">
                <div class="team-member">
                    <img src="{{asset('img/landing/mathart.jpeg')}}" class="img-responsive img-circle img-small" alt="">
                    <h4><span class="navy">Makhtar</span> Diakhoumpa</h4>
                    <p>Informaticien dev web mobile et gamming expert trader. </p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member wow zoomIn">
                    <img src="{{asset('img/landing/mathart.jpeg')}}" class="img-responsive img-circle img-small
                                " alt="">
                    <h4><span class="navy">Bamba</span> DIAW</h4>
                    <p>informaticien developpeur web fullstack.</p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInRight">
                <div class="team-member">
                    <img src="{{asset('img/landing/mathart.jpeg')}}" class="img-responsive img-circle img-small" alt="">
                    <h4><span class="navy">Diakhoumpa</span> Makhtar</h4>
                    <p>specialiste en marketing digital.</p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-lg-3 col-lg-offset-3">
                <address>
                    <strong><span class="navy">WECCEKOU, Inc.</span></strong><br/>
                    Arafat <br/>
                    Arafat 2 Rufisque Dakar Sénégal<br/>
                    <abbr title="Phone">P:+221 77 820 42 12 +221 77 315 49 39</abbr>
                </address>
            </div>
            <div class="col-lg-4">
                <p class="text-color">
                    Leader dans le secteur de transfert des cryptommaie et de la technologie avec une grande expertise dans le domaine,
                </p>
            </div>
            <div class="col-lg-12 text-center">
                <a href="mailto:test@email.com" class="btn btn-primary">Send us mail</a>
                <p class="m-t-sm">
                    Or follow us on social platform
                </p>
                <ul class="list-inline social-icon">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p><strong>&copy; 2021 WECCEKOU</strong><br/> cLeader dans le secteur de transfert des cryptommaie et de la technologie avec une grande expertise dans le domaine.</p>
            </div>
        </div>
    </div>
</section>

<!-- Mainly scripts -->
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('js/inspinia.js')}}"></script>
<script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>
<script src="{{asset('js/plugins/wow/wow.min.js')}}"></script>


<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
            header = document.querySelector( '.navbar-default' ),
            didScroll = false,
            changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>

</body>
</html>
