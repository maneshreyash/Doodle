<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "doodle";
	// Create connection 
	$conn = new mysqli($servername, $username, $password, $dbname); // Checkconnection 
	if ($conn -> connect_error)  
	{      
	    die("Connection failed: " . $conn->connect_error);
	}    

	$pollname =  $_POST['pollname'];
	$location =  $_POST['location'];
	$note =  $_POST['note'];

	echo $pollname, $location, $note;

	//$date =  "20180406";
	//$sint =  "110000";
	//$eint =  "120000";

	//echo $_POST['sInt2'];
	//echo $_POST['eInt2'];

	//insert into doodle.interval(poll_id, interval_date, interval_start_time, interval_end_time) VALUES ( 1, '$date', '$sint', '$eint')

	$insertQuery = "insert into doodle.poll(creator_id, poll_name, poll_location, poll_note) VALUES (1, '$pollname', '$location', '$note')"; 

	//$queryinsert = "INSERT INTO `interval`(`interval_id`, `poll_id`, `interval_date`, `interval_start_time`, `interval_end_time`) VALUES (, 1, $_POST['date'], "$_POST['sInt1']", "$_POST['eInt1']")";
	if($conn->query($insertQuery)){
		header('location: poll_details.php');
	}
	else{
		echo "Error inserting intervals!";
	}
?>