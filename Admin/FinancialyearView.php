

<?php
include_once("aheader.php")
?>
<div class="page-header">
							<h1>
							View 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									  Financial
								</small>
							</h1>
						</div>
						<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
									
							</div>
				

                            <?php
            
            $conn=mysqli_connect("localhost","root","","elegance");
   
   $qry="select * from financialyear ";
   $result=$conn->query($qry);

   $cnt=mysqli_num_rows($result);
   if($cnt>0)
   { 
   $str="<table class='table  table-bordered table-hover'> <tr><th>Finacial Year</th><th>Edit</th><th>Delete</th></tr>";
    while($row=$result->fetch_assoc())
    {
        $fyid=$row["fyid"];
        $fyname=$row["fyname"];

        $edit="<a href='FinancialyearUpdate.php?id=$fyid'><i class='ace-icon fa fa-pencil bigger-120'></i></a>";
        $delete="<a href='FinancialyearDelete.php?id=$fyid'><i class='ace-icon fa fa-trash-o bigger-120'></i></a>";
    
   $str.="<tr> <td>$fyname</td><td>$edit</td><td>$delete</td>  </tr>";
   
    }

    $str.="</table>";

    $str.="<h4 class='pink'>
				<i class='ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue'></i> Total Record $cnt
				</h4>";

   echo $str;
   
}
else{
    echo "Sorry, data not found!";
}
        
        
    ?>
<?php include_once("afooter.php")?>