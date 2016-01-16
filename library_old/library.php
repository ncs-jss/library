<?php
$db="";
//validation remains please complete that part
function connect()
{
	$db=mysqli_connect("127.0.0.1","root","","library_db")or die("Error Connecting to Database") ;
	return $db;
}

function login()
{
	session_start();
	$name="admin_library";
	$pass="library1234";
	$errors=0;
	$val_errors=0;
	$nameError="";
	$passError="";
	$username="";
	$password="";
	
	if(isset($_POST['submit'])) 
	{
		// Checking null values in message.
	 	if (empty($_POST["username"]))	
		{
			$nameError = "Name is required";
			$errors = 1;
		}
		if(empty($_POST["password"]))
		{
			$passError = "Password is required";
			$errors = 1;
		}
		
		if($errors==0)
		{
			//validation check goes here #
			//set val_errors=1 in case of existence of any validation error
			//set $nameError="Validation Error in Name"
			//set $passError="Validation Error in Password"
			$username=$_POST("username");
			$password=$_POST("password");
		}

		if($val_errors==0)
		{
			if((strcmp($username,$name) & strcmp($password, $pass))==0)
			{
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header('location: http://');
			}
			else
			{
				if (strcmp($username,$name)!=0)
				{
					$nameError="Wrong UserName, Please Typein Correct UserName";
				}

				if (strcmp($username,$name)!=0)
				{
					$passError="Wrong Password, Please Typein Correct Passwords ";					
				}
			}
		}
	}
}

function logout()
{
	if((session_is_registered('username') )| (session_is_registered('password') ))
	{

		$_SESSION['username']=NULL;
		$_SESSION['password']=NULL;
		session_unset();
		session_destroy();
		header('location: http://');
	}
}

function post_notices()
{
$db=mysqli_connect("127.0.0.1","root","","library_db")or die("Error Connecting to Database") ;
session_start();
if(!isset($_SESSION['username']))
	{
		$_SESSION['error_admin'] = "Login to view admin page";
		echo $_SESSION['error_admin'];
		//header('Location:../index.php');	
	}
if(isset($_POST['arrivalpost']))					//Check for Key to ensure secure access to page only
{
	$value=$_POST['message'];//message contains the body of notices or posts
	$subject=$_POST['subject'];// contains short discription of notices or message
	$time=date("d/m/y"); //current date and time
	$sql="INSERT INTO `notices`(`title`,`description`,`time`) VALUES('$subject','$value','$time')";//id is primary key that is auto incremented
	$res=mysqli_query($db,$sql);
	if(!$res)
	{
		die("Error ! ".mysqli_error($db));
	}
	mysqli_close($db);
	$_SESSION['admin_info']="The new notice has been posted successfully";
	header('Location:index.php ');
}
else
{
	$_SESSION['admin_error']="Error! Please fill out the form for submitting a new notice or contact NCS for technical support";
	header('Location: ');
}



/*
//if (isset($_POST('submit')) & isset($_POST('methods')) & $_POST('methods')=='notices' ) //methods is a rdaio button which defines wether we are posting notices or general posts
if (isset($_POST('noticespost'))) //check for the key
{
	//code for putting values in database

	$value=""; //message contains the body of notices or posts
	$subject="";// contains short discription of notices or message
	connect(); //connecting to database function
	$time=""; //current date and time
	$error_post=0;
	$errmessage="";
	$errsubject="";

	if (empty($_POST['message'])) 
	{
		$errmessage="Please Enter the message"; //display the error message correspondingly
		$error_post=1;
	}
	if (empty($_POST['subject'])) 
	{
		$errsubject="Please Enter the subject";
		$error_post=1;
	}
	if ($error_post==0) 
	{
		$value=$_POST['message']; //message contains the body of notices or posts
		$subject=$_POST['subject'];// contains short discription of notices or message
		connect(); //connecting to database function
		$time=date("d/m/y"); //current date and time
		$sql="INSERT INTO `notices`(`id`,`subject`,`value`,`time`) VALUES('$subject','$value','$time')";//id is primary key that is auto incremented
		$res=mysqli_query($db,$sql);
		if(!$res)
		{
			die("Error ! ".mysqli_error($db));
		}
		mysqli_close($db);
		$_SESSION['admin_info']="The new arrival has been posted successfully";
		header('Location: ');
	}
}
else
{
	$_SESSION['admin_error']="Error! Please fill out the form for submitting a new notices or contact NCS for technical support";
	header('Location: ');
}
	
if (isset($_POST('submit')) & isset($_POST('methods')) & $_POST('methods')=='posts') 
{
	//code for putting values in database
	$value=""; //message contains the body of notices or posts
	$subject="";// contains short discription of notices or message
	connect(); //connecting to database function
	$time=""; //current date and time
	$error_post=0;
	$errmessage="";
	$errsubject="";
	if (empty($_POST['message'])) 
	{
		$errmessage="Please Enter the message"; //display the error message correspondingly
		$error_post=1;
	}
	if (empty($_POST['subject'])) 
	{
		$errsubject="Please Enter the subject";
		$error_post=1;
	}
	if ($error_post==0) 
	{
		$value=$_POST['message']; //message contains the body of notices or posts
		$subject=$_POST['subject'];// contains short discription of notices or message
		connect(); //connecting to database function
		$time=date("d/m/y"); //current date and time
		$sql="INSERT INTO `posts` VALUES('$subject','$value','$time')";//id is primary key that is auto incremented
		if(mysqli_query($db,$sql))
		{
			$_SESSION['info'] ="Posts Submitted Successfully. \n Thank You !";
		}
		else
		{
			$_SESSION['error'] ="Failed to submit Posts. \n Please Try Again !";
		}
	}	
}
else
{
	$_SESSION['error'] ="Please Select the 'TYPE' of Information : Notices or Posts ";
}
*/
}

