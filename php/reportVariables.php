<?php

	echo "<!-- report variables -->";	

	function countRows($link, $sql){
		$result = $link->query($sql);
		$count = 0;
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				$count++;
			};
		};
		return $count;
	}
	
	function getPercentages($smile, $meh, $frown){
		$countAll = $smile + $meh + $frown;
		if ($countAll>0){
			return array(
				"smile" => ($smile/$countAll)*100,
				"meh" => ($meh/$countAll)*100,
				"frown" => ($frown/$countAll)*100,
			);
		};
	}
			
	//set datetimes
	$datetimeNow = date("Y/m/d H:i:s",time());
	$datetime24 = date("Y/m/d H:i:s", strtotime('-24 hours'));
	$datetime52 = date("Y/m/d H:i:s", strtotime('-1 week'));
	$datetime12 = date("Y/m/d H:i:s", strtotime('-1 month'));

	// find number of smiles (all time)
	$sql = "SELECT face FROM mood_data WHERE face='smile'";
	$smileCount = countRows($link, $sql);
	//find number of mehs (all time)
	$sql = "SELECT face FROM mood_data WHERE face='meh'";
	$mehCount = countRows($link, $sql);
	//find number of frowns (all time)
	$sql = "SELECT face FROM mood_data WHERE face='frown'";
	$frownCount = countRows($link, $sql);
	//find number of smiles in 24hrs
	$sql = "SELECT face, datetime FROM mood_data WHERE face='smile' AND datetime > '" . $datetime24 . "'" ;
	$smileCount24 = countRows($link, $sql);
	//find number of mehs in 24hrs
	$sql = "SELECT face, datetime FROM mood_data WHERE face='meh' AND datetime > '" . $datetime24 . "'" ;
	$mehCount24 = countRows($link, $sql);
	//find number of frowns in 24hrs
	$sql = "SELECT face, datetime FROM mood_data WHERE face='frown' AND datetime > '" . $datetime24 . "'" ;
	$frownCount24 = countRows($link, $sql);
	//find number of smiles in 1wk
	$sql = "SELECT face, datetime FROM mood_data WHERE face='smile' AND datetime > '" . $datetime52 . "'" ;
	$smileCount52 = countRows($link, $sql);
	//find number of mehs in 1wk
	$sql = "SELECT face, datetime FROM mood_data WHERE face='meh' AND datetime > '" . $datetime52 . "'" ;
	$mehCount52 = countRows($link, $sql);
	//find number of frowns in 1wk
	$sql = "SELECT face, datetime FROM mood_data WHERE face='frown' AND datetime > '" . $datetime52 . "'" ;
	$frownCount52 = countRows($link, $sql);
	//find number of smiles in 1month
	$sql = "SELECT face, datetime FROM mood_data WHERE face='smile' AND datetime > '" . $datetime12 . "'" ;
	$smileCount12 = countRows($link, $sql);
	//find number of mehs in 1month
	$sql = "SELECT face, datetime FROM mood_data WHERE face='meh' AND datetime > '" . $datetime12 . "'" ;
	$mehCount12 = countRows($link, $sql);
	//find number of frowns in 1month
	$sql = "SELECT face, datetime FROM mood_data WHERE face='frown' AND datetime > '" . $datetime12 . "'" ;
	$frownCount12 = countRows($link, $sql);
	
	//find number of faces in past 30 days
	$count = 0;
	$datetimeLineA = date("Y/m/d 00:00:00");
	$datetimeLineB = date("Y/m/d 23:59:59");
	while ($count<30){
		$count++;
		$sql = "SELECT face, datetime FROM mood_data WHERE face='smile' AND datetime > '" . $datetimeLineA . "' AND datetime < '" . $datetimeLineB . "'";
		${'smileLine' . $count} = countRows($link, $sql);
		$sql = "SELECT face, datetime FROM mood_data WHERE face='meh' AND datetime > '" . $datetimeLineA . "' AND datetime < '" . $datetimeLineB . "'";
		${'mehLine' . $count} = countRows($link, $sql);
		$sql = "SELECT face, datetime FROM mood_data WHERE face='frown' AND datetime > '" . $datetimeLineA . "' AND datetime < '" . $datetimeLineB . "'";
		${'frownLine' . $count} = countRows($link, $sql);
		$datetimeLineA = date("Y/m/d H:i:s", strtotime("-1 day", strtotime($datetimeLineA)));
		$datetimeLineB = date("Y/m/d H:i:s", strtotime("-1 day", strtotime($datetimeLineB)));
	}

	//get dates and months for past 30 days
	$day1 = date("d/m",time());
	$day2 = date("d/m", strtotime("-1 day", strtotime($datetimeNow)));
	$day3 = date("d/m", strtotime("-2 day", strtotime($datetimeNow)));
	$day4 = date("d/m", strtotime("-3 day", strtotime($datetimeNow)));
	$day5 = date("d/m", strtotime("-4 day", strtotime($datetimeNow)));
	$day6 = date("d/m", strtotime("-5 day", strtotime($datetimeNow)));
	$day7 = date("d/m", strtotime("-6 day", strtotime($datetimeNow)));
	$day8 = date("d/m", strtotime("-7 day", strtotime($datetimeNow)));
	$day9 = date("d/m", strtotime("-8 day", strtotime($datetimeNow)));
	$day10 = date("d/m", strtotime("-9 day", strtotime($datetimeNow)));
	$day11 = date("d/m", strtotime("-10 day", strtotime($datetimeNow)));
	$day12 = date("d/m", strtotime("-11 day", strtotime($datetimeNow)));
	$day13 = date("d/m", strtotime("-12 day", strtotime($datetimeNow)));
	$day14 = date("d/m", strtotime("-13 day", strtotime($datetimeNow)));
	$day15 = date("d/m", strtotime("-14 day", strtotime($datetimeNow)));
	$day16 = date("d/m", strtotime("-15 day", strtotime($datetimeNow)));
	$day17 = date("d/m", strtotime("-16 day", strtotime($datetimeNow)));
	$day18 = date("d/m", strtotime("-17 day", strtotime($datetimeNow)));
	$day19 = date("d/m", strtotime("-18 day", strtotime($datetimeNow)));
	$day20 = date("d/m", strtotime("-19 day", strtotime($datetimeNow)));
	$day21 = date("d/m", strtotime("-20 day", strtotime($datetimeNow)));
	$day22 = date("d/m", strtotime("-21 day", strtotime($datetimeNow)));
	$day23 = date("d/m", strtotime("-22 day", strtotime($datetimeNow)));
	$day24 = date("d/m", strtotime("-23 day", strtotime($datetimeNow)));
	$day25 = date("d/m", strtotime("-24 day", strtotime($datetimeNow)));
	$day26 = date("d/m", strtotime("-25 day", strtotime($datetimeNow)));
	$day27 = date("d/m", strtotime("-26 day", strtotime($datetimeNow)));
	$day28 = date("d/m", strtotime("-27 day", strtotime($datetimeNow)));
	$day29 = date("d/m", strtotime("-28 day", strtotime($datetimeNow)));
	$day30 = date("d/m", strtotime("-29 day", strtotime($datetimeNow)));

	$month1 = date("F",time());
	$month2 = date("F", strtotime("-1 month", strtotime($datetimeNow)));
	$month3 = date("F", strtotime("-2 month", strtotime($datetimeNow)));
	$month4 = date("F", strtotime("-3 month", strtotime($datetimeNow)));
	$month5 = date("F", strtotime("-4 month", strtotime($datetimeNow)));
	$month6 = date("F", strtotime("-5 month", strtotime($datetimeNow)));
	$month7 = date("F", strtotime("-6 month", strtotime($datetimeNow)));
	$month8 = date("F", strtotime("-7 month", strtotime($datetimeNow)));
	$month9 = date("F", strtotime("-8 month", strtotime($datetimeNow)));
	$month10 = date("F", strtotime("-9 month", strtotime($datetimeNow)));
	$month11 = date("F", strtotime("-10 month", strtotime($datetimeNow)));
	$month12 = date("F", strtotime("-11 month", strtotime($datetimeNow)));

	//find number of faces in 12x prev months
	$count = 0;
	$datetimeRolling = $datetimeNow;
	while ($count<12){
		$count++;
		$datetimeMonthStart = date("Y/m/01 00:00:00", strtotime($datetimeRolling));
		$datetimeMonthEnd = date("Y/m/t 23:59:59", strtotime($datetimeRolling));
		$sql = "SELECT face, datetime FROM mood_data WHERE face='smile' AND datetime > '" . $datetimeMonthStart . "' AND datetime < '" . $datetimeMonthEnd . "'";
		${'smileMonth' . $count} = countRows($link, $sql);
		$sql = "SELECT face, datetime FROM mood_data WHERE face='meh' AND datetime > '" . $datetimeMonthStart . "' AND datetime < '" . $datetimeMonthEnd . "'";
		${'mehMonth' . $count} = countRows($link, $sql);
		$sql = "SELECT face, datetime FROM mood_data WHERE face='frown' AND datetime > '" . $datetimeMonthStart . "' AND datetime < '" . $datetimeMonthEnd . "'";
		${'frownMonth' . $count} = countRows($link, $sql);
		$datetimeRolling = date("Y/m/d H:i:s", strtotime("-1 month", strtotime($datetimeRolling)));
	}

	//get percentages
	$percentages = getPercentages($smileCount, $mehCount, $frownCount);
	$smileCountPC = $percentages["smile"];
	$mehCountPC = $percentages["meh"];
	$frownCountPC = $percentages["frown"];
	
	$percentages = getPercentages($smileCount24, $mehCount24, $frownCount24);
	$smileCount24PC = $percentages["smile"];
	$mehCount24PC = $percentages["meh"];
	$frownCount24PC = $percentages["frown"];

	$percentages = getPercentages($smileCount52, $mehCount52, $frownCount52);
	$smileCount52PC = $percentages["smile"];
	$mehCount52PC = $percentages["meh"];
	$frownCount52PC = $percentages["frown"];

	$percentages = getPercentages($smileCount12, $mehCount12, $frownCount12);
	$smileCount12PC = $percentages["smile"];
	$mehCount12PC = $percentages["meh"];
	$frownCount12PC = $percentages["frown"];

	//get percentages for 7 day view
	$smileCount72 = $smileCount24 + $smileLine2;
	$mehCount72 = $mehCount24 + $mehLine2;
	$frownCount72 = $frownCount24 + $frownLine2;
	$percentages = getPercentages($smileCount72, $mehCount72, $frownCount72);
	$smileCount72PC = $percentages["smile"];
	$mehCount72PC = $percentages["meh"];
	$frownCount72PC = $percentages["frown"];

	$smileCount7d = $smileCount24 + $smileLine2 + $smileLine3 + $smileLine4 + $smileLine5 + $smileLine6 + $smileLine7;
	$mehCount7d = $mehCount24 + $mehLine2 + $mehLine3 + $mehLine4 + $mehLine5 + $mehLine6 + $mehLine7;
	$frownCount7d = $frownCount24 + $frownLine2 + $frownLine3 + $frownLine4 + $frownLine5 + $frownLine6 + $frownLine7;
	$percentages = getPercentages($smileCount7d, $mehCount7d, $frownCount7d);
	$smileCount7dPC = $percentages["smile"];
	$mehCount7dPC = $percentages["meh"];
	$frownCount7dPC = $percentages["frown"];
?>