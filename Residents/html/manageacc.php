<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../css/registration.css">

      <title>NBBSP</title>
        <meta name="description" content="barangay management information system" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#03a9f4" />
        <meta name="apple-mobile-web-app-status-bar-style" content="default" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@site" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:title" content="barangay management information system" />
        <meta name="twitter:description" content="barangay management information system" />
        <meta name="twitter:image" content="" />

        <!-- Open Graph -->
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Barangay management information system" />
        <meta property="og:description" content="Barangay management information system" />
        <meta property="og:site_name" content="My App" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />

        <link rel="manifest" href="../html/manifest.json" />
        <script async src="https://unpkg.com/pwacompat" crossOrigin="anonymous"></script>

        <!-- Apple touch icon -->
        <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-touch-icon_120.png" />
    </head>


        <script>
            if ("serviceWorker" in navigator) {
                window.addEventListener("load", function () {
                    navigator.serviceWorker
                        .register("../html/serviceWorker.js")
                        .then((registration) => {
                            console.log("SW registration successful");
                        });
                });
            }
        </script>

   <body>
   <div class="wrapper">
      <!-- Sidebar bg -->
      <img src="assets/img/sidebar-bg.jpg" alt="sidebar img" class="bg-image">

      <!--=============== HEADER ===============-->
      <header class="header">
         <div class="header__container container">
            <div class="header__toggle" id="header-toggle">
               <i class="ri-menu-line"></i>
            </div>

            
      </header>

      <!--=============== SIDEBAR ===============-->
      <div class="sidebar" id="sidebar">
         <nav class="sidebar__container">
            <div class="sidebar__logo">
               <img src="../img/logo-modified.png" alt="" class="sidebar__logo-img">
            </div>

            <div class="sidebar__content">
              
               <div class="sidebar__list">
                  <a href="./profile.html" class="sidebar__link active-link">
                     <i class="ri-user-line"></i>
                     <span class="sidebar__link-name">Profile</span>
                     <span class="sidebar__link-floating">Profile</span>
                  </a>

                  <a href="./manageacc.php" class="sidebar__link">
                     <i class="ri-registered-line"></i>
                     <span class="sidebar__link-name">Manage Account</span>
                     <span class="sidebar__link-floating">Manage Account</span>
                  </a>
                  <a href="./request.php" class="sidebar__link">
                     <i class="ri-file-edit-line"></i>
                     <span class="sidebar__link-name">Request</span>
                     <span class="sidebar__link-floating">Request</span>
                  </a>

                  <a href="./complaint.php" class="sidebar__link">
                     <i class="ri-archive-fill"></i>
                     <span class="sidebar__link-name">Complaint Box</span>
                     <span class="sidebar__link-floating">Complaint Box</span>
                  </a>
               </div>

              
               <div class="sidebar__list">
                  <a href="./aboutus/AboutUs.html" class="sidebar__link">
                     <i class="ri-information-fill"></i>
                     <span class="sidebar__link-name">About Us</span>
                     <span class="sidebar__link-floating">About Us</span>
                  </a>


                  <a href="./index.html" class="sidebar__link">
                     <i class="ri-logout-box-r-line"></i>
                     <span class="sidebar__link-name">Logout</span>
                     <span class="sidebar__link-floating">Logout</span>
                  </a>
               </div>
            </div>

            <div class="sidebar__account">
               <img src="../img/user.png" alt="sidebar image" class="sidebar__perfil">

               <div class="sidebar__names">
                  <h3 class="sidebar__name">Will Lens</h3>
                  <span class="sidebar__email">willens@email.com</span>
               </div>

               <i class="ri-arrow-right-s-line"></i>
            </div>
         </nav>
      </div>


      <!--=============== MAIN ===============-->
      <main class="main-container" id="main">
               <form action="" method="POST" >
         <h2>Personal Information
         </h2>
         <hr style="
         border: 2px solid #246dec;
         margin: 2px -1px;
         ">
         <label for="housetype"> Residential House Type </label>
         <input type="radio" name="housetype" value="Owner" required> Owner
         <input type="radio" name="housetype" value="Sharer" required> Sharer
         <input type="radio" name="housetype" value="Renter"required> Renter 

         <br>

         <label for="housenum">Household Number</label>
         <input type="text" id="Household_num" name="housenum"  placeholder="HN831BP21996" required>

         <label for="famnum">Family Number</label>
         <input type="text" id="fam_num" name="famnum"  placeholder="fam831BP21996" required>
         <br>
         <label for="residenttype"> Resident Type</label>
         <input type="checkbox" name="residenttype" value="primary">  <h5>PRIMARY</h5>

         <label for="gender">Gender</label>
         <select name="gender" required>
         <option> -Select- </option>
         <option value="male ">Male</option>
         <option value="female">Female</option>
         </select><br>

         <label for="lname">Last Name</label>
         <input type="text" id="lname" name="lname"  placeholder="Last Name" required>
         <label for="ename">Ext.(Jr/Sr) </label>
         <input type="text" id="ename" name="ename"  placeholder="(Jr/Sr)" required><br>


         <label for="fname">First Name</label>
         <input type="text" id="fname" name="fname"  placeholder="First Name" required>
         <label for="mname">Middle Name</label>
         <input type="text" id="mname" name="mname"  placeholder="Middle Name" required><br>


         <label for="contact">Contact Number</label>
         <input type="number" id="contact" name="contact" required placeholder="Enter your phone number"required>

         <label for="year">Years of Residency </label>
         <input type="number" id="year" name="year" required placeholder="Enter your Years of Residency"required>
         <br>


         <div class="drop-zone">
            <span class="drop-zone__prompt">Drop file here or click to upload</span>
            <input type="file" name="myFile" class="drop-zone__input" accept=".jpg, .jpeg, .png" required>
         </div> 




         <hr style="
         border: 2px solid #246dec;
         margin: 2px -1px;
         ">

         <label for="dob">Date of Birth</label>
         <input type="date" id="dob" name="dob" required>

         <label for="brn">Birth Registration Number</label>
         <input type="text" id="brn" name="brn" placeholder="HN831BP21996" required>

         <label for="brd">Birth Registration Date</label>
         <input type="date" id="brd" name="brd" required><br>

         <label for="weight">Weight(kg)</label>
         <input type="number" id="weight" name="weight" placeholder=" kg" required>

         <label for="height">Height(ft)</label>
         <input type="number" id="height" name="height" placeholder="ft" required>

         <label for="nationality">Nationality</label>
         <input type="text" id="citizen" name="nationality" placeholder="ex. Filipino" required><br>

         <label for="bplace">Birth Place</label>
         <input type="text" id="bplace" name="bplace" placeholder="Municipality" required>

         <label for="status">Marital Status</label>
         <select name="marital" required>
            <option>-select-</option>
         <option value="single ">Single</option>
         <option value="married">Married</option>
         <option value="separated">Legally Separated</option>
         <option value="widowed">Widowed</option>
         </select>

         <label for="soloparent"> Solo Parent </label>
         <input type="radio" name="soloparent" value="yes" required> Yes
         <input type="radio" name="soloparent" value="no" required > No


         <hr style="
         border: 2px solid #246dec;
         margin: 2px -1px;
         ">

         <h2>Physical Address</h2>
         <hr style="
         border: 2px solid #246dec;
         margin: 2px -1px;
         ">
         <label for="permadd"> Is present address is same as permanent address?</label>
         <input type="radio" name="permadd" value="yes" required> Yes
         <input type="radio" name="permadd" value="no" required> No
         <br>

         <label for="presentadd"> Present Address</label>
         <input type="text" id="presentadd" name="Hnum" placeholder="House Number" required>
         <input type="text" id="presentadd" name="street" placeholder=" Street " required>
         <input type="text" id="presentadd" name="Brgy" placeholder=" Barangay" required>
         <input type="text" id="presentadd" name="municipality" placeholder="Municipality" required>
         <input type="text" id="presentadd" name="province" placeholder="Province" required><br>



         <hr style="
         border: 2px solid #246dec;
         margin: 2px -1px;
         ">

         <h2>Personal Background</h2>

         <hr style="
         border: 2px solid #246dec;
         margin: 2px -1px;
         ">

         <label for="osy"> Out of School Youth </label>
         <input type="radio" name="osy" value="Yes" required> Yes
         <input type="radio" name="osy" value="No" required> No 

         <label for="voter"> Registered Voter </label>
         <input type="radio" name="voter" value="yes" required> Yes 
         <input type="radio" name="voter" value="no" required> No <br>
         <br>

         <label >OFW</label>
         <select id="ofw" name="ofw" >
            <option>-select-</option>
         <option value="yes">Yes</option>
         <option value="no">No</option>
         </select>


         <label >Country</label>
         <select id="country" name="country"    > 
            
            <option>Select Country</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Åland Islands">Åland Islands</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="American Samoa">American Samoa</option>
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
            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
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
            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
            <option value="Cook Islands">Cook Islands</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Cote D'ivoire">Cote D'ivoire</option>
            <option value="Croatia">Croatia</option>
            <option value="Cuba">Cuba</option>
            <option value="Cyprus">Cyprus</option>
            <option value="Czech Republic">Czech Republic</option>
            <option value="Denmark">Denmark</option>
            <option value="Djibouti">Djibouti</option>
            <option value="Dominica">Dominica</option>
            <option value="Dominican Republic">Dominican Republic</option>
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
            <option value="Guernsey">Guernsey</option>
            <option value="Guinea">Guinea</option>
            <option value="Guinea-bissau">Guinea-bissau</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
            <option value="Honduras">Honduras</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
            <option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option>
            <option value="Isle of Man">Isle of Man</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jersey">Jersey</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
            <option value="Korea, Republic of">Korea, Republic of</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Liberia">Liberia</option>
            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Macao">Macao</option>
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
            <option value="Montenegro">Montenegro</option>
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
            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
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
            <option value="Saint Helena">Saint Helena</option>
            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="Saint Lucia">Saint Lucia</option>
            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
            <option value="Samoa">Samoa</option>
            <option value="San Marino">San Marino</option>
            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
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
            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
            <option value="Spain">Spain</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Sudan">Sudan</option>
            <option value="Suriname">Suriname</option>
            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
            <option value="Swaziland">Swaziland</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
            <option value="Taiwan">Taiwan</option>
            <option value="Tajikistan">Tajikistan</option>
            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
            <option value="Thailand">Thailand</option>
            <option value="Timor-leste">Timor-leste</option>
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
            <option value="Viet Nam">Viet Nam</option>
            <option value="Virgin Islands, British">Virgin Islands, British</option>
            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
            <option value="Wallis and Futuna">Wallis and Futuna</option>
            <option value="Western Sahara">Western Sahara</option>
            <option value="Yemen">Yemen</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
         </select>

         <br>


         <label for="job">Occupation</label>
         <input type="text" id="job" name="job" placeholder="Occupation" required>

         <label for="skill">Skills</label>
         <input type="text" id="skill" name="skill" placeholder="Skill" required><br>

         <label for="idnum">SSS/UMID Number</label>
         <input type="text" id="idnum" name="idnum" placeholder="SSS/UMID" required>
         <label for="tin">TIN Number</label>
         <input type="text" id="tin" name="tin" placeholder="TIN Number" required><br>

         <label for="pwd">Person With Disability</label> <br>
         <div class="container">
            <div class="column-pwd">
               <div class="checkbox-wrapper">
               <input type="checkbox" name="pwd[]" value="Psychosocial Disability">
               <label for="Psychosocial Disability">Psychosocial Disability</label>
               </div>
               <div class="checkbox-wrapper">
               <input type="checkbox" name="pwd[]" value="Mental Disability">
               <label for="Mental Disability">Mental Disability</label>
               </div>
               <div class="checkbox-wrapper">
               <input type="checkbox" name="pwd[]" value="Hearing Disability">
               <label for="Hearing Disability">Hearing Disability</label>
               </div>
            </div>
            <div class="column-pwd">
               <div class="checkbox-wrapper">
               <input type="checkbox" name="pwd[]" value="Chronic Illness" >
               <label for="Chronic Illness">Chronic Illness</label>
               </div>
               <div class="checkbox-wrapper">
               <input type="checkbox" name="pwd[]" value="Visual Disability">
               <label for="Visual Disability">Visual Disability</label>
               </div>
               <div class="checkbox-wrapper">
               <input type="checkbox" name="pwd[]" value="Speech Impairment">
               <label for="Speech Impairment">Speech Impairment</label>
               </div>
            </div>
            <div class="column-pwd">
               <div class="checkbox-wrapper">
               <input type="checkbox" name="pwd[]" value="Learning Ability" >
               <label for="Learning Ability">Learning Ability</label>
               </div>
               <div class="checkbox-wrapper">
               <input type="checkbox" name="pwd[]" value="Orthopedic Disability" >
               <label for="Orthopedic Disability">Orthopedic Disability</label>
               </div>
               <div class="checkbox-wrapper">
               <input type="checkbox" name="pwd[]" value="Others" n>
               <label for="Others">Others</label>
               </div>
            </div>
         </div>
         <label for="changePasswordCheckbox">Change Password</label>
        <input type="checkbox" id="changePasswordCheckbox">

        <div id="changePasswordForm" style="display: none;">
            <hr style="border: 2px solid #246dec; margin: 2px -1px;">
            <h2>CHANGE PASSWORD</h2>
            <form class="form-horizontal" role="form" style="text-align:left;">
                <p style="color: #171922; margin-left: 10px;">Please enter below the required information:</p> <br>
                <label for="email" >Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter Email" ><br><br>
                <label for="currentPassword">Current Password:</label>
                <input type="password" id="currentPassword" name="currentPassword" ><br><br>
                <label for="newPassword" s>New Password:</label>
                <input type="password" id="newPassword" name="newPassword" s><br><br>
            </form>
        </div>
   

         <div class="button-container">
            <input type="submit" value="Submit">
         </div>

         </form>
               

      </main>

      <footer>
         Copyright &copy; <script>document.write(new Date().getFullYear())</script>websitename
      </footer>   
   </div>   
      <!--=============== MAIN JS ===============-->
      <script src="../js/sidebar.js"></script>'
<script src="../js/uploadpic.js"></script>  
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const changePasswordCheckbox = document.getElementById('changePasswordCheckbox');
        const changePasswordForm = document.getElementById('changePasswordForm');

        // Add event listener to checkbox
        changePasswordCheckbox.addEventListener('change', function () {
            if (changePasswordCheckbox.checked) {
                // Show change password form
                changePasswordForm.style.display = 'block';
            } else {
                // Hide change password form
                changePasswordForm.style.display = 'none';
            }
        });
    });
</script>
 </body>
</html>