
<?php include_once("aheader.php");?>

<div class="page-header">
							<h1>
							Insert
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
                                        Gym
								</small>
							</h1>
						</div>

<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form  class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                                
                                <div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Gym Name </label>

										<div class="col-sm-9">
											<input type="text" name="gym"  class="col-xs-10 col-sm-5">
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

    $gym=$_POST["gym"];
    $memid=$_SESSION["mid"];

$conn=mysqli_connect("localhost","root","","elegance");
$qry="insert into gym(gymname,fcid) values('$gym','4')";
$result=$conn->query($qry);


}
?>
<?php include_once("afooter.php"); ?>
