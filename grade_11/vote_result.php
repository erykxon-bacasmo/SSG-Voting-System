<?php include ('head.php');?>
<?php include ('sess.php');?>

<body>

    <div id="row">
        <?php 
			include ('side_bar.php');
			if(ISSET($_POST['submit']))
				{
					if(!ISSET($_POST['pres_id']))
					{
						$_SESSION['pres_id'] = "";
					}
					else
					{
						$_SESSION['pres_id'] = $_POST['pres_id'];
					}
					if(!ISSET($_POST['vpinternal_id']))
					{
						$_SESSION['vpinternal_id'] = "";
					}
					else
					{
						$_SESSION['vpinternal_id'] = $_POST['vpinternal_id'];
					}
					if(!ISSET($_POST['vpexternal_id']))
					{
						$_SESSION['vpexternal_id'] = "";
					}
					else
					{
						$_SESSION['vpexternal_id'] = $_POST['vpexternal_id'];
					}
					if(!ISSET($_POST['secretary_id']))
					{
						$_SESSION['secretary_id'] = "";
					}
					else
					{
						$_SESSION['secretary_id'] = $_POST['secretary_id'];
					}
					if(!ISSET($_POST['auditor_id']))
					{
						$_SESSION['auditor_id'] = "";
					}
					else
					{
						$_SESSION['auditor_id'] = $_POST['auditor_id'];
					}
					if(!ISSET($_POST['treasurer_id']))
					{
						$_SESSION['treasurer_id'] = "";
					}
					else
					{
						$_SESSION['treasurer_id'] = $_POST['treasurer_id'];
					}
					if(!ISSET($_POST['pio_id']))
					{
						$_SESSION['pio_id'] = "";
					}
					else
					{
						$_SESSION['pio_id'] = $_POST['pio_id'];
					}
					if(!ISSET($_POST['pisopiser_id']))
					{
						$_SESSION['pisopiser_id'] = "";
					}
					else
					{
						$_SESSION['pisopiser_id'] = $_POST['pisopiser_id'];
					}
					if(!ISSET($_POST['g11rep_id']))
					{
						$_SESSION['g11rep_id'] = "";
					}
					else
					{
						$_SESSION['g11rep_id'] = $_POST['g11rep_id'];
					}
				}
		?>
    </div>
	<div class="panel-heading">
		<h3 class = "alert alert-success" style="font-weight: bolder; text-align: center; margin-top: -10px;">Preview Votes</h3>	
	</div>
			<center>
		  <div class="col-lg-8">
		  <div class = "alert alert-info">
			<label>PRESIDENT</label>
			<br />
			<?php
				if(!$_SESSION['pres_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pres_id]'")->fetch_array();
						echo $fetch['firstname']." - ".$fetch['lastname']." "."<img src = '\ssg_voting_system/admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success" >
			<label>VICE PRESIDENT FOR INTERNAL AFFAIRS</label>
			<br />
			<?php
				if(!$_SESSION['vpinternal_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[vpinternal_id]'")->fetch_array();
						echo $fetch['firstname']." - ".$fetch['lastname']." "."<img src = '\ssg_voting_system/admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-info">
			<label>VICE PRESIDENT FOR EXTERNAL AFFAIRS</label>
			<br/>
			<?php
				if(!$_SESSION['vpexternal_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[vpexternal_id]'")->fetch_array();
						echo $fetch['firstname']." - ".$fetch['lastname']." "."<img src = '\ssg_voting_system/admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-success" >
			<label>SECRETARY</label>
			<br />
			<?php
				if(!$_SESSION['secretary_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[secretary_id]'")->fetch_array();
						echo $fetch['firstname']." - ".$fetch['lastname']." "."<img src = '\ssg_voting_system/admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			
			<label>AUDITOR</label>
			<br />
			<?php
				if(!$_SESSION['auditor_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[auditor_id]'")->fetch_array();
						echo $fetch['firstname']." - ".$fetch['lastname']." "."<img src = '\ssg_voting_system/admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<label>TREASURER</label>
			<br />
			<?php
				if(!$_SESSION['treasurer_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[treasurer_id]'")->fetch_array();
						echo $fetch['firstname']." - ".$fetch['lastname']." "."<img src = '\ssg_voting_system/admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info" >
			<label>PIO</label>
			<br />
			<?php
				if(!$_SESSION['pio_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pio_id]'")->fetch_array();
						echo $fetch['firstname']." - ".$fetch['lastname']." "."<img src = '\ssg_voting_system/admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success">
			<label>PEACE OFFICER</label>
			<br />
			<?php
				if(!$_SESSION['pisopiser_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pisopiser_id]'")->fetch_array();
						echo $fetch['firstname']." - ".$fetch['lastname']." "."<img src = '\ssg_voting_system/admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-info">
			<label>GRADE 11 REPRESENTATIVE</label>
			<br />
			<?php
				if(!$_SESSION['g11rep_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[g11rep_id]'")->fetch_array();
						echo $fetch['firstname']." - ".$fetch['lastname']." "."<img src = '\ssg_voting_system/admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<br />
			<button type = "submit" data-toggle = "modal" data-target = "#result" class = "btn btn-success" >Submit Final Vote</button>
			<a href = "vote.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
			
		</div>
	</center>
	<div class="modal fade" id = "result" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">         
												
											</h4>
										</div>
										
										
                                        <div class="modal-body" >
											<p style="font-size: 18px; color: Red; text-align: center;" class = "alert alert-danger">Are you sure you want to submit your Votes? <br><br>
												Note: if you click yes, you're automatically log out.

											</p>


												<!-- <p style="font-size: 10px; color: red; " class = "alert alert-danger">Note: if you click yes, you're automatically log out.</p> -->
                                    </div>
									<br>
									<div class="modal-footer">
								<a href = "logout.php"><button type = "submit" id="logout" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
								<a href = "vote.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
									</div>
					</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>

	<!-- <script>
		// First, detect when the user logs out
		const logoutButton = document.getElementById("logout"); // replace with the actual ID of your logout button
		logoutButton.addEventListener("click", handleLogout);

		function handleLogout() {
		// Display the popup message
		const popup = document.createElement("div");
		popup.className = "popup";
		popup.textContent = "You are logging out.";
		document.body.appendChild(popup);
		
		// Remove the popup after 3 seconds
		setTimeout(function() {
			document.body.removeChild(popup);
		}, 3000);
		
		// Here you can add any other code to handle the logout, such as redirecting the user to a login page
		}
	</script> -->

<script>
const logoutButton = document.getElementById("logout"); // replace with the actual ID of your logout button
logoutButton.addEventListener("click", handleLogout);

function handleLogout() {
// Display the alert message
alert("Thank you for voting. :)"); 

// Here you can add any other code to handle the logout, such as redirecting the user to a login page
}
</script>
</body>
<?php include ('script.php')?>
</html>

