<!DOCTYPE html>
<html>
<head>
	<title>Simple To-Do List</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="wrap">
	<!--created task list-->
		<div class="task-list">
			<ul>
				<!--requires connection to connect.php-->
				<?php require("includes/connect.php"); ?>
			</ul>
		</div>
		<!--form is going to add new task-->
		<form class="add-new-task" autocomplete="off">
			<input type="text" name="new-task" placeholder="Add new item..."/>
		</form>
	</div>
</body>
</html>