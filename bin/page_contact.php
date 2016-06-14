<!--
   ____    _    _   _ _   _ _____ ____
  | __ )  / \  | \ | | \ | | ____|  _ \
  |  _ \ / _ \ |  \| |  \| |  _| | |_) |
  | |_) / ___ \| |\  | |\  | |___|  _ <
  |____/_/   \_\_| \_|_| \_|_____|_| \_\

-->


<div class="scroll-target" data-value="banner"></div>
<article id="contact-banner-section">

  <div id="contact-banner" class="default-page-banner-short">
    <div class="default-page-banner-short-image visible-md visible-lg">
      <div class="manic-image-container" data-vertical-align="bottom">
        <img src="" data-image-desktop="images_cms/contact/contact-banner.jpg">
      </div>
    </div>
    <div class="default-page-banner-short-mobile-image visible-sm visible-xs">
      <div class="manic-image-container">
        <img src="" 
          data-image-mobile="images_cms/contact/contact-banner-mobile.jpg"
          data-image-tablet="images_cms/contact/contact-banner-tablet.jpg">
      </div>
    </div>

    <div class="default-page-banner-short-text">
      <img src="images/logo/home-banner-text.svg">
      <!-- <h1>Only 5 hours away!</h1> -->
    </div>

  </div> <!-- .default-page-banner-short -->

</article> <!-- #packages-banner-section -->

<!--
   _____ ___  ____  __  __
  |  ___/ _ \|  _ \|  \/  |
  | |_ | | | | |_) | |\/| |
  |  _|| |_| |  _ <| |  | |
  |_|   \___/|_| \_\_|  |_|

-->

