<html>
<body> 

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

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">ID<br><hr></th>
				<th width="250px">Name<br><hr></th>
				<th width="250px">Address<br><hr></th>
				<th width="250px"><br>Email<hr></th>
				<th width="250px"><br>Phone<hr></th>
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT parentid, name,address,email,phoneno FROM parent");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['parentid']}</th>
				<th>{$row['name']}</th>
				<th>{$row['address']}</th>
                <th>{$row['email']}</th>
				<th>{$row['phoneno']}</th>
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

