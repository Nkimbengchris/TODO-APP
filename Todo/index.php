<?php 
/*include model.php */
    include 'model.php';
    $obj = new Model();

/*insert record */
    if (isset($_POST['submit'])){
	   $obj->insertRecord($_POST);
        }

/*delete record*/
    if (isset($_GET['deleteid'])){
	   $delid = $_GET['deleteid'];
	   $obj->deleteRecord($delid);
        }

    session_start();
    
    if (isset($_SESSION['user']))
     {
       	echo 'done' . $_SESSION['user'].'<br/>';
       	echo '<a href="logout.php?logout">logout</a>';
       }   

?>

<!DOCTYPE html>
<html>
<head>
		<a href="login.php">LOG OUT</a>
	
	<title>TODO APP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><br>
	<div class="heading">
		<h2>TODO APPLICATION</h2>
	</div>
	<div class="container">
		
	<form method="POST" action="index.php">
		<div class="form-group">
			<?php
		if (isset($_GET['msg'])AND $_GET['msg']=='ins') {
			echo '<p>Task successfully Added!!</p>';
		}
		?>
			<input type="text" name="task" class="task_input">
		<button type="submit" class="add_btn" name="submit">ADD TASK</button>
		</div>
		
	</form><br>
    <h2 class="heading">Display records</h2>
    <table class="table table-borderd">
        <tr class="bg-primary">
	        <th>No</th>
	        <th>Task</th>
	        <th>Date</th>
	        <th>Action</th>
        </tr>
	    <?php 
	        $data = $obj->displayRecord();
	        $no=1;
		?>
		<tbody>
			<?php if (count($data)>0) { 
				foreach ($data as $value) { ?>
					<tr>
					    <td><?php echo $no++; ?></td>
					    <td><?php echo $value['task']  ?></td>
						<td><?php echo $value['date']  ?></td>
						<td>
							<a href="index.php?deleteid=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
						</td>
		    		</tr>
				<?php
				} 
				?>

			<?php } else { ?>

				<tr><td colspan="4">Empty</td></tr>
			<?php
				} 
			?>
				
		</tbody>
    </div>

</body>
</html>