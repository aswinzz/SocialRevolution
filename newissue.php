<?php 

  if(isset($_POST['submit'] )){

    $id = '12';
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

    $sql = "INSERT INTO issues (id, topic, author, location, description, phone) VALUES ('$id', '$title', '$author',   '$location', '$description', '$phone')";

    
    if ($conn->query($sql) === TRUE) {
      echo '<script language="javascript">';
      echo 'alert("created Successfully. Click ok")';
      echo '</script>';   
      header("Refresh: 1; url=welcome.php"); 
    }
    else{
      echo '<script language="javascript">';
      echo 'alert("OOps Error! Try again")';
      echo '</script>';   
      header("Refresh: 1; url=welcome.php");
    }
    $conn->close();

?>