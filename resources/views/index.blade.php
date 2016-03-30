<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Templates</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Icon -->
  <link rel="icon" type="image/png" href="assets/images/icon.png">
  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Electrolize|Orbitron:400,500,700|Share+Tech+Mono" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
  <!-- FontAwesome -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" />
  <!-- Revolution Slider -->
  <link rel="stylesheet" type="text/css" href="{{elixir('css/slider.css')}}" />
  <!-- youplay -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/youplay.min.css')}}" />
  <!-- RTL (uncomment line before this to enable RTL support) -->
  <!-- <link rel="stylesheet" type="text/css" href="../assets/youplay/css/youplay-rtl.css" /> -->
</head>

<body>

  <!-- Preloader -->
  <div class="page-preloader preloader-wrapp">
    <img src="assets/images/logo.png" alt="">
    <div class="preloader"></div>
  </div>
  <!-- /Preloader -->

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
        <a class="navbar-brand" href="index-2.html">
          <img src="assets/images/logo.png" alt="">
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown dropdown-hover active">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Store <span class="caret"></span> <span class="label">games</span>
                    </a>
            <div class="dropdown-menu" style="width: 320px;">
              <ul role="menu">
                <li><a href="store-1.html">Store Style 1</a>
                </li>
                <li class="active"><a href="store-2.html">Store Style 2</a>
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
          <li class="dropdown dropdown-hover ">
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
                <li><a href="404.html">404</a>
                </li>
                <li><a href="blank.html">Blank</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown dropdown-hover">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      John Doe <span class="badge bg-default">2</span> <span class="caret"></span> <span class="label">it is you</span>
                    </a>
            <div class="dropdown-menu">
              <ul role="menu">
                <li><a href="http://html.nkdev.info/youplay/documentation">Documentation</a>
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
      </div>
    </div>
  </nav>
  <!-- /Navbar -->


  <!-- Main Content -->
  <section class="content-wrap">

    <!-- Slider Revolution-->
    <!--
        Use classes:
        rs-fullscreen
    -->
    <div class="tp-banner-container rs-youplay">
      <div class="tp-banner">
        <ul>
          <!-- SLIDE NR. 1  -->
          <li data-thumb="assets/images/banner-bg.jpg" data-saveperformance="on" data-transition="random-static" data-slotamount="7" data-masterspeed="700">
            <!-- MAIN IMAGE -->
            <img src="assets/images/dummy.png" alt="" data-lazyload="assets/images/banner-bg.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
            <!-- LAYERS -->

            <!-- LAYER NR. 1 -->
            <div class="tp-caption customin customout" data-x="left" data-hoffset="60" data-y="center" data-voffset="-60" data-customin="x:200;scaleX:0.5;scaleY:0.5;" data-customout="x:0;scaleX:1;scaleY:1;" data-start="500" data-speed="700" data-easing="Sine.easeInOut"
            data-endspeed="600" data-endeasing="Linear.easeNone">
              <h2 class="h1">Diablo III: <br>Reaper of Souls</h2>
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption customin customout" data-x="left" data-hoffset="60" data-y="center" data-voffset="60" data-customin="x:200;scaleX:0.5;scaleY:0.5;" data-customout="x:0;scaleX:1;scaleY:1;" data-start="1000" data-speed="700" data-easing="Sine.easeInOut"
            data-endspeed="600" data-endeasing="Linear.easeNone">
              <a class="btn btn-lg" href="#!">Purchase</a>
            </div>
          </li>

          <!-- SLIDE NR. 2  -->
          <li data-thumb="assets/images/game-dark-souls-ii-2-1920x1248.jpg" data-saveperformance="on" data-transition="random-static" data-slotamount="7" data-masterspeed="700">
            <!-- MAIN IMAGE -->
            <img src="assets/images/dummy.png" alt="" data-lazyload="assets/images/game-dark-souls-ii-2-1920x1248.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
            <!-- LAYERS -->

            <!-- LAYER NR. 1 -->
            <div class="tp-caption customin customout" data-x="left" data-hoffset="60" data-y="center" data-voffset="-45" data-customin="x:200;scaleX:0.5;scaleY:0.5;" data-customout="x:0;scaleX:1;scaleY:1;" data-start="500" data-speed="700" data-easing="Sine.easeInOut"
            data-endspeed="600" data-endeasing="Linear.easeNone">
              <h2 class="h1">Dark Souls II</h2>
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption customin customout" data-x="left" data-hoffset="60" data-y="center" data-voffset="45" data-customin="x:200;scaleX:0.5;scaleY:0.5;" data-customout="x:0;scaleX:1;scaleY:1;" data-start="1000" data-speed="700" data-easing="Sine.easeInOut"
            data-endspeed="600" data-endeasing="Linear.easeNone">
              <a class="btn btn-lg" href="#!">Purchase</a>
            </div>
          </li>

          <!-- SLIDE NR. 3  -->
          <li data-thumb="assets/images/game-kingdoms-of-amalur-reckoning-1440x900.jpg" data-saveperformance="on" data-transition="random-static" data-slotamount="7" data-masterspeed="700">
            <!-- MAIN IMAGE -->
            <img src="assets/images/dummy.png" alt="" data-lazyload="assets/images/game-kingdoms-of-amalur-reckoning-1440x900.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
            <!-- LAYERS -->

            <!-- LAYER NR. 1 -->
            <div class="tp-caption customin customout" data-x="left" data-hoffset="60" data-y="center" data-voffset="-60" data-customin="x:200;scaleX:0.5;scaleY:0.5;" data-customout="x:0;scaleX:1;scaleY:1;" data-start="500" data-speed="700" data-easing="Sine.easeInOut"
            data-endspeed="600" data-endeasing="Linear.easeNone">
              <h2 class="h1">Kingdoms of Amalur: <br>Reckoning</h2>
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption customin customout" data-x="left" data-hoffset="60" data-y="center" data-voffset="60" data-customin="x:200;scaleX:0.5;scaleY:0.5;" data-customout="x:0;scaleX:1;scaleY:1;" data-start="1000" data-speed="700" data-easing="Sine.easeInOut"
            data-endspeed="600" data-endeasing="Linear.easeNone">
              <a class="btn btn-lg" href="#!">Purchase</a>
            </div>
          </li>
        </ul>
        <div class="tp-bannertimer"></div>
      </div>
    </div>
    <!-- /Slider Revolution-->

    <div class="container youplay-store">

      <!-- Left Side -->
      <div class="col-md-3">

        <!-- Side Search -->
        <div class="side-block ">
          <p>Search by Games:</p>
          <form action="http://html.nkdev.info/youplay/dark/search.html">
            <div class="youplay-input">
              <input type="text" name="search" placeholder="enter search term">
            </div>
          </form>
        </div>
        <!-- /Side Search -->

        <!-- Side Categories -->
        <div class="side-block ">
          <h4 class="block-title">Categories</h4>
          <ul class="block-content">
            <li><a href="#!">All</a>
            </li>
            <li><a href="#!">Action</a>
            </li>
            <li><a href="#!">Adventure</a>
            </li>
            <li><a href="#!">Casual</a>
            </li>
            <li><a href="#!">Indie</a>
            </li>
            <li><a href="#!">Racing</a>
            </li>
            <li><a href="#!">RPG</a>
            </li>
            <li><a href="#!">Simulation</a>
            </li>
            <li><a href="#!">Strategy</a>
            </li>
          </ul>
        </div>
        <!-- /Side Categories -->

        <!-- Side Popular News -->
        <div class="side-block ">
          <h4 class="block-title">Popular Games</h4>
          <div class="block-content p-0">
            <!-- Single News Block -->
            <div class="row youplay-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="store-product-1.html" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-bloodborne-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="store-product-1.html" title="Bloodborne">Bloodborne</a></h4>
                <span class="price">$50.00</span>
              </div>
            </div>
            <!-- /Single News Block -->

            <!-- Single News Block -->
            <div class="row youplay-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="#!" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-dark-souls-ii-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="#!" title="Dark Souls II">Dark Souls II</a></h4>
                <span class="price">$39.99 <sup><del>$49.99</del></sup></span>
              </div>
            </div>
            <!-- /Single News Block -->

            <!-- Single News Block -->
            <div class="row youplay-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="#!" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="#!" title="Kingdoms of Amalur">Kingdoms of Amalur</a></h4>
                <span class="price">$20.00</span>
              </div>
            </div>
            <!-- /Single News Block -->

            <!-- Single News Block -->
            <div class="row youplay-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="#!" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-diablo-iii-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="#!" title="Let's Grind Diablo III">Diablo III</a></h4>
                <span class="price">$10.00</span>
              </div>
            </div>
            <!-- /Single News Block -->
          </div>
        </div>
        <!-- /Side Popular News -->
      </div>
      <!-- /Left Side -->

      <!-- Games List -->
      <div class="col-md-9 isotope">
        <!-- Sort Categories -->
        <ul class="pagination isotope-options">
          <li data-filter="all" class="active"><span>All</span>
          </li>
          <li data-filter="free"><span>Free</span>
          </li>
          <li data-filter="popular"><span>Popular</span>
          </li>
          <li data-filter="specials"><span>Specials</span>
          </li>
          <li data-filter="upcoming"><span>Upcoming</span>
          </li>
        </ul>
        <!-- /Sort Categories -->

        <div class="isotope-list">

          <!-- Single Product Block -->
          <a href="#!" class="item angled-bg" data-filters="popular">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-bloodborne-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-10 col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Bloodborne</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      $50.00
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="item angled-bg" data-filters="popular,specials">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-dark-souls-ii-500x375.jpg" alt="">
                    <div class="badge show bg-default">-20%</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-10 col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Dark Souls II</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      $39.99 <sup><del>$49.99</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="item angled-bg" data-filters="popular">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-10 col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Kingdoms of Amalur</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      $20.00
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="item angled-bg" data-filters="">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-the-witcher-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-10 col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>The Witcher</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      $14.99
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="item angled-bg" data-filters="">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-skyrim-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-10 col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Skyrim</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      $11.99
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="item angled-bg" data-filters="">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-middle-eart-shadow-of-mordor-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-10 col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Middle-earth</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      $29.99
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="item angled-bg" data-filters="specials,free">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-soul-sacrifice-500x375.jpg" alt="">
                    <div class="badge show bg-success">-100%</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-10 col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Soul Sacrifice</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      <span class="text-success">FREE!</span>  <sup><del>$29.99</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="item angled-bg" data-filters="popular">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-diablo-iii-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-10 col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Diablo III</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      $10.00
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="item angled-bg" data-filters="specials">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-dragons-dogma-500x375.jpg" alt="">
                    <div class="badge show bg-default">-30%</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-10 col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Dragons Dogma</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      $34.99 <sup><del>$49.99</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="item angled-bg" data-filters="">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-lords-of-the-fallen-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-10 col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Lords of the Fallen</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      $14.99
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="item angled-bg" data-filters="upcoming">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-prototype-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-10 col-md-9 col-xs-8">
                <h4>Prototype 3</h4>
                <div class="date">
                  <i class="fa fa-calendar"></i> beginning of 2015
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="item angled-bg" data-filters="">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-risen-3-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-10 col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Risen 3</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                      <i class="fa fa-star-half-o"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      $9.99
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="item angled-bg" data-filters="popular">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-neverwinter-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-10 col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Neverwinter</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      $13.99
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="item angled-bg" data-filters="popular">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-assassins-creed-4-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-10 col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Assassin's Creed 4</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      $21.99
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="item angled-bg" data-filters="upcoming">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-half-life-3-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-10 col-md-9 col-xs-8">
                <h4>Half-Life 3</h4>
                <div class="date">
                  <i class="fa fa-calendar"></i> never
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

        </div>

      </div>
      <!-- /Games List -->
    </div>

    <!-- Footer -->
    <footer class="youplay-footer-parallax">
      <div class="wrapper" style="background-image: url('assets/images/footer-bg.jpg')">

        <!-- Social Buttons -->
        <div class="social">
          <div class="container">
            <h3>Connect socially with <strong>youplay</strong></h3>

            <div class="row icons">
              <div class="col-xs-6 col-sm-3">
                <a href="#!">
                  <i class="fa fa-facebook-square"></i>
                  <span>Like on Facebook</span>
                </a>
              </div>
              <div class="col-xs-6 col-sm-3">
                <a href="#!">
                  <i class="fa fa-twitter-square"></i>
                  <span>Follow on Twitter</span>
                </a>
              </div>
              <div class="col-xs-6 col-sm-3">
                <a href="#!">
                  <i class="fa fa-twitch"></i>
                  <span>Watch on Twitch</span>
                </a>
              </div>
              <div class="col-xs-6 col-sm-3">
                <a href="#!">
                  <i class="fa fa-youtube-square"></i>
                  <span>Watch on Youtube</span>
                </a>
              </div>
            </div>

          </div>
        </div>
        <!-- /Social Buttons -->

        <!-- Copyright -->
        <div class="copyright">
          <div class="container">
            <strong>nK</strong> &copy; 2015. All rights reserved
          </div>
        </div>
        <!-- /Copyright -->

      </div>
    </footer>
    <!-- /Footer -->

  </section>
  <!-- /Main Content -->

  <!-- Search Block -->
  <div class="search-block">
    <a href="#!" class="search-toggle glyphicon glyphicon-remove"></a>
    <form action="http://html.nkdev.info/youplay/dark/search.html">
      <div class="youplay-input">
        <input type="text" name="search" placeholder="Search...">
      </div>
    </form>
  </div>
  <!-- /Search Block -->


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
  <script type="text/javascript" src="{{elixir('js/smooth-scroll.js')}}"></script>

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