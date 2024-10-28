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

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th >&nbsp;</th>
						        <th >Product name</th>
                    <th >Quantity</th>
						        <th >Price</th>
						        <th >Total</th>
						      </tr>
						    </thead>
						    <tbody>
                  @foreach ($cartItems->items as $item)
                  <tr class="text-center">
            
                    

                     <td class="image-prod"><div class="img" style="background-image:url({{ asset('uploads/items/' . $item['image']) }});"></div></td>

                    <td class="product-name">
                      {{ $item['name'] }}
                    </td>
                    
                     <td class="quantity">
                        {{ $item['qty'] }}
                    </td>

                    <td class="price">{{ $item['price'] }}</td>
                    
                   
                    
                    <td class="total">{{ $item['unitprice'] }}</td>
                  </tr>
						    
                    @endforeach
                  <tr class="text-center"> 
                      <td>  </td> 
                      <td>  </td>
                      <td>  </td>
                      <td><h5> Total Amount =  </h5></td>
                      <td> {{ $totalPrice }}</td>
                  </tr>
                  <tr class="text-center">  
                      <td>  </td>
                      <td> <div class="input-group mb-3">
                        <a class="btn btn-primary py-3 px-5" href="{{ url("/items/product") }}">Continue Shopping</a>
                      </div> </td>
                      <td>  </td>
                      <td> <a class="btn btn-primary py-3 px-5" href="{{ url("/removecart") }}">Remove Cart</a></td>
                      <td>  </td>
                  </tr>

						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
        <br>
          <center>
                <a class="btn btn-primary py-3 px-5" href="{{ url('/order') }}">Submit Order</a>
          </center>
			</div>
		</section>

    <footer class="ftco-footer ftco-section">
      <div class="container">
      <div class="row">
          <div class="mouse">
            <a href="#" class="mouse-icon">
              <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">MyintMyat</a>
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

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>