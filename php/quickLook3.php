<?php					
	$datetime52 = date("Y/m/d H:i:s", strtotime('-1 week'));
	$sql = "SELECT face, comment, datetime FROM mood_data WHERE datetime > '" . $datetime52 . "' ORDER BY datetime DESC" ;
	$result = $link->query($sql);
					
	echo "<br>Comments from last 7 days:<br><br>";
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			if ($row["comment"]!==""){
				if ($row["face"]=="smile"){
					echo "<i style='font-size:15px;color:green;margin-left:20px;margin-right:10px' class='fas fa-smile'></i>" . $row["comment"] . "<br>";
				} else if ($row["face"]=="meh"){
					echo "<i style='font-size:15px;color:orange;margin-left:20px;margin-right:10px' class='fas fa-meh'></i>" . $row["comment"] . "<br>";
				} else if ($row["face"]=="frown"){
					echo "<i style='font-size:15px;color:red;margin-left:20px;margin-right:10px' class='fas fa-frown'></i>" . $row["comment"] . "<br>";
				};
			};
		};
	} else {
		echo "0 results";
	};
?>