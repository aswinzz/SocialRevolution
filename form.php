<?php
	session_start();

	if(!isset($_SESSION['login_user'])){  
	  echo '<script language="javascript">';
      echo 'alert("What? Dude login first :P")';
      echo '</script>';   
      header("Refresh: 1; url=index.php"); 
      exit();
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width,initial-scale=1">
<title> Social Revolutions </title>
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




</head>

<body class="f">

<script type="text/javascript">
function validateForm() {
    var x = document.newform.author.value;
    var y = document.newform.phone.value;
    var z = document.newform.subject.value;
    var a = document.newform.location.value;
    var b = document.newform.description.value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    
    else if (z == "") {
        alert("No subject");
     return false;
    }
    else if (a == "") {
        alert("Add a location");
        return false;
    }
    else if (b == "") {
        alert("Add a Description");
      return false;
    }
   else if (isNaN(y)) {
        alert("Input not valid");
        return false;
    }
    

}
</script>

<div class="container">
<div class="container">
	<div class="header"  class="jumbotron" id="phi">
		

		<img src="css/images/logo.png" style="margin-top: 2em;">
		<ul class="list-inline" class="spacing" >
		<li><h1 class="spacing">Social Responsibiity .com</h1></li>
		<li><div class="media" style="margin-left:55em;margin-top: -80px;">
		<div class="media-left media-top">
			<a href="#">
			<img class="media-object" src="css/images/dp.jpg" alt="">
			</a>
		</div>
		<div class="media-body" style="margin-top: 10px;">
		<h4 class="media-heading" style="margin-top: 10px;"><?php echo $_SESSION['login_user']; ?> <a href="logout.php">  <button class="btn btn-default">Log Out</button></h4></a>
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
<div class="container" class="spacing" style="width: 83.5em;margin-left: 5em;">
	<div class="jumbotron2">
	<ul class="list-inline" class="spacing">
	<li style="margin-left: 0em;"><a href="index.html"><button class="btn btn-default"><div id="flip"><span class="glyphicon glyphicon-home"><span class="f"> Home<span></span></div> <div id="panel">Hello world!</div></button></a></li>
	<li style="margin-left: 0em;"><a href="dashboard.php"><button class="btn btn-default"><div id="flip">Dashboard</div> <div id="panel">Hello world!</div></button></a></li>
	

	</ul>
	
	


	</a>
	</a></li>
	</ul>
	</div>
</div>
</div>









<h1 style="text-align: center; font-size: 70px;">Create Event</h1>


<hr />
<hr />

  <form name="newform" method="POST" action="newissue.php" onsubmit="return(validateForm());">
<div class="container" id="cne">
<div class="input-group input-group-sm">
<span class="input-group-addon">Your Name</span>
<input type="text" class="form-control" placeholder="Full Name" name="author">
</div><br>

<div class="input-group input-group-sm">
<span class="input-group-addon">Mobile No.</span>
<input type="text" class="form-control" placeholder="+91xxxxxxxxxx" name="phone">
</div><br>

<div class="input-group input-group-sm">
<span class="input-group-addon">Subject</span>
<input type="text" class="form-control" placeholder="Subject" name="title">
</div><br>

<div class="input-group input-group-sm">
<span class="input-group-addon">Location</span>
<input type="text" class="form-control" placeholder="Location" name="location">
</div><br>

<div class="input-group input-group-sm">
<span class="input-group-addon">Description</span>
<textarea  class="form-control" placeholder="Description" name="description"></textarea>
</div><br>



<!--
<div class="input-group input-group-sm">
<span class="input-group-addon">Date</span>
<input type="text" class="form-control" placeholder="DD-MM-YYYY">-->
</div><br>

</div>

<div>
    <input type="submit" class="btn btn-primary btn-sm" value="Create new Issue" name="submit">  </div>
</form>

<a href="dashboard.php" style="margin-left: 0em;"><button class="btn btn-primary btn-sm" style="width:10em;">Back</button></a>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
