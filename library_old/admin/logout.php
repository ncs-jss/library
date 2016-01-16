<?php

	session_start();
	if(isset($_SESSION['username'] )| isset($_SESSION['password'] ))
	{

		$_SESSION['username']=NULL;
		$_SESSION['password']=NULL;
		session_unset();
		session_destroy();
		header('location: ../index.php');
	}

?>