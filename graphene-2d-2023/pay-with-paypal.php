<?php
$price = $_GET['price'];
include('functions.php');
ob_start();
session_start();
$_SESSION['payment'];
$payment=$_SESSION['payment'];
$regplan= $_SESSION['amount'] + round($_SESSION['amount']*0.035);
$query=mysqli_query($db,"SELECT * FROM `home_banners` WHERE `status`='1'");
$bannerdata=mysqli_fetch_array($query);
$title=$bannerdata['title_tag'];
?>
<!doctype html>
 <html class="no-js " lang="en">  
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title><?php echo $main_title[0]; ?> <?php echo $main_title[1]; ?> | Registration</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
	
    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">
  <style>
 .bx{
	 box-shadow: 2px 2px 2px 2px #ccc;
 }
</style>
 
</head>
<body>  

    <!-- LOADER -->
   
   <?php include('header-inner.php');?>

        <section class="section db p100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Payment Summary</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Payment Summary</a></li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
<?php 
if(isset($_SESSION['post'])){
$payment_method = $_SESSION['payment'];
if($_SESSION['post']['payment']=='paypal')
{ 
$payment_method = 'paypal'; 
?>

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">
                    <div class="row blog-grid">
                        <div class="col-md-12">
                            <div class="course-box">
                               <div class="panel panel-default" style="margin-bottom: 0px;">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order Summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-bordered">
    						<thead>
                                <tr>
        							<td><strong>Sno</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Processing Fee</strong></td>
									<td class="text-center"><strong>Total Amount</strong></td>
        							</tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								<td>1</td>
    								<td class="text-center">$<?php echo $_SESSION['amount'];?></td>
    								<td class="text-center">$<?php echo round($_SESSION['amount']*0.035);?></td>
    								<td class="text-center">$<?php echo $regplan;?></td>
    							</tr>
                                
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
                            
                     </div>
                    </div><!-- end boxed -->
            </div><!-- end container -->
            </div><!-- end container -->
            </div><!-- end container -->
        </section>
<?php
include "setting.php";  
$paypalURL = 'https://www.paypal.com/cgi-bin/webscr'; //Live PayPal API URL
$paypalID = 'auragengroup@gmail.com';
//$paypalID = '@gmail.com';
$addr=$_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']);
$random_num = mt_rand(100000, 999999);
?>
<div align="center">
<form action="<?php echo $paypalURL; ?>" method="post"><input type="hidden" name="business" value="<?php echo $paypalID; ?>"><input type="hidden" name="cmd" value="_xclick"><input type="hidden" name="item_name" value="Conferences Registration for <?php echo $main_title[1]; ?>"><input type="hidden" name="item_number" value="<?php echo $random_num;?>"><input type="hidden" name="amount" value="<?php echo $regplan; ?>.00"><input type="hidden" name="currency_code" value="USD"><input type='hidden' name='notify_url' value='https://<?php echo $addr; ?>/ipn'><input type='hidden' name='cancel_return' value="https://<?php echo $addr; ?>/cancel"><input type='hidden' name='return' value="https://<?php echo $addr; ?>/success">
  <input type="submit" class="form-group btn btn-primary hvr-bounce-to-bottom" name="submit"  value="Click Here to Pay"></form>
  </div>
  <br>
<?php 
extract($_SESSION['post']);
  $sid=session_id();
  //$_SESSION['id']="$sid";
  //$query=mysqli_query($con1,"SELECT * FROM `home_banners` WHERE `status`='1' limit 1");
$bannerdata=mysqli_fetch_array($query);
$contitle=$bannerdata['second_title'];
$random_num = mt_rand(100000, 999999);
  /*$sts=mysqli_query($con1,"select * from tbl_registration where sess_id='$sid'");
 if(mysqli_num_rows($sts)==0){	
  }*/
 $sqlInsert="INSERT INTO `tbl_registration_tblstr_d`(`random_num`, `user`, `reg_title`, `reg_first_name`, `reg_second_name`, `reg_company`, `reg_plan`, `reg_city`, `reg_state`, `reg_country`, `reg_authors_email`, `reg_phone`, `reg_address`,`reg_conference_title`, `bill_title`, `bill_first_name`, `bill_company`, `bill_city`, `bill_state`, `bill_country`, `bill_authors_email`, `bill_phone`, `bill_address`, `reg_datetime`, `amt`, `sess_id`, `status`, `pay_from`, `pay_gate`, `institution`, `regtype`,`participants`) VALUES ('$random_num', '".$r3['username']."', '$regtitle','$regfname','$regsname','$regcompany','$regplan','$regcity','$regstate','$regcountry','$regauthors_email','$regphone','$regfull_postal_address','$contitle','$billtitle','$billfname','$billcompany','$billcity','$billstate','$billcountry','$billauthors_email','$billphone','$billfull_postal_address',now(),'$_SESSION[amount]','$sid','0','0','paypal','$institution','$regtype','$participants')" or die(mysqli_error($conn1));
if(mysqli_query($conn1,$sqlInsert))
	{
	//	echo " ";		
	}
	else {
      echo mysqli_error($conn1);
}
mysqli_close($conn1);
}
}
?> 
        <?php include('footer.php');?>

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
     
   </body>
</html>