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

    $year = $_POST['year'];
    $class_name =$_POST['class_name'];
    $capacity = $_POST['capacity'];
    $assigned_teacher = $_POST['assigned_teacher'];
    $teacherid = $_POST['teacherid'];

    $sql = "INSERT INTO class (year,class_name,capacity,assignedteacher,teacherid) VALUES ('$year','$class_name','$capacity','$assigned_teacher','$teacherid')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>