<?php include_once("aheader.php"); ?>
<div class="page-header">
							<h1>
                                CHANGE PASSWORD
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div>
						<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5">
										</div>
									</div>
                                    <div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5">
										</div>
									</div>

                                    <div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Re-type Password </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5">
										</div>
									</div>

									

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>

										</div>
									</div>
								</div><!-- PAGE CONTENT ENDS -->
							</div>


<?php
$uname="";
$pwd="";

 if(isset($_POST["submit"]))
 {  
     $uname=$_POST["uname"];
     $pwd=$_POST["pwd"];

     $conn=mysqli_connect("localhost","root","","dbdemo");
     $qry="update members set pwd='$pwd' where uname='$uname'";
     $result=$conn->query($qry);
    
     echo "Password Changed Successfully";
    

}
?>
<?php include_once("afooter.php"); ?>
