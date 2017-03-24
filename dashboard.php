<?php
	session_start();

	if(!isset($_SESSION['login_user'])){  
	  echo '<script language="javascript">';
      echo 'alert("What? Dude login first :P")';
      echo '</script>';   
      header("Refresh: 1; url=index.html"); 
      exit();
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width,initial-scale=1">
<title> Welcome User </title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Jim+Nightshade|Lobster" rel="stylesheet">
</head>
<style>

	<style>
	#con{
		color: black;
		background-color: black;
		height:0%;
		width: auto;
	}
	.f{
		background-image: url("css/images/bg.jpg");
		background-size: auto auto;
		background-repeat: no-repeat;
		font-family: Lobster;
	}
	#phi{
		
		color: black;
	}
	.carousel-inner
	{
		width:100%;
		max-height: 400px !important;
	}
	.jumbotron2{
		background-color: #c8f442;
		height: 35px;
	}
	.header img{
		float: left;
		width: 100px;
		height:100px;
		background :#555;
		border-radius: 100%;
	}
	.header h1{
		position: relative;
		top: 18px;
		left: 10px;
	}
	.spacing{
		position: relative;
		top-margin:100px;
		float: bottom;
	}
	#panel
	{
		display: none;
		padding: 50px;
	}

	#abtfonts{
		font-size: 20px;
	}
	span{
		font-family: Lobster;
	}
	.img-center {margin:0 auto;}

	#fixpos{
		margin-left: 90em;
		margin-top: 20em;
		position: fixed;
	}

	#fixpos2{
		margin-left: 90em;
		margin-top: 22em;
		position: fixed;
	}
	.carousel-inner{
		
		max-width: 200em;
	}
	.carousel img{
		height:500em;
		width: auto;
		max-width: none;
	}
	.carousel-caption{
		top:50%;
		transform: translateY(-160%);
		bottom: initial;
	}
</style>

</style>
<body class="f">

<div class="container">
<div class="container">
	<div class="header"  class="jumbotron" id="phi">
		

		<img src="css/images/help.png" style="margin-top: 2em;">
		<ul class="list-inline" class="spacing" >
		<li><h1 class="spacing">Social Responsibiity .com</h1></li>
		<li><div class="media" style="margin-left:55em;margin-top: -80px;">
		<div class="media-left media-top">
			<a href="#">
			<img class="media-object" src="css/images/dp.jpg" alt="">
			</a>
		</div>
		<div class="media-body" style="margin-top: 10px;">
		<h4 class="media-heading" style="margin-top: 10px;"><?php echo $_SESSION['login_user']; ?><a href="logout.php">  <button class="btn btn-default">Log Out</button></h4></a>
		<h5><?php echo $_SESSION['user_phone']; ?></h5>
		<h5><?php echo $_SESSION['user_email']; ?></h5>

		</div>
			
		</div>
		</div></li>

	</div>

</div>
	<p>          </p>
	<p>          </p>
	<p>          </p>
<div class="container" class="spacing">
	<div class="jumbotron2">
	<ul class="list-inline" class="spacing">
	<li style="margin-left: 0em;"><a href="index.html"><button class="btn btn-default"><div id="flip"><span class="glyphicon glyphicon-home"><span class="f"> Home<span></span></div> <div id="panel">Hello world!</div></button></a></li>
	
	</a>
	</a></li>
	</ul>
	</div>
</div>
</div>

<h1 style="text-align: center; font-size: 70px;">Dashboard</h1>

<hr />
<hr />


<a href="#cne" style="margin-left: 20em;
"><button class="btn btn-default btn-lg" style="width: 20em;"><span class="glyphicon glyphicon-info-sign"><span class="f"> Create Issue</span></span></button></a>

<a href="#cne" style="margin-left: 0em;
"><button class="btn btn-default btn-lg" style="width: 20em;"><span class="glyphicon glyphicon-info-sign"><span class="f"> Discover Issue</span></span></button></a>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
