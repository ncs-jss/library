<?php 

include('../connect.php');
$db=dbConnect();
session_start();
if(!isset($_SESSION['username']))
	{
		$_SESSION['info'] = "Login to view admin page";
		echo $_SESSION['info'];
		header('Location:../admin-login.php');	
	}
	else
	{
if(isset($_POST['arrivalpost']))				
{
	$value=$_POST['message'];//message contains the body of notices or posts
	$subject=$_POST['subject'];// contains short discription of notices or message
	
	if(empty($_POST["message"])||empty($_POST["subject"]))
	{
		$_SESSION['info'] = "Please Enter The Required Data";
		if(empty($_POST["message"]))
		{
			$_SESSION['messageErr']="Message Required";
		}
		else
		{
			$_SESSION['message']=$_POST['message'];	
		}
		if(empty($_POST["subject"]))
		{
			$_SESSION['subjectErr']="Subject Required";
		}
		else
		{
			$_SESSION['subject']=$_POST['subject'];	
		}
		header('Location:post_notices.php');
	}
	else
	{
	$stmt=$db->prepare("INSERT INTO `notices`(`title`,`description`,`date_added`) VALUES(?,?,NOW())");//id is primary key that is auto incremented
	$stmt->bind_param('ss', $subject,$value);
		$res=$stmt->execute(); 
	if(!$res)
	{
		die("Error ! ".mysqli_error($db));
	}
	mysqli_close($db);
	$_SESSION['info']="The new notice has been posted successfully";
	header('Location:post_notices.php ');
	}
}
else
{
	$_SESSION['admin_error']="Error! Please fill out the form for submitting a new notice or contact NCS for technical support";
	header('Location: post_notices.php');
}
}

?>