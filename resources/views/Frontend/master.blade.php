<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Varsity | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{asset('frontend/assets/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('frontend/assets/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/slick.css')}}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery.fancybox.css')}}" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{asset('frontend/assets/css/theme-color/default-theme.css')}}" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>



  </head>
  <body>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span>info@markups.io</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span>(568) 986 652</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                      <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                      <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                      <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <!-- TEXT BASED LOGO -->
        <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-university"></i><span>Varsity</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>

         <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
          <li class=""><a href="{{url('/')}}">{{__('language.home')}}</a></li>
            <li class=""><a href="{{url('/course')}}">{{__('language.course')}}</a></li>
            <li class=""><a href="{{url('/gallery')}}">{{__('language.gallery')}}</a></li>
            <li class=""><a href="{{url('/blog')}}">{{__('language.blog')}}</a></li>
            <li class=""><a href="{{url('/contact')}}">{{__('language.contact')}}</a></li>

            @if(session()->has('studentSession'))
            <li class=""><a href="{{url('/account')}}">{{__('language.account')}}</a></li>
            <li class=""><a href="{{url('/studentlogout')}}">{{__('language.logout')}}</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language <span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu" role="menu">
                <li><a href="locale/en">{{__('language.english')}}</a></li>
                    <li><a href="locale/bn">{{__('language.bangla')}}</a></li>
                    <li><a href="locale/indo">{{__('language.indonesian')}}</a></li>
                    <li><a href="locale/chi">{{__('language.chinese')}}</a></li>
                    <li><a href="locale/fr">{{__('language.french')}}</a></li>
                </ul>
              </li>


            @else
            <li class=""><a href="{{url('/student')}}">{{__('language.login')}}</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language <span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu" role="menu">
                <li><a href="locale/en">{{__('language.english')}}</a></li>
                    <li><a href="locale/bn">{{__('language.bangla')}}</a></li>
                    <li><a href="locale/indo">{{__('language.indonesian')}}</a></li>
                    <li><a href="locale/chi">{{__('language.chinese')}}</a></li>
                    <li><a href="locale/fr">{{__('language.french')}}</a></li>
                </ul>
              </li>
            @endif


            <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>




          </ul>
        </div>



      </div>
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->

  @yield('content')

  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="">Features</a></li>
                  <li><a href="">Course</a></li>
                  <li><a href="">Event</a></li>
                  <li><a href="">Sitemap</a></li>
                  <li><a href="">Term Of Use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                  <li><a href="">Get Started</a></li>
                  <li><a href="#">My Questions</a></li>
                  <li><a href="">Download Files</a></li>
                  <li><a href="">Latest Course</a></li>
                  <li><a href="">Academic News</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>News letter</h4>
                <p>Get latest update, news & academic offers</p>
                <form class="mu-subscribe-form">
                  <input type="email" placeholder="Type your Email">
                  <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                </form>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>P.O. Box 320, Ross, California 9495, USA</p>
                  <p>Phone: (415) 453-1568 </p>
                  <p>Website: www.markups.io</p>
                  <p>Email: info@markups.io</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; All Right Reserved. Designed by <a href="http://www.markups.io/" rel="nofollow">MarkUps.io</a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->

  <!-- jQuery library -->
  <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('frontend/assets/js/bootstrap.js')}}"></script>
  <!-- Slick slider -->
  <script type="text/javascript" src="{{asset('frontend/assets/js/slick.js')}}"></script>
  <!-- Counter -->
  <script type="text/javascript" src="{{asset('frontend/assets/js/waypoints.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.counterup.js')}}"></script>
  <!-- Mixit slider -->
  <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.mixitup.js')}}"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.fancybox.pack.js')}}"></script>


  <!-- Custom js -->
  <script src="{{asset('frontend/assets/js/custom.js')}}"></script>

  </body>
</html>
