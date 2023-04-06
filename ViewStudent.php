<html>
<body> 

<?php


$link = mysqli_connect("localhost","root","", "backenddevalopment");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>Following are the stored students -::-</h3>
	
		<table>
		
			<tr>
				<th width="150px">Student ID<br><hr></th>
				<th width="250px">Name<br><hr></th>
				<th width="250px">Address<br><hr></th>
                <th width="250px">Medical_Info<br><hr></th>
				<th width="250px">age<br><hr></th>
				<th width="250px">Parentid<br><hr></th>
				<th width="250px">Classid<br><hr></th>
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT studentid,name,address,medical_info,age,parentid,classid  FROM student");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['studentid']}</th>
				<th>{$row['name']}</th>
				<th>{$row['address']}</th>
				<th>{$row['medical_info']}</th>
				<th>{$row['age']}</th>
				<th>{$row['parentid']}</th>
				<th>{$row['classid']}</th>
			
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


