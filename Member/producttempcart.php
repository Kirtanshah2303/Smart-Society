<?php include_once("mheader.php");?>

<style type="text/css">
form,h3,h2
{
  text-align: center;
}

</style>
 <?php

 $conn=mysqli_connect("localhost","root","","dbdemo");
 $qry="select * from tempcarts";
 $result=$conn->query($qry);

  
$str="<table class='table  table-bordered table-hover'>
<th>Product Name</th><th>price</th> 
<th>Image</th> <th>Quantity</th> <th>Total</th> <th>Remove</th>
</tr>";
$gtotal=0;
$cnt=mysqli_num_rows($result);
if($cnt>0)
{
while($row=$result->fetch_assoc())
{   
    $tid=$row["tid"];
    $pid=$row["pid"];
    $pname=$row["pname"];
    $price=$row["price"];
    $pimg=$row["pimg"];
    $qty=$row["qty"];
    $pq=$row["pq"];
    
    $gtotal=$gtotal+$pq;
    $delete="<a href='cartdelete.php?id=$tid'><button class='btn btn-xs btn-danger'><i class='ace-icon fa fa-trash-o bigger-120'></i></button></a>";

    $str.="<tr><td>$pname</td><td>$price</td>
    <td><img src='img/$pimg' height='50px' width='50px'></td>
    <td>$qty</td><td>$pq</td> <td>$delete</td></tr>";

}

$str.="</table> <h3> Total is $gtotal </h3>";

echo $str;

if(isset($_POST["submit"]))
  {
      
    
   /* session_start();*/
      $uid=$_SESSION["uid"];
      $doo=date("d/m/y");
      $qry="insert into orders(uid,doo)
      values('$uid','$doo')";
      

    $conn=mysqli_connect("localhost","root","","dbdemo");
    $result=$conn->query($qry);
    
    $sql="select max(oid) as oid from orders";
    $result1=$conn->query($sql);
    $row1=$result1->fetch_assoc();
    $oid=$row1["oid"];   

    $qry="select * from tempcarts";
    $result2=$conn->query($qry);

        while($row2=$result2->fetch_assoc())
        {
           $pid=$row2["pid"];
           $pname=$row2["pname"];
           $pimg=$row2["pimg"];
           $price=$row2["price"];
           $qty=$row2["qty"];
           $pq=$row2["pq"];

         $qry="insert into orderdetails(oid,pid,pname,pimg,price,qty,pq) 
         values('$oid','$pid','$pname','$pimg','$price','$qty','$pq')";  
       
         $result4=$conn->query($qry);
       

        }

        $qry="Delete from tempcarts";
        $result4=$conn->query($qry);
        echo '<script> location.replace("thankyou.php"); </script>';

}
?>
<form name="form" method="post">

<input type="submit" name="submit" value="Order Now">
</form>
<?php
}
else
{
  echo "<h2> Empty Cart</h2>";
}
?>
<?php include_once("mfooter.php");?>