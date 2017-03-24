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

    if($pass == $act_pass){
      echo "Correct!";
      $_SESSION['login_user'] = $user;
      
      $email= "SELECT email FROM $tbname WHERE username = '$user'";
      $stmt = $conn->query($email); 
      $row =$stmt->fetch_assoc();   
      $email = $row['email'];
      $_SESSION['user_email'] = $email;
      
      $phone = "SELECT phone FROM $tbname WHERE username = '$user'";
      $stmt = $conn->query($phone); 
      $row =$stmt->fetch_assoc();   
      $phone = $row['phone'];
      $_SESSION['user_phone'] = $phone;
      $_SESSION['type'] = active;
          $conn->close();
      header("location: dashboard.php");
    }
    else{
      echo '<script language="javascript">';
      echo 'alert("Wrong Username or Password. Click Ok to redirect back to login page")';
      echo '</script>';   
      header("Refresh: 1; url=index.html");    }
  ?>
