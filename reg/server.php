<?php
  require "db_connection.php";
  if($con) {
    $username = ucwords($_GET["username"]);
    $password = $_GET["password"];

    $query = "SELECT * FROM admin_credentials WHERE USERNAME = '$username'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    if($row)
      echo "Admin ".$row['USERNAME']." with username $username already exists!";
    else {
      $query = "INSERT INTO admin_credentials (USERNAME, PASSWORD) VALUES('$username', '$contact_number', '$password')";
      $result = mysqli_query($con, $query);
      if(!empty($result))
  			echo "$username added...";
  		else
  			echo "Failed to add $username!";
    }
  }
?>