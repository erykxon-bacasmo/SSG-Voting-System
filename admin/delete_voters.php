<?php
	require_once 'dbcon.php';
	$voters_id=$_GET['voters_id'];
	$conn->query("DELETE FROM voters WHERE voters_id='$voters_id'") or die(mysql_error());
	header('location:voters.php');
?>