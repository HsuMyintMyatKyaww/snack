<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Snack Villa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/aos.css">

    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css">
  </head>
  <body class="goto-here">
		
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ url("/items") }}">Snack Villa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{ url("/items") }}" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="{{ url("/items/product") }}" class="nav-link">Product</a></li>
            
            <li class="nav-item"><a href="{{ url("/items/contact") }}" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="{{ url("/cart") }}" class="nav-link">ViewCart</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

      <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-2 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
           <span class="subheading">Available Now</span>
            <h2 class="mb-4">Our Products</h2>
            <p>A place full of your favourite snacks &amp; drinks!<p>
          </div>
        </div>      
      </div>
      
      <div class="container">
        <div class="row">
         @foreach($items as $item)
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" 
              src="{{ asset('uploads/items/' . $item->image) }}" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">{{ $item->snack_name}}</a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span>{{ $item->price}} mmk</span></p>
                  </div>
                </div>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <a href="{{  url("/items/detail/$item->id")  }}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                      <span><i class="ion-ios-menu"></i></span>
                    </a>
                    <a href="{{ url("/addtocart/$item->id") }}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                      <span><i class="ion-ios-cart"></i></span>
                    </a>
                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                      <span><i class="ion-ios-heart"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        
      </div>
    </section>
    

    <hr>

    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Snack Villa</h2>
              <p>We are always here for your snacks and drinks.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Myint Myat</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo url('/'); ?>/js/jquery.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/popper.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo url('/'); ?>/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/jquery.stellar.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/aos.js"></script>
  <script src="<?php echo url('/'); ?>/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo url('/'); ?>/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo url('/'); ?>/js/google-map.js"></script>
  <script src="<?php echo url('/'); ?>/js/main.js"></script>
    
  </body>
</html>