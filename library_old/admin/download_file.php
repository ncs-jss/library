<?php
require_once('../library.php');

if (isset($_GET['file'])) {
    $here = $_SERVER['PHP_SELF'];
    $dir = substr($here, 0, strrpos($here , '/', -1)).'/';
    download_file($_GET['file'], $dir);
} else{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
function download_file($file_id, $dir){
    $db = connect();
    $stmt = $db->prepare('SELECT * FROM `papers` WHERE `id` = ?');
    $stmt->bind_param('s', $_GET['file']);
    $stmt->execute();
    $res = $stmt->get_result();
    if($res->num_rows == 1){
        $result_row = $res->fetch_array();
        $filename = $result_row['file_name'];
        $file = $_SERVER['DOCUMENT_ROOT'].$dir.'images/'.$filename;
        $len = @filesize($file);
        if($len == false){
            $err = "<script type='text/javascript'>
                        alert('The file doesnt exist');
                    </script>";
            echo $err;
            die();
        }
        $file_name_ext = explode('.', $filename);
        $file_ext=strtolower(end($file_name_ext));
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: public");
        header("Content-Description: File Transfer");

        header("Content-Type: " . ctype($file_ext));

        $header="Content-Disposition: attachment; filename=".$filename.";";
        header($header);
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: ".$len);
        @readfile($file);
        exit;
    }
}

function ctype($extension){
    switch( $extension )
	{
		case "pdf": return "application/pdf"; break;
		case "exe": return "application/octet-stream"; break;
		case "zip": return "application/zip"; break;
		case "rar": return "application/zip"; break;
        case "docx":
		case "doc": return "application/msword"; break;
		case "xls": return "application/vnd.ms-excel"; break;
		case "ppt": return "application/vnd.ms-powerpoint"; break;
		case "gif": return "image/gif"; break;
		case "png": return "image/png"; break;
		case "jpeg":
		case "jpg": return "image/jpg"; break;
		case "mp3": return "audio/mpeg"; break;
		case "wav": return "audio/x-wav"; break;
		case "mpeg":
		case "mpg":
		case "mpe": return "video/mpeg"; break;
		case "mov": return "video/quicktime"; break;
		case "avi": return "video/x-msvideo"; break;
		case "htm":
		case "html": return "text/html"; break;
		case "php":
		case "inc": die("<b>You don't have permision to download ". $file_extension ." files!</b>"); break;

		default: return "application/force-download";
	}
}
