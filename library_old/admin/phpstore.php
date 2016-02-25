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

  if(in_array($file_ext,$expensions)=== false){
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
  move_uploaded_file($file_tmp,$path.$file_name);
  //var_dump($_POST);
  //die();
  $file_name = $file_name;

  $semester = $_POST['semester'];
  $course = $_POST['course'];
  $branch = $_POST['branch'];
  $subject = $_POST['subject'];
  $year = $_POST['year'];

  $stmt = $db->prepare("INSERT INTO `papers`(`file_name`,`course`,`semester`,`year`,`branch`,`subject`) VALUES (?,?,?,?,?,?)");

  if($stmt == false){
    echo 'There is some problem in connecting to the db';
    die();
  }

  $stmt->bind_param('ssssss', $file_name,$course,$semester,$year,$branch,$subject);
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





    // if ($_REQUEST[completed] == 1) {
//         move_uploaded_file($_FILES['imagefile']['tmp_name'],"latest.img");
//         $instr = fopen("latest.img","rb");
//         $image = mysql_real_escape_string(fread($instr,filesize("latest.img")));
//         if (strlen($instr) < 1000000) {
//                 mysql_query ("insert into pdf (title, imgdata) values (\"".
//                 $_REQUEST[whatsit].
//                 "\", \"".
//                 $image.
//                 "\")");
//                 $errmsg = "Done";
//         } else {
//                 $errmsg = "Too large!";
//         }
// } else {
//         $errmsg = "Form not completed";
// }
?>