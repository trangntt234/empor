<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from wahabali.com/work/empor/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2017 17:24:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


<!-- Bootstrap -->
<link href="public/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="public/css/empor-icon.css">
<link rel="stylesheet" type="text/css" href="public/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="public/css/bootstrap-select.min.css">
<link rel="stylesheet" type="text/css" href="public/css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="public/css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="public/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="public/css/settings.css">
<link rel="stylesheet" type="text/css" href="public/css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="public/css/style.css">
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
        <div class="cols">
          <ul class="empr_nav">
            <!-- <li><a href="#."><i class="icon-heart3"></i></a></li> -->
            <li class="search_btn"><i class="icon-icons185"></i></li>
            <!-- <li><a href="#."><i class="icon-icons9"></i></a></li> -->
            <li><a href="<?=getUrl('add-to-cart') ?>" class="hamburger is-closed" ><i class="icon-icons102"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Start Header Navigation -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
        <a class="navbar-brand" href="<?= getUrl('/') ?>"><img src="public/images/logo.png" class="logo" alt=""></a>
      </div>
      <!-- End Header Navigation -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-menu">
          
        <ul class="nav navbar-nav navbar-left" data-in="fadeIn" data-out="fadeOut">
          <?php foreach ($cate as $key => $c): ?>
            <li class="dropdown">
              <a href="<?=getUrl('/') ?>" class="dropdown-toggle" data-toggle="dropdown"><?=$c->CategoryName ?></a>
                <ul class="dropdown-menu">
                  <?php $subcate = Category::getSubCate($c->CategoryID);
                    foreach ($subcate as $key => $sc): ?>
                     <li><a href="<?php echo getUrl('danh-muc-san-pham') ?>?id=<?= $sc->CategoryID ?>"><?=$sc->CategoryName?></a></li>
                  <?php endforeach ?>
                </ul>
            </li>
          <?php endforeach ?>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="#">Demos</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
  </nav>
</header>
<!--HEADER ENDS-->

   



<!--Search-->
<div id="search">
  <button type="button" class="close">×</button>
  <form class="centered clearfix" action="<?= getUrl('search-product') ?>" method = "POST">
    <input type="search" name = "keyword" value="" placeholder="Search here...."  required/>
    <button type="submit" class="btn-search"><i class="icon-icons185"></i></button>
  </form>
</div>
 <!--Search Ends-->

<main>

<!-- Slider Start -->
