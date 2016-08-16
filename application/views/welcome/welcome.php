<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
<meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
<meta name="author" content="Codrops" />
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>application/public/css/demo.css" />
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>application/public/css/slider_view.css" />
<script type="text/javascript" src="<?= base_url() ?>application/public/js/modernizr.custom.86080.js"></script>

<body id="page">
    <div class="disabler"></div>
    
    
    
    <ul class="cb-slideshow">
        <li><span id="01">Image 02</span><div class="container slide"><div class="news-container"><p class="news-text"><?php echo $news[0]['title']; ?></p></div></div></li>
        <li><span id="02">Image 02</span><div class="container slide"><div class="news-container"><p class="news-text"><?php echo $news[1]['title']; ?></p></div></div></li>
        <li><span id="03">Image 02</span><div class="container slide"><div class="news-container"><p class="news-text"><?php echo $news[2]['title']; ?></p></div></div></li>
        <li><span id="04">Image 02</span><div class="container slide"><div class="news-container"><p class="news-text"><?php echo $news[3]['title']; ?></p></div></div></li>
        <li><span id="05">Image 02</span><div class="container slide"><div class="news-container"><p class="news-text"><?php echo $news[4]['title']; ?></p></div></div></li>
        <li><span id="06">Image 02</span><div class="container slide"><div class="news-container"><p class="news-text"><?php echo $news[5]['title']; ?></p></div></div></li>
        <!-- 
         <li><span id="07">Image 02</span><div class="news-container"><p class="news-text"><?php echo $news[6]['title']; ?></p><a class="ad-read" href="<?php echo $news[6]['link']; ?>" target="_blank">Read More...</a></div></li>
         <li><span id="08">Image 02</span><div class="news-container"><p class="news-text"><?php echo $news[7]['title']; ?></p><a class="ad-read" href="<?php echo $news[7]['link']; ?>" target="_blank">Read More...</a></div></li>
         <li><span id="09">Image 02</span><div class="news-container"><p class="news-text"><?php echo $news[8]['title']; ?></p><a class="ad-read" href="<?php echo $news[8]['link']; ?>" target="_blank">Read More...</a></div></li>
         <li><span id="10">Image 02</span><div class="news-container"><p class="news-text"><?php echo $news[9]['title']; ?></p><a class="ad-read" href="<?php echo $news[9]['link']; ?>" target="_blank">Read More...</a></div></li>
        -->
    </ul>
    <div class="navbar style_navbar01">

        <div id="wrapper">
            <div class="container">
                <div class="span6">
                    <div class="inline">
                        <div class="item" id="home"><p align="center" class="item-link" href="#" >Home</p></div>
                        <div class="item" id="courses"><p align="center" class="item-link" href="#">About Us</p></div>

                        
                    </div>
                </div>
                <div class="span6">
                    <div class="logo"></div>
                    <div class="ajax-loader">
                    </div>
                    <div class="error-login">
                        <div class="error-side-1">
                        </div>
                        <div class="error-side-2">
                            <i class="fa fa-times fa-lg" id="centerer-fa"></i><p align="left" id="error-text">Incorrect combination, please try again.</p>
                        </div>

                    </div></div>
                <div id="pswd_info">
                    <h4>Password must meet the following requirements:</h4>
    <ul>
        <li id="letter" class="invalid">At least <strong>one letter</strong></li>
        <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
        <li id="number" class="invalid">At least <strong>one number</strong></li>
        <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
    </ul>
                </div>
                <div class="span6">
                    <div class="form-inline form-fixer">
                        <input type="email" placeholder="Email or Username" value="" id="email" autocomplete="on" data-toggle="tooltip" data-placement="bottom" title="Enter your email or username" class="input-medium login_fixer">
                        <input type="password" placeholder="Password" autocomplete="on" id="password" required class="input-medium login_fixer">
                        <input type="button" value="Login" id="logger" class="btn btn-success customized-btn">
                        <div class="clear-fx"></div>               
                        <a class="clear-fx-form">Forgot Password?</a>

                        <a id="session-keeper" class="clear-fx-form"><input type="checkbox" id="checkbox" class="checkbox regular" name="1" id="1">
                            <label class="labela" for="checkbox"></label>
                            <label class="labelf" for="checkbox">Keep me connected</label></a>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="container register">
        <div class="span6 register-section error-signup">
            <div class="sign-up-error-msg">
                <p class="error-msg" id="msg001">This Email is already registered. Please retrieve your account
                    by clicking <a id="forgotpass">here</a> , or use a different Email address.</p>
                <p class="error-msg" id="msg002"></p>
                <p class="error-msg" id="backer"><a id="back">Back</a></p>
                <div class="error-msg" id="redirecter">
                    <div id="counter">
                        <p class="number">one</p>
                    </div>
                </div>
            </div>
            
        </div>
     <div class="span6 register-section">
            <h3 id="welcome-title">Sign Up today... it's FREE!</h3>
            <div class="clear-fx"></div>
            <div class="reg-holder">
                <div class="registration-form" id="form-01">
                    
                    <input class="input-medium input-reg" type="text" id="fname" data-toggle="fname" title="Enter your first name" name="fname" placeholder="First Name" />
                    <input class="input-medium input-reg" type="text" id="lname" data-toggle="lname" title="Your last name" name="lname" placeholder="Last Name" />
                    <input class="input-medium input-reg" type="text" id="username" data-toggle="username" title="Your Username" name="username" placeholder="Choose username" />
                    
                    
                    <select class="input-large input-reg-full" id="nationality" title="Nationality Please" data-toggle="nationality">
                        <option value="disabled" disabled selected>Nationality</option>
                        <option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
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
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
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
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
                    </select>
                    
                    
                    
                    <input class="input-large input-reg-full" type="email" id="regemail" data-toggle="email" title="Type proper Email please" name="regemail" placeholder="Email" />
                    <input class="input-medium input-reg-full" type="email" id="remail" data-toggle="remail" title="Re-type your email address" name="remail" placeholder="Re-type Email" />
                    <input class="input-medium input-reg-full" type="password" id="regpassword" name="password" data-toggle="passworder" title="Choose password" placeholder="Choose Password" />
                   <select class="input-large input-reg-full" id="location" data-toggle="location" title="Choose current location">
                        
                        <option value="disabled" disabled selected>Where do you currently live?</option>
                        <option value="saudiarabia">Saudi Arabia</option>
                        <option value="qatar">Qatar</option>
                        <option value="uae">UAE</option>
                        <option value="kuwait">Kuwait</option>
                        <option value="oman">Oman</option>
                        <option value="bahrain">Bahrain</option>
                        
                    
                    </select>
                    <div class="phone-section phone-section">
                        <input type="text" id="country-code" class="dropdowner" placeholder="" disabled="disabled"/>
                        <input class="input-large input-reg-semi-full" type="number" id="phone" data-toggle="phone" title="Enter proper phone" name="phone" max="99999999" placeholder="phone" />

                    </div>
                    
                    <div class="phone-section gen">
                        <div class="genderer">
                            <div class="gendersection">
                                
                                <input type="radio" id="male" name="male">
                                <label class="radio" id="maler" for="male" data-toggle="male" title="Are you a Prince,or a Princess?"></label><label class="radio2" for="male">Male</label>
                            </div>
                        
                            <div class="gendersection2">
                                <input type="radio" id="female" name="female" data-toggle="female" title="Are you a Prince,or a Princess?">
                                <label class="radio" id="femaler" for="female"></label><label class="radio2" for="female">Female</label>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>

                
                
                
                
                
                
                
                
            

                <div class="registration-form" id="form-02">
                     
                 

                    
