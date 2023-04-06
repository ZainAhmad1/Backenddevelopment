<html>
<body> 

<?php


$link = mysqli_connect("localhost","root","", "backenddevalopment");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>Following are the stored Courses -::-</h3>
	
		<table>
		
			<tr>
				<th width="150px">Course ID<br><hr></th>
                <th width="250px">Course Name<br><hr></th>
				<th width="250px">Credit_hour<br><hr></th>
				<th width="250px">Course_Code<br><hr></th>
                <th width="250px">Duration<br><hr></th>
				<th width="250px">classid<br><hr></th>
				<th width="250px">studentid<br><hr></th>
				
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT courseid,name,credit_hour,course_code,duration,classid,studentid FROM course");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['courseid']}</th>
                <th>{$row['name']}</th>
				<th>{$row['credit_hour']}</th>
				<th>{$row['course_code']}</th>
				<th>{$row['duration']}</th>
				<th>{$row['classid']}</th>
				<th>{$row['studentid']}</th>
				
			
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>