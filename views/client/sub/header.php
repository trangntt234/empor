<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from wahabali.com/work/empor/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2017 17:24:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Empor | Home</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/empor-icon.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="icon" href="images/favicon.png">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="boxed">

<!--Pre LOADER-->
<div class="loader">
  <div id="cssload-wrapper">
    <div class="cssload-loader">
      <div class="cssload-line"></div>
      <div class="cssload-line"></div>
      <div class="cssload-line"></div>
      <div class="cssload-line"></div>
      <div class="cssload-line"></div>
      <div class="cssload-line"></div>
      <div class="cssload-subline"></div>
      <div class="cssload-subline"></div>
      <div class="cssload-subline"></div>
      <div class="cssload-subline"></div>
      <div class="cssload-subline"></div>
      <div class="cssload-loader-circle-1"><div class="cssload-loader-circle-2"></div></div>
      <div class="cssload-needle"></div>
      <div class="cssload-loading">loading</div>
    </div>
  </div>
</div>
<!--Pre LOader Ends-->

 
<!--HEADER STARTS-->
<header class="default">
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container-fluid">
      <div class="side_item">
        <ul class="cols selection">
          <?php if(isset($_SESSION['user'])): ?>
            <li>
              Hello <?=$_SESSION['user']['name'] ?>      
            </li>
            <li>
              <div class="emp_entry">
              <div class="emp_title"><a href="<?= getUrl('logout') ?>" title="">Logout</a></div>
              </div>
            </li>
          <?php else: ?>
            <li>
              <a class="login_toggle" href="<?=getUrl('login') ?>">Login</a>
            </li>
          <?php endif ?>
          
          <!-- <li>
            <div class="emp_entry">
              <div class="emp_title">English</div>
              <div class="list">
                <a class="list-entry" href="javascript:void(0)">
                  <img src="images/us.png" alt="us">United State
                </a>
                <div class="list-entry">
                  Change currency:
                  <form>
                    <div class="currency">
                      <select name="countrychose" id="countrychose">
                        <option>$ USD</option>
                        <option>$ USD</option>
                        <option>$ USD$ USD</option>
                        <option>$ USD</option>
                      </select>
                    </div>
                  </form>
                  Other Countries
                </div>
                <a class="list-entry" href="javascript:void(0)">
                  <img src="images/uk.png" alt="uk"> United Kingdom
                </a>
                <a class="list-entry" href="javascript:void(0)">
                  <img src="images/france.png" alt="France"> France
                </a>
                <a class="list-entry" href="javascript:void(0)">
                  <img src="images/australia.png" alt="Australia"> Australia
                </a>
                <a class="list-entry" href="javascript:void(0)">
                  <img src="images/italia.png" alt="Italia"> Italia
                </a>
                <a class="list-entry" href="javascript:void(0)">
                  <img src="images/duc.png" alt="Deutschland"> Deutschland
                </a>
              </div>
            </div>
          </li> -->
        <div class="cols">
          <ul class="empr_nav">
            <li><a href="#."><i class="icon-heart3"></i></a></li>
            <li class="search_btn"><i class="icon-icons185"></i></li>
            <li><a href="#."><i class="icon-icons9"></i></a></li>
            <li><a href="javascript:void(0)" class="hamburger is-closed" data-toggle="offcanvas"><i class="icon-icons102"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Start Header Navigation -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
        <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" class="logo" alt=""></a>
      </div>
      <!-- End Header Navigation -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-left" data-in="fadeIn" data-out="fadeOut">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
            <ul class="dropdown-menu">
              <li><a href="index-2.html">Home Shop 1</a></li>
              <li><a href="index2.html">Home Shop 2</a></li>
              <li><a href="index3.html">Home V3 — Collection: Men</a></li>
              <li><a href="index4.html">Home V4 — Collection: Women</a></li>
              <li><a href="index5.html">Home V5 — Collections / Parallax</a></li>
              <li><a href="index6.html">Home V6 — Simple eCommerce</a></li>
              <li><a href="shop4.html">Home V7 — Portfolio</a></li>
              <li><a href="#">Home V8 — Startup Site</a></li>
            </ul>
          </li>
          <li class="dropdown megamenu-fw">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop Styles</a>
            <ul class="dropdown-menu half-content" role="menu">
              <li>
                <div class="row">
                  <div class="col-menu col-md-5">
                    <h6 class="title">Layouts</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="shop1.html">Home Shop 1</a></li>
                        <li><a href="shop2.html">Home Shop 2</a></li>
                        <li><a href="shop3.html">Home Shop 3</a></li>
                        <li><a href="shop4.html">Home Shop 4</a></li>
                        <li><a href="shop5.html">Home Shop 5</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- end col-6 -->
                  <div class="col-menu col-md-7">
                    <h6 class="title">Layouts</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="shop-detail2.html">Shop — Catalog</a></li>
                        <li><a href="shop4.html">Shop — Categories Grid</a></li>
                        <li><a href="shop-detail3.html">Shop — Product Category</a></li>
                        <li><a href="shop3.html">Shop — with Sidebar</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- end col-6 -->
                </div>
                <!-- end row -->
              </li>
            </ul>
          </li>
          <li class="dropdown megamenu-fw">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
            <ul class="dropdown-menu megamenu-content" role="menu">
              <li>
                <div class="row">
                  <div class="col-menu col-md-3">
                    <h6 class="title">Categories</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="shop-detail2.html">Shop — Catalog</a></li>
                        <li><a href="shop-detail1.html">Shop — Categories Grid</a></li>
                        <li><a href="shop5.html">Shop — Product Category</a></li>
                        <li><a href="shop3.html">Shop — with Sidebar</a></li>
                        <li><a href="wishlist.html">Shopping Cart</a></li>
                        <li><a href="shop-cart.html">Checkout</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- end col-3 -->
                  <div class="col-menu col-md-3">
                    <h6 class="title">Products demos</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="shop-recent1.html">Shop — Catalog</a></li>
                        <li><a href="shop-recent2.html">Shop — Categories Grid</a></li>
                        <li><a href="shop-recent3.html">Shop — with Sidebar</a></li>
                        <li><a href="wishlist.html">Shopping Cart</a></li>
                        <li><a href="shop-cart.html">Checkout</a></li>
                        <li><a href="shop-cart.html">Order Tracking</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- end col-3 -->
                  <div class="col-menu col-md-3">
                    <h6 class="title">Shop Pages</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="shop-detail1.html">Shop — Categories Grid</a></li>
                        <li><a href="shop5.html">Shop — Product Category</a></li>
                        <li><a href="shop3.html">Shop — with Sidebar</a></li>
                        <li><a href="wishlist.html">Shopping Cart</a></li>
                        <li><a href="shop-cart.html">Order Tracking</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-menu col-md-3">
                    <div class="content">
                      <div class="image">
                        <img src="images/menu.jpg" alt="menu">
                        <div class="centered text-center">
                          <h4 class="text-uppercase">Deal of the week</h4>
                          <a href="#." class="btn_shop text-uppercase">Shop now</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end col-3 -->
                </div>
                <!-- end row -->
              </li>
            </ul>
          </li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown megamenu-fw">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Elements</a>
            <ul class="dropdown-menu megamenu-content" role="menu">
              <li>
                <div class="row">
                  <div class="col-menu col-md-3">
                    <h6 class="title">Categories</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="shop-recent1.html">Shop — Catalog</a></li>
                        <li><a href="shop-recent2.html">Shop — Categories Grid</a></li>
                        <li><a href="shop5.html">Shop — Product Category</a></li>
                        <li><a href="shop-recent3.html">Shop — with Sidebar</a></li>
                        <li><a href="wishlist.html">Shopping Cart</a></li>
                        <li><a href="shop-cart.html">Checkout</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- end col-3 -->
                  <div class="col-menu col-md-3">
                    <h6 class="title">Products demos</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="shop-recent1.html">Shop — Catalog</a></li>
                        <li><a href="#">Shop — Categories Grid</a></li>
                        <li><a href="#">Shop — with Sidebar</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="shop-cart.html">Order Tracking</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- end col-3 -->
                  <div class="col-menu col-md-3">
                    <h6 class="title">Other Pages</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="contact.html">Contact  — V1</a></li>
                        <li><a href="contact2.html">Contact  — V2</a></li>
                        <li><a href="contact3.html">Contact  — V3</a></li>
                        <li><a href="faq.html">Faq's</a></li>
                        <li><a href="404.html">404</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-menu col-md-3">
                    <h6 class="title">Other Pages</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="about-designer.html">About Designer</a></li>
                        <li><a href="author-post.html">Author Posts</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="wishlist-empty.html">Wishlist Empty</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- end col-3 -->
                </div>
                <!-- end row -->
              </li>
            </ul>
          </li>
          <li><a href="#">Demos</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
  </nav>