<select class="input-large input-reg-full" tabindex="-1" id="ctype" title="Course type" data-toggle="ctype" title="Choose Course type">
                        <option value="disabled" disabled selected>Course type</option>
                        <option value="general">General English</option>
                        <option value="conversation">Conversation English</option>
                        <option value="business">Business English</option>
                        
                       </div>   

                    </select>
                 
                   <select class="input-large input-reg-full" tabindex="-1" id="lmode" data-toggle="lmode" title="Choose Learning Mode">
                        
                        <option value="disabled" disabled selected>Learning mode</option>
                        <option value="group">In group (6 students)</option>
                        <option value="private">Individual (Private)</option>
                        
                    </select>                   
                    <div class="phone-section phone-section">
                    <select class="input-large input-reg dropdowner"  tabindex="-1" name="clevel" id="clevel" data-toggle="clevel" title="Choose level please">
                        
                        <option value="disabled" disabled selected>Choose course</option>
                        <option value="Beginner">Beginner Level</option>
                        <option value="Pre - Intermediate">Pre - Intermediate Level</option>
                        <option value="Intermediate">Intermediate Level</option>
                        <option value="Upper - Intermediate">Upper - Intermediate Level</option>
                        <option value="Advanced">Advanced Level</option>
                        <option value="Expert">Expert Level</option>
                        
                    
                    </select>
                                         <input tabindex="-1" class="btn btn-primary popup-trigger" type="button" id="asses" name="asses" value="Take Assessment test"/>

                    </div>
                    
