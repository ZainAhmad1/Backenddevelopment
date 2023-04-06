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
    $credit_hour =$_POST['credit_hour'];
    $course_code = $_POST['course_code'];
    $duration = $_POST['duration'];
    $classid = $_POST['classid'];
    $studentid = $_POST['studentid'];

    $sql = "INSERT INTO course (name,credit_hour,course_code,duration,classid,studentid) VALUES ('$name','$credit_hour','$course_code','$duration','$classid','$studentid')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>