<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
          overflow: hidden;
          background-color: #333;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
    </head>
    <body>
        <div class="navbar">
            <a href="index.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="ViewStudent.php">Student</a>
                    <a href="ViewParent.php">Parent</a>
                    <a href="ViewTeacher.php">Teacher</a>
                    <a href="ViewClass.php">Class</a>
                    <a href="ViewCourse.php">Course</a>
                    <a href="ViewContact.php">Contact</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="AddStudent.html">Student</a>
                    <a href="AddParent.html">Parent</a>
                    <a href="AddTeacher.html">Teacher</a>
                    <a href="AddClass.html">Class</a>
                    <a href="AddCourse.html">Course</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Delete
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="DeleteStudent.php">Student</a>
                    <a href="DeleteParent.php">Parent</a>
                    <a href="DeleteTeacher.php">Teacher</a>
                    <a href="DeleteClass.php">Class</a>
                    <a href="DeleteCourse.php">Course</a>
                    <a href="DeleteContact.php">Contact</a>
                </div>
            </div>
            <a href="Contact.html">Contact Us</a>
        </div>
<?php


$host = "localhost";
$username  = "root";
$password = "root";
$dbname = "backenddevalopment";
$link = mysqli_connect("localhost","root","", "backenddevalopment");
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>Following are the stored Classes :</h3>
		<table>
		
			<tr>
				<th width="150px">Class ID<br><hr></th>
				<th width="250px">Name<br><hr></th>
				<th width="250px">Capacity<br><hr></th>
                <th width="250px">Assigned Teacher<br><hr></th>
                <th width="150px">Year<br><hr></th>
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT classid,class_name,capacity, assignedteacher,year  FROM class");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['classid']}</th>
				<th>{$row['class_name']}</th>
				<th>{$row['capacity']}</th>
				<th>{$row['assignedteacher']}</th>
				<th>{$row['year']}</th>
		
			</tr>";
			}
			?>
            </table>

            <form action="DeleteClass.php" method='POST'>

            <label for="classid">Delete Class</label>
            <input type="text" name='Classid'>
            <input type="submit" name='submit'>

            </form>
            <?php
           
            if(isset($_POST['submit'])) {
                $delClass = $_POST['Classid'];
                $sql = "DELETE FROM Class WHERE Classid = '$delClass'";
                if(mysqli_query($link, $sql)) {
                    echo "record deleted successfully.";
                } else {
                    echo "error";
                }
            }
            ?>
        </body>
        </html>

