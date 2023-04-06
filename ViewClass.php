<html>
<body> 

<?php


$link = mysqli_connect("localhost","root","", "backenddevalopment");
// Check connection
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
				<th width="150px">Teacherid<br><hr></th>
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT classid,class_name,capacity, assignedteacher,year,teacherid	  FROM class");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['classid']}</th>
				<th>{$row['class_name']}</th>
				<th>{$row['capacity']}</th>
				<th>{$row['assignedteacher']}</th>
				<th>{$row['year']}</th>
				<th>{$row['teacherid']}</th>
			
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>