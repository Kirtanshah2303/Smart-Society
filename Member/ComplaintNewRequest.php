
<?php include_once("mheader.php");?>

<div class="page-header">
							<h1>
							Complaint
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									  complaint
								</small>
							</h1>
						</div>

<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">First Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2"  class="col-xs-10 col-sm-5" name="fname">
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle"></span>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Last Name </label>
                                        <div class="col-sm-9">
											<input type="text" id="form-field-2"  class="col-xs-10 col-sm-5" name="lname">
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle"></span>
											</span>
										</div>
										
									</div>

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Home No. </label>
                                        <div class="col-sm-9">
											<input type="text" id="form-field-2"  class="col-xs-10 col-sm-5" name="hno">
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle"></span>
											</span>
										</div>
										
									</div>

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Block No. </label>
                                        <div class="col-sm-9">
											<input type="text" id="form-field-2"  class="col-xs-10 col-sm-5" name="bno">
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle"></span>
											</span>
										</div>
										
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Complain</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="description">
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
    $hno = $_POST["hno"];
    $bno=$_POST["bno"];
    $complain=$_POST["description"];
    $memid='3'; //$_SESSION['mid'];
    $register_date=date('Y-m-d');

$conn=mysqli_connect("localhost","root","","elegance");
$qry="insert into complain_box(mid,description,dateofcomplain,issolved) values('$memid','$complain','$register_date','No')";
$result=$conn->query($qry);


}
?>
<?php include_once("mfooter.php"); ?>





























