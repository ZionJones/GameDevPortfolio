<?php

	$servername='localhost';
    $email='';
    $name='root';
	$dbname = "gamedevportfolio";
    $con=mysqli_connect($servername,$name,$email,"$dbname");
      if(!$con){
          die('Could not Connect MySql Server:' .mysql_error());
        }






?>