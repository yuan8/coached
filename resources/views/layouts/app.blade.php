<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png')}}" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Coached Inc</title>

        <!-- Icon css link -->
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/icofont.css')}}" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="{{asset('vendors/revolution/css/settings.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/revolution/css/layers.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/revolution/css/navigation.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/animate-css/animate.css')}}" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="{{asset('vendors/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/owl-carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js')}} for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="{{asset('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
        <script src="{{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="90">
       
       
       <div id="preloader">
            <div id="preloader_spinner">
				<div class="pre_inner">
					<div class="dot dot-1"></div>
					<div class="dot dot-2"></div>
					<div class="dot dot-3"></div>
				</div>
            </div>
        </div>
       
        <!--================Header Area =================-->
        <header class="dash_tp_menu_area">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{asset('img/logo-white.png')}}" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    @if(Auth::user())
                        <ul class="nav navbar-nav navbar-right">
                              <li class="get_free_btn">
                                    @can('be.student')
                                        <a href="{{route('db.s.index')}}">Student Dashboard</a>
                                    @endcan
                                    @can('be.coached')
                                        <a href="{{route('db.c.index')}}">Coach Dashboard</a>
                                    @endcan
                                    @can('be.manager')
                                        <a href="{{route('db.m.index')}}">Manager Dashboard</a>
                                    @endcan
                            </li>
                         </ul>
                    
                    @else
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('login')}}">LOGIN</a></li>
                        <li><a href="{{route('register')}}">SIGNUP</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="get_free_btn"><a href="{{route('register.coached')}}">BECOME A COACH</a></li>
                    </ul>

                    @endif
                </div><!-- /.navbar-collapse -->
            </nav>
        </header>
        <!--================End Header Area =================-->
        
        <!--================Slider Area =================-->
        @yield('content')
        <!--================End FIND COACH AREA =================-->
        
        <!--================Provide Feature Area =================-->
        <!-- <section class="provide_feature_area" id="feature">
            <div class="p_feature_left">
                <div class="p_f_left_content">
                    <h3 class="single_title_center">ANYONE, ANYWHERE.</h3>
                    <div class="p_left_item_inner">
                        <div class="p_item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="{{asset('img/icon/p-icon-1.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4>Perfect Dashboard</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p_item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="{{asset('img/icon/p-icon-2.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4>Have a lot Coach</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p_item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="{{asset('img/icon/p-icon-3.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4>Unique Design</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p_item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="{{asset('img/icon/p-icon-4.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4>Easy to Use</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p_item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="{{asset('img/icon/p-icon-5.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4>Easy Customizable</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p_item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="{{asset('img/icon/p-icon-6.png')}}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4>Easy Log-in / Log-out</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p_feature_right">
                <div class="p_feature_img">
                    <img src="{{asset('img/provide-ds-img.png')}}" alt="">
                </div>
            </div>
        </section> -->
        <!--================End Provide Feature Area =================-->
        
        
        <!--================Clients Logo Area =================-->
      <!--   <section class="clients_logo_area nine_clients_logo">
            <div class="container">
                <h3 class="client_title">PARTNER WE RECOMMEND</h3>
                <div class="clients_logo_slider owl-carousel">
                    <div class="item">
                        <img src="{{asset('img/clients/clients-google.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('img/clients/clients-apple.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('img/clients/clients-youtube.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('img/clients/clients-aws.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('img/clients/clients-android.png')}}" alt="">
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End Clients Logo Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="black_footer" style="background-color: #282829;">
            <div class="pink_footer_wedget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget p_menu_widget">
                                <div class="p_f_w_title">
                                    <h3>FAQ</h3>
                                </div>
                                <ul>
                                    <li><a href="#">How do i register?</a></li>
                                    <li><a href="#">How do i pay through the website?</a></li>
                                    <li><a href="#">Can i reserve more lesson a day?</a></li>
                                    <li><a href="#">Where i can see my history of lesson?</a></li>
                                    <li><a href="#">Will i be changed extra fee to cancel a lesson?</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget p_menu_widget">
                                <div class="p_f_w_title">
                                    <h3>BROWSE</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Platinum Coach</a></li>
                                    <li><a href="#">Gold Coach</a></li>
                                    <li><a href="#">Silver Coach</a></li>
                                    <li><a href="#">Video</a></li>
                                    <li><a href="#">Articles</a></li>
                                    <li><a href="#">Discussion</a></li>
                                    <li><a href="#">About Us</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget p_support_widget">
                                <div class="p_f_w_title">
                                    <h3>Our support</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Help & Support</a></li>
                                    <li><a href="#">Term & Condition</a></li>
                                    <li><a href="#">Billing & Payment</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget p_contact_widget">
                                <div class="p_f_w_title">
                                    <h3>Contact information</h3>
                                </div>
                                <ul class="contact_info">
                                    <li>Phone  :<a href="#"> 081918305647</a></li>
                                    <li>E-mail  :<a href="#"> info@coachedinc.com</a></li>
                                    <li>Address  :<a href="#"> Jl. Salman, No. 127, Kebon Jeruk, Jakarta, Indonesia</a></li>
                                </ul>
                                <ul class="pink_social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
            <div class="pink_copyright">
                <div class="container">
                    <div class="pull-left">
                        <a href="#"><img src="{{asset('img/logo-white.png')}}" alt=""></a>
                    </div>
                    <div class="pull-right">
                        <p class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://coachedinc.com" target="_blank">Coached Inc</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{asset('js/jquery-2.2.4.js')}}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Rev slider js -->
        <script src="{{asset('vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script src="{{asset('vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script src="{{asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{asset('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{asset('vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <!-- Extra Plugin -->
        <script src="{{asset('vendors/parallax/jquery.parallax-scroll.js')}}"></script>
        <script src="{{asset('vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('vendors/counterup/waypoints.min.js')}}"></script>
        <script src="{{asset('vendors/counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('vendors/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('vendors/flexslider/flex-slider.js')}}"></script>
        <script src="{{asset('vendors/flexslider/mixitup.js')}}"></script>
        <script src="{{asset('vendors/swiper/js/swiper.min.js')}}"></script>
        <script src="{{asset('vendors/flipster-slider/jquery.flipster.min.js')}}"></script>
        <script src="{{asset('vendors/nice-selector/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
            <script src="{{asset('/vendor/unisharp/laravel-ckeditor/config.js')}}"></script>

            <script>
                CKEDITOR.replace( 'article-ckeditor' );
            </script>
        
        <script src="{{asset('js/theme.js')}}"></script>
    </body>
</html>