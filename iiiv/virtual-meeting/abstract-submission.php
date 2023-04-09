<?php 
include('inc/config.php');
include('call.php');
ob_start();
@session_start();
  if(isset($_POST['submit'])){
    
	$ip = $_SERVER['REMOTE_ADDR'];
$date = date("Y-m-d");
$title=mysqli_real_escape_string($con1,$_POST['title']);
 $name = mysqli_real_escape_string($con1,$_POST['name']);
 $email = mysqli_real_escape_string($con1,$_POST['email']);
 $phone=mysqli_real_escape_string($con1,$_POST['phone']);
 $organization = mysqli_real_escape_string($con1,$_POST['organization']);
 $country = mysqli_real_escape_string($con1,$_POST['country']);
 $session = mysqli_real_escape_string($con1,$_POST['session']);
 $tracks = mysqli_real_escape_string($con1,$_POST['tracks']);
  $address = mysqli_real_escape_string($con1,$_POST['address']);
         $site_url="";
      $errors= array();
      $file_name = $_FILES['absimage']['name'];
      $file_size =$_FILES['absimage']['size'];
      $file_tmp =$_FILES['absimage']['tmp_name'];
      $file_type=$_FILES['absimage']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['absimage']['name'])));
      $expensions= array("docx","doc","pdf");
      $file_name = time().".".$file_ext;
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a docx or pdf or doc file.";
      }
      if(empty($errors)==true){
         if(move_uploaded_file($file_tmp,"../../uploads/abstracts/".$file_name))
         {
mysqli_query($con1,"INSERT INTO `abstracts_tblstr_d`(`ip`, `user`, `title`, `name`, `email`, `phone`, `organization`, `country`, `session`, `tracks`, `file_name`, `address`, `created_date`) VALUES ('$ip', '".$r3['username']."', '$title','$name','$email','$phone','$organization','$country','$session','$tracks','$file_name','$address','$date')");
echo '<script>window.location="submit-abstract-confirmation.php"</script>';
      }}
	  echo 'Error';
    


@$fileatt_name = @$file_name; // Filename that will be used for the file as the attachment
            @$fileatt = "../uploads/abstracts/".$file_name; // Path to the file location in server
            //move_uploaded_file($_FILES['uploadfile']['tmp_name'], @$fileatt);
            @$fileatt_type = $_FILES['absimage']['type'];  //File Type
            @$file = fopen($fileatt,'rb');
            @$data = fread($file,filesize($fileatt));
            fclose(@$file);
            @$semi_rand = md5(time());
            @$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";     
			
           @$recipientbody ="Title : ".$_POST['title']." ".$_POST['name']."\nCountry : ".$_POST['country']."\nE-mail : ".$_POST['email']."\nPhone Number : ".$_POST['phone']."\nInterested in : ".$_POST['session']."\nOrganization : ".$_POST['organization']."\nTrack Name : ".$_POST['tracks'];
           
//==================================================================================================				 
$recipient =$r1['EmailId1'];
 
//==================================================================================================			
            //$to= "$Email";
			
            $rsubject ="Abstract Received from : ".$_POST['title']." ".$_POST['name'];
			
            $mailheader1 = "From: ".$name;
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
			  @$mailheader2 = "From:  Auragengroup < $recipient >\n"; 
            @$mailheader2 .= "Reply-To:  Auragengroup  < $recipient >\n"; 
            @$mailheader2 .= "Content-type: text/html; charset=iso-8859-1\r\n";
			//====================================
            $mail=mail($recipient, $rsubject, $recipientbody,$mailheader1) or die("Failure!");
         
		   if($mail)
			{
			//$msg="Thank you for your interest in submitting Abstract to $conf_title. We will get back to you soon...";
 			$_SESSION['title']="";
			$_SESSION['fname']="";
			$_SESSION['lname']="";
			$_SESSION['country']="";
			$_SESSION['email']="";
			$_SESSION['phone']="";
			$_SESSION['organization']="";
			$_SESSION['address']="";
			$_SESSION['presentation_title']="";
			$_SESSION['category']="";
			$_SESSION['tracks']="";
			//$_SESSION['address']="";
			 
			}
		 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?php echo $row_meta['ab_title_bars'];?></title>
  <meta content="<?php echo $row_meta['reg_keywords'];?>" name='keywords'/>
  <meta content="<?php echo $row_meta['reg_description'];?>" name='description'/>
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
 </head><!--/head-->

