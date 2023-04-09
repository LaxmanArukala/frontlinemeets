<?php 
include('inc/config.php');
include('call.php');
ob_start();
session_start();
$_SESSION['payment'];
$payment=$_SESSION['payment'];
$regplan= $_SESSION['amount'] + round($_SESSION['amount']*0.035);
$query=mysqli_query($db,"SELECT * FROM `home_banners` WHERE `status`='1'");
$bannerdata=mysqli_fetch_array($query);
$title=$bannerdata['title_tag'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> <?php echo $main_title[0]; ?> <?php echo $main_title[1]; ?> | Registration</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <style>
	th {
     text-align: center !important; 
        }
		</style>
  
 </head><!--/head-->

<body>
<?php include('header-inner.php');?>
  
  <section class="bgimage">
         <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <h1>Payment Summary</h1>
                 </div>
               </div>
         </div>
       </section>

  <!--================Hero Banner Area End =================-->
 

            <br> 
 
<!-- <p>Payment Gateway</p> -->
<?php 
if(isset($_SESSION['post'])){
$payment_method = $_SESSION['payment'];
if($_SESSION['post']['payment']=='paypal')
{ 
$payment_method = 'paypal'; 
?>

<div class="container">
<div class="row">
<div class="col-md-12">
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
    		</div>
    		</div>
<p></p>
<!--<span style="font-size:20px;"><b>Item: </b></span><span style="font-size:20px;">$ <?php echo $_SESSION['amount'];?></span><br>
<span style="font-size:20px;"><b>Processing Fee: </b></span><span style="font-size:20px;">$ <?php echo round($_SESSION['amount']*0.035);?></span><br>
<span style="font-size:20px;"><b>Total Amount:</b> </span><span style="font-size:20px;">$ <?php echo $regplan;?></span>-->
<?php
include "setting.php";  
$paypalURL = 'https://www.paypal.com/cgi-bin/webscr'; //Live PayPal API URL
$paypalID = 'auragengroup@gmail.com';
//$paypalID = '@gmail.com';
$addr=$_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']);
$random_num = mt_rand(100000, 999999);
?>
<div align="center">
<form action="<?php echo $paypalURL; ?>" method="post"><input type="hidden" name="business" value="<?php echo $paypalID; ?>"><input type="hidden" name="cmd" value="_xclick"><input type="hidden" name="item_name" value="Conferences Registration for <?php echo $main_title[1]; ?>"><input type="hidden" name="item_number" value="<?php echo $random_num;?>"><input type="hidden" name="amount" value="<?php echo $regplan; ?>.00"><input type="hidden" name="currency_code" value="USD"><input type='hidden' name='notify_url' value='http://<?php echo $addr; ?>/ipn.php'><input type='hidden' name='cancel_return' value="http://<?php echo $addr; ?>/cancel.php"><input type='hidden' name='return' value="http://<?php echo $addr; ?>/success.php">
  <input type="submit" class="form-group btn btn-primary hvr-bounce-to-bottom" name="submit"  value="Click Here to Pay"></form>
  </div>
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
 $sqlInsert="INSERT INTO `tbl_registration_tblstr_d`(`random_num`, `user`, `reg_title`, `reg_first_name`, `reg_second_name`, `reg_company`, `reg_plan`, `reg_city`, `reg_state`, `reg_country`, `reg_authors_email`, `reg_phone`, `reg_address`,`reg_conference_title`, `bill_title`, `bill_first_name`, `bill_company`, `bill_city`, `bill_state`, `bill_country`, `bill_authors_email`, `bill_phone`, `bill_address`, `reg_datetime`, `amt`, `sess_id`, `status`, `pay_from`, `pay_gate`, `institution`, `regtype`,`participants`) VALUES ('$random_num', '".$r3['username']."', '$regtitle','$regfname','$regsname','$regcompany','$regplan','$regcity','$regstate','$regcountry','$regauthors_email','$regphone','$regfull_postal_address','$contitle','$billtitle','$billfname','$billcompany','$billcity','$billstate','$billcountry','$billauthors_email','$billphone','$billfull_postal_address',now(),'$_SESSION[amount]','$sid','0','0','paypal','$institution','$regtype','$participants')" or die(mysqli_error($con1));
if(mysqli_query($con1,$sqlInsert))
	{
	//	echo " ";		
	}
	else {
      echo "Error: " . $sqlInsert . "<br>" . mysqli_error($con1);
}
mysqli_close($con1);
}
}
?> 
<p></p>
        
		<?php include("footer.php"); ?>
 
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script>
  $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
  </script>

    </body>
 
</html>