<?php
include_once("mheader.php")
?>
<div class="page-header">
							<h1>
							Request
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
            $memid=$_SESSION['mid'];
   
   $qry="select * from banquet_hall";
   $result=$conn->query($qry);

   $hallname="";
   $himg="";
   $capacity="";
   $charges="";
   $detail="";
   $hallnav="";
   $hallid="";

   $x=1;
   $str="<table class='table  table-bordered table-hover'> ";
    while($row=$result->fetch_assoc())
    {
        $hallname=$row["hallname"];
        $himg=$row["himg"];
        $capacity=$row["capacity"];
        $charges=$row["charges"];
        $detail=$row["detail"];
        $hallnav="<a href='BanquetNewRequestForm.php?id=$hallid'>$hallname</a>";

        if($x==1)
        {
            $str.="<tr>";
        }
   $str.="<th>$hallnav  <br>
   <img src='$himg' height='100' width='200'><br>Capacity: $capacity <br>Cost: $charges <br>Details: $detail</th>";
   
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