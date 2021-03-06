<!DOCTYPE html>
<html>  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <title>El Papa en Villavicencio</title>

    <!-- Essential styles -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css"> 
    <link rel="stylesheet" href="../assets/fancybox/jquery.fancybox.css?v=2.1.5" media="screen"> 
     
    <!-- Boomerang styles -->
        <link id="wpStylesheet" type="text/css" href="../css/global-style.css" rel="stylesheet" media="screen">
        

    <!-- Favicon -->
    <link href="../images/favicon.png" rel="icon" type="image/png">

    <!-- Assets -->
    <link rel="stylesheet" href="../assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../assets/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../assets/sky-forms/css/sky-forms.css">    
    <!--[if lt IE 9]>
        <link rel="stylesheet" href="assets/sky-forms/css/sky-forms-ie8.css">
    <![endif]-->

    <!-- Required JS -->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-ui.min.js"></script>

    <!-- Page scripts -->
    <link rel="stylesheet" href="../assets/layerslider/css/layerslider.css" type="text/css">

</head>
<body>
    <!-- MODALS -->

    <!-- MOBILE MENU - Option 2 -->
    <section id="navMobile" class="aside-menu left">
        <form class="form-horizontal form-search">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button id="btnHideMobileNav" class="btn btn-close" type="button" title="Hide sidebar"><i class="fa fa-times"></i></button>
                </span>
            </div>
        </form>
        <div id="dl-menu" class="dl-menuwrapper">
            <ul class="dl-menu"></ul>
        </div>
    </section> 

    <!-- SLIDEBAR -->
    <section id="asideMenu" class="aside-menu right">
        <form class="form-horizontal form-search">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                    <button id="btnHideAsideMenu" class="btn btn-close" type="button" title="Hide sidebar"><i class="fa fa-times"></i></button>
                </span>
            </div>
        </form>
        
        <h5 class="side-section-title">Optional sidebar menu</h5>
        <div class="nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Work</a></li>
                <li><a href="#">Online shop</a></li>
            </ul>
        </div>
        
        <h5 class="side-section-title">Social media</h5>
        <div class="social-media">
            <a href="#"><i class="fa fa-facebook facebook"></i></a>
            <a href="#"><i class="fa fa-google-plus google"></i></a>
            <a href="#"><i class="fa fa-twitter twitter"></i></a>
        </div>
        
        <h5 class="side-section-title">Contact information</h5>
        <div class="contact-info">
            <h5>Address</h5>
            <p>5th Avenue, New York - United States</p>
            
            <h5>Email</h5>
            <p>hello@webpixels.ro</p>
            
            <h5>Phone</h5>
            <p>+10 724 1234 567</p>
        </div>
    </section>

  
    <div id="divHeaderWrapper">
        <header class="header-standard-2"> 

            <div class="navbar navbar-fixed navbar-wp navbar-base navbar-arrow mega-nav" data-spy="affix" data-offset-top="563" role="navigation" >
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle navbar-toggle-aside-menu">
                            <i class="fa fa-outdent icon-custom"></i>
                        </button>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html" title="Boomerang | One template. Infinite solutions">
                            <img src="../images/Firma.png" alt="" style="padding: 0.1px; ">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/site/index.php/home">Inicio</a></li>
                            <li><a href="/site/index.php/builder">La visita</a></li>
                            <li><a href="/site/index.php/builder">Itinerario</a></li>
                            <li><a href="/site/index.php/builder">Noticias</a></li>
                            <li><a href="/site/index.php/builder">Participar</a></li>
                            <li><a href="/site/index.php/builder">Villavicencio</a></li>
                            <li><a href="/site/index.php/builder">Prensa</a></li>
                            
                            <li class="hidden-xs">
                                <a href="#" id="cmdAsideMenu" class="dropdown-toggle dropdown-form-toggle" title="Open sidebar">
                                    <i class="fa fa-outdent"></i>
                                </a>
                            </li>
                        </ul>
                       
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </header>        
    </div>


       <?php 
        echo $contenido;
       ?>
        <!-- /#page-wrapper -->

     <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="col">
                       <h4>Contactanos</h4>
                       <ul>
                            <li>Cra 39 N° 34 -19 Barzal Alto - Villavicencio, Meta, Colombia</li>
                            <li>Teléfono: +57 8 661 0537 - +57 316 576 2678 </li>
                            <li>Email: <a href="mailto:hello@example.com" title="Email Us">info@elpapaenvillavicencio.com</a></li>
                        </ul>
                     </div>
                </div>
                <div class="col-md-4">
                    <div class="col col-social-icons">
                        <h4>Síguenos</h4>
                        <a href="https://www.facebook.com/elpapaenvillavicencio/"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UC-mQzyZ_nyInJGhNELJcDnA"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="col">
                        <h4>Acerca de Nosotros</h4>
                        <p class="no-margin">
                            Este sitio web es administrado por la Arquidiócesis de Villavicencio. Para mayor información visita <a href="https://www.arquidiocesisdevillavicencio.org.co">Arquidiócesis de Villavicencio</a>
                        
                        </p>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <div class="row">
                <div class="col-lg-9 copyright">
                    2017 © Todos los derechos reservados.
                </div>
                <div class="col-lg-3"> Desarrollado por
                    <a href="http://www.ideartech.co" title="Hecho con ♥" target="_blank" class="">
                        iDeartech
                    </a>
                </div>
            </div>
        </div>
    </footer>


