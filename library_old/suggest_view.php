 <?php 
 session_start();
if(!isset($_SESSION['username']))
{
	$_SESSION['error_admin'] = "Login to view this	page";
	header('Location:');	
	}
	include('connect.php');
	$sql="SELECT  `id`, `bookname`,`author`,`publisher`,`edition`,`volume`,`review` FROM `suggest` ORDER BY `bookname` DESC";
	$result=mysqli_query($db,$sql);
	$rowbooksfetched=array();

	while($rows = mysqli_fetch_array($result))  
	{  
	  $rowbooksfetched[] = $rows;
	}
	$num=mysql_num_rows($rowsbooksfetched);
	mysqli_close($db);

	
	?>