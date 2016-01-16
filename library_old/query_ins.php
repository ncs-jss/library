<?php 
	session_start();
	include('connect.php');
	$db=dbConnect();
	$_SESSION['fullnameErr']=$_SESSION['emailErr']=$_SESSION['rollnoErr']=$_SESSION['messageErr']=$_SESSION['info']="";

//BACK-END processing for a submitted user-query
if(isset($_POST['query']))					//Check for Key to ensure secure access to page only
{

		$name=$_REQUEST['fullname'];
		$email=$_REQUEST['email'];
		$college=$_REQUEST['college'];
		$rollno=$_REQUEST['rollno'];
		$course=$_REQUEST['course'];
		$branch=$_REQUEST['branch'];
		$message=$_REQUEST['message'];
		if (empty($_POST["fullname"])||empty($_POST["email"])||empty($_POST["rollno"])||empty($_POST["message"])||(strlen($_POST["rollno"])!=10)) 
		{	$_SESSION['info']="Please Input Correct Data";
			if(empty($_POST["fullname"]))
			{
				$_SESSION['fullnameErr']= "Name Required";
			}
			else if(!preg_match("/^[A-Za-z -]{3,20}$/",$_POST['fullname']))
			{
				$_SESSION['fullnameErr']= "Incorrect Name Format";
			}
			else
			{
			$_SESSION['fullname']=$_REQUEST['fullname'];
			}
			if(empty($_POST["email"]))
			{
				$_SESSION['emailErr']= "Email Required";
			}
			else
			{
			$_SESSION['email']=$_REQUEST['email'];
			}
			if(empty($_POST["message"]))
			{
				$_SESSION['messageErr']= "Message Required";
			}
			else
			{
			$_SESSION['message']=$_REQUEST['message'];
			}
		
			if(empty($_POST["rollno"]))
			{
				$_SESSION['rollnoErr']= "Roll Number Required";
			
			}
			else
			{
			$_SESSION['rollno']=$_REQUEST['rollno'];
			}
			if((strlen($_POST["rollno"])>10) || ((strlen($_POST["rollno"])<10) && (strlen($_POST["rollno"])>0))||preg_match("/^[0-9 -]{7,20}$/",$_POST["rollno"]))
			{
				$_SESSION['rollnoErr']= "Incorrect Roll Number";
			}
			else
			{
			$_SESSION['rollno']=$_REQUEST['rollno'];
			}
			header('Location:query.php');			
		}	
	else
	{
	$_SESSION['titleErr']=$_SESSION['authorErr']=$_SESSION['publisherErr']=$_SESSION['editionErr']=$_SESSION['volumeErr']=$_SESSION['reviewErr']=$_SESSION['info']="";

$stmt = $db->prepare("INSERT INTO `query` (	`name`,`email`,`college`,`rollno`,`course`,`branch`,`message`,`date_posted`) VALUES (?,?,?,?,?,?,?,NOW())");
		$stmt->bind_param('sssssss', $name,$email,$college,$rollno,$course,$branch,$message);
		$res=$stmt->execute();     

		if(!$res)
			{
				die("error".mysqli_error($db));
			}
		mysqli_close($db);
		$_SESSION['info']="Your query has been recorded";
	header('Location:query.php');
	}
}
	
?>