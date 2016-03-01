<?php 
	
if(isset($_POST['query']))					//Check for Key to ensure secure access to page only
{

		$name=$_REQUEST['name'];
		$url=$_REQUEST['url'];

		
	
	{

$stmt = $db->prepare("INSERT INTO `query` (	`name`,`url`) VALUES (?,?)");
		$stmt->bind_param('ss', $name,$url);
		$res=$stmt->execute();     

		if(!$res)
			{
				die("error".mysqli_error($db));
			}
		mysqli_close($db);
		$_SESSION['info']="Your query has been recorded";
	header('Location:e-resources/index.php');
	}
}
	
?>