<select tabindex="-1" class="input-large input-reg-full" id="smonth" data-toggle="smonth" title="When do you want to start class?">
                        
                        <option value="disabled" disabled selected>Preferred start month</option>
                        <option value="april">April 01 2016 (<php echo $april;?> days from today)</option>
                        <option value="may">May 01 2016 (<php echo $may;?> days from today)</option>
                        <option value="june">June 01 2016 (<php echo $june;?> days from today)</option>
                    
                    </select>                   
                <select tabindex="-1" class="input-large input-reg-full" id="sweek" data-toggle="sweek" title="Choose your weekly class routine">
                        
                        <option value="disabled" disabled selected>Preferred weekly schedule</option>
                        <option value="monday">Monday - Wednesday - Saturday</option>
                        <option value="tuesday">Tuesday - Thursday - Sunday</option>
                        
                    
                    </select>
                <select tabindex="-1" class="input-large input-reg-full" id="dtime" data-toggle="stime" title="At what time of the day do you want to take the course?">
                        
                        <option value="disabled" disabled selected>Preferred daily timing</option>
                        <option value="8am">8:00 am - 10:00 am</option>
                        <option value="10am">10:00 am - 12:00 pm</option>
                        <option value="2pm">2:00 pm - 4:00 pm</option>
                        <option value="4pm">4:00 pm - 6:00 pm</option>
                        <option value="6pm">6:00 pm - 8:00 pm</option>
                        <option value="8pm">8:00 pm - 10:00 pm</option>
                        
                        
                    
                    </select>
                <select tabindex="-1" class="input-large input-reg-full" id="tmode" data-toggle="tmode" title="Choose preferred teacher type">
                        
                        <option value="disabled" disabled selected>Preferred Teacher</option>
                        <option value="multilingual">Multi-lingual</option>
                        <option value="nativeenglish">Native English</option>
                        <option value="arabic">Professionl English speaking Arab</option>
                        </select>
                 </div>

            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

                <div class="registration-form" id="form-03">
                    
                    
                      <p id="activationtext" tabindex="-1" align="center"> Enter the Activation Code sent to your Phone:</p>
                    <input class="input-large input-reg-full" tabindex="-1" type="text" id="activation" maxlength="5" name="activation" placeholder="Enter Activation Code" />
                    <div class="activationstatus" tabindex="-1"></div>
                    
                </div>



            </div>
        

            <div class="phone-section progress-bar">
                
            </div>
            <div class="phone-section rules">
                <p align="left" id="terms">By clicking Sign Up, you agree with our <a id="cookie">Privacy</a> policy and <a id="cookie">Terms</a> of use, as well as <a id="cookie">Cookies</a> use.</p>
            </div>

            <div class="phone-section">
                <input type="button" class="btn btn-success input-xxlarge" value="Next >" id="register-btn" />
            </div>

        </div></div>
        <div class="popup"><div class="digits"></div>
            <div class="loader2"></div>
            <div class="result"><p id="result">Based on your result, We recommend that you attend:</p><h5 id="chosenl"></h5></div>
            <div class="questions-area">
                <h1 id="assesstitle"> English Assessment test</h1>
                
                <p id="qnote" align="left" class="noticerasses">Please answer the questions provided so that we can estimate your english skills and recommend the suitable course for you.</p>
                
                
                <div class="qholder" id="question01"><p id="qn">Question <b>1/15</b></p>
                <p id="question">The teacher asked if ___________ to bring our textbooks to class.</p>
        
        <div class="choices-container">
            <div class="choices">
                <label class="label-choices"> <input class="radio-choices" type="radio" id="01a" value="01a" name="q1"/>
                 all we had remembered</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="01b" value="01b" name="q1"/>
                had we all remembered</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="01c" value="01c" name="q1"/>
                we had all remembered</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="01d" value="01d" name="q1"/>
                had all we remembered</label>
            </div>
            
        </div>
                </div>
                
                
                <div class="qholder qdisplay" id="question02"><p id="qn">Question <b>2/15</b></p>
                <p id="question">We ___________ a lovely three weeks in the south of Spain last year.</p>
        
        <div class="choices-container">
            <div class="choices">
                <label class="label-choices"> <input class="radio-choices" type="radio" id="02a" value="02a" name="q2"/>
                 took</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="02b" value="02b" name="q2"/>
                passed</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="02c" value="02c" name="q2"/>
               did </label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="02d" value="02d" name="q2"/>
                spent</label>
            </div>
            
        </div>
                </div>
                
                <div class="qholder qdisplay" id="question03"><p id="qn">Question <b>3/15</b></p>
                <p id="question">It’s a great place to live apart from the increasing volume of ____________ that passes under my window every day.</p>
        
        <div class="choices-container">
            <div class="choices">
                <label class="label-choices"> <input class="radio-choices" type="radio" id="03a" value="03a" name="q3"/>
                traffic</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="03b" value="03b" name="q3"/>
               vehicles</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="03c" value="03c" name="q3"/>
               transport</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="03d" value="03d" name="q3"/>
               circulation</label>
            </div>
            
        </div>
                </div>
                
                
                <div class="qholder qdisplay" id="question04"><p id="qn">Question <b>4/15</b></p>
                <p id="question">Please don’t forget to ring me when you __________ home.</p>
        
        <div class="choices-container">
            <div class="choices">
                <label class="label-choices"> <input class="radio-choices" type="radio" id="04a" value="04a" name="q4"/>
                   will get</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="04b" value="04b" name="q4"/>
                get</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="04c" value="04c" name="q4"/>
                are going to get</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="04d" value="04d" name="q4"/>
                   are getting</label>
            </div>
            
        </div>
                </div>
                
                
                
                <div class="qholder qdisplay" id="question05"><p id="qn">Question <b>5/15</b></p>
                <p id="question">When Sam was a small child, he ……… spend hours every day playing with stones in the garden.</p>
        
        <div class="choices-container">
            <div class="choices">
                <label class="label-choices"> <input class="radio-choices" type="radio" id="05a" value="05a" name="q5"/>
                   would</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="05b" value="05b" name="q5"/>
                was</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="05c" value="05c" name="q5"/>
                used</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="05d" value="05d" name="q5"/>
                   should</label>
            </div>
            
        </div>
                </div>
                
                
                
                
                <div class="qholder qdisplay" id="question06"><p id="qn">Question <b>6/15</b></p>
                <p id="question">Alex __________ judo after school every Friday.</p>
        
        <div class="choices-container">
            <div class="choices">
                <label class="label-choices"> <input class="radio-choices" type="radio" id="06a" value="06a" name="q6"/>
                   makes</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="06b" value="06b" name="q6"/>
                plays</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="06c" value="06c" name="q6"/>
                does</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="06d" value="06d" name="q6"/>
                  goes</label>
            </div>
            
        </div>
                </div>
                
                
                
                
                <div class="qholder qdisplay" id="question07"><p id="qn">Question <b>7/15</b></p>
                <p id="question">Have you been back to the house ___________ you grew up?</p>
        
        <div class="choices-container">
            <div class="choices">
                <label class="label-choices"> <input class="radio-choices" type="radio" id="07a" value="07a" name="q7"/>
                   who</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="07b" value="07b" name="q7"/>
                which</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="07c" value="07c" name="q7"/>
                when</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="07d" value="07d" name="q7"/>
                   where</label>
            </div>
            
        </div>
                </div>
                
                
                
                
                <div class="qholder qdisplay" id="question08"><p id="qn">Question <b>8/15</b></p>
                <p id="question">You must come quickly now or we won’t ___________ the bus.</p>
        
        <div class="choices-container">
            <div class="choices">
                <label class="label-choices"> <input class="radio-choices" type="radio" id="08a" value="08a" name="q8"/>
                 meet</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="08b" value="08b" name="q8"/>
                catch</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="08c" value="08c" name="q8"/>
                take</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="08d" value="08d" name="q8"/>
                run</label>
            </div>
            
        </div>
                </div>
                
                
                
                <div class="qholder qdisplay" id="question09"><p id="qn">Question <b>9/15</b></p>
                <p id="question">Carlos usually gets good marks at school ……… he doesn’t seem to spend much time studying.</p>
        
        <div class="choices-container">
            <div class="choices">
                <label class="label-choices"> <input class="radio-choices" type="radio" id="09a" value="09a" name="q9"/>
                 although</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="09b" value="09b" name="q9"/>
                because</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="09c" value="09c" name="q9"/>
                unless</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="09d" value="09d" name="q9"/>
                even</label>
            </div>
            
        </div>
                </div>
                
                
                
                <div class="qholder qdisplay" id="question10"><p id="qn">Question <b>10/15</b></p>
                <p id="question">Jenny likes her job but she hates the long ______________ to work every day.</p>
        
        <div class="choices-container">
            <div class="choices">
                <label class="label-choices"> <input class="radio-choices" type="radio" id="10a" value="10a" name="q10"/>
                 journey</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="10b" value="10b" name="q10"/>
                distance</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="10c" value="10c" name="q10"/>
                voyage</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="10d" value="10d" name="q10"/>
                travel</label>
            </div>
            
        </div>
                </div>
                
                
                
                <div class="qholder qdisplay" id="question11"><p id="qn">Question <b>11/15</b></p>
                <p id="question">Would you like to _____________ shopping with me this afternoon?</p>
        
        <div class="choices-container">
            <div class="choices">
                <label class="label-choices"> <input class="radio-choices" type="radio" id="11a" value="11a" name="q11"/>
                 do</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="11b" value="11b" name="q11"/>
                go</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="11c" value="11c" name="q11"/>
                make</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="11d" value="11d" name="q11"/>
                get</label>
            </div>
            
        </div>
                </div>
                
                
                <div class="qholder qdisplay" id="question12"><p id="qn">Question <b>12/15</b></p>
                <p id="question">One of my grandparents _____________ born in South Africa.</p>
        
        <div class="choices-container">
            <div class="choices">
                <label class="label-choices"> <input class="radio-choices" type="radio" id="12a" value="12a" name="q12"/>
                 is</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="12b" value="12b" name="q12"/>
                was</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="12c" value="12c" name="q12"/>
                were</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="12d" value="12d" name="q12"/>
                are</label>
            </div>
            
        </div>
                </div>
                
                
                
                <div class="qholder qdisplay" id="question13"><p id="qn">Question <b>13/15</b></p>
                <p id="question">When we went to London we ___________ in a very nice hotel near Oxford Circus.</p>
        
        <div class="choices-container">
            <div class="choices">
                <label class="label-choices"> <input class="radio-choices" type="radio" id="13a" value="13a" name="q13"/>
                 got</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="13b" value="13b" name="q13"/>
                spent</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="13c" value="13c" name="q13"/>
                stayed</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="13d" value="13d" name="q13"/>
                visited</label>
            </div>
            
        </div>
                </div>
                
                
                
                <div class="qholder qdisplay" id="question14"><p id="qn">Question <b>14/15</b></p>
                <p id="question">What ____________ you going to do in your summer holidays?</p>
        
        <div class="choices-container">
            <div class="choices">
                <label class="label-choices"> <input class="radio-choices" type="radio" id="14a" value="14a" name="q14"/>
                 are</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="14b" value="14b" name="q14"/>
                do</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="14c" value="14c" name="q14"/>
                will</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="14d" value="14d" name="q14"/>
                have</label>
            </div>
            
        </div>
                </div>
                
                
                
                <div class="qholder qdisplay" id="question15"><p id="qn">Question <b>15/15</b></p>
                <p id="question">Your blue ___________ are dirty — put on your blue skirt.</p>
        
        <div class="choices-container">
            <div class="choices">
                <label class="label-choices"> <input class="radio-choices" type="radio" id="15a" value="15a" name="q15"/>
                 jeans</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="15b" value="15b" name="q15"/>
                dress</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="15c" value="15c" name="q15"/>
                shoes</label>
            </div>
            <div class="choices">
               <label class="label-choices"> <input class="radio-choices" type="radio" id="15d" value="15d" name="q15"/>
                shirt</label>
            </div>
            
        </div>
                </div>
                
                <div class="qholder qdisplay" id="qprogressor"><p id="qp">You are about to submit your exam, click on FINISH button to get  <b>reviewed.</b></p>
                
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
        <input type="button" id="nexter" class="btn btn-primary" value="Next">
        <input type="button" id="backer2" class="btn btn-warning" value="Back">
        
            </div>
            <span class="popup-btn-close">close</span>
	</div>
        <div class="footer">
            <ul class="inline" id="rules">
                <li class="li" id="lang2">English(US) <i class="fa fa-caret-up"></i>
                </li>
                <li class="linker col-xs-3">.</li>
                <li class="li">Privacy</li>
                <li class="linker col-xs-3">.</li>
                <li class="li">Terms</li>
                <li class="linker col-xs-3">.</li>
                <li class="li">Cookies</li>
                <li class="linker col-xs-3">.</li>
                <li class="li">Advertising</li>
                <li class="linker col-xs-3">.</li>
                <li class="li">Help</li>
            </ul>
        </div>
    

