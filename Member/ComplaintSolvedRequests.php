

<?php
include_once("mheader.php")
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
           
        $memid='3'; //$_SESSION['mid'];
        $fname="";
        $lname="";
        $hno="";
        $bno="";
        $complain="";
        $register_date="";
        $issolved="";
   
   $qry="select * from complain_box,member,house,block where complain_box.mid='$memid' and complain_box.mid=member.mid and member.houseid=house.houseid and house.blockid=block.blockid and issolved='Yes'" ;
   $result=$conn->query($qry);
   

   
   $str="<table class='table  table-bordered table-hover'> <tr><th>Date</th><th>Name</th><th>Block ID</th><th>House ID</th><th>Complain</th><th>Solved</th>";
   while($row=$result->fetch_assoc())
   {
    
        $fname=$row["fname"];
        $lname=$row["lname"];
        $houseid=$row["houseid"];
        $blockid=$row["blockid"];
        $complain=$row["description"];
        $register_date=date('Y-m-d');
        $issolved=$row["issolved"];
   
        
   $str.="<tr> <td>$register_date</td><td>$fname $lname</td><td>$blockid</td><td>$houseid</td><td>$complain</td>";
   if($issolved=='No'){
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