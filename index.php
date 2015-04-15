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
			<!--adds input box-->
			<input type="text" name="new-task" placeholder="Add new item..."/>
		</form>
	</div>
</body>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
	//calling the add task function
	add_task();

	function add_task(){
		$('add-new-task').submit(function(){
			var new_task = $('.add-new-task input[name=new-task]').val();

			if(new_task != ''){
				$.post('includes/add-task.php', {task: new_task}, function(data){
					$('add-new-task input[name=new-task]').val();
						$(data).appendTo('task-list ul').hide().fadeIn();
				});
			}
			return false;
		});
	}
</script>
</html>