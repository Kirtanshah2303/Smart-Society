<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Member</title>
</head>
<body>
<?php include_once("mheader.php");?>
 
<?php
	session_start();
?>
<?php
            $mid=$_SESSION["mid"];
            $conn=mysqli_connect("localhost","root","","elegance");
   
   $qry="select fname,lname,houseno,blockname,parking_name from member,house,block,parking_member where mid='$mid' and member.houseid=house.houseid and house.blockid=block.blockid and house.houseid=parking_member.houseid";
   
   //echo $qry;
   
   $result=$conn->query($qry);

   $cnt=mysqli_num_rows($result);
   
   if($cnt>0)
   { 
   $str="<table class='table  table-bordered table-hover'> <tr><th>User</th><th>House Number</th><th>Block Name</th><th>Parking Name</th></tr>";
    $row=$result->fetch_assoc();
       $fname=$row["fname"];
       $lname=$row["lname"];
       $houseno=$row["lname"];
       $blockname=$row["blockname"];
       $parkingname=$row["parking_name"];
       $str.="<tr> <td>$fname $lname</td><td>$houseno</td><td>$blockname</td><td>$parkingname</td>  </tr>";
    
    
    $str.="</table>";

    $str.="<h4 class='pink'>
				<i class='ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue'></i> Total Record $cnt
				</h4>";
        


   echo $str;
   
}
else{
    echo "Sorry, data not found!";
}
        
        
    ?>
<table border="2">
<tr>
<td>
<img src="img/user.png" height="100" width="200">
<br>
<?php
echo "$fname $lname"
?>
</td>
<td>
<img src="img/house.png" height="100" width="200">
<br>
<?php
echo "$houseno"
?>
</td>
<td>
<img src="img/block.png" height="100" width="200">
<br>
<?php
echo "$blockname"
?>
</td>
<td>
<img src="img/parking.png" height="100" width="200">
<br>
<?php
echo "$parkingname"
?>
</td>



</tr>

</table>
<?php include_once("mfooter.php"); ?>

</body>
</html>