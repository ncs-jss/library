<?php
require_once('../library.php');

function get_papers(){
	$conn = connect();
	$query_string = "SELECT * FROM `papers`";

	$query = mysqli_query($conn, $query_string);
	return $query;
}

function get_course($course_id){
	switch ($course_id) {
		case '1': return 'B. Tech';
		case '2': return 'MBA';
		case '3': return 'MCA';
		case '4': return 'M. Tech';
		default: return '-';
	}
}
