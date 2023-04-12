<!-- Speakers page -->
<section class="section gb nopadtop">
             <?php                  
		include("config/config.php"); 
    
		include("functions.php");	
    // plenary_speakers_tblstr_d
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
        <!-- Speakers Page End -->