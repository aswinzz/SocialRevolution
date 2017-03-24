<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="logo.png" type="image/x-icon"/>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width,initial-scale=1">
<title> Social Revolution </title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Jim+Nightshade|Lobster" rel="stylesheet">
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
</style>

    <link href="css/bootstrap.css" rel="stylesheet">



    <link href="css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>


</head>

<body class="f">
	


</span>
<div class="container">
	<div class="header"  class="jumbotron" id="phi">
		<img src="css/images/logo.png" style="margin-top: 2em;">
		<ul class="list-inline" class="spacing">
			<li><h1>Social Responsibility . com</h1></li>
<?php
	session_start();

	if(!isset($_SESSION['login_user'])){  
	  echo '<li style="margin-left: 60em;"><a href="signin.php"><button class="btn btn-submit"><div id="flip"><span class="glyphicon glyphicon-user"><span class="f">Sign In  <span style="font-family: arial;">   OR   </span> <span class="glyphicon glyphicon-plus"><span class="f">  Sign Up</span></span></span></span></button></a></li>';

	}
	else 
	{
		echo '<li><div class="media" style="margin-left:55em;margin-top: -80px;">';
		echo '<div class="media-left media-top">';
		echo  '<a href="#">';
		echo '<img class="media-object" src="css/images/dp.jpg" alt=""></a></div>';
		echo '<div class="media-body" style="margin-top: 10px;">';
		echo '<h4 class="media-heading" style="margin-top: 10px;">'; echo $_SESSION['login_user'];  					echo '<a href="logout.php">  <button class="btn btn-default">Log Out</button></h4></a>';
		echo '<h5>'; echo $_SESSION['user_phone']; '</h5>';
		echo '<h5>'; echo $_SESSION['user_email']; '</h5>';

		echo '</div>';	
		echo '</div>';
		echo '</div></li>';
		
	}

?>
		
		</ul>

	</div>

</div>
	<p>          </p>
	<p>          </p>
	<p>          </p>
<div class="container" class="spacing">
	<div class="jumbotron2">
	<ul class="list-inline" class="spacing">
	<li style="margin-left: 0em;"><a href="#"><button class="btn btn-default"><div id="flip"><span class="glyphicon glyphicon-home"><span class="f"> Home<span></span></div> <div id="panel">Hello world!</div></button></a></li>
	<li style="margin-left: 0em;"><a href="#l"><button class="btn btn-default"><span class="glyphicon glyphicon-info-sign"><span class="f"> About</span></span></button></a></li>
	

	<li class="dropdown" style="margin-left: 0em;"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><button class="btn btn-default">Contact us</button><span class="caret"></span>
	<ul class="dropdown-menu">
	<li><a href="#conus">Phone</a></li>
	<li><a href="#conus">Email</a></li>
	<li><a href="#conus">Mobile</a></li>
	</ul>
	<li style="margin-left: 0em;"><a href="#"><button class="btn btn-default"><div id="flip">Events</div> <div id="panel">Hello world!</div></button></a></li>
	 <div class="container">
<br>

	 <?php

	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db1";
    $tbname = "issues";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM $tbname";
    $result = $conn->query($sql);
    echo '<div class="row">';

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
                echo '<div class="col-lg-8 col-lg-offset-2">';
      	echo '<p><img src="css/images/user.png" width="50px" height="50px"> <ba>' .$row["topic"]. '</ba></p>';
        echo '<p>' . $row["location"]. '</p>';
      	echo '<p><bd>' . $row["date"].  '</bd></p>';
      	echo '<p>' .$row["description"]. '</p>';
      	echo  '</div>';
        


        }
    } 
echo '</div>';

    ?>
	    </div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
