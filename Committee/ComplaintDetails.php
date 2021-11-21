
<?php include_once("cheader.php");?>

<div class="page-header">
							<h1>
							Complaint
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									  Details
								</small>
							</h1>
						</div>

<div class="col-xs-12">
<?php

$conn=mysqli_connect("localhost","root","","elegance");
$comid=$_GET["id"];
if(isset($_POST["btnsubmit"]))
{
    $amount=$_POST["amount"];
    $qry1="update complain_box set issolved='Yes' where comid='$comid'";
    $result=$conn->query($qry1);
    echo "<script> location.replace('complainrequest.php');</script>";
}

$qry="select * from complain_box,member,house,block where complain_box.mid=member.mid and member.houseid=house.houseid and house.blockid=block.blockid and comid='$comid'";
$result=$conn->query($qry);
$row=$result->fetch_assoc();
    $fname=$row["fname"];
    $lname=$row["lname"];
    $hno=$_POST["houseid"];
    $bno=$_POST["blockid"];
    $complain=$_POST["description"];
    $memid='3'; //$_SESSION['mid'];
    $register_date=date('Y-m-d');

?>
<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>
                                        
										<div class="col-sm-9">
											<input type="text" value="<?php echo $fname.' '.$lname ; ?>" id="form-field-1"  class="col-xs-10 col-sm-5" name="name">
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> House No. </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2" value="<?php echo $hno; ?>" class="col-xs-10 col-sm-5" name="hno">
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle"></span>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Block No. </label>
                                        <div class="col-sm-9">
											<input type="text" id="form-field-2"  value="<?php echo $bno; ?>" class="col-xs-10 col-sm-5" name="bno">
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle"></span>
											</span>
										</div>
										
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Complain</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  value="<?php echo $complain; ?>" class="col-xs-10 col-sm-5" name="description">
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Complain Date</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  value="<?php echo $register_date; ?>" class="col-xs-10 col-sm-5" name="register_date">
										</div>
									</div>
                                    <div class="space-4"></div>

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
