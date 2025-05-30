<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" />
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" tyle="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" tyle="text/css" href="./assets/css/hover.css">
    <link rel="stylesheet" tyle="text/css" href="./assets/css/cart_pages.css">

    <title>cart_info
    </title>
</head>
<!--background: rgb(255,255,255); background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(231,231,238,1) 41%);
background: rgb(255,255,255);background: linear-gradient(90deg, rgba(255,255,255,1) 51%, rgba(242,242,243,1) 55%);
background: rgb(255,255,255);background: linear-gradient(90deg, rgba(255,255,255,1) 51%, rgba(231,231,238,1) 55%);-->

<body style=" background: rgb(255,255,255);background: linear-gradient(90deg, rgba(255,255,255,1) 51%, rgba(242,242,243,1) 55%);">
    <div class="content" >
        <div class="wrap">
            <div class="main" style="background-color: #fff;">
                <header class="mb-0 pb-0">
                    <a class="logo logo--left" href="./index.php">
                        <img class="logo_image" src="./assets/images/New Project.png" style="width: 18rem;">
                    </a>
                    <nav aria-label="breadcrumb" style="margin-left: -15px;">
                        <ol class="breadcrumb cart_bc mt-3" style="background-color:transparent;">
                            <li class="breadcrumb-item"><a href="./cart.php">Cart</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Information</li>
                            <li class="breadcrumb-item"><a href="./cart_shipinfo.php">Shipping</a></li>
                            <li class="breadcrumb-item"><a href="./cart_payment.php">Payment</a></li>
                        </ol>
                    </nav>
                </header>
                <main class="pb-5">
                    <div>
                        <form action="/" method="POST">
                            <div class="steps">
                                <div class="section">
                                    <div class="section_header">
                                        <div
                                            class="layout-flex layout-flex layout-flex--tight-vertical layout-flex--loose-horizontal layout-flex--wrap">
                                            <h5 class="layout-flex__item layout-flex__item--stretch" tabindex="-1">
                                                Contact information
                                            </h5>

                                            <p class="layout-flex__item">
                                                <span aria-hidden="true">Already have an account?</span>
                                                <a href="./login.php">
                                                    Log in
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="field__label" for="Email">Email</label>
                                        <input placeholder="Email" aria-required="true" class="field__input" size="30"
                                            type="email" value="" id="checkout_email" onblur="checkEmail(this.value)">
                                    </div>
                                    <div class="mt-3">
                                        <div class="checkbox-wrapper">
                                            <div class="checkbox__input">
                                                <div class="checkbox">
                                                    <input id="check" type="checkbox" name="check" value="check" style="width: 18px;
                                                    height: 18px;">
                                                </div>
                                            </div>
                                            <label class="checkbox__label">
                                                I agree to receive marketing SMS and emails from Hastkala
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    function checkEmail(str)
                                    {
                                        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                                        if(!re.test(str))
                                        alert("Please enter a valid email address");
                                    }
                                </script>
                                <div class="section">
                                    <div class="section_header">
                                        <h5> Shipping Address</h5>
                                    </div>
                                    <div class="address-fields">
                                    <form>
                                        <div class="field field--half">
                                            <label class="field__label" for="first_name">First name</label>
                                            <input placeholder="First name" class="field__input" aria-required="true"
                                                size="30" type="text" value="" id="first_name">
                                        </div>
                                        <div class="field field--half">
                                            <label class="field__label" for="last_name">Last name</label>
                                            <input placeholder="Last name" class="field__input" aria-required="true"
                                                size="30" type="text" value="" id="last_name">
                                        </div>
                                        <div class="field">
                                            <label class="field__label" for="address1">Address</label>
                                            <input placeholder="Address" aria-expanded="false" aria-required="true"
                                                class="field__input" size="30" type="text" value="" id="address1">
                                        </div>
                                        <div class="field">
                                            <label class="field__label" for="city">City</label>
                                            <input placeholder="City" aria-expanded="false" aria-required="true"
                                                class="field__input" size="30" type="text" value="" id="city">
                                        </div>
                                        <div class="field field-one-third">
                                            <label class="field__label" for="address_country">Country/Region</label>
                                            <select size="1" class="field__input field__input--select"
                                                id="address_country" placeholder="Country/Region">
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
                                        <div class="field field-one-third">
                                            <label class="field__label" for="address_province">State</label>
                                            <select placeholder="State" class="field__input field__input--select"
                                                id="address_province">
                                                <option disabled="">State</option>
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
                                        <div class="field field-one-third">
                                            <label class="field__label" for="address_zip">PIN code</label>
                                            <input placeholder="PIN code" class="field__input" aria-required="true"
                                                size="30" type="text" value="" id="address_zip">
                                        </div>
                                        <div class="field">
                                            <label class="field__label" for="address_phone">Phone- Enter your 10 digit
                                                mobile number</label>
                                            <input placeholder="Phone- Enter your 10 digit mobile number"
                                                class="field__input field__input--numeric " aria-required="true"
                                                size="30" type="tel" value="" id="address_phone"
                                                data-phone-formatter-country-code="91">
                                        </div>
                                        <div class="mt-3">
                                            <div class="checkbox-wrapper">
                                                <div class="checkbox__input">
                                                    <div class="checkbox">
                                                        <input id="check" type="checkbox" name="check" value="check"
                                                            style="width: 18px;
                                                        height: 18px;">
                                                    </div>
                                                </div>
                                                <label class="checkbox__label">
                                                    Save this information for next time
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 text-right sm-center">
                                <a type="button" class="btn btn-primary btn-lg" href="./cart_shipinfo.php"
                                    style="font-size: 16px;padding-top: 18px; padding-bottom: 18px;"  >
                                    Continue to shipping
                                </a>
                                <a class="footer__previous-link pt-3 sm-hide" href="./cart.php" style=" text-decoration: none;">
                                    <i class="fa fa-angle-left iconsize-10" aria-hidden="true" style="font-size: 20px;"></i>
                                    <span class="footer__previous-link-content">Return to cart</span>
                                </a>
                                <div class="d-block d-md-none d-lg-none ">
                                <a class="footer__previous-link pt-1" href="./cart.php" style=" text-decoration: none;">
                                    <i class="fa fa-angle-left iconsize-10" aria-hidden="true" style="font-size: 20px;"></i>
                                    <span class="footer__previous-link-content">Return to cart</span>
                                </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="main__footer" style="margin-top: 2.2em;">
                        <ul class="text-center" style="    margin-left: -40px;">
                            <li class="policy">
                                <a href="#">Refund policy</a>
                            </li>
                            <li class="policy">
                                <a href="#">Privacy policy</a>
                            </li>
                            <li class="policy">
                                <a href="#">Terms of service</a>
                            </li>
                        </ul>
                    </div>
                </main>

            </div>
            <aside class="sidebar">
                <div class="sidebar_content">
                    <div class="order">
                        <div class="order-summary__sections" style="color: #323232;">
                            <div class="order-summary__section product-list">
                                <div class="order-summary__section__content">
                                    <table class="product-table b-0">
                                        <tbody>
                                            <tr class="pt-0 pro_info">
                                                <td>
                                                    <div class="pro-img_cart">
                                                        <div class="product-wrapper">
                                                            <img class="img-fluid" src="assets/images/cart_proimg1.jpg">
                                                        </div>
                                                    </div>
                                                </td>
                                                <th class="pro-desc_cart py-0">
                                                    <span class="pro-desc-name">
                                                        Hand Engraved Square Spice Box With Spoon In Sheesham Wood (9
                                                        Partitions, 80 ML)
                                                    </span>
                                                </th>
                                                <td class="product__price font-weight-bold">
                                                    <span class="">Rs. 1,195.00</span>
                                                </td>
                                            </tr>
                                            <tr class="pro_info">
                                                <td>
                                                    <div class="pro-img_cart">
                                                        <div class="product-wrapper">
                                                            <img class="img-fluid" src="assets/images/cart_proimg2.jpg">
                                                        </div>
                                                    </div>
                                                </td>
                                                <th class="pro-desc_cart py-0">
                                                    <span class="pro-desc-name">
                                                        River Rims' Studio Pottery Glazed Coffee Mugs In Ceramic (Set Of
                                                        2)
                                                    </span> </span>
                                                </th>
                                                <td class="product__price font-weight-bold">
                                                    <span class="">Rs. 695.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="order-summary__section discount">
                                <form action="/" method="post">
                                    <div class="field">
                                        <div style="display:flex">
                                            <div class="field__input-wrapper">
                                                <label class="field__label" for="reduction_code">Gift card or discount
                                                    code</label>
                                                <input placeholder="Gift card or discount code" class="field__input promo"
                                                    id="reduction_code" autocomplete="off" aria-required="true"
                                                    size="30" type="text">
                                            </div>
                                            <button name="button" type="submit"
                                                class="field__input-btn btn btn--disabled" aria-busy="false"
                                                disabled="disabled">
                                                <span class="btn__content"> Apply</span>
                                            </button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                            <div class="order-summary__section prices-line">
                                <table>
                                    <tbody class="prices-line">
                                        <tr class="price-line">
                                            <th class="font-weight-bold">Subtotal</th>
                                            <td class="font-weight-bold">
                                                <span>
                                                  Rs. 1,890.00
                                                </span>
                                              </td>
                                        </tr>
                                        <tr class="price-line">
                                            <th class="font-weight-bold">
                                                  Shipping
                                            </th>
                                            <td class="font-weight-bold">
                                              <span>
                                                Rs. 99.00
                                              </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="order-summary__section">
                                <table>
                                    <tbody>
                                        <tr class="price-line">
                                            <th class="font-weight-bold">
                                                <span class=" h5">Total</span>
                                              </th>    
                                              <td class="font-weight-bold">
                                                <span class="payment-due__price ">
                                                  Rs. 1,989.00
                                                </span>
                                              </td>                                    
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script>

    <script>
           function detail_shipadd()
        {

        var firstname = document.getElementById('first_name').value;
        var lastname = document.getElementById('last_name').value;
        var address = document.getElementById('address1').value;
        var city = document.getElementById('city').value;
        var pincode = document.getElementById('address_zip').value;
        var number=document.getElementById('address_phone').value;
        var submit = document.getElementById('save_changes').value;

        var letters = /^[A-Za-z]+$/;
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
        else if(address=='')
		{
			alert('Please enter your Street.');
		}
        else if(!street.test(address))
		{
			alert('Invalid Address.');
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
               window.location="cart_shipinfo.php";
		}

        }
            </script>
</body>
</html>
