<?php
$price = $_GET['price'];
include('call.php');
ob_start();
session_start();
if (isset($_POST['submit'])) {
    $_SESSION['payment'] = $_POST['payment'];
    $_SESSION['amount'] = $_POST['amount'];
    extract($_POST);
    if (empty($_SESSION['gen_code']) || strcasecmp($_SESSION['gen_code'], trim($_POST['ent_code'])) != 0) {
        echo "<script>alert('Invalid Captcha. Please try Again')</script>";
    } else {
        $_SESSION['post'] = $_POST;
        echo '<script>window.location="pay-with-paypal.php"</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> <?php echo $row_meta['reg_title_bars'];?></title>
  <meta content="<?php echo $row_meta['reg_keywords'];?>" name='keywords'/>
  <meta content="<?php echo $row_meta['reg_description'];?>" name='description'/>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <style>
.register__title_Mid, .register__main-feature_mid, .register__price {
    text-transform: uppercase;
    font-family: "Open Sans", sans-serif;
    margin-top: 0;
    margin-bottom: 0;
    color: #fff;
}
.register__button_Mid:before {
    content: "";
    display: block;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    margin: 10px;
    border: solid 3px #fff;
    transform: translateY(-30%);
}
.register__main-feature_Mid {
    font-size: 50px;
	color:#fff;
}
.register__button_Mid  {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 5px 0;
    padding: 20px 0;
    border-radius: 5px;
    border: solid 3px white;
    background: #db3737;
    color: #fff;
    opacity: 0.4;
    pointer-events: none;
    box-shadow: 0px 0px 20px -10px rgb(0 0 0 / 40%);
    transition: transform 0.5s;
    
}
</style>
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  
  <script language="javascript">
        function validate1(thisform) {
            //alert('hi');
            if (window.document.reg.RESCAPTCHA.value == "") {
                alert("Please Enter Captcha ");
                window.document.reg.RESCAPTCHA.focus();
                return false;
            } else {
                return true;
            }
        }
    </script>
  
 </head><!--/head-->

<body>
<?php include('header-inner.php');?>
  
  <section class="bgimage">
         <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <h1>Registration</h1>
                 </div>
               </div>
         </div>
       </section>
  
 <section id=" " class=" ">
        <div class="container">

        
		<div class="row">
                <div class="col-md-12 nopadding">
                    
                    <div class="">
                        <div  >
						<form  name="reg" method="post" action='' class=" " onSubmit="return test(this);"  enctype="multipart/form-data">
               <div class="kujyt amount-reg" align=' '>  <input type="radio" name="payment" value="paypal" id="selectedpaypal" checked="checked">  
                                 <div class="row">
                                    <div class="col-md-5">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class=" " for="name"> Title *: </label>
                                            
                                              <select name="regtitle" class="form-control" required="">
                                                    <option value="" selected="selected">Select</option>
                                                    <option value="Dr.">Dr.</option>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Miss.">Miss.</option>
                                                    <option value="Mrs.">Mrs.</option>
                                             </select>       
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="upper" for="name"> Name*: </label>
                                            <input type="text" class="form-control required" name="regfname" value="" placeholder="Enter name" id="regfname" required="">
                                            <input type="hidden" name="member_id" value="6">
                                                                                </div>
                                    </div>
                                      <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="upper" for="email"> Email*: </label>
                                                <input type="email" class="form-control required" name="regauthors_email" value="" placeholder="Enter Email" id="regauthors_email" aria-required="true">
                                                                                        </div>
                                       </div>
                                          <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="upper" for="phone"> Phone*: </label>
                                            <input type="text" class="form-control required" name="regphone" value="" placeholder="Enter Phone" id="regphone" aria-required="true">
                                                                                </div>
                                    </div>
                                          <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="upper" for="institution"> Institution:*: </label>
                                            <input type="text" class="form-control required" name="institution" value="" placeholder="Enter Institution" id="institution" aria-required="true">
                                                            
                                        </div>
                                    </div>
                                          <div class="col-md-12">
                                        <div class="form-group">
                                       
                                            <label class="upper" for="country"> Select Country*: </label>
                                            
                                            
                                           <select name="regcountry" class="form-control">
                                            <option value="" selected="selected">Select Country*</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                            <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="France Metropolitan">France Metropolitan</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="State of Palestine">State of Palestine</option>
                                            <option value="St. Helena">St. Helena</option>
                                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                            <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Yugoslavia">Yugoslavia</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                        </div>
                                        </div>
                                          
                                     <div class="col-md-12">
                                        <div class="form-group">
                                       
                                            <label class="upper" for="country"> Select Registration Type*: </label>
                                            
                                            
                                         
                                             <select name="regtype" class="form-control" id="regtype">
                                                <option value="" selected="selected">Select Register Type*</option>
                                                <option value="Oral Presentation">Oral Presentation</option>
                                                <option value=" Delegate / Listener"> Delegate / Listener</option>
                                                 <option value="E-Poster Presentation">E-Poster Presentation</option>
												  <option value="Student Delegate">Student Delegate</option>
                                               
                                        </select>
                                        </div>
                                        </div>
                                  </div>
                                      
                                  
                         <div class="col-md-7 hidden-xs p-t-30">
						 
						  
			<h4></h4>
			<ul class="timeline">
				<li>
					<a target="_blank" href=" "><b>Registration Includes:</b></a>
					<p><i class="fa fa-check"></i> Access to all Presentations</p>
                                            <p><i class="fa fa-check"></i> E-Abstract Book and Program</p>
                                            <p><i class="fa fa-check"></i> E-Certificate for Presentation and Participation</p>
                                            <p><i class="fa fa-check"></i> Promotion in Conference Website and Social Media</p>
                                            <p><i class="fa fa-check"></i> Promotion in Conference Material (E-Abstract Book and Program)</p>
				</li>
				<li>
					<a href="#"><b>Refund / Cancellation Policy:</b></a>
					 <p><i class="fa fa-check"></i> All cancellations must be sent in writing via e-mail to the program manager (<a href="mailto:info@auragengroup.com">info@auragengroup.com</a>)</p>
                                            <p><i class="fa fa-check"></i> Cancellation within 7 days of webinar start date are non-transferrable nor refundable</p>
                                            <p><i class="fa fa-check"></i> Cancellation before 10 days of the webinar start date are refunded 75% or transferable to next webinar</p>
                                            <p><i class="fa fa-check"></i> On the off chance that Auragen Group cancels this Webinar for any irreplaceable reason, enrolled members will be credited with full amount paid by you at the hour of registration. You may likewise utilize this credit for any another Auragen Group event(s) which should happen within one year from the date of cancellation</p>
				</li>
				 
			</ul>
		  
                             <div style="text-align: right;width: 93%;margin-top:10px;margin-right:10px;"><img src="https://www.auragengroup.com/assets/images/paypal-secure.jpg">
                            </div>
                            <!--<div style="text-align: right;width: 93%;margin-top:10px;margin-right:10px;"><img src="https://www.auragengroup.com/assets/images/razorpay1.png" width="200px" height="50px">
                            </div>-->
                        </div>
                 
                        
                                 </div> 
                                 <div class="payment-option">
								 <div class="row">
								 <div class="col-md-12">
								   <div class="row">
								 <div class="col-md-3">
  <input type="radio" name="amount" id="option1" value="249" checked="checked" onchange="updateAmount()">
  <label for="option1" class="register__button">
      <h3 class="register__title">Oral Presentation</h3>
      <h3 class="register__main-feature">$ 249</h3>
      <!--<span class="subscription__price"></span>-->
  </label>
  </div>
  
<div class="col-md-3">
  <input type="radio" name="amount" id="option2" value="199" onchange="updateAmount()">
  <label for="option2" class="register__button">
      <h3 class="register__title">Delegate / Listener</h3>
      <h3 class="register__main-feature">$ 199</h3>
   </label>
  </div>
  
  <div class="col-md-3">
  <input type="radio" name="amount" id="option3" value="129" onchange="updateAmount()">
  <label for="option3" class="register__button">
      <h3 class="register__title">E-Poster Presentation</h3>
      <h3 class="register__main-feature">$ 129</h3>
    </label>
</div>

<div class="col-md-3">
  <input type="radio" name="amount" id="option4" value="99" onchange="updateAmount()">
  <label for="option4" class="register__button">
      <h3 class="register__title">Student Delegate</h3>
      <h3 class="register__main-feature">$ 99</h3>
    </label>
</div>
</div>
</div>
 
                                 </div>
                                 </div>
								 
								  
 
								  
								 
                                    <div class="summary-block">
                                        <h2>Registration Summary</h2>
                                        <div style="margin: 20px 0;">
                                           <select name="participants" class="form-control" id="no_of_participants" onchange="updateAmount()">
                                             <option selected="selected" value="0">No Of Participants</option>
                                             <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="7">7</option>
                                              <option value="8">8</option>
                                              <option value="9">9</option>
                                              <option value="10">10</option>
                                          </select>
                                        </div>
                                        <div class="price-block"><span class="price-bloc-headding">Registration Price:</span><span id="reg_price">$249</span></div>
                                        <div class="price-block"><span class="price-bloc-headding">Participants:</span><span id="reg_participants">1</span></div>
                                        <div class="price-block"><span class="price-bloc-headding">Total Registration Price:</span><span id="total_amount">$249</span></div>
                                        <input type="text" name="amount" id="amount" hidden="">
										
										<div class="paybox1 col-md-12" align="center">
                                    <img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg'><br>
                                    <label for='message'>Enter the code above here :</label><br>
                                    <input id="ent_code" name="ent_code" type="text" required><br>
                                    <small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
                                </div><br>
								
								<div align="center" class="paybox col-md-12">
                                <p><b style="color:#f00 !important;">Note:</b> 3.5% Processing fee will be applicable.</p>
                                <div align=" ">
								<div class=" " align="center">
								<div style=" "><input type="checkbox" name="checkbox" checked="checked"> I have read and agree with the <a href="#" target="_blank" style=" ">Terms And Conditions</a></div> <br></div>
                            </div>
                            </div>
										
										
                                        <!-- <div class="price-block"><span class="price-bloc-headding">Total Price:</span><span>$639</span></div> -->
                                        <div   align="center"><input type="submit" class="btn btn-primary" name="submit" value="Proceed to Register"></span><!--<span class="btn btn-secondary">Reset</span>--></div>
										</div>
                                    </form></div>


                  
                                  
                              
                            
                        </div>       



                    </div>
                </div>
          
        </div>

      </section>
 

   
   <?php include('footer.php');?>

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
  <script language='JavaScript' type='text/javascript'>
            function refreshCaptcha() {
                var img = document.images['captchaimg'];
                img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
            }
        </script> 
  <script type="text/javascript">
        function updateAmount() {
            var amount = $('input[name="amount"]:checked').val();
            var no_of_participants = $('#no_of_participants').val();
            var total_amount = amount * no_of_participants;
            $("#reg_price").html('$'+amount);
            $("#reg_participants").html(no_of_participants);
            $("#total_amount").html('$'+total_amount);

            $("#participants").val(no_of_participants);
            $("#amount").val(total_amount);
            //$("#amount").val(1);
            $("#final_amount").val(total_amount);
        }
    </script>

</body>
</html>