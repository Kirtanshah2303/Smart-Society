  <?php include_once("aheader.php"); ?>
						
  <div class="page-header">
							<h1>
                                PRODUCT
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Insertation Of Product
								</small>
							</h1>
						</div>
						<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Product Name</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5">
										</div>
									</div>
                                    <div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Price </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5">
										</div>
									</div>

                                    <div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1"  class="col-xs-10 col-sm-5">
										</div>
									</div>

									<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Category ID </label>

										<div class="col-sm-9">
										<select name="cmbcat">
                                <?php
                                $conn=mysqli_connect("localhost","root","","dbdemo");                        
                                $qry="select * from cat";
                                $result=$conn->query($qry);
                                while($row=$result->fetch_assoc())
                                {
                                    $catid=$row["catid"];
                                    $catname=$row["catname"];
                                    
                                    echo "<option value='$catid'>$catname</option>";
                                     
                               }
                               ?>
                              </select>

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
  
     $pname=$_POST["pname"];
     $price=$_POST["price"];
     $img=$_POST["img"];
     $catid=$_POST["catid"];

     $conn=mysqli_connect("localhost","root","","dbdemo");
     $qry="insert into product(pname,price,pimg,catid) values
     ('$pname','$price','$img','$catid')";
     $result=$conn->query($qry);

     echo "Product Data Inserted Successfully";
 }
 ?>
 <?php include_once("afooter.php"); ?> 