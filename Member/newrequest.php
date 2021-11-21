
<?php include_once("mheader.php");?>

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
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> First Name </label>

										<div class="col-sm-9">
											<input type="text" name="fname"  class="col-xs-10 col-sm-5">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Last Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="lname">
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Arriving Date </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2"  class="col-xs-10 col-sm-5" name="dos">
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle"></span>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Leaving Date </label>
                                        <div class="col-sm-9">
											<input type="text" id="form-field-2"  class="col-xs-10 col-sm-5" name="doe">
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle"></span>
											</span>
										</div>
										
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Reason</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="reason">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Car Number</label>

										
										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="carno">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">From(City/Village)</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="from">
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Mobile Number</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="mobileno">
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Email ID</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="emailid">
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
                                <?php

if(isset($_POST["btnsubmit"]))
{

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $dos=$_POST["dos"];
    $doe=$_POST["doe"];
    $reason=$_POST["reason"];
    $carno=$_POST["carno"];
    $from=$_POST["from"];
    $mobileno=$_POST["mobileno"];
    $emailid=$_POST["emailid"];
    $memid=$_SESSION["mid"];
    $dorequest=date('Y-m-d');

$conn=mysqli_connect("localhost","root","","elegance");
$qry="insert into parking_guest(dos,doe,doreason,mid,dorequest,fname,lname,carno,fromwhere,mobileno,email,ispay,isbook) values('$dos','$doe','$reason','$memid','$dorequest','$fname','$lname','$carno','$from','$mobileno','$emailid','No','No')";
$result=$conn->query($qry);


}
?>
<?php include_once("mfooter.php"); ?>
