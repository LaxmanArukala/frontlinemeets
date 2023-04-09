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
			        @$q_fres = mysqli_query($con,"select *from benefits_pub_tblstr_d where id='$id'");
					@$fres_rw = mysqli_fetch_assoc($q_fres);
					//-----------------------------
					//@$d_photo = "../uploads/journals/".@$fres_rw['photo'];					
					//-----------------------------
					unlink($d_photo);								
					//-----------------------------
					@$cms_del = "delete from benefits_pub_tblstr_d where id='$id'";
					@$del_res  =mysqli_query($con,$cms_del);
					header("location:benefits-of-publications.php");
			}	
			
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Benefits of Publications | Dashboard</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">


<script type="text/javascript" src="assets/move/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="assets/move/jquery-ui-1.7.1.custom.min.js"></script>
  
  <script type="text/javascript">
$(document).ready(function(){ 
						   
	$(function() {
		$("#contentLeft ul").sortable({ opacity: 0.6, cursor: 'move', update: function() {
			var order = $(this).sortable("serialize") + '&action=updateRecordsListings'; 
		//	$.post("updateDB_sup.php", order, function(theResponse){
				$("#contentRight").html(theResponse);
			}); 															 
		}								  
		});
	});

});	
</script>

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
			     location.href="benefits-of-publications.php?id="+id;
			}
	}
	else
		{ 
		}
}
</script>  

<style>
.table td, .table:not(.table-bordered) th {
    border-top: none;
    width: 127px;
}
</style>
</head>

<body>

  <div id="app">
    <?php include('header.php');?>
    <?php include('sidemenu.php');?>
        <!-- Main Content -->
      <div class="main-content">
        <section class="section">
           <div class="section-header">
            <h1>Benefits of Publications</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Benefits of Publications</a></div>
             <!-- <div class="breadcrumb-item"> </div>-->
            </div>
          </div>
		  <div class="row">
		     <div class="col-md-6">&nbsp;
			 </div>
			 <div class="col-md-4">&nbsp;
			 </div>
             <div class="col-md-2">
			 
			 <a href="add-benefits-of-publications.php"  class="prs1 btn btn-icon icon-left btn-info">
			 
			 <b> <i class="fas fa-plus"></i>Add  Benefits of Publications</b></a>
			 </div>
			 </div>
			 <br>
          <div class="row">
             <div class="col-12 mb-4">
                 <div class="card-body p-0">
				 <div id="contentWrap">
                   <div id="contentLeft">
                     <ul style="list-style:none"><li>
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <tr>
                          <th>Sno</th>
                          <th>Name</th>
                          <!--<th>Journal Pic</th>-->
                          <th>Field 1</th>
                          <th>Field 2</th>
                          <th>Field 3</th>
                          <th>Field 4</th>
                          <th>Field 5</th>
                          <th>Field 6</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr></table></div></li></ul>
						</div>
						</div>
						<div id="contentWrap">
  <div id="contentLeft">
    <ul style="list-style:none">
						<?php
				$query  = "SELECT *FROM benefits_pub_tblstr_d WHERE user='".$_SESSION['sess_member']."' ORDER BY recordListingID ASC";
				$result = mysqli_query($con,$query);	
				$i=1;		
				if(mysqli_num_rows($result)>0)
				{	
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
				{
				?>
                       <li id="recordsArray_<?php echo $row['id']; ?>">
				<div class="table-responsive">
                        <table class="table table-striped table-md">
                      
						<tr>
                          <td><?php echo @$i; ?></td>
                          <td><?php echo @$row['name']; ?></td>
                          <!--<td><?php  if(@$row['photo']!="")  { ?> <img src="../uploads/journals/<?php echo @$row['photo']; ?>" class="img-circle" width="50" height="50"/><?php  } else { echo ""; } ?></td>-->
                          
                          <td><?php echo @$row['field1']; ?></td>
                          <td><?php echo @$row['field2']; ?></td>
                          <td><?php echo @$row['field3']; ?></td>
                          <td><?php echo @$row['field4']; ?></td>
                          <td><?php echo @$row['field5']; ?></td>
                          <td><?php echo @$row['field6']; ?></td>
                          <td><a href="add-benefits-of-publications.php?id=<?php echo @$row['id']; ?>" class="prs1 btn btn-icon btn-primary"><i class="far fa-edit"></i></a></td>
                          <td><a href="javascript:cmsdel('<?php echo @$row['id']; ?>')" class="prs1 btn btn-icon btn-danger"><i class="fas fa-trash"></i></a></td>
						  </tr></table></div></li> 
                           <?php 
				$i=$i+1; }  } else { ?>
				<td><font color="#FF0000">No records</font></td>
				<?php } ?>
                        
                    </ul></div>
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