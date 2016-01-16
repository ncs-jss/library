
<?php
/*
$db=mysqli_connect("127.0.0.1","root","","library_db")or die("Error Connecting to Database") ;
*/
?>
<?php 

	function dbConnect(){
		$host = "localhost";
		$user = "root";
		$password = "";
		$database = "library_db";
		$conn = new mysqli($host, $user, $password,$database);
		if ($conn->connect_errno) {
		    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
		    die;
		}
		return $conn;
	}

	function dbDisconnect($conn){
		$conn->close();
	}

?>