</header>
<!--HEADER ENDS-->

   
<!--Shopping Cart-->
<div id="sidebar-wrapper">
   <ul class="nav sidebar-nav">
      <li class="tablecart">
         <div class="photo">
            <a href="#">
               <img src="images/tablecart1.jpg" alt="">
            </a>
         </div>

         <div class="cartbody">
            <h5>Little Barrel in White</h5>
            <span>1 × $1,288.00</span>
            <i class="fa fa-close cross"></i>
         </div>
      </li>
      <li class="tablecart">
         <div class="photo">
            <a href="#">
               <img src="images/tablecart1.jpg" alt="">
            </a>
         </div>
         <div class="cartbody">
            <h5>Little Barrel in White</h5>
            <span>1 × $1,288.00</span>
            <i class="fa fa-close cross"></i>
         </div>
      </li>
      <li class="tablecart">
         <div class="photo">
            <a href="#">
               <img src="images/tablecart1.jpg" alt="">
            </a>
         </div>
         <div class="cartbody">
            <h5>Little Barrel in White</h5>
            <span>1 × $1,288.00</span>
            <i class="fa fa-close cross"></i>
         </div>
      </li>
      <li class="text-center margin40 top40">
         <div class="image-cart bottom10">
            <img src="images/shopping-cart.png" alt="">
         </div>
         <h4 class="text-uppercase">no products in the cart.</h4>
      </li>
   </ul>
   <div class="cart-bottom clearfix">
      <h5 class="pull-left top10 bottom10">SUBTOTAL</h5>
      <h5 class="pull-right top10 bottom10">$1,798.00</h5>
      <div class="clearfix"></div>
      <a class="btn btn_dark button_moema">view cart</a>
      <a class="btn btn_colored button_moema">Checkout</a>
   </div>
