<?php include('./includes/header.php')?>
<section class="index-section mb-5" style="color: #5fbeaa !important; background-color: #313a43 !important;">
        <div class="page-content">
            <div class="mb-1 text-center">
                <h1 class="font-weight-bold">YOUR PROFILE</h1>
            </div>
        </div>

    </section>
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 col-xl-9">
                    <form action="#">
                        <div class="block">
                            <!-- personal; Address-->
                            <div class="block-header">
                                <h5 class="mb-0">CHANGE YOUR PASSWORD</h5>
                            </div>
                            <div class="block-body">

                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label col-label" for="old_pass">Old Password</label>
                                        <input class="field__input" type="password" name="old_pass" placeholder="*******" id="old_pass">
                                    </div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3"></div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label col-label" for="new_pass">New Password</label>
                                        <input class="field__input" type="password" name="new_pass" placeholder="*******" id="new_pass">
                                    </div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3"></div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label col-label" for="chk_new_pass">Retype New Password </label>
                                        <input class="field__input" type="password" name="chk_new_pass" placeholder="*******" id="chk_new_pass">
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <!-- /personal; Address-->
                            </div>
                            <!-- Shippping Address-->
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-outline-dark" type="submit"  onblur="test_str()"><i class="fa fa-save mr-2"></i>Change Password</button>
                        </div>
                        <script type="text/javascript">
                        var password = document.getElementById("new_pass")
                        , confirm_password = document.getElementById("chk_new_pass");

                        function test_str() { 
                        var res; 
                        var str = 
                            document.getElementById("old_pass").value; 
                        if (str.match(/[a-z]/g) && str.match( 
                                /[A-Z]/g) && str.match( 
                                /[0-9]/g) && str.match( 
                                /[^a-zA-Z\d]/g) && str.length >= 8) 
                            res = "TRUE"; 
                        else 
                            res = "FALSE";
                            alert('Password is invaid.') ;
            
                          } 
                        function validatePassword(){
                        if(password.value != confirm_password.value) {
                            confirm_password.setCustomValidity("Passwords Don't Match");
                        } else {
                            confirm_password.setCustomValidity('');
                        }
                        }

                        password.onchange = validatePassword;
                        confirm_password.onkeyup = validatePassword;
                            </script> 
                        <div class="block">
                            <!-- personal; Address-->
                            <div class="block-header">
                                <h5 class="mb-0">PERSONAL DETAILS</h5>
                            </div>
                            <div class="block-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label col-label" for="fullname_personal;">Firstname</label>
                                        <input class="field__input" type="text" name="fullname_personal;" placeholder="Joe" id="fullname_personal">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label col-label" for="lastname_personal">Lastname</label>
                                        <input class="field__input" type="text" name="lastname_personal;" placeholder="Black" id="lastname_personal">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="company">Company</label>
                                        <input class="field__input" id="company_personal" name="company_personal" placeholder="XYZ" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label col-label" for="email_personal;">Email Address</label>
                                        <input class="field__input" type="text" name="email_personal;" placeholder="joe.black@gmail.com" id="email_personal">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label col-label" for="street_personal;">Street</label>
                                        <input class="field__input" type="text" name="street_personal;" placeholder="123 Main St." id="street_personal">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label col-label" for="city_personal;">City</label>
                                        <input class="field__input" type="text" name="city_personal;" placeholder="City" id="city_personal">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-label col-label" for="zip_personal;">ZIP</label>
                                        <input class="field__input" type="text" name="zip_personal;" placeholder="Postal code" id="zip_personal">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label col-label" for="state_personal;">State</label>
                                        <select placeholder="State" class="field__input field__input--select" name="state_personal;" id="state_personal">
                                        <option selected="" value="Default">State</option>
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
                                        <label class="form-label col-label" for="country_personal;">Country</label>
                                        <select size="1" class="field__input field__input--select" name="country_personal;" placeholder="Country" id="country_personal">
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
                                        <label class="form-label col-label" for="phonenumber_personal;">Phone Number</label>
                                        <input placeholder="Phone- Enter your 10 digit mobile number" class="field__input field__input--numeric " aria-required="true" size="30" type="tel" value="" type="text" name="phonenumber_personal" id="phonenumber_personal">
                                    </div>
                                </div>
                                <!-- /personal; Address-->
                            </div>
                            <!-- Shippping Address-->

                        </div>
                        <div class="form-group text-center">
                            <a href="#" class="btn btn-outline-dark" id="save_changes" type="submit" onclick="detail_register()"><i class="fa fa-save mr-2"></i>Save changes</a>
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
                            <a href="./userpanel_profile.php" class="btn w-100 border-user m-0 text-left active-panel"><i class="mx-2 fa fa-user-o" aria-hidden="true"></i> Profile</a>
                            <a href="./userpanel_invoice.php" class="btn w-100 border-user m-0 text-left bg-light"><i class="mx-2 fa fa-map-pin" aria-hidden="true"></i> Addresses</a>
                            <a href="./index.php" class="btn w-100 border-user m-0 text-left bg-light"><i class="mx-2 fa fa-sign-out" aria-hidden="true"></i> Logout</a>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script>
        function detail_register()
        {

        var firstname = document.getElementById('fullname_personal').value;
        var lastname = document.getElementById('lastname_personal').value;
        var company = document.getElementById('company_personal').value;
        var email = document.getElementById('email_personal').value;
        var address = document.getElementById('street_personal').value;
        var city = document.getElementById('city_personal').value;
        var pincode = document.getElementById('zip_personal').value;
        var number=document.getElementById('phonenumber_personal').value;
        var submit = document.getElementById('save_changes').value;

        var letters = /^[A-Za-z]+$/;
        var comp=/^[.@&]?[a-zA-Z0-9 ]+[ !.@&()]?[ a-zA-Z0-9!()]+/;
        var filter = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/; 
        var street=/^([a-zA-z0-9/\\''(),-\s]{2,255})$/;
        var cit=/^[a-zA-Z',.\s-]{1,25}$/;
        var zip=/^[1-9][0-9]{5}$/;
        var phone=/^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[456789]\d{9}|(\d[ -]?){10}\d$/;

        if(firstname=='')
		{
			alert('Please enter your Firstname');
		}
		else if(!letters.test(firstname))
		{
			alert('Invalid firstname.');
		}
        else if(lastname=='')
        {
            alert('Please enter your Lastname');
        }
        else if(!letters.test(lastname))
		{
			alert('Invalid lastname.');
		}
        else if(company=='')
		{
			alert('Please enter your Company Name.');
		}
        else if(!comp.test(company))
		{
			alert('Invalid Company Name.');
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
    <?php include('./includes/footer.php')?>