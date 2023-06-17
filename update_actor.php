<?php
require('config.php');
$actor_id = $_POST['actor_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$last_update = $_POST['last_update'];

$sql = "UPDATE 19n30012actor SET first_name='$first_name', last_name='$last_name', last_update='$last_update' WHERE actor_id='$actor_id'";
if($conn->query($sql) === TRUE)	{
	header("location: tampilan_actor.php");
} else {
	echo "Sorry, somethings wrong. Please try again later";
	echo "Back to <a href='edit_actor.php'>edit</a>";
}
?>