</div>
   <!--Shopping Cart ends-->
     

<!-- Login starts -->
<div class="login_container fullscreen">
  <button class="close_login"><i class="fa fa-close"></i></button>
  <div class="row">
    <div class="col-sm-6">
       <div class="image"><img src="images/login-container.jpg" alt=""></div>
    </div>
    <div class="col-sm-6">
      <div class="contentform">
    <ol class="breadcrumb_simple text-center heading_space">
      <li><a href="#">My Account</a></li>
      <li><a href="#">My Wishlist</a></li>
      <li class="active">My Cart</li>
      <li><a href="#">Checkout</a></li>
    </ol>
    <div class="logintabbed bottom30">
      <ul class="nav nav-tabs nav-justified heading_space" role="tablist">
        <li role="presentation" class="active"><a href="#registered" aria-controls="registered" role="tab" data-toggle="tab">Already Registered</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">New to empor ?</a></li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="registered">
          <form class="callus">
            <div class="form-group">
              <label>EMAIL ADDRESS</label>
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label>PASSWORD </label>
              <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="checkbox" name="check-box">
                  <span>Remember Me</span>
                </div>
              </div>
              <div class="col-sm-6 text-right">
                <a href="#" class="lost-pass">Lost your password?</a>
              </div>
            </div>
            <button type="submit" class="btn btn_dark btn_full">login</button>
          </form>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="profile">
          <form class="callus">
            <div class="form-group">
              <label>Name </label>
              <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
              <label>EMAIL ADDRESS</label>
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label>PASSWORD </label>
              <input type="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn_dark btn_full">Register</button>
          </form>
        </div>
      </div>
    </div>
    <div class="hr_head"><span>OR</span></div>
    <div class="share_with text-center top30">
      <h5 class="bottom20">SIGN IN WITH...</h5>
      <a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook </a>
      <a href="#." class="twitter"><i class="icon-twitter-1"></i> twitter</a>
      <a href="#." class="google"><i class="icon-google4"></i> google +</a>
    </div>
  </div>
    </div>
  </div>
