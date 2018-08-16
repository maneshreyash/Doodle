<?php 
session_start();


if(isset($_SESSION["emailId"]) && isset($_SESSION["name"]))
{
	    $_SESSION["count"] = $_SESSION["count"]+1;
		echo "<br> Welcome ".$_SESSION["name"];
        echo "<br> Username: ".$_SESSION["emailId"];
        echo "<br> Count of visits of the user: ".$_SESSION["count"]; 
		
		
		echo "<form action='welcome.php' method='post'>";
        echo "<input type='submit' value='Reload'>";
        echo "<input type='checkbox' name='logout' id='logout'>Logout";
		echo "</form>";
}
else
{
    header("Location: login.html");
}

if(isset($_POST["logout"]))
{
     session_destroy();
    header("Location: login.html");
}

?>