<div class="scroll-target" data-value="form"></div>
<article id="contact-form-section">
  <div class="container-fluid has-breakpoint">

    <div class="row">
      <div class="col-md-3 col-sm-2"></div>
      <div class="col-md-6 col-sm-8">
        <div id="contact-form-title">
          <h4>Contact Us</h4>
          <h1>let us hear from you</h1>
        </div>
      </div>
    </div>

    <div class="row">
      
      <div class="col-md-4">
        <hr class="visible-sm visible-xs">
        <div id="contact-form-copy">
          <div class="contact-form-mobile-bg"></div>

          <div class="contact-form-address">
            <h4>Sage Hotel West Perth</h4>
            <p>1309 Hay Street,West Perth, WA, 6005, Australia.</p>
            <ul>
              <li>
                <span>P</span>
                <p>+61 8 6500 9100</p>
              </li>
              <li>
                <span>F</span>
                <p>+61 8 6500 9101</p>
              </li>
              <li>
                <span>E</span>
                <p>
                  <a href="mailto:reservations.westperth@sage-hotels.com">reservations.westperth<br class="visible-xs">@sage-hotels.com</a>
                </p>
              </li>
            </ul>
          </div>
          <div class="contact-form-operating-hours">
            <h4>Operating hours</h4>

            <div class="row">
              <div class="col-md-7 col-sm-4 col-xs-6">

                <div class="contact-form-operating-hours-item">
                  <strong>Check In Time</strong>
                  <ul>
                    <li>14:00</li>
                  </ul>
                </div>

              </div>
              <div class="col-md-5 col-sm-4 col-xs-6">

                <div class="contact-form-operating-hours-item">
                  <strong>Check Out Time</strong>
                  <ul>
                    <li>10:00</li>
                  </ul>
                </div>

              </div>
              <div class="col-xs-4 visible-sm">
                <div class="contact-form-operating-hours-item">
                  <strong>reception hours</strong>
                  <ul>
                    <li>24 hours</li>
                  </ul>
                </div>
              </div>
            </div>


            <div class="hidden-sm">
              <div class="contact-form-operating-hours-item">
                <strong>reception hours</strong>
                <ul>
                  <li>24 hours</li>
                </ul>
              </div>
            </div>


            <div class="contact-form-operating-hours-item">
              <strong>Central Reservations</strong>
              <ul>
                <li>1800 303 186</li>
                <li>Within Australia</li>
              </ul>
              <ul>
                <li>0800 480 274</li>
                <li>Within New Zealand</li>
              </ul>
            </div>
          </div>
          

          <hr class="visible-sm visible-xs contact-form-copy-mobile-hr">

        </div>
      </div>


      <div class="col-md-1">
        <div id="contact-form-divider">
        </div>
      </div>
      <div class="col-md-7">
        
        <div id="contact-form-container">

          <div id="contact-form-thankyou">
            <h3 class="contact-form-introduction">Thank you, your message has been submitted to Reservations and someone will respond shortly.</h3>
          </div>

          <form id="contact-form" 
            class="contact-us-form default-form simple-form-check"
            action="email.php" method="POST">
            
            <h3 class="contact-form-introduction">Please fill in the details below to submit your request. We will be in touch with you <br class="hidden-xs">in a short time to follow up with your request.</h3>

            <div class="row">
              <div class="col-md-6 col-sm-6">

                <div class="form-group">
                  <label>salutation</label>
                  <div class="manic-dropdown">
                    <select id="contact-salutation" name="contact-salutation">
                      <option value="mr">Please Select</option>
                      <option value="mr">Mr.</option>
                      <option value="ms">Ms.</option>
                      <option value="mrs">Mrs.</option>
                      <option value="dr">Dr.</option>
                    </select>
                  </div>
                </div>

              </div>
              <div class="col-md-6 col-sm-6">

                <div class="form-group">
                  <label>Select a subject*</label>
                  <div class="manic-dropdown">
                    <select id="contact-subject" name="contact-subject" class="required">
                      <option value="">Please Select</option>
                      <option value="room-reservation">Room Reservation</option>
                      <option value="spa-booking">SPA Booking</option>
                      <option value="table-reservation">Table Reservation</option>
                      <option value="anything-else">Anything Else</option>
                    </select>
                  </div>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">

                <div class="form-group">
                  <label>Full name*</label>
                  <input id="contact-fullname" name="contact-fullname" type="text" class="form-control required" placeholder="How should we address you?">
                </div>

              </div>
              <div class="col-md-6 col-sm-6">
                
                <div class="form-group">
                  <label>contact number</label>
                  <input id="contact-number" name="contact-number" type="text" class="form-control" placeholder="Include country code">
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">

                <div class="form-group">
                  <label>email address*</label>
                  <input id="contact-email-address" name="contact-email-address" type="text" class="form-control required only-email" placeholder="Please enter your email address">
                </div>

              </div>
              <div class="col-md-6 col-sm-6">

                <div class="form-group">
                  <label>country</label>
                  <div class="manic-dropdown scroll-version">
                    <select id="contact-country" name="contact-country">
                      <option value="">Please select</option>
                      
                      <option value="Afghanistan">Afghanistan</option>
                      <option value="Albania">Albania</option>
                      <option value="Algeria">Algeria</option>
                      <option value="American Samoa">American Samoa</option>
                      <option value="Andorra">Andorra</option>
                      <option value="Angola">Angola</option>
                      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                      <option value="Argentina">Argentina</option>
                      <option value="Armenia">Armenia</option>
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
                      <option value="Brazil">Brazil</option>
                      <option value="Brunei">Brunei</option>
                      <option value="Bulgaria">Bulgaria</option>
                      <option value="Burkina Faso">Burkina Faso</option>
                      <option value="Burundi">Burundi</option>
                      <option value="Cambodia">Cambodia</option>
                      <option value="Cameroon">Cameroon</option>
                      <option value="Canada">Canada</option>
                      <option value="Cape Verde">Cape Verde</option>
                      <option value="Central African Republic">Central African Republic</option>
                      <option value="Chad">Chad</option>
                      <option value="Chile">Chile</option>
                      <option value="China">China</option>
                      <option value="Colombia">Colombia</option>
                      <option value="Comoros">Comoros</option>
                      <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                      <option value="Congo, Republic of the">Congo, Republic of the</option>
                      <option value="Costa Rica">Costa Rica</option>
                      <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                      <option value="Croatia">Croatia</option>
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
                      <option value="Fiji">Fiji</option>
                      <option value="Finland">Finland</option>
                      <option value="France">France</option>
                      <option value="Gabon">Gabon</option>
                      <option value="Gambia">Gambia</option>
                      <option value="Georgia">Georgia</option>
                      <option value="Germany">Germany</option>
                      <option value="Ghana">Ghana</option>
                      <option value="Greece">Greece</option>
                      <option value="Greenland">Greenland</option>
                      <option value="Grenada">Grenada</option>
                      <option value="Guam">Guam</option>
                      <option value="Guatemala">Guatemala</option>
                      <option value="Guinea">Guinea</option>
                      <option value="Guinea-Bissau">Guinea-Bissau</option>
                      <option value="Guyana">Guyana</option>
                      <option value="Haiti">Haiti</option>
                      <option value="Honduras">Honduras</option>
                      <option value="Hong Kong">Hong Kong</option>
                      <option value="Hungary">Hungary</option>
                      <option value="Iceland">Iceland</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Iran">Iran</option>
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
                      <option value="North Korea">North Korea</option>
                      <option value="South Korea">South Korea</option>
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
                      <option value="Macedonia">Macedonia</option>
                      <option value="Madagascar">Madagascar</option>
                      <option value="Malawi">Malawi</option>
                      <option value="Malaysia">Malaysia</option>
                      <option value="Maldives">Maldives</option>
                      <option value="Mali">Mali</option>
                      <option value="Malta">Malta</option>
                      <option value="Marshall Islands">Marshall Islands</option>
                      <option value="Mauritania">Mauritania</option>
                      <option value="Mauritius">Mauritius</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Micronesia">Micronesia</option>
                      <option value="Moldova">Moldova</option>
                      <option value="Monaco">Monaco</option>
                      <option value="Mongolia">Mongolia</option>
                      <option value="Montenegro">Montenegro</option>
                      <option value="Morocco">Morocco</option>
                      <option value="Mozambique">Mozambique</option>
                      <option value="Myanmar">Myanmar</option>
                      <option value="Namibia">Namibia</option>
                      <option value="Nauru">Nauru</option>
                      <option value="Nepal">Nepal</option>
                      <option value="Netherlands">Netherlands</option>
                      <option value="New Zealand">New Zealand</option>
                      <option value="Nicaragua">Nicaragua</option>
                      <option value="Niger">Niger</option>
                      <option value="Nigeria">Nigeria</option>
                      <option value="Norway">Norway</option>
                      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                      <option value="Oman">Oman</option>
                      <option value="Pakistan">Pakistan</option>
                      <option value="Palau">Palau</option>
                      <option value="Palestine">Palestine</option>
                      <option value="Panama">Panama</option>
                      <option value="Papua New Guinea">Papua New Guinea</option>
                      <option value="Paraguay">Paraguay</option>
                      <option value="Peru">Peru</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Poland">Poland</option>
                      <option value="Portugal">Portugal</option>
                      <option value="Puerto Rico">Puerto Rico</option>
                      <option value="Qatar">Qatar</option>
                      <option value="Romania">Romania</option>
                      <option value="Russia">Russia</option>
                      <option value="Rwanda">Rwanda</option>
                      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                      <option value="Saint Lucia">Saint Lucia</option>
                      <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                      <option value="Samoa">Samoa</option>
                      <option value="San Marino">San Marino</option>
                      <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                      <option value="Saudi Arabia">Saudi Arabia</option>
                      <option value="Senegal">Senegal</option>
                      <option value="Serbia and Montenegro">Serbia and Montenegro</option>
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
                      <option value="Sudan, South">Sudan, South</option>
                      <option value="Suriname">Suriname</option>
                      <option value="Swaziland">Swaziland</option>
                      <option value="Sweden">Sweden</option>
                      <option value="Switzerland">Switzerland</option>
                      <option value="Syria">Syria</option>
                      <option value="Taiwan">Taiwan</option>
                      <option value="Tajikistan">Tajikistan</option>
                      <option value="Tanzania">Tanzania</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Togo">Togo</option>
                      <option value="Tonga">Tonga</option>
                      <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                      <option value="Tunisia">Tunisia</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Turkmenistan">Turkmenistan</option>
                      <option value="Tuvalu">Tuvalu</option>
                      <option value="Uganda">Uganda</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                      <option value="Uruguay">Uruguay</option>
                      <option value="Uzbekistan">Uzbekistan</option>
                      <option value="Vanuatu">Vanuatu</option>
                      <option value="Vatican City">Vatican City</option>
                      <option value="Venezuela">Venezuela</option>
                      <option value="Vietnam">Vietnam</option>
                      <option value="Virgin Islands, British">Virgin Islands, British</option>
                      <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                      <option value="Yemen">Yemen</option>
                      <option value="Zambia">Zambia</option>
                      <option value="Zimbabwe">Zimbabwe</option>

                    </select>
                  </div>
                </div>

              </div>
            </div>


            <div class="form-group">
              <label>message*</label>
              <textarea name="contact-message" id="contact-message" class="form-control required" placeholder="Type your comment or message here..."></textarea>
            </div>

            <div class="cta-container">

              <!-- <input type="submit" value="submit" id="contact-submit-btn"> -->
              <a href="#" class="square-cta" id="contact-form-submit-btn">submit</a>
            </div>


          </form>
        </div>

      </div>
    </div>

  </div>
</article>
