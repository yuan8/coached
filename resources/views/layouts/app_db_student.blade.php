<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <link rel="manifest" type="text/css" href="{{asset('manifest.json')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="au theme template" />
    <meta name="author" content="Alan Creative" />
    <meta name="keywords" content="Coached Inc for your place to learn" />
    <!-- Title Page-->
    <title>Coached Inc Dashboard</title>
    <!-- Fontfaces CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/vendors/chosen/chosen.min.css')}}">

    <link href="{{asset('asset_db_student/css/font-face.css')}}" rel="stylesheet" media="all" />
    <link href="{{asset('asset_db_student/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all" />
    <link href="{{asset('asset_db_student/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all" />
    <link href="{{asset('asset_db_student/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all" />
    <!-- Bootstrap CSS-->
    <link href="{{asset('asset_db_student/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all" />
    <!-- Vendor CSS-->
    <link href="{{asset('asset_db_student/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all" />
    <link href="{{asset('asset_db_student/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all" />
    <link href="{{asset('asset_db_student/vendor/wow/animate.css')}}" rel="stylesheet" media="all" />
    <link href="{{asset('asset_db_student/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all" />
    <link href="{{asset('asset_db_student/vendor/slick/slick.css')}}" rel="stylesheet" media="all" />
    <link href="{{asset('asset_db_student/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all" />
    <link href="{{asset('asset_db_student/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all" />
    <!-- Main CSS-->
    <link href="{{asset('asset_db_student/css/theme-old.css?ti='.time())}}" rel="stylesheet" media="all" />
    <link href="{{asset('asset_db_student/css/style.css')}}" rel="stylesheet" media="all" />
    <link href="{{asset('asset_db_student/css/custome.css?v='.time())}}" rel="stylesheet" media="all">
    <script src="{{asset('asset_db_student/vendor/jquery-3.2.1.min.js')}}"></script>


    <script type="text/javascript" src="{{asset('/vendor/laravel-filemanager/js/lfm.js?d=').time()}}"></script>

    
    <!-- <script src="https://www.gstatic.com/firebasejs/5.0.0/firebase.js"></script> -->
    <!-- < -->
      <!-- // Initialize Firebase -->
   
    <script>
        const root_def="{{url('')}}"
      // Initialize Firebase
     
    </script>


    <script type="text/javascript" src="{{asset('app.js?=').time()}}"></script>


    @yield('ex_head')


    <style type="text/css">
        /* Chart.js')}} */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
</head>

