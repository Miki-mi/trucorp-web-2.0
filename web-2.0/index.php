<?php 
		
		$conn = mysqli_connect("172.22.0.6", "root", "notbad","Trucorp");
		$count = 0;
		
		if(!$conn)
		{
			echo "Connection Failed" . PHP_EOL;
			exit;
		}
		
		echo "Connection Established <br><br>" . PHP_EOL;
		echo "Host Information: " . mysqli_get_host_info($conn) . "<br> <br>".PHP_EOL;
		
		$query = "SELECT * FROM users";
		$result = $conn->query($query);
		
		if($result->num_rows > 0) {
		
		echo "<table border='1'>
		<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Kantor</th>
		</tr>";
		
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row['ID'] . "</td>";
				echo "<td>" . $row['Nama'] . "</td>";
				echo "<td>" . $row['Kantor'] . "</td>";
				echo "<tr>";
				$count = $count + 1;
			}
			
		echo "</table>";
		echo "<br> Total users in database: " . $count; 
		
		} else {
			echo "0 results";
		}
	?>
