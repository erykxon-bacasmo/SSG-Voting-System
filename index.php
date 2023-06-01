<?php include ('head.php');?>
<body>
    <div class="container">
        <div class="row">
		
		<center><h3>Supreme Student Government Voting Sytem</h3></center>
            <div class="col-md-4 col-md-offset-4">
			
                <div class="login-panel panel panel-default">
				
                    <div class="panel-heading">
                        <center><h3 class="panel-title"> Student Voters Log In</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>
							
                                <div class="form-group">
									<label for = "username" >LRN ID</label>
										<input class="form-control" placeholder="Please Enter your LRN" name="idno" type="text" required = "required" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" id="myInput" required = "required">
                                        <input type="checkbox" onclick="myFunction()" style="margin-top: 15px;"> Show Password
                                </div>
                              
                                <button class="btn btn-lg btn-success btn-block " style="border: none; margin-top: 15px;" name = "login">Login</a>
								
								
                            </fieldset>
							
									<?php include ('login_query.php');?>
                        </form>
                        <h5><b>Note:</b> <i>One voter can only vote once/login one time!!</i> </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include ('script.php');?>

<script>
        function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
</script>

</body>

</html>
