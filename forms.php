<?php
include 'includes/header.php';
$page = 'home';
$pageName = 'Forms';
$_COOKIE['pageName'] = $pageName;
?>
<main>
    <div class="main-content">
        <section class="forms-sec">
            <div class="row g-4">
                <div class="col-lg-6 col-12">
                    <form action="javascript:;">
                        <div class="register-form form-content">
                            <h4>Register Form</h4>
                            <div class="input-field">
                                <label for="">Email Address *</label>
                                <input class="custom-input" type="email">
                            </div>
                            <div class="input-field">
                                <label for="">Phone *</label>
                                <input class="custom-input phone-input" type="tel">
                            </div>
                            <div class="input-field">
                                <label for="">Country *</label>
                                <select class="country-select select-box" name="country">
                                    <option>Select Country</option>
                                    <option value="AF" disabled>Afghanistan (Disabled)</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, Democratic Republic of the Congo</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Cote D'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curacao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and Mcdonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="XK">Kosovo</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthelemy</option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="CS">Serbia and Montenegro</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.s.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label for="">Password *</label>
                                <div class="pswrd-cont">
                                    <a class="hidden" href="javascript:;"><i class="fa-solid fa-eye"></i></a>
                                    <input class="custom-input" type="password">
                                </div>
                            </div>
                            <div class="input-field">
                                <label for="">Confirm Password *</label>
                                <div class="pswrd-cont">
                                    <a class="hidden" href="javascript:;"><i class="fa-solid fa-eye"></i></a>
                                    <input class="custom-input" type="password">
                                </div>
                            </div>
                            <h6>* Required Fields</h6>
                            <div class="form-footer">
                                <div class="terms-agreement">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="register-terms-condition">
                                        <span class="checkmark"></span>
                                    </div>
                                    <label for="register-terms-condition">Accept the terms and conditions</label>
                                </div>
                                <button type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-12">
                    <form action="javascript:;">
                        <div class="login-form form-content">
                            <h4>Login Form</h4>
                            <div class="input-field">
                                <label for="">Email Address *</label>
                                <input class="custom-input" type="email">
                            </div>
                            <div class="input-field">
                                <label for="">Password *</label>
                                <div class="pswrd-cont">
                                    <a class="hidden" href="javascript:;"><i class="fa-solid fa-eye"></i></a>
                                    <input class="custom-input" type="password">
                                </div>
                            </div>
                            <h6>* Required Fields</h6>
                            <div class="form-footer">
                                <button type="submit">Register</button>
                                <a href="javascript:;">Forgot Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12">
                    <form action="javascript:;"></form>
                    <div class="extended-form form-content">
                        <h4>Extended Form</h4>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="input-field">
                                    <label for="">Input Date</label>
                                    <input class="custom-input date-input" type="text" placeholder="MM/DD/YYYY">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="input-field">
                                    <label for="">Input Time</label>
                                    <input class="custom-input time-input" type="text" placeholder="HH:MM AM/PM">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="input-field">
                                    <label for="">Select Custom</label>
                                    <select class="select-box custom-select" name="">
                                        <option value="Option 01">Option 01</option>
                                        <option value="Option 02">Option 02</option>
                                        <option value="Option 03">Option 03</option>
                                        <option value="Option 04">Option 04</option>
                                        <option value="Option 05">Option 05</option>
                                        <option value="Option 06">Option 06</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="input-field">
                                    <label for="">Range Slider Double</label>
                                    <input class="range-double-value" type="hidden">
                                    <div class="range-double"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="input-field">
                                    <label for="">Range Slider Single</label>
                                    <input class="range-single-value" type="hidden">
                                    <div class="range-single"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="input-field">
                                    <label for="">Default Progress</label>
                                    <div class="progress progress-default">
                                        <div class="progress-bar" role="progressbar" style="width: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="input-field">
                                    <label for="">Default Progress</label>
                                    <div class="progress progress-primary">
                                        <div class="progress-bar" role="progressbar" style="width: 70%"
                                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="input-field">
                                    <label for="">Tags</label>
                                    <div>
                                        <span class="tags">
                                            tag 01
                                            <button onclick="removeTag(this)">
                                                <i class="fa-light fa-xmark"></i>
                                            </button>
                                        </span>
                                        <span class="tags">
                                            tag 02
                                            <button onclick="removeTag(this)">
                                                <i class="fa-light fa-xmark"></i>
                                            </button>
                                        </span>
                                        <span class="tags">
                                            tag 03
                                            <button onclick="removeTag(this)">
                                                <i class="fa-light fa-xmark"></i>
                                            </button>
                                        </span>
                                        <input class="tag-input" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="input-field">
                                    <label for="">Toggle Button Icon</label>
                                    <div class="custom-switch">
                                        <input type="checkbox">
                                        <span class="circle"></span>
                                        <span class="no"><i class="fa-light fa-xmark"></i></span>
                                        <span class="yes"><i class="fa-light fa-check"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="input-field">
                                    <label for="">Toggle Checked Icon</label>
                                    <div class="custom-switch checked">
                                        <input checked type="checkbox">
                                        <span class="circle"></span>
                                        <span class="no"><i class="fa-light fa-xmark"></i></span>
                                        <span class="yes"><i class="fa-light fa-check"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-12">
                                <div class="input-field">
                                    <label for="">Regular Image</label>
                                    <div class="img-upload-wrapper">
                                        <input class="img-upload" type="file" name="" id="img-upload">
                                        <img class="img-fluid" src="images/image_placeholder.jpg" alt="">
                                    </div>
                                    <div class="btn-wrapper">
                                        <label class="btn img-upload-btn" for="img-upload">Select Image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-12">
                                <div class="input-field">
                                    <label for="">Avatar Image</label>
                                    <div class="img-upload-wrapper">
                                        <input class="img-upload" type="file" name="" id="avatar-upload">
                                        <img class="img-fluid avatar-img" src="images/placeholder.jpg" alt="">
                                    </div>
                                    <div class="btn-wrapper">
                                        <label class="btn img-upload-btn" for="avatar-upload">Select Image</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php
include 'includes/footer.php';
$page = 'home';
?>