<?php
session_start();
	if(!isset($_SESSION['username']))
	{
		$_SESSION['info'] = "Login to view admin page";
		header('Location:../admin-login.php');	
	}
	else
	{
		include('../connect.php');
		$db=dbConnect();
	if(isset($_POST['arrivalpost']))		
	{
	$title=$_POST['title'];
	$description=$_POST['description'];
	//$date_posted=NOW(); 
	if(empty($_POST["title"])||empty($_POST["description"]))
	{
		$_SESSION['info'] = "Please Enter The Required Data";
		if(empty($_POST["title"]))
		{
			$_SESSION['titleErr']="Title Required";
		}
		else
		{
			$_SESSION['title']=$_POST['title'];	
		}
		if(empty($_POST["description"]))
		{
			$_SESSION['descriptionErr']="Description Required";
		}
		else
		{
			$_SESSION['description']=$_POST['description'];	
		}
		header('Location:post_newarrivals.php');
	}
	else
{
	$stmt=$db->prepare("INSERT INTO `arrivals`(`title`,`details`,`date_of_arrival`) VALUES (?,?,NOW())");
	$stmt->bind_param('ss', $title,$description);
		$res=$stmt->execute(); 
	if(!$res)
	{
		die("Error ! ".mysqli_error($db));
	}
	mysqli_close($db);
	$_SESSION['info']="The new arrival has been posted successfully";
	header('Location: post_newarrivals.php');
}
}
else
{
	$_SESSION['admin_error']="Error! Please fill out the form for submitting a new arrival or contact NCS for technical support";
	header('Location: ');
}
}

?>