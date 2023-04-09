<!doctype html>
 <html class="no-js " lang="en">  
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title> </title>
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
 
</head>
<body>  

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

   <?php include('header-inner.php');?>

        <section class="section db p100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Submit Abstract</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Submit Abstract</a></li>
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
                        <div class="col-md-6">
                            <div class="course-box">
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
                                        <input class="form-control" type="hidden" value="1" name="id" required="">
                                      </div>
                                    </div>
                                  
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
                                   
                                    <div class=" col-md-6">
                                       <div class="form-group"> 
                                          <label for="lname">Select Track<span style="color: red;">*</span></label>									   
                                                    <select name="tracks" class="form-control">
                                                       <option value="Select Track">Select Track *</option>
                                                       
													  <option value="Nanostructures and Nanocomposites">Nanostructures and Nanocomposites</option>
 
													  <option value="Nanomaterials and 2D Materials">Nanomaterials and 2D Materials</option>
 
													  <option value="Nanoelectronics, Nanosensors &amp; Nanodevices">Nanoelectronics, Nanosensors &amp; Nanodevices</option>
 
													  <option value="Nanotechnology in Materials Science">Nanotechnology in Materials Science</option>
 
													  <option value="Nanotechnology for Energy and the Environment">Nanotechnology for Energy and the Environment</option>
 
													  <option value="Polymer Nanotechnology">Polymer Nanotechnology</option>
 
													  <option value="Nano Magnetism and Nanoparticles">Nano Magnetism and Nanoparticles</option>
 
													  <option value="Fundamentals of Nano Science">Fundamentals of Nano Science</option>
 
													  <option value="Industrial Nanotechnology">Industrial Nanotechnology</option>
 
													  <option value="Molecular Nanotechnology">Molecular Nanotechnology</option>
 
													  <option value="Computational Nanotechnology">Computational Nanotechnology</option>
 
													  <option value="Applications in Nanotechnology">Applications in Nanotechnology</option>
 
													  <option value="Nanophotonics and Nano optics">Nanophotonics and Nano optics</option>
 
													  <option value="Quantum Nanotechnology">Quantum Nanotechnology</option>
 
													  <option value="Nano Fluidics">Nano Fluidics</option>
 
													  <option value="Nanofabrication, Nanoprocessing &amp; Nanomanufacturing">Nanofabrication, Nanoprocessing &amp; Nanomanufacturing</option>
 
													  <option value="Nanomedicine &amp; Life Science">Nanomedicine &amp; Life Science</option>
 
													  <option value="Food Nanotechnology">Food Nanotechnology</option>
 
													  <option value="Recent Development and Advanced Researches in Nanotechnology">Recent Development and Advanced Researches in Nanotechnology</option>
 
													  <option value="Biomedical Engineering and Nanobiotechnology">Biomedical Engineering and Nanobiotechnology</option>
 
													  <option value="Nano Drug Delivery and Nanocarriers">Nano Drug Delivery and Nanocarriers</option>
 
													  <option value="Nanocatalysis &amp; Applications in the Chemical Industry">Nanocatalysis &amp; Applications in the Chemical Industry</option>
 
													  <option value="Nanosafety and Nanotoxicity">Nanosafety and Nanotoxicity</option>
 
													  <option value="Nano Robotics">Nano Robotics</option>
 
													  <option value="Mathematical Modelling of Nanotechnology">Mathematical Modelling of Nanotechnology</option>
 
													  <option value="Green Nanotechnology &amp; Water Treatment">Green Nanotechnology &amp; Water Treatment</option>
 
													  <option value="Colloidal Nanocrystals">Colloidal Nanocrystals</option>
 
													  <option value="Nanotoxicology">Nanotoxicology</option>
 
													  <option value="Pharmaceutical Nanotechnology">Pharmaceutical Nanotechnology</option>
 
													  <option value="Quantum Dots &amp; Quantum Wells">Quantum Dots &amp; Quantum Wells</option>
 
													  <option value="Nanotechnology in Healthcare and its Applications">Nanotechnology in Healthcare and its Applications</option>
 
													  <option value="Computational Materials Science">Computational Materials Science</option>
 
													  <option value="Graphene Technologies and carbon Nanotubes">Graphene Technologies and carbon Nanotubes</option>
 
													  <option value="Nano Coatings">Nano Coatings</option>
 
													  <option value="Cancer Nanotechnology">Cancer Nanotechnology</option>
 
													  <option value="Material Science and Engineering">Material Science and Engineering</option>
 
  
                                                    </select>
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

                                    <div class=" col-md-6">
                                        <div class="form-group">
                                            <label for="fname">Upload Your Abstract File<span style="color: red;">* </span></label>
                                            <input type="file" class="form-control" name="absimage" required="">
                                        </div>
                                    </div>
									<div class=" col-md-6">
                                        <div class="form-group">
                                          <a href="https://www.auragengroup.com/uploads/abstract-sample-template.docx" class="btn btn-primary sub-btn-one" target="_blank" style="/* margin-top: 30px; */"> Download Sample Abstract File</a>   
                                        </div>
                                    </div>
									<div class=" col-md-6">
                                        <div class="form-group">
                                 <button type="submit" class="btn btn-primary sub-btn-one" name="submit"> Submit Abstract </button>
                                 </div>
                                 </div>
                              
                            </div></form>
                            </div><!-- end box -->
                        </div><!-- end col -->
 
					
					 <div class="col-md-6">
                            <div class="course-boxfirst sess-background-inner session-cf">
                                    <ul class="check-inner">
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Acupuncture</li>
                                        <li>Traditional chinese medicine</li>

