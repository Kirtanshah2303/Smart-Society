<?php include_once("aheader.php"); ?>


<?php

$pid=$_GET["id"];
if(isset($_POST["submit"]))
{
	if(isset($_POST["cmbcat"]))
   // text box
	$pname=$_POST["txtname"];
	$price=$_POST["txtprice"];
    $img=$_POST["txtimg"];
   // $catid=$_POST["txtid"];
	$cmbcat=$_POST["cmbcat"];
	$conn=mysqli_connect("localhost","root","","dbdemo");
	$qry="update product set pname='$pname',price='$price',pimg='$img',catid='$cmbcat' where pid='$pid'";
	$result=$conn->query($qry);
	
	//$str="<table border='2' align='center'><tr> <th>Category Name</th> </tr>";
	
	//$str.="<tr><td>$pname</td> <td>$price</td> <td>$img</td>
    //<td>$catid</td></tr></table>";
	 
	//echo $str;

	echo "<script> location.replace('updateproductdetail.php');</script>";
}

$pid=$_GET["id"];
$conn=mysqli_connect("localhost","root","","dbdemo");
$qry="select product.pid as pid,pname,price,pimg,catname from product,cat where product.catid=cat.catid and pid=$pid";
$result=$conn->query($qry);

$str="<table class='table  table-bordered table-hover'><tr>
<th>Product Name</th>  <th>Price</th>
<th>Image</th> <th>Category ID</th> <th>Update</th> <th>Delete</th></tr>";

$row=$result->fetch_assoc();

    $pname=$row["pname"];
    $price=$row["price"];
    $img=$row["pimg"];
    $catname=$row["catname"];
    $pathimg="img/$img";
    
?>
 
<div class="page-header">
							<h1>
								UPDATION
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Product Edit or Update
								</small>
							</h1>
						</div>
						<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Product Name </label>

										<div class="col-sm-9">
											<input type="text" name="txtname"  class="col-xs-10 col-sm-5" value="<?php echo $pname; ?>">
										</div>
									</div>                                      

                                    <div class="col-xs-12">
								<!--    PAGE CONTENT BEGINS -->        
							
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Price </label>

										<div class="col-sm-9">
											<input type="text" name="txtprice"  class="col-xs-10 col-sm-5" value="<?php echo $price   ; ?>">
										</div>
									</div>

                                    <div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image </label>

										<div class="col-sm-9">
											<input type="text" name="txtimg"  class="col-xs-10 col-sm-5" value="<?php echo $img;?>"> <img src=<?php echo $pathimg;?> height='100' width='100'>
										</div>
									</div>
                                    <div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
						
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Category ID </label>

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
											
											<input type="submit" name="submit">
												
										

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
                                </form>
<?php include_once("afooter.php"); ?>