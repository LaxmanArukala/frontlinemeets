<section class="section sess-bg" style="padding: 0em !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="custom-module">
                            <img src="images/presentation.jpg" alt="" class="img-responsive wow slideInLeft">
                        </div> 
                    </div>
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


        <!-- Speakers Page -->
        <section class="section gb nopadtop">
             <?php                  
		include("config/config.php"); 
		include("functions.php");	
		$query  = "SELECT * FROM Speakers_tblstr_d WHERE user='$id' ORDER BY recordListingID ASC";
		$result = mysqli_query($conn1,$query);	
		if(mysqli_num_rows($result)>0)		
			{								
		
		?>	
			
        <section class="section gb">
            <div class="container">
                  <?php
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))	
			{	
			if($row['photo']!="")	
			{							
		$img_pth = "https://agmeets.org/uploads/speakers/".$row['photo'];	
		}			
		
		 					
		?> 
                    <div align="center" class="col-md-3">
					 <div class="content">
						<a href="#" target="_blank">
						  <div class="content-overlay"></div>
						  <img class="content-image mg-circle" src="<?php echo $img_pth;?>"  >
						  <div class="content-details fadeIn-bottom">
							<h3 class="content-title"><?php echo $row['name'];?></h3>
							<hr>
							<p class="content-text"><?php echo $row['affiliation'];?></p>
						  </div>
						</a>
					  </div>
					
					
                         
						 </div> 
						 

<!--<div class="modal fade" id="speaker<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
       <div class="modal-body">
	  <div class="row">
      <div class="col-lg-4 mt-4">
			<div class="member d-flex align-items-start">
			  <div class="pic"><img src="<?php echo $img_pth;?>" class="img-fluid" alt=""></div>
			  </div>
			  </div>
			   <div class="col-lg-6 mt-4">
			  <div class="member-info">
				<p class="member-heading"><?php echo $row['name'];?></p>
				 <p class="member-para"><?php echo $row['affiliation'];?></p>
				 
			  </div>
			  </div>
			  </div>
			  <div class="row">
			  <div class="col-lg-12 mt-4">
			  <b>Biography:</b>
			  <p align="justify"><?php echo $row['biography'];?>
		        </p>
			  </div>
			  </div>
			</div>
		  
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
    </div>
	</div>
  </div>-->
					 
 
                                     <?php } ?>	

                     
					</div> 
                  <hr class="invis">

                 
            </div> 
        </section> 
		<?php } ?>	
        </section>
        <!-- Speakers Page end -->