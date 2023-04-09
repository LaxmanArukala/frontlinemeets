<?php include("inc/acs_cn.php");
session_start();
include("inc/cn.php");

 //@$cn = mysql_connect("205.178.146.108", "electronics2013","Electronics2013"); 
 //if(!@$cn){die("Could not connect to MySQL");}
// mysql_select_db("electronics2013",@$cn) or die ("could not open db".mysql_error());

if(isset($_POST['submit']))
{
 			$_SESSION['title']=$_POST['title'];
			$_SESSION['fname']=$_POST['fname'];
			$_SESSION['lname']=$_POST['lname'];
			$_SESSION['country']=$_POST['country'];
			$_SESSION['email']=$_POST['email'];
			$_SESSION['phno']=$_POST['phno'];
			$_SESSION['category']=$_POST['category'];
			$_SESSION['track_name']=$_POST['track_name'];
			$_SESSION['address']=$_POST['address'];
			
			@$ipaddress=$_SERVER['REMOTE_ADDR'];
 			
			@$email=$_POST['email'];
 						
 		@$secure_code = @$_POST['captcha'];
		if($_SESSION['captcha'] == $secure_code)
		{
		    @$insert_result=mysql_query("insert into abstract_submission(title,fname,lname,country,email,phno,category,track_name,address,date,ipaddress) values('".$_SESSION['title']."','".$_SESSION['fname']."','".$_SESSION['lname']."','".$_SESSION['country']."','".$_SESSION['email']."','".$_SESSION['phno']."','".$_SESSION['category']."','".$_SESSION['track_name']."','".$_SESSION['address']."',now(),'$ipaddress')");
			
			@$ins_id = mysql_insert_id();
			@$uploaddir = "uploads/";
			@$pic1name1 = $_FILES['uploadfile']['name'];
			if($pic1name1 != "")
			{
					@$pic1arr1 = explode(".",$pic1name1);
					@$pic1new1 = @$ins_id."-Abstract.".$pic1arr1[count($pic1arr1)-1];
					move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploaddir.$pic1new1);
					@$sqlqq="update abstract_submission set attachment='$pic1new1' where sno='$ins_id'";
					@$resqq=mysql_query($sqlqq) or die(mysql_error());					
			}
			chmod("uploads/".@$pic1new1,0777);
			//-----------------------------------
			
					
		    @$fileatt_name = @$pic1new1; // Filename that will be used for the file as the attachment
            @$fileatt = 'uploads/'.$pic1new1; // Path to the file location in server
            //move_uploaded_file($_FILES['uploadfile']['tmp_name'], @$fileatt);
            @$fileatt_type = $_FILES['uploadfile']['type'];  //File Type
            @$file = fopen($fileatt,'rb');
            @$data = fread($file,filesize($fileatt));
            fclose(@$file);
            @$semi_rand = md5(time());
            @$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";     
			
           @$recipientbody ="Title : ".$_POST['title']." ".$_POST['fname']."\nCountry : ".$_POST['country']."\nE-mail : ".$_POST['email']."\nPhone Number : ".$_POST['phno']."\nAbstract Category : ".$_POST['category']."\nTrack Name : ".$_POST['track_name']."\nAddress : ".$_POST['address'];
           
		   $topostpersonbody='<table cellspacing=0 width=100% border=0 style="border:2px solid #0072bc;">
				               <tr><td>'.ucwords($_POST['fname']).'</td></tr>
				               <tr><td>&nbsp;</td></tr>
				               <tr><td>Thank you for Submitting Abstract for Global Cancer Summit.<br><br>Your Abstract is very important to us, hence the concern department will get back to you as soon as possible.</td></tr> 
							   <tr><td>&nbsp;</td></tr>
				               <tr><td style="color:#009900">With Best Wishes</td></tr>
				               <a href="http://omicsonline.org/international-scientific-conferences/">OMICS Group Conferences</a> <br /></td></tr>
				              
							   
				               </table>';
//==================================================================================================				 
 $recipient ="cancersummit2014@omicsonline.net"; 
//==================================================================================================			
            $to= "$email";
            $rsubject ="Abstract has been Received from : ".$_POST['title']." ".$_POST['fname']." ".$_POST['lname'];
            $topostperson="Thank you for submit the abstract to OMICS Publishing Group";
			
            $mailheader1 = "From: ".$email;
            $mailheader1 .= "\nMIME-Version: 1.0\n" .

              "Content-Type: multipart/mixed;\n" .

              " boundary=\"{$mime_boundary}\"";

$recipientbody = "This is a multi-part message in MIME format.\n\n" .

             "--{$mime_boundary}\n" .

             "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .

             "Content-Transfer-Encoding: 7bit\n\n" .

             $recipientbody . "\n\n";


             $data = chunk_split(base64_encode($data));

$recipientbody .= "--{$mime_boundary}\n" .

              "Content-Type: {$fileatt_type};\n" .

              " name=\"{$fileatt_name}\"\n" .

              //"Content-Disposition: attachment;\n" .

              //" filename=\"{$fileatt_name}\"\n" .

              "Content-Transfer-Encoding: base64\n\n" .

              @$data . "\n\n" .

              "--{$mime_boundary}--\n";
			  
			 
            @$mailheader2 = "From: OMICS PUBLISHING GROUP < $ConferenceEmail1 >\n"; 
            @$mailheader2 .= "Reply-To: OMICS PUBLISHING GROUP < $from >\n"; 
            @$mailheader2 .= "Content-type: text/html; charset=iso-8859-1\r\n";
			//====================================
            mail($recipient, $rsubject, $recipientbody,$mailheader1) or die("Failure!");
            @$mail=mail($to, $topostperson, $topostpersonbody,$mailheader2) or die("Failure!");
         
		   if($mail)
			{
			@$msg="Thank you for submitting Abstract to Global Cancer Summit 2014. We will get back to you soon...";
 			$_SESSION['title']="";
			$_SESSION['fname']="";
			$_SESSION['lname']="";
			$_SESSION['country']="";
			$_SESSION['email']="";
			$_SESSION['phno']="";
			$_SESSION['category']="";
			$_SESSION['track_name']="";
			$_SESSION['address']="";
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

function Reload () {

var f = document.getElementById('captcha');

f.src = f.src;

}

function validate_file(id,ext)
{
 if(validateExtension(ext) == false)
 {
  alert("only upload TXT, DOC, RTF, pdf files");
  document.getElementById("validatefile").innerHTML = "<input id='uploadfile' name='uploadfile' type='file' onChange='validate_file(this.id,this.value)'>";
   document.getElementById("uploadfile").focus();
  return;
  }
 }
 
function validateExtension(v)
{
 var allowedExtensions = new Array("doc","txt","rtf","pdf");
 for(var ct=0;ct<allowedExtensions.length;ct++)
 {
  sample = v.lastIndexOf(allowedExtensions[ct]);
  if(sample != -1){return true;}
  }
 return false;
 }
 
function validate()
{
f=document.postform;
if(f.title.value=="Select Any")
{
alert("Please select any Title");
f.title.focus();
return false;
}
else
if(f.fname.value=="")
{
alert("Please Enter First Name");
f.fname.focus();
return false;
}
else
if(f.country.value=="")
{
alert("Please enter country");
f.country.focus();
return false;
}
else
if(f.email.value=="")
{
alert("Please enter your Email");
f.email.focus();
return false;
}
//Check if email is a valid E-mail id.
	var id = document.postform.email.value;
	//The regular expression for a valid e-mail address
	var re = /^.+\@.+\..{2,4}$/gi; 
	if(!id.match(re)) { //If it is NOT a match
		//flag++;
		//errors = errors + "Invalid E-Mail\n";
		alert("Invalid Email");
		document.postform.email.focus();
		return false;
	}
else 
if(f.phno.value=="")
{
alert("Please Enter Phone Number");
return false;
}
else
if(f.category.value=="Select Category")
{
alert("Please enter abstract category");
f.category.focus();
return false;
}
else 
if(f.track_name.value=="")
{
alert("Please Enter Track Name");
f.track_name.focus();
return false;
}
else
if(f.address.value=="")
{
alert("Please enter full postal address");
f.address.focus();
return false;
}
else
 if(document.postform.uploadfile.value=="")
 {
  alert("Browse the Attachment");
  document.postform.uploadfile.focus();
  return false
 }
 return true;
}
 
</script>
</head>
<body>
<!-- Header -->
<?php include("header.html"); ?>
<!-- Content -->
<section id="content">
<div align="center">
<table width="1024" cellpadding="0" cellspacing="0" align="center">
<tr>
<td width="1024" align="center">
<article class="grid_6 omega">
                    <div style="margin:20px"></div>
				<form name="postform" method="post" action="" enctype="multipart/form-data" onSubmit="return validate()">
				<table width="542" cellpadding="0" cellspacing="0" align="center">
                 <?php if(@$msg!="") { ?>
                  <tr>
                    <td colspan="2" align="center" class="smalltext" style="color:#006600; border:1px solid #006600; border-radius:6px;"><img src="http://www.omicsgroup.com/conferences/conferencepages/images/omicslogo.jpg" align="absmiddle" />&nbsp;&nbsp;<strong> <?php echo @$msg; ?></strong></td>
                  </tr>
				  <?php } ?>
                  <tr>
                    <td colspan="2" align="justify" class="smalltext" style="text-align:justify;">&nbsp;</td>
                  </tr>
				  <tr>
                    <td width="224" align="left">Title: <span class="style1">*</span></td>
                    <td width="316" align="left">
	<select name="title">
	<?php if($_SESSION['title']=="") { ?>
      <option selected="selected"  style="width:100px;" value="Select Any">Select Any</option>
	 <?php } else { ?>
	  <option selected="selected"  style="width:100px;" value="<?php echo $_SESSION['title']; ?>"><?php echo $_SESSION['title']; ?></option>
	 <?php } ?>
      <option value="Mr">Mr</option>
      <option value="Ms">Ms</option>
      <option value="Mrs">Mrs</option>
      <option value="Prof">Prof</option>
      <option value="Dr">Dr</option>
      <option value="Assist Prof Dr">Assist Prof Dr</option>
      <option value="Assoc Prof Dr">Assoc Prof Dr</option>
    </select>					</td>
                    </tr>
					<tr>
					  <td align="left">&nbsp;</td>
					  <td align="left">&nbsp;</td>
				  </tr>
					<tr>
                    <td width="224" align="left"><font class="smalltext">First Name:</font> <span class="style1">*</span></td>
                    <td width="316" align="left">
					<input value="<?php echo @$_SESSION['fname']; ?>"  type="text" name="fname" style="width:220px;" /></td>
                    </tr>
					<tr>
					  <td align="left">&nbsp;</td>
					  <td align="left">&nbsp;</td>
				  </tr>
					<tr>
                    <td width="224" align="left">Last Name:</td>
                    <td width="316" align="left">
					<input value="<?php echo @$_SESSION['lname']; ?>"  type="text" name="lname" style="width:220px;" /></td>
                    </tr>
					<tr>
					  <td align="left">&nbsp;</td>
					  <td align="left">&nbsp;</td>
				  </tr>
					<tr>
                    <td width="224" align="left">Country: <span class="style1">*</span></td>
                    <td width="316" align="left">
					<input value="<?php echo @$_SESSION['country']; ?>"  type="text" name="country" style="width:220px;" /></td>
                    </tr>
                              
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                    </tr>
                    <tr>
                    <td width="224" align="left">Author's Email: <span class="style1">*</span></td>
                    <td width="316" align="left">
					<input value="<?php echo @$_SESSION['email']; ?>"  type="text" name="email" style="width:220px;" /></td>
                    </tr>
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                    </tr>
                    <tr>
                    <td align="left">Phone Number: <span class="style1">*</span></td>
                    <td align="left">
					<input value="<?php echo @$_SESSION['phno']; ?>" type="text" name="phno" style="width:220px;" /></td>
                  </tr>
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                    </tr>
                    <tr>
                    <td align="left"><font class="smalltext">Abstract Category:</font> <span class="style1">*</span></td>
                    <td align="left">
					
					<select name="category" style="width:220px">
					<?php if($_SESSION['category']=="") { ?>
                        <option selected="selected" value="Select Category">Select Category</option>
					<?php } else { ?>
	                    <option selected="selected"  style="width:100px;" value="<?php echo $_SESSION['category']; ?>"><?php echo $_SESSION['category']; ?></option>
	                    <?php } ?>	
                        <option value="Poster">Poster</option>
                        <option value="Oral">Oral</option>
                   </select>					</td>
                  </tr>
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                    </tr>
                  <tr>
                    <td align="left"><font class="smalltext">Track Name: </font> <span class="style1">*</span></td>
                    <td align="left"><select name="track_name" id="track_name" value="<?php echo @$_SESSION['track_name']; ?>">
                      <option value="">Please select</option>
                      <option value="Cancer-Basic & Applied Research">Cancer-Basic & Applied Research</option>
                      <option value="Cancer Diagnostics & Therapy">Cancer Diagnostics & Therapy</option>
                      <option value="Anti-Cancer Drug Discovery">Anti-Cancer Drug Discovery</option>
                      <option value="Clinical Oncology ">Clinical Oncology </option>
                      <option value="Others">Others</option>
                    </select>
                    <!--<input value="<?php echo @$_SESSION['track_name']; ?>" type="text" name="track_name" style="width:220px;" /></td>-->                  </tr>
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                    </tr>
                    <tr>
                    <td align="left"><font class="smalltext">Full Postal Address: </font> <span class="style1">*</span></td>
                    <td align="left"><input value="<?php echo @$_SESSION['address']; ?>" type="text" name="address" style="width:220px;" /></td>
                  </tr>
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                    </tr>
                    <tr>
                    <td align="left"><font class="smalltext">Attach your File: </font><span class="style1">*</span></td>
                    <td align="left"><div id="validatefile"><input id="uploadfile" type="file" class="validate[required]" name="uploadfile" onChange="validate_file(this.id,this.value)"></div></td>
                  </tr>
                    <tr>
                      <td colspan="2" align="left">&nbsp;</td>
                    </tr>
                  <!--  <tr>
                    <td align="left"><font class="smalltext">Anti spam code</font> <span class="style1">*</span>:</td>
                    <td align="left">
					<table width="284" cellpadding="1" cellspacing="1" style="border:1px dashed #ccc; padding-left:10px;">
        <tr>
          <td class="headtext" colspan="3"><span class="smalltext" style="color:#006600;">(Type in the 3 black color code displayed below)</span></td>
        </tr>
        <tr>
          <td width="70" align="right" valign="top"><iframe id="captcha" height=40px align=right width=70px frameborder=0 marginwidth=0 marginheight=0 scrolling=no src="captcha.php"></iframe></td>
		  <td width="42" align="center" valign="top"><a  href="javascript:Reload()" style="font-size:11px; font-weight:bold;"><img src="images/refresh.jpg" /></a></td>
		  <td width="160">
            <input type="text" name="captcha" id="captcha" maxlength="3" style="border:1px solid #FF9933; color:#000000; font-weight:bold; font-size:14px; text-align:center; height:22px; background-color:#FFFF99; width:50px;" class="validate[required]">            
            <div align="left" class="smalltext">&nbsp;&nbsp;<?php echo @$alert; ?></div>
            <div align="center"></div></td>
        </tr>
        <tr>
          <td align="right"></td>
        </tr>
      </table>					</td>
                    </tr>-->
                    <tr>
                      <td colspan="2" align="left">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left">&nbsp;</td>
                      <td align="left"><input type="submit" name="submit" value="Submit" /></td>
                    </tr>
                    <tr>
                    <td colspan="2" align="left">&nbsp;</td>
                  </tr>
				   <tr valign="baseline">
    <td colspan="2" align="center" style="line-height:17px;">
      <p align="center"> 
        Email: <strong><a href="mailto:cancersummit2014@omicsonline.net" target="_blank" style="text-decoration:none">cancersummit2014@omicsonline.net</a></strong><br />
		 or Fax: 
            <strong>+1-650-618-1414 </strong><br />
			<font color="#000077"><strong>For queries please contact at</strong></font><br />
          
           Phone: <strong>+1-650-268-9744</strong><br />
            
           
                Toll Free: 
            <strong>+1-800-216-6499</strong></td>
  </tr>
 
     
                         <tr>
                    <td colspan="2" align="left" class="heading">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2" align="left" class="smalltext">&nbsp;</td>
                  </tr>
              </table>
	  </form>
                 
              
</td>
</tr>
</table>
</div>
</section>
<!-- Footer -->
<?php include("footer.html"); ?>
</body>
</html>