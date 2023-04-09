<?php
$price = $_GET['price'];
include('functions.php');
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
        echo '<script>window.location="pay-with-paypal"</script>';
    }
}
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
    <title><?php echo $row_meta['reg_title_bars'];?></title>

	<meta content="<?php echo $row_meta['reg_keywords'];?>" name='keywords'/>
	  
	<meta content="<?php echo $row_meta['reg_description'];?>" name='description'/>
    
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
<script language="javascript">
        function validate1(thisform) {
            //alert('test');
            if (window.document.reg.RESCAPTCHA.value == "") {
                alert("Please Enter Captcha ");
                window.document.reg.RESCAPTCHA.focus();
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>
<body>  

    <!-- LOADER -->
   
   <?php include('header-inner.php');?>

        <section class="section db p100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Register</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Register</a></li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">
                    <div class="row blog-grid">
                        <div class="col-md-12">
                            <div class="course-box">
                               <form name="reg" method="post" action="#" class=" " onsubmit="return test(this);" enctype="multipart/form-data">
								<div><input type="hidden" name="payment" value="paypal" id="selectedpaypal" checked="checked">  
                                 <div class="row">
                                     <div class="col-md-6">
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="upper" for="name"> Name*: </label>
                                            <input type="text" class="form-control required" name="regfname" value="" placeholder="Enter name" id="regfname" required="">
                                            <input type="hidden" name="member_id" value="6">
                                                                                </div>
                                    </div>
                                      <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="upper" for="email"> Email*: </label>
                                                <input type="email" class="form-control required" name="regauthors_email" value="" placeholder="Enter Email" id="regauthors_email" aria-required="true">
                                                                                        </div>
                                       </div>
                                          <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="upper" for="phone"> Phone*: </label>
                                            <input type="text" class="form-control required" name="regphone" value="" placeholder="Enter Phone" id="regphone" aria-required="true">
                                                                                </div>
                                    </div>
                                          <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="upper" for="institution"> Institution:*: </label>
                                            <input type="text" class="form-control required" name="institution" value="" placeholder="Enter Institution" id="institution" aria-required="true">
                                                            
                                        </div>
                                    </div>
                                          <div class="col-md-6">
                                        <div class="form-group">
                                       
                                            <label class="upper" for="country"> Select Country*: </label>
                                            
                                            
                                           <select name="regcountry" class="form-control" required="">
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
                                          
                                     <div class="col-md-6">
                                        <div class="form-group">
                                       
                                            <label class="upper" for="country"> Select Registration Type*: </label>
                                            
                                            
                                         
                                             <select name="regtype" class="form-control" id="regtype" required="">
                                                <option value="" selected="selected">Select Register Type*</option>
                                                <option value="Speaker Registration">Speaker Registration</option>
                                                <option value="Poster Registration"> Poster Registration</option>
                                                 <option value="Delegate Registration">Delegate Registration</option>
												  <option value="Student Registration">Student Registration</option>
												  <option value="E-Poster Registration">E-Poster Registration</option>
                                               
                                        </select>
                                        </div>
                                        </div>
										
										<div class="col-md-6">
										<div style="width: 93%;margin-top:10px;margin-right:10px;"><img src="https://www.auragengroup.com/assets/images/paypal-secure.jpg">
										</div>
										
                                        </div>
                                        </div>
                                  
                         
                           
									</div>
                 
                        
                                 </div> 
								 
								  
								 
								 
                                 <div class="payment-option">
								 <div class="row">
								 <div class="col-md-12">
								   <div class="row">
								 <div class="col-md-4">
								 
								 <div class="panel panel-default">
									<div class="panel-heading">
									   <button type="button" class="btn btn-default btn btn-default btn-block"><i class="glyphicon glyphicon glyphicon-star"></i> EARLY BIRD REGISTRATION <br>
										( Till 2022-07-13 )</button>
									</div>
									<div class="panel-body text-center">
										<h4><input type="radio" name="amount" id="option1" value="699"  onchange="updateAmount()"> $ 699 Speaker Registration</h4>
										 
									  <hr>
									   <h4><input type="radio" name="amount" id="option2" value="399" onchange="updateAmount()"> $ 399 Poster Registration</h4>
									  <hr>
									   
									     <h4><input type="radio" name="amount" id="option2" value="799" onchange="updateAmount()"> $ 799 Delegate Registration</h4>
									    <hr>
										
									      <h4 class="register__title"><input type="radio" name="amount" id="option2" value="349" onchange="updateAmount()"> $ 349 Student Registration</h4>
										  <hr>
										  
										   <h4 class="register__title"><input type="radio" name="amount" id="option2" value="199" onchange="updateAmount()"> $ 199 E-Poster Registration</h4>
										  <hr>
										 
									</div>
                  
									</div>
								 </div>
  
									
									<div class="col-md-4">
								 
								 <div class="panel panel-default">
									<div class="panel-heading">
									   <button type="button" class="btn btn btn-danger btn-block"><i class="glyphicon glyphicon glyphicon-star"></i>  Next Round of Registration  <br>
										( Till 2022-03-07 )</button>
									</div>
									<div class="panel-body text-center">
                    
									     <h4><input type="radio" name="amount" id="option1" value="" disabled  onchange="updateAmount()"> $ 749 Speaker Registration</h4>
									  <hr>
									   	  <h4><input type="radio" name="amount" id="option2" value="" disabled onchange="updateAmount()"> $ 449 Poster Registration</h4>
									    <hr>
									   
									     <h4><input type="radio" name="amount" id="option2" value="" disabled onchange="updateAmount()"> $ 849 Delegate Registration</h4>
									    <hr>
									    <h4><input type="radio" name="amount" id="option2" value="" disabled onchange="updateAmount()"> $ 399 Student Registration</h4>
										  <hr>
										  
										   <h4><input type="radio" name="amount" id="option2" value="" disabled onchange="updateAmount()"> $ 249 E-Poster Registration</h4>
										  <hr>
										 
									</div>
                 
									 
									</div>
								 </div>
									 
									  
									   
									  
									<div class="col-md-4">
								 
								<div class="panel panel-default">
									<div class="panel-heading">
									   <button type="button" class="btn btn btn-danger btn-block"><i class="glyphicon glyphicon glyphicon-star"></i>  Final Round of Registration  <br>
										( Till 2022-03-07 )</button>
									</div>
									<div class="panel-body text-center">
                    
									     <h4><input type="radio" name="amount" id="option1" value="" disabled  onchange="updateAmount()"> $ 849 Speaker Registration</h4>
									  <hr>
									   	  <h4><input type="radio" name="amount" id="option1" value="" disabled onchange="updateAmount()"> $ 549 Poster Registration</h4>
									    <hr>
									   
									     <h4><input type="radio" name="amount" id="option1" value="" disabled onchange="updateAmount()"> $ 949 Delegate Registration</h4>
									    <hr>
									    <h4><input type="radio" name="amount" id="option1" value="" disabled onchange="updateAmount()"> $ 399 Student Registration</h4>
										  <hr>
										  
										  <h4><input type="radio" name="amount" id="option1" value="" disabled onchange="updateAmount()"> $ 299 E-Poster Registration</h4>
										  <hr>
										 
									</div>
                 
									 
									</div>
								 </div>

									 
									</div>
									</div>
 
                                 </div>
                                 </div>
								 
								 <div class="panel panel-default">
									
								 <div class="panel-heading col-md-4"><button type="button" class="btn btn btn-default btn-block"> 
								  <input type="radio" name="Accommodation" id="option2" value="180"  onchange="updateAmount()"> $ 180  Accommodation for One Night </button> </div> 
								 <div class="panel-heading col-md-4"><button type="button" class="btn btn btn-default btn-block"> <input type="radio" name="Accommodation" id="option2" value="320"   onchange="updateAmount()"> $ 320 Accommodation for Two Nights</button></div> 
								 <div class="panel-heading col-md-4"><button type="button" class="btn btn btn-default btn-block"><input type="radio" name="Accommodation" id="option2" value="540"   onchange="updateAmount()"> $ 540 Accommodation for Three nights</button></div> 
								  </div>
								  
								  
								  
								 
                                    <div class="summary-block">
                                        
                                        <!--<div style="margin: 20px 0;">
                                           <select name="participants" class="form-control" id="no_of_participants" onchange="updateAmount()" required="">
                                              <option value="0" selected="selected">No Of Participants</option>
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
                                        </div>-->
										 <h2 class="text-center">Registration Summary</h2>
                                        <div class="price-block"><span class="price-bloc-headding col-md-8"><b>Registration Price:</b></span><span class="col-md-4" id="result"> </span></div><hr>
										<div class="price-block"><span class="price-bloc-headding col-md-8"><b>Accomidation Price:</b></span><span class="col-md-4" id="resultacc">   </span></div><hr>
                                        <!--<div class="price-block"><span class="price-bloc-headding col-md-8"><b>Participants:</b></span><span class="col-md-4" id="reg_participants"> </span></div><hr>-->
                                        <div class="price-block"><span class="price-bloc-headding col-md-8"><b>Total Registration Price:</b></span><span class="col-md-4"><input type="text" name="amount" id="totalSum" value="" size="2" readonly="readonly" style="border:none;"> </span></div>
										   <!-- <input class="totalSum" name="amount" type="text"/>-->
										 
										<!--<input type="text" name="amount" id="amount" hidden=""> -->
										 
										<div class="paybox1 col-md-12" align="center">
                                    <img src="captcha_code_file?rand=1131699087" id="captchaimg"><br>
                                    <label for="message">Enter the code above here :</label><br>
                                    <input id="ent_code" name="ent_code" type="text" required=""><br>
                                    <small>Can't read the image? click <a href="javascript: refreshCaptcha();" class=""><b>here</b></a> to refresh</small>
                                </div><br>
								
								<div align="center" class="paybox col-md-12">
                                <p><b style="color:#f00 !important;">Note:</b> 3.5% Processing fee will be applicable.</p>
                                <div align=" ">
								<div class=" " align="center">
								<div style=" "><input type="checkbox" name="checkbox" checked="checked"> I have read and agree with the <a href="#" target="_blank" style=" ">Terms And Conditions</a></div> <br></div>
                            </div>
                            </div>
										
										
                                        <!-- <div class="price-block"><span class="price-bloc-headding">Total Price:</span><span>$639</span></div> -->
                                        <div align="center"><input type="submit" class="btn btn-primary" name="submit" value="Proceed to Register"><!-- <span class="btn btn-danger reset">Reset</span>--> </div>
										</div>
                                    </div></form>
                            </div><!-- end box -->
                        </div><!-- end col -->
 
 
  

					  
					 
					 
                         
					 
					 
                     </div>
                    </div><!-- end boxed -->
            </div><!-- end container -->
        </section>

        <?php include('footer.php');?>

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
     <script language='JavaScript' type='text/javascript'>
            function refreshCaptcha() {
                var img = document.images['captchaimg'];
                img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
            }
        </script> 
	  
   
<script type="text/javascript">
        function updateAmount(price){
            var val1 = 0;
            for( i = 0; i < document.reg.amount.length; i++ ){
                if( document.reg.amount[i].checked == true ){
                    val1 = document.reg.amount[i].value;
                }
            }

            var val2 = 0;
            for( i = 0; i < document.reg.Accommodation.length; i++ ){
                if( document.reg.Accommodation[i].checked == true ){
                    val2 = document.reg.Accommodation[i].value;
                }
            }
			
			
			var sum=parseInt(val1) + parseInt(val2);
            document.getElementById('totalSum').value=sum;
			
			var radVal = document.reg.amount.value;
			result.innerHTML = radVal;
			
			var radValAcc = document.reg.Accommodation.value;
			resultacc.innerHTML = radValAcc;
          }
    </script>   
<!--<script>    
  function updateAmount() {
	  if($('input[name="amount"]').is(':checked'))
			{
			 var amount = parseInt($('input[name="amount"]:checked').val());
			}else 
			{
			 var Accommodation = parseInt($('input[name="Accommodation"]:checked').val());
			}
	       
		  
            //var Accommodation = parseInt($('input[name="Accommodation"]:checked').val());
		//	$("#acc_price").show();
			
			//$("#option2").prop("checked" , true) 
            var no_of_participants = $('#no_of_participants').val();
            var total = amount + Accommodation;
            var total_amount = total * no_of_participants;
            $("#reg_price").html('$'+amount);
            $("#acc_price").html('$'+Accommodation);
            $("#total_amount").html('$'+total_amount);
            $("#reg_participants").html(no_of_participants);

            $("#participants").val(no_of_participants);
            $("#amount").val(total_amount);
            $("#Accommodation").val(total_amount);
            //$("#amount").val(1);
            $("#final_amount").val(total_amount);
			
			
        } 
		 $(document).ready(function () {  
		$(".reset").click(function () {  
         $("#option1").prop("checked" , false)  
         $("#option2").prop("checked" , false)  
       }); 
       }); 
</script>-->
<!--<script>
$("input[type=radio]").click(function() {
    var total = 0;
    $("input[type=radio]:checked").each(function() {
        total += parseFloat($(this).val());
    });
 
    $(".totalSum").val(total);
});
</script>-->
   </body>
</html>