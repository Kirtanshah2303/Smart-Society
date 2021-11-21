

<?php
include_once("mheader.php")
?>
<div class="page-header">
							<h1>
							View 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									  Events
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
   
   $qry="select * from festivaltype";
   $result=$conn->query($qry);

   $x=1;
   $str="<table class='table  table-bordered table-hover'> ";
    while($row=$result->fetch_assoc())
    {
        $event=$row["ftitle"];
        $festimg=$row["fimg"];
        $ftid=$row["ftid"];
        $eventnav="<a href='eventdetail.php?id=$ftid'>$event</a>";

        if($x==1)
        {
            $str.="<tr>";
        }
   $str.="<th>$eventnav <br>
   <img src='$festimg' height='100' width='200'></th></td>";
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