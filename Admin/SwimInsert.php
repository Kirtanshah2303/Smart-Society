
<?php include_once("aheader.php");?>

<div class="page-header">
							<h1>
							Insert
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
                                        Swimming
								</small>
							</h1>
						</div>

<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form  class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                            
                                <div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

										<div class="col-sm-9">
											<input type="text" name="swimtype"  class="col-xs-10 col-sm-5">
										</div>
									</div>
									
                                    <div class="space-4"></div>
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Opening Time </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2"  class="col-xs-10 col-sm-5" name="openingtime">
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle"></span>
											</span>
										</div>
									</div>

									<div class="space-4"></div>
                                    <div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">Closing Time </label>
                                        <div class="col-sm-9">
											<input type="text" id="form-field-2"  class="col-xs-10 col-sm-5" name="closingtime">
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle"></span>
											</span>
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

    $swimtype=$_POST["swimtype"];
    $openingtime=$_POST["openingtime"];
    $closingtime=$_POST["closingtime"];
    $memid=$_SESSION["mid"];

$conn=mysqli_connect("localhost","root","","elegance");
$qry="insert into swiming_detail(swimtype,fcid,opening_time,closing_time,cmid) values('$swimtype','3','$openingtime','$closingtime','$memid')";
echo $qry;
$result=$conn->query($qry);


}
?>
<?php include_once("afooter.php"); ?>
