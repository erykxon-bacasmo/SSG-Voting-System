<?php include ('session.php');?>
<?php include ('head.php');?>
<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Voters_Account.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
 
	require_once 'dbcon.php';
 
	$output = "";
 
	$output .="
		<table>
			<thead>
				<tr>
					<th>LRN/User ID</th>
					<th>Password</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Grade Level</th>
				</tr>
			<tbody>
	";
 
	$query = $conn->query("SELECT * FROM `voters`") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
 
	$output .= "
				<tr>
					<td>".$fetch['id_number']."</td>
					<td>".$fetch['password']."</td>
					<td>".$fetch['firstname']."</td>
					<td>".$fetch['lastname']."</td>
					<td>".$fetch['year_level']."</td>
				</tr>
	";
	}
 
	$output .="
			</tbody>
 
		</table>
	";
 
	echo $output;
 
 
?>
