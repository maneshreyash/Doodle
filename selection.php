<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     </head>
    <body>
    	<form action="selection.php" method="post">
	    	<div id="menu">
	    		<?php
		    		include("Connection.php");
		    		$poll_id=0;
		    		$url=$_SERVER['REQUEST_URI'];
		    		$id=pathinfo($url,PATHINFO_BASENAME);
		    		if(is_numeric($id))
					{
						$poll_id=$id;
					}
		            $sql="select distinct(interval_date) as dates from doodle.interval where poll_id= ".$poll_id;
		            $result = mysqli_query($conn, $sql);
		           	if (mysqli_num_rows($result) > 0){

	            ?>
	            <table>
	            	<tr>
	            		<th>Dates </th>
	            	</tr>
	            	<?php
	            		for ( $i = 0 ; $i < mysqli_num_rows($result) ; $i++ )
                		{
                    		$row = mysqli_fetch_assoc($result);
                    		echo "<tr>";
                    		echo "<td>".$row['dates'];
                    		echo "</td>";
                    		$sql1="select interval_id,interval_start_time, interval_end_time from doodle.interval where interval_date like '".$row['dates']."'";
                    		//echo $sql1;
		           			$result1 = mysqli_query($conn, $sql1);
		           			for ( $j = 0 ; $j < mysqli_num_rows($result1) ; $j++ )
                			{
                    			$row1 = mysqli_fetch_assoc($result1);
                    			echo "<td>";                    			
                    			echo "<input type='checkbox' name='dates[]' value='".$row1['interval_id']."'>";
                    			echo $row1['interval_start_time']."-".$row1['interval_end_time'];
                    			echo "</td>";
                    		}
                    		echo "</tr>";
                    	}
	            	?>
	            </table>
	            <?php
	        		}
	            ?>
	        </div>
	        <input type="submit" name="submit" Value="Submit"/>
	        <br>
	        <?php
	        	$user_id=1;
				if(isset($_POST['submit'])){
					if(!empty($_POST['dates'])) {
						foreach($_POST['dates'] as $selected) {
							$sql1="select * from vote where user_id=".$user_id." and interval_id=".$selected;
							$result1 = mysqli_query($conn, $sql1);
							if(!(mysqli_num_rows($result1)>0)){
								$sql="insert into vote(user_id,interval_id) values(".$user_id.",".$selected.")";
								if ($conn->query($sql)) {
	   								echo "New record created successfully";
								} 
							}
						}
					}
				}
?>
		</form>
    </body>
</html>