<?php
include_once("cheader.php")
?>
<div class="page-header">
							<h1>
							View 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									  Gym
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
   
   $qry="select * from gym,gym_timing where gym.gymid = gym_timing.gymid";
   $result=$conn->query($qry);

   $gymname="";
   $boysgirls="";
   $timing="";

   $x=1;
   $str="<table class='table  table-bordered table-hover'> <tr><th>Gym Name</th><th>Persons</th><th>Timing</th>";
    while($row=$result->fetch_assoc())
    {
       $gymname=$row["gymname"];
        $boysgirls=$row["boysgirls"];
        $timing=$row["timing"];
        if($x==1)
        {
            $str.="<tr>";
        }
        
$str.="<tr> <td>$gymname</td><td>$boysgirls</td><td>$timing</td>";
   
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
<?php include_once("cfooter.php")?>