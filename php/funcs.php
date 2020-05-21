<?php 
function GetPosts() {

	$query = 'SELECT * FROM posts';
	$result = pg_query($query) or die('Query failed: ' . pg_last_error());

	return $result;
}



?>