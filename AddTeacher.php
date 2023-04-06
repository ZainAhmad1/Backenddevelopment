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
    $phoneno = $_POST['phoneno'];
    $annual_salary = $_POST['annual_salary'];
    $background_check = $_POST['background_check'];
    $classid = $_POST['classid'];
    $sql = "INSERT INTO teacher (name,address,phoneno,annual_salary,background_check,classid) VALUES ('$name','$address','$phoneno','$annual_salary','$background_check','$classid')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>