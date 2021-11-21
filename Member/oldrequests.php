

<?php
include_once("mheader.php")
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
            $memid=$_SESSION['mid'];
   
   $qry="select fname,lname,dorequest,pkgid,ispay,dos,doe,doreason,amount from parking_guest where parking_guest.mid=$memid";
   $result=$conn->query($qry);

   
   $str="<table class='table  table-bordered table-hover'> <tr><th>Date</th><th>Name</th><th>Arriving Date</th><th>Leaving Date</th><th>Reason</th><th>Amount</th><th>Status</th>";
    while($row=$result->fetch_assoc())
    {
       
        $dorequest=$row["dorequest"];
        $fname=$row["fname"];
        $lname=$row["lname"];
        $pkgid=$row["pkgid"];
        $dos=$row["dos"];
        $doe=$row["doe"];
        $reason=$row["doreason"];
        $amount=$row["amount"];
        $status=$row["ispay"];

        
   $str.="<tr> <td>$dorequest</td><td>$fname $lname</td><td>$dos</td><td>$doe</td><td>$reason</td><td>$amount</td>";
   if($status=='No'){
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