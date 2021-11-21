
<?php include_once("aheader.php");?>

<div class="page-header">
							<h1>
							Insert
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
                                        Events
								</small>
							</h1>
						</div>

<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form  class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image</label>
                                    <div class="col-sm-9">
											<input type="file" name="fimg" id="file" class="col-xs-10 col-sm-5">
										</div>
                                    
								</div>
                                <div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Event </label>

										<div class="col-sm-9">
											<input type="text" name="ftitle"  class="col-xs-10 col-sm-5">
										</div>
									</div>
									
                                    <div class="space-4"></div>
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Starting Date </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2"  class="col-xs-10 col-sm-5" name="dos">
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle"></span>
											</span>
										</div>
									</div>

									<div class="space-4"></div>
                                    <div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Ending Date </label>
                                        <div class="col-sm-9">
											<input type="text" id="form-field-2"  class="col-xs-10 col-sm-5" name="doe">
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle"></span>
											</span>
										</div>
										
									</div>

									<div class="space-4"></div>
                                    <div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Timings</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="timings">
										</div>
									</div>
                                    <div class="space-4"></div>
                                    <div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Details</label>

										
										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="details">
										</div>
									</div>
                                    <div class="space-4"></div>
                                    <div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Rules</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="rules">
										</div>
									</div>

									<div class="space-4"></div>
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

    $ftitle=$_POST["ftitle"];
    $dos=$_POST["dos"];
    $doe=$_POST["doe"];
    $timings=$_POST["timings"];
    $details=$_POST["details"];
    $rules=$_POST["rules"];
    $memid=$_SESSION["mid"];
    $fimg=$_FILES["fimg"];

$conn=mysqli_connect("localhost","root","","elegance");
$qry="insert into festivaldetail(ftitle,fyid,ftid,dos,doe,timing,fdec,rules) values('$ftitle','0','0','$dos','$doe','$timings','$details','$rules')";
echo $qry;
$result=$conn->query($qry);


}
?>
<?php include_once("afooter.php"); ?>
