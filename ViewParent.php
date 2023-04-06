<html>
<body> 

<?php


$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student90-35303133fd54", "ua92-studentAc", "student90-35303133fd54");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">Parent ID<br><hr></th>
				<th width="250px">Parent Name<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT pid, pname  FROM parent");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['pid']}</th>
				<th>{$row['pname']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

