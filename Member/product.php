<?php include_once("mheader.php"); ?>
<style type="text/css">
table
{
    margin: auto;
    padding: 10px;
    border: 5px solid #73AD21;
    width: 50%;
}

td
{
    text-align: center;
}
</style>

<?php

 $catid=$_GET['id'];
 $conn=mysqli_connect("localhost","root","","dbdemo");
 $qry="select * from product where catid='$catid'";
 $result=$conn->query($qry);

 
 $str="<table class='table  table-bordered table-hover'>";
 $x=1;
 while($row=$result->fetch_assoc())
 {
     $pid=$row["pid"];
     $pname=$row["pname"];
     $price=$row["price"];
     $pimg=$row["pimg"];
     $catid=$row["catid"];
    
     if($x==1)
     {
         $str.="<tr>";   
     }
      $x++;
      $str.="<td><img src='img/$pimg' height='100px' width='100px'>
      <br><br>$price<br><a href='product2.php?id=$pid'>$pname</a></td>";  
      
      if($x==4)
      {
          $str.="</tr>";
          $x=1;
      }
  }
  $str.="</table>";
  echo  $str;
  


    
?>
<?php include_once("mfooter.php"); ?>

