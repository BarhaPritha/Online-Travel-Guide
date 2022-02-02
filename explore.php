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

	<title>Explore | Travel Guide</title>

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
		.card a{
			text-decoration: none;
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
      <li class="nav-item active">
        <a class="nav-link" href="explore.php">Places to Explore<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="packages.php">Tour Packages</a>
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


<div class="city">
<!-- 	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TravelGuide";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT City FROM Division";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["City"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> -->

<h1 style="color:black; text-align: center; margin: 5% auto;">Places to Explore</h1>
<div style="width:90%; margin:2% auto;" class="card-deck">
  <div class="card">
    <img src="lalbagherkella.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 style="font-weight:bold; color:darkblue;" class="card-title">Dhaka</h5>
      <p class="card-text">Dhaka is not a quiet, retiring place. The city, bursting with nearly 17 million people, is always bubbling with energy. Architect Louis I Kahn's acclaimed modernist Jatiya Sangsad Bhaban was inaugurated in Dhaka in 1982 as one of the largest legislative complexes in the world, comprising 200 acres (800,000 m²). Dhaka is also a home to Lalbagh Fort, Ahsan Manzil, Tara Mosque, Hussaini Dalan, Curzon Hall, Dhakeshwari Temple, Ramna Kali Mandir and many more.</p>
      <a href="city/Dhaka.php">&rarr; See More</a>     
    </div>
  </div>
  <div class="card">
    <img src="cox.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 style="font-weight:bold; color:darkblue;" class="card-title">Chittagong</h5>
      <p class="card-text">Chittagong is Bangladesh's second-largest city and the country's largest port. It's a gritty, polluted and congested place, but as the gateway to the Chittagong Hill Tracts – one of the most beautiful and fascinating corners of the country – it's somewhere that many visitors pass through at some point. As well as a place to sort your travel permits for the Hill Tracts, it also makes sense to rest up here for at least one night if you're planning to hit the beaches of Cox's Bazar or St Martin's Island.</p>
      <a href="city/Chittagong.php">&rarr; See More</a>  
    </div>
  </div>
</div>

<div style="width:90%; margin:2% auto;"  class="card-deck">
  <div class="card">
    <img src="jaflong.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 style="font-weight:bold; color:darkblue;" class="card-title">Sylhet</h5>
      <p class="card-text">Nestled in the picturesque Surma Valley amidst scenic tea plantations and lush green tropical forests, greater Sylhet is a prime attraction for all tourists visiting Bangladesh. Laying between the Khasia and the Jaintia hills on the north, and the Tripura hills on the south, Sylhet breaks the monotony of the flatness of this land by a multitude of terraced tea gardens, rolling countryside and the exotic flora and fauna.</p>
      <a href="city/sylhet.php">&rarr; See More</a>  
    </div>
  </div>
  <div class="card">
    <img src="Sundarban_Tiger.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 style="font-weight:bold; color:darkblue;" class="card-title">Khulna</h5>
      <p class="card-text">A large part of the Sundarbans, a UNESCO world heritage, is located in Khulna. It serves as a launchpad for organised trips into the Sundarbans and is hence an important dot on the country's tourist map. The city, on the bank of Rupsha river, itself offers few worthy sights.</p>
      <a href="city/khulna.php">&rarr; See More</a>  
    </div>
  </div>
</div>
<div style="width:90%; margin:2% auto;" class="card-deck">
  <div class="card">
    <img src="Paharpur.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 style="font-weight:bold; color:darkblue;" class="card-title">Rajshahi</h5>
      <p class="card-text">Rajshahi is very well known for its magnificent archeological sites, affording visitors the opportunity to walk through history and discovery the ancient civilizations of the region and Bangladesh. It is home to the Varendra Research Museum, Kantaji Temple, the Sompur Bihar monastery, Shona Mosque, Pairabondh, Chalan Beel, Puthia Temple Complex and Mohasthangar. It is most definitely a region for adventurers and explorers as here, in the quiet landscapes, will find an array of ruins and structures that are monuments to the rule of Buddhist empires, Islam rule and Hindu influence.</p>
      <a href="city/rajshahi.php">&rarr; See More</a>  
    </div>
  </div>
  <div class="card">
    <img src="kuakata.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 style="font-weight:bold; color:darkblue;" class="card-title">Barishal</h5>
      <p class="card-text">Surrounded by turbid rivers and hemmed by unending tracts of greenery, Barishal is a major port city and one of the gateways to the waterworld that is Bangladesh. Barisal is one of the more pleasant outposts in the country, with several ponds in the city centre. To arrive here by boat in the early-morning mist (as you do if you catch the launch from Dhaka) is an unforgettable experience.</p>
      <a href="city/barisal.php">&rarr; See More</a>  
    </div>
  </div>
</div>

<div style="width:90%; margin:2% auto;"  class="card-deck">
  <div class="card">
    <img src="tajhat.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 style="font-weight:bold; color:darkblue;" class="card-title">Rangpur</h5>
      <p class="card-text">Far from the chaos and commotion of southern Bangladesh, Rangpur in the north is a small divisional headquarter town with tree-lined streets, Raj-era bungalows, the splendid Carmichael College and the majestic Tajhat Palace – arguably one of the country's most imposing rajbaris. It’s also possible to visit some fascinating river chars (sandbanks that double as residential or agricultural land) from here. The beautiful Kantanagar Temple and the town of Dinajpur are also within range, and make a good local itinerary in conjunction with Rangpur.</p>
      <a href="city/rangpur.php">&rarr; See More</a>  
    </div>
  </div>
  <div class="card">
    <img src="Brahmaputra.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 style="font-weight:bold; color:darkblue;" class="card-title">Mymensingh</h5>
      <p class="card-text">Mymensingh city is almost four hundred years old and has a rich political and cultural history. There are a number of places of interest for visitors to explore, including Zainul Abedin art gallery and Mymensingh Rajbari. A boat ride on the river Brahmaputra offers visitors a unique view of the city of Mymensingh and surroundings. The sun setting over the river is an unforgettable sight!</p>
      <a href="city/Mymensingh.php">&rarr; See More</a>  
    </div>
  </div>
</div>

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