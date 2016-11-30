<?php 
	include("header.php"); 
	$delete=$_GET["delete"];
	$sql = "UPDATE tasks SET completed=1 WHERE id='$delete'";
	$mysqli->query($sql);
    header('location: user.php'); 
?>