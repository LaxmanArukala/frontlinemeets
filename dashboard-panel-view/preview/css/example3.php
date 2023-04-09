<?php
$time_now=mktime(date('H')+10,date('i')+30,date('s'));
$tdate =  date('Y-m-d',$time_now);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.centralBox{font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; color:#666; vertical-align:middle; background-color:#f9f9f9; -webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
	border-radius: 5px;
}
.centralBox a:link{font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; color:#004080; vertical-align:middle; background-color:#e6f4ff; text-decoration:none;}
.centralBox a:active{font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; color:#004080; vertical-align:middle; background-color:#e6f4ff; text-decoration:none;}
.centralBox a:visited{font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; color:#004080; vertical-align:middle; background-color:#e6f4ff; text-decoration:none;}
.centralBox a:hover{font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:normal; color:#990000; vertical-align:middle; background-color:#e6f4ff; text-decoration:none;}
.roundedCornersTable{
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
	border-radius: 5px;
}
-->
</style>

<style type="text/css">
<!--
.registrationLable{margin-left:10px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#666;}
.registrationInput{margin-left:10px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#666;}
.ri{ height:23px; line-height:23px;}
-->
</style>
<script type="text/javascript">
function check_reg()
{
if (document.form1.REG_ace.checked == true)
{
if(document.getElementById("Pack_a").checked == true || document.getElementById("Pack_b").checked == true || document.getElementById("Pack_s").checked == true){

document.form1.Poster.checked = false;

document.form1.Accompnyingperson.checked = false;
 

}
	
for (var j=0; j < document.form1.r2.length; j++)
   {
   document.form1.r1[j].disabled=false;
   document.form1.r2[j].disabled=true;
   document.form1.r3[j].disabled=true;
   document.form1.r4[j].disabled=true; 
   document.form1.Pack_a.checked = false;
   document.form1.Pack_b.checked = false;
   document.form1.Pack_s.checked = false;
   document.form1.r2[j].checked=false; 
   document.form1.r3[j].checked=false;
   document.form1.r4[j].checked=false;
   document.form1.price.value="";
   document.form1.r1[0].checked=true;

   document.form1.price.value= document.form1.r1[0].value;   
   document.form1.Poster.disabled = false;
    document.form1.Accompnyingperson.disabled = false;
   if( document.form1.Poster.checked == true)
   {
   		document.form1.price.value=parseInt(document.form1.r1[0].value)+100;   
   }
    if( document.form1.Accompnyingperson.checked == true)
   {
   		document.form1.Accompnyingperson.value=parseInt(document.form1.r1[0].value)+200;
		
   }
    
   }
 }
 else
 {
 for (var j=0; j < document.form1.r2.length; j++)
   {
   document.form1.r1[j].checked=false; 
   document.form1.price.value="";
   document.form1.r1[j].disabled=true;
   }
   document.form1.Poster.disabled = true;
  
   document.form1.Poster.checked = false;
   
   document.form1.Accompnyingperson.disabled = true;
  
   document.form1.Accompnyingperson.checked = false;
 
 }
 
}

function Pack_acheck()
{
if (document.form1.Pack_a.checked == true)
{

	if(document.getElementById("Pack_a").checked == true || document.getElementById("Pack_b").checked == true || document.getElementById("Pack_s").checked == true){

document.form1.Poster.checked = false;

document.form1.Accompnyingperson.checked = false;
 

}
for (var j=0; j < document.form1.r2.length; j++)
   {
   document.form1.r2[j].disabled=false;
   document.form1.r1[j].disabled=true;
   document.form1.r3[j].disabled=true; 
   document.form1.r4[j].disabled=true;
   document.form1.REG_ace.checked = false;
   document.form1.Pack_b.checked=false;
   document.form1.Pack_s.checked=false;
   document.form1.r3[j].checked=false;
   document.form1.r4[j].checked=false;
   document.form1.r1[j].checked=false;
   document.form1.price.value="";
   document.form1.r2[0].checked=true;

   document.form1.price.value= document.form1.r2[0].value;
   document.form1.Poster.disabled = false;
   
   document.form1.Accompnyingperson.disabled = false;

 if(document.form1.Poster.checked == true && document.form1.Accompnyingperson.checked == true){
		document.form1.price.value=parseInt(document.form1.r2[i].value)+300;
	   }
 else  if( document.form1.Poster.checked == true)
   {
   		document.form1.price.value=parseInt(document.form1.r2[0].value)+100;   
   }
  else   if( document.form1.Accompnyingperson.checked == true)
   {
   		document.form1.price.value=parseInt(document.form1.r2[0].value)+200;   
   }
   }
}
else
 {
 for (var j=0; j < document.form1.r2.length; j++)
   {
   document.form1.r2[j].checked=false; 
   document.form1.price.value="";
   document.form1.r2[j].disabled=true;  
   }
   document.form1.Poster.disabled = true;
  
   document.form1.Poster.checked = false;
   
    document.form1.Accompnyingperson.disabled = true;
  
   document.form1.Accompnyingperson.checked = false;
 }
}

function Pack_bcheck()
{
if (document.form1.Pack_b.checked == true)
{

	if(document.getElementById("Pack_a").checked == true || document.getElementById("Pack_b").checked == true || document.getElementById("Pack_s").checked == true){

document.form1.Poster.checked = false;

document.form1.Accompnyingperson.checked = false;
 

}

for (var j=0; j < document.form1.r2.length; j++)
   {
   document.form1.r3[j].disabled=false;
   document.form1.r1[j].disabled=true;
   document.form1.r2[j].disabled=true;
   document.form1.r4[j].disabled=true;
   document.form1.REG_ace.checked = false;
   document.form1.Pack_a.checked = false;
   document.form1.Pack_s.checked = false;
   document.form1.r4[j].checked=false;
   document.form1.r1[j].checked=false; 
   document.form1.r2[j].checked=false; 
   document.form1.price.value="";
   document.form1.r3[0].checked=true;

   document.form1.price.value= document.form1.r3[0].value;
   document.form1.Poster.disabled = false;
    document.form1.Accompnyingperson.disabled = false;
   
    if(document.form1.Poster.checked == true && document.form1.Accompnyingperson.checked == true){
		document.form1.price.value=parseInt(document.form1.r3[i].value)+300;
	   }
 
  else if( document.form1.Poster.checked == true)
   {
   		document.form1.price.value=parseInt(document.form1.r3[0].value)+100;   
   }
    else  if( document.form1.Accompnyingperson.checked == true)
   {
   		document.form1.price.value=parseInt(document.form1.r3[0].value)+200;   
   }
    
   }
}
else
 {
 for (var j=0; j < document.form1.r2.length; j++)
   {
   document.form1.r3[j].checked=false; 
   document.form1.price.value="";
   document.form1.r3[j].disabled=true;    
   }
   document.form1.Poster.disabled = true;
  
   document.form1.Poster.checked = false;
   
   document.form1.Accompnyingperson.disabled = true;
  
   document.form1.Accompnyingperson.checked = false;
  
 }
}

function Pack_scheck()
{
if (document.form1.Pack_s.checked == true)
{

if(document.getElementById("Pack_a").checked == true || document.getElementById("Pack_b").checked == true || document.getElementById("Pack_s").checked == true){

document.form1.Poster.checked = false;

document.form1.Accompnyingperson.checked = false;
 

}

for (var j=0; j < document.form1.r2.length; j++)
   {
   document.form1.r4[j].disabled=false;	   
   document.form1.r3[j].disabled=true;
   document.form1.r1[j].disabled=true;
   document.form1.r2[j].disabled=true; 
   document.form1.REG_ace.checked= false;
   document.form1.Pack_a.checked = false;
   document.form1.Pack_b.checked = false;
   document.form1.r1[j].checked=false; 
   document.form1.r2[j].checked=false;
   document.form1.r3[j].checked=false;
   document.form1.price.value="";
   document.form1.r4[0].checked=true;

   document.form1.price.value= document.form1.r4[0].value;
   document.form1.Poster.disabled = false;
   
   document.form1.Accompnyingperson.disabled = false;
   
    if(document.form1.Poster.checked == true && document.form1.Accompnyingperson.checked == true){
		document.form1.price.value=parseInt(document.form1.r4[i].value)+300;
	   }
   else if( document.form1.Poster.checked == true)
   {
   		document.form1.price.value=parseInt(document.form1.r4[0].value)+100;   
   }
     else  if( document.form1.Accompnyingperson.checked == true)
   {
   		document.form1.price.value=parseInt(document.form1.r4[0].value)+200;   
   }
   }
}
else
 {
 for (var j=0; j < document.form1.r2.length; j++)
   {
   document.form1.r4[j].checked=false; 
   document.form1.price.value="";
   document.form1.r4[j].disabled=true;    
   }
   document.form1.Poster.disabled = true;
   document.form1.Accompnyingperson.disabled = true;
   
   document.form1.Preconference.disabled = true;
   document.form1.Poster.checked = false;
   document.form1.Accompnyingperson.checked = false;
   document.form1.Preconference.checked = false;
 }
}





function poster()
{

var  amount=parseInt(document.form1.price.value);
  
 if (document.form1.Poster.checked == true)
 {
    if(amount>0)
	{
    var total_amount=parseInt(document.form1.price.value)+100;
    document.form1.price.value=total_amount; 
	}
	else
	{
	document.form1.price.value=100; 
	}
 }
 else
 {
 	if(parseInt(document.form1.price.value) >200)
	{
	var total_amount=parseInt(document.form1.price.value)-100;
	document.form1.price.value=total_amount; 
	}
 }
}


function poster1()
{

var  amount=parseInt(document.form1.price.value);
  
 if (document.form1.Accompnyingperson.checked == true)
 {

    if(amount>0)
	{
    var total_amount=parseInt(document.form1.price.value)+200;
    document.form1.price.value=total_amount; 
	}
	else
	{
	document.form1.price.value=100; 
	}
 }
 else
 {
 	if(parseInt(document.form1.price.value) >300)
	{
	var total_amount=parseInt(document.form1.price.value)-200;
	document.form1.price.value=total_amount; 
	}
 }
}



/*function Preconference_check()
{
var  amount=parseInt(document.form1.price.value);
  
 if (document.form1.Preconference.checked == true)
 {
    if(amount>0)
	{
    var total_amount=parseInt(document.form1.price.value)+100;
    document.form1.price.value=total_amount; 
	}
	else
	{
	document.form1.price.value=100; 
	}
 }
 else
 {
 	if(parseInt(document.form1.price.value) >500)
	{
	var total_amount=parseInt(document.form1.price.value)-100;
	document.form1.price.value=total_amount; 
	}
 }
}*/
function get_radio_value()
{
for (var i=0; i < document.form1.r1.length; i++)
   {
   if (document.form1.r1[i].checked==true)
      {
	   if(document.form1.Poster.checked == true && document.form1.Accompnyingperson.checked == true){
		document.form1.price.value=parseInt(document.form1.r1[i].value)+300;
	   }
     else  if( document.form1.Poster.checked == true)
   		{
   			document.form1.price.value=parseInt(document.form1.r1[i].value)+100;
				//document.form1.price.value=parseInt(rad_val)+100;   
  		 }
		  else if( document.form1.Accompnyingperson.checked == true)
   		{
   			document.form1.price.value=parseInt(document.form1.r1[i].value)+200;
				//document.form1.price.value=parseInt(rad_val)+100;   
  		 }
		 
  		 else
   		 {
		 if(document.form1.Poster.checked == true && document.form1.Accompnyingperson.checked == true){
		document.form1.price.value=parseInt(document.form1.r1[i].value)+300;
	   }
   		else if( document.form1.Poster.checked == true)
			  {
				document.form1.price.value=parseInt(document.form1.r1[i].value)+100;
			  }
			else  if( document.form1.Accompnyingperson.checked == true)
			  {
				document.form1.price.value=parseInt(document.form1.r1[i].value)+200;
			  }
			else
			{
				document.form1.price.value=document.form1.r1[i].value;
			}
  		}   	 
      }

 if (document.form1.r2[i].checked==true)
      {
	 if(document.form1.Poster.checked == true && document.form1.Accompnyingperson.checked == true){
		document.form1.price.value=parseInt(document.form1.r2[i].value)+300;
	   }

      else if( document.form1.Poster.checked == true)
   		{
   			document.form1.price.value=parseInt(document.form1.r2[i].value)+100;
				//document.form1.price.value=parseInt(rad_val)+100;   
  		 }
		 
		 else if( document.form1.Accompnyingperson.checked == true)
   		{
   			document.form1.price.value=parseInt(document.form1.r2[i].value)+200;
				//document.form1.price.value=parseInt(rad_val)+100;   
  		 }
  		 else
   		 {
			 if(document.form1.Poster.checked == true && document.form1.Accompnyingperson.checked == true){
		document.form1.price.value=parseInt(document.form1.r2[i].value)+300;
	   }
   			else if( document.form1.Poster.checked == true)
			  {
				document.form1.price.value=parseInt(document.form1.r2[i].value)+100;
			  }
			else  if( document.form1.Accompnyingperson.checked == true)
			  {
				document.form1.price.value=parseInt(document.form1.r2[i].value)+200;
			  }
			else
			{
				document.form1.price.value=document.form1.r2[i].value;
			}
  		}   	 
      }

if (document.form1.r3[i].checked==true)
      {

	if(document.form1.Poster.checked == true && document.form1.Accompnyingperson.checked == true){
		document.form1.price.value=parseInt(document.form1.r3[i].value)+300;
	   }

       else if( document.form1.Poster.checked == true)
   		{
   			document.form1.price.value=parseInt(document.form1.r3[i].value)+100;
				//document.form1.price.value=parseInt(rad_val)+100;   
  		 }
		  else  if( document.form1.Accompnyingperson.checked == true)
   		{
   			document.form1.price.value=parseInt(document.form1.r3[i].value)+200;
				//document.form1.price.value=parseInt(rad_val)+100;   
  		 }
		
  		 else
   		 {
			 if(document.form1.Poster.checked == true && document.form1.Accompnyingperson.checked == true){
		document.form1.price.value=parseInt(document.form1.r3[i].value)+300;
	   }
   			else if( document.form1.Poster.checked == true)
			  {
				document.form1.price.value=parseInt(document.form1.r3[i].value)+100;
			  }
			else  if( document.form1.Accompnyingperson.checked == true)
			  {
				document.form1.price.value=parseInt(document.form1.r3[i].value)+200;
			  }
			  
			else
			{
				document.form1.price.value=document.form1.r3[i].value;
			}
  		}   	 
      }
	  
   }
}

function disable_radio()
{
for (var j=0; j < document.form1.r2.length; j++)
   {
   document.form1.r1[j].disabled=true;
   document.form1.r2[j].disabled=true;
   document.form1.r3[j].disabled=true;
   document.form1.r4[j].disabled=true;
   document.form1.Poster.disabled = true;
    document.form1.Accompnyingperson.disabled = true;
    
   }

}


 
 
 
 
 
 
function validate()
{
f=document.form1;
if(f.Title.value=="Select Any")
{
alert("Select any Title");
f.Title.focus();
return false;
}
else
if(f.Name.value=="")
{
alert("Please enter name");
f.Name.focus();
return false;
}
else
if(f.Surname.value=="")
{
alert("Please enter surname");
f.Surname.focus();
return false;
}
else
if(f.Country.value=="")
{
alert("Please enter country");
f.Country.focus();
return false;
}
else
if(f.Authors_Email.value=="")
{
alert("Please enter your E-mail");
f.Authors_Email.focus();
return false;
} 
//Check if email is a valid E-mail id.
	var id = f.Authors_Email.value;
	//The regular expression for a valid e-mail address
	var re = /^.+\@.+\..{2,4}$/gi; 
	if(!id.match(re)) { //If it is NOT a match
		//flag++;
		//errors = errors + "Invalid E-Mail\n";
		alert("Invalid Email");
		f.Authors_Email.focus();
		return false;
	}
/*else
if(f.price.value=="")
{
alert("Please enter chosen price");
f.price.focus();
return false;
}*/
else
if(f.Creditcard_no.value=="")
{
alert("Please enter credit card number");
f.Creditcard_no.focus();
return false;
}
else
if(f.Cardholder_name.value=="")
{
alert("Please enter credit card holder name");
f.Cardholder_name.focus();
return false;
}
else
if(f.month.value=="select Month")
{
alert("Select Month");
f.month.focus();
return false;
}
else
if(f.year.value=="select Year")
{
alert("Select Year");
f.year.focus();
return false;
}
else
if(f.Full_Postal_Address.value=="")
{
alert("Please enter the Full_Postal_Address");
f.Full_Postal_Address.focus();
return false;
}



else
if (document.form1.REG_ace.checked == false && document.form1.Pack_a.checked == false && document.form1.Pack_b.checked == false && document.form1.Preconference.checked == false && document.form1.Exhibition.checked == false)
{
 alert ('Please select any one: registration or Package A or Package B or Exhibition/Sponsorship/Special request');
		return false;
} 
else
{
var d=document.form1
var title=d.Title.value
var name=d.Name.value
var surname=d.Surname.value
var country=d.Country.value
var aemail=d.Authors_Email.value
var altemail=d.Alternative_Email.value
var acat=d.Abstact_Category.value
var ctitle=d.Conference_Title.value
var cprice=d.price.value
var creditcardno=d.Creditcard_no.value
var cardholdername=d.Cardholder_name.value
var Emonth=d.month.value
var Eyear=d.year.value
var add=d.Full_Postal_Address.value
var rfhr=d.REG_ace.checked
var pfhr=d.Pack_a.checked
var packb=d.Pack_b.checked
var Precon=d.Preconference.checked
var Post=d.Poster.checked
var Accompnyingperson=d.Accompnyingperson.checked
var Exhib=d.Exhibition.checked


if(title && name && surname && aemail && altemail && acat && ctitle && creditcardno && cardholdername && Emonth && Eyear &&  add || rfhr==true || pfhr==true  || packb==true || Precon==true || Post==true || Accompnyingperson==true || Exhib==true)
{
var a=confirm('Title='+title+'\n\nName='+name+'\n\nSurname='+surname+'\n\nCountry='+country+'\n\nAuthor E-mail='+aemail+'\n\nAlternative E-mail='+altemail+'\n\nAbstact category='+acat+'\n\nConference title='+ctitle+'\n\nChoosen price='+cprice+'\n\nCredit card number='+creditcardno+'\n\nName of card holder='+cardholdername+'\n\nExpiry month='+Emonth+'\n\nExpiry year='+Eyear+'\n\nFull postal address='+add+'\n\nRegistration academic='+rfhr+'\n\nPackage A='+pfhr+'\n\nPackage B='+packb+'\n\nPreconference='+Precon+'\n\nPoster='+Post+'\n\nAccompnyingperson='+Accompnyingperson+'\n\nExhibition='+Exhib)
}
if(a==true)
{
return true;
}
else
{
return false;
}



}
}

if( document.form1.Accompnyingperson.checked == true){
document.form1.Accompnyingperson.value=200;
}
else{
document.form1.Accompnyingperson.value=0;
}

</script>
<link href="bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body onload="return disable_radio()">
<?php
if(!isset($_POST['submit']))
{
?>
<form method="post" name="form1"  onsubmit="return validate()">

<table width="900" border="1" align="center">
  <tr>
    <td colspan="2" align="center" ><table width="450" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td style="font-size:10pt;
FONT-WEIGHT: normal; COLOR: #333333; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; "> <b>Online Registration</b></td>
        <td><!-- Begin Official PayPal Seal -->
              <a href="https://www.paypal.com/us/verified/pal=omicsonline%40omicsonline%2eorg" target="_blank"><img src="https://www.paypal.com/en_US/i/icon/verification_seal.gif" border="0" alt="2nd International Conference and Exhibition on Biometrics &amp; Biostatistics 2013" title="PayPal Verified"/></a>
              <!-- End Official PayPal Seal --></td>
        <td><!-- (c) 2005, 2009. Authorize.Net is a registered trademark of CyberSource Corporation -->
              <div class="AuthorizeNetSeal">
                <script type="text/javascript" language="JavaScript">var ANS_customer_id="2080cddf-ff8c-4e9f-96a1-1338fb6eef1a";</script>
                <script type="text/javascript" language="JavaScript" src="https://VERIFY.AUTHORIZE.NET/anetseal/seal.js" ></script>
            <a href="http://www.authorize.net/" id="AuthorizeNetText" target="_blank">Online Payment Service</a> </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="24" colspan="2" class="registrationLable">Note:<span style="color:#FF0000; margin-left:5px; font-size:9px">*</span> Fields are  mandatory</td>
  </tr>
  <tr>
    <td width="247"><div style="height:15px;"> </div></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="left" class="registrationLable">Title:</td>
    <td width="463"><div align="left">
      <select name="Title">
        <option selected="selected"  style="width:100px;" value="Select Any">Select Any</option>
        <option value="Mr">Mr</option>
        <option value="Ms">Ms</option>
        <option value="Mrs">Mrs</option>
        <option value="Prof">Prof</option>
        <option value="Dr">Dr</option>
        <option value="Assist Prof Dr">Assist Prof Dr</option>
        <option value="Assoc Prof Dr">Assoc Prof Dr</option>
      </select>
      <span style="color:#FF0000; margin-left:5px; font-size:12px">*</span> </div></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="left" class="registrationLable">First Name:</td>
    <td><div align="left">
      <input type="text" name="Name" value="" size="32" autocomplete="off" />
      <span style="color:#FF0000; margin-left:5px; font-size:12px">*</span></div></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="left" class="registrationLable">Last Name:</td>
    <td><div align="left">
      <input type="text" name="Surname" value="" size="32" autocomplete="off" />
      <span style="color:#FF0000; margin-left:5px; font-size:12px">*</span></div></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="left" class="registrationLable">Country:</td>
    <td><div align="left">
      <input type="text" name="Country" value="" size="32" autocomplete="off" />
      <span style="color:#FF0000; margin-left:5px; font-size:12px">*</span></div></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="left" class="registrationLable"> E-mail:</td>
    <td><div align="left">
      <input type="text" name="Authors_Email" value="" size="32" autocomplete="off" />
      <span style="color:#FF0000; margin-left:5px; font-size:12px">*</span></div></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="left" class="registrationLable">Alternative E-mail:</td>
    <td><div align="left">
      <input type="text" name="Alternative_Email" value="" size="32" autocomplete="off" />
    </div></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="left" class="registrationLable">Abstract Category:</td>
    <td><div align="left">
      <input type="text" name="Abstact_Category" value="" size="32" autocomplete="off" />
    </div></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="left" class="registrationLable"> Title of the Proposed Talk:</td>
    <td><div align="left">
      <input type="text" name="Conference_Title" value="" size="32" autocomplete="off" />
    </div></td>
  </tr>
  
  <tr valign="baseline">
    <td nowrap="nowrap" align="left" class="registrationLable">Credit Number:</td>
    <td><div align="left">
      <input name="Creditcard_no" type="text" id="Creditcard_no" value="" size="32" autocomplete="off" />
      <span style="color:#FF0000; margin-left:5px; font-size:12px">*</span></div></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="left" class="registrationLable">Name of the Card Holder: </td>
    <td><div align="left">
      <input name="Cardholder_name" type="text" id="Cardholder_name" value="" size="32" autocomplete="off" />
      <span style="color:#FF0000; margin-left:5px; font-size:12px">*</span></div></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="left" class="registrationLable" valign="middle">Expiry Date:</td>
    <td><div align="left">
      <table width="459" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="204" class="registrationLable"><label> Month: <span style="color:#FF0000; margin-left:5px; font-size:12px">*</span>
            <select name="month" style="width:110px;">
              <option value="select Month" selected="selected">Select Month</option>
              <option value="01">Jan</option>
              <option value="02">Feb</option>
              <option value="03">Mar</option>
              <option value="04">Apr</option>
              <option value="05">May</option>
              <option value="05">Jun</option>
              <option value="07">Jul</option>
              <option value="08">Aug</option>
              <option value="09">Sep</option>
              <option value="10">Oct</option>
              <option value="11">Nov</option>
              <option value="12">Dec</option>
              </select>
            </label></td>
            <td width="255" class="registrationLable"><label> Year: <span style="color:#FF0000; margin-left:5px; font-size:12px">*</span>
              <select name="year" style="width:110px;">
                <option value="select Year" selected="selected">Select Year</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                </select>
              </label></td>
          </tr>
      </table>
    </div></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="left" valign="top" class="registrationLable">Full Postal Address:</td>
    <td><div align="left">
      <textarea name="Full_Postal_Address" cols="25" rows="5" autocomplete="off"></textarea>
      <span style="color:#FF0000; margin-left:5px; font-size:12px">*</span> </div></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="left" class="registrationLable">Chosen Price in $: </td>
    <td><div align="left">
      <input name="price" type="text" id="price" value="" size="28" autocomplete="off" readonly="on" style="color:#FFFFFF; background-color:#0099CC; font-weight:600;"/>
      <span style="color:#FF0000; margin-left:5px; font-size:12px">*</span></div></td>
  </tr>
   <tr>
    <td colspan="2">
    
    <table width="900" cellpadding="2" cellspacing="2" align="center" class="centralBox">
<tr>
<td width="250" valign="top">

	<div style="margin-top:60px;">
	<table width="250" cellpadding="2" cellspacing="4">
    <tr><td width="15" align="center"><input type="checkbox" name="REG_ace" value="" onclick="return check_reg()" /></td><td align="left"><div style="margin-bottom:8px;">Only Registration (academic/business)</div></td></tr>
    <tr><td width="15" align="center"><input type="checkbox" name="Pack_a" id="Pack_a" value="" onclick="return Pack_acheck()" /></td><td align="left"><div style="margin-bottom:8px;">Package A</div></td></tr>
    <tr><td width="15" align="center"><input type="checkbox" name="Pack_b" id="Pack_b" value=""  onclick="return Pack_bcheck()" /></td><td align="left"><div style="margin-bottom:8px;"> Package B </div></td></tr>
    <tr><td width="15" align="center"><input type="checkbox" name="Pack_s" id="Pack_s" value=""  onclick="return Pack_scheck()" /></td><td align="left"><div style="margin-bottom:8px;">Student</div></td></tr>
    <tr><td width="15" align="center"><input type="checkbox" name="Poster" value="" onclick="return poster()" /></td><td align="left"><div style="margin-bottom:8px;">Poster</div></td></tr>
    <tr><td width="15" align="center"><input type="checkbox" name="Accompnyingperson" value="200" onclick="return poster1()" /></td><td align="left"><div style="margin-bottom:8px;"> Accompanying Person</div></td></tr>
    </table>
    </div>
</td>
<td>
	<table width="650" cellpadding="0" cellspacing="0" style="border:1px solid #CCC;" class="roundedCornersTable">
    <tr><td>
    	<table width="650" cellpadding="2" cellspacing="2">
        <tr bgcolor="#e6f4ff">
        <td align="center" width="162">On/Before<br /></td>
        <td width="1"></td>
        <td align="center" width="162">1st Round Registration <br />
          On/Before<br /></td>
		
		<td width="1"></td>
        <td align="center" width="162">2nd Round Registration<br />
          On/Before<br /></td>
		
        <td width="1"></td>
        <td align="center" width="162">Final Registration</td>
        </tr>
        <tr>
        <td>
        	<table cellpadding="0" cellspacing="0" width="100%	">
            <tr><td align="center" style="border:1px #CCC solid;">Academia</td><td width="2"></td><td align="center" style="border:1px #CCC solid;">Business</td></tr>
            </table>
        </td>
        <td width="1"></td>
        <td>
        	<table cellpadding="0" cellspacing="0" width="100%	">
            <tr><td align="center" style="border:1px #CCC solid;">Academia</td><td width="2"></td><td align="center" style="border:1px #CCC solid;">Business</td></tr>
            </table>
        </td>
		 <td width="1"></td>
        <td>
        	<table cellpadding="0" cellspacing="0" width="100%	">
            <tr><td align="center" style="border:1px #CCC solid;">Academia</td><td width="2"></td><td align="center" style="border:1px #CCC solid;">Business</td></tr>
            </table>
        </td>
        <td width="1"></td>
        <td>
        	<table cellpadding="0" cellspacing="0" width="100%	">
            <tr><td align="center" style="border:1px #CCC solid;">Academia</td><td width="2"></td><td align="center" style="border:1px #CCC solid;">Business</td></tr>
            </table>
        </td>
        </tr>
        <tr>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr bgcolor="#e6f4ff"><td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r1" type="radio" value="599" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$599</div></td></tr>
    	        </table>
            </div>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r1" type="radio" value="799" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$799</div></td></tr>
    	        </table>
            </div>    
            </td>
            </tr>

            </table>
        </td>
        <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr bgcolor="#e6f4ff"><td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r1" type="radio" value="649" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$649</div></td></tr>
    	        </table>
            </div>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r1" type="radio" value="849" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$849</div></td></tr>
    	        </table>
            </div>    
            </td>
            </tr>
            </table>
        </td>
		
		 <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr bgcolor="#e6f4ff"><td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r1" type="radio" value="699" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$699</div></td></tr>
    	        </table>
            </div>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r1" type="radio" value="899" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$899</div></td></tr>
    	        </table>
            </div>    
            </td>
            </tr>
            </table>
        </td>
		
		
        <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr bgcolor="#e6f4ff"><td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r1" type="radio" value="799" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$799</div></td></tr>
    	        </table>
            </div>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r1" type="radio" value="999" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$999</div></td></tr>
    	        </table>
            </div>    
            </td>
            </tr>
            </table>
        </td>
        </tr>
        <tr>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr><td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r2" type="radio" value="1099" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$1099</div></td></tr>
    	        </table>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r2" type="radio" value="1299" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$1299</div></td></tr>
    	        </table>
            </td>
            </tr>
            </table>
        </td>
        <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr><td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r2" type="radio" value="1149" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$1149</div></td></tr>
    	        </table>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r2" type="radio" value="1399" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$1399</div></td></tr>
    	        </table>
            </td>
            </tr>
            </table>
        </td>
		
		 <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr><td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r2" type="radio" value="1199" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$1199</div></td></tr>
    	        </table>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r2" type="radio" value="1499" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$1499</div></td></tr>
    	        </table>
            </td>
            </tr>
            </table>
        </td>
		
		
		
        <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr><td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r2" type="radio" value="1299" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$1299</div></td></tr>
    	        </table>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r2" type="radio" value="1699" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$1699</div></td></tr>
    	        </table>
            </td>
            </tr>
            </table>
        </td>
        </tr>
        <tr>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr bgcolor="#e6f4ff"><td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r3" type="radio" value="1299" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$1299</div></td></tr>
    	        </table>
            </div>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r3" type="radio" value="1499" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$1499</div></td></tr>
    	        </table>
            </div>    
            </td>
            </tr>
            </table>
        </td>
        <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr bgcolor="#e6f4ff"><td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r3" type="radio" value="1349" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$1349</div></td></tr>
    	        </table>
            </div>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r3" type="radio" value="1599" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$1599</div></td></tr>
    	        </table>
            </div>    
            </td>
            </tr>
            </table>
        </td>
		
		 <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr bgcolor="#e6f4ff"><td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r3" type="radio" value="1399" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$1399</div></td></tr>
    	        </table>
            </div>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r3" type="radio" value="1699" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$1699</div></td></tr>
    	        </table>
            </div>    
            </td>
            </tr>
            </table>
        </td>
		
		
		
        <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr bgcolor="#e6f4ff"><td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r3" type="radio" value="1499" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$1499</div></td></tr>
    	        </table>
            </div>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r3" type="radio" value="1899" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$1899</div></td></tr>
    	        </table>
            </div>    
            </td>
            </tr>
            </table>
        </td>
        </tr>
        <tr>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr><td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r4" type="radio" value="300" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$300</div></td></tr>
    	        </table>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r4" type="radio" value="300" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$300</div></td></tr>
    	        </table>
            </td>
            </tr>
            </table>
        </td>
        <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr><td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r4" type="radio" value="300" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$300</div></td></tr>
    	        </table>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r4" type="radio" value="300" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$300</div></td></tr>
    	        </table>
            </td>
            </tr>
            </table>
        </td>
		
		 <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr><td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r4" type="radio" value="300" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$300</div></td></tr>
    	        </table>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r4" type="radio" value="300" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$300</div></td></tr>
    	        </table>
            </td>
            </tr>
            </table>
        </td>
		
		
        <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr><td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r4" type="radio" value="300" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$300</div></td></tr>
    	        </table>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="center" width="30%"><input name="r4" type="radio" value="300" onclick="return get_radio_value()" /></td><td width="70%"><div style="margin-top:5px;">$300</div></td></tr>
    	        </table>
            </td>
            </tr>
            </table>
        </td>
        </tr>
        <tr>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr bgcolor="#e6f4ff"><td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="left"><div style="margin-top:5px; margin-left:23px;">$100</div></td></tr>
    	        </table>
            </div>    
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="left"><div style="margin-top:5px; margin-left:23px;">$100</div></td></tr>
    	        </table>
            </div>    
            </td>
            </tr>
            </table>
        </td>
        <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr bgcolor="#e6f4ff"><td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="left"><div style="margin-top:5px; margin-left:23px;">$100</div></td></tr>
    	        </table>
            </div>    
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="left"><div style="margin-top:5px; margin-left:23px;">$100</div></td></tr>
    	        </table>
            </div>    
            </td>
            </tr>
            </table>
        </td>
		
		 <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr bgcolor="#e6f4ff"><td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="left"><div style="margin-top:5px; margin-left:23px;">$100</div></td></tr>
    	        </table>
            </div>    
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="left"><div style="margin-top:5px; margin-left:23px;">$100</div></td></tr>
    	        </table>
            </div>    
            </td>
            </tr>
            </table>
        </td>
		
        <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr bgcolor="#e6f4ff"><td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="left"><div style="margin-top:5px; margin-left:23px;">$100</div></td></tr>
    	        </table>
            </div>    
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            <div style="margin-bottom:3px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="left"><div style="margin-top:5px; margin-left:23px;">$100</div></td></tr>
    	        </table>
            </div>    
            </td>
            </tr>
            </table>
        </td>
        </tr>
        <tr>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr><td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="left"><div style="margin-top:0px; margin-left:23px;">$200</div></td></tr>
    	        </table>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="left"><div style="margin-top:0px; margin-left:23px;">$200</div></td></tr>
    	        </table>
            </td>
            </tr>
            </table>
        </td>
        <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr><td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="left"><div style="margin-top:0px; margin-left:23px;">$200</div></td></tr>
    	        </table>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="left"><div style="margin-top:0px; margin-left:23px;">$200</div></td></tr>
    	        </table>
            </td>
            </tr>
            </table>
        </td>
		 <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr><td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="left"><div style="margin-top:0px; margin-left:23px;">$200</div></td></tr>
    	        </table>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="left"><div style="margin-top:0px; margin-left:23px;">$200</div></td></tr>
    	        </table>
            </td>
            </tr>
            </table>
        </td>
        <td width="1"></td>
        <td>
	        <table cellpadding="0" cellspacing="0" width="100%">
            <tr><td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="left"><div style="margin-top:0px; margin-left:23px;">$200</div></td></tr>
    	        </table>
            </td>
            <td width="2%"></td>
            <td align="center" width="49%">
            	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr><td align="left"><div style="margin-top:0px; margin-left:23px;">$200</div></td></tr>
    	        </table>
            </td>
            </tr>
            </table>
        </td>
        </tr>
        </table>
    </td></tr>
    <tr><td height="1" bgcolor="#CCCCCC"></td></tr>
    <tr><td align="center" style="padding-top:5px; padding-bottom:5px;"><span class="registrationLable">For Exhibition/Sponsorship/Special Request</span> contact organizers at<br />
Ph: +1-650-268-9744, Fax: +1-650-618-1414<br />
Toll Free: +1-800-216-6499<br />
E-mail: <a href="mailto:<?php echo $ConferenceEmail1; ?>" style="background-color:#e6f4ff;"><?php echo $ConferenceEmail1; ?></a> </td></tr>
    </table>
</td>
</tr>
</table>
    </td>
  </tr>
  
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr valign="baseline">
    <td align="center" colspan="2"><input type="submit" value="Register" name="submit" class="button" style="width:150px; height:30px; font-weight:bold; border:1px solid #bbbbbb;"/>    </td>
  </tr>
  <tr valign="baseline">
    <td align="center">&nbsp;</td>
    <td><a name="reg" id="reg"></a></td>
  </tr>
  <tr valign="baseline">
    <td align="center" colspan="2" valign="middle" bordercolor="#FFFFFF"  class="registrationLable"><font color="#de5d10"><strong>Group Discounts:</strong></font>&nbsp; 3 or more members from the same lab/institute/university (or)<br />
    anyone who wish to attend multiple OMICS Group Conferences are eligible to get <br /> 
    special benefits from OMICS Group.<a href="mailto:cancersummit2014@omicsonline.net" style="text-decoration:none;" target="_blank"> Please contact us</a></td>
  </tr>
  <tr valign="baseline">
    <td colspan="2"><table width="900" border="0" cellpadding="1" cellspacing="0" style="border:1px solid #dcdcdc;">
      <tr>
        <td width="460" style="padding:10px;"><table width="900" border="0" cellspacing="0" cellpadding="0" style="border:0px solid #dcdcdc; background-color:#e6f4ff;">
          <tr>
            <td colspan="2" height="30" class="registrationLable"><div style="margin-left:5px;"><strong>Only Registration Includes: </strong></div></td>
          </tr>
          <tr>
            <td width="10" class="registrationLable"><div align="left" style="margin-left:10px;">1)</div></td>
            <td class="registrationLable"><div align="left" style="margin-left:5px;">All program</div></td>
          </tr>
          <tr>
            <td width="10" class="registrationLable"><div align="left" style="margin-left:10px;">2)</div></td>
            <td class="registrationLable"><div align="left" style="margin-left:5px;">Reception banquet</div></td>
          </tr>
          <tr>
            <td width="10" class="registrationLable"><div align="left" style="margin-left:10px;">3)</div></td>
            <td class="registrationLable"><div align="left" style="margin-left:5px;">Coffee break during the conference</div></td>
          </tr>
          <tr>
            <td width="10" class="registrationLable"><div align="left" style="margin-left:10px;">4)</div></td>
            <td class="registrationLable"><div align="left" style="margin-left:5px;">Handbook</div></td>
          </tr>
          <tr>
            <td width="10" class="registrationLable"><div align="left" style="margin-left:10px;">5)</div></td>
            <td class="registrationLable"><div align="left" style="margin-left:5px;">A free paper abstract</div></td>
          </tr>
          <tr>
            <td width="10" class="registrationLable"><div align="left" style="margin-left:10px;">6)</div></td>
            <td class="registrationLable"><div align="left" style="margin-left:5px;">Lunch during the conference</div></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td style="padding:10px;"><table width="900" border="0" cellspacing="0" cellpadding="0" style="border:0px solid #dcdcdc; background-color:#e6f4ff;">
          <tr>
            <td colspan="2" height="30" class="registrationLable"><div style="margin-left:5px;"><strong>Package A: </strong></div></td>
          </tr>
          <tr>
            <td colspan="2" class="registrationLable"><div style="margin-left:5px; margin-right:5px; width:250px; background-color:#e6f4ff" align="center">Above 6 features including the following</div></td>
          </tr>
          <tr>
            <td width="10" class="registrationLable"><div align="left" style="margin-left:10px;">7)</div></td>
            <td class="registrationLable"><div align="left" style="margin-left:5px;">Breakfast during the Conference</div></td>
          </tr>
          <tr>
            <td width="10" class="registrationLable"><div align="left" style="margin-left:10px;">8)</div></td>
            <td class="registrationLable"><div align="left" style="margin-left:5px;">3 Nights accommodation (i.e. Feb 2<sup>nd</sup>, 3<sup>rd</sup>, 4<sup>th</sup> ) of deluxe single/double room at Hyderabad Internatinal Convention Center, Hyderabad</div></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td style="padding:10px;"><table width="900" border="0" cellspacing="0" cellpadding="0" style="border:0px solid #dcdcdc; background-color:#e6f4ff;">
          <tr>
            <td colspan="2" height="30" class="registrationLable"><div style="margin-left:5px;"><strong>Package B: </strong></div></td>
          </tr>
          <tr>
            <td colspan="2" class="registrationLable"><div style="margin-left:5px; margin-right:5px; width:250px; background-color:#e6f4ff" align="center">Above 8 features including the following</div></td>
          </tr>
          <tr>
            <td width="10" class="registrationLable"><div align="left" style="margin-left:10px;">9)</div></td>
            <td class="registrationLable"><div align="left" style="margin-left:5px;">1 Night extra accommodation i.e. Feb 5<sup>th</sup> (total 4 Nights)</div></td>
          </tr>
          
        </table></td>
      </tr>
	   <tr>
        <td style="padding:10px;"><table width="900" border="0" cellspacing="0" cellpadding="0" style="border:0px solid #dcdcdc; background-color:#e6f4ff;">
		  
		   <tr>
            <td colspan="2" height="30" class="registrationLable"><div style="margin-left:5px;"><strong>For Accompanying Person: </strong></div></td>
          </tr>
          <tr>
            <td width="10" class="registrationLable"><div align="left" style="margin-left:10px;">1)</div></td>
            <td class="registrationLable"><div align="left" style="margin-left:5px;">Entry pass for opening ceremony</div></td>
          </tr>
          <tr>
            <td width="10" class="registrationLable"><div align="left" style="margin-left:10px;">2)</div></td>
            <td class="registrationLable"><div align="left" style="margin-left:5px;">Reception banquet</div></td>
          </tr>
          <tr>
            <td width="10" class="registrationLable"><div align="left" style="margin-left:10px;">3)</div></td>
            <td class="registrationLable"><div align="left" style="margin-left:5px;">Coffee break during the conference</div></td>
          </tr>
 
          <tr>
            <td width="10" class="registrationLable"><div align="left" style="margin-left:10px;">4)</div></td>
            <td class="registrationLable"><div align="left" style="margin-left:5px;">Lunch during the conference</div></td>
          </tr>
		  
		     </table></td>
      </tr>
       
    </table></td>
  </tr>
  <tr valign="baseline">
    <td align="center">&nbsp;</td>
    <td align="left"   valign="middle" bordercolor="#FFFFFF" bgcolor="#FFFFFF" class="footer">&nbsp;</td>
  </tr>
