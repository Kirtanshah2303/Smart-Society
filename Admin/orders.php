<?php include_once("aheader.php"); ?>

<style type="text/css">
h3
{
 text-align: center;
}
</style>
<?php

 $uid=$_SESSION["uid"];

 $conn=mysqli_connect("localhost","root","","dbdemo");
 $qry="select * from orders";
 
 $result=$conn->query($qry);

 
$str="<table class='table  table-bordered table-hover'>
<tr><th>Order ID</th> 
<th>User ID</th> <th>Date Of Order</th> <th>Order Details</th>
</tr>";

//$gtotal=0;
 while($row=$result->fetch_assoc())
 {   
    //$odid=$row["odid"];
    $oid=$row["oid"];
    $uid=$row["uid"];
    $doo=$row["doo"];
    $oddet="<a href='orderdetails.php?id=$oid'><i class='fa fa-search fa-4' aria-hidden='true'></i>";
    $str.="<tr><td>$oid</td><td>$uid</td><td>$doo</td>
    <th>$oddet</th></tr>";

}

$str.="</table>";

echo $str;
?>
<?php include_once("afooter.php"); ?>

