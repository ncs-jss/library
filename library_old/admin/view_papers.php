<?php
require_once('../library.php');

function get_papers_count($course, $sem = 'true', $br = 'true'){
	echo isset($conn);
	$conn = connect();

	if($br != 'true'){
		$query_string = "SELECT * FROM `papers` WHERE `course` = ? AND `semester` = ?  AND `branch` = ? ";
		$query = $conn->prepare($query_string);
		$query->bind_param('sss', $course, $sem, $br);
	}
	else if($sem != 'true'){
		$query_string = "SELECT * FROM `papers` WHERE `course` = ? AND `semester` = ? ";
		$query = $conn->prepare($query_string);
		$query->bind_param('ss', $course, $sem);
	}
	else{
		$query_string = "SELECT * FROM papers WHERE course = ? ";
		$query = $conn->prepare($query_string);
		$query->bind_param('s', $course);
	}
	echo $query_string;
	echo $course;
	echo $sem;;
	echo $br;
	echo '<br>';

	$res = $query->get_result();
	var_dump($res);
	die;

	close_conn($conn);

	return $res;
}

function get_papers(){
	$conn = connect();
	$query_string = "SELECT * FROM `papers`";

	$query = mysqli_query($conn, $query_string);
	return $query;
}
