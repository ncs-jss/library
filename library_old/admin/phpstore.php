<?php


include('../connect.php');
$db=dbConnect();

if(isset($_FILES['image'])){
  $errors= array();
  $file_name = $_FILES['image']['name'];
  $file_size =$_FILES['image']['size'];
  $file_tmp =$_FILES['image']['tmp_name'];
  $file_type=$_FILES['image']['type'];

  $file_name_ext = explode('.',$_FILES['image']['name']);

  $file_ext=strtolower(end($file_name_ext));

  $expensions= array("jpeg","jpg","png","pdf","docx","doc");

  if(in_array($file_ext,$expensions) === false){
   $errors[]="extension not allowed, please choose a JPEG, PDF or PNG file.";
 }

 if($file_size > 2097152){
   $errors[]='File size must be less than 2 MB';
 }

 if(empty($errors)==true){
   $path = './images/';

   if ( ! is_dir($path)) {
    mkdir($path);
  }
  $tmp_name = str_replace([' ', '.', '-'], '_', $_POST['subject']);
  $file_name2 = $tmp_name.'_'.$_POST['semester'].
                'sem_'.$_POST['year'].'.'.$file_ext;

  move_uploaded_file($file_tmp,$path.$file_name2);
  //var_dump($_POST);
  //die();
  $file_name = $file_name;

  $semester = $_POST['semester'];
  $course = $_POST['course'];
  $branch = $_POST['branch'];
  $subject = $_POST['subject'];
  $year = $_POST['year'];

  $stmt = $db->prepare("INSERT INTO `papers`(`file_name`,`course`,`semester`,
    `year`,`branch`,`subject`) VALUES (?,?,?,?,?,?)");

  $stmt2 = $db->prepare("SELECT `id` FROM `branch_name` WHERE `branch` = ? ");

  if($stmt == false || $stmt2 == false){
    echo 'There is some problem in connecting to the db';
    die();
  }

  $stmt2->bind_param('s', $branch);

  $br = $stmt2->execute();
  $branch = $stmt2->get_result()->fetch_array()['id'];

  $stmt->bind_param('ssssss', $file_name2, $course, $semester
                    , $year, $branch, $subject);
  $res=$stmt->execute();
  if(!$res)
  {
   die("error".mysqli_error($db));
 }
 $_SESSION['info']="Successfully Uploaded";
 header('Location:upload_question_papers.php');
}
else{
 print_r($errors);
}
}

header('location:upload_question_papers.php')

?>
