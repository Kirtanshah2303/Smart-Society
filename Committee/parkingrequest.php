

<?php
include_once("cheader.php")
?>
<div class="page-header">
							<h1>
							View 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									  Parking
								</small>
							</h1>
						</div>
						<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
									
							</div>
				

                            <?php
            
            $conn=mysqli_connect("localhost","root","","elegance");
   
   $qry="select member.fname as fname,member.lname as lname,dorequest,pkgid,ispay from member,parking_guest where parking_guest.mid=member.mid ";
   $result=$conn->query($qry);

   
   $str="<table class='table  table-bordered table-hover'> <tr><th>Date</th><th>Name</th><th>Status</th><th>Info</th>";
    while($row=$result->fetch_assoc())
    {
       
        $dorequest=$row["dorequest"];
        $fname=$row["fname"];
        $lname=$row["lname"];
        $pkgid=$row["pkgid"];
        $status=$row["ispay"];

        $expand="<a href='parkingpaid.php?id=$pkgid'><i class='icon-only  ace-icon fa fa-chevron-down'></i></a>";
   $str.="<tr> <td>$dorequest</td><td>$fname $lname</td>";
   if($status=='No'){
    $str.="<td>Not Paid</td><td>$expand</td>";
   }
   else{
    $str.="<td>Paid</td><td>$expand</td>";
   }
   
    }

    $str.="</table>";

    $str.="<h4 class='pink'>
				<i class='ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue'></i> Total Record 
				</h4>";

   echo $str;
   

        
        
    ?>
<?php include_once("cfooter.php")?>