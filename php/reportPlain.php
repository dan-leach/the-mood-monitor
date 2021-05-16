<?php
	$sql = "SELECT id, face, comment, datetime FROM mood_data";
	$result = $link->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
		    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["face"]. "</td><td style='width:35vw'>" . $row["comment"] . "</td><td>" . $row["datetime"] . "</td></tr>";
	    }
	} else {
	    echo "0 results";
	};
?>