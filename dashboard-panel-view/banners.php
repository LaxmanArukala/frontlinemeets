<?php
ob_start();
session_start();
include("inc/config.php");
if($_SESSION['sess_member']=="")
{
	header('location:index.php');
}
@$mem_id = @$_SESSION['sess_member']; 
@$id = @$_GET['id'];
//--------------------DELETE -----------------------		
					
			if($id!="")
			{
			        @$q_fres = mysqli_query($con,"select *from banners_tblstr_d where id='$id'");
					@$fres_rw = mysqli_fetch_assoc($q_fres);
					//-----------------------------
					@$d_photo = "photos/".$fres_rw['image'];					
					//-----------------------------
					unlink($d_photo);								
					//-----------------------------
					@$cms_del = "delete from banners_tblstr_d where id='$id'";
					@$del_res  =mysqli_query($con,$cms_del);
					header("location:banners.php");
			}	
			
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Conference Banners | Dashboard</title>

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
			     location.href="banners.php?id="+id;
			}
	}
	else
		{ 
		}
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
            <h1>Conference Banners</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Conference Banners</a></div>
             <!-- <div class="breadcrumb-item"> </div>-->
            </div>
          </div>
		  <div class="row">
		     <div class="col-md-6">&nbsp;
			 </div>
			 <div class="col-md-4">&nbsp;
			 </div>
             <div class="col-md-2">
			 
			 <a href="add-banner.php"  class="prs1 btn btn-icon icon-left btn-info">
			 
			 <b> <i class="fas fa-plus"></i>Add Banners</b></a>
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
                          <th>Conference Banners</th>
                          <th>Delete</th>
                        </tr>
						<?php
				$query  = "SELECT *FROM banners_tblstr_d WHERE user='".$_SESSION['sess_member']."' ORDER BY recordListingID ASC";
				$result = mysqli_query($con,$query);	
				$i=1;		
				if(mysqli_num_rows($result)>0)
				{	
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
				{
				?>
                        <tr>
                          <td><?php echo @$i; ?></td>
                          <td><?php  if($row['image']!="")  { ?> <img src="../uploads/photos/<?php echo $row['image']; ?>" border="0" align="absmiddle" width="300" height="130"/><?php  } else { echo ""; } ?></td>
                           
                          <td><a href="javascript:cmsdel('<?php echo @$row['id']; ?>')" class="prs1 btn btn-icon btn-danger"><i class="fas fa-trash"></i></a></td>
                           <?php 
				$i=$i+1; }  } else { ?>
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