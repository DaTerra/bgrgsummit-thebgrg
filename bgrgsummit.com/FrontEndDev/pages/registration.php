         <div class="page-top">  
            <h1 class="page-title btn-yellow-100">Registration</h1>
            <p></p>
          </div>
          <div class="section-0"> 
            <h2 class="titlen">Registration Fee Schedule</h2>
            <h3 class="titley">REGISTRATION COVERS CONFERENCE MATERIALS, ALL WORKSHOPS, PLENARY SESSIONS, SCHEDULED MEALS, RECEPTION, OTHER SPECIAL EVENTS</h3>
            
            <div class="group1">
              <p>Online Registration Fee. Price until Tuesday, January, 13, 2015 ........................................... <span>checked</span> $150</p>
              <p>On Wednesday, January 15 2014 on-site registration fee will be $175</p>
            </div>
            <div class="group2">
              <p class="">BGRG Membership Discounted Rate! Renew your Affiliate membership for $100 and receive 30% off the H3/BGRG Summit registration fee. <a href="#">RENEW NOW!</a></p>
            </div>
            <div class="group3">
              <p>NAESM Registration Discount! Receive $100 off he Early Bird Registration, Standard Registration to the 2015 NAESM Conference.</p>
              <p>To receive the discount you must register through the NAESM website http://www.naesm.org using your H3/BGRG Summit confirmation code.</p>
            </div>          
            <h2 class="titlen">Registration Form</h2>
            <a class="form-top-link" href="./?page=login">Login with your <span>TheBGRG.org</span> account!</a>
            <div class="auto-alerts">
              <div class="error">
                <p>Ops! Please verify the highlighted fields bellow and submit again your registration!</p>
              </div>
              <div class="success">
                <p>Congratulations! Your 2015 UCLA H<sup>3</sup> / BGRG Registration has been submited! Please verify your e-mail.</p>
              </div>
            </div>
            <h3 class="titley">SECTION 1: APPLICANT INFORMATION (THIS INFORMATION WILL REMAIN CONFIDENTIAL)</h3>
            <p><span class="field-required required-helper">*Required fields</span>
          </div>       

          <form action="./handlers/register_handler.php" method="post"  onsubmit="return validate();">
            <div class="section-1">
              <div class="form-group-260">
                <label for="inputLName" class="label-92">Last Name<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" name="inputLName" id="inputLName">
              </div>     
              <div class="form-group-260">
                <label for="inputFName" class="label-92">First Name<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" name="inputFName" id="inputFName">
                <p class="help-block">(Legal)</p>
              </div>                                        
              <div class="form-group-130">
                <label for="inputMInitialName" class="label-92">Middle Initial<span class="field-required">*</span></label>
                <input type="text" class="input-32 input-yellow" name="inputMInitialName" id="inputMInitialName">
              </div>
              <div class="form-group-130">
                <label for="inputSufix" class="label-80p">Sufix</label>
                <input type="text" class="input-32 input-yellow" name="inputSufix" id="inputSufix">                
              </div>  
              <div class="clearfix"></div>

              <div class="form-group-260">
                <label for="inputDegree1" class="label-92">Degree 1<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" name="inputDegree1" id="inputDegree1">                
              </div>
              <div class="form-group-260">
                <label for="inputDegree2" class="label-92">Degree 2<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" name="inputDegree2" id="inputDegree2">
              </div>
              <div class="form-group-260">
                <label for="inputDegree3" class="label-92">Degree 3<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" name="inputDegree3" id="inputDegree3">
              </div>
              <div class="clearfix"></div>

              <div class="form-group-260">
                <label for="inputBadgeName" class="label-92">Badge Name<span class="field-required">*</span></label>                
                <input type="text" class="input-155 input-yellow" name="inputBadgeName" id="inputBadgeName">
                <p class="help-block">(if different from above)</p>              
              </div>
              <div class="form-group-260">
                <label for="inputBadgeCity" class="label-92">Badge City<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" name="inputBadgeCity" id="inputBadgeCity">
              </div>
              <div class="form-group-260">
                <label for="inputBadgeState" class="label-92">Badge State<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" name="inputBadgeState" id="inputBadgeState">                
              </div>
              <div class="clearfix"></div>

              <div class="form-group-260">
                <label for="inputJobTitle" class="label-92">Job Title<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" name="inputJobTitle" id="inputJobTitle">
              </div>
              <div class="form-group-260">
                <label for="inputOrganization" class="label-92">Organization<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" name="inputOrganization" id="inputOrganization">              
              </div>          
              <div class="clearfix"></div>
              
              <div class="form-group-260">
                <label for="inputAddress" class="label-92">Address<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" name="inputAddress" id="inputAddress">
              </div>
              <div class="form-group-260">
                <label for="inputAddress2" class="label-92">Address #2</label>              
                <input type="text" class="input-155 input-yellow" name="inputAddress2" id="inputAddress2">
              </div>
              <div class="clearfix"></div>

              <div class="form-group-260">
                <label for="inputLastName" class="label-92">City<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" name="inputCity" id="inputCity">
              </div>     
              <div class="form-group-260">
                <label for="inputFirstName" class="label-92">State<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" name="inputState" id="inputState">
              </div>                                        
              <div class="form-group-130">
                <label for="inputMiddleInitial" class="label-92">Postal Code<span class="field-required">*</span></label>
                <input type="text" class="input-32 input-yellow" name="inputPostalCode" id="inputPostalCode">
              </div>
              <div class="form-group-130">
                <label for="inputSufix" class="label-80p">Country<span class="field-required">*</span></label>
                <input type="text" class="input-32 input-yellow" name="inputCountry" id="inputCountry">                
              </div>  
              <div class="clearfix"></div>
              
              <div class="form-group-260">
                <label for="inputTelephone" class="label-92">Telephone<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" name="inputTelephone" id="inputTelephone">  
                <p class="help-block">(Day Time)</p>              
              </div>     
              <div class="form-group-260">
                <label for="inputTelephoneMobile" class="label-92">Telephone<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" name="inputTelephoneMobile" id="inputTelephoneMobile">
                <p class="help-block">(Mobile)</p>                
              </div>                     
              <div class="form-group-260">                                      
                  <label for="inputPhoto" class="w92">Upload Photo:</label>
                  <input id="uploadFile" class="uploadFile w105" type="text" placeholder="Choose File" disabled="disabled"/>
                  <div class="fileUpload">
                    <span>Upload</span>                          
                    <input id="uploadBtn" type="file" class="upload" />
                  </div>            
                <script type="text/javascript">
                  document.getElementById("uploadBtn").onchange = function () {
                  document.getElementById("uploadFile").value = this.value;
                  }
                </script>
                <div class="clearfix"></div>
              </div> 
              <div class="clearfix"></div>              
              <div class="form-group-260">
                <label for="inputEmail" class="label-92">Email<span class="field-required">*</span></label>
                <input type="email" class="input-155 input-yellow" name="inputEmail" id="inputEmail">              
              </div>     
              <div class="form-group-260">
                <label for="inputConfirm" class="label-92">Confirm Email<span class="field-required">*</span></label>
                <input type="email" class="input-155 input-yellow" name="inputConfirmEmail" id="inputConfirmEmail">
              </div>
              <div class="clearfix"></div>              
              <div class="form-group-260">
                <label for="inputPassword" class="label-92">Password<span class="field-required">*</span></label>
                <input type="password" class="input-155 input-yellow" name="inputPassword" id="inputPassword">              
              </div>     
              <div class="form-group-260">
                <label for="inputPasswordCanonical" class="label-92">Confirm Pass.<span class="field-required">*</span></label>
                <input type="password" class="input-155 input-yellow" name="inputPasswordCanonical" id="inputPasswordCanonical">
              </div>
              <div class="form-group-260">
                <p class="label-bold label-inline">Make profile public?<span class="field-required">*</span></p>
                <label class="radio-inline">
                  <input type="radio" name="publicProfile" name="puplicProfile" id="puplicProfile1" value="No"> No
                </label>
                <label class="radio-inline">
                  <input type="radio" name="publicProfile" name="puplicProfile" id="puplicProfile2" value="Yes"> Yes
                </label>
              </div>
              <div class="clearfix"></div>
            </div>
            
            <h3 class="titley">SECTION 2: DEMOGRAPHIC INFORMATION (THIS INFORMATION WILL REMAIN CONFIDENTIAL)<span class="logo-stamp"></span></h3>
            <div class="yellowBG">
              <div class="form-group">
                <p class="label-bold">Age Range<span class="field-required">*</span></p>
                <label class="radio-inline w150">
                  <input type="radio" name="ageRange" id="ageRange1" value="Under 20"> Under 20
                </label>
                <label class="radio-inline w95">
                  <input type="radio" name="ageRange" id="ageRange2" value="20-24"> 20-24
                </label>
                <label class="radio-inline w95">
                  <input type="radio" name="ageRange" id="ageRange3" value="25-34"> 25-34
                </label> 
                <label class="radio-inline w95">
                  <input type="radio" name="ageRange" id="ageRange4" value="35-44"> 35-44
                </label> 
                <label class="radio-inline w95">
                  <input type="radio" name="ageRange" id="ageRange5" value="45-54"> 45-54
                </label> 
                <label class="radio-inline w95">
                  <input type="radio" name="ageRange" id="ageRange6" value="55-64"> 55-64
                </label> 
                <label class="radio-inline w95">
                  <input type="radio" name="ageRange" id="ageRange7" value="65+"> 65+
                </label> 
              </div>
              <div class="clearfix"></div>

              <div class="form-group">
                <p class="label-bold">What is your sex or current gender?<span class="field-required">*</span></p>
                <label class="radio-inline w55">
                  <input type="radio" name="currentSex" id="currentSex1" value="Male"> Male
                </label>
                <label class="radio-inline w95">
                  <input type="radio" name="currentSex" id="currentSex2" value="Female"> Female
                </label>
                <label class="radio-inline w190">
                  <input type="radio" name="currentSex" id="currentSex3" value="TransMale/Transman"> TransMale/Transman
                </label> 
                <label class="radio-inline w95">
                  <input type="radio" name="currentSex" id="currentSex4" value="Genderqueer"> Genderqueer
                </label> 
                <label class="radio-inline w190">
                  <input type="radio" name="currentSex" id="currentSex5" value="TransFemale/Transwomen"> TransFemale/Transwomen
                </label> 
                <div class="clearfix"></div>            
                <label class="radio-inline w150">
                  <input type="radio" name="currentSex" id="currentSex6" value="Decline to answer"> Decline to answer
                </label> 
                <label class="radio-inline w150">
                  <input type="radio" name="currentSex" id="currentSex7" value="Additional Category"> Additional Category
                  <p class="help-block">&nbsp;&nbsp;&nbsp;&nbsp;(Please specify)</p>
                </label>                                     
                <input type="text" class="input-white" name="currentSexOther" id="currentSexOther">                  
              </div>
              <div class="clearfix"></div>   

              <div class="form-group">
                <p class="label-bold">What sex were you assigned at birth?<span class="field-required">*</span></p>
                <label class="radio-inline w55">
                  <input type="radio" name="assignedSex" id="assignedSex1" value="Male"> Male
                </label>
                <label class="radio-inline w95">
                  <input type="radio" name="assignedSex" id="assignedSex2" value="Female"> Female
                </label>
                <label class="radio-inline w150">
                  <input type="radio" name="assignedSex" id="assignedSex3" value="Decline to answer"> Decline to answer
                </label>               
              </div>
              <div class="clearfix"></div> 

              <div class="form-group mb-15">
                <p  class="label-bold">Race/Ethnicity (Check all that apply)<span class="field-required">*</span></p>
                <label class="checkbox-inline w245">
                  <input type="checkbox" name="raceEthnicity[]" id="raceEthnicity1" value="Asian/Pacific Islander/Native Hawaiian"> Asian/Pacific Islander/Native Hawaiian 
                </label>
                <label class="checkbox-inline w190">
                  <input type="checkbox" name="raceEthnicity[]" id="raceEthnicity2" value="Black/African American"> Black/African American
                </label>
                <label class="checkbox-inline w150">
                  <input type="checkbox" name="raceEthnicity[]" id="raceEthnicity3" value="Latino/Hispanic"> Latino/Hispanic
                </label>            
                <div class="clearfix"></div>
                <label class="checkbox-inline w245">
                  <input type="checkbox" name="raceEthnicity[]" id="raceEthnicity4" value="Mixed Race/Heritage"> Mixed Race/Heritage
                </label>  
                <label class="checkbox-inline w190">
                  <input type="checkbox" name="raceEthnicity[]" id="raceEthnicity5" value="White/ Caucasian"> White/ Caucasian
                </label> 
                <label class="checkbox-inline w150">
                  <input type="checkbox" name="raceEthnicity[]" id="raceEthnicity6" value="Other"> Other (Please specify):                    
                </label>   
                <input type="text" class="input-white" name="raceEthnicityOther" id="raceEthnicityOther">
              </div>                                         
              <div class="clearfix"></div> 

              <div class="form-group">
                <p class="label-bold">HIV Status?<span class="field-required">*</span></p>
                <label class="radio-inline w150">
                  <input type="radio" name="hivStatus" id="hivStatus1" value="hivStatus1"> Positive
                </label>
                <label class="radio-inline w95">
                  <input type="radio" name="hivStatus" id="hivStatus2" value="hivStatus2"> Negative
                </label>
                <label class="radio-inline w95">
                  <input type="radio" name="hivStatus" id="hivStatus3" value="hivStatus3"> Unknown
                </label>  
                <label class="radio-inline w95">
                  <input type="radio" name="hivStatus" id="hivStatus4" value="hivStatus4"> Undeclared
                </label>               
              </div>
              <div class="clearfix"></div> 

              <div class="form-group col-sm-12">
                <p class="label-bold">Geographical Location<span class="field-required">*</span></p>
                <label class="radio-inline w150">
                  <input type="radio" name="geoLocation" id="geoLocation1" value="Northeast"> Northeast
                </label>
                <label class="radio-inline w95">
                  <input type="radio" name="geoLocation" id="geoLocation2" value="Midwest"> Midwest
                </label>
                <label class="radio-inline w95">
                  <input type="radio" name="geoLocation" id="geoLocation3" value="South"> South
                </label>  
                <label class="radio-inline w95">
                  <input type="radio" name="geoLocation" id="geoLocation4" value="West"> West
                </label>               
              </div>
              <div class="clearfix"></div> 

              <div class="form-group">
                <p class="label-bold">Type of Geographic Area I Serve<span class="field-required">*</span></p>
                <label class="radio-inline w55">
                  <input type="radio" name="geoType" id="geoType1" value="Rural"> Rural
                </label>
                <label class="radio-inline w95">
                  <input type="radio" name="geoType" id="geoType2" value="Suburban"> Suburban
                </label>
                <label class="radio-inline w95">
                  <input type="radio" name="geoType" id="geoType3" value="Urban"> Urban
                </label>  
                <label class="radio-inline w95">
                  <input type="radio" name="geoType" id="geoType4" value="Other"> Other
                </label>               
              </div>
              <div class="clearfix"></div> 

              <div class="form-group">
                <p class="label-bold">Have you attended the UCLA H3 Conference or the BGRG Summit before?<span class="field-required">*</span></p>                
                <label class="radio-inline w55">
                  <input type="radio" name="attendedSummit" id="inlineRadio1" value="option1"> No
                </label>
                <label class="radio-inline w190">
                  <input type="radio" name="attendedSummit" id="inlineRadio2" value="option2"> Yes (Year/City)
                </label>
                <div class="form-group-610">
                  <label class="checkbox-inline w190">
                    <input type="checkbox" name="attendedSummitEdition[]" id="attendedSummitEdition1" value="UCLA2011-LA"> UCLA2011-LA
                  </label>
                  <label class="checkbox-inline w190">
                    <input type="checkbox" name="attendedSummitEdition[]" id="attendedSummitEdition2" value="UCLA2013-LA"> UCLA2013-LA
                  </label>
                  <label class="checkbox-inline w225">
                    <input type="checkbox" name="attendedSummitEdition[]" id="attendedSummitEdition3" value="BGRG2003-NY"> BGRG2003-NY
                  </label>
                  <div class="clearfix"></div> 
                  <label class="checkbox-inline w190">
                    <input type="checkbox" name="attendedSummitEdition[]" id="attendedSummitEdition4" value="BGRG2005-NY"> BGRG2005-NY
                  </label>
                  <label class="checkbox-inline w190">
                    <input type="checkbox" name="attendedSummitEdition[]" id="attendedSummitEdition5" value="BGRG2010-Atlanta"> BGRG2010-Atlanta
                  </label>
                  <label class="checkbox-inline w225">
                    <input type="checkbox" name="attendedSummitEdition[]" id="attendedSummitEdition6" value="BGRG2012-New Orleans"> BGRG2012-New Orleans
                  </label>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="clearfix"></div>

              <div class="form-group">
                <p  class="label-bold">What type of organization do you work for? (Check all that apply)<span class="field-required">*</span></p>
                <p class="qhelper">Please make at least 1 selection from the choices below.</p>
                <label class="checkbox-inline w245">
                  <input type="checkbox" name="organizationType[]" id="organizationType1" value="AIDS-specific organization"> AIDS-specific organization
                </label>
                <label class="checkbox-inline w190">
                  <input type="checkbox" name="organizationType[]" id="organizationType2" value="Community Health Clinic"> Community Health Clinic
                </label>
                <label class="checkbox-inline w190">
                  <input type="checkbox" name="organizationType[]" id="organizationType3" value="Health Department"> Health Department
                </label>
                <label class="checkbox-inline w225">
                  <input type="checkbox" name="organizationType[]" id="organizationType4" value="Religious/Faith-based organization"> Religious/Faith-based organization
                </label>            
                <div class="clearfix"></div>
                <label class="checkbox-inline w245">
                  <input type="checkbox" name="organizationType[]" id="organizationType5" value="PLWHA Coalition"> PLWHA Coalition
                </label>
                <label class="checkbox-inline w190">
                  <input type="checkbox" name="organizationType[]" id="organizationType6" value="University"> University
                </label>
                <label class="checkbox-inline w190">
                  <input type="checkbox" name="organizationType[]" id="organizationType7" value="Hospital"> Hospital
                </label>
                <label class="checkbox-inline w225">
                  <input type="checkbox" name="organizationType[]" id="organizationType8" value="Minority-specific organization"> Minority-specific organization
                </label>
                <div class="clearfix"></div>          
                <label class="checkbox-inline w245">
                  <input type="checkbox" name="organizationType[]" id="organizationType9" value="Federal/State Government"> Federal/State Government
                </label>
                <label class="checkbox-inline w55">
                  <input type="checkbox" name="organizationType[]" id="organizationType10" value="Other"> Other
                </label>  
                <input type="text" class="input-white" name="organizationTypeOther" id="organizationTypeOther">              
              </div>
              <div class="clearfix"></div>

              <div class="form-group">
                <p  class="label-bold">Are you planning to attend the 2015 National African American MSM Leadership Conference?<span class="field-required">*</span></p>
                <label class="radio-inline w55">
                  <input type="radio" name="naesm" id="naesm1" value="no"> No
                </label>
                <label class="radio-inline w95">
                  <input type="radio" name="naesm" id="naesm2" value="yes"> Yes
                </label>
              </div>
              <div class="clearfix"></div>

              <div class="form-group">
                <p  class="label-bold">Would you be willing to participate in a focus group about Black MSM in sero- discordant couples?<span class="field-required">*</span></p>
                <label class="radio-inline w55">
                  <input type="radio" name="focusGroup" id="focusGroup1" value="No"> No
                </label>
                <label class="radio-inline w95">
                  <input type="radio" name="focusGroup" id="focusGroup2" value="Yes"> Yes
                </label>
                <label class="checkbox-inline w190">
                  <input type="checkbox" name="focusGroupEmail" id="focusGroupEmail" value="Email"> May we contact you by email
                </label>
              </div>
              <div class="clearfix"></div>    

              <div class="form-group">
                <p  class="label-bold">Why do you want to attend the Summit including what you expect to gain or learn by participating in the Summit?<span class="field-required">*</span></p>                       
                <textarea class="text-845" id="textarea" rows="6" placeholder="(e.g., what personal goals do you hope to accomplish by participating in the Summit?)"></textarea>
              </div> 
              <div class="clearfix"></div> 
              <input class="btn-red-146 btn-submit" type="submit" value="Submit Registration">
            </div>                          
          </form>

          <script type="text/javascript" src="./js/validate.js"></script> 
