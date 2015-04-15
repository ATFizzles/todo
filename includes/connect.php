<?php
	//passes(connects to) local host first, then username, then password, then database name
	$mysqli = new mysqli('localhost', 'root', 'root', 'todo');

	//if database connection doesnt work...
	if($mysqli->connect_error){
		//want it to die and have this message:
		die('Connect Error ('. $mysqli->connect_errno .')'
			. $mysqli->connect_error);
	}
	//if connection made...
	else{
		//echoes out...
		//echo "Connection made";
	}
	//commands $mysqli to close
	$mysqli->close();
?>