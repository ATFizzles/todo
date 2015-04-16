<?php
	//adding task, date, and time variables
	//strips tags off post
	$task = strip_tags($_POST['task']);
	$date = date('Y-m-d');
	$time = date('H:i:s');

	//connecting to database
	include('connect.php');

	//storing all info in mysqli
	$mysqli = new mysqli('localhost', 'root', 'root', 'todo');
	//mysqli queries or puts all things into database
	$mysqli ->query("INSERT INTO tasks VALUES ('', '$task', '$date', '$time')");

	//queries all the tasks we need
	$query = "SELECT + FROM tasks WHERE task='$task' and date='$date' and time='$time' ";

	//if result is same as mysqli query...
	if($result = $mysqli->query($query)){
		//while row is 
		while($row=$result->fetch_assoc()){
			$task_id = $row['id'];
			$task_name = $row['task'];
		}
	}

	//closes connection
	$mysqli->close();


?>