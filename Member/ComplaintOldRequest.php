

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
   
   $qry="select dateofcomplain,description,issolved,member.fname as fname,member.lname as lname,house.houseno,block.blockno from complain_box,member,house,block where complain_box.mid=$memid and member.mid=complain_box.mid and house.houseid=member.houseid and block.blockid=house.blockid" ;
   echo $qry;
   $result=$conn->query($qry);
    

   
   $str="<table class='table  table-bordered table-hover'> <tr><th>Date</th><th>Name</th><th>Block ID</th><th>House ID</th><th>Complain</th><th>Solved</th>";
   while($row=$result->fetch_assoc())
   {
    
        $fname=$row["fname"];
        $lname=$row["lname"];
        $houseid=$row["house.houseno"];
        $blockid=$row["block.blockno"];
        $complain=$row["description"];
        $register_date=$row["dateofcomplain"];
        $issolved=$row["issolved"];
   
        
   $str.="<tr> <td>$register_date</td><td>$fname $lname</td><td>$blockid</td><td>$houseid</td><td>$complain</td>";
   if($issolved=='No'){
    $str.="<td>No</td>";
   }
   else{
    $str.="<td>Yes</td>";
   }
  }

    $str.="</table>";

    $str.="<h4 class='pink'>
				<i class='ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue'></i> Total Record 
				</h4>";

   echo $str;
   

        
        
    ?>
<?php include_once("mfooter.php")?>