<body>
 <?php include('header-inner.php');?>
  
  <section class="bgimage">
         <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <h1>Abstract Submission</h1>
                 </div>
               </div>
         </div>
       </section>
  
 <section id="cta" class="cta">
        <div class="container">

        <div class="row">
		
		<form class="" action="#" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                    <div class=" col-md-6">
                                      <div class="form-group">
                                        <label for="fname">Title <span style="color: red;">*</span></label>
                                        <select class="form-control" name="title" required="">
                                            <option selected="selected">Select Titles</option>
                                            <option value="Dr.">Dr. </option>
                                            <option value="Mr.">Mr. </option>
                                            <option value="Mrs.">Mrs. </option>
                                            <option value="Ms">Ms. </option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="lname">Name<span style="color: red;">*</span></label>
                                        <input id="lname" class="form-control" type="text" placeholder="Enter Name" name="name">
                                        <input  class="form-control" type="hidden" value="1"  name="id" required="">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class=" col-md-6">
                                      <div class="form-group">
                                        <label for="fname">Email<span style="color: red;">*</span></label>
                                        <input type="email" class="form-control" placeholder="Enter Email" name="email" required="">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="lname">Phone<span style="color: red;">*</span></label>
                                        <input id="lname" class="form-control" type="text" placeholder="Enter Phone Number" name="phone" required="">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class=" col-md-6">
                                      <div class="form-group">
                                        <label for="fname">City<span style="color: red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter City" name="address" required="">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="lname">Organization<span style="color: red;">*</span></label>
                                        <input id="lname" class="form-control" type="text" placeholder="Enter Organization" name="organization" required="">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class=" col-md-6">
                                      <div class="form-group">
                                        <label for="fname">Select Country<span style="color: red;">*</span></label>
                                        <select name="country" class="form-control" required="">
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
                                        <label for="lname">Interested In<span style="color: red;">*</span></label>
                                        
                                        <select name="session" class="form-control" required="">
                                            <option value="Select One" selected="selected">Select One</option>
                                            <option value="Oral Presentation">Oral Presentation</option>
                                            <option value="Poster Presentation">Poster Presentation</option>
                                         </select>
                                      </div>
                                    </div>
                                  </div>

                               
							    <div class="row">
                                    <div class=" col-md-12">
                                       <div class="form-group"> 
                                          <label for="lname">Select Track<span style="color: red;">*</span></label>									   
                                                    <select name="tracks" class="form-control">
                                                       <option value="Select Track">Select Track *</option>
                                                       <?php
$query=mysqli_query($con1,"SELECT * FROM `topics_tblstr_d` WHERE user='$id' AND `status`='1' order by track_id ASC");
while($data=mysqli_fetch_array($query)){?>

													  <option value="<?php echo $data['track_name'];?>"><?php echo $data['track_name'];?></option>
 <?php  }?>

  
                                                    </select>
                                                </div>
                                    </div>
                                   </div>
							   
                                  <!--<div class="row">
                                    <div class=" col-md-12">
                                        <div class="form-group">
                                            <label for="fname">Your Message<span style="color: red;">*</span></label>
                                            <textarea rows="5" class="form-control" name="message" id="message" placeholder="Message" required=""></textarea>
                                        </div>
                                    </div>
                                   </div>-->

                                   <div class="row">
                                    <div class=" col-md-6">
                                        <div class="form-group">
                                            <label for="fname">Upload Your Abstract File<span style="color: red;">* </span></label>
                                            <input type="file" class="form-control" name="absimage" required="">
                                        </div>
                                    </div>
									<div class=" col-md-6">
                                        <div class="form-group">
                                          <a href="https://www.auragengroup.com/assets/images/sample.docx" class="btn btn-primary sub-btn-one" target="_blank" style="margin-top: 30px;"> Download Sample Abstract File</a>   
                                        </div>
                                    </div>
                                   </div>
                                <div style="display: flex;">
                                <button type="submit" class="btn btn-primary sub-btn-one" name="submit"> Submit Abstract </button>
                                
                                 
                                 </div>
                              </form>
          
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
  

</body>
</html>