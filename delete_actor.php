<?php
include "config.php";
$id = $_GET[idcontent];
$sql = "UPDATE 19n30012actor SET status_delete='1' WHERE actor_id='$id'";
if($conn->query($sql) === TRUE)	{
	header("location: tampilan_actor.php");
} else {
	echo
		"Failed Delete Data. Back to <a href='tampilan_actor.php'>Actor Data</a>";
}
?>