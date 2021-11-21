

<?php
include_once("mheader.php")
?>
<div class="page-header">
							<h1>
							View 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									  Service
								</small>
							</h1>
						</div>
                            <?php
            
            $conn=mysqli_connect("localhost","root","","elegance");
            $memid='3';//$_SESSION['mid'];
            $sid=$_GET["id"];
   
            $qry="select * from servicedetail,servicetype where servicedetail.sid='$sid' and servicedetail.sid=servicetype.sid";
   $result=$conn->query($qry);

   $str="<table class='table  table-bordered table-hover'> <tr><th>Serive Type</th><th>Name</th><th>Mobile No.</th><th>Email Id</th><th>Address</th><th>Employee</th>";
    while($row=$result->fetch_assoc())
    {
        $stype=$row["stype"];
        $fname=$row["fname"];
        $lname=$row["lname"];
        $cno=$row["cno"];
        $email=$row["eamil"];
        $addr=$row["addr"];
        $simg=$row["simg"];
        $sdimg=$row["sdimg"];
        
   $str.="<tr> <td>$stype</td><td>$fname $lname</td><td>$cno</td><td>$email</td><td>$addr</td><td><img src='$sdimg' height='100' width='100'></td>";
    }

    $str.="</table>";

    $str.="<h4 class='pink'>
				<i class='ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue'></i> Total Record 
				</h4>";

   echo $str;
   

        
        
    ?>
<?php include_once("mfooter.php")?>