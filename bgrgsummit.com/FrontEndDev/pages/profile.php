          <div class="page-top">  
            <h1 class="page-title btn-yellow-100">User Profile</h1>      
          </div>       
          <form>            
            <div class="section-1">
              <h2 class="titlen">Welcome {User First + Last Name}<span><a class="center circular-95" style="background: url(./img/craig-hutchinson.png) no-repeat;"></a></span></h2>                        
              <h3 class="titley">Profile</h3>
              <div class="auto-alerts">
              <div class="error">
                <p>Error!</p>
              </div>
              <div class="success">
                <p>Success!</p>
              </div>
            </div>
              <p class="left"><span class="field-required required-helper">*Required fields</span>
              <div class="clearfix"></div>
              <div class="form-group-260">
                <label for="inputLastName" class="label-92">Last Name<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" id="inputLastName">
              </div>     
              <div class="form-group-260">
                <label for="inputFirstName" class="label-92">First Name<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" id="inputFirstName">
                <p class="help-block">(Legal)</p>
              </div>                                        
              <div class="form-group-130">
                <label for="inputMiddleInitial" class="label-92">Middle Initial<span class="field-required">*</span></label>
                <input type="text" class="input-32 input-yellow" id="inputMiddleInitial">
              </div>
              <div class="form-group-130">
                <label for="inputSufix" class="label-80p">Sufix<span class="field-required">*</span></label>
                <input type="text" class="input-32 input-yellow" id="inputSufix">                
              </div>  
              <div class="clearfix"></div>

              <div class="form-group-260">
                <label for="inputDegree1" class="label-92">Degree 1<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" id="inputLastName">                
              </div>
              <div class="form-group-260">
                <label for="inputDegree2" class="label-92">Degree 2<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" id="inputDegree2">
              </div>
              <div class="form-group-260">
                <label for="inputDegree3" class="label-92">Degree 3<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" id="inputDegree3">
              </div>
              <div class="clearfix"></div>

              <div class="form-group-260">
                <label for="inputBadgeName" class="label-92">Badge Name<span class="field-required">*</span></label>                
                <input type="text" class="input-155 input-yellow" id="inputBadgeName">
                <p class="help-block">(if different from above)</p>              
              </div>
              <div class="form-group-260">
                <label for="inputBadgeCity" class="label-92">Badge City<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" id="inputBadgeCity">
              </div>
              <div class="form-group-260">
                <label for="inputBadgeState" class="label-92">Badge State<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" id="inputBadgeState">                
              </div>
              <div class="clearfix"></div>

              <div class="form-group-260">
                <label for="inputJobTitle" class="label-92">Job Title<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" id="inputJobTitle">
              </div>
              <div class="form-group-260">
                <label for="inputOrganization" class="label-92">Organization<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" id="inputOrganization">              
              </div>          
              <div class="clearfix"></div>
              
              <div class="form-group-260">
                <label for="inputAddress" class="label-92">Address<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" id="inputAddress">
              </div>
              <div class="form-group-260">
                <label for="inputAddress2" class="label-92">Address #2</label>              
                <input type="text" class="input-155 input-yellow" id="inputAddress2">
              </div>
              <div class="clearfix"></div>

              <div class="form-group-260">
                <label for="inputLastName" class="label-92">City<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" id="inputCity">
              </div>     
              <div class="form-group-260">
                <label for="inputFirstName" class="label-92">State<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" id="inputState">
              </div>                                        
              <div class="form-group-130">
                <label for="inputMiddleInitial" class="label-92">Postal Code<span class="field-required">*</span></label>
                <input type="text" class="input-32 input-yellow" id="inputPostalCode">
              </div>
              <div class="form-group-130">
                <label for="inputSufix" class="label-80p">Country<span class="field-required">*</span></label>
                <input type="text" class="input-32 input-yellow" id="inputCountry">                
              </div>  
              <div class="clearfix"></div>
              
              <div class="form-group-260">
                <label for="inputTelephone" class="label-92">Telephone<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" id="inputTelephone">  
                <p class="help-block">(Day Time)</p>              
              </div>     
              <div class="form-group-260">
                <label for="inputTelephoneMobile" class="label-92">Telephone<span class="field-required">*</span></label>
                <input type="text" class="input-155 input-yellow" id="inputTelephoneMobile">
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
                <input type="email" class="input-155 input-yellow" id="inputEmail">              
              </div>     
              <div class="form-group-260">
                <label for="inputConfirm" class="label-92">Confirm Email<span class="field-required">*</span></label>
                <input type="email" class="input-155 input-yellow" id="inputConfirmEmail">
              </div>
              <div class="clearfix"></div>              
              <div class="form-group-260">
                <label for="inputPassword" class="label-92">Password<span class="field-required">*</span></label>
                <input type="email" class="input-155 input-yellow" id="inputPassword">              
              </div>     
              <div class="form-group-260">
                <label for="inputPasswordCanonical" class="label-92">Confirm Pass.<span class="field-required">*</span></label>
                <input type="email" class="input-155 input-yellow" id="inputPasswordCanonical">
              </div>
              <div class="form-group-260">
                <p class="label-bold label-inline">Make profile public?<span class="field-required">*</span></p>
                <label class="radio-inline">
                  <input type="radio" name="publicProfile" id="inlineRadio1" value="No"> No
                </label>
                <label class="radio-inline">
                  <input type="radio" name="publicProfile" id="inlineRadio2" value="Yes"> Yes
                </label>
              </div>                                  
              <div class="clearfix"></div> 
              <button class="btn-red-146 btn-submit">Save</button>
            </div>                          
          </form>   
          <h3 class="titley">Membership Status</h3>    
          <div class="membership-card">
            <div>
              <h1>Membership Organization</h1>
              <h2 class="type">Type:Membership Type</h2>
              <p class="status red">Status:Membership Status<p>
              <div class="clearfix"></div>  
              <p class="exp">Expiration 12/05/2014</p>  
              <a class="btn" href="#">Action</a>
            </div>
            <img src="./img/membership-logo-bgrg-74x91.png">
            <div class="clearfix dashed-line"></div>
          </div>
          <div class="membership-card">
            <div>
              <h1>The Black Gay Research Group</h1>
              <h2 class="type">Type:Full Membership</h2>
              <p class="status red">Status:Expired<p>
              <div class="clearfix"></div>  
              <p class="exp">Expiration 06/01/2014</p>  
              <a class="btn" href="#">Renew</a>
            </div>
            <img src="./img/membership-logo-bgrg-74x91.png">
            <div class="clearfix dashed-line"></div>
          </div>
          <div class="membership-card">
            <div>
              <h1>2015 UCLA H3/BGRG Summit</h1>
              <h2 class="type">Type:Attendee</h2>
              <p class="status red">Status:Unpaid<p>
              <div class="clearfix"></div>  
              <p class="exp">Expiration 31/12/2015</p>  
              <a class="btn" href="#">Pay</a>
            </div>
            <img src="./img/membership-logo-summit-74x91.png">
            <div class="clearfix dashed-line"></div>
          </div>
          <div class="membership-card">
            <div>
              <h1>2015 UCLA H3/BGRG Summit</h1>
              <h2 class="type">Type:Attendee</h2>
              <p class="status green">Status:Valid<p>
              <div class="clearfix"></div>  
              <p class="exp">Expiration 31/12/2015</p>  
            </div>
            <img src="./img/membership-logo-summit-74x91.png">
            <div class="clearfix dashed-line"></div>
          </div>
  
<div class="clearfix"></div>
<p>
  Membership Organization = user_membership_type.ambient<br/>
  Membership Type = user_membership_type.title<br/>
  Membership Expiration = user_membership.expiration<br/>
</p>
<h2>Actions</h2>
<p>
  Membership Status Pending = None<br/>
  Membership Status Unpaid = Pay<br/>
  Membership Status Valid = None<br/>
  Membership Status Declined = Submit<br/>
  Membership Status Expired = Renew(Only if the user_membership_type.expiration is set)<br/>
</p>
        


