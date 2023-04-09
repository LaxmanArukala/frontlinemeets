
<?php 
session_start();
include("comadmin/config.php");
if(isset($_POST['submit']))
{
 			$_SESSION['title']=$_POST['title'];
 			$_SESSION['fname']=$_POST['fname'];
 			$_SESSION['lname']=$_POST['lname'];
 			$_SESSION['email']=$_POST['email'];
 			$_SESSION['ucat']=$_POST['ucat'];
 			$_SESSION['dept']=$_POST['dept'];
 			$_SESSION['journal']=$_POST['journal'];
 			$_SESSION['question']=$_POST['question'];
			
 		@$secure_code = @$_POST['captcha'];
		if($_SESSION['captcha'] == $secure_code)
		{	
 			$title=$_POST['title'];
 			$fname=$_POST['fname'];
 			$lname=$_POST['lname'];
 			$email=$_POST['email'];
 			$ucat=$_POST['ucat'];
 			$dept=$_POST['dept'];
 			$journal=$_POST['journal'];
 			$question=$_POST['question'];
 
 		   $recipientbody ='<table cellspacing=0 width=100% border=0 style="border:2px solid #0072bc;">
		                       <tr><td><strong>Title:</strong> '.$_POST['title'].'</td></tr>
				               <tr><td><strong>First name:</strong> '.$_POST['fname'].'</td></tr>
				               <tr><td><strong>Last name:</strong> '.$_POST['lname'].'</td></tr>
							   <tr><td><strong>User Category:</strong> '.$_POST['ucat'].'</td></tr>
							   <tr><td><strong>Department:</strong> '.$_POST['dept'].'</td></tr>
							   <tr><td><strong>Email:</strong> '.$_POST['email'].'</td></tr>
							   <tr><td><strong>Journal/Conference Name:</strong> '.$_POST['journal'].'</td></tr>
							   <tr><td><strong>Question:</strong> '.$_POST['question'].'</td></tr>
							   <tr><td>Thanks & Regards</td></tr>				 		 
				               <tr><td style="color:#009900">'.$_POST['title'].'&nbsp;'.$_POST['fname'].'&nbsp;'.$_POST['lname'].'</td></tr>
				           </table>';
           
		   $tocontactbody='<table cellspacing=0 width=100% border=0 style="border:2px solid #0072bc;">
				               <tr><td>'.$_POST['title'].'.'.ucwords($_POST['fname']).'&nbsp;'.ucwords($_POST['lname']).'</td></tr>
				               <tr><td>&nbsp;</td></tr>
				               <tr><td>Thank you for contacting OMICS Group.<br><br>Your query is very important to us, hence the concern department will get back to you as soon as possible. In the meantime please feel free to browse through our website.</td></tr> 
							   <tr><td>&nbsp;</td></tr>
				               <tr><td style="color:#009900">Thanks & Regards</td></tr>
				               <tr><td style="color:#009900">Yours sincerely</td></tr>				 
				               <tr><td style="color:#009900">OMICS Group.<br>
							   <a href="http://omicsonline.org">http://www.omicsonline.org</a> <br /></td></tr>
				               </table>';
 //==================================================================================================			
            $to= "$email";
            $rsubject ="Contact Form has been Received from : ".$_POST['fname']." ".$_POST['lname'];
            $toauthorsubject="Thank you for Contacting OMICS Group";
			
            $mailheader1 = "From: $email\r\n"; 
            $mailheader1 .= "Reply-To: $email\r\n"; 
            $mailheader1 .= "Content-type: text/html; charset=iso-8859-1\r\n";
//==================================================================================================
  $mailheader2 = "From: OMICS PUBLISHING GROUP < $from >\n"; 
            $mailheader2 .= "Reply-To: OMICS PUBLISHING GROUP < $from >\n"; 
            $mailheader2 .= "Content-type: text/html; charset=iso-8859-1\r\n";
			//====================================
            mail($recipient, $rsubject, $recipientbody,$mailheader1) or die("Failure!");
            $mail=mail($to, $toauthorsubject, $tocontactbody,$mailheader2) or die("Failure!");
         
		   if($mail)
			{
			  @$msg="Thank you for Contacting OMICS Group.We will get back to you soon...";

			  $_SESSION['title']="";
              $_SESSION['fname']="";
              $_SESSION['lname']="";
              $_SESSION['email']="";
              $_SESSION['ucat']="";
              $_SESSION['dept']="";
              $_SESSION['journal']="";
              $_SESSION['question']="";
			  session_destroy();
			}
		}
		else
		{
			@$alert = "<font color='red'>You have entered the wrong spam protection field. try again</font>";
		}
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Global Cancer Science Summit-2014</title>
  	<meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
<!--    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
-->    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/script.js"></script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
<script type="text/javascript">
 
		<!--<script src="Scripts/jquery-1.6.min.js" type="text/javascript"></script>-->
        <script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
        <script>
            jQuery(document).ready( function() {
                // binds form submission and fields to the validation engine
                jQuery("#formID").validationEngine();
            });

function Reload () {

var f = document.getElementById('captcha');

f.src = f.src;

}

</script>
</head>
<body>
<!-- Header -->
<?php include("header-contact.html"); ?>
<!-- Content -->
<section id="content">
<div align="center">
<table width="1024" cellpadding="0" cellspacing="0" align="center">
<tr>
<td width="751" align="left">
<article class="grid_6 omega">
                  
				<form name="form1" method="post" action="" id="formID">
	<table width="740" border="0" align="left"  cellpadding="0" cellspacing="0" >

	 <?php if(!@$msg) { ?>
     <tr>
        <td  >
		<strong>OMICS Group welcomes your comments, ideas, support, and other feedback</strong>	
		<br />
		<br />
		Our goal is to provide friendly and responsive support. Choose from the following contact list below for the specific team to handle your needs. We value feedback from our customers and are committed to providing you with our very best in customer service.<br />
		<br />
 If you have any questions, please fill out the form and a customer service representative will reply to your inquiry within 24 hours.<br />
 <br /></td>
      </tr>
	  <?php } else { ?>
	  <tr><td align="center" style="border:1px dashed #009900; color:#009900; padding:10px;" >
	  <img src="images/logo.png" width="129" height="66" align="middle" /><strong><?php echo ucwords($fname).'&nbsp;'.ucwords($lname).'&nbsp;&nbsp;'.@$msg; ?></strong></td></tr>
	  <?php } ?>
      <tr>
        <td >
		<table width="725" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #f2f2f4; border-collapse:collapse;">
  <tr>
    <td colspan="2" bgcolor="EAEAEA" style="padding:6px;"><strong style="font-family:Arial, Helvetica, sans-serif; color:#555555; font-size:14px;">Contact Form</strong></td>
    </tr>
	<tr>
    <td width="216" style="padding-left:8px; padding-top:18px; padding-bottom:20px;"><span ><strong>Select Your Title :</strong></span> <span class="style1">*</span></td>
    <td width="507" style="padding-left:10px;" valign="middle">
	<select name="title" id="title" class="validate[required]" style="width:362px; color:#000000;" >
          <option value="">-- Please select --</option>
         <option value="Mr"> Mr</option>
        <option value="Mrs">Mrs</option>
		<option value="Ms">Ms</option>
		<option value="Miss">Miss</option>
        <option value="Dr">Dr</option>
		<option value="Prof">Prof</option>
        </select>	</td>
  </tr>
  <tr>
    <td width="216" style="padding-left:8px; padding-top:18px; padding-bottom:20px;"><span ><strong>First Name :</strong></span> <span class="style1">*</span></td>
    <td width="507" style="padding-left:10px;" valign="middle"><input value="<?php echo @$_SESSION['fname']; ?>" class="validate[required,custom[onlyLetterSp]] text-input" type="text" name="fname" id="fname" style="width:360px;" /></td>
  </tr>
  <tr>
    <td style="padding-left:8px; padding-top:18px; padding-bottom:20px;"><span ><strong>Last Name :</strong></span> <span class="style1">*</span></td>
    <td style="padding-left:10px;" valign="middle"><input value="<?php echo @$_SESSION['lname']; ?>" class="validate[required,custom[onlyLetterSp]] text-input" type="text" name="lname" id="lname" style="width:360px;" /></td>
  </tr>
  <tr>
    <td style="padding-left:8px; padding-top:18px; padding-bottom:20px;"><span ><strong>Email Address:</strong></span> <span class="style1">*</span></td>
    <td style="padding-left:10px;" valign="middle"><input value="<?php echo @$_SESSION['email']; ?>" class="validate[required,custom[email]] text-input" type="text" name="email" id="email" style="width:360px;" /></td>
  </tr>
  <tr>
    <td style="padding-left:8px; padding-top:18px; padding-bottom:20px;"><font ><strong> User category :</strong></font><span class="style1">*</span></td>
    <td style="padding-left:10px;" valign="middle">
	<select name="ucat" id="ucat" class="validate[required]" style="width:362px; color:#000000;" >
          <option value="">-- Please select --</option>
          <option value="Professor">Professor</option>
          <option value="Student">Student</option>
          <option value="Researcher">Researcher</option>
          <option value="Medical professional/Practitioner">Medical professional/Practitioner</option>
          <option value="Librarian">Librarian</option>
          <option value="Sponsorship">Sponsorship</option>
          <option value="Publisher/Journalist">Publisher/Journalist</option>
          <option value="Reprints agent/Bookseller">Reprints agent/Bookseller</option>
          <option value="Other">Other</option>
        </select></td>
  </tr>
 
 
  <tr>
    <td style="padding-left:8px; padding-top:18px; padding-bottom:20px;"><span ><strong>  Your question :</strong></span> <span class="style1">*</span></td>
    <td style="padding-left:10px;" valign="middle"><textarea class="validate[required] text-input" rows="3" cols="43" name="question" id="question" ><?php echo @$_SESSION['question']; ?></textarea></td>
  </tr>
  <tr>
    <td style="padding-left:8px; padding-top:18px; padding-bottom:20px;"><span ><strong>  Anti spam code:</strong></span> <span class="style1">*</span><br /></td>
    <td style="padding-left:10px;"><table width="414" cellpadding="1" cellspacing="1" style="border:0px dashed #ccc; padding-left:10px;">
        <tr>
          <td class="headtext" colspan="3"><span >(Type in the 3 black color code displayed below)</span></td>
        </tr>
        <tr>
          <td width="70" align="right" valign="top"><iframe id="captcha" height=30px align=right width=70px frameborder=0 marginwidth=0 marginheight=0 scrolling=no src="captcha.php"></iframe></td>
		  <td width="42" align="center" valign="top"><a  href="javascript:Reload()" style="font-size:11px; font-weight:bold;"><img src="images/refresh.jpg" width="28" height="25" border="0" alt="Refresf captcha" title="Reload Captcha"/></a></td>
		  <td width="290">
            <input type="text" name="captcha" id="captcha" maxlength="3" style="border:1px solid #004080; color:#000000; font-weight:bold; font-size:14px; text-align:center; height:22px; background-color:#DFEFFF; width:50px;" class="validate[required] text-input">            
            <div align="left">&nbsp;&nbsp;<?php echo @$alert; ?></div>
            <div align="center"></div></td>
        </tr>
        <tr>
          <td align="right"></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td colspan="2" style="padding-right:45px; padding-bottom:20px; padding-left:220px;" align="left">
	<input type="hidden" name="submit" value="true" /><input type="image" src="http://www.omicsonline.org/images/con-submit.png"  name="submit" value="true"/>	</td>
    </tr>
	
</table>		</td>
      </tr>
    </table>
	</form>
                 
              
</td>
   <td width="271" valign="top"><?php include("address-inc.html"); ?></td>
</tr>
</table>
</div>
</section>
<!-- Footer -->
<?php include("footer.html"); ?>
</body>
</html>