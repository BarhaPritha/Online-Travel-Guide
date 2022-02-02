<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>Registration to Travel Guide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="bootstrap.min.css">

  	<style>
		.err {color: #FF0000;}
    	.loginBox a{
			color: skyblue;
			font-size:  16px;
			font-weight:  bold;
			text-decoration: none;
			cursor: pointer;
		}
		a:hover{
			color: red;
		}
		* {
		  margin: 0px;
		  padding: 0px;
		}
		body {
		  	font-size: 120%;
		  	background-color: #293A30;
		  	margin:  0;
		  	padding:  0;
			background-image:  url(tiger.jpg);
			font-family:  sans-serif;
			background-repeat: no-repeat;
  			background-size: cover;
		}
		.user{
			width:  100px;
			height:  100px;
			border-radius:  50%;
			overflow:  hidden;
			position:  absolute;
			top:  calc(-100px/2);
			left:  calc(50% - 50px);
		}
		.loginBox{
			position: absolute;
			top:  50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 700px;
			height: auto;
			padding:  30px 50px;
			box-sizing:  border-box;
			background:  rgba(0, 100, 50, 0.5);
			border-radius: 25px;
			border: 2px solid white;
			margin-top: 265px;
			padding-top: 3%;
			margin-bottom:3%;
			padding-bottom: 3%;
			color: white;
		}
		.loginBox h2{
			margin:  2px;
			padding: 0 0 20px;
			color:  white;
			text-decoration-color: solid red;
			text-align:  center;
			margin-top: 20px;
		}
		.loginBox p{
			margin:  0;
			padding:  0;
			font-weight:  bold;
			color:  white;
			font-size:  16px;
		}
		.loginBox input {
			  width:  100%;
			  margin-bottom: 20px;
			  
		}
		.loginBox input[type="text"],.loginBox input[type="password"],.loginBox input[type="email"]{
			height:  30px;
			padding:5px;
			margin-top: 10px;
			margin-bottom: 30px;
			border:  1px solid white;
			background:  transparent;
			border-radius: 5px;
			outline:  none;
			color: white;
			font-size:  16px;
		}
		::placeholder{
			color:  rgba(255, 255, 255, .5);
		}
		.loginBox button{
			border:  1px solid white;
			padding: 10px 20px;
			outline: none;
			height:  50px;
			color:  white;
			font-size:  16px;
			background:  royalblue;
			cursor:  pointer;
			border-radius:  5px;
			width:120px;
		}
		.loginBox button:hover{
			background:  #ff267e;
			color:  black;
			border:  1px solid black;
		}
		.loginBox input[type="checkbox"]{
			margin-bottom: -15px;
			margin-left: -47%;
			color: white;
			float: left;
			font-size:  15px;
			font-weight: bold;
			text-decoration: none;
			text-align: left;
		}
		.loginBox h5{
			color: white;
			font-size:  15px;
			font-weight:  bold;
			text-decoration:  none;
			margin-left: 20px;
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
		  color: #3c763d; 
		  background: #dff0d8; 
		  border: 1px solid #3c763d;
		  margin-bottom: 20px;
		}

		@media screen and (max-width: 1400px) {
		  	.user{
				width:  60px;
				height:  60px;
				top:  calc(-60px/2);
				left:  calc(50% - 30px);
			}
			.loginBox h2{
				margin:  0;
				margin-top: 35px;
				padding:  0 0 20px;
				color: white;
				text-decoration-color: solid red;
				text-align:  center;
			}
			body {
			  	background-color: skyblue;
				background-image:  none;
				background-size:  cover;
				font-family:  sans-serif;
				background-repeat: no-repeat;
			}
			.loginBox{
				position:  absolute;
				top:  50%;
				left: 50%;
				transform: translate(-50%, -50%);
				width: 500px;
				height: auto;
				padding:  -10px 40px;
				box-sizing:  border-box;
				background:  rgba(0,0,0,.5);
				border-radius: 25px;
				border: 2px solid white;
				margin-top: 15%;
				padding-top: 3%;
				margin-bottom: 5%;
				padding-bottom: 4%;
			}
		}
		@media screen and (max-width: 700px) {
			.user{
				width:  40px;
				height:  40px;
				top:  calc(-40px/2);
				left:  calc(50% - 20px);
			}
			.loginBox h2{
				margin:  0;
				margin-top: 20px;
				padding:  0 0 15px;
				color: white;
				text-decoration-color: solid red;
				text-align:  center;
			}
			.loginBox{
				position:  absolute;
				top:  50%;
				left: 50%;
				transform: translate(-50%, -50%);
				width: 315px;
				height: auto;
				padding:  0px 30px;
				box-sizing:  border-box;
				background:  rgba(0,0,0,.5);
				border-radius: 25px;
				border: 2px solid white;
				margin-top: 220px;
				padding-top: 3%;
				margin-bottom:5%;
				padding-bottom: 8%;
			}
		}
	</style>
</head>

<body>
  <div class="header">
  </div>
  <div class="loginBox">
  <img src="user.png" class="user">
		<h2>Register</h2>
  <form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
	  <label for="name">Name</label>
      <input type="text" placeholder="Enter your name" name="name">
    </div>
    <div class="input-group">
      <label for="username">Username<span class="err"> * </span></label>
      <input type="text" name="username" placeholder="Create an username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label for="email">Email<span class="err"> * </span></label>
      <input type="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label for="phone">Phone</label>
      <input type="text" placeholder="Enter your contact number" name="phone">
    </div>
    <div class="input-group">
      <label for="address">Address</label>
      <input type="text" placeholder="Enter your address" name="address">
    </div>
    <div class="input-group">
      <label for="password_1">Password<span class="err"> * </span></label>
      <input type="password" placeholder="Create a password" name="password_1">
    </div>
    <div class="input-group">
      <label for="password_2">Confirm password<span class="err"> * </span></label>
      <input type="password" placeholder="Retype your password" name="password_2">
    </div>
    <p><span class="err">* required field</span></p><br>
  	<div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div><br>
  </form>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
</div>

</body>
</html>