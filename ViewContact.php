<html>
<body> 

<?php


$link = mysqli_connect("localhost","root","", "backenddevalopment");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>Following are the stored Contacts-::-</h3>
	
		<table>
		
			<tr>
				<th width="150px">Contact ID<br><hr></th>
                <th width="250px">Name<br><hr></th>
				<th width="250px">Email<br><hr></th>
				<th width="250px">Message<br><hr></th>
				<th width="250px">parentid<br><hr></th>
				<th width="250px">teacherid<br><hr></th>
				
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT contactid,name,Email,message,parentid,teacherid FROM contact");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['contactid']}</th>
                <th>{$row['name']}</th>
				<th>{$row['Email']}</th>
				<th>{$row['message']}</th>
				<th>{$row['parentid']}</th>
				<th>{$row['teacherid']}</th>
			
			</tr>";
			}
			?>
            </table>
        </body>
        </html>