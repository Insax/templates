<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  @yield('title')
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Icon -->
  <link rel="icon" type="image/png" href="assets/images/icon.png">
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <!-- <link href="//fonts.googleapis.com/css?family=Electrolize|Orbitron:400,500,700|Share+Tech+Mono" rel="stylesheet" type="text/css"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
  <!-- FontAwesome -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" />
  <!-- youplay -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/youplay.min.css')}}" />
  <!-- font -->
  <!--  <link rel="stylesheet" type="text/css" href="{{elixir('css/app.css')}}" /> -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/settings.css')}}" />
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/youplay-rtl.css')}}" /> -->
  <!--[if lt IE 9]>
      <script src="{{asset('js/html5shiv.min.js')}}"></script>
    <![endif]-->
</head>
<body>
{!! Elements::Preloader() !!}
  <!-- Navbar -->
  <nav class="navbar-youplay navbar navbar-default navbar-fixed-top ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">
          <img src="assets/images/logo.png" alt="">
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
      @if(Auth::check())
        <ul class="nav navbar-nav">
          <li class="dropdown dropdown-hover ">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
            Lorem Ipsum <span class="caret"></span> <span class="label">Dia Acmet</span>
                    </a>
            <div class="dropdown-menu" style="width: 320px;">
              <ul role="menu">
                <li><a href="store-1.html">Store Style 1</a>
                </li>
                <li><a href="store-2.html">Store Style 2</a>
                </li>
                <li><a href="cart.html">Cart</a>
                </li>
              </ul>
              <!--
                        -->
              <ul role="menu">
                <li><a href="store-product-1.html">Product Style 1</a>
                </li>
                <li><a href="store-product-2.html">Product Style 2</a>
                </li>
                <li><a href="checkout.html">Checkout</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="dropdown dropdown-hover ">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Blog <span class="caret"></span> <span class="label">news</span>
                    </a>
            <div class="dropdown-menu" style="width: 320px;">
              <ul role="menu">
                <li><a href="blog-1.html">Blog Style 1</a>
                </li>
                <li><a href="blog-2.html">Blog Style 2</a>
                </li>
                <li><a href="blog-3.html">Blog Style 3</a>
                </li>
              </ul>
              <!--
                        -->
              <ul role="menu">
                <li><a href="blog-post-1.html">Blog Post 1</a>
                </li>
                <li><a href="blog-post-2.html">Blog Post 2</a>
                </li>
                <li><a href="blog-post-3.html">Blog Post 3</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="dropdown dropdown-hover active">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Features <span class="caret"></span> <span class="label">full list</span>
                    </a>
            <div class="dropdown-menu" style="width: 350px;">
              <ul role="menu">
                <li class="dropdown dropdown-submenu pull-left ">
                  <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">User</a>
                  <div class="dropdown-menu">
                    <ul role="menu">
                      <li><a href="user-activity.html">Activity</a>
                      </li>
                      <li><a href="user-profile.html">Profile</a>
                      </li>
                      <li><a href="user-messages.html">Messages</a>
                      </li>
                      <li><a href="user-messages-compose.html">Messages Compose</a>
                      </li>
                      <li><a href="user-settings.html">Settings</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li><a href="forums.html">Forums</a>
                </li>
                <li><a href="forums-topics.html">Forums Topics</a>
                </li>
                <li><a href="forums-single-topic.html">Single Topic</a>
                </li>
                <li><a href="matches-list.html">Matches List</a>
                </li>
                <li><a href="match.html">Match</a>
                </li>
                <li><a href="match-2.html">Match with Maps</a>
                </li>
              </ul>
              <!--
                        -->
              <ul role="menu">
                <li><a href="components.html">Components</a>
                </li>
                <li><a href="coming-soon.html">Coming Soon</a>
                </li>
                <li><a href="contact.html">Contact Us</a>
                </li>
                <li><a href="search.html">Search</a>
                </li>
                <li><a href="login.html">Login</a>
                </li>
                <li class="active"><a href="404.html">404</a>
                </li>
                <li><a href="blank.html">Blank</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      @else
      <ul class="nav navbar-nav">
          <li class="dropdown dropdown-hover ">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
            {{ Elements::NavStart() }} <span class="caret"></span> <span class="label">News</span>
                    </a>
            <div class="dropdown-menu" style="width: 320px;">
              <ul role="menu">
                <li>
                  <a href="store-1.html">Store Style 1</a>
                </li>
                <li>
                  <a href="store-2.html">Store Style 2</a>
                </li>
                <li>
                  <a href="cart.html">Cart</a>
                </li>
              </ul>
              <ul role="menu">
                <li><a href="store-product-1.html">Product Style 1</a>
                </li>
                <li><a href="store-product-2.html">Product Style 2</a>
                </li>
                <li><a href="checkout.html">Checkout</a>
                </li>
              </ul>
            </div>
          </li>
      @endif
      @if(Auth::check())
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown dropdown-hover">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      John Doe <span class="badge bg-default">2</span> <span class="caret"></span> <span class="label">it is you</span>
                    </a>
            <div class="dropdown-menu">
              <ul role="menu">
                <li><a href="../documentation">Documentation</a>
                </li>
                <li><a href="http://themeforest.net/item/youplay-game-template-based-on-bootstrap/11306207?ref=_nK">Purchase</a>
                </li>
                <li class="divider"></li>

                <li><a href="user-profile.html">Profile <span class="badge pull-right bg-warning">13</span></a>
                </li>
                <li><a href="cart.html">My Cart <span class="badge pull-right bg-default">3</span></a>
                </li>
                <li class="divider"></li>

                <li><a href="login.html">Log Out</a>
                </li>
                <li class="dropdown dropdown-submenu pull-left">
                  <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More..</a>
                  <div class="dropdown-menu">
                    <ul role="menu">
                      <li><a href="#!">3rd level</a>
                      </li>
                      <li><a href="#!">3rd level</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="search-toggle" href="search.html">
              <i class="fa fa-search"></i>
            </a>
          </li>
          <li class="dropdown dropdown-hover dropdown-cart">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              <i class="fa fa-shopping-cart"></i>
            </a>
            <div class="dropdown-menu" style="width: 300px;">
              <div class="row youplay-side-news">
                <div class="col-xs-3 col-md-4">
                  <a href="#" class="angled-img">
                    <div class="img">

                      <img src="assets/images/game-bloodborne-500x375.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-xs-9 col-md-8">
                  <a href="#" style="text-decoration: none;" class="pull-right mr-10"><i class="fa fa-times"></i></a>

                  <h4 class="ellipsis"><a href="#">Bloodborne</a></h4>
                  <span class="quantity">1 × <span class="amount">$50.00</span></span>
                </div>
              </div>

              <div class="row youplay-side-news">
                <div class="col-xs-3 col-md-4">
                  <a href="#" class="angled-img">
                    <div class="img">
                      <img src="assets/images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-xs-9 col-md-8">
                  <a href="#" style="text-decoration: none;" class="pull-right mr-10"><i class="fa fa-times"></i></a>

                  <h4 class="ellipsis"><a href="#">Kingdoms of Amalur</a></h4>
                  <span class="quantity">1 × <span class="amount">$20.00</span></span>
                </div>
              </div>

              <div class="ml-20 mr-20 pull-right"><strong>Subtotal:</strong>  <span class="amount">$70.00</span>
              </div>

              <div class="btn-group pull-right m-15">
                <a href="#" class="btn btn-default btn-sm">View Cart</a>
                <a href="#" class="btn btn-default btn-sm">Checkout</a>
              </div>
            </div>
          </li>
        </ul>
      @else
        <ul class="nav navbar-nav navbar-right">
          
        </ul>
      @endif
      </div>
    </div>
  </nav>
  <!-- Navbar -->
  @yield('content')
    <!-- jQuery -->
  <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

  <!-- CSS Shapes Polyfill -->
  <script type="text/javascript" src="{{asset('js/shapes-polyfill.min.js')}}"></script>

  <!-- Hexagon Progress -->
  <script type="text/javascript" src="{{asset('js/jquery.hexagonprogress.min.js')}}"></script>

  <!-- Bootstrap -->
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Skrollr -->
  <script type="text/javascript" src="{{asset('js/skrollr.min.js')}}"></script>

  <!-- Jarallax -->
  <script type="text/javascript" src="{{asset('js/jarallax.js')}}"></script>

  <!-- Smooth Scroll -->
  <script type="text/javascript" src="{{asset('js/smoothscroll.js')}}"></script>

    <!-- Countdown -->
  <script type="text/javascript" src="{{asset('js/jquery.countdown.min.js')}}"></script>

  <!-- Revolution Slider -->
  <script type="text/javascript" src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>

  <!-- Isotope -->
  <script type="text/javascript" src="{{asset('js/isotope.pkgd.min.js')}}"></script>

  <!-- youplay -->
  <script type="text/javascript" src="{{asset('js/youplay.min.js')}}"></script>
  <!-- init youplay -->
  <script>
    if(typeof youplay !== 'undefined') {
        youplay.init({
            smoothscroll: false,
        });
    }
  </script>

</body>

</html>