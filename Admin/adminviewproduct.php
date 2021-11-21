<?php include_once("aheader.php"); ?> 

<div class="page-header">
							<h1>
                            Products	
                            <small>
									<i class="ace-icon fa fa-angle-double-right"></i>
								</small>
							</h1>
						</div>


<?php
 $conn=mysqli_connect("localhost","root","","dbdemo");
 $qry="select product.pid as pid,pname,price,pimg,catname from product,cat where product.catid=cat.catid ";
 $result=$conn->query($qry);

 $str="<table class='table  table-bordered table-hover'><tr>
 <th>Product Name</th>  <th>Price</th>
 <th>Image</th> <th>Category Name</th> <th>Update</th> <th>Delete</th></tr>";
 
 while($row=$result->fetch_assoc())
 {
     $pid=$row["pid"];
     $pname=$row["pname"];
     $price=$row["price"];
     $img=$row["pimg"];
     $catname=$row["catname"];
     $edit="<a href='editproduct.php?id=$pid'><button class='btn btn-xs btn-success'><i class='ace-icon fa fa-check bigger-120'></i></button></a>";
     $delete="<a href='deleteproduct.php?id=$pid'><button class='btn btn-xs btn-danger'><i class='ace-icon fa fa-trash-o bigger-120'></i></button></a>";
    
    $str.="<tr><td>$pname</td> <td>$price</td> 
    <td><img src='img/$img' height='100px' width='100px'></td>
    <td>$catname</td><td>$edit</td><td>$delete</td></tr>"; 
 }
 $str.="</table>";
 echo  $str;
 
?>
<?php include_once("afooter.php"); ?>
    