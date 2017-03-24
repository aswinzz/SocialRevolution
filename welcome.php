<?php
	session_start();

	if(!isset($_SESSION['login_user'])){  
	  echo '<script language="javascript">';
      echo 'alert("What? Dude login first :P")';
      echo '</script>';   
      header("Refresh: 1; url=signin.php"); 
      exit();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>


Welcome 
<?php

echo $_SESSION['login_user']; ?>
<br>
<a href="logout.php">logout</a>
<br>
<a href="layout.html">Make new Issue</a>

</body>
</html>