</table>
<input name="sno" value="" type="hidden">
  <input name="MM_insert" value="form1" type="hidden">
</form>
<?php
}
?>

<p>&nbsp;</p>
<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO reg (sno, Title, Name, Surname, Country, `Author's Email`, `Alternative Email`, `Abstact Category`, `Conference Title`, price, Creditcard_no, Cardholder_name, month, year, `Full Postal Address`, `REG_ace`,`packagea`,`packageb`,`packages`, Preconference, Poster, Accompnyingperson, Exhibition,date) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s,%s,%s, %s, %s, %s,%s)",
                       GetSQLValueString($_POST['sno'], "int"),
                       GetSQLValueString($_POST['Title'], "text"),
                       GetSQLValueString($_POST['Name'], "text"),
                       GetSQLValueString($_POST['Surname'], "text"),
                       GetSQLValueString($_POST['Country'], "text"),
                       GetSQLValueString($_POST['Authors_Email'], "text"),
                       GetSQLValueString($_POST['Alternative_Email'], "text"),
                       GetSQLValueString($_POST['Abstact_Category'], "text"),
                       GetSQLValueString($_POST['Conference_Title'], "text"),
					   GetSQLValueString($_POST['price'], "text"),
                       GetSQLValueString($_POST['Creditcard_no'], "text"),
					   GetSQLValueString($_POST['Cardholder_name'], "text"),
					   GetSQLValueString($_POST['month'], "text"),
					   GetSQLValueString($_POST['year'], "text"),
                       GetSQLValueString($_POST['Full_Postal_Address'], "text"),
                       GetSQLValueString(isset($_POST['REG_ace']) ? "true" : "", "defined","'Y'","'N'"),
                       GetSQLValueString(isset($_POST['Pack_a']) ? "true" : "", "defined","'Y'","'N'"),
					   GetSQLValueString(isset($_POST['Pack_b']) ? "true" : "", "defined","'Y'","'N'"),
					   GetSQLValueString(isset($_POST['Pack_s']) ? "true" : "", "defined","'Y'","'N'"),
					   GetSQLValueString(isset($_POST['Preconference']) ? "true" : "", "defined","'Y'","'N'"),
                       GetSQLValueString(isset($_POST['Poster']) ? "true" : "", "defined","'Y'","'N'"),
					   GetSQLValueString(isset($_POST['Accompnyingperson']) ? "true" : "", "defined","'Y'","'N'"),
					   GetSQLValueString(isset($_POST['Exhibition']) ? "true" : "", "defined","'Y'","'N'"),
					   GetSQLValueString($tdate, "date"));

 mysql_select_db($database_cn, $cn);
 $Result1 = mysql_query($insertSQL, $cn) or die("<table  align='center' height='100%'><tr valign='middle'><td style='color:#0000CC'><h3>Error occured during registration.Try again.</h3></td></tr></table>");
if(isset($_POST['submit']))
{
echo "<table  valign='top' align='center'  >";
echo "<tr valign='top'><td style='color:#0000CC'><h3>Your registration has been filed, Please click submit payment button.</h3></td></tr>";
echo "<tr><td>";
include("autherize.php"); 

echo "</td></tr>";
echo "</table>";
}
else
{
echo "Try again";
}
}	
	?>
</body>
</html>

