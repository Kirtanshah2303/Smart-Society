

<?php
include_once("mheader.php")
?>
<div class="page-header">
							<h1>
							View 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									  Banquet
								</small>
							</h1>
						</div>
						<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
									
							</div>
				

                            <?php
            
            $conn=mysqli_connect("localhost","root","","elegance");
            $memid='3'; //$_SESSION['mid'];
   
   $qry="select hallid,register_date,start_date,end_date,start_time,end_time,notes,persons,dop,ispay,member.fname as fname,member.lname as lname from banquet_hallbooking,member where banquet_hallbooking.mid=$memid and banquet_hallbooking.mid=member.mid and ispay='Yes'";
   $result=$conn->query($qry);

   
   $str="<table class='table  table-bordered table-hover'> <tr><th>Date</th><th>Name</th><th>Starting Date</th><th>Ending Date</th><th>Starting Time</th><th>Ending Time</th><th>Occation</th><th>Capacity</th><th>Payment Date</th><th>Status</th>";
    while($row=$result->fetch_assoc())
    {
    
        $fname=$row["fname"];
        $lname=$row["lname"];
        $persons=$row["persons"];
        $dos=$row["start_date"];
        $doe=$row["end_date"];
        $tos=$row["start_time"];
        $toe=$row["end_time"];
        $reason=$row["notes"];
        $dop=$row["dop"];
       // $memid='3'; //$_SESSION['mid'];
        $register_date=date('Y-m-d');
        $ispay=$row["ispay"];

        
   $str.="<tr> <td>$register_date</td><td>$fname $lname</td><td>$dos</td><td>$doe</td><td>$tos</td><td>$toe</td><td>$reason</td><td>$person</td><td>$Dop</td><td>$ispay</td>";
   if($isapprove=='No'){
    $str.="<td>Not Accepted</td>";
   }
   else{
    $str.="<td>Accepted</td>";
   }
}

    $str.="</table>";

    $str.="<h4 class='pink'>
				<i class='ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue'></i> Total Record 
				</h4>";

   echo $str;
   

        
        
    ?>
<?php include_once("mfooter.php")?>