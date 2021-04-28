<?php
//Database connection

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
	}//close constructor

        /*function to insert records */
        public function insertRecord($post){
        	$task = $post['task'];
        	$sql = "INSERT INTO users(task)VALUES('$task')";
        	$result= $this->conn->query($sql);
        	if ($result){
        		header('location:index.php?msg=ins');
        	}else{
        		echo "Error".$sql."<br>".$this->conn->error;
        	}

        }//close insert function
        public function displayRecord(){
        	$sql = "SELECT * FROM users";
        	$result = $this->conn->query($sql);
        	if($result->num_rows>0){
        		while($row = $result->fetch_assoc()){
        			$data[] = $row;
        		}//Wwhile close
        		return $data;
        	}
                return [];
        }//displayrecord close

        public function deleteRecord($delid){
        	$sql = "DELETE FROM users WHERE id='$delid'";
        	$result = $this->conn->query($sql);
        	if($result){
        		header('location:index.php?msg=del');
        	}else{
        		echo "Error ".$sql."<br>".$this->conn->error;
        	}

        }//Delete record

}//close class

?>