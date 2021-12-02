<!DOCTYPE html>
<html>
<header><title>Contact</title>
<body><center>

    <form action="home.php" method="post">
        Full Name:<br>
        <input type="text" name="name">
        <br>
        Email Address:<br>
        <input type="text" name="email">
        <br><br>
        <input type="submit" name="contact" value="Submit">

        <ul class="actions special">
            <li>
                <a href="Index.html" class="button">HOME</a>
            </li>

        </ul>

    </form>
</body></center>
</html>





<?php
session_start();
		include("functions.php");
		include("connection.php");
		
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
		$email = $_POST['email'];
		
		if(!empty($name) && !empty($email))
		{
			//Saves in Database
			$query = "insert into clients (name,email) values('$name','$email')";
			mysqli_query($con, $query);
			
			header("Location: Index.html");
			die;
			
		}
		
		
	}
	


?>

