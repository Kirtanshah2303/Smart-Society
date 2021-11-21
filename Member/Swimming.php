<?php
include_once("mheader.php")
?>
<div class="page-header">
							<h1>
							View 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									  Swimming
								</small>
							</h1>
						</div>
						<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
									
							</div>
				

                            <?php
            
            $conn=mysqli_connect("localhost","root","","elegance");
            $memid='3';//$_SESSION['mid'];
   
   $qry="select * from swiming_detail,swiming_type where swiming_detail.swimid = swiming_type.swimid";
   $result=$conn->query($qry);

   $swimtype="";
   $opening_time="";
   $closing_time="";

   $x=1;
   $str="<table class='table  table-bordered table-hover'> <tr><th>Swimming Pool Name</th><th>Opening Time</th><th>Closing Time</th>";
    while($row=$result->fetch_assoc())
    {
       $swimtype=$row["swimtype"];
        $opening_time=$row["opening_time"];
        $closing_time=$row["closing_time"];
        if($x==1)
        {
            $str.="<tr>";
        }
        
        $str.="<tr> <td>$swimtype</td><td>$opening_time</td><td>$closing_time</td>";

        $x++;
        if($x==4)
        {
            $str.="</tr>";
            $x=1;
        }
   
    }

    $str.="</table>";

    $str.="<h4 class='pink'>
				<i class='ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue'></i> Total Record 
				</h4>";

   echo $str;
   

        
        
    ?>
<?php include_once("mfooter.php")?>