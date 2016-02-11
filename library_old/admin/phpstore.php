<?php


include('../connect.php');
$db=dbConnect();

   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         $path = './images/';

if ( ! is_dir($path)) {
    mkdir($path);
}
         move_uploaded_file($file_tmp,$path.$file_name);
//echo $path.$file_name;

$course = $_POST['course'];
$branch = $_POST['branch'];
$subject = $_POST['subject'];
$year = $_POST['year'];

$stmt = $db->prepare("INSERT INTO `papers`(`file_name`,`course`,`subject`,`year`,`branch`) VALUES (?,?,?,?,?)");
      // echo $sql;
      $stmt->bind_param('sssss', $file_name,$course,$subject,$year,$branch);
      $res=$stmt->execute();  
      if(!$res)
      {
         die("error".mysqli_error($db));
      }
      $_SESSION['info']="Successfully Uploaded";
     
//echo $_SESSION['info'];
     // header('Location:upload_question_papers.php');
        }
        else{
  //        echo $errors;
         print_r($errors);
      }
   }
// header('location:upload_question_papers.php')




   
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