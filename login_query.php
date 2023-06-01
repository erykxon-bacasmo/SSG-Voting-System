<?php
	require_once 'dbcon.php';
	
	if(isset($_POST['login'])){
		$idno=$_POST['idno'];
		$password=$_POST['password'];
	
		$result = $conn->query("SELECT * FROM voters WHERE id_number = '$idno' && password = '$password' && `account` = 'active' && `status` = 'Unvoted' && `year_level` = 'Grade 12'") or die(mysqli_errno());
		$row = $result->fetch_array();
		$voted = $conn->query("SELECT * FROM `voters` WHERE id_number = '$idno' && password = '$password' && `status` = 'Voted'")->num_rows;
		$numberOfRows = $result->num_rows;				
		
		
		if ($numberOfRows > 0){
			session_start();
			$_SESSION['voters_id'] = $row['voters_id'];
			header('location:grade_12/vote.php');
		} 

		if($voted == 1){
			echo " <br><center><font color= 'red' size='3'>You're already voted</center></font>";
		}else{
			echo " <br><center><font color= 'red' size='3'>LOGIN ERROR!</center></font>";
		}
	
	}

	if(isset($_POST['login'])){
		$idno=$_POST['idno'];
		$password=$_POST['password'];
	
		$result2 = $conn->query("SELECT * FROM voters WHERE id_number = '$idno' && password = '$password' && `account` = 'active' && `status` = 'Unvoted' && `year_level` = 'Grade 11'") or die(mysqli_errno());
		$row = $result2->fetch_array();
		$voted2 = $conn->query("SELECT * FROM `voters` WHERE id_number = '$idno' && password = '$password' && `status` = 'Voted'")->num_rows;
		$numberOfRows = $result2->num_rows;				
		
		
		if ($numberOfRows > 0){
			session_start();
			$_SESSION['voters_id'] = $row['voters_id'];
			header('location:grade_11/vote.php');
		} 

		if($voted2 == 1){
			echo " <br><center><font color= 'red' size='3'>You're already voted</center></font>";
		}else{
			echo " <br><center><font color= 'red' size='3'>LOGIN ERROR!</center></font>";
		}
	
	}
	if(isset($_POST['login'])){
		$idno=$_POST['idno'];
		$password=$_POST['password'];
	
		$result3 = $conn->query("SELECT * FROM voters WHERE id_number = '$idno' && password = '$password' && `account` = 'active' && `status` = 'Unvoted' && `year_level` = 'Grade 10'") or die(mysqli_errno());
		$row = $result3->fetch_array();
		$voted3 = $conn->query("SELECT * FROM `voters` WHERE id_number = '$idno' && password = '$password' && `status` = 'Voted'")->num_rows;
		$numberOfRows = $result3->num_rows;				
		
		
		if ($numberOfRows > 0){
			session_start();
			$_SESSION['voters_id'] = $row['voters_id'];
			header('location:grade_10/vote.php');
		} 

		if($voted3 == 1){
			echo " <br><center><font color= 'red' size='3'>You're already voted</center></font>";
		}else{
			echo " <br><center><font color= 'red' size='3'>LOGIN ERROR!</center></font>";
		}
	
	}
	if(isset($_POST['login'])){
		$idno=$_POST['idno'];
		$password=$_POST['password'];
	
		$result4 = $conn->query("SELECT * FROM voters WHERE id_number = '$idno' && password = '$password' && `account` = 'active' && `status` = 'Unvoted' && `year_level` = 'Grade 9'") or die(mysqli_errno());
		$row = $result4->fetch_array();
		$voted4 = $conn->query("SELECT * FROM `voters` WHERE id_number = '$idno' && password = '$password' && `status` = 'Voted'")->num_rows;
		$numberOfRows = $result4->num_rows;				
		
		
		if ($numberOfRows > 0){
			session_start();
			$_SESSION['voters_id'] = $row['voters_id'];
			header('location:grade_9/vote.php');
		} 

		if($voted4 == 1){
			echo " <br><center><font color= 'red' size='3'>You're already voted</center></font>";
		}else{
			echo " <br><center><font color= 'red' size='3'>LOGIN ERROR!</center></font>";
		}
	
	}
	if(isset($_POST['login'])){
		$idno=$_POST['idno'];
		$password=$_POST['password'];
	
		$result5 = $conn->query("SELECT * FROM voters WHERE id_number = '$idno' && password = '$password' && `account` = 'active' && `status` = 'Unvoted' && `year_level` = 'Grade 8'") or die(mysqli_errno());
		$row = $result5->fetch_array();
		$voted5 = $conn->query("SELECT * FROM `voters` WHERE id_number = '$idno' && password = '$password' && `status` = 'Voted'")->num_rows;
		$numberOfRows = $result5->num_rows;				
		
		
		if ($numberOfRows > 0){
			session_start();
			$_SESSION['voters_id'] = $row['voters_id'];
			header('location:grade_8/vote.php');
		} 

		if($voted5 == 1){
			echo " <br><center><font color= 'red' size='3'>You're already voted</center></font>";
		}else{
			echo " <br><center><font color= 'red' size='3'>LOGIN ERROR!</center></font>";
		}
	
	}
	if(isset($_POST['login'])){
		$idno=$_POST['idno'];
		$password=$_POST['password'];
	
		$result6 = $conn->query("SELECT * FROM voters WHERE id_number = '$idno' && password = '$password' && `account` = 'active' && `status` = 'Unvoted' && `year_level` = 'Grade 7'") or die(mysqli_errno());
		$row = $result6->fetch_array();
		$voted6 = $conn->query("SELECT * FROM `voters` WHERE id_number = '$idno' && password = '$password' && `status` = 'Voted'")->num_rows;
		$numberOfRows = $result6->num_rows;				
		
		
		if ($numberOfRows > 0){
			session_start();
			$_SESSION['voters_id'] = $row['voters_id'];
			header('location:grade_7/vote.php');
		} 

		if($voted6 == 1){
			echo " <br><center><font color= 'red' size='3'>You're already voted</center></font>";
		}else{
			echo " <br><center><font color= 'red' size='3'>LOGIN ERROR!</center></font>";
		}
	
	}

	
?>
<!-- dito kokopyahin ko lang yung syntax sa pan tawag ng voter user tas pag dating sa dulo lalagyan ko ng `year_level` = 'Anong year level siya' -->