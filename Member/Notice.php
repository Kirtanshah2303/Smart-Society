<?php
include_once("mheader.php")
?>
<div class="page-header">
							<h1>
							View 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									  Notice
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
   
   $qry="select * from notice";
   $result=$conn->query($qry);

   $description="";
   $issolved="";
   $timing="";

   $x=1;
   $str="<table class='table  table-bordered table-hover'> <tr><th>Ajenda</th><th>Timing</th><th>Solved</th>";
    while($row=$result->fetch_assoc())
    {
        $description=$row["description"];
        $issolved=$row["issolved"];
        $timing=$row["timing"];
        if($x==1)
        {
            $str.="<tr>";
        }
        
$str.="<tr> <td>$description</td><td>$timing</td><td>$issolved</td>";
   
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