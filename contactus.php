<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contact us</title>
    <?php include("link.php");?>
    
</head>
<body>
    
     <section class="d-lg-block d-none">
     
          <style>
       
        .mobile .image{
    background-image:linear-gradient( rgba(1,1,1,.8), rgba(1,1,1 , .8)),url("images/offc.jpg");
                      background-size: cover;
                background-repeat: no-repeat;
                height: 250px;
                background-position: center;
            position: relative;
       }
       .image a{
         color:white;

       }
       .image a:hover{
          text-decoration: none;
           color: green;
       }
       
    body{
    font-family: 'Noto Sans HK', sans-serif;

    }
       

       
       .mid input{
           margin-bottom: 25px;
           
       }
              .mid{
                  background-color: #f8f8f8;
              }
   </style>
    
   
           <div class="container-fluid">

      <?php include("header.php"); ?>

       <div class="row mobile">
          
          
           <div class="col-12 p-0">
              <div class="image">
                 <h1 style="padding:7% 10%;font-size:2rem;color:white;font-weight:bold;">Contact us</h1>
                <hr style="border-bottom:3px solid green; width:5%;position:absolute;top:51%;left:10%;">
               
                  
                  <a href="index.php" style="position:absolute;left:75%;top:37%;font-size:20px;font-weight:bold;">Home</a>
                  
                  <i class="fa fa-angle-double-right" aria-hidden="true" style="color:white;position:absolute;left:80%;top:39%;font-size:1rem;font-weight:bold;"></i>
                  
                   <a href="contactus.php" style="color:green;position:absolute;left:82%;top:37%;font-size:20px;font-weight:bold;">Contact Us</a>
              </div>
               
           </div>
            
        </div>
        
         <div class="row mid">
         <div class="col-7">
             <img src="images/offccc.jpg" style="width:700px;height:600px;">
         </div>
         
                <div class="col-5">
                
                  <form action="getintouch.php" method="post" style="padding:10% 0;" >
                   
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
              
               <div class="col-12 p-0">
            <textarea name="textarea" class="form-control form-control-lg" rows="6" placeholder="your message" style="margin-top:20px;"></textarea>

              </div>
              
                 
                  <input type="submit" name="register" value="Submit" class="btn btn-success" style="width-350px;height:40px;margin-top:40px;">

            
               </form>
               
                
            </div>
             
             
              <style>
                 
                  .call{
                      width:20%;
                      margin: 5% 6%;
                      padding: 0 2%;
                  }
                 </style>
               <div class="call">
                   <img src="images/call_us.png"  style="margin-left:70px;">
                     <h4 align=center>Call Us</h4>
                     <p align=center>Contact on company mail. </p>
               </div>
                     
                
                 
                  <div class="call">
                   <img src="images/email.png" style="margin-left:70px;">
                     <h4 align=center>Email</h4>
                     <p align=center>Email:bsnlservice1971.com </p>
               </div>
                 
                  <div class="call">
                   <img src="images/home.png" style="margin-left:70px;">
                     <h4 align=center>Office Location</h4>
                     <p align=center>harish chandra mathur lane janpath new Delhi <br>india 110001.tollfree-1800313882</p>
               </div>
                

             </div>
             
          <?php include("footer.php"); ?>

               </div>
       
        
         
    </section>
    
    <section class="d-block d-lg-none">
    
    
     <style>
       
        .mobilee .imagee{
    background-image:linear-gradient( rgba(1,1,1,.8), rgba(1,1,1 , .8)),url("images/offc.jpg");
                      background-size: cover;
                background-repeat: no-repeat;
                height: 200px;
                background-position: center;
            position: relative;
       }
       .imagee a{
         color:white;

       }
       .imagee a:hover{
          text-decoration: none;
           color: green;
       }
       
    body{
    font-family: 'Noto Sans HK', sans-serif;

    }
       
       .midd{
           margin: 12% 0;
       }
       
       .midd input {
           margin-bottom: 25px;
           
       }
         body{
             background-color:  #f8f8f8;
         }
         
         .em img{
             padding-left:35%;
         }
         
         .em{
             margin-bottom: 15%;
         }
         
         h4{
             margin-top:5%;
         }
         
         p{
             margin-top:3%;
         }
   </style>
    
    <div class="container-fluid">
     
    <?php include("headermobview.php"); ?> 
     
     <div class="row mobilee">
          
          
           <div class="col-12 p-0">
              <div class="imagee">
                 <h1 style="font-size:25px;color:white;position:absolute;top:20%;left:5%;">Contact Us</h1>
                <hr style="border-bottom:3px solid green; width:20%;position:absolute;top:32%;left:6%;">
                  
                  <a href="index.php" style="position:absolute;left:5%;top:57%;font-size:15px;font-weight:bold;">Home</a>
                  
                  <i class="fa fa-angle-double-right" aria-hidden="true" style="color:white;position:absolute;left:20%;top:59%;font-size:12px;font-weight:bold;"></i>
                  
                   <a href="contactus.php" style="color:green;position:absolute;left:26%;top:57%;font-size:15px;font-weight:bold;">Contact Us</a>
              </div>
               
           </div>
            
        </div>
        
        <div class="midd">
            <div class="col-12 p-0">
                <form action="getintouch.php" method="post" style="padding:10% 0;" >
                   
                  <input type="text" class="form-control form-control-lg"  placeholder="full name *" name="fullname">
                  
             
                  <input type="email" class="form-control form-control-lg"  placeholder="email *" name="email">
                  
             
                 <input type="text" class="form-control form-control-lg"  placeholder="contact number *" name="contact">
           
                   <select name="job" class="form-control form-control-lg">
                         <option value="" selected disabled>Select Job</option>
                        <option value="data">Data Entry Job</option>
                         <option value="sms">SMS Sending Job</option>
                        <option value="email">Email Sending Job</option>
                         <option value="Capatcha">Capatcha Entry Job</option>
                         <option value="form">Form Filling Job</option>
                         </select>
                         
                          
            <textarea name="textarea" class="form-control form-control-lg" rows="6" placeholder="your message" style="margin-top:20px;"></textarea>

                  <input type="submit" name="register" value="Submit" class="btn btn-success" style="width-350px;height:40px;margin-top:40px;">

               </form>
            </div>
           
               <div class="col-12 p-0 em">
                  <img src="images/call_us.png"  >
                     <h4 align=center >Call Us</h4>
                     <p align=center>Contact on company mail. </p>
               </div>
                     
                
                 
                  <div class="col-12 p-0 em">
                   <img src="images/email.png" >
                     <h4 align=center>Email</h4>
                     <p align=center>Email:bsnlservice1971.com </p>
               </div>
                 
                  <div class="col-12 p-0 em">
                    <img src="images/home.png">
                     <h4 align=center>Office Location</h4>
                     <p align=center>harish chandra mathur lane janpath <br>new Delhi india 110001.tollfree-1800313882</p>
               </div>
           
        </div>
        

        <?php include("mobviewfooter.php"); ?>
        
        </div>
    
    </section>
</body>
</html>