<li>Environmental protection</li>

<li>Environmental protection</li>

<li>Ethnopharmacology</li>

<li>Herbal therapies</li>

<li>Herbals in cosmetics and skincare</li>

<li>History and philosophy of herbal medicine</li>

<li>Human ecology</li>

<li>Medicinal and aromatic plants</li>

<li>Neuraltherapy</li>
<li>Pathology and clinical medicine</li>

<li>Perspectives in healthcare</li>

<li>Phytovigilance of herbal medicines</li>

<li>Yoga and mindfulness</li>

<li>Neuraltherapy</li>

 <li>ayurveda</li>

<li>Botanical medicines</li>

<li>Arabic and unani medicine</li>

<li>Healthy aging and preventive health</li>

<li>Herbal medicine</li>
                                        
<li>Herbals in cancer therapy</li>

<li>Herbal market</li>

<li>Holistic medicine</li>

<li>Manual therapy</li>

<li>Mind and body medicine</li>

<li>Osteopathy</li>

<li>Personalized medicine</li>

<li>Pharmacognosy and phytochemistry</li>

<li>Plants and essential oils</li>

<li>Recent advances in herbs and natural remedies</li>

<li>Bridging traditional chinese medicine and molecular pharmacology</li>



                                    </ul><!-- end check -->
									  
                                </div><!-- end col-lg-4 -->
                     </div>
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

	 <script>
  function updateTimer() {
    future = Date.parse("July 16, 2021 10:00:00");
    now = new Date();
    diff = future - now;

    days = Math.floor(diff / (1000 * 60 * 60 * 24));
    hours = Math.floor(diff / (1000 * 60 * 60));
    mins = Math.floor(diff / (1000 * 60));
    secs = Math.floor(diff / 1000);

    d = days;
    h = hours - days * 24;
    m = mins - hours * 60;
    s = secs - mins * 60;

    document.getElementById("timer")
        .innerHTML =
        '<div>' + d + '<span>days</span></div>' +
        '<div>' + h + '<span>hours</span></div>' +
        '<div>' + m + '<span>minutes</span></div>' +
        '<div>' + s + '<span>seconds</span></div>';
}
setInterval('updateTimer()', 1000);
  </script>
   </body>
</html>