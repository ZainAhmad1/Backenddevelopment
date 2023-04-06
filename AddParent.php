<?php

$host = "localhost";
   $username  = "root";
   $password = "root";
   $dbname = "backenddevalopment";
$link = mysqli_connect("localhost","root","", "backenddevalopment");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];

    $sql = "INSERT INTO parent (name,address,email,phoneno) VALUES ('$name','$address','$email','$phoneno')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>