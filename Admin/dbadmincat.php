<?php include_once("aheader.php");?>

<div class="page-header">
							<h1>
                            Category								
                            <small>
									<i class="ace-icon fa fa-angle-double-right"></i>
								</small>
							</h1>
						</div>
<?php
 
 $conn=mysqli_connect("localhost","root","","dbdemo");
 $qry="select * from cat";
 $result=$conn->query($qry);

 $str="<table class='table  table-bordered table-hover'><tr>
 <th>category Name</th><th>Update</th><th>Delete</th></tr>";
 
 while($row=$result->fetch_assoc())
 {
     $catid=$row["catid"];
     $catname=$row["catname"];
     $edit="<a href='edit.php?id=$catid'><button class='btn btn-xs btn-success'><i class='ace-icon fa fa-check bigger-120'></i></button></a>";
     $delete="<a href='delete.php?id=$catid'><button class='btn btn-xs btn-danger'><i class='ace-icon fa fa-trash-o bigger-120'></i></button></a>";
     $str.="<tr><td>$catname</td><td>$edit</td><td>$delete</td></tr>"; 
 }
 
 $str.="</table>";
 echo  $str;
 
?>
<?php include_once("afooter.php"); ?>
