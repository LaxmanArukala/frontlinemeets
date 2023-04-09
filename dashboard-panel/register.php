<?php
session_start();
//$_SESSION['sess_member']=$_GET['id'];
//$_SESSION['cname']=$_GET['cname'];
$_SESSION['start'] = time(); // Taking now logged in time.
$_SESSION['expire'] = $_SESSION['start'] + (60 * 60);//ending tome of 1hr
include("inc/config.php");
if(!isset($_SESSION['cname']))
{
	header('location:index.php');
}
$q1_csp = "select day,date,sid from scientific_programme_tblstr_d where user='".$_SESSION['sess_member']."' and day='1' order by day ASC";
$csp_rs = mysqli_query($con,$q1_csp); 
				 
         while($row_q1 = mysqli_fetch_assoc($csp_rs))
		 {
			$_SESSION['day1date']= $row_q1['date'];
			$_SESSION['day1sid']= $row_q1['sid'];
					
		 }

?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard</title>

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
</head>

<body>
  <div id="app">
    <?php include('header.php');?>
    <?php include('sidemenu.php');?>
        <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            <div class="row">
            <div class="col-12">
                
                <div class="card">
                   <div class="card-body">
                    <div class="table-responsive">
                      <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
					  <div class="row">
					  <div class="col-sm-12 col-md-6">
					  <div class="dataTables_length" id="table-1_length">
					  <label>Show <select name="table-1_length" aria-controls="table-1" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="table-1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table-1"></label></div></div></div>
					  <div class="row">
					   
					   <a href="add-conference.php" style="text-decoration:underline; font-family:Verdana, Geneva, sans-serif; font-size:15px; color:#060"><strong>ADD CONFERENCE</strong></a>
					   <a href="logout.php" style="text-decoration:underline; font-family:Verdana, Geneva, sans-serif; font-size:16px; color:#060"><strong>LOGOUT</strong></a>
					  <div class="col-sm-12"><table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
                        <thead>                                 
                          <tr role="row"><th class="text-center sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="
                              #
                            : activate to sort column ascending" style="width: 24px;">
                              #
                            </th><th class="sorting_desc" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Task Name: activate to sort column ascending" aria-sort="descending" style="width: 148px;">UserName</th>
							<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Progress" style="width: 79px;">PassWord</th>
							<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Members" style="width: 208px;">Shortname</th>
							<th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Due Date: activate to sort column ascending" style="width: 89px;">Edit</th>
							<th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 108px;">Delete</th>
							 </tr>
                        </thead>
                       
                         
					   <tbody>                                 
                          <?php
                           $result = mysqli_query($con,"select * from login_details_tblstr_d");
                            $num=mysqli_num_rows($result);
                            $i=1;
                            while($row = mysqli_fetch_array($result)){
                            ?>
                          
                        <tr role="row" class="odd">
                            <td class="">
                              <?=$i;?>
                            </td>
                            <td class="sorting_1"><?=$row["username"]?></td>
                            
                            <td><?=$row["password"]?></td>
                            <td><?=$row["ConfName"]?></td>
                            <td><a href="add-conference.php?id=<?=$row["id"]?>">Edit</a></td>
                            <td><a href="deleteConf.php?id=<?=$row["id"]?>">Delete</a></td>
                          </tr>
						  <?php
                            $i++; }
                             ?>
						  </tbody>
                      </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="table-1_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries (filtered from 4 total entries)</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="table-1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="table-1_previous"><a href="#" aria-controls="table-1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="table-1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="table-1_next"><a href="#" aria-controls="table-1" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
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
  <script src="assets/js/page/index.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
  
   
</body>
 
</html>