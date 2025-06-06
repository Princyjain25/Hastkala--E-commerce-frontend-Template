<?php include './includes/header.php'?>
<section class="index-section mb-5" style="color: #5fbeaa !important; background-color: #313a43 !important;">
        <div class="page-content">
            <div class="mb-1 text-center">
                <h1 class="font-weight-bold">YOUR ADDRESS</h1>
            </div>
        </div>

    </section>
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 col-xl-9">
                    <form action="#">
                        <div class="block">
                            <!-- Invoice Address-->
                            <div class="block-header">
                                <h5 class="mb-0">INVOICE ADDRESS</h5>
                            </div>
                            <div class="block-body">

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label col-label" for="fullname_invoice">Full Name</label>
                                        <input class="field__input" type="text" name="fullname_invoice" placeholder="Joe Black" id="fullname_invoice">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label col-label" for="emailaddress_invoice">Email Address</label>
                                        <input class="field__input" type="text" name="emailaddress_invoice" placeholder="joe.black@gmail.com" id="emailaddress_invoice">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-label col-label" for="Address_invoice">Street</label>
                                        <input class="field__input" type="text" name="Address_invoice" placeholder="123 Main St." id="Address_invoice">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label col-label" for="city_invoice">City</label>
                                        <input class="field__input" type="text" name="city_invoice" placeholder="City" id="city_invoice">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label col-label" for="zip_invoice">ZIP</label>
                                        <input class="field__input" type="text" name="zip_invoice" placeholder="Postal code" id="zip_invoice">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label col-label" for="state_invoice">State</label>
                                        <select placeholder="State" class="field__input field__input--select" name="state_invoice" id="state_invoice">
                          <option value="State">State</option>
                          <option value="Andhra Pradesh">Andhra Pradesh</option>
                          <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands
                          </option>
                          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                          <option value="Assam">Assam</option>
                          <option value="Bihar">Bihar</option>
                          <option value="Chandigarh">Chandigarh</option>
                          <option value="Chhattisgarh">Chhattisgarh</option>
                          <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                          <option value="Daman and Diu">Daman and Diu</option>
                          <option value="Delhi">Delhi</option>
                          <option value="Lakshadweep">Lakshadweep</option>
                          <option value="Puducherry">Puducherry</option>
                          <option value="Goa">Goa</option>
                          <option value="Gujarat">Gujarat</option>
                          <option value="Haryana">Haryana</option>
                          <option value="Himachal Pradesh">Himachal Pradesh</option>
                          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                          <option value="Jharkhand">Jharkhand</option>
                          <option value="Karnataka">Karnataka</option>
                          <option value="Kerala">Kerala</option>
                          <option value="Madhya Pradesh">Madhya Pradesh</option>
                          <option value="Maharashtra">Maharashtra</option>
                          <option value="Manipur">Manipur</option>
                          <option value="Meghalaya">Meghalaya</option>
                          <option value="Mizoram">Mizoram</option>
                          <option value="Nagaland">Nagaland</option>
                          <option value="Odisha">Odisha</option>
                          <option value="Punjab">Punjab</option>
                          <option value="Rajasthan">Rajasthan</option>
                          <option value="Sikkim">Sikkim</option>
                          <option value="Tamil Nadu">Tamil Nadu</option>
                          <option value="Telangana">Telangana</option>
                          <option value="Tripura">Tripura</option>
                          <option value="Uttar Pradesh">Uttar Pradesh</option>
                          <option value="Uttarakhand">Uttarakhand</option>
                          <option value="West Bengal">West Bengal</option>
                      </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label col-label" for="country_invoice">Country</label>
                                        <select size="1" class="field__input field__input--select" name="country_invoice" placeholder="Country" id="country_invoice">
                      <option selected="selected" value="India">India</option>
                      <option value="United States">United States</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="Singapore">Singapore</option>
                      <option value="Afghanistan">Afghanistan</option>
                      <option value="Aland Islands">Åland Islands</option>
                      <option value="Albania">Albania</option>
                      <option value="Algeria">Algeria</option>
                      <option value="Andorra">Andorra</option>
                      <option value="Angola">Angola</option>
                      <option value="Anguilla">Anguilla</option>
                      <option value="Antigua And Barbuda">Antigua &amp; Barbuda</option>
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
                      <option value="Bosnia And Herzegovina">Bosnia &amp; Herzegovina</option>
                      <option value="Botswana">Botswana</option>
                      <option value="Bouvet Island">Bouvet Island</option>
                      <option value="Brazil">Brazil</option>
                      <option value="British Indian Ocean Territory">British Indian Ocean
                          Territory</option>
                      <option value="Virgin Islands, British">British Virgin Islands</option>
                      <option value="Brunei">Brunei</option>
                      <option value="Bulgaria">Bulgaria</option>
                      <option value="Burkina Faso">Burkina Faso</option>
                      <option value="Burundi">Burundi</option>
                      <option value="Cambodia">Cambodia</option>
                      <option value="Republic of Cameroon">Cameroon</option>
                      <option value="Canada">Canada</option>
                      <option value="Cape Verde">Cape Verde</option>
                      <option value="Caribbean Netherlands">Caribbean Netherlands</option>
                      <option value="Cayman Islands">Cayman Islands</option>
                      <option value="Central African Republic">Central African Republic
                      </option>
                      <option value="Chad">Chad</option>
                      <option value="Chile">Chile</option>
                      <option value="China">China</option>
                      <option value="Christmas Island">Christmas Island</option>
                      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                      <option value="Colombia">Colombia</option>
                      <option value="Comoros">Comoros</option>
                      <option value="Congo">Congo - Brazzaville</option>
                      <option value="Congo, The Democratic Republic Of The">Congo - Kinshasa
                      </option>
                      <option value="Cook Islands">Cook Islands</option>
                      <option value="Costa Rica">Costa Rica</option>
                      <option value="Croatia">Croatia</option>
                      <option value="Curaçao">Curaçao</option>
                      <option value="Cyprus">Cyprus</option>
                      <option value="Czech Republic">Czechia</option>
                      <option value="Côte d'Ivoire">Côte d’Ivoire</option>
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
                      <option value="Eswatini">Eswatini</option>
                      <option value="Ethiopia">Ethiopia</option>
                      <option value="Falkland Islands (Malvinas)">Falkland Islands</option>
                      <option value="Faroe Islands">Faroe Islands</option>
                      <option value="Fiji">Fiji</option>
                      <option value="Finland">Finland</option>
                      <option value="France">France</option>
                      <option value="French Guiana">French Guiana</option>
                      <option value="French Polynesia">French Polynesia</option>
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
                      <option value="Guatemala">Guatemala</option>
                      <option value="Guernsey">Guernsey</option>
                      <option value="Guinea">Guinea</option>
                      <option value="Guinea Bissau">Guinea-Bissau</option>
                      <option value="Guyana">Guyana</option>
                      <option value="Haiti">Haiti</option>
                      <option value="Honduras">Honduras</option>
                      <option value="Hong Kong">Hong Kong SAR</option>
                      <option value="Hungary">Hungary</option>
                      <option value="Iceland">Iceland</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Iraq">Iraq</option>
                      <option value="Ireland">Ireland</option>
                      <option value="Isle Of Man">Isle of Man</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Jamaica">Jamaica</option>
                      <option value="Japan">Japan</option>
                      <option value="Jersey">Jersey</option>
                      <option value="Jordan">Jordan</option>
                      <option value="Kazakhstan">Kazakhstan</option>
                      <option value="Kenya">Kenya</option>
                      <option value="Kiribati">Kiribati</option>
                      <option value="Kosovo">Kosovo</option>
                      <option value="Kuwait">Kuwait</option>
                      <option value="Kyrgyzstan">Kyrgyzstan</option>
                      <option value="Lao People's Democratic Republic">Laos</option>
                      <option value="Latvia">Latvia</option>
                      <option value="Lebanon">Lebanon</option>
                      <option value="Lesotho">Lesotho</option>
                      <option value="Liberia">Liberia</option>
                      <option value="Libyan Arab Jamahiriya">Libya</option>
                      <option value="Liechtenstein">Liechtenstein</option>
                      <option value="Lithuania">Lithuania</option>
                      <option value="Luxembourg">Luxembourg</option>
                      <option value="Macao">Macao SAR</option>
                      <option value="Madagascar">Madagascar</option>
                      <option value="Malawi">Malawi</option>
                      <option value="Malaysia">Malaysia</option>
                      <option value="Maldives">Maldives</option>
                      <option value="Mali">Mali</option>
                      <option value="Malta">Malta</option>
                      <option value="Martinique">Martinique</option>
                      <option value="Mauritania">Mauritania</option>
                      <option value="Mauritius">Mauritius</option>
                      <option value="Mayotte">Mayotte</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Moldova, Republic of">Moldova</option>
                      <option value="Monaco">Monaco</option>
                      <option value="Mongolia">Mongolia</option>
                      <option value="Montenegro">Montenegro</option>
                      <option value="Montserrat">Montserrat</option>
                      <option value="Morocco">Morocco</option>
                      <option value="Mozambique">Mozambique</option>
                      <option value="Myanmar">Myanmar (Burma)</option>
                      <option value="Namibia">Namibia</option>
                      <option value="Nauru">Nauru</option>
                      <option value="Nepal">Nepal</option>
                      <option value="Netherlands">Netherlands</option>
                      <option value="New Caledonia">New Caledonia</option>
                      <option value="New Zealand">New Zealand</option>
                      <option value="Nicaragua">Nicaragua</option>
                      <option value="Niger">Niger</option>
                      <option value="Nigeria">Nigeria</option>
                      <option value="Niue">Niue</option>
                      <option value="Norfolk Island">Norfolk Island</option>
                      <option value="North Macedonia">North Macedonia</option>
                      <option value="Norway">Norway</option>
                      <option value="Oman">Oman</option>
                      <option value="Pakistan">Pakistan</option>
                      <option value="Palestinian Territory, Occupied">Palestinian Territories
                      </option>
                      <option value="Panama">Panama</option>
                      <option value="Papua New Guinea">Papua New Guinea</option>
                      <option value="Paraguay">Paraguay</option>
                      <option value="Peru">Peru</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Pitcairn">Pitcairn Islands</option>
                      <option value="Poland">Poland</option>
                      <option value="Portugal">Portugal</option>
                      <option value="Qatar">Qatar</option>
                      <option value="Reunion">Réunion</option>
                      <option value="Romania">Romania</option>
                      <option value="Russia">Russia</option>
                      <option value="Rwanda">Rwanda</option>
                      <option value="Samoa">Samoa</option>
                      <option value="San Marino">San Marino</option>
                      <option value="Sao Tome And Principe">São Tomé &amp; Príncipe</option>
                      <option value="Saudi Arabia">Saudi Arabia</option>
                      <option value="Senegal">Senegal</option>
                      <option value="Seychelles">Seychelles</option>
                      <option value="Sierra Leone">Sierra Leone</option>
                      <option value="Singapore">Singapore</option>
                      <option value="Sint Maarten">Sint Maarten</option>
                      <option value="Slovakia">Slovakia</option>
                      <option value="Slovenia">Slovenia</option>
                      <option value="Solomon Islands">Solomon Islands</option>
                      <option value="Somalia">Somalia</option>
                      <option value="South Africa">South Africa</option>
                      <option value="South Korea">South Korea</option>
                      <option value="South Sudan">South Sudan</option>
                      <option value="Spain">Spain</option>
                      <option value="Sri Lanka">Sri Lanka</option>
                      <option value="Saint Barthélemy">St. Barthélemy</option>
                      <option value="Saint Helena">St. Helena</option>
                      <option value="Saint Kitts And Nevis">St. Kitts &amp; Nevis</option>
                      <option value="Saint Lucia">St. Lucia</option>
                      <option value="Saint Martin">St. Martin</option>
                      <option value="Saint Pierre And Miquelon">St. Pierre &amp; Miquelon
                      </option>
                      <option value="St. Vincent">St. Vincent &amp; Grenadines</option>
                      <option value="Sudan">Sudan</option>
                      <option value="Suriname">Suriname</option>
                      <option value="Svalbard And Jan Mayen">Svalbard &amp; Jan Mayen</option>
                      <option value="Sweden">Sweden</option>
                      <option value="Switzerland">Switzerland</option>
                      <option value="Taiwan">Taiwan</option>
                      <option value="Tajikistan">Tajikistan</option>
                      <option value="Tanzania, United Republic Of">Tanzania</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Timor Leste">Timor-Leste</option>
                      <option value="Togo">Togo</option>
                      <option value="Tokelau">Tokelau</option>
                      <option value="Tonga">Tonga</option>
                      <option value="Trinidad and Tobago">Trinidad &amp; Tobago</option>
                      <option value="Tunisia">Tunisia</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Turkmenistan">Turkmenistan</option>
                      <option value="Turks and Caicos Islands">Turks &amp; Caicos Islands
                      </option>
                      <option value="Tuvalu">Tuvalu</option>
                      <option value="United States Minor Outlying Islands">U.S. Outlying
                          Islands</option>
                      <option value="Uganda">Uganda</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                      <option value="Uruguay">Uruguay</option>
                      <option value="Uzbekistan">Uzbekistan</option>
                      <option value="Vanuatu">Vanuatu</option>
                      <option value="Holy See (Vatican City State)">Vatican City</option>
                      <option value="Venezuela">Venezuela</option>
                      <option value="Vietnam">Vietnam</option>
                      <option value="Wallis And Futuna">Wallis &amp; Futuna</option>
                      <option value="Western Sahara">Western Sahara</option>
                      <option value="Yemen">Yemen</option>
                      <option value="Zambia">Zambia</option>
                      <option value="Zimbabwe">Zimbabwe</option>
                  </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-label col-label" for="phonenumber_invoice">Phone Number</label>
                                        <input placeholder="Phone- Enter your 10 digit mobile number" class="field__input field__input--numeric " aria-required="true" size="30" type="tel" value="" type="text" name="phonenumber_invoice" id="phonenumber_invoice">
                                    </div>
                                    <div class="form-group col-12 mt-0">
                                        <div class="checkbox-wrapper p-0">
                                            <div class="checkbox__input">
                                                <div class="checkbox mt-1">
                                                    <input id="check" type="checkbox" name="check" value="check" style="width: 18px;
                            height: 18px;">
                                                </div>
                                            </div>
                                            <label class="checkbox__label">
                      Use a different shipping address
                    </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Invoice Address-->
                            </div>
                            <!-- Shippping Address-->

                        </div>
                        <div class="form-group text-center">
                            <a href="#" id="save_changes" class="btn btn-outline-dark" type="submit"  onclick="invoice_detail()"><i class="fa fa-save mr-2"></i>Save changes</a>
                        </div>
                    </form>
                   
                </div>

                <div class="col-xl-3 col-lg-4 mb-5">
                    <div class="card border-secondary">
                        <center> <img class="card-img-top mt-5 mr-5 ml-5 mb-2 p-0" src="./assets/images/images.jpg" alt="">
                            <p class="mb-0">Jane Doe</p>
                            <p class="text-muted mt-0">Georgia,Washington D.C</p>
                        </center>
                        <div class="card-body p-0">
                            <a href="./userpanel_orders.php" class="btn w-100 border-user m-0 text-left bg-light"><i class="mx-2 fa fa-shopping-bag" aria-hidden="true"></i> Orders <div class="order-number float-right text-center">5</div></a>
                            <a href="./userpanel_profile.php" class="btn w-100 border-user m-0 text-left bg-light"><i class="mx-2 fa fa-user-o" aria-hidden="true"></i> Profile</a>
                            <a href="./userpanel_invoice.php" class="btn w-100 border-user m-0 text-left active-panel"><i class="mx-2 fa fa-map-pin" aria-hidden="true"></i> Addresses</a>
                            <a href="./index.php" class="btn w-100 border-user m-0 text-left bg-light"><i class="mx-2 fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
                    function invoice_detail()
                    {
                        var name = document.getElementById('fullname_invoice').value;
                        var email = document.getElementById('emailaddress_invoice').value;
                        var address = document.getElementById('Address_invoice').value;
                        var city = document.getElementById('city_invoice').value;
                        var pincode = document.getElementById('zip_invoice').value;
                        var number=document.getElementById('phonenumber_invoice').value;
                        var submit = document.getElementById('save_changes').value;

                        var letters = /^[a-zA-Z][a-zA-Z ]*$/;
                        var filter = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/; 
                        var street=/^([a-zA-z0-9/\\''(),-\s]{2,255})$/;
                        var cit=/^[a-zA-Z',.\s-]{1,25}$/;
                        var zip=/^[1-9][0-9]{5}$/;
                        var phone=/^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[456789]\d{9}|(\d[ -]?){10}\d$/;

                        if(name=='')
                        {
                            alert('Please enter your Name');
                        }
                        else if(!letters.test(name))
                        {
                            alert('Invalid Name.');
                        }
                        else if(email=='')
                        {
                            alert('Please enter your Email Id.');
                        }
                        else if(!filter.test(email))
                        {
                            alert('Invalid Email Id.');
                        }
                        else if(address=='')
                        {
                            alert('Please enter your Street.');
                        }
                        else if(!street.test(address))
                        {
                            alert('Invalid Street.');
                        }
                        else if(city=='')
                        {
                            alert('Please enter your City.');
                        }
                        else if(!cit.test(city))
                        {
                            alert('Invalid City.');
                        }
                        else if(pincode=='')
                        {
                            alert('Please enter your area pincode.');
                        }
                        else if(!zip.test(pincode))
                        {
                            alert('Invalid Pincode.');
                        }
                        else if(number=='')
                        {
                            alert('Please enter your Phone Number.');
                        }
                        else if(!phone.test(number))
                        {
                            alert('Invalid Phone Number.');
                        }
                        else
                        {				                            
                            alert('Changes Saved !!');
                        }

                    }

                    </script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<?php include './includes/footer.php'?>