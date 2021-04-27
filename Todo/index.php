<?php 
/*include model.php */
include 'model.php';

$obj = new Model();

/*insert record */
if (isset($_POST['submit'])){
	$obj->insertRecord($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TODO APP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><br>
	<div class="heading">
		<h2>TODO APPLICATION</h2>
	</div>
	<div class="container">
		<?php
		if (isset($_GET['msg'])AND $_GET['msg']=='ins') {
			echo '<div class="alert alert-primary" role="alert">
               success!!!
               </div>';
		}
		?>
	<form method="POST" action="index.php">
		<div class="form-group">
			<label></label>
			<input type="text" name="task" class="task_input">
		<button type="submit" class="add_btn" name="submit">ADD TASK</button>
		</div>
	</form><br>
	<h2 class="heading">Display records</h2>
	<table class="table table-borderd">
	<tr class="bg-primary text-center">
		<th>No</th>
		<th>Task</th>
		<th>Date</th>
		<th>Action</th>
	</tr>

</div>
</body>
</html>