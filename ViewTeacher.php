<html>
<body> 

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
?>

<h3>Following are the stored teachers</h3>
	
		<table>
		
			<tr>
				<th width="150px">ID<br><hr></th>
				<th width="250px">Name<br><hr></th>
				<th width="250px">Address<br><hr></th>
                <th width="250px">Phone<br><hr></th>
				<th width="250px">Annual_Salary<br><hr></th>
				<th width="250px">Background_Check<br><hr></th>
				<th width="250px">Classid<br><hr></th>

			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT teacherid,name,address,phoneno,annual_salary,background_check,classid FROM teacher");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['teacherid']}</th>
				<th>{$row['name']}</th>
				<th>{$row['address']}</th>
				<th>{$row['phoneno']}</th>
				<th>{$row['annual_salary']}</th>
                <th>{$row['background_check']}</th>
				<th>{$row['classid']}</th>
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

