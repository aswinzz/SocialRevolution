<?php 

  if(isset($_POST['submit'] )){

    $title = ($_POST['title']);
    $author = ($_POST['author']);
    $location = ($_POST['location']);
    $description = ($_POST['description']);
    $phone = ($_POST['phone']);

  }
    
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
    date_default_timezone_set('Asia/Calcutta');
    $date = date('Y/m/d H:i:s');

    $sql = "INSERT INTO issues ( topic, author, location, description, phone, date) VALUES ('$title', '$author', '$location', '$description', '$phone', '$date')";

    
    if ($conn->query($sql) === TRUE) {
      echo '<script language="javascript">';
      echo 'alert("created Successfully. Click ok")';
      echo '</script>';   
      header("Refresh: 1; url=dashboard.php"); 
    }
    else{
      echo '<script language="javascript">';
      echo 'alert("OOps Error! Try again")';
      echo '</script>';   
      header("Refresh: 1; url=dashboard.php");
    }
    $conn->close();

?>