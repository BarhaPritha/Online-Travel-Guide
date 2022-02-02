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

	<title>Contact Us | Travel Guide</title>

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
		.travel button:hover{
			color:blue;
			border: 1px solid blue;
			background-color: white;
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

		* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: white;
  color:green;
  border: 1px solid green;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: black;
  padding: 10px;
  margin: 5% auto;
  color: white;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
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
      <li class="nav-item">
        <a class="nav-link" href="packages.php">Tour Packages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="transport.php">Transport & Hotels</a>
      </li>
      <li class="nav-item  active">
        <a class="nav-link" href="contact.php">Contact Us<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>

</nav>


<div style="margin: 0 auto; padding: 2% 5%; width: 100%; background-color:black; color:white;" class="container-fluid">
  <div style="text-align:center;">
    <h2 style="color:green;font-weight: bold;">Contact Us</h2>
    <p>Visit us for a cup of tea, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <h5> <i class="far fa-envelope"></i> &nbsp; info@travelguide.com</h5>
      <h5> <i class="fas fa-phone"></i> &nbsp; +880-17-2345-6789</h5>
      <form style="margin-top:5%;" action="/action_page.php">
        <label for="subject">Message:</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px"></textarea>
        <input class="btn btn-success" type="submit" value="Send">
      </form>
    </div>
    <div class="column">
      <img src="jaflong.jpg" style="width:100%">
    </div>
  </div>
</div>



<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 80px !important;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.25904790794!2d90.4238561603127!3d23.773788011617636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c78e49160331%3A0x2fd8ec432cec9fc4!2sBrac%20University!5e0!3m2!1sen!2sbd!4v1574263118301!5m2!1sen!2sbd" width="200" height="80" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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