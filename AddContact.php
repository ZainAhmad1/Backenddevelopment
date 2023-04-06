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
    $email =$_POST['email'];
    $message = $_POST['message'];
    $parentid = $_POST['parentid'];
    $teacherid = $_POST['teacherid'];
   

    $sql = "INSERT INTO contact (name,email,message,parentid,teacherid) VALUES ('$name','$email','$message','$parentid','$teacherid')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>