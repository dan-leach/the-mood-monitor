<div class="col-sm-4 align='center'">
	<?php										
		$sql = "SELECT face, comment, datetime FROM mood_data ORDER BY datetime DESC";
		$result = $link->query($sql);
					
		echo "<br>'Smile' comments:<br><br>";

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				if ($row["comment"]!=="" AND $row["face"]=="smile"){
					echo "<i style='font-size:15px;color:green;margin-left:20px;margin-right:10px' class='fas fa-smile'></i>" . $row["comment"] . "<br>";
				};
			};
		} else {
			echo "0 results";
		};
	?>
</div>
<div class="col-sm-4 align='center'">
	<?php										
		$sql = "SELECT face, comment, datetime FROM mood_data ORDER BY datetime DESC";
		$result = $link->query($sql);
					
		echo "<br>'Meh' comments:<br><br>";

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				if ($row["comment"]!=="" AND $row["face"]=="meh"){
					echo "<i style='font-size:15px;color:orange;margin-left:20px;margin-right:10px' class='fas fa-meh'></i>" . $row["comment"] . "<br>";
				};
			};
		} else {
			echo "0 results";
		};
	?>
</div>
<div class="col-sm-4 align='center'">
	<?php										
		$sql = "SELECT face, comment, datetime FROM mood_data ORDER BY datetime DESC";
		$result = $link->query($sql);
					
		echo "<br>'Frown' comments:<br><br>";

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				if ($row["comment"]!=="" AND $row["face"]=="frown"){
					echo "<i style='font-size:15px;color:red;margin-left:20px;margin-right:10px' class='fas fa-frown'></i>" . $row["comment"] . "<br>";
				};
			};
		} else {
			echo "0 results";
		};
	?>
</div>