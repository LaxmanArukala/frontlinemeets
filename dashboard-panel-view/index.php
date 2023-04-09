<?php
session_start();
include('inc/config.php');
if(isset($_POST['submit']))
{
	$username=$_POST['uname'];
	$pwd=$_POST['pwd'];

	$rec_result=mysqli_query($con,"select * from login_details_tblstr_d where username='$username' AND password='$pwd'");
    
		
	$row = mysqli_fetch_array($rec_result);
	if(mysqli_num_rows($rec_result)>0)
	{
		$_SESSION['cname']=$_POST['uname'];
		$_SESSION['sess_member']=$row['id'];
		//header('Location: home.php', true);
		if($_SESSION['cname']=='%8!bnwz$@'){ 
					   	echo "<script>window.top.location='register'</script>";
					   }
					   else{
					    echo "<script>window.top.location='home'</script>";   
					   }
					  
		//echo "<script>window.top.location='home.php'</script>";
	}
	else
	{

  	  $msg = "Invalid username or password";

	}
}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<style class="cp-pen-styles">@import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300);

</style></head><body>
        <!-- LOGIN MODULE -->
        <div class="login">
            <div class="wrap">
                <!-- TOGGLE -->
                <div id="toggle-wrap">
                    <div id="toggle-terms">
                        <div id="cross">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <!-- TERMS -->
                <!-- SLIDER -->
                <div class="content">
                   
                    <!-- LOGO -->
                    <!-- SLIDESHOW -->
                    <div id="slideshow">
                        <div class="one">
                           <!-- <h2> <img src="assets/img/ .png" class="img-responsive" style="width:380px;"> 
							 </h2>-->
							 <h2><br><span style="font-weight: bold;">Welcome To 
                              <br><br>Dashboard <br>
                             </span><br></h2>  
                           
                        </div>
                         
                    </div>
                </div>
                <!-- LOGIN FORM -->
                <div class="user">
                    <!-- ACTIONS
                    <div class="actions">
                        <a class="help" href="#signup-tab-content">Sign Up</a><a class="faq" href="#login-tab-content">Login</a>
                    </div>
                    -->
                    <div class="form-wrap">
                        <!-- TABS -->
                    	<div class="tabs">
                            <h3 class="login-tab"><a class="log-in active" href="#login-tab-content"><span>Login<span></a></h3>
                    		 </div>
                        <!-- TABS CONTENT -->
                    	<div class="tabs-content">
                            <!-- TABS CONTENT LOGIN -->
                    		<div id="login-tab-content" class="active">
                    		<form method="post" id="login_form" name="myFormLogin">
                    		    <?php if($msg!=""){?><div id="msgbox" style="padding:6px;font-size:12px; background:#000000; font-family:Arial, Helvetica, sans-serif; color:#FF0000;" align="center" class="text">Invalid UserName or Password...</div><?php } ?>
                    				<input type="text" class="input" name="uname" id="uname"  placeholder="Username">
                    				<input type="password" class="input" name="pwd" id="pwd"  placeholder="Password">
                    				<input type="submit" name="submit"  class="button" value="Login">
                    			</form>
                    			 
                    		</div>
                            <!-- TABS CONTENT SIGNUP -->
                    		 
                    	</div>
                	</div>
                </div>
            </div>
        </div>

<script src=''></script>
<script src='login.js'></script>
 
</body>
</html>