<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "doodle";
	// Create connection 
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn -> connect_error)
	{      
	    die("Connection failed: " . $conn->connect_error);
	}    

	$array = array_values($_POST);

	if(sizeof($array) < 3)
		echo "Please select date and intervals before continuing";
	else{
		$i = 1;
		$j = 2;
		$date = $array[0];

		while($j < sizeof($array)){

			$sint = $array[$i];
			$eint = $array[$j];

			if($sint < $eint){
				$insertQuery = "insert into doodle.interval(poll_id, interval_date, interval_start_time, interval_end_time) VALUES ( 24, '$date', '$sint', '$eint')";
				//$insertQuery = "insert into doodle.interval(poll_id, interval_date, interval_start_time, interval_end_time) VALUES ( 1, 'abc', 'def', 'ghi')";
				if(!$conn->query($insertQuery)){
					echo $sint;
					echo "<a href = 'poll_details.php'>Duplicate entries!</a>";}//header('location: 
				else
					header('location: poll_details.php');				
			}else{
				//echo "Please select the intervals again!";
	            //print_r($array);
				echo "<a href = 'poll_details.php'> Intervals invalid. Please select the intervals again! </a>";//header('location: poll_details.php');
			}
			$i = $i + 2;
			$j = $j + 2;
		}
	}
?>
