<?php 

  if(isset($_POST['submit'] )){

    $username1 = ($_POST['username1']);
    $password1 = ($_POST['password1']);
    $phone = ($_POST['phone']);
    $email = ($_POST['email']);
    }
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db1";
    $tbname = "users";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO $tbname (username, password, phone, email) VALUES ('$username1', '$password1', '$phone', '$email')";

    
    if ($conn->query($sql) === TRUE) {
      echo '<script language="javascript">';
      echo 'alert("created Successfully. Click ok")';
      echo '</script>';   
      header("Refresh: 1; url=signin.php"); 
    }
    else{
      echo '<script language="javascript">';
      echo 'alert("OOps Error! Try again")';
      echo '</script>';   
      header("Refresh: 1; url=signin.php");
    }
    $conn->close();

?>
