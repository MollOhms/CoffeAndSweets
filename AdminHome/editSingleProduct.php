<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Coffee Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/profile.style.css">
    
  </head>
  <body class="goto-here">

    <!--Nav-->
	<?php require_once ("../php/1header.php"); ?>
	<!--Nav end-->
<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<?php require_once ("../php/leftBar.php") ?>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">   
                <div class="container ">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="$productimg" class="image-popup"><img src="../coffeePics/yaucono8oz.jpg" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>Cafe Yaucono 8oz</h3>
           
                <p class="price"><span>$5</span></p>
                <p>
                Yaucono is an iconic brand which represents both our coffee culture and tradition. 
                For decades it has been the number #1 coffee of choice for most Puerto Rican households. 
                Smooth and balanced, Yaucono's hand picked beans are toasted to a perfect roast and processed
                 to an ultra fine grind resulting in its exquisite taste.
                </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group d-flex">
                
                        </div>
                        <div class="w-100"></div>
               
          </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="profile-card">
    <form action="./index.php">
    <h2>Edit Product</h2>
					<span>
						Product Name
					</span>
					<div data-validate = "ID Required">
						<input  type="text" name="productName" >
                    </div>
                    <span>
						Category
					</span>
					<div data-validate = "ID Required">
						<input  type="text" name="category" >
                    </div>
                    <span>
						Product Price
					</span>
					<div data-validate = "ID Required">
						<input  type="text" name="productPrice" >
                    </div>
                    <span>
						Product ID
					</span>
					<div data-validate = "ID Required">
						<input  type="text" name="productId">
                    </div>
                    <span>
                        Description
					</span>
					<div data-validate = "ID Required">
						<input  type="text" name="description" >
                    </div>
                    <span>
						Product IMG
                    </span>
					<div>
						<input  type="image" name="productImg" >
                    </div>
                    
					<div>
						<button>
							Update
						</button>
					</div>
				</form>
		</div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>