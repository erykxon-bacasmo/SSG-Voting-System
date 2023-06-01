<?php include ('session.php');?>
<?php include ('head.php');?>
<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header" style="font-weight: bold;">Voters List</h3>
					
                </div>
				<?php 
                    require('dbcon.php');
					$count = $conn->query("SELECT COUNT(*) as total FROM `voters`")->fetch_array();
					$count1 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Voted'")->fetch_array();
					$count2 = $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Unvoted'")->fetch_array();
					?>

				<div class="button-top">

                    <a  href = "update_status.php"class = "btn btn-danger btn-outline pull-right" style = "" name = "go"><i class = "fa fa-asterisk fa-spin"></i> Activate All Voters Account</a>&nbsp;
                    <a  href = "generate_password.php"class = "btn btn-success btn-outline pull-right" name = "go"><i class = "fa fa-spinner fa-spin"></i> Generate Voters Password</a>&nbsp;
                    <br>
                    <br>
                    <a href="download.php" class="btn btn-success btn-outline" style = ""><i class="glyphicon glyphicon-import"></i> Import Data (csv exel file)</a>&nbsp;
                    <a href="export.php" type="button" id="export_button" class="btn btn-danger btn-outline"><i class="glyphicon glyphicon-export"></i> Export Data </a>&nbsp;
                    <a href="../register/index.php" class = "btn btn-primary btn-outline"><i class = "fa fa-plus"></i> Add Voters</a>&nbsp;
                </div>
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><i class = "fa fa-users"></i>
                                        Voters List
                                    </div>    
                                </div>
							</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         
                                            <th>LRN ID</th>
                                            <th>Password</th>
                                            <th>Name</th>
                                            <th>Year Level</th>
                                            <th>Status</th>
                                            <th>Account</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 
											require 'dbcon.php';
											$bool = false;
											$query = $conn->query("SELECT * FROM voters ORDER BY voters_id DESC");
											while($row1 = $query->fetch_array()){
											$voters_id=$row1['voters_id'];

										?>
                                      
											<tr>
												<td><?php echo $row1 ['id_number'];?></td>
												<td><?php echo $row1 ['password'];?></td>
												<td><?php echo $row1 ['firstname']." ". $row1 ['lastname'];?></td>
												<td><?php echo $row1 ['year_level'];?></td>
												<td><?php echo $row1 ['status'];?></td>
												<td><?php echo $row1 ['account'];?></td>
                                                <td style="text-align:center">
											
												 <a rel="tooltip"  title="Delete" id="<?php echo $voters_id ?>" href="#delete_voters<?php echo $voters_id; ?>" data-target="#delete_voters" data-toggle="modal"class="btn btn-danger btn-outline"><i class="fa fa-trash-o"></i> Delete</a>	
                                                 <?php include ('delete_voters_modal.php'); ?>
                                                 
                                                 <a rel="tooltip"  title="Edit" id="<?php echo $row1['voters_id'] ?>" href="#edit_voters<?php echo $row1['voters_id'] ?>"  data-toggle="modal"class="btn btn-success btn-outline"><i class="fa fa-pencil"></i> Edit</a>	
                                                 
                                                </td>
                                                <?php include ('edit_voters_modal.php'); ?>

											</tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
 
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->
    <style>

@media (max-width: 425px) {
    .button-top{
        display: flex;
        flex-wrap: wrap;
        margin-left: 15px;

    }
    .btn-success, .btn-primary, .btn-danger {
        font-size: 12px;
    }
}

@media (min-width: 768px) {

}

@media (min-width: 1024px) {

}

@media (min-width: 1366px) {

}    
</style>


    <?php include ('script.php');?>

</body>

</html>

