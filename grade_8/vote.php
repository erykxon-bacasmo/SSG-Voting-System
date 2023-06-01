<?php include ('head.php');?>
<?php include("sess.php")?>
<body>
    <div id="wrapper">
        <?php include ('side_bar.php');?>
    </div>
	<form method = "POST" action = "vote_result.php">
	<div class="col-lg-6">
		<div class="panel panel-primary">
			<div class="panel-heading"><center>
				PRESIDENT</center>
			</div>
			<div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'President'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
				{
				?>
				<div id = "position">

					<div class="flx-cntner" >
						<div>
							<center><img src = "\ssg_voting_system/admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
						</div>
						<div>
							<center><h3><?php echo $fetch['firstname']?></h3><h3 style="font-size: 18px;"><?php echo $fetch['lastname']?></h3></center>
						</div>
						<div>
							<center><input type = "checkbox" style = "height: 30px; width: 30px;" value = "<?php echo $fetch['candidate_id'] ?>" name = "pres_id" class = "president" ></center>
						</div>
					</div>
			
				</div>

				<?php
					}
				?>

			</div>
			
		</div>
    </div>
	<div class="col-lg-6">
		<div class="panel panel-primary">
			<div class="panel-heading"><center>
			VICE PRESIDENT FOR INTERNAL AFFAIRS</center>
			</div>
			<div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Vice President for Internal Affairs'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
				{
				?>
				<div id = "position">

					<div class="flx-cntner" >
						<div>
							<center><img src = "\ssg_voting_system/admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
						</div>
						<div>
							<center><h3><?php echo $fetch['firstname']?></h3><h3 style="font-size: 18px;"><?php echo $fetch['lastname']?></h3></center>
						</div>
						<div>
							<center><input type = "checkbox" style = "height: 30px; width: 30px;" value = "<?php echo $fetch['candidate_id'] ?>" name = "vpinternal_id" class = "vpinternal" ></center>
						</div>
					</div>
			
				</div>

				<?php
					}
				?>

			</div>
			
		</div>
    </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>VICE PRESIDENT FOR EXTERNAL AFFAIRS</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Vice President for External Affairs'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
						<div class="flx-cntner" >
								<div>
									<center><img src = "\ssg_voting_system/admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
								</div>
								<div>
									<center><h3><?php echo $fetch['firstname']?></h3><h3 style="font-size: 18px;"><?php echo $fetch['lastname']?></h3></center>
								</div>
								<div>
									<center><input type = "checkbox" style = "height: 30px; width: 30px;" value = "<?php echo $fetch['candidate_id'] ?>" name = "vpexternal_id" class = "vpexternal"></center>
								</div>
							</div>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>SECRETARY</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Secretary'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
						<div class="flx-cntner" >
								<div>
									<center><img src = "\ssg_voting_system/admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
								</div>
								<div>
									<center><h3><?php echo $fetch['firstname']?></h3><h3 style="font-size: 18px;"><?php echo $fetch['lastname']?></h3></center>
								</div>
								<div>
									<center><input type = "checkbox" style = "height: 30px; width: 30px;" value = "<?php echo $fetch['candidate_id'] ?>" name = "secretary_id" class = "secretary"></center>
								</div>
							</div>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>	
	
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>AUDITOR</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Auditor'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
						<div class="flx-cntner" >
								<div>
									<center><img src = "\ssg_voting_system/admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
								</div>
								<div>
									<center><h3><?php echo $fetch['firstname']?></h3><h3 style="font-size: 18px;"><?php echo $fetch['lastname']?></h3></center>
								</div>
								<div>
									<center><input type = "checkbox" style = "height: 30px; width: 30px;" value = "<?php echo $fetch['candidate_id'] ?>" name = "auditor_id" class = "auditor"></center>
								</div>
							</div>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	 <div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>TREASURER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Treasurer'") or die(mysqli_error());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
						<div class="flx-cntner" >
								<div>
									<center><img src = "\ssg_voting_system/admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
								</div>
								<div>
									<center><h3><?php echo $fetch['firstname']?></h3><h3 style="font-size: 18px;"><?php echo $fetch['lastname']?></h3></center>
								</div>
								<div>
									<center><input type = "checkbox" style = "height: 30px; width: 30px;" value = "<?php echo $fetch['candidate_id'] ?>" name = "treasurer_id" class = "treasurer"></center>
								</div>
						</div>
	
						</div>      
				<?php
					}
				?>
        </div>
     </div>
	</div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>PIO</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'PIO'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
						<div class="flx-cntner" >
								<div>
									<center><img src = "\ssg_voting_system/admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
								</div>
								<div>
									<center><h3><?php echo $fetch['firstname']?></h3><h3 style="font-size: 18px;"><?php echo $fetch['lastname']?></h3></center>
								</div>
								<div>
									<center><input type = "checkbox" style = "height: 30px; width: 30px;" value = "<?php echo $fetch['candidate_id'] ?>" name = "pio_id" class = "pio"></center>
								</div>
							</div>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>PEACE OFFICER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Peace Officer'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
						<div class="flx-cntner" >
								<div>
									<center><img src = "\ssg_voting_system/admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
								</div>
								<div>
									<center><h3><?php echo $fetch['firstname']?></h3><h3 style="font-size: 18px;"><?php echo $fetch['lastname']?></h3></center>
								</div>
								<div>
									<center><input type = "checkbox" style = "height: 30px; width: 30px;" value = "<?php echo $fetch['candidate_id'] ?>" name = "pisopiser_id" class = "pisopiser"></center>
								</div>
							</div>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
    </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>GRADE 8 REPRESENTATIVE</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Grade 8 Representative'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
						<div class="flx-cntner" >
								<div>
									<center><img src = "\ssg_voting_system/admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
								</div>
								<div>
									<center><h3><?php echo $fetch['firstname']?></h3><h3 style="font-size: 18px;"><?php echo $fetch['lastname']?></h3></center>
								</div>
								<div>
									<center><input type = "checkbox" style = "height: 30px; width: 30px;" value = "<?php echo $fetch['candidate_id'] ?>" name = "g8rep_id" class = "g8rep"></center>
								</div>
							</div>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
    </div>
		<br>
		<br>
		<center><button class = "btn btn-success ballot" style="font-weight: bold;"  type = "submit" name = "submit">Submit Ballot</button></center>
	</form>
