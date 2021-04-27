<?php


class Model{
	private $servername = 'localhost';
	private $username = 'root';
	private $password = '';
	private $dbname = 'todoapp';
	private $conn;

	function __construct(){
		$this->conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
		if ($this->conn->connect_error) {
			echo 'connection failed';
		}else{
			return $this->conn;
		}
	}

        /*fucnt to insert records */
        public function insertRecord($post){
        	$id= $post['id'];
        	$task = $post['task'];
        	$sql = "INSERT INTO users(id,task)VALUES('$id','$task')";
        	$result= $this->conn->query($sql);
        	if ($result){
        		header('location:index.php?msg=ins');
        	}else{
        		echo "Error".$sql."<br>".$this->conn->error;
        	}

        }

}
?>