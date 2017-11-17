@extends('layouts.layout')

@section('head')
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contacto</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
@endsection

@section('content')
<!-- header section -->
<section class="innerbanner" role="banner">
  <header id="header"> 
    <!-- navigation section  -->
    <div class="header-content clearfix"> <a class="logo" href="index"><img src="images/logo.png" alt="Mafolio"></a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="about">Inicio Sesion</a></li>
          <li><a href="contact">Contact</a></li>

        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    <!-- navigation section  --> 
  </header>
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="innerbanner-text text-center">
        <p>Contacto</p>
        <!-- banner text -->
      </div>
    </div>
  </div>
</section>
<!-- header section --> 
<!-- description text section -->
<section id="inner-description" class="section inner-description">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 text-center">
      <!--contact form start-->
      <p>Pongase en contacto con nosotros</p>
      <div class="col-md-6 col-md-offset-3 conForm">
        <div id="message"></div>
        <form method="post" action="php/contact.php" name="cform" id="cform">
          <input name="nombre" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Su nombre..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email ..." >
          <textarea name="comentarios" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Detalles..."></textarea>
          <input type="submit" id="submit" name="send" class="submitBnt" value="Enviar">
          <div id="simple-msg"></div>
        </form>
      </div>
      <!--contact form end-->
    </div>
  </div>
</section>
<!-- description text section -->
<!-- footer -->
<footer class="section footer">
  <div class="footer-bottom">
    <div class="container">
      <div class="col-md-12">
        <p>
        <ul class="footer-share">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
          <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
        </ul>
        </p>
        <p>© 2017 All rights reserved.<br>
          Hecho  <i class="fa fa-heart pulse"></i> por <a href="http://kamalchaneman.com/">Julen</a></p>
      </div>
    </div>
  </div>
</footer>
<!-- footer --> 

<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/jquery.waypoints.min.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/jquery.contact.js"></script> 
<script src="js/main.js"></script>

@endsection
