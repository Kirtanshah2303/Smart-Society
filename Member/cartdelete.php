<?php include_once("mheader.php"); ?>

<div class="page-header">
							<h1>
								Delete
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Remove From Category
								</small>
							</h1>
						</div>

<?php

 $tid=$_GET["id"];

 $conn=mysqli_connect("localhost","root","","dbdemo");
 $qry="select * from tempcarts where tid='$tid'";
 $result=$conn->query($qry);

  
$str="<table class='table  table-bordered table-hover'>";

while($row=$result->fetch_assoc())
{   
	
    $tid=$row["tid"];
    $pid=$row["pid"];
    $pname=$row["pname"];
    $price=$row["price"];
    $pimg=$row["pimg"];
    $qty=$row["qty"];
    $pq=$row["pq"];
    
    $str.="<br><br><td>$pname<br><br>$price<br><br><img src='img/$pimg' height='50px' width='50px'></td>";

}

$str.="</table>";

echo $str;

if(isset($_POST["submit"]))
{
    $tid=$_GET["id"];

    $conn=mysqli_connect("localhost","root","","dbdemo");
    $qry="delete from tempcarts where tid='$tid'";
    $result=$conn->query($qry);
    //echo $qry;    
    echo '<script> location.replace("producttempcart.php"); </script>';

}

?>
<head>
<style type="text/css">

td,h1,form
{
   text-align: center;
}
table
{
   border:1px solid;
   width: 50px;
   
}
</style>
</head>



						<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
									
								
									
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

									
								
</div><!-- PAGE CONTENT ENDS -->
							
<?php include_once("mfooter.php"); ?>