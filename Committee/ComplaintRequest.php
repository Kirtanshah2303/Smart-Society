

<?php
include_once("cheader.php")
?>
<div class="page-header">
							<h1>
							View 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									  Complaint
								</small>
							</h1>
						</div>
						<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
									
							</div>
				

                            <?php
            
            $conn=mysqli_connect("localhost","root","","elegance");
   
   $qry="select member.fname as fname,member.lname as lname,dateofcomplain,comid,issolved from member,complain_box where complain_box.mid=member.mid ";
   $result=$conn->query($qry);

   
   $str="<table class='table  table-bordered table-hover'> <tr><th>Date</th><th>Name</th><th>Status</th><th>Info</th>";
    while($row=$result->fetch_assoc())
    {
       
        $dateofcomplain=$row["dateofcomplain"];
        $fname=$row["fname"];
        $lname=$row["lname"];
        $comid=$row["comid"];
        $status=$row["issolved"];

        $expand="<a href='ComplaintDetails.php?id=$comid'><i class='icon-only  ace-icon fa fa-chevron-down'></i></a>";
   $str.="<tr> <td>$dateofcomplain</td><td>$fname $lname</td>";
   if($status=='No'){
    $str.="<td>Not Solved</td><td>$expand</td>";
   }
   else{
    $str.="<td>Solved</td><td>$expand</td>";
   }
   
    }

    $str.="</table>";

    $str.="<h4 class='pink'>
				<i class='ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue'></i> Total Record 
				</h4>";

   echo $str;
   

        
        
    ?>
<?php include_once("cfooter.php")?>