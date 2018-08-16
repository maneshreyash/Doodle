<!DOCTYPE html>


<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="css/homepage.css" type="text/css" rel="stylesheet"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>
    Doodle
	</title>
	
	</head>
    <body>
	
	
	<header>

	<img src="css/images/DoodleLogo.png" alt="Doodle Icon"  class="logoimage"/>

    <table >

    <tr>        
    <td>
    <a href="#contact">Contact</a>
    </td>
    </tr>
        
    </table>

	</header>    

	
	
	
    	<form action="DonePolling.php" method="post">
	    	<div id="menu">
	    		<?php
		    		include("Connection.php");
		    		$poll_id= $_POST['poll_id'];
		    		//echo $poll_id;
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
                    		// echo "in";
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
                    			echo $row1['interval_start_time']."-".$row1['interval_end_time'];
                    			$sql2="select count(user_id) as countIds from doodle.vote where interval_id=".$row1['interval_id'];
                    		//echo $sql1;
			           			$result2 = mysqli_query($conn, $sql2);
			           			if (mysqli_num_rows($result2) > 0){
			           				$row2=mysqli_fetch_assoc($result2);
			           				echo "<br>";
			           				echo $row2['countIds'];
			           			}
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
			
			
	<div id="follow"> 
<h1 id="h1follow">Follow us</h1>    

<table>    
<tr> 
<td><a href="https://www.linkedin.com" >
    <img src="css/images/linkedin.png" alt="LinkedIn Icon"  class="icon"/>
    </a>
</td>
<td>
    <a href="https://www.linkedin.com" >
    LinkedIn
    </a>    
</td>

    
<td><a href="https://www.facebook.com" >
    <img src="css/images/facebook.png" alt="Facebook Icon"  class="icon"/>
    </a>
</td>
<td>
    <a href="https://www.facebook.com" >
    Facebook
    </a>    
</td>

<td><a href="https://www.youtube.com">
    <img src="css/images/youtube.png" alt="Youtube Icon"  class="icon"/>
    </a>
</td>
<td>
    <a href="https://www.youtube.com" >
    YouTube
    </a>    
</td>    
    

</tr>
</table>    
    
</div>    
        
    

<footer>
CS 6314.001 Final Project
</footer>


</body>
</html>


		