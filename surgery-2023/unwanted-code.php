<section class="section sess-bg" style="padding: 0em !important;">
            <div class="container">
                <div class="row">
                    <!--<div class="col-md-4 hidden-sm hidden-xs">
                        <div class="custom-module">
                            <img src="images/presentation.jpg" alt="" class="img-responsive wow slideInLeft">
                        </div> 
                    </div> -->
                    <div class="col-lg-12" >
                        <div class="custom-module p40l">
                            <h2>Submit the abstract according to your session interest. Please follow the format of our 

                            <mark><a href="https://agmeets.org/uploads/abstract-sample-template.docx" style="color:#fff;">Sample Template</a> </mark> </h2>

                            

                            <hr class="invis">

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 first sess-background">
                                    <ul class="check">
                                         <?php                        
                                            include('inc/config.php');                 
                                            include("functions.php");				
                                            $f_half = mysqli_query($conn1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 3 = 2 order by track_id ASC");					
                                            while($row1=mysqli_fetch_array($f_half)){						
                                            ?>	
                                        <li><?php echo $row1['track_name'];?></li>
                                         <?php } ?>
                                      </ul><!-- end check -->
									  
                                </div><!-- end col-lg-4 -->
                                
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last sess-background">
                                    <ul class="check">
                                         <?php
                           include('inc/config.php');
                           include("functions.php");	
				 $f_half = mysqli_query($conn1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 3 = 1 order by track_id ASC");
						while($row1=mysqli_fetch_array($f_half)){
						?>	
									<li><?php echo $row1['track_name'];?></li>
                        	<?php } ?>	
  
                                    </ul><!-- end check -->
									 
                                </div><!-- end col-lg-4 --> 
                                
                                
                                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last sess-background">
                                    <ul class="check">
                                        <?php
                           include('inc/config.php');
                           include("functions.php");	
				 $f_half = mysqli_query($conn1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 3 = 0 order by track_id ASC");
						while($row1=mysqli_fetch_array($f_half)){
						?>
									<li><?php echo $row1['track_name'];?></li>
                        	<?php } ?>	
  
                                    </ul><!-- end check -->
									 
                                </div><!-- end col-lg-4 --> 
                                
								<hr>
								<!--<div align="center" class="btn-wrapper col-md-6">
                                <a href="#" class="btn btn-primary btn-block">View All Sessions</a>
                            </div>
							<div align="center" class="btn-wrapper col-md-6">
                                <a href="#" class="btn btn-primary btn-block">Submit Abstract</a>
                            </div>-->
                            </div><!-- end row -->   

                            <hr class="invis">

                           

                        </div><!-- end module -->
                    </div><!-- end col -->
					
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
		<p></p>
		<p></p>