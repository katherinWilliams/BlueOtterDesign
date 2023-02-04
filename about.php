<?php
  $con = mysqli_connect('localhost','root');

  mysqli_select_db($con, 'designs');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $description = $_POST['description'];

  $query = "INSERT INTO users (name, email, number, description) VALUES ('$name', '$email', '$number', '$description')";

  mysqli_query($con, $query);

  if($con) {
      header('location:thankyou.php');
  }
  else {
      echo "Connection Failed";
  }  

?>