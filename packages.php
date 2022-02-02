<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/88046710bc.js" crossorigin="anonymous"></script>

	<title>Tour Packages | Travel Guide</title>

	<style>
		.navbar a:hover{
			color: darkblue !important;
			font-weight: bold;
			border-top: 1px solid darkblue;
		}
		* {
		  margin: 0px;
		  padding: 0px;
		}
		body {
		  	background-color: white;
			font-family:  sans-serif;
			background-image: none;	
			background-size: cover;
			background-repeat: no-repeat;	
		}
		.active{
			font-weight: bold;
			color: darkblue;
		}
		.navbar ul{
			width: 90%;
		}
		.nav-item{
			margin-right: 2%;
		}
		.error {
		  width: 92%; 
		  margin: 5px auto; 
		  padding: 10px; 
		  margin-bottom: 15px;
		  border: 1px solid red; 
		  color: red !important;
		  background: grey; 
		  border-radius: 5px; 
		  text-align: left;
		  font-weight: none !important;
		}
		.error p{
			color: red !important;
			font-weight: none !important;
		}
		.success {
		  color: darkgreen !important; 
		  background: lightgreen; 
		  border: 0.5px solid green;
		  text-align: center;
		  font-size: 12px;
		}
		.footer {
		  left: 0;
		  bottom: 0;
		  width: 100%;
		  background: rgb(40, 41, 35);
		  color: white;
		  text-align: center;
		  position: relative;
		  height: 70px;
		  margin:0;
		  padding: 0;
		}
		.footer p{
			padding-top: 2%;
			margin-bottom: 1%;
			font-size: 14px;
		}

		.map-container{
			overflow:hidden;
			padding-bottom:56.25%;
			position:relative;
			height:80px !important;
			background-color: rgb(0, 0, 0, .8);
		}
		.map-container iframe{
			left:0;
			top:0;
			margin-left: 10%;
			margin-top: 6%;
			height:80%;
			width:80%;
			position:absolute;
		}
		.travel{
			width:80%;
			background-color: white;
			margin: 0 auto;
			padding: 2% 2%;
			margin-top: 2%;
		}
		.tour button:hover{
			color:blue !important;
			border: 1px solid blue !important;
			background-color: white !important;
		}
		.travel h2{
			border-bottom: 1px solid grey;
			color: darkblue;
			font-weight: bold;
		}
		.carousel-inner{
			height: 550px !important;
		}

		@media screen and (max-width: 1370px) {

		}
		@media screen and (max-width: 700px) {
			.footer {
			  left: 0;
			  bottom: 0;
			  width: 100%;
			  color: white;
			  text-align: center;
			  position: relative;
			  height: 50px;
			}
			.footer p{
				padding-top: 4%;
				font-size: 12px;
			}
			.carousel{
				height: 180px !important;
				margin-bottom: 1%;
			}
			.carousel-inner{
				height: 180px !important;
			}

		}
	</style>
</head>
<body>

<ul class="nav bg-dark navbar-dark justify-content-end">
	<div class="login" style="margin-right: 5%; margin-top:1%;">
<!-- 	  	<?php if (isset($_SESSION['success'])) : ?>
	      <div class="error success" >
	      	<p>
	          <?php 
	          	echo $_SESSION['success']; 
	          	unset($_SESSION['success']);
	          ?>
	      	</p>
	      </div>
	  	<?php endif ?> -->

	    <!-- logged in user information -->
	    <?php  if (isset($_SESSION['username'])) : ?>
	    	<p style="text-align: center; color:white; font-size: 16px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong> <i class="fas fa-user-check"></i> | <a href="index.php?logout='1'" style="color: skyblue;">Sign out</a></p>
	    <?php endif ?>
	</div>
</ul>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; height:80px">
  <p style="margin-left: 5%; margin-right: 5%; margin-top: 15px;font-weight: bold; color:darkblue;font-size: 28px;" class="navbar-brand">Travel Guide</p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="explore.php">Places to Explore</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="packages.php">Tour Packages<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="transport.php">Transport & Hotels</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
  </div>

</nav>



<div class="tour">
<h1 style="color:black; text-align: center; margin: 5% auto;">Tour Packages</h1>
<div style="width:90%; margin:2% auto;" class="card-deck">
	  <div class="card">
	  <img src="sunrise.jpg" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title text-success">Cox's Bazar Tour</h5>
	    <p class="card-text">4 days and 3 nights tour at Cox's Bazar by AC Bus at &#2547; 25,000 per person</p>
	    <button style="text-align: center;" type="button" class="btn btn-primary">Select Package</button><br><br>
	  </div>
	</div>
	  <div class="card">
	  <img src="Keokaradang.jpg" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title text-success">Bandarban Tour</h5>
	    <p class="card-text">3 days and 2 nights tour at Bandarban by AC Bus at &#2547; 20,000 per person</p>
	    <button style="text-align: center; " type="button" class="btn btn-primary">Select Package</button><br><br>
	  </div>
	</div>
	<div class="card">
	  <img src="kuakata-beach.jfif" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title text-success">Kuakata Beach Tour</h5>
	    <p class="card-text">3 days and 2 nights tour at Kuakata Beach by AC Bus at &#2547; 15,000 per person</p>
	    <button style="text-align: center;" type="button" class="btn btn-primary">Select Package</button><br><br>
	  </div>
	</div>
</div>

<div style="width:90%; margin:2% auto;" class="card-deck">
	 <div class="card">
	  <img src="bichanakandi.jpg" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title text-success">Sylhet Tour</h5>
	    <p class="card-text">4 days and 3 nights tour at Sylhet by AC Bus at &#2547; 20,000 per person</p>
	    <button style="text-align: center;" type="button" class="btn btn-primary">Select Package</button><br><br>
	  </div>
	</div>
	 <div class="card">
	  <img src="jaflong.jpg" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title text-success">Sreemangal Tour</h5>
	    <p class="card-text">2 days and 1 night tour at Sreemangal by AC Bus at &#2547; 10,000 per person</p>
	    <button style="text-align: center;" type="button" class="btn btn-primary">Select Package</button><br><br>
	  </div>
	</div>
	<div class="card">
	  <img src="sundarban.jpg" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title text-success">Sundarban Tour</h5>
	    <p class="card-text">2 days and 1 night stay at Sundarban by AC Bus at &#2547; 10,000 per person</p>
	    <button style="text-align: center;" type="button" class="btn btn-primary">Select Package</button><br><br>
	  </div>
	</div>
</div>
<h1 style="color:Blue; text-align: center; margin: 5% auto;">Coming Soon!</h1>
</div>

	
<div class="footer">
  <p><span style="color: red;">Happy Travelling</span> &copy; <span style="color: royalblue;">Fall 2019</span> | <span style="color: red;">CSE370</span><span style="color: royalblue;"> Section 7</span></p>
</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	<script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script>

</body>
</html>