<!-- Essentials -->
<script src="../js/modernizr.custom.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="../js/jquery.easing.js"></script>
<script src="../js/jquery.metadata.js"></script>
<script src="../js/jquery.hoverup.js"></script>
<script src="../js/jquery.hoverdir.js"></script>
<script src="../js/jquery.stellar.js"></script>

<!-- Boomerang mobile nav - Optional  -->
<script src="../assets/responsive-mobile-nav/js/jquery.dlmenu.js"></script>
<script src="../assets/responsive-mobile-nav/js/jquery.dlmenu.autofill.js"></script>

<!-- Forms -->
<script src="../assets/ui-kit/js/jquery.powerful-placeholder.min.js"></script> 
<script src="../assets/ui-kit/js/cusel.min.js"></script>
<script src="../assets/sky-forms/js/jquery.form.min.js"></script>
<script src="../assets/sky-forms/js/jquery.validate.min.js"></script>
<script src="../assets/sky-forms/js/jquery.maskedinput.min.js"></script>
<script src="../assets/sky-forms/js/jquery.modal.js"></script>

<!-- Assets -->
<script src="../assets/hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script src="../assets/page-scroller/jquery.ui.totop.min.js"></script>
<script src="../assets/mixitup/jquery.mixitup.js"></script>
<script src="../assets/mixitup/jquery.mixitup.init.js"></script>
<script src="../assets/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="../assets/waypoints/waypoints.min.js"></script>
<script src="../assets/milestone-counter/jquery.countTo.js"></script>
<script src="../assets/easy-pie-chart/js/jquery.easypiechart.js"></script>
<script src="../assets/social-buttons/js/rrssb.min.js"></script>
<script src="../assets/nouislider/js/jquery.nouislider.min.js"></script>
<script src="../assets/owl-carousel/owl.carousel.js"></script>
<script src="../assets/bootstrap/js/tooltip.js"></script>
<script src="../assets/bootstrap/js/popover.js"></script>

<!-- Sripts for individual pages, depending on what plug-ins are used -->
<script src="../assets/layerslider/js/greensock.js" type="text/javascript"></script>
<script src="../assets/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="../assets/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<!-- Initializing the slider -->
<script>
    jQuery("#layerslider").layerSlider({
        pauseOnHover: true,
        autoPlayVideos: false,
        skinsPath: '../assets/layerslider/skins/',
        responsive: false,
        responsiveUnder: 1280,
        layersContainer: 1280,
        skin: 'borderlessdark3d',
        hoverPrevNext: true,
    });
</script>

<!-- Boomerang App JS -->
<script src="../js/wp.app.js"></script>
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->

<!-- Temp -- You can remove this once you started to work on your project -->
<script src="../js/jquery.cookie.js"></script>
<script src="../js/wp.switcher.js"></script>
<script type="text/javascript" src="../js/wp.ga.js"></script>
<script type="text/javascript" src="../js/jquery.downCount.js"></script>

    <script class="source" type="text/javascript">
        $('.countdown').downCount({
            date: '08/09/2017 12:00:00',
            offset: +10
        }, function () {
            alert('WOOT WOOT, done!');
        });
    </script>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>

</body>
</html>
