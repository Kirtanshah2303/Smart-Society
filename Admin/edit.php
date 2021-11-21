<?php include_once("aheader.php"); ?>
     
<div class="page-header">
							<h1>
								UPDATION
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Category Edit or Update
								</small>
							</h1>
						</div>
						<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Category Name </label>

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

if(isset($_POST["submit"]))
{
	$catid=$_POST["txtid"];
	$catname=$_POST["txtname"];
	
	$conn=mysqli_connect("localhost","root","","dbdemo");
	$qry="update cat set catname='$catname' where catid='$catid'";
	$result=$conn->query($qry);
	
	$str="<table border='2' align='center'><tr> <th>Category Name</th> </tr>";
	
	$str.="<tr><td>$catname</td></tr></table>";
	 
	echo $str;
}
?>
<?php include_once("afooter.php"); ?>
