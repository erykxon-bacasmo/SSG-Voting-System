<?php
	if(!$bool){
?>
<div class="modal fade" id="edit_voters<?php  echo $voters_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Edit Student Details</center>
						</div>    
					</div>
				</h4>
			</div>						
										
			<div class="modal-body">						
				<form action="update_votes.php?voter_id=<?php echo $voters_id; ?>" method = "post" >	
				<input type="hidden" name="voters_id" value="<?php echo $row1['voters_id'] ?>">
				<div class="form-group">
					<label>LRN ID</label>
					<input type = "text" class = "form-control" name = "id_number" value="<?php echo $row1 ['id_number']?>"	>												
				</div>
				<div class="form-group">
					<label>Password</label>
						<input class="form-control" type ="text" name = "password" id = "pass" required="true" value = "<?php echo $row1 ['password']?>">
				</div>

				<div class="form-group">
					<label>Firstname</label>
						<input class="form-control" type ="text" name = "firstname" required="true" value = "<?php echo $row1 ['firstname']?>">
				</div>

				<div class="form-group">
					<label>Lastname</label>
						<input class="form-control"  type = "text" name = "lastname" value = "<?php echo $row1 ['lastname']?>" required="true">
				</div>

				<div class="form-group">
					<label>Year_Level</label>
						<select class = "form-control" name = "year_level" <?php echo $row1 ['year_level']?> required="true">
							<option value=""></option>
							<option value="Grade 12"<?php echo($row1['year_level'] == "Grade 12")? 'selected': '';?>>Grade 12</option>	
							<option value="Grade 11"<?php echo($row1['year_level'] == "Grade 11")? 'selected': '';?>>Grade 11</option>	
							<option value="Grade 10"<?php echo($row1['year_level'] == "Grade 10")? 'selected': '';?>>Grade 10</option>	
							<option value="Grade 9"<?php echo($row1['year_level'] == "Grade 9")? 'selected': '';?>>Grade 9</option>	
							<option value="Grade 8"<?php echo($row1['year_level'] == "Grade 8")? 'selected': '';?>>Grade 8</option>	
							<option value="Grade 7"<?php echo($row1['year_level'] == "Grade 7")? 'selected': '';?>>Grade 7</option>	
						</select>
				</div>

				<div class="form-group">
					<label>Account</label>
						<select class = "form-control" name = "account" <?php echo $row1 ['account']?>>
							<option value="Active"<?php echo($row1['account'] == "Active")? 'selected': '';?>>Active</option>
            				<option value=""<?php echo($row1['account'] == "")? 'selected': '';?>>Inactive</option>							
						</select>
				</div>

														
			</div>
							<div class="modal-footer">
								<button name = "done" type="submit" class="btn btn-primary">Update</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							</div>
				</form>
				
		</div>					
	</div>
</div>
<?php
	}
?>
<!-- /.modal-content -->

