
<?php include_once("aheader.php");?>

<div class="page-header">
							<h1>
							Insert
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
                                        Gym Time
								</small>
							</h1>
						</div>

<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form  class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                                
                                <div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Gym Name </label>

										<div class="col-sm-9">
											<input type="text" name="gymname"  class="col-xs-10 col-sm-5">
										</div>
									</div>
                                    <div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Category </label>

										<div class="col-sm-9">
											<input type="text" name="category"  class="col-xs-10 col-sm-5">
										</div>
									</div>
									
                                    <div class="space-4"></div>
                                    
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Timings </label>

										<div class="col-sm-9">
											<input type="text" name="timings"  class="col-xs-10 col-sm-5">
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

    $gymname=$_POST["gymname"];
    $category=$_POST["category"];
    $timings=$_POST["timings"];
    $memid=$_SESSION["mid"];

$conn=mysqli_connect("localhost","root","","elegance");
$qry="select gymid from gym where gymname='$gymname'";
$result=$conn->query($qry);
$cnt=mysqli_num_rows($result);
if($cnt>0)
{
    $row=$result->fetch_assoc();
    $gymid=$row["gymid"];
    $conn1=mysqli_connect("localhost","root","","elegance");
$qry1="insert into gym_timing(gymid,fcid,boysgirls,timing,cmid) values('$gymid','4','$category','$timings','$memid')";
$result=$conn1->query($qry1);
}
else{
    echo "No such gym available. Please add the gym first!!";
}


}
?>
<?php include_once("afooter.php"); ?>
