<?php 

  session_start();

  if(isset($_POST['user']) && isset($_POST['pass'])){

    $user = htmlentities($_POST['user']);
    $pass = htmlentities($_POST['pass']);
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

    $sql= "SELECT password FROM $tbname WHERE username = '$user'";
    $stmt = $conn->query($sql); 
    $row =$stmt->fetch_assoc();   
    $act_pass = $row['password']; 
    $conn->close();

    if($pass == $act_pass){
      echo "Correct!";
      header("location: welcome.php");
    }
  ?>
