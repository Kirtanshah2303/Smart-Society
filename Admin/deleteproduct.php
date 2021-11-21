<?php include_once("aheader.php"); ?>
<div class="page-header">
							<h1>
								DELETE
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Remove Product 
								</small>
							</h1>
						</div>
						<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Product ID </label>

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
    $pid=$_POST["txtno"];

    $conn=mysqli_connect("localhost","root","","dbdemo");
    $qry="delete from product where pid='$pid'";
    $result=$conn->query($qry);
    
    echo "Data Deleted succesfully";
}
?>
<?php include_once("afooter.php"); ?>



