


<!DOCTYPE html>
<html>

<head>

    
<link href="css/homepage.css" type="text/css" rel="stylesheet"/>
    
    
<title>
Doodle
</title>

</head>

<body>

<header>
<h1> Doodle </h1>   
</header>    

<div>

<?php

echo $_COOKIE["id"];

?>
</div>

    
    
    
    
    
    
<form action="SelectedPollDetail.php" method="post">
    <input type="hidden" name="poll_id" id="poll_id" value=""/>
            
            <script>
	           function myFun(element) {
					alert(element);
    				document.getElementById("poll_id").setAttribute("value",element);
				}
			</script>
	    	
            <div id="menu">
	    		<?php
	    			$creator_id=1;
		    		include("Connection.php");
		            $sql="select * from poll where creator_id=".$creator_id." and poll_closed=0";
		            $result = mysqli_query($conn, $sql);
		           	if (mysqli_num_rows($result) > 0){
	            ?>
	            <table>
	            <?php
		            	for ( $i = 0 ; $i < mysqli_num_rows($result) ; $i++ ){
                    		$row = mysqli_fetch_assoc($result);
                    		echo "<tr>";
                    		echo $row['poll_name'];
                    		echo $row['poll_id'];
                    		echo "<input type='submit' name='submit' id='".$row['poll_id']."' value='Go' onclick='myFun(this.id)'/>";
                    		//echo "<input type='hidden' name='poll_id' value='".$row['poll_id']."'/>";
                    		echo "<br>";
                    		echo "<br>";
	                    }
                ?>
                
	            </table>
	            
                <?php
	        		}
	        	?>
	        </div>
</form>    
    
    
    
    
    
    
    
    
    
    



<footer>
CS 6314.001 Final Project
</footer>
    

</body>
</html>

