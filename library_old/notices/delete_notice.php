<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		$_SESSION['error_admin'] = "Login to proceed further";
		header('Location:../index.php');	
	}
else
{
	if(isset($_POST['delete']))
	{
	include('../connect.php');
	if(!empty($_POST['checklist'])) 
	{
		//var_dump($_POST['checklist']);
		//echo implode("\n", $_POST['checklist']);
   foreach($_POST['checklist'] as $key=>$value) 
   {//echo $key."=>.".$value;
    $sql="UPDATE `notices` SET `flag` = '0' WHERE `id` = '$value'";
    //$sql="DELETE FROM `notices` WHERE `id`='$value'";
	$res=mysqli_query($db,$sql);
	if(!$res)
	{
		die("error".mysqli_error($db));
	}
}
	mysqli_close($db);
	$_SESSION['admin_info']="This Notice has been Deleted";
	header('Location: index.php');
	//echo "$key"."=>"."$value"."<br>";
	
    
    
}

}}
?>
	