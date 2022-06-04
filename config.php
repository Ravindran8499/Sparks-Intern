<?php

	$link = mysqli_connect("localhost","root","");
	if($link == false){
		die("ERROR!!: Could not connect to the database. ".mysqli_connect_error());
	}
	$sql = "CREATE DATABASE IF NOT EXISTS SPARKSINERN";
	if(mysqli_query($link,$sql)){
	}else{
		echo "Error in Creating the database".mysqli_error($link);
	}
	mysqli_close($link);
?>

