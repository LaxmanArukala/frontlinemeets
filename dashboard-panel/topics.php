<?php
ob_start();
session_start();
include("inc/config.php");
if($_SESSION['sess_member']=="")
{
	header('location:index.php');
}
@$mem_id = @$_SESSION['sess_member']; 
@$track_id = @$_GET['track_id'];
//--------------------DELETE -----------------------		
					
			if($track_id!="")
			{
			       // @$q_fres = mysqli_query($con,"select *from topics_tblstr_d where track_id='$track_id'");
					// @$fres_rw = mysqli_fetch_assoc($q_fres);
					//-----------------------------
					//@$d_photo = "photos/".@$fres_rw['photo'];					
					//-----------------------------
					//unlink($d_photo);								
					//-----------------------------
					@$cms_del = "delete from topics_tblstr_d where track_id='$track_id'";
					@$del_res  =mysqli_query($con,$cms_del);
					header("location:topics.php");
			}	
			
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Sessions | Dashboard</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <script type="text/javascript">
function cmsdel(id)
{		
    var stat = confirm("Are you sure you want to delete ?");	
	if(stat!="")
	{
			if(id!="")
			{
			     location.href="topics.php?track_id="+track_id;
			}
	}
	else
		{ 
		}
}
</script>
<script>
function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}
</script>  
</head>

<body>

  <div id="app">
    <?php include('header.php');?>
    <?php include('sidemenu.php');?>
        <!-- Main Content -->
      <div class="main-content">
        <section class="section">
           <div class="section-header">
            <h1>Sessions</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Sessions</a></div>
              <div class="breadcrumb-item"><a href="#">Sessions</a></div>
             <!-- <div class="breadcrumb-item"> </div>-->
            </div>
          </div>
		  <div class="row">
		     <div class="col-md-6">&nbsp;
			 </div>
			 <div class="col-md-4">&nbsp;
			 </div>
             <div class="col-md-2">
			 
			 <a href="add-sessions.php"  class="prs1 btn btn-icon icon-left btn-info">
			 
			 <b> <i class="fas fa-plus"></i>Add Sessions</b></a>
			 </div>
			 </div>
			 <br>
          <div class="row">
             <div class="col-12 mb-4">
                <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <tr>
                          <th>Sno</th>
                          <th>Session Name</th>
                           <th>Edit</th>
                          <th>Delete</th>
                        </tr>
						<?php 
				$query  = "SELECT *FROM topics_tblstr_d WHERE user='".$_SESSION['sess_member']."' order by track_id ASC";
				$result = mysqli_query($con,$query);	
				$i=1;		
				if(mysqli_num_rows($result)>0)
				{	
				while($row=mysqli_fetch_array($result)){
				{
				?>
                        <tr>
                          <td><?php echo @$i; ?></td>
                          <td><?php echo @$row['track_name']; ?></td>
                            
                          <td><a href="add-sessions.php?track_id=<?php echo @$row['track_id']; ?>" class="prs1 btn btn-icon btn-primary"><i class="far fa-edit"></i></a></td>
						  <td><a onclick='javascript:confirmationDelete($(this));return false;' href="delete.php?track_id=<?php echo @$row['track_id'];  ?>" class="prs1 btn btn-icon btn-danger"><i class="fas fa-trash"></i> </a></td>
                          <!--<td><a href="javascript:cmsdel('<?php echo @$row['track_id']; ?>')" class="prs1 btn btn-icon btn-danger"><i class="fas fa-trash"></i></a></td>-->
                           <?php 
				$i=$i+1; } } } else { ?>
				<td><font color="#FF0000">No records</font></td>
				<?php } ?>
                        </tr>
						 
                      </table>
                    </div>
                  </div>
              </div>
          </div>
         
        </section>
      </div>
      <?php include('footer.php');?>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="assets/modules/jquery.sparkline.min.js"></script>
  <script src="assets/modules/chart.min.js"></script>
  <script src="assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="assets/modules/summernote/summernote-bs4.js"></script>
  <script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
 
</html>