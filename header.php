<?php
    session_start();
    
    echo '
    <!doctype html>
    <html lang="en">
      <head>
        <title>Политеховский тройственный союз</title>
        <link rel = "icon" href = "/images/polikekunion.png" type="image/x-icon">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="/assets/css/aos.css">
        <link rel="stylesheet" href="/assets/fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="/assets/fonts/icomoon/style.css">
    
        <!-- MAIN CSS -->
        <link rel="stylesheet" href="/assets/css/style.css?v15">
        
      </head>
      <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
      
      <div class="site-wrap">
    
        <div class="site-mobile-menu site-navbar-target">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div>
       
    
        <!--<div class="top-bar">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <span class="text-white"><span class="mr-2 text-white icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">' . $_SESSION['user']['email'] . '</span></span>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="/profile.php" class="text-white"><span class="d-none d-md-inline-block">' . $_SESSION['user']['full_name'] . '</span></a>
                
                <div class="float-right">
                    <a href="/vendor/logout.php" class="text-white"><span class="d-none d-md-inline-block">выход</span></a>
                    <a href="/profile.php"><img class="mini-avatar" src="/' . $_SESSION['user']['avatar'] . '" width="50" height="50" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>-->
          
        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
    
          <div class="container">
            <div class="row align-items-center position-relative">
              
                <div class="site-logo">
                  <a href="/index.php" class="text-black"><span class="text-primary">☭ Triple union</span></a>
                </div>
                
                
                
                <div class="col-12">
                  <nav class="site-navigation text-right ml-auto " role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="/index.php" class="nav-link ' . (($_SERVER['REQUEST_URI'] == "/index.php") ? "active" : "") .  ' ">Главная</a></li>
                        <li><a href="/people.php" class="nav-link ' . (($_SERVER['REQUEST_URI'] == "/people.php") ? "active" : "") .  ' ">Люди</a></li>
                        <li><a href="/map/map.php" class="nav-link ' . (($_SERVER['REQUEST_URI'] == "/map/map.php") ? "active" : "") . ' ">Карта</a></li>
                        <li><a href="/economy/economy.php" class="nav-link ' . (($_SERVER['REQUEST_URI'] == "/economy/economy.php") ? "active" : "") . ' ">Экономика</a></li>
                        <li><a href="/gallery/index.php" class="nav-link ' . (($_SERVER['REQUEST_URI'] == "/gallery/index.php") ? "active" : "") . ' ">Правители</a></li>
                        <li><a href="/gaym/menu.php" class="nav-link ' . (($_SERVER['REQUEST_URI'] == "/gaym/menu.php") ? "active" : "") . ' ">Игра</a></li>
                        ';
                        if (isset($_SESSION['user'])) {
                            echo '<li class="has-children">
                              <a href="#"><img class="mini-avatar" src="/' . $_SESSION['user']['avatar'] . '" width="50" height="50" alt=""></a>
                              <ul class="dropdown">
                                <li><a href="/profile.php" class="nav-link ' . (($_SERVER['REQUEST_URI'] == "/profile.php") ? "active" : "") . ' ">' . $_SESSION['user']['full_name'] . '</a></li>
                                <li><a href="/edit.php" style="color: red;" class="nav-link">Редактировать</a></li>
                                <li><a href="/vendor/logout.php" style="color: red;" class="nav-link ' . (($_SERVER['REQUEST_URI'] == "/vendor/logout.php") ? "active" : "") .  ' ">Выйти</a></li>
                              </ul>
                            </li>';
                        }
                        else {
                            echo '<li><a href="/auth.php" style="color: red;" class="nav-link">Войти</a></li>';
                        }
                        
                    echo '</ul>
                  </nav>
              
                </div>
    
              <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
    
            </div>
          </div>
          
        </header>
        <br>
    ';