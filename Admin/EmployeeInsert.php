
<?php include_once("aheader.php");?>

<div class="page-header">
							<h1>
							Insert
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
                                        Employee
								</small>
							</h1>
						</div>

<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form  class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image</label>
                                    <div class="col-sm-9">
											<input type="file" name="sdimg" id="file" class="col-xs-10 col-sm-5">
										</div>
                                    
								</div>
                                
                                <div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">First Name </label>

										<div class="col-sm-9">
											<input type="text" name="fname"  class="col-xs-10 col-sm-5">
										</div>
									</div>
									
                                    <div class="space-4"></div>
                                    
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Last Name </label>

										<div class="col-sm-9">
											<input type="text" name="lname"  class="col-xs-10 col-sm-5">
										</div>
									</div>
									
                                    <div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Service </label>

										<div class="col-sm-9">
											<input type="text" name="service"  class="col-xs-10 col-sm-5">
										</div>
									</div>
									
                                    <div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Phone no. </label>

										<div class="col-sm-9">
											<input type="text" name="phone"  class="col-xs-10 col-sm-5">
										</div>
									</div>
									
                                    <div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Adhar no. </label>

										<div class="col-sm-9">
											<input type="text" name="adhar"  class="col-xs-10 col-sm-5">
										</div>
									</div>
									
                                    <div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

										<div class="col-sm-9">
											<input type="text" name="email"  class="col-xs-10 col-sm-5">
										</div>
									</div>
									
                                    <div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>

										<div class="col-sm-9">
											<input type="text" name="address"  class="col-xs-10 col-sm-5">
										</div>
									</div>
									
                                    <div class="space-4"></div>
					
									<div class="form-group">
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
                                    </form>
                                    
</div>

								
                                <?php

if(isset($_POST["btnsubmit"]))
{

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $service=$_POST["service"];
    $phone=$_POST["phone"];
    $adhar=$_POST["adhar"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $sdimg=$_FILES["sdimg"];
    $memid=$_SESSION["mid"];

$conn=mysqli_connect("localhost","root","","elegance");
$qry="select sid from servicetype where stype='$service'";
$result=$conn->query($qry);
$cnt=mysqli_num_rows($result);
if($cnt>0)
{
    $row=$result->fetch_assoc();
    $sid=$row["sid"];
    $conn1=mysqli_connect("localhost","root","","elegance");
$qry1="insert into servicedetail(fname,lname,cno,adharno,eamil,addr,sid,sdimg) values('$fname','$lname','$phone','$adhar','$email','$address','$sid','demo.png')";
$result=$conn1->query($qry1);
}
else{
    echo "No such service available. Please add the service first!!";
}


}
?>
<?php include_once("afooter.php"); ?>
