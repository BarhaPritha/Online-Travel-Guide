<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login to Travel Guide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <style>
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
		  	background-color: #2F5E15;
		  	margin:  0;
		  	padding:  0;
			background-image: url(ratargul.jpg);
			background-size:  cover;
			font-family:  sans-serif;
			background-repeat: no-repeat;
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
			position:  absolute;
			top:  50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 400px;
			height: auto;
			padding:  80px 40px;
			box-sizing:  border-box;
			background:  rgba(20,0,0,.5);
			border-radius: 25px;
			border: 2px solid white;
			margin-top: 1%;
			padding-top: 5%;
			margin-bottom:1%;
			padding-bottom: 3%;
		}
		.loginBox h2{
			margin:  0;
			padding:  0 0 20px;
			color: white;
			text-decoration-color: solid red;
			text-align:  center;
		}
		.loginBox p{
			margin:  0;
			padding:  0;
			font-weight:  bold;
			color:  #fff;
			font-size:  16px;
		}
		.loginBox input {
			  width:  100%;
			  margin-bottom: 20px;
			  
		}
		.loginBox input[type="text"],.loginBox input[type="password"]{
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
			color:  rgba(255, 255, 255, .7);
		}
		.loginBox button{
			border:  1px solid white;
			padding: 10px 20px;
			outline: none;
			height:  40px;
			color:  white;
			font-size:  16px;
			background:  royalblue;
			cursor:  pointer;
			border-radius:  5px;
		}
		.loginBox button:hover{
			background:  #ff267e;
			color:  black;
			border:  1px solid black;
		}
		.loginBox input[type="checkbox"]{
			margin-bottom: -15px;
			margin-left: -47%;
			color: solid black;
			float: left;
			font-size:  15px;
			font-weight:  bold;
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

		@media screen and (max-width: 1370px) {
		  	.user{
				width:  100px;
				height:  100px;
				top:  calc(-100px/2);
				left:  calc(50% - 50px);
			}
			.loginBox h2{
				margin:  0;
				margin-top: 25px;
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
				padding:  80px 40px;
				box-sizing:  border-box;
				background:  rgba(0,0,0,.5);
				border-radius: 25px;
				border: 2px solid white;
				margin-top: 1%;
				padding-top: 5%;
				margin-bottom:1%;
				padding-bottom: 5%;
			}
		}
		@media screen and (max-width: 700px) {
			.user{
				width:  60px;
				height:  60px;
				top:  calc(-60px/2);
				left:  calc(50% - 30px);
			}
			.loginBox{
				position:  absolute;
				top:  50%;
				left: 50%;
				transform: translate(-50%, -50%);
				width: 315px;
				height: auto;
				padding:  80px 40px;
				box-sizing:  border-box;
				background:  rgba(0,0,0,.5);
				border-radius: 25px;
				border: 2px solid white;
				margin-top: 1%;
				padding-top: 5%;
				margin-bottom:5%;
				padding-bottom: 10%;
			}
		}
	</style>
</head>

<body>
  <div class="header">

  </div>
  <div class="loginBox">
	<img src="add-person.png" class="user">
		<h2>MEMBER LOGIN</h2> 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<p>Name</p>
  		<input type="text" placeholder="Enter your username" name="username" >
  	</div>
  	<div class="input-group">
  		<p>Password</p>
  		<input type="password" placeholder="Type your password" name="password">
  	</div>
  	<div class="input-group">
      <input type="checkbox" name="remember" value="Remember">
			<h5>Remember me</h5><br>
	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div><br>
  </form>
    <p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </div>

</body>
</html>