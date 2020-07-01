
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Enhenyero Bootstrap Template</title>
    <meta name="description" content="Enhenyero Bootstrap Template is perfect for Industrial, Engineering and other Corporate Companies. It is fully responsive, well docommented codes with clean and awesome design.">
    <meta name="keywords" content="bootstrap, industrial theme, engineering theme, responsive, modern, clean">
    <meta name="author" content="Bootstrap Seven Themes">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset(env('THEME')) }}/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset(env('THEME')) }}/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset(env('THEME')) }}/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset(env('THEME')) }}/img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{ asset(env('THEME')) }}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset(env('THEME')) }}/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{ asset(env('THEME')) }}/fonts/icons/flaticon.css">

    <!-- Nivo Lightbox
    ================================================== -->
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/nivo-lightbox.css" >
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/nivo_lightbox_themes/default/default.css">

    <!-- Slider
    ================================================== -->
    <link href="{{ asset(env('THEME')) }}/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="{{ asset(env('THEME')) }}/css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{ asset(env('THEME')) }}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset(env('THEME')) }}/css/responsive.css">

    <!-- Google Font
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat+Subrayada:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>

    <!-- Top Navigation
    ========================-->
    @yield('header')

    <!-- Main Navigation
    ========================-->
    @yield('content')

    <!-- Footer Area -->
    <div id="en-footer">
        <div class="footer-content">
            <div class="container">

                <div class="row">

                    <div class="col-sm-5 col-md-5">
                        <div class="widget">
                            <div class="widget-title text-left">
                                <h4>About Us</h4>
                                <hr>
                            </div>
                            <a class="logo footer-logo" href="#">Enhenyero</a>
                            <br>
                            <small>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </small>
                            <br>
                            <br>
                            <address>
                                <strong>Enhenyero INC.</strong><br>
                                Igbalangao, Bugasong, Antique<br>
                                Philippines 5704<br>
                                <abbr title="Phone">P:</abbr> 123-456-7890
                            </address>

                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="widget">
                            <div class="widget-title text-left">
                                <h4>Services</h4>
                                <hr>
                            </div>
                            <ul class="list-unstyled list-block">
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Civil and Architecture</a></li>
                                <li><i class="fa fa-long-arrow-right"></i> <a href="#">Mechanical Engineering</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Industrial Engineering</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Electrical and Electronics</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Communications Engineering</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Constructions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-3">
                        <div class="widget">
                            <div class="widget-title text-left">
                                <h4>Page Links</h4>
                                <hr>
                            </div>
                            <ul class="list-unstyled list-block">
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">About</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Our Team</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Works</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Services</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Latest News</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Contact</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Career</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="clearfix"></div>
                <div class="smallspacer"></div>

                <div class="row">

                    <div class="col-sm-3 col-md-3">
                        <div class="widget">
                            <div class="widget-title text-left">
                                <h4>General Info</h4>
                                <hr>
                            </div>
                            <ul class="list-unstyled list-block">
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">FAQs</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Privacy Policy</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Terms of Use</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Support</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Blog Posts</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Error Page</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Pricing</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="widget">
                            <div class="widget-title text-left">
                                <h4>Subscribe With Us</h4>
                                <hr>
                            </div>
                            <p>Get the latest report about the project and company profile.</p>
                            <!--Newsletter form start-->
                            <form role="form" action="newsletter.php" method="post" autocomplete="off">
                                <div class="form-group">
                                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required >
                                </div>
                                <button type="submit" class="btn btn-default en-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-5 col-md-5">
                        <div class="widget">
                            <div class="widget-title text-left">
                                <h4>Latest Posts</h4>
                                <hr>
                            </div>

                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                      <img class="media-object" alt="64x64" src="http://placehold.it/64x64">
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <a href="#"><h5>Map Out And Show Appealing Business Design Architecture</h5></a>
                                    <small>So you want to put up a business? Before you proceed, where do the funds come from?...</small>
                                  </div>
                            </div>

                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                      <img class="media-object" alt="64x64" src="http://placehold.it/64x64">
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <a href="#"><h5>Construction Going Green - Green Architecture</h5></a>
                                    <small>Our planet is really feeling the heat of Global Warming. Humans are...</small>
                                  </div>
                            </div>

                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                      <img class="media-object" alt="64x64" src="http://placehold.it/64x64">
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <a href="#"><h5>Map Out And Show Appealing Business Design Architecture</h5></a>
                                    <small>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo...</small>
                                  </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="bottom-footer">
            <div class="container text-center">
                <p>All Rights Reserved © 2015 | <a href="#">Enhenyero Company INC.</a></p>
            </div>
        </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/bootstrap.js"></script>

    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/owl.carousel.js"></script><!-- Owl Carousel Plugin -->
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/nivo-lightbox.min.js"></script><!-- LightBox Nivo -->

    <!-- Portfolio Filter -->
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/imagesloaded.js"></script>
    
    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/main.js"></script>

    </body>
</html>