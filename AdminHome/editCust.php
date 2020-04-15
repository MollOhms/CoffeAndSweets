<!DOCTYPE html>
<?php

session_start();

require_once ('../php/CreateDb.php');
require_once ('../php/component.php');


// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
?>

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

<div class = 'profile-card'>
    <form action="./index.php" method="post">
  <h2>Edit Existing Customer Account</h2>
        <p> 
            <label for="First name" class="floatLabel">First Name</label>
            <input id="First name" name="First name" type="text">
        </p>
        <p> 
            <label for="Last name" class="floatLabel">Last Name</label>
            <input id="Last name" name="Last name" type="text">
        </p>
        <p> 
            <label for="Country" class="floatLabel">Country</label>
            <input id="Country" name="Country" type="text">
        </p>
        <p> 
            <label for="streetAd" class="floatLabel">Street Address</label>
            <input id="streetAd" name="streetAd" type="text">
        </p>
        <p>
            <label for="ZipCode" class="floatLabel">Postcode / ZIP</label>
            <input id="ZipCode" name="ZipCode" type="text">
        </p>
		<p>
			<label for="Phone" class="floatLabel">Phone</label>
			<input id="Phone" name="Phone" type="text">
		</p>
        <p>
			<label for="Email" class="floatLabel">Email</label>
			<input id="Email" name="Email" type="text">
		</p>

		<p>
			<label for="password" class="floatLabel">Password</label>
			<input id="password" name="password" type="password">
		</p>
		<p>
			<label for="confirm_password" class="floatLabel">Confirm Password</label>
			<input id="confirm_password" name="confirm_password" type="password">
		</p>
		<p>
			<input type="submit" value="Update Customer Account" id="submit">
		</p>
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