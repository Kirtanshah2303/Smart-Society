<?php include_once("mheader.php"); ?>

<?php

 $pid=$_GET["id"]; 

 $conn=mysqli_connect("localhost","root","","dbdemo");
 $qry="select * from product where pid=$pid";
 $result=$conn->query($qry);

   
  $str="<table class='table  table-bordered table-hover'>";

  while($row=$result->fetch_assoc())
  {   
      $pid=$row["pid"];
      $pname=$row["pname"];
      $price=$row["price"];
      $pimg=$row["pimg"];
    // $catid=$row["catid"];
      $str.="<br><br><td><img src='img/$pimg' height='200px' width='200px'>
      <br><br>$pname<br><br>$price</td>";  


  }
  $str.="</table>";
  echo $str;

  if(isset($_POST["btnsubmit"]))
  {
      
      $qty=$_POST["cmbqty"];
      
      $qry="select * from product where pid=$pid";
      $result=$conn->query($qry);
      $row=$result->fetch_assoc();
    
      $pname=$row["pname"];
      $price=$row["price"];    
      $pimg=$row["pimg"];
      $pq=$price*$qty;
       
    

      $qry="insert into tempcarts(pid,pname,price,pimg,qty,pq)
      values('$pid','$pname','$price','$pimg','$qty','$pq')";

      $conn=mysqli_connect("localhost","root","","dbdemo");
      $result=$conn->query($qry);

      echo '<script> location.replace("producttempcart.php"); </script>';
      
    }
    
 ?>
<br><br>
  <form name="form" method="post">

  
   Qty:
   <select name="cmbqty">

   
   <option value="1">1
   <option value="2">2
   <option value="3">3    
   <option value="4">4
   <option value="5">5
   </select>
   <input type="submit" name="btnsubmit" value="Add to cart">
</form>
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

<?php include_once("mfooter.php"); ?>