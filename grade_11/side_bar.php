<nav class="navbar navbar-default navbar-static-top navbar-primary navbar-fixed" role="navigation" style="margin-bottom:6px;background-color:lightslategrey;color:white;">
            <div class="navbar-header">
                <a class="navbar-brand" href="" style = "color:white; font-weight: bold; font-size:20px;"> Supreme Student Government Voting System</a>
					
            </div>
      

            <ul class="nav navbar-top-links navbar-right">
            
				<?php 
					require 'dbcon.php';
					// $query = $conn->query("SELECT * FROM voters WHERE voters_id = '$_SESSION['id']'");
                    $id = $_SESSION['voters_id'];
					$query = $conn->query("SELECT * FROM `voters` WHERE voters_id='$id'");

                    
					$row = $query->fetch_assoc();

				?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color:white;font-size:14pt;">
                    <!-- <i class="fa fa-arrow fa-fw"></i>Welcome User -->
						<i class="fa fa-arrow fa-fw"></i>Welcome: <?php echo $row['firstname']." ".$row['lastname'];?>
					</a>
                </li>
            </ul>
</nav>