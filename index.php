<!doctype html>
<html lang="en">

<head>
   
   <?php  include("link.php"); ?>
    
    <title>bsnl home page</title>

</head>

<body>
   <section class="d-none d-lg-block">
   
   
    <!--    BODY CSS-->
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;

        }
    </style>

    <!--      END OF BODY CSS-->

    
    <!--   START OF  CAROUSEL CSS-->
    <style>
        .car .app:hover {
            border: 1px solid green;
            color: green;
        }

        .car .con:hover {
            border: 1px solid green;
            opacity: 0.6;
            background: transparent;
            color: white;

        }
    </style>
    <!--    END OF CAROUSEL CSS-->

    <!--   START OF BODY CSS-->
    <style>
        .aboutt h1 {
            color: white;
            font-weight: bold;
            margin-left: 60px;
        }

        .aboutt p {
            color: white;
            margin-left: 60px;
        }

        .aboutt .ree:hover {
            border: 2px solid #0E8C3A;
            color: #0E8C3A;
            background: #202020;
        }

        .aboutt .apll:hover {
            background: red;
            border: 2px solid #0E8C3A;
            color: #0E8C3A;
        }

        
    </style>

    <!--   END OF BODY CSS-->
   
    <div class="container-fluid">
       
       <?php  include("header.php");?>
        <div class="row car">
            <div class="col-12 p-0">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/20210119_211028_0000.png" alt="First slide" style="height:550px;width:1600px; position:relative;">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/20210119_211347_0000.png" alt="Second slide" style="height:550px;width:1600px;position:relative;">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/20210119_212211_0000.png" alt="Third slide" style="height:550px;width:1600px;position:relative;">
                        </div>

                    </div>
                </div>
                <a href="applynow.php" class="btn btn-danger app" style="position:absolute; top:470px;left:600px;width:160px;height:60px;padding-top:15px;">Apply Now</a>
                <a href="contactus.php" class="btn btn-success con" style="position:absolute; top:470px;left:850px;width:160px;height:60px;padding-top:15px;">Contact Us</a>

            </div>
        </div>

        <div class="row aboutt" style="  background: -webkit-linear-gradient(left,#0E8C3A 50%, #202020 50%);padding:110px;margin-top:60px;">
            <div class="col-6">
                <img src="images/about-img.png" alt="">
            </div>
            <div class="col-6" style="position:relative;">
                <h1>About Us</h1>
                <p style="margin-top:30px;">A Warm Welcome to all, to the most popular job portal. This is one of the greatest pathways to all the people in India that makes you obtain the simplest kind of SMS Sending Jobs in the world. The chief jobs listed on oursite are SMS Sending Jobs, Form Filling Jobs which anyone can easily do it. Other than that, you can ask for Online Data Entry Jobs, Online SMS Sending Jobs, Email Sending Job and Captcha Entry Job. All these jobs are best without investment and home based jobs. All these jobs have a huge huge scope in the industry and comparatively better wages too.</p>
                <p style="margin-top:20px;">
                    With high-end dedicated workforce, we are able to cater across the world.<br> We ensure timely deliveries with highest accuracy irrespective of the size and type of the firm like Part Time Job SMS.
                </p>

                <a href="aboutus.php" class="btn btn-danger ree" style="position:absolute; top:450px;left:100px;width:160px;height:60px;padding-top:15px;">Read More</a>

                <a href="applynow.php" class="btn btn-success apll" style="position:absolute; top:450px;left:300px;width:160px;height:60px;padding-top:15px;">Apply Now</a>
            </div>
        </div>

        <div class=" row ourr">
            <div class="col-12 p-0">
                <h2 style="text-align:center; margin-top:8%;font-weight:bold;">OUR SERVICES</h2>
                <hr style="border-bottom:3px solid black; width:5%;position:relative;">
            </div>


            <style>
                .qe {
                    width: 27%;
                    margin: 7% 1%;
                    
                }


                .ca .btn.cbb {
                     margin-left:25%;
                    margin-bottom:3%;
                    padding-top:5%;
                    font-weight:bold;
                   width:50%;
                    height:18%;
                    border: none;
                    color: white;
                    background-color: green;
                    border-radius: 4px;
                    box-shadow: inset 0 0 0 0 red;
                    transition: ease-out 0.3s;
                    font-size: 1rem;
                    outline: none;
                }
                
                .caa .btn.cbb {
                     margin-left:25%;
                    margin-bottom:3%;
                    padding-top:5%;
                    font-weight:bold;
                   width:50%;
                    height:15%;
                    border: none;
                    color: white;
                    background-color: green;
                    border-radius: 4px;
                    box-shadow: inset 0 0 0 0 red;
                    transition: ease-out 0.3s;
                    font-size: 1rem;
                    outline: none;
                }
                
                
                .btn.cbb:hover {
                    box-shadow: inset 80px 0 0 0 red;
                    cursor: pointer;
                }

                .innerr {
                    border: 6px solid #C8C8C8;
                    margin: 3%;
                    width: 95%;
                    padding: 1%;
                }

                
                
                .innerr img {
                    transition: all 1.5s ease;
                }

                .card:hover img {
                    transform: scale(1.1);

                }

                .card-title.ti {
                    color: black;
                    
                }
                
                .card-title.ti{
                    margin:0px 2%;
                font-size: 25px;
                font-weight:bolder;

                }
                 
                .card-title.ti:hover {
                    text-decoration: none;
                    color: green;
                }
                
                .card-text.te{
                   margin-top:20px;
                    font-size:15px;
                    line-height:30px; 
                }
                
                .ca{
                   box-shadow: 5px 5px 15px #B8B8B8;
                    height: 100%;
                    position:relative; 
                }
                
                .caa{
                   box-shadow: 5px 5px 15px #B8B8B8;
                    height: 100%;
                    position:relative; 
                }
                
                
            </style>
            <div class="qe" style="margin-left:110px;">

                <div class="card ca">
                    <div class="innerr">
                        <img class="card-img-top img" src="images/job-1.jpg">
                    </div>

                    <div class="card-body bod">
                        <h5><a href="dataentry.php" class="card-title ti" >Data Entry Job</a></h5>

                        <h5 class="card-text te">
                            Work from Home or Work at Home Anytime. Weekly Payment. 100% Genuine Work. Choose any <span style="font-weight:bolder">Online Data Entry Jobs</span> and earn Rs. 15,000 to Rs. 45,000 & More. (per data Rs. 5 - Rs. 10).
                        </h5>
                        <a href="applynow.php" class="btn btn-success cbb" style="margin-top:30px;" >Apply Now</a>

                        <span style="position:absolute;top:210px;right:-1px;color:green;background-color:white;width:53px;height:53px;border-radius:50%;text-align:center;padding-top:10px;box-shadow:2px 2px 6px #b8b8b8;"><i class=" fa fa-pencil-square-o" aria-hidden="true" style="font-size:22px;padding-top:5px;"></i></span>
                    </div>
                </div>


            </div>

            <div class="qe">

                <div class="card ca" >
                    <div class="innerr">
                        <img class="card-img-top img" src="images/job-2.jpg">
                    </div>

                    <div class="card-body bod">
                        <h5><a href="smssending.php" class="card-title ti">SMS Sending Job</a></h5>

                        <h5 class="card-text te">
                            <span style="font-weight:900;">Online SMS Sending Jobs</span> from Mobile (Weekly Payment) Monthly Earning: Rs. 15,000- Rs. 45,000/month. Earn Per SMS: Rs. 5 - Rs. 10/-
                        </h5>
                        <a href="applynow.php" class="btn btn-success cbb" style="margin-top:50px;" >Apply Now</a>

                        <span style="position:absolute;top:210px;right:-1px;color:green;background-color:white;width:53px;height:53px;border-radius:50%;text-align:center;padding-top:10px;box-shadow:2px 2px 6px #b8b8b8;"><i class="fa fa-eye" aria-hidden="true" style="font-size:22px;padding-top:5px;"></i></span>
                    </div>
                </div>


            </div>

            <div class="qe">

                <div class="card ca">
                    <div class="innerr">
                        <img class="card-img-top img" src="images/job-3.jpg">
                    </div>

                    <div class="card-body bod">
                        <h5><a href="emailsending.php" class="card-title ti">E-mail Sending Jobs</a></h5>

                        <h5 class="card-text te">
                            <span style="font-weight:bold;">E-mail Sending Jobs</span> from Home. Earn Up to Rs. 20,000 per month, daily Bank Payout, Any One can Start this Job (Student, Housewife, Retired Person)
                        </h5>
                        <a href="applynow.php" class="btn btn-success cbb" style="margin-top:55px;">Apply Now</a>

                        <span style="position:absolute;top:210px;right:-1px;color:green;background-color:white;width:53px;height:53px;border-radius:50%;text-align:center;padding-top:10px;box-shadow:2px 2px 6px #b8b8b8;"><i class="fa fa-lightbulb-o" aria-hidden="true" style="font-size:22px;padding-top:5px;"></i></span>
                    </div>
                </div>


            </div>

            <div class="qe" style="margin-left:110px;">

                <div class="card caa">
                    <div class="innerr">
                        <img class="card-img-top img" src="images/Captch-Typing%20-%20Copy.jpg" style="width:317px;height:230px;">
                    </div>

                    <div class="card-body bod">
                        <h5><a href="capatchaentry.php" class="card-title ti">Captcha Entry</a></h5>

                        <h5 class="card-text te">
                            The Captcha (Completely Automated Public Turing Test to Tell Computers and Humans Apart) is a type of challenge response code used in computer to determine whether or not the user is human.
                        </h5>
                        <a href="applynow.php" class="btn btn-success cbb" style="margin-top:110px;" >Apply Now</a>

                        <span style="position:absolute;top:210px;right:-1px;color:green;background-color:white;width:53px;height:53px;border-radius:50%;text-align:center;padding-top:10px;box-shadow:2px 2px 6px #b8b8b8;"><i class="fa fa-lightbulb-o" aria-hidden="true" style="font-size:22px;padding-top:5px;"></i></span>
                    </div>
                </div>


            </div>

            <div class="qe">

                <div class="card caa">
                    <div class="innerr">
                        <img class="card-img-top" src="images/Online-Form%20-%20Copy.jpg" style="width:317px;height:230px;" >
                    </div>

                    <div class="card-body bod">
                        <h5><a href="formfilling.php" class="card-title ti" >Form Filling Job</a></h5>

                        <h5 class="card-text te" >
                            The internet online form filling jobs is out of the easiest work from home, one could join any time. The Online Form Filling Jobs, the name informs you need to purely fill the internet forms with necessary details provided to you. Per form(Rs. 15 - Rs. 25/-)
                        </h5>
                        <a href="applynow.php" class="btn btn-success cbb" style="margin-top:80px;" >Apply Now</a>

                        <span style="position:absolute;top:210px;right:-1px;color:green;background-color:white;width:53px;height:53px;border-radius:50%;text-align:center;padding-top:10px;box-shadow:2px 2px 6px #b8b8b8;"><i class="fa fa-lightbulb-o" aria-hidden="true" style="font-size:22px;padding-top:5px;"></i></span>
                    </div>
                </div>


            </div>

            <div class="qe">

                <div class="card caa">
                    <div class="innerr">
                        <img class="card-img-top img" src="images/Documents-Required.jpg" style="width:317px;height:230px;">
                    </div>

                    <div class="card-body bod">
                        <h5><a href="#" class="card-title ti">Documents required</a></h5>

                        <h5 class="card-text te">
                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Aadhar Card/ Voter Card</p>
                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Pan Card</p>
                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Bank Passbook</p>
                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Pasport Size Photo (2 Pic)</p>
                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Copy of Education Details</p>
                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Registration Fee Rs. 2550/-</p>
                        </h5>
                        <a href="#" class="btn btn-success cbb"  >Apply Now</a>

                        <span style="position:absolute;top:210px;right:-1px;color:green;background-color:white;width:53px;height:53px;border-radius:50%;text-align:center;padding-top:10px;box-shadow:2px 2px 6px #b8b8b8;"><i class="fa fa-lightbulb-o" aria-hidden="true" style="font-size:22px;padding-top:5px;"></i></span>
                    </div>
                </div>
            </div>

        </div>

        <div class=" row gett">
           
                      <style>
                .gett{
                    background-image: url(images/pen3.jpg);
                    background-size: cover;
                    background-repeat: no-repeat;
                    height: 700px;
                    background-position: center;
                    opacity: 0.7;
                    margin-top: 60px;
                    
                }
                          .row input{
                             
                              margin-bottom: 20px;
                          }
            </style>

                     <div class="col-6 offset-3" style="background-color:white; margin-top:5%;margin-bottom:5%;">
               <h1 style="text-align:center;color:black;padding:5%;" >Get In Touch</h1>
               
               <form action="getintouch.php" method="post">
                   
                    <div class="row">
             
              <div class="col-6">
                  <input type="text" class="form-control form-control-lg"  placeholder="full name *" name="fullname">
                  
              </div>
              <div class="col-6">
                  <input type="email" class="form-control form-control-lg"  placeholder="email *" name="email">
                  
              </div>
               <div class="col-6">
                 <input type="text" class="form-control form-control-lg"  placeholder="contact number *" name="contact">
                  
              </div>
              
              <div class="col-6">
                   <select name="job" class="form-control form-control-lg">
                         <option value="" selected disabled>Select Job</option>
                        <option value="data">Data Entry Job</option>
                         <option value="sms">SMS Sending Job</option>
                        <option value="email">Email Sending Job</option>
                         <option value="Capatcha">Capatcha Entry Job</option>
                         <option value="form">Form Filling Job</option>
                         </select>
                         </div>
                          </div>
              
               <div class="col-12">
            <textarea name="textarea" class="form-control form-control-lg" rows="6" placeholder="your message"></textarea>

              </div>
              
              <div class="col-12 d-flex justify-content-center mt-5" >
                 
                  <input type="submit" name="register" value="Submit" class="btn btn-success" >

              </div>
            
               </form>
               
            </div>
     
            </div>
          
        <div class="row galleryy">
                     <style>
                        .galleryy{
                             background-color:#F8F8FF; 
                             width: auto;
                            height: 1000px;
                            
                            
                         }
                    .coo{
                        width: 28%;
                       margin-left: 4%;
                         transition: 0.5s ease;
                    }
                         .coo img:hover{
                             transform: scale(1.1);
                         }
                         
                </style>

                <div class="col-12 p-0">
                <h2 style="text-align:center; margin-top:8%;font-weight:bold;">OUR GALLERY</h2>
                <hr style="border-bottom:3px solid black; width:4%;position:relative;">
            </div>


                   
                    <div class="coo">
                      <a href="images/work-15fe44c35598e1.jpg" data-lightbox="mygallery"><img src="images/work-15fe44c35598e1.jpg" style="width:100%;height:350px;" ></a>
                      
                       </div>

                    <div class="coo">
                         <a href="images/work-2.jpg" data-lightbox="mygallery"><img src="images/work-2.jpg" style="width:100%;height:350px;" ></a>

                    </div>

                    <div class="coo">
                        <a href="images/work-3.jpg" data-lightbox="mygallery"><img src="images/work-3.jpg" style="width:100%;height:350px;" ></a>

                    </div>
                    
                     <div class="coo">
                        <a href="images/work-4.jpg" data-lightbox="mygallery"><img src="images/work-4.jpg" style="width:410px;height:350px;" ></a>
                    </div>
                    
                     <div class="coo">
                        <a href="images/work-5.jpg" data-lightbox="mygallery"><img src="images/work-5.jpg" style="width:410px;height:350px;" ></a>

                    </div>
                     <div class="coo">
                        <a href="images/work-6.jpg" data-lightbox="mygallery"><img src="images/work-6.jpg" style="width:410px;height:350px;" ></a>

                    </div>
                      </div>
                      
                      
        <div class="row jobb">
            
                <div class="col-12 p-0">
                <h2 style="text-align:center; margin-top:8%;font-weight:bold;">JOBS BENEFITS</h2>
                <hr style="border-bottom:3px solid black; width:4%;position:relative;">
            </div>

         <div class="col-12">
               <div class="row">
               <style>
                   
                   .w{
                       margin-left: 6%;
                       margin-top: 4%;
                   }
                   
                   .w h4{
                       font-weight:bold;
                   }
                   </style>
              
               <div class=" col-3 w">
                  <div class="row">
                      <div class="col-2"> <i class="fa fa-map-marker" aria-hidden="true" style="color:green;border:3px solid black;padding:12% 27%;font-size:25px;"></i></div>
                      <div class="col-10">
                      <h4>Work From Anywhere</h4>
                      <p>You Can work from Home, Office, College, Anywhere as per your Convenience.</p>
                      </div>
                  </div>
                 
                    
               </div>
               
                <div class=" col-3 w">
                  <div class="row">
                      <div class="col-2"> <i class=" fa fa-calendar-times-o" aria-hidden="true" style="color:green;border:3px solid black;padding:12% 22%;font-size:25px;"></i></div>
                      <div class="col-10">
                      <h4>Work At Anytime</h4>
                      <p>You Can work from Home, Office, College, Anywhere as per your Convenience.</p>
                      </div>
                  </div>
                 
                    
               </div>
               
                <div class=" col-3 w">
                  <div class="row">
                      <div class="col-2"> 
                      <i class="fa fa-money" aria-hidden="true" style="color:green;border:3px solid black;padding:12% 22%;font-size:25px;"></i>
                      </div>
                      <div class="col-10">
                      <h4>Easy Payments</h4>
                      <p>No need to Work Daily. You can Work at your own time, as per your Wish.</p>
                      </div>
                  </div>
                   
               </div>
               
                <div class=" col-3 w">
                  <div class="row">
                      <div class="col-2"> 
                      <i class="fa fa-magnet" aria-hidden="true" style="color:green;border:3px solid black;padding:12% 22%;font-size:25px;"></i>
                      </div>
                      <div class="col-10">
                      <h4>No Limit Or Target</h4>
                      <p>There is No limit or Target. You can work as much as you can. As this is a Part/Full time Job.</p>
                      </div>
                  </div>
                   
               </div>
               
               <div class=" col-3 w">
                  <div class="row">
                      <div class="col-2"> 
                      <i class="fa fa-users" aria-hidden="true" style="color:green;border:3px solid black;padding:12% 22%;font-size:25px;"></i>
                      </div>
                      <div class="col-10">
                      <h4>Instant Work Update</h4>
                      <p>Your Work Status will be Updated instantly Its an automated to approve all your Works.</p>
                      </div>
                  </div>
                   
               </div>
               
               <div class=" col-3 w">
                  <div class="row">
                      <div class="col-2"> 
                      <i class="fa fa-envelope" aria-hidden="true" style="color:green;border:3px solid black;padding:12% 22%;font-size:25px;"></i>
                      </div>
                      <div class="col-10">
                      <h4>24x7 Customer Support</h4>
                      <p>24x7 Customer Support Dedicated Customer Support via Email:bsnlservice1971@gmail.com </p>
                      </div>
                  </div>
                   
               </div>
                
           </div>
         </div>
           
           
           
        </div>
        
        <div class="row induss">
            
            <style>
                .induss{
                    background-color: #F8F8FF;
                    margin: 4%;
                    padding: 3%;
                    border-radius: 10px;
                    box-shadow: 3px 3px 9px #B8B8B8; 
                }
               
                .induss p{
                    font-weight: bolder;
                }
                
                .induss .ic:hover{
                    margin-top:-5px;
                    box-shadow: 2px 2px 9px #b8b8b8;
                    transition: 0.2s ease;
                }
                   
            </style>
            
            <div class="col-12 p-0">
               <div class="row">
                   <div class="col-3">
                <div class="row">
                    <div class="col-4">
                       <i class=" fa-2x fa fa-globe btn-success ic" aria-hidden="true" style="width:55px; height:55px;align-item:center;padding:19%;color:white;border-radius:10%;"></i> 
                    </div>
                    <div class="col-8">
                        <p>JOBS</p>
                        <P>550+</P>
                    </div>
                </div>
                   </div>

                   
                    <div class="col-3">
                <div class="row">
                    <div class="col-4">
                      <i class=" fa-2x fa fa-user-circle btn-success ic" aria-hidden="true" style="width:55px; height:55px;align-item:center;padding:19%;color:white;border-radius:10%;"></i> 
                    </div>
                    <div class="col-8">
                        <p>INDUSTRIES</p>
                        <P>50+</P>
                    </div>
                </div>
                   </div>
                   
                    <div class="col-3">
                <div class="row">
                    <div class="col-4">
                       <i class=" fa-2x fa fa-briefcase btn-success ic" aria-hidden="true" style="width:80%; height:60%;align-item:center;padding:19%;color:white;border-radius:10%;"></i> 
                    </div>
                    <div class="col-8">
                        <p>RESUME RESIVED</p>
                        <P>260+</P>
                    </div>
                </div>
                   </div>
                   
                    <div class="col-3">
                <div class="row">
                    <div class="col-4">
                       <i class=" fa-2x fa fa-headphones btn-success ic" aria-hidden="true" style="width:55px; height:55px;align-item:center;padding:19%;color:white;border-radius:10%;"></i> 
                    </div>
                    <div class="col-8">
                        <p>HAPPY CLIENTS</p>
                        <P>20K+</P>
                    </div>
                </div>
                   </div>
               </div>

            </div>
            
        </div>
        
        <div class="row clientt">
            <div class="col-12 p-0" style="background-color:#F8F8FF;height:200px;">
                <h2 style="text-align:center; margin-top:3%;font-weight:bold;">CLIENT TESTIMONIAL</h2>
                <hr style="border-bottom:3px solid black; width:4%;position:relative;">
                <p style="color:green;font-size:50px;position:absolute;left:50%;top:24%;">.</p>
            </div> 
           
        </div>
        
        <?php include ("gallery.php"); ?>
      
       
        
             
            <?php include("footer.php"); ?>
            
            
                <style>
                 .apbb:hover{
                   background-color: transparent;
                
                     border: 2px solid green;
                     color: black;
                 }
                 
                 .myBtnn{
                     top:76%;
                     left: 94%;
                     background: green;
                     color: white;
                     position: fixed;
                     z-index: 99;
                     width: 45px;
                     height: 45px;
                     border-radius: 10px;
                     outline: none;
                     cursor: pointer;
                     border: none;
                     
                 }
                 .myBtnn:hover {
                     background-color: #555;
                     color: white;
                        outline: none;
                 }
                 </style>
                 
           <script>
         function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
         </script>
            
            <button onclick="topFunction()" class="myBtnn btn-success" title="Go to top"><i class="fa-2x fa fa-angle-up" aria-hidden="true"></i></button>
            
             <a href="applynow.php" class="btn btn-danger apbb" style=" z-index: 100; position: fixed; top: 86%; left: 88%;width:160px;height:8%;border-radius:40px;font-size:14px;padding-top:12px;">Apply Now</a>

             
         </div>    
    </section> 

      <section class="d-block d-lg-none">
    
    
    <!--   START OF  CAROUSEL CSS-->
    <style>
        .car .app:hover {
            border: 1px solid green;
            color: green;
        }

        .car .con:hover {
            border: 1px solid green;
            color: green;
            opacity: 0.6;

        }
    </style>
    <!--    END OF CAROUSEL CSS-->
    
     <!--   START OF BODY CSS-->
    <style>

        .about span {
            color: #C8C8C8;
            margin-left: 10px;
            font-size:13px;
            font-weight: bold;
            margin-top: 15%;
            
        }

        .about .re:hover {
            border: 2px solid #0E8C3A;
            color: #0E8C3A;
            background: #202020;
        }

        .about .apl:hover {
            background: red;
            border: 2px solid #0E8C3A;
            color: #0E8C3A;
        }

        

    </style>

    <!--   END OF BODY CSS-->
    <div class="container-fluid">
      
       <?php  include("headermobview.php");?>
            
             <div class="row car">
            <div class="col-12 p-0">
                <div id="carouselExampleSlides" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/20210119_211028_0000.png" alt="First slide" style="height:40%;width:100%; position:relative;">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/20210119_211347_0000.png" alt="Second slide" style="height:40%;width:100%;position:relative;">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/20210119_212211_0000.png" alt="Third slide" style="height:40%;width:100%;position:relative;">
                        </div>

                    </div>
                </div>
                <a href="applynow.php" class="btn btn-danger app" style="position:absolute; top:70%;left:30%;width:25%;height:25%;font-size:13px;">Apply Now</a>
                <a href="contactus.php" class="btn btn-success con" style="position:absolute; top:70%;left:60%;width:25%;height:25%;font-size:13px;">Contact Us</a>

            </div>
        </div>
        

        <div class="row about" style=" background: #202020;padding:10%;margin-top:8%;height:1100px;">
           <div class="col-12 p-0">
               <img src="images/about-img.png" class="img-fluid" >
           </div>
           
           <div class="col-12 p-0">
               <p style="font-weight:bold;font-size:25px;color:white;">About Us</p>
               <span>A Warm Welcome to all, to the most popular job portal. This is one of the greatest pathways to all the people in India that makes you obtain the simplest kind of SMS Sending Jobs in the world. The chief jobs listed on our site are SMS Sending Jobs, Form Filling Jobs which anyone can easily do it. Other than that, you can ask for Online Data Entry Jobs, Online SMS Sending Jobs, Email Sending Job and Captcha Entry Job. All these jobs are best without investment and home based jobs. All these jobs have a huge huge scope in the industry and comparatively better wages too.</span>
           
             <span style="display:block;margin-top:8%; font-size:13px;">With high-end dedicated workforce, we are able to cater across the world We ensure timely deliveries with highest accuracy irrespective of the size and type of the firm like BSNL online job.
               </span>
               
               
                <a href="aboutus.php" class="btn btn-danger re" style="position:absolute; top:80%;left:8%;width:36%;height:8%;font-size:14px;margin-top:20%;">Read More</a>

                <a href="applynow.php" class="btn btn-success apl" style="position:absolute; top:80%;left:57%;width:36%;height:8%;font-size:14px;margin-top:20%;">Apply Now</a>
                </div>
        </div>
        
        
           <div class="row our">
           
            <style>
                   .btn.cb {
                    width: 200px;
                    height: 100px;
                    border: none;
                    color: white;
                    background-color: green;
                    border-radius: 4px;
                    box-shadow: inset 0 0 0 0 red;
                    transition: ease-out 0.3s;
                    font-size: 1rem;
                    outline: none;
                }

                .btn.cb:hover {
                    box-shadow: inset 80px 0 0 0 red;
                    cursor: pointer;
                }
                .q {
                    width: 100%;
                    margin-bottom: 5%;

                }
                
                 .inner {
                    border: 6px solid #C8C8C8;
                    margin: 20px;
                    width: 90%;
                    padding: 5px;
                }

                .inner img {
                    transition: all 1.5s ease;
                }

                .card:hover img {
                    transform: scale(1.2);

                }
                
                  .card-title.ti {
                    color: black;
                }

                .card-title.ti:hover {
                    text-decoration: none;
                    color: green;
                }

               </style>

             <div class="col-12 p-0">
                <h2 style="text-align:center; margin-top:8%;font-weight:bold;">OUR GALLERY</h2>
                <hr style="border-bottom:2px solid black; width:6%;position:relative;">
            </div>

                <div class="q" >

                <div class="card" style="  box-shadow: 5px 5px 15px #B8B8B8; height: 620px;position:relative;">
                    <div class="inner">
                        <img class="card-img-top img-fluid" src="images/job-1.jpg">
                    </div>

                    <div class="card-body">
                        <h5><a href="dataentry.php" class="card-title ti" style=" margin:0 10%; font-size: 25px;font-weight:bolder;">Data Entry Job</a></h5>

                        <h5 class="card-text" style="margin-top:5%;font-size:15px;line-height:30px;">
                            Work from Home or Work at Home Anytime. Weekly Payment. 100% Genuine Work. Choose any <span style="font-weight:bolder">Online Data Entry Jobs</span> and earn Rs. 15,000 to Rs. 45,000 & More. (per data Rs. 5 - Rs. 10).
                        </h5>
                        <a href="applynow.php" class="btn btn-success cb" style="width:45%;height:18%;margin-left:30%;margin-top:8%;padding-top:5%;font-weight:bold;">Apply Now</a>

                        <span style="position:absolute;top:27%;right:0.5%;color:green;background-color:white;width:53px;height:53px;border-radius:50%;text-align:center;padding-top:10px;box-shadow:2px 2px 6px #b8b8b8;"><i class=" fa fa-pencil-square-o" aria-hidden="true" style="font-size:22px;padding-top:5px;"></i></span>
                    </div>
                </div>


            </div>
            
            
            <div class="q">

                <div class="card" style="  box-shadow: 5px 5px 15px #B8B8B8; height: 620px;position:relative;">
                    <div class="inner">
                        <img class="card-img-top img-fluid" src="images/job-2.jpg">
                    </div>

                    <div class="card-body">
                        <h5><a href="smssending.php" class="card-title ti" style=" margin:0 10%; font-size: 25px;font-weight:bolder;">SMS Sending Job</a></h5>

                        <h5 class="card-text" style="margin-top:5%;font-size:15px;line-height:30px;">
                            <span style="font-weight:900;">Online SMS Sending Jobs</span> from Mobile (Weekly Payment) Monthly Earning: Rs. 15,000- Rs. 45,000/month. Earn Per SMS: Rs. 5 - Rs. 10/-
                        </h5>
                        <a href="applynow.php" class="btn btn-success cb" style="width:45%;height:18%;margin-left:30%;margin-top:8%;padding-top:5%;font-weight:bold;">Apply Now</a>

                        <span style="position:absolute;top:27%;right:0.5%;;color:green;background-color:white;width:53px;height:53px;border-radius:50%;text-align:center;padding-top:10px;box-shadow:2px 2px 6px #b8b8b8;"><i class="fa fa-eye" aria-hidden="true" style="font-size:22px;padding-top:5px;"></i></span>
                    </div>
                </div>


            </div>

      
        
         <div class="q">

               <div class="card" style="  box-shadow: 5px 5px 15px #B8B8B8; height: 620px;position:relative;">
                    <div class="inner">
                        <img class="card-img-top img-fluid" src="images/job-3.jpg">
                    </div>

                    <div class="card-body">
                        <h5><a href="emailsending.php" class="card-title ti" style=" margin:0 5%; font-size: 25px;font-weight:bolder;">E-mail Sending Jobs</a></h5>

                        <h5 class="card-text" style="margin-top:5%;font-size:15px;line-height:30px;">
                            <span style="font-weight:900;">E-mail Sending Jobs</span> from Home. Earn Up to Rs. 20,000 per month, daily Bank Payout, Any One can Start this Job (Student, Housewife, Retired Person)
                        </h5>
                        <a href="applynow.php" class="btn btn-success cb" style="width:45%;height:18%;margin-left:30%;margin-top:8%;padding-top:5%;font-weight:bold;">Apply Now</a>

                        <span style="position:absolute;top:25%;right:0.5%;color:green;background-color:white;width:53px;height:53px;border-radius:50%;text-align:center;padding-top:10px;box-shadow:2px 2px 6px #b8b8b8;"><i class="fa fa-lightbulb-o" aria-hidden="true" style="font-size:22px;padding-top:5px;"></i></span>
                    </div>
                </div>


            </div>
            
            <div class="q">

                <div class="card" style="  box-shadow: 5px 5px 15px #B8B8B8; height: 640px;position:relative;">
                    <div class="inner">
                        <img class="card-img-top img-fluid" src="images/Captch-Typing%20-%20Copy.jpg">
                    </div>

                    <div class="card-body">
                        <h5><a href="capatchaentry.php" class="card-title ti" style=" margin:0 5%; font-size: 25px;font-weight:bolder;">Captcha Entry</a></h5>

                        <h5 class="card-text" style="margin-top:5%;font-size:15px;line-height:30px;">
                            The Captcha (Completely Automated Public Turing Test to Tell Computers and Humans Apart) is a type of challenge response code used in computer to determine whether or not the user is human.
                        </h5>
                        <a href="applynow.php" class="btn btn-success cb" style="width:50%;height:16%;margin-left:30%;margin-top:8%;padding-top:5%;font-weight:bold;">Apply Now</a>

                        <span style="position:absolute;top:20%;right:0.5%;color:green;background-color:white;width:53px;height:53px;border-radius:50%;text-align:center;padding-top:10px;box-shadow:2px 2px 6px #b8b8b8;"><i class="fa fa-lightbulb-o" aria-hidden="true" style="font-size:22px;padding-top:5px;"></i></span>
                    </div>
                </div>


            </div>


      <div class="q">

                <div class="card" style="  box-shadow: 5px 5px 15px #B8B8B8; height: 640px;position:relative;">
                    <div class="inner">
                        <img class="card-img-top img-fluid" src="images/Online-Form%20-%20Copy.jpg">
                    </div>

                    <div class="card-body">
                        <h5><a href="formfilling.php" class="card-title ti" style=" margin:0 5%; font-size: 25px;font-weight:bolder;">Form Filling Job</a></h5>

                        <h5 class="card-text" style="margin-top:5%;font-size:15px;line-height:30px;">
                            The internet online form filling jobs is out of the easiest work from home, one could join any time. The Online Form Filling Jobs, the name informs you need to purely fill the internet forms with necessary details provided to you. Per form(Rs. 15 - Rs. 25/-)
                        </h5>
                        <a href="applynow.php" class="btn btn-success cb" style="width:50%;height:16%;margin-left:30%;margin-top:8%;padding-top:5%;font-weight:bold;">Apply Now</a>

                        <span style="position:absolute;top:20%;right:0.5%;color:green;background-color:white;width:53px;height:53px;border-radius:50%;text-align:center;padding-top:10px;box-shadow:2px 2px 6px #b8b8b8;"><i class="fa fa-lightbulb-o" aria-hidden="true" style="font-size:22px;padding-top:5px;"></i></span>
                    </div>
                </div>


            </div>
            
            <div class="q">

                <div class="card" style="  box-shadow: 5px 5px 15px #B8B8B8; height: 640px;position:relative;">
                    <div class="inner">
                        <img class="card-img-top" src="images/Documents-Required.jpg">
                    </div>

                    <div class="card-body">
                        <h5><a href="#" class="card-title ti" style=" margin:0 5%; font-size: 25px;font-weight:bolder;">Documents required</a></h5>

                        <h5 class="card-text" style="margin-top:5%;font-size:15px;line-height:30px;">
                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Aadhar Card/ Voter Card</p>
                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Pan Card</p>
                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Bank Passbook</p>
                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Pasport Size Photo (2 Pic)</p>
                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Copy of Education Details</p>
                            <p><i class="fa fa-arrow-right" aria-hidden="true"></i> Registration Fee Rs. 2550/-</p>
                        </h5>
                        <a href="applynow.php" class="btn btn-success cb" style="width:50%;height:16%;margin-left:30%;margin-top:3%;padding-top:5%;font-weight:bold;">Apply Now</a>

                        <span style="position:absolute;top:20%;right:0.5%;color:green;background-color:white;width:53px;height:53px;border-radius:50%;text-align:center;padding-top:10px;box-shadow:2px 2px 6px #b8b8b8;"><i class="fa fa-lightbulb-o" aria-hidden="true" style="font-size:22px;padding-top:5px;"></i></span>
                    </div>
                </div>
            </div>


      </div>
      
      <div class=" row get">
           
                      <style>
                .get{
                    background-image: url(images/pen3.jpg);
                    background-size: cover;
                    background-repeat: no-repeat;
                    height: 700px;
                    background-position: center;
                    opacity: 0.7;
                    margin-top: 60px;
                }
                           input{
                             
                              margin-bottom: 20px;
                          }
            </style>

                     <div class="col-12" style="background-color:white; margin-top:15%;margin-bottom:15%;">
               <h1 style="text-align:center;color:black;padding:5%;" >Get In Touch</h1>
               
               <form action="getintouch.php" method="post">
                   
                    <div class="row">
             
              <div class="col-12">
                  <input type="text" class="form-control form-control-lg"  placeholder="full name *" name="fullname">
                  
              </div>
              <div class="col-12">
                  <input type="email" class="form-control form-control-lg"  placeholder="email *" name="email">
                  
              </div>
               <div class="col-12">
                 <input type="text" class="form-control form-control-lg"  placeholder="contact number *" name="contact">
                  
              </div>
              
              <div class="col-12">
                   <select name="job" class="form-control form-control-lg">
                         <option value="" selected disabled>Select Job</option>
                        <option value="data">Data Entry Job</option>
                         <option value="sms">SMS Sending Job</option>
                        <option value="email">Email Sending Job</option>
                         <option value="Capatcha">Capatcha Entry Job</option>
                         <option value="form">Form Filling Job</option>
                         </select>
                         </div>
                          </div>
              
               <div class="col-12">
            <textarea name="textarea" class="form-control form-control-lg" rows="6" placeholder="your message" style="margin-top:20px;"></textarea>

              </div>
              
                 
                  <input type="submit" name="register" value="Submit" class="btn btn-success" style="width-350px;height:40px;margin-top:40px;">

            
               </form>
               
            </div>
     
            </div>
          
        
        
       
        
        

        <div class="row job">
            
              
            <style>
            
                .jb{
                    margin-bottom: 8%;
                }
            </style>
            
            <div class="col-12 p-0">
                <h2 style="text-align:center; margin-top:8%;">Job Benifits</h2>
                <hr style="border-bottom:2px solid black; width:10%;position:relative;">
                <p style="color:green;font-size:40px;position:absolute;left:49%;top:40%;">.</p>
            </div>
            
            <div class="col-12">
                <div class="row jb">
                          <div class="col-2"> <i class="fa fa-map-marker" aria-hidden="true" style="color:green;border:3px solid black;padding:12% 27%;font-size:25px;"></i></div>
                      <div class="col-10">
                      <h5>Work From Anywhere</h5>
                      <p>You Can work from Home, Office, College, Anywhere as per your Convenience.</p>
                      </div>
                </div>
                    
                  
                   
                      <div class="row jb">
                          <div class="col-2"> <i class=" fa fa-calendar-times-o" aria-hidden="true" style="color:green;border:3px solid black;padding:12% 22%;font-size:25px;"></i></div>
                      <div class="col-10">
                      <h5>Work At Anytime</h5>
                      <p>You Can work from Home, Office, College, Anywhere as per your Convenience.</p>
                      </div>
                      </div>
                   
                      
                      
                      
                      <div class="row jb">
                           <div class="col-2"> 
                      <i class="fa fa-money" aria-hidden="true" style="color:green;border:3px solid black;padding:12% 22%;font-size:25px;"></i>
                      </div>
                      <div class="col-10">
                      <h5>Easy Payments</h5>
                      <p>No need to Work Daily. You can Work at your own time, as per your Wish.</p>
                      </div>
                     </div>
                   
                      
                      
                      
                      <div class="row jb">
                      <div class="col-2"> 
                      <i class="fa fa-magnet" aria-hidden="true" style="color:green;border:3px solid black;padding:12% 22%;font-size:25px;"></i>
                      </div>
                      <div class="col-10">
                      <h5>No Limit Or Target</h5>
                      <p>There is No limit or Target. You can work as much as you can. As this is a Part/Full time Job.</p>
                      </div>
                      </div>
                   
                  
                       
                      <div class="row jb">
                      <div class="col-2"> 
                      <i class="fa fa-users" aria-hidden="true" style="color:green;border:3px solid black;padding:12% 22%;font-size:25px;"></i>
                      </div>
                      <div class="col-10">
                      <h5>Instant Work Update</h5>
                      <p>Your Work Status will be Updated instantly Its an automated to approve all your Works.</p>
                      </div>
                    </div>
            
                   
                       
                      <div class="row jb">
                       <div class="col-2"> 
                      <i class="fa fa-envelope" aria-hidden="true" style="color:green;border:3px solid black;padding:12% 22%;font-size:25px;"></i>
                      </div>
                      <div class="col-10">
                      <h5>24x7 Customer Support</h5>
                      <p>24x7 Customer Support Dedicated Customer Support via Email:bsnlservice1971@gmail.com </p>
                      </div>
                    </div>
                   
                   
                </div>
        
            
        </div>
        


          <div class="row indus">
            
            <style>
                .indus{
                    background-color: #F8F8FF;
                    margin: 5% 2%;
                    padding: 10% 13%;
                    border-radius: 10px;
                    box-shadow: 3px 3px 9px #B8B8B8; 
                }
                .indus p{
                    font-weight: bolder;
                }
                
                .indus .ic:hover{
                    margin-top:-5px;
                    box-shadow: 2px 2px 9px #b8b8b8;
                    transition: 0.2s ease;
                }
                        
            </style>
            
            <div class="col-12 p-0">
               <div class="row">
                   <div class="col-12 p-0">
                <div class="row">
                    <div class="col-4">
                       <i class=" fa-2x fa fa-globe btn-success ic" aria-hidden="true" style="width:55px; height:55px;align-item:center;padding:19%;color:white;border-radius:10%;"></i> 
                    </div>
                    <div class="col-8">
                        <p>JOBS</p>
                        <P>550+</P>
                    </div>
                </div>
                   </div>

                   
                    <div class="col-12 p-0">
                <div class="row">
                    <div class="col-4">
                      <i class=" fa-2x fa fa-user-circle btn-success ic" aria-hidden="true" style="width:55px; height:55px;align-item:center;padding:19%;color:white;border-radius:10%;"></i> 
                    </div>
                    <div class="col-8">
                        <p>INDUSTRIES</p>
                        <P>50+</P>
                    </div>
                </div>
                   </div>
                   
                    <div class="col-12 p-0">
                <div class="row">
                    <div class="col-4">
                       <i class=" fa-2x fa fa-briefcase btn-success ic" aria-hidden="true" style="width:55px; height:55px;align-item:center;padding:19%;color:white;border-radius:10%;"></i> 
                    </div>
                    <div class="col-8">
                        <p>RESUME RESIVED</p>
                        <P>260+</P>
                    </div>
                </div>
                   </div>
                   
                    <div class="col-12 p-0">
                <div class="row">
                    <div class="col-4">
                       <i class=" fa-2x fa fa-headphones btn-success ic" aria-hidden="true" style="width:55px; height:55px;align-item:center;padding:19%;color:white;border-radius:10%;"></i> 
                    </div>
                    <div class="col-8">
                        <p>HAPPY CLIENTS</p>
                        <P>20K+</P>
                    </div>
                </div>
                   </div>
               </div>

            </div>
            
        </div>
        


        <?php  include("gallermobview.php"); ?>
        
        

        
       <?php include("mobviewfooter.php"); ?>


      <style>
                 .apb:hover{
                   background-color: transparent;
                
                     border: 2px solid green;
                     color: black;
                 }
                 
                 .myBtn{
                     top:76%;
                     left: 80%;
                     background: green;
                     color: white;
                     position: fixed;
                     z-index: 99;
                     width: 45px;
                     height: 45px;
                     border-radius: 10px;
                     outline: none;
                     cursor: pointer;
                     border: none;
                     
                 }
                 .myBtn:hover {
                     background-color: #555;
                     color: white;
                        outline: none;
                 }
                 </style>
                 
           <script>
         function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
         </script>
            
            <button onclick="topFunction()" class="myBtn btn-success" title="Go to top"><i class="fa-2x fa fa-angle-up" aria-hidden="true"></i></button>
            
             <a href="applynow.php" class="btn btn-danger apb" style=" z-index: 100; position: fixed; top: 86%; left: 66%;width:30%;height:7%;border-radius:40px;font-size:13px;padding:2%">Apply Now</a>
    
    </div>

    </section>
    
    
</body>

</html>