function post_arrivals()
{
	session_start();
	if(!isset($_SESSION['username']))
	{
		$_SESSION['error_admin'] = "Login to view admin page";
		header('Location:');	
	}
$db=connect();

//Back-end processing for new arrivals posted by admin
if(isset($_POST['arrivalpost']))					//Check for Key to ensure secure access to page only
{
	$title=$_POST['title'];
	$date_posted=date('Y/m/d'); 

	$sql="INSERT INTO `arrivals`(`id`,`title`,`date_of_arrival`)
		VALUES ('$title','$date_posted')";
	$res=mysqli_query($db,$sql);
	if(!$res)
	{
		die("Error ! ".mysqli_error($db));
	}
	mysqli_close($db);
	$_SESSION['admin_info']="The new arrival has been posted successfully";
	header('Location: ');
}
else
{
	$_SESSION['admin_error']="Error! Please fill out the form for submitting a new arrival or contact NCS for technical support";
	header('Location: ');
}
}

function post_news()
{
	session_start();

if(!isset($_SESSION['username']))
	{
		$_SESSION['error_admin'] = "Login to view admin page";
		header('Location:');	
	}
$db=mysqli_connect("127.0.0.1","root","","library_db")or die("Error Connecting to Database") ;
//Back-end processing for news posted by admin
if(isset($_POST['newspost']))					//Check for Key to ensure secure access to page only
{
	$news=$_POST['title'];
	$details=$_POST['description'];
	$date_posted=date('Y/m/d'); 

	$sql="INSERT INTO `news`(`id`,`news`,`details`,`date_posted`)
		VALUES ('$news','$details','$date_posted')";
	$res=mysqli_query($db,$sql);
	if(!$res)
	{
		die("Error ! ".mysqli_error($db));
	}
	mysqli_close($db);
	$_SESSION['admin_info']="The news has been posted successfully";
	header('Location:');
}
else
{
	$_SESSION['admin_error']="Error! Please fill out the form for submitting a news or contact NCS for technical support";
	header('Location: ');
}
}

