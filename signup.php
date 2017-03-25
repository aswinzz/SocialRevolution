<?php 

    if(isset($_POST['username1']) && isset($_POST['password1'])){

    $user = htmlentities($_POST['username1']);
    $pass = htmlentities($_POST['password1']);
    $phone = htmlentities($_POST['phone']);
    $email = htmlentities($_POST['email']);
  }

    /*if(isset($_POST['submit'] )){

    $user= ($_POST['username1']);
    $pass = ($_POST['password1']);
    $phone = ($_POST['phone']);
    $email = ($_POST['email']);
    echo ('hello');
    }
    */
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

    $sql = "INSERT INTO $tbname (username, password, phone, email) VALUES ('$user', '$pass', '$phone', '$email')";

    
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