</body>
<?php include ('script.php')?>
  
  <script type = "text/javascript">
		$(document).ready(function(){
			$(".president").on("change", function(){
				if($(".president:checked").length == 1)
					{
						$(".president").attr("disabled", "disabled");
						$(".president:checked").removeAttr("disabled");
					}
				else
					{
						$(".president").removeAttr("disabled");
					}
			});
			
			$(".vpinternal").on("change", function(){
				if($(".vpinternal:checked").length == 1)
					{
						$(".vpinternal").attr("disabled", "disabled");
						$(".vpinternal:checked").removeAttr("disabled");
					}
				else
					{
						$(".vpinternal").removeAttr("disabled");
					}
			});
			
			$(".vpexternal").on("change", function(){
				if($(".vpexternal:checked").length == 1)
					{
						$(".vpexternal").attr("disabled", "disabled");
						$(".vpexternal:checked").removeAttr("disabled");
					}
				else
					{
						$(".vpexternal").removeAttr("disabled");
					}
			});
			
			$(".secretary").on("change", function(){
				if($(".secretary:checked").length == 1)
					{
						$(".secretary").attr("disabled", "disabled");
						$(".secretary:checked").removeAttr("disabled");
					}
				else
					{
						$(".secretary").removeAttr("disabled");
					}
			});
			
			$(".auditor").on("change", function(){
				if($(".auditor:checked").length == 1)
					{
						$(".auditor").attr("disabled", "disabled");
						$(".auditor:checked").removeAttr("disabled");
					}
				else
					{
						$(".auditor").removeAttr("disabled");
					}
			});
			
			$(".treasurer").on("change", function(){
				if($(".treasurer:checked").length == 1)
					{
						$(".treasurer").attr("disabled", "disabled");
						$(".treasurer:checked").removeAttr("disabled");
					}
				else
					{
						$(".treasurer").removeAttr("disabled");
					}
				
			});
			$(".pio").on("change", function(){
				if($(".pio:checked").length == 1)
					{
						$(".pio").attr("disabled", "disabled");
						$(".pio:checked").removeAttr("disabled");
					}
				else
					{
						$(".pio").removeAttr("disabled");
					}
			});
			$(".pisopiser").on("change", function(){
				if($(".pisopiser:checked").length == 1)
				{
					$(".pisopiser").attr("disabled", "disabled");
					$(".pisopiser:checked").removeAttr("disabled");
				}
			else
				{
					$(".pisopiser").removeAttr("disabled");
				}
			});
			$(".g8rep").on("change", function(){
				if($(".g8rep:checked").length == 1)
				{
					$(".g8rep").attr("disabled", "disabled");
					$(".g8rep:checked").removeAttr("disabled");
				}
			else
				{
					$(".g8rep").removeAttr("disabled");
				}
			});
		});	
	</script>
</html>