function query() //validation remains
{
	//session_start();
	$db=mysqli_connect("127.0.0.1","root","","library_db")or die("Error Connecting to Database") ;
//BACK-END processing for a submitted user-query
	if(isset($_POST['query']))					//Check for Key to ensure secure access to page only
	{
		$name=$_POST['fullname'];
		$email=$_POST['email'];
		$college=$_POST['college'];
		$rollno=$_POST['rollno'];
		$course=$_POST['course'];
		$branch=$_POST['branch'];
		$message=$_POST['message'];
		$sql="INSERT INTO `query` (	`id`,`name`,`email`,`college`,`rollno`,`
			course`,`branch`,`message`)
		VALUES ('$name','$email','$college','$rollno','$course','$branch','$message')";
		$res=mysqli_query($db,$sql);
		if(!$res)
			{
				die("error".mysqli_error($db));
			}
		mysqli_close($db);
		$_SESSION['info']="Your query has been recorded and will soon be addressed through e-mail... Thank You";
	header('Location: ');
	}
	else
	{
		$_SESSION['error']="Please fill out the form for submitting a query";
		header('Location: ');
	}
}

function suggest() // validation remains
{
	//session_start();
	$db=mysqli_connect("127.0.0.1","root","","library_db")or die("Error Connecting to Database") ;
	//Back-end processing for user suggestion
	if(isset($_POST['suggest']))					//Check for Key to ensure secure access to page only
	{
		$bookname=$_POST['title'];
		$author=$_POST['author'];
		$publisher=$_POST['publisher'];
		$edition=$_POST['edition'];
		$volume=$_POST['volume'];
		$review=$_POST['review'];
		$sql="INSERT INTO `suggest`(`bookname`,`author`,`publisher`,`edition`,`volume`,`review`) VALUES ('$bookname','$author','$publisher','$edition','$volume','$review')";
			echo $sql;
		$res=mysqli_query($db,$sql);
		if(!$res)
		{
			die("error".mysqli_error($db));
		}
		mysqli_close($db);
		$_SESSION['info']="Thank You for your suggestion, it has been recorded successfully";
	header('Location:../index.html ');
	}
	else
	{
		$_SESSION['error']="Please fill out the form for submitting a suggestion";
	header('Location:suggest.php');
	}
}

function display_news()
{
	$db=mysqli_connect("127.0.0.1","root","","library_db")or die("Error Connecting to Database") ;
	$sql="SELECT `id`,`news`,`details`,`date_posted` FROM `news` WHERE `flag`=1 ORDER BY `date_posted` DESC";
	$check = mysqli_query($db,$sql);

	$rownewsfetched=array();
	while ($rows = mysqli_fetch_array($check))  
	{  
	  $rownewsfetched[] = $rows;
	}
	mysqli_close($db);
	return $rownewsfetched;
}

function display_arrivals()
{
	$db=mysqli_connect("127.0.0.1","root","","library_db")or die("Error Connecting to Database") ;
	$sql="SELECT `id`,`title`,`details`,`date_of_arrival` FROM `arrivals` WHERE `flag`=1 ORDER BY `date_of_arrival` DESC";
	$check = mysqli_query($db,$sql);

	$rowarrivalsfetched=array();
	while ($rows = mysqli_fetch_array($check))  
	{  
	  $rowarrivalsfetched[] = $rows;
	}
	mysqli_close($db);
	return $rowarrivalsfetched;
}

function display_notices() //only subject is diplayed at front // view notices remains // on clicking hyper link would display the full message from $rowsfetched same as infocenter
{
	$db=mysqli_connect("127.0.0.1","root","","library_db")or die("Error Connecting to Database") ;
	$sql="SELECT `id`,`title`,`description`,`date_added` FROM `notices` WHERE `flag`=1 ORDER BY `date_added` DESC";
	$check = mysqli_query($db,$sql);

	$rownoticesfetched=array();
	while ($rows = mysqli_fetch_array($check))  
	{  
	  $rownoticesfetched[] = $rows;
	}
	mysqli_close($db);
	return $rownoticesfetched;
}

function display_booksuggest()
{
	session_start();
	if(!isset($_SESSION['username']))
	{
		$_SESSION['error_admin'] = "Login to view admin page";
		header('Location:../index.php');	
	}
else{
	$db=mysqli_connect("127.0.0.1","root","","library_db")or die("Error Connecting to Database") ;
	$sql="SELECT `id`,`bookname`,`author`,`publisher`,`edition`,`volume`,`review`,`date_posted` FROM `suggest` WHERE `flag`=1 ORDER BY `date_posted` DESC";
	$result=mysqli_query($db,$sql);
	$rowbooksfetched=array();

	while($rows = mysqli_fetch_array($result))  
	{  
	  $rowbooksfetched[] = $rows;
	  
	}
	mysqli_close($db);
	return $rowbooksfetched;
}
}
function display_queries()
{
	session_start();
	if(!isset($_SESSION['username']))
	{
		$_SESSION['error_admin'] = "Login to view admin page";
		header('Location:../index.php');	
	}
	else{
	$db=mysqli_connect("127.0.0.1","root","","library_db")or die("Error Connecting to Database") ;
	$sql="SELECT `id`,`name`,`email`,`college`,`rollno`,`course`,`branch`,`message`,`date_posted` FROM `query` WHERE `flag`=1 ORDER BY `date_posted` DESC";
	$result=mysqli_query($db,$sql);
	$rowqueryfetched=array();

	while($rows = mysqli_fetch_array($result))  
	{  
	  $rowqueryfetched[] = $rows;
	}
	mysqli_close($db);
	return $rowqueryfetched;
}
}
//function delete_* is called when delete hyperlink is clicked
//only admin has right to delete any post

function delete_notices($id)//pass the corresponding id to be deleted here
{
	session_start();
	if(!isset($_SESSION['username']))
	{
		$_SESSION['error_admin'] = "Login to proceed further";
		header('Location:../index.php');	
	}
else{
	$db=mysqli_connect("127.0.0.1","root","","library_db")or die("Error Connecting to Database") ;

	$sql="DELETE FROM `notices` WHERE `id`='$id'";
	$res=mysqli_query($db,$sql);
		if(!$res)
		{
			die("error".mysqli_error($db));
		}
		mysqli_close($db);
		$_SESSION['admin_info']="This Notice has been Deleted";
		header('Location: ');
}
}
function delete_news($id)
{
	session_start();
	if(!isset($_SESSION['username']))
	{
		$_SESSION['error_admin'] = "Login to view proceed further";
		header('Location:');	
	}
else{	$db=mysqli_connect("127.0.0.1","root","","library_db")or die("Error Connecting to Database") ;
	$sql="DELETE FROM `news` WHERE `id`='$id'";
	$res=mysqli_query($db,$sql);
		if(!$res)
		{
			die("error".mysqli_error($db));
		}
	mysqli_close($db);
	$_SESSION['admin_info']="This News has been Deleted";
	header('Location: ');
}
}
function delete_arrivals($id)
{
	session_start();
	if(!isset($_SESSION['username']))
	{
		$_SESSION['error_admin'] = "Login to view proceed further";
		header('Location:');	
	}
	else{
	$db=mysqli_connect("127.0.0.1","root","","library_db")or die("Error Connecting to Database") ;
	$sql="DELETE FROM `arrivals` WHERE `id`='$id'";
	$res=mysqli_query($db,$sql);
		if(!$res)
		{
			die("error".mysqli_error($db));
		}
	mysqli_close($db);
	$_SESSION['admin_info']="This Arrival has been Deleted";
	header('Location: ');
}
}
function delete_query($id)
{
	session_start();
	if(!isset($_SESSION['username']))
	{
		$_SESSION['error_admin'] = "Login to view proceed further";
		header('Location:../../index.php');	
	}
	else{
	$db=mysqli_connect("127.0.0.1","root","","library_db")or die("Error Connecting to Database") ;
	$sql="DELETE FROM `query` WHERE `id`='$id'";
	$res=mysqli_query($db,$sql);
		if(!$res)
		{
			die("error".mysqli_error($db));
		}
	mysqli_close($db);
	$_SESSION['admin_info']="This Query has been Deleted";
	header('Location: ');
}
}

function delete_booksugest($id)
{
	session_start();
	if(!isset($_SESSION['username']))
	{
		$_SESSION['error_admin'] = "Login to view proceed further";
		header('Location:');	
	}
	else{
	$db=mysqli_connect("127.0.0.1","root","","library_db")or die("Error Connecting to Database") ;
	$sql="DELETE FROM `suggest` WHERE `id`='$id'";
	$res=mysqli_query($db,$sql);
		if(!$res)
		{
			die("error".mysqli_error($db));
		}
	mysqli_close($db);
	$_SESSION['admin_info']="This Suggestion has been Deleted";
	header('Location: ');
}
}
?>
