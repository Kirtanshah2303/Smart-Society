

<?php
include_once("aheader.php")
?>
<?php
            
            $conn=mysqli_connect("localhost","root","","elegance");
            $memid=$_SESSION['mid'];
            $ftid=$_GET["id"];
   
   $qry="select * from festivaldetail where ftid=$ftid";
   $result=$conn->query($qry);
   $event="";
        $festimg="";
        $dos="";
        $doe="";
        $timings="";
        $details="";
        $rules="";
   $str="<table class='table  table-bordered table-hover'> ";
    while($row=$result->fetch_assoc())
    {
        $event=$row["ftitle"];
        $festimg=$row["fimg"];
        $dos=$row["dos"];
        $doe=$row["doe"];
        $timings=$row["timing"];
        $details=$row["fdec"];
        $rules=$row["rules"];
        
   $str.="<tr><th>$event<br>
   <img src='$festimg' height='100' width='200'></th><td>Festival:$event<br>Starting date:$dos<br>Ending date:$doe<br>Time:$timings<br>Description:$details<br>Rules:$rules<br></td></tr>";
       
   
    }

    $str.="</table>";

    $str.="<h4 class='pink'>
				<i class='ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue'></i> Total Record 
				</h4>";

   echo $str;
   

        
        
    ?>
<div class="page-header">
							<h1>
							Details 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									  Events
								</small>
							</h1>
						</div>
                        <div class="widget-box widget-color-blue ui-sortable-handle" id="widget-box-2">
												<div class="widget-header">
													<h5 class="widget-title bigger lighter">
														
														Festival Details
													</h5>

													<div class="widget-toolbar widget-toolbar-light no-border">
														<select id="simple-colorpicker-1" class="hide">
															<option selected="" data-class="blue" value="#307ECC">#307ECC</option>
															<option data-class="blue2" value="#5090C1">#5090C1</option>
															<option data-class="blue3" value="#6379AA">#6379AA</option>
															<option data-class="green" value="#82AF6F">#82AF6F</option>
															<option data-class="green2" value="#2E8965">#2E8965</option>
															<option data-class="green3" value="#5FBC47">#5FBC47</option>
															<option data-class="red" value="#E2755F">#E2755F</option>
															<option data-class="red2" value="#E04141">#E04141</option>
															<option data-class="red3" value="#D15B47">#D15B47</option>
															<option data-class="orange" value="#FFC657">#FFC657</option>
															<option data-class="purple" value="#7E6EB0">#7E6EB0</option>
															<option data-class="pink" value="#CE6F9E">#CE6F9E</option>
															<option data-class="dark" value="#404040">#404040</option>
															<option data-class="grey" value="#848484">#848484</option>
															<option data-class="default" value="#EEE">#EEE</option>
														</select><div class="dropdown dropdown-colorpicker">		<a data-toggle="dropdown" class="dropdown-toggle" data-position="auto"><span class="btn-colorpicker" style="background-color:#307ECC"></span></a><ul class="dropdown-menu dropdown-caret dropdown-menu-right"><li><a class="colorpick-btn selected" style="background-color:#307ECC;" data-color="#307ECC"></a></li><li><a class="colorpick-btn" style="background-color:#5090C1;" data-color="#5090C1"></a></li><li><a class="colorpick-btn" style="background-color:#6379AA;" data-color="#6379AA"></a></li><li><a class="colorpick-btn" style="background-color:#82AF6F;" data-color="#82AF6F"></a></li><li><a class="colorpick-btn" style="background-color:#2E8965;" data-color="#2E8965"></a></li><li><a class="colorpick-btn" style="background-color:#5FBC47;" data-color="#5FBC47"></a></li><li><a class="colorpick-btn" style="background-color:#E2755F;" data-color="#E2755F"></a></li><li><a class="colorpick-btn" style="background-color:#E04141;" data-color="#E04141"></a></li><li><a class="colorpick-btn" style="background-color:#D15B47;" data-color="#D15B47"></a></li><li><a class="colorpick-btn" style="background-color:#FFC657;" data-color="#FFC657"></a></li><li><a class="colorpick-btn" style="background-color:#7E6EB0;" data-color="#7E6EB0"></a></li><li><a class="colorpick-btn" style="background-color:#CE6F9E;" data-color="#CE6F9E"></a></li><li><a class="colorpick-btn" style="background-color:#404040;" data-color="#404040"></a></li><li><a class="colorpick-btn" style="background-color:#848484;" data-color="#848484"></a></li><li><a class="colorpick-btn" style="background-color:#EEE;" data-color="#EEE"></a></li></ul></div>
													</div>
												</div>

												<div class="widget-body">
													<div class="widget-main no-padding">
														<table class="table table-striped table-bordered table-hover">
															<thead class="thin-border-bottom">
																
															</thead>

															<tbody>
																<tr>
                                                                <th><?php echo $event ?><br>
   <img src='$festimg' height='100' width='200'><td>Festival:<?php echo $event ?><br>Starting date:<?php echo $dos ?><br>Ending date:<?php echo $doe ?><br>Time:<?php echo $timings ?><br>Description:<?php echo $details ?><br>Rules:<?php echo $rules ?><br></td></th>
																</tr>

																
															</tbody>
														</table>
													</div>
												</div>
											</div>
						<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
									
							</div>
				

                            
<?php include_once("afooter.php")?>