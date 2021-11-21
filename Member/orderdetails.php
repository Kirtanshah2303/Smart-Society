<?php include_once("mheader.php"); ?>
<style type="text/css">
h3
{
 text-align: center;
}
</style>
<?php

 
 $oid=$_GET["id"];

 $conn=mysqli_connect("localhost","root","","dbdemo");
 $qry="select * from orderdetails where oid='$oid'";
 $result=$conn->query($qry);
 
    
$str="<table class='table  table-bordered table-hover'>
<tr><th>Product Name</th> 
<th>Image</th> <th>Price</th> <th>Quantity</th>
<th>Price_Qty</th>
</tr>";

$gtotal=0;
 while($row=$result->fetch_assoc())
 {   
    $odid=$row["odid"];
    $oid=$row["oid"];
    $pid=$row["pid"];
    $pname=$row["pname"];
    $pimg=$row["pimg"];
    $price=$row["price"];
    $qty=$row["qty"];
    $pq=$row["pq"];
        
    $gtotal=$gtotal+$pq;

    $str.="<tr><td>$pname</td>
    <td><img src='img/$pimg' height='50px' width='50px'></td><td>$price</td>
    <td>$qty</td><td>$pq</td> </tr>";
  
}

$str.="</table> <h3> Total is $gtotal </h3>";

echo $str;
?>
<?php include_once("mfooter.php"); ?>