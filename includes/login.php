<section>
    <div class="gc_main_menu_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-area hidden-menu-bar stick" id="sticker">
                        <!-- mainmenu start -->
                        <div class="mainmenu">
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
              <div class="jp_banner_heading_cont_wrapper">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="jp_job_heading_wrapper">
                       <div class="jp_job_heading">
                         <h1><span><center>SIGN UP</center></span></h1>
                         <center><h2>It's free</h2></center>
                         <br></br>
                         <br></br>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-3"></div>
                   <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                     <div class="jp_header_login_wrapper">
                      <form action="signup-varification.php" method="POST" id="signup">
      						 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                 <center><h1> First Name</h1>
                                 </center>
                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><input type="text" id="finame"name="finame" >
                                 </center>
                             </div>
      					    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                 <center><h1> Last Name</h1>
                                 </center>
                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><input type="text" id="laname" name="laname">
                                 </center>
                             </div>
      					    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                 <center><h1> Password</h1>
                                 </center>
                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><input type="password"  id="password" name="password">
                                 </center>
                             </div>
      					    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                 <center><h1>Re-Enter Password</h1>
                                 </center>
                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><input type="password" id="repassword" name="repassword">
                                 </center>
                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><h1>Email Id</h1>
                                 </center>
                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><input type="email" id="email" name="email" >
                                 </center>
                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <center><h1>Location</h1>
                                  </center>
                              </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							                   <center>
                                 <select name="location" id="location" style="background-color:white">
									                          <option value=""></option>
									                          <option value="software">India</option>
									                          <option value="hardware">Abroad</option>
								                </select>
								                <i id="locationerror"></i>
							                  </center>
                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><h1>Phone Number</h1>
                                 </center>
                             </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <center><input type="text"  id="mobile" name="mobile">
                                 </center>
                                 <br></br>
                             </div>
                             <div class="row">
                               <div class="col-lg-3 col-md-5"></div>
                               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                 <div class="jp_form_btn_wrapper">
                                  <ul>
                                   <li><a href="#" onclick="validateSignup()"><i class="fa fa-user"></i>Sign Up</a></li>
                                 </ul>
                                 </div>
                               </div>
                               <div class="col-lg-3 col-md-5"></div>
                             </div>

                             <br></br>
					  </form>

                       <div class="row">
                         <div class="col-lg-3 col-md-5"></div>
                         <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                           <div class="jp_form_btn_wrapper">
                            <ul>
                             <li><a href="#" style="background-color:#E87461"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                            </ul>
                           </div>
                         </div>
                         <div class="col-lg-3 col-md-5"></div>
                       </div>
                       <br></br>
                       <br></br>
                       <br></br>
                  </div>
                 </div>
                 <div class="col-lg-3"></div>
               </div>
             </div>
           </div>
        </div>
    </div>
    <script>
        function validateSignup(){

        var firstName =document.getElementById("finame").value;
        var lastName =document.getElementById("laname").value;
        var password=document.getElementById("password").value;
        var repassword=document.getElementById("repassword").value;
        var email=document.getElementById("email").value;
        var mobile=document.getElementById("mobile").value;
        var location=document.getElementById("location").value;

        var status=true;

        if(firstName=="")
        {
        status=false;
        document.getElementById("finame").style.border="1px solid #D64541";
        }
        else
        {
        document.getElementById("finame").style.border="1px solid green";
        }
        //===================================================
        if(lastName=="")
        {
        status=false;
        document.getElementById("laname").style.border="1px solid #D64541";
        }
        else
        {
        document.getElementById("laname").style.border="1px solid green";
        }
        //===================================================
        if(!/^.*(?=.{8,})(?=.*[a-zA-Z])(?=.*\d)(?=.*[!#$%&@*? "]).*$/.test(password))
        {
        status=false;
        document.getElementById("password").style.border="1px solid #D64541";
        }
        else
        {
        document.getElementById("password").style.borderColor="green";
        }
        //===================================================
        if(!/^[a-zA-Z0-9.!#$%&’*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))
        {
        status=false;
        document.getElementById("email").style.border="1px solid #D64541";
        }
        else
        {
        document.getElementById("email").style.borderColor="green";
        }
        //===================================================
        if(repassword==password&&repassword!=="")
        {
        status=true;
        document.getElementById("repassword").style.borderColor="green";
        }
        else
        {
        status=false;
        document.getElementById("repassword").style.border="1px solid #D64541";
        }
        //===================================================
        if(!/^\d{10}$/.test(mobile))
        {
        status=false;
        document.getElementById("mobile").style.border="1px solid #D64541";
        }
        else
        {
        document.getElementById("mobile").style.borderColor="green";
        }
        //===================================================

        if(status==true)
        {
          document.getElementById("signup").submit();

        }

        }
    </script>
</section>
