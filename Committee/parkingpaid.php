
<?php include_once("cheader.php");?>

<div class="page-header">
							<h1>
							Parking
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									  parking
								</small>
							</h1>
						</div>

<div class="col-xs-12">
<?php

$conn=mysqli_connect("localhost","root","","elegance");
$pkgid=$_GET["id"];
if(isset($_POST["btnsubmit"]))
{
    $amount=$_POST["amount"];
    $qry1="update parking_guest set amount='$amount',ispay='Yes' where pkgid='$pkgid'";
    $result=$conn->query($qry1);
    echo "<script> location.replace('parkingrequest.php');</script>";
}

$qry="select * from parking_guest where pkgid='$pkgid'";
$result=$conn->query($qry);
$row=$result->fetch_assoc();
$fname=$row["fname"];
    $lname=$row["lname"];
    $dos=$row["dos"];
    $doe=$row["doe"];
    $reason=$row["doreason"];
    $carno=$row["carno"];
    $from=$row["fromwhere"];
    $mobileno=$row["mobileno"];
    $emailid=$row["email"];
    $dorequest=date('Y-m-d');

?>
<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>
                                        
										<div class="col-sm-9">
											<input type="text" value="<?php echo $fname ; ?>" id="form-field-1"  class="col-xs-10 col-sm-5" name="name">
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Arriving Date </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2" value="<?php echo $dos; ?>" class="col-xs-10 col-sm-5" name="dos">
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle"></span>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Leaving Date </label>
                                        <div class="col-sm-9">
											<input type="text" id="form-field-2"  value="<?php echo $doe; ?>" class="col-xs-10 col-sm-5" name="doe">
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle"></span>
											</span>
										</div>
										
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Reason</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  value="<?php echo $reason; ?>" class="col-xs-10 col-sm-5" name="reason">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Car Number</label>

										
										<div class="col-sm-9">
											<input type="text" id="form-field-1"  value="<?php echo $carno; ?>" class="col-xs-10 col-sm-5" name="carno">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">From(City/Village)</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  value="<?php echo $from; ?>"class="col-xs-10 col-sm-5" name="from">
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Mobile Number</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  value="<?php echo $mobileno; ?>" class="col-xs-10 col-sm-5" name="mobileno">
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Email ID</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  value="<?php echo $emailid; ?>" class="col-xs-10 col-sm-5" name="emailid">
										</div>
									</div>
                                    <div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Amount</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="amount">
										</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit" name="btnsubmit">
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
									
								</form>
  
<?php include_once("cfooter.php"); ?>
