<!DOCTYPE html>
<html>
    <head>
        <title>
            Agency - Sign Up
        </title>
        <!-- <link rel="stylesheet" type="text/css" href="../links/main.css"> -->
        <link rel="stylesheet" type="text/css" href="../links/regmain.css">
        <link href="../links/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="../links/jquery.min.js"></script>
        <script src="../links/bootstrap.min.js"></script>
        

    </head>
    <body>
        <div class="container register">
            <div class="row" method="post" action="insert.php" target="_blank">
                <div class="col-md-3 register-left" >
                    <img src="../links/images/logo_white.png" alt=""/>
                    <h3>Welcome</h3>
                    <p>You are 30 seconds away from connecting with investors!</p>
                    <input type="button" name="Login" value="Login" onClick="document.location.href='../index.php'" /><br/>
                </div>
                <div class="col-md-9 register-right">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Idealist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Investor</a>
                        </li>
                    </ul>
                    <form class="tab-content" id="myTabContent" action="insert.php" method="post">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Apply as a Entrepreneur</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="username *" value="" name="username"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *" value="" name="f_name"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name *" value="" name="l_name"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" value="" name="password"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control"  placeholder="Confirm Password *" value="" name="re_password"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="w3review">Date of Birth</label>
                                        <input type="date" class="form-control" placeholder="Date of Birth" value="" name="date_of_birth">
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl" value="Gender">
                                            <label class="radio inline"> 
                                                <input type="radio" name="gender" value="male" checked>
                                                <span> Male </span> 
                                            </label>
                                            <label class="radio inline"> 
                                                <input type="radio" name="gender" value="female">
                                                <span>Female </span> 
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Business Name *" value="" name="bus_name"/>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="w3review">Business Goals</label> -->
                                        <textarea type="text" class="form-control"  placeholder="Write Your Business Goals here *" value="" name="bus_goals"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="w3review">Business Start Date</label>
                                        <input type="date" class="form-control" placeholder="Business Start Date" value="" name="bus_start">
                                    </div>
                                    
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" value="" name="email"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="10" name="phone_number" class="form-control" placeholder="Your Phone *" value=""/>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="country">
                                            <option class="hidden"  selected disabled>Please select your Country</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Canada">Canada</option>
                                            <option value="China">China</option>
                                            <option value="France">France</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="State *" value="" name="state"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="County *" value="" name="county"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Address Number *" value="" name="street_number"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="zipcode *" value="" name="zip_code"/>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="bus_sector">
                                            <option class="hidden"  selected disabled>Please select the business Sector</option>
                                            <option value="Accommodation">Accommodation and Food Services</option>
                                            <option value="Administration">Administration, Business Support and Waste Management Services</option>
                                            <option value="Agriculture">Agriculture, Forestry, Fishing and Hunting</option>
                                            <option value="Arts">Arts, Entertainment and Recreation</option>
                                            <option value="Construction">Construction</option>
                                            <option value="Education">Educational Services</option>
                                            <option value="Finance">Finance and Insurance</option>
                                            <option value="Healthcare">Healthcare and Social Assistance</option>
                                            <option value="Information">Information Technology</option>
                                            <option value="Manufacturing">Manufacturing</option>
                                            <option value="Mining">Mining</option>
                                            <option value="Others">Other Services (except Public Administration)</option>
                                            <option value="Professionals">Professional, Scientific and Technical Services</option>
                                            <option value="Real_Estate">Real Estate and Rental and Leasing</option>
                                            <option value="Retail">Retail Trade</option>
                                            <option value="Transportation">Transportation and Warehousing</option>
                                            <option value="Utilities">Utilities</option>
                                            <option value="Wholesale">Wholesale Trade</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea type="text" class="form-control"  placeholder="Business Description *" value="" name="bus_description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Business Current Networth *" value="" name="bus_networth"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Your Last Year's Turn Over *" value="" name="turn_over_last_year"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Business Street Name *" value="" name="bus_street"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Business State *" value="" name="bus_state"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Business Zipcode *" value="" name="bus_zip"/>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="account_type">
                                            <option class="hidden"  selected disabled>Please select Account Type</option>
                                            <option value="entrepreneur">Entrepreneur</option>
                                        </select>
                                    </div>
                                    
                                    <input type="submit" class="btnRegister"  value="Register" name="submit"/>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3  class="register-heading">Apply as an Investor</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *" value="" name="ifname"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name *" value="" name="ilname"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username *" value="" name="iusername"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" value="" name="ipassword"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control"  placeholder="Confirm Password *" value="" name="ire_password"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control" placeholder="Date of Birth" value="" name="idate_of_birth">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="maxl" value="iGender">
                                        <label class="radio inline"> 
                                            <input type="radio" name="igender" value="male" checked>
                                            <span> Male </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="igender" value="female">
                                            <span>Female </span> 
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" value="" name="iemail"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="10" name="iphone_number" class="form-control" placeholder="Your Phone *" value=""/>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" >
                                            <option class="hidden"  selected disabled>Please select your Country</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Canada">Canada</option>
                                            <option value="China">China</option>
                                            <option value="France">France</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="State *" value="" name="istate"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="County *" value="" name="icounty"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="zipcode *" value="" name="izip_code"/>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="w3review">Business Goals</label> -->
                                        <textarea type="text" class="form-control"  placeholder="Enter Your Current Business*" value="" name="current_investment"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="ibus_sector">
                                            <option class="hidden"  selected disabled>Please select Your Interested Business Sector</option>
                                            <option value="Accommodation">Accommodation and Food Services</option>
                                            <option value="Administration">Administration, Business Support and Waste Management Services</option>
                                            <option value="Agriculture">Agriculture, Forestry, Fishing and Hunting</option>
                                            <option value="Arts">Arts, Entertainment and Recreation</option>
                                            <option value="Construction">Construction</option>
                                            <option value="Education">Educational Services</option>
                                            <option value="Finance">Finance and Insurance</option>
                                            <option value="Healthcare">Healthcare and Social Assistance</option>
                                            <option value="Information">Information Technology</option>
                                            <option value="Manufacturing">Manufacturing</option>
                                            <option value="Mining">Mining</option>
                                            <option value="Others">Other Services (except Public Administration)</option>
                                            <option value="Professionals">Professional, Scientific and Technical Services</option>
                                            <option value="Real_Estate">Real Estate and Rental and Leasing</option>
                                            <option value="Retail">Retail Trade</option>
                                            <option value="Transportation">Transportation and Warehousing</option>
                                            <option value="Utilities">Utilities</option>
                                            <option value="Wholesale">Wholesale Trade</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="account_type">
                                            <option class="hidden"  selected disabled>Please select Account Type</option>
                                            <option value="investor">Investor</option>
                                        </select>
                                    </div>
                                    <input type="submit" class="btnRegister"  value="Register"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </body>
</html>