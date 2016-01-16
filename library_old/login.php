<?php
session_start();
	$name="admin_library";
	$pass="library1234";
	$errors=0;
	$val_errors=0;
	$nameError="";
	$passError="";
	$username="";
	$password="";
	$_SESSION['info']="";
	
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
				
	if(isset($_POST['submit'])) 
	{
		$username=$_POST["username"];
		$password=$_POST["password"];
		$_SESSION['username'] = $username;
				
		
if((strcmp($username,$name)==0) && (strcmp($password, $pass)==0))
			{
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header("location: admin/index.php");
			}
			else if(empty($_POST["username"])||empty($_POST["password"]))
			{
				$_SESSION['info']="Can't Leave Either Of The Fields Empty";	
				header("location: admin-login.php");
			}
			else  
			{
			$_SESSION['info']="Incorrect Username Or Password";
			header("location: admin-login.php");
			}
				
	}
?>