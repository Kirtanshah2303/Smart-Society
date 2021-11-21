

<?php
include_once("aheader.php")
?>

<?php
    $fyid=$_GET["id"];
	$fyname="";
	$conn=mysqli_connect("localhost","root","","elegance");

	if(isset($_POST["submit"]))
	{
	    $fyname=$_POST["fyname"];
		$qry="update financialyear set fyname='$fyname' where fyid='$fyid'";
		$result=$conn->query($qry);

		echo "<script> location.replace('FinancialyearView.php');</script>";
		
	}

	$qry="select * from financialyear where fyid='$fyid'";
	$result=$conn->query($qry);
	$row=$result->fetch_assoc();
	$fyname=$row["fyname"];

?>
<div class="page-header">
							<h1>
							Update 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									  Financial
								</small>
							</h1>
						</div>
						<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

										<div class="col-sm-9">
											<input type="text" name="fyname"  class="col-xs-10 col-sm-5" value="<?php echo $fyname; ?>">
										</div>
									</div>
                        		
									
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="text" name="submit">
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
				

<?php include_once("afooter.php")?>