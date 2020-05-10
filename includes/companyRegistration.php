<section>
    <div class="gc_main_menu_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                </div>
                <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-area hidden-menu-bar stick" id="sticker">
                        <!-- mainmenu start -->
                        <div class="mainmenu" style="border-left:none;border-right:none">
                            <ul class="float_left">
                              <li class="gc_main_navigation"><a>Email</a></li>
                              <li class="gc_main_navigation"><input type="text"></li>
                              <li class="gc_main_navigation"><a>Password</a></li>
                              <li class="gc_main_navigation"><input type="text"></li>

                            </ul>
                        </div>
                      </div>
                    </div>

                        <!-- mainmenu end -->
                        <!-- mobile menu area start -->
                <!-- mobile menu area end -->
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="jp_navi_right_btn_wrapper">
                        <ul>
                            <li><a href="profile.php"><i class="fa fa-user"></i>&nbsp; LOGIN</a></li>
                        </ul>
                    </div>
                </div>
              </div>
              <div class="jp_banner_heading_cont_wrapper2">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="jp_job_heading_wrapper">
                       <div class="jp_job_heading">
                         <h1><span><center>Registration</center></span></h1>
                         <center><h2>It's free</h2></center>
                         <br></br>

                       </div>
                     </div>
                   </div>
                   <div class="col-lg-3"></div>
                   <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                     <div class="jp_header_login_wrapper">
                      <form action="registration.php" method="POST" id="registration" >
      						            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <br><br>
                                <center><h1>Company Name*</h1>

                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><input type="text" id="fcompanyName" name="fcompanyName">
									               <i id="fcompanyNameerror"></i>
                                 </center>
                             </div>
							                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                 <center><h1>Company mailing address*</h1>
                                 </center>
                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><input type="text" id="companyMail" name="companyMail" placeholder="Street Address">
									                <i id="companyMailerror"></i>
                                 </center>
                             </div>
							               <br><br>
							               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                 <input type="text"  id="city" class="no-val" name="city" placeholder="city">

                             </div>
      					             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

									               <input type="text" id="state" class="no-val" name="state" placeholder="state">

                             </div>
							                <br><br>
							                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><input type="text" id="pin" name="pin" placeholder="PinCode"></center>

                             </div>
							               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center>
                                   <select id="count" name="count" style="background-color:white">
									                 <option value="">Country</option>
									                 <option value="India">India</option>
                								 </select>
                               </center>
                             </div>
							               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><h1>Contact number*</h1>
                                 </center>
                             </div>
							               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><input type="mobile" id="mobile" name="mobile" placeholder="+91">
									               <i id="mobileerror"></i>
                                 </center>
                             </div>
							               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><h1>Email contact*</h1>
                                 </center>
                             </div>
							               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><input type="email" id="email"name="email">
									               <i id="emailerror"></i>
                                 </center>
                             </div>
							               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><h1>Person of contact</h1>
                                 </center>
                             </div>
							               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><input type="name" class="no-val" id="finame"name="finame" placeholder="First name">
                                 </center>
                             </div>
							               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><input type="name" class="name no-val" id="laname"name="laname" placeholder="Last name">
                                 </center>
                             </div>
							               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><h1>Industry*</h1>
                                 </center>
                             </div>
							               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							                   <center>
                                 <select name="industry" id="industry" style="background-color:white">
									                          <option value=""></option>
									                          <option value="software">software</option>
									                          <option value="hardware">hardware</option>
								                </select>
								                <i id="industryerror"></i>
							                  </center>
                             </div>
							               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><h1>Website</h1>
                                 </center>
                             </div>
							               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center>
									               <input type="text" class="website no-val" id="website" name="website">
                                 </center>
                                 <br>
                             </div>
                             <div>
                               <center><h4>Read our <a href='new.html' style="color:white">Terms and Policies</a> before proceeding</h4></center>
                               <br>
                             </div>
                             <div class="row">
                               <div class="col-lg-3 col-md-5"></div>
                               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                 <div class="jp_form_btn_wrapper">
                                  <ul>
                           <br>
                                   <li><a href="#" type="submit" onclick="validateRegistration()">Register Company</li>
                                 </ul>
                                 </div>
                               </div>
                               <div class="col-lg-3 col-md-5"></div>
                             </div>

                             <br>
					  </form>

                       <br></br>
                       <br>
                  </div>
                 </div>
                 <div class="col-lg-3"></div>
               </div>
             </div>
           </div>
        </div>
    </div>
</section>

<style>

	.w70 {
			width: 70% !important;
	}
	.terms input{

		height:20px;
		width:10px;
	}
	i{
		color:white;
		display:block;
	}

</style>
<script>
	function validateRegistration() {
		var fcompanyName=document.getElementById("fcompanyName").value;
		var companyMail=document.getElementById("companyMail").value;
		var mobile=document.getElementById("mobile").value;
		var email=document.getElementById("email").value;
		var industry=document.getElementById("industry").value;
		var status=true;

		fcompanyName=fcompanyName.trim();
		companyMail=companyMail.trim();
		mobile=mobile.trim();
		email=email.trim();
		industry=industry.trim();

		if(fcompanyName=="")
			{
				status=false;
				document.getElementById("fcompanyName").style.borderColor="red";
				document.getElementById("fcompanyNameerror").innerHTML="Invalid company name can't be blank";
			}
				else
				{
					document.getElementById("fcompanyName").style.borderColor="green";
					document.getElementById("fcompanyNameerror").innerHTML="";
				}

		if(companyMail=="")
			{
				status=false;
				document.getElementById("companyMail").style.borderColor="red";
				document.getElementById("companyMailerror").innerHTML="Invalid company Mail address can't be blank";
			}
				else
				{
					document.getElementById("companyMail").style.borderColor="green";
					document.getElementById("companyMailerror").innerHTML="";
				}
		if(mobile=="")
			{
				status=false;
				document.getElementById("mobile").style.borderColor="red";
				document.getElementById("mobileerror").innerHTML="Invalid contact num can't be blank";
			}
				else
				{
					document.getElementById("mobile").style.borderColor="green";
					document.getElementById("mobileerror").innerHTML="";
				}
		if(email=="")
				{
					status=false;
					document.getElementById("email").style.borderColor="red";
					document.getElementById("emailerror").innerHTML="Invalid email can't be blank";
				}
				else
				{
					document.getElementById("email").style.borderColor="green";
					document.getElementById("emailerror").innerHTML="";
				}
		if(industry=="")
				{
					status=false;
					document.getElementById("industry").style.borderColor="red";
					document.getElementById("industryerror").innerHTML="Invalid industry can't be blank";
				}
				else
				{
					document.getElementById("industry").style.borderColor="green";
					document.getElementById("industryerror").innerHTML="";
				}

		if(status==true)
        {
          document.getElementById("registration").submit();

        }

	}
</script>
