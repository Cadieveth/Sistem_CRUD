<?php
	$actor_id = $_POST['actor_id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$last_update = $_POST['last_update'];

include "config.php";
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

$sql = "INSERT INTO 19n30012actor (actor_id, first_name, last_name, last_update)
VALUES ('$actor_id', '$first_name', '$last_name', '$last_update')";

	if ($conn->query($sql) === TRUE) {
	header("location: tampilan_actor.php");
	} else {
	echo 
		"Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>