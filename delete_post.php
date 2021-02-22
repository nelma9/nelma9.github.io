<?php
  include ('session.php'); 
include('includes/database.php');

$get_id =$_GET['id'];
	
	// sending query
	mysqli_query($connect,"DELETE FROM post WHERE post_id = '$get_id'
		and user_id='$id'");  	
	header("Location: home.php");

?>
