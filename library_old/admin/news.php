<?php

	session_start();

if(!isset($_SESSION['username']))
	{
		$_SESSION['error_admin'] = "Login to view admin page";
		header('Location:../admin-login.php');	
	}
	else{
include('../connect.php');//Back-end processing for news posted by admin
$db=dbConnect();
if(isset($_POST['newspost']))					//Check for Key to ensure secure access to page only
{
	$news=$_POST['title'];
	$details=$_POST['description'];
	//$date_posted=date('Y/m/d'); 
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
		header('Location:post_news.php');
	}
else{
	$stmt=$db->prepare("INSERT INTO `news`(`news`,`details`,`date_posted`) VALUES (?,?,NOW())");
	$stmt->bind_param('ss', $news,$details);
	$res=$stmt->execute(); 
	if(!$res)
	{
		die("Error ! ".mysqli_error($db));
	}
	mysqli_close($db);
	$_SESSION['info']="The news has been posted successfully";
	header('Location:post_news.php');
}
}
else
{
	$_SESSION['admin_error']="Error! Please fill out the form for submitting a news or contact NCS for technical support";
	header('Location: post_news.php');
}
}
?>