</div>
<!-- Login end -->


<!--Search-->
<div id="search">
  <button type="button" class="close">×</button>
  <form class="centered clearfix">
    <input type="search" value="" placeholder="Search here...."  required/>
    <button type="submit" class="btn-search"><i class="icon-icons185"></i></button>
  </form>
</div>
 <!--Search Ends-->

<!--Page Load Popup-->
<!-- <div id="pageload-modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <div class="modal-body text-center">
        <h3 class="bottom10 text-uppercase">Empor Offer</h3>
        <p class="bottom40">get <span class="default_color">25%</span> off your First order. Join our newsletter to receive the
          latest updates and promotions
        </p>
        <form class="bottom40">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search&hellip;">
            <span class="input-group-btn">
            <button type="button"><i class="icon-arrow-right2"></i></button>
            </span>
          </div>
        </form>
        <ul class="social">
          <li><a href="#."><i class="icon-facebook-1"></i></a></li>
          <li><a href="#."><i class="icon-pinterest"></i></a></li>
          <li><a href="#."><i class="icon-twitter"></i></a></li>
          <li><a href="#."><i class="icon-google4"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div> -->
<!--Page Load Popup-->

<main>

<!-- Slider Start -->
<section id="rev_slider_wrapper" class="rev_slider"  data-version="5.0">
  <div id="rev_digit" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
    <ul>
      <!-- SLIDE  -->
      <li data-index="rs-129" data-transition="fade" data-slotamount="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-title="<span>01</span>">
        <!-- MAIN IMAGE -->
        <img src="images/home-banner.jpg" alt="" data-bgparallax="12" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->
        <div class="slider-caption tp-caption tp-resizeme"
          data-x="['center','center','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['340','240','140','140']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"  
          data-start="1300"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <h4 class="text-capitalize">Best Selling Products Our all the World</h4>
        </div>
        <div class="slider-caption tp-caption tp-resizeme"
          data-x="['center','center','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['375','275','175','185']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"  
          data-start="1600"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">;">
          <h1 class="text-uppercase">Take a Look at Our News</h1>
        </div>
        <div class="slider-caption tp-caption tp-resizeme"
          data-x="['center','center','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['455','355','255','265']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"  
          data-start="1800"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <a href="#." class="btn btn_default btn_rounded button_moema"> Shop Now</a>
        </div>
        
      </li>
      <li data-index="rs-130" data-transition="slideleft" data-slotamount="default" data-title="<span>02</span>">
        <img src="images/home-banner2.jpg" alt="" data-bgparallax="12" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
        <div class="slider-caption tp-caption tp-resizeme"
          data-x="['center','center','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['340','240','140','140']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"  
          data-start="1300"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <h4 class="text-capitalize">Best Selling Products Our all the World</h4>
        </div>
        <div class="slider-caption tp-caption tp-resizeme"
          data-x="['center','center','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['375','275','175','185']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"  
          data-start="1600"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <h1 class="text-uppercase">Birdy A classic Memphis</h1>
        </div>
        <div class="slider-caption tp-caption tp-resizeme"
          data-x="['center','center','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['455','355','255','265']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"  
          data-start="1800"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <a href="#." class="btn btn_default btn_rounded button_moema"> Shop Now</a>
        </div>
      </li>
      <li data-index="rs-131" data-transition="slideleft" data-title="<span>03</span>">
        <img src="images/home-banner3.jpg" alt="" data-bgparallax="12" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
        <div class="slider-caption tp-caption tp-resizeme"
          data-x="['center','center','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['340','240','140','140']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"  
          data-start="1300"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <h4 class="text-capitalize">Best Selling Products Our all the World</h4>
        </div>
        <div class="slider-caption tp-caption tp-resizeme"
          data-x="['center','center','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['375','275','175','185']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"  
          data-start="1600"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <h1 class="text-uppercase">Take a Look at Our News</h1>
        </div>
        <div class="slider-caption tp-caption tp-resizeme"
          data-x="['center','center','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['455','355','255','265']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"  
          data-start="1800"
          data-transform_idle="o:1;"
          data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <a href="#." class="btn btn_default btn_rounded button_moema"> Shop Now</a>
        </div>
      </li>
      <!-- SLIDE  -->
    </ul>
  </div>
</section>