<body class="animsition" style="animation-duration: 900ms; opacity: 1;">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner"><a class="logo" href="index.html"><img src="{{asset('asset_db_student/images/icon/logo.png')}}" alt="coached" /></a>
                        <button class="hamburger hamburger--slider" type="button"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    @include('student.partials.menu',['m' =>true])
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo"><a href="{{url('/')}}"><img src="{{asset('asset_db_student/images/icon/logo.png')}}" alt="Cool Admin" /></a></div>
            <div class="menu-sidebar__content js-scrollbar1 ps">
                <nav class="navbar-sidebar">
                    @include('student.partials.menu')
                    
                </nav>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="{{url()->full()}}" method="get">
                               @yield('search')
                                
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu"><i class="zmdi zmdi-notifications"></i><span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40"><i class="zmdi zmdi-email-open"></i></div>
                                                <div class="content">
                                                    <p>You got a email notification</p><span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40"><i class="zmdi zmdi-account-box"></i></div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p><span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40"><i class="zmdi zmdi-file-text"></i></div>
                                                <div class="content">
                                                    <p>You got a new file</p><span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer"><a href="#">All notifications</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image"><img src="{{asset(Auth::User()->avatar)}}" alt="{{Auth::user()->username}}" /></div>
                                        <div class="content"><a class="js-acc-btn" style="text-transform:unset;" href="#">{{Auth::user()->username}}</a></div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image"><a href="#"><img src="{{asset(Auth::user()->avatar)}}" alt="John Doe" /></a></div>
                                                <div class="content">
                                                    <h5 class="name"><a href="#">{{Auth::user()->username}}</a></h5><span class="email">{{Auth::user()->email}}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                @can('be.student')
                                                    <div class="account-dropdown__item"><a href="{{route('db.s.set.profile')}}"><i class="zmdi zmdi-account"></i>Profile</a></div>
                                                    <div class="account-dropdown__item"><a href="{{route('db.s.change.password')}}"><i class="zmdi zmdi-settings"></i>Change Password</a></div>
                                                @endcan
                                                @can('be.coached')
                                                    <div class="account-dropdown__item"><a href="{{route('db.c.set.profile')}}"><i class="zmdi zmdi-account"></i>Profile</a></div>
                                                    <div class="account-dropdown__item"><a href="{{route('db.s.change.password')}}"><i class="zmdi zmdi-settings"></i>Change Password</a></div>
                                                @elsecan('be.manager')
                                             
                                                @endcan
                                            </div>
                                            <div class="account-dropdown__footer"><a href="{{route('p.access.logout')}}"><i class="zmdi zmdi-power"></i>Logout</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                  @yield('content')
                  @include('student.partials.footer')
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
            <!-- Jquery JS-->
            <!-- Bootstrap JS-->
            <script src="{{asset('asset_db_student/vendor/bootstrap-4.1/popper.min.js')}}"></script>
            <script src="{{asset('asset_db_student/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
            <!-- Vendor JS-->
            <script src="{{asset('asset_db_student/vendor/slick/slick.min.js')}}"></script>
            <script src="{{asset('asset_db_student/vendor/wow/wow.min.js')}}"></script>
            <!-- <script src="{{asset('asset_db_student/vendor/animsition/animsition.min.js')}}"></script> -->
            <script src="{{asset('asset_db_student/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
            <script src="{{asset('asset_db_student/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
            <script src="{{asset('asset_db_student/vendor/counter-up/jquery.counterup.min.js')}}"></script>
            <script src="{{asset('asset_db_student/vendor/circle-progress/circle-progress.min.js')}}"></script>
            <script src="{{asset('asset_db_student/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
            <script src="{{asset('asset_db_student/vendor/chartjs/Chart.bundle.min.js')}}"></script>
            <script src="{{asset('vendors/axios/dist/axios.min.js')}}"></script>
            <script src="{{asset('asset_db_student/vendor/select2/select2.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('/vendors/chosen/chosen.jquery.js')}}"></script>
            <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
            <script src="{{asset('/vendor/unisharp/laravel-ckeditor/config.js?v='.time())}}"></script>

            <script>
                setTimeout(function(){
                    if(document.getElementById('article-ckeditor')!=undefined){
                        CKEDITOR.replace( 'article-ckeditor' );
                    }
                },100);
                
            </script>
            <!-- Main JS-->
            <script src="{{asset('asset_db_student/js/main.js?v2')}}"></script>

            <script src="{{route('api_access_init').'?v='.time()}}"></script>

            <!-- end document-->

            
           
             <script type="text/javascript">
                 $(".chosen-select").chosen({no_results_text: "Oops, nothing found!"}); 
            </script>
            @yield('script')

            <script src="https://www.gstatic.com/firebasejs/5.5.6/firebase.js"></script>
            <script>
              // Initialize Firebase
              var config = {
                apiKey: "AIzaSyC-YQgjyH2H2UskYmclcDEWs74dSNjt1uo",
                authDomain: "coach-20c6a.firebaseapp.com",
                databaseURL: "https://coach-20c6a.firebaseio.com",
                projectId: "coach-20c6a",
                storageBucket: "coach-20c6a.appspot.com",
                messagingSenderId: "710077954056"
              };
              firebase.initializeApp(config);


              const messaging = firebase.messaging();
              navigator.serviceWorker.register("{{url('firebase-messaging-sw.js')}}")
                .then((registration) => {
                  messaging.useServiceWorker(registration);
                   messaging.requestPermission().then(function() {
                  console.log('Notification permission granted.');
                  // TODO(developer): Retrieve an Instance ID token for use with FCM.
                  // ...
                }).catch(function(err) {
                  console.log('Unable to get permission to notify.', err);
                });

                  
                });

              // messaging.requestPermission().then(function() {
              //     console.log('Notification permission granted.');
              //     // TODO(developer): Retrieve an Instance ID token for use with FCM.
              //     // ...
              //   }).catch(function(err) {
              //     console.log('Unable to get permission to notify.', err);
              //   });



                messaging.getToken().then(function(currentToken) {
              if (currentToken) {
                // sendTokenToServer(currentToken);
                console.log('currentToken');
                console.log(currentToken);
                // updateUIForPushEnabled(currentToken);
              } else {
                // Show permission request.
                console.log('No Instance ID token available. Request permission to generate one.');
                // Show permission UI.
                updateUIForPushPermissionRequired();
                // setTokenSentToServer(false);
              }
            }).catch(function(err) {
              console.log('An error occurred while retrieving token. ', err);
              showToken('Error retrieving Instance ID token. ', err);
              // setTokenSentToServer(false);
            });



            messaging.onTokenRefresh(function() {
              messaging.getToken().then(function(refreshedToken) {
                console.log('Token refreshed.');
                // Indicate that the new Instance ID token has not yet been sent to the
                // app server.
                // setTokenSentToServer(false);
                // Send Instance ID token to app server.
                // sendTokenToServer(refreshedToken);

                console.log(refreshedToken);
                // ...
              }).catch(function(err) {
                console.log('Unable to retrieve refreshed token ', err);
                showToken('Unable to retrieve refreshed token ', err);
              });
            });

            messaging.onMessage(function(payload) {
              console.log('Message received. ', payload);
              console.log('from w');
              new Notification('ss',{title:'test',icon:'https://www.freeiconspng.com/uploads/flat-blue-home-icon-4.png',badge:'https://www.freeiconspng.com/uploads/flat-blue-home-icon-4.png'});

              // return self.registration.showNotification(payload.data);
              // ...
            });

            function showToken(dd){
                console.log(dd);
            }


            </script>



        </div>
    </div>
</body>

</html>