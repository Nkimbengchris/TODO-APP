<?php
   
   $errors = "";

   $db = mysqli_connect('localhost', 'root', '','todo');

   if (isset($_POST['submit'])) {
   	   $task = $_POST['task'];
   	   if (empty($task)) {
   	   	$errors = "Add Task";
   	   }
   	   else{
   	   mysqli_query($db, "INSERT INTO tasks (task) VALUES ('$task')");
   	   header('location: TODO.php');
    }

    if (isset($_GET['del_task'])) {
    	$id = $_GET['del_task'];
    	mysqli_query($db, "DELETE FROM tasks WHERE id=$id");
    	header('location: TODO.php');
    }

    $tasks =mysqli_query($db, "SELECT * FROM tasks");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>TODO APP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="heading">
		<h2>TODO APPLICATION</h2>
	</div>
	<form method="POST" action="TODO.php">
		<?php if (isset($errors)) { ?>
			<p><?php echo $errors; ?></p>
			

		}
		<input type="text" name="task" class="task_input">
		<button type="submit" class="add_btn" name="submit">ADD TASK</button>
	</form>

	<table>
		<thead>
			<tr>
				<th>N</th>
				<th>Task</th>
				<th>Action</th>
                <th>Date/Time</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
			<tr>
				<td><?php echo $i; ?></td>
			    <td class="task"><?php echo $row['task']; ?></td>
			    <td class="delete">
				<a href="TODO.php?del_task="<?php echo $row['id']; ?> >x</a>
			   </td>
			</tr>
		<?php $i++; } ?>
		</tbody>
	</table>

</body>

</html>