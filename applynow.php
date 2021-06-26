

<?php

if (isset($_POST["register"]))
{
 $con = mysqli_connect("localhost","root","","bsnl");
    
 $fullname = $_POST["fullname"];
 $email = $_POST["email"];
 $contact = $_POST["contact"];
 $job = $_POST["job"];
 $state = $_POST["state"];
 $address = $_POST["address"];
 $district = $_POST["district"];
$pincode = $_POST["pincode"];

 $sql= "insert into applynow(fullname,email,contactnum,job,state,address,district,pincode)values('".$fullname."','".$email."','".$contact."','".$job."','".$state."','".$address."','".$district."','".$pincode."')";

  $row=mysqli_query($con,$sql);
    if($row >= 1){
        echo"data registered";
    header('location:thankyoupage.php');
    }
    else{
        echo "nhi hua";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Apply now</title>
    <?php include("link.php") ?>
</head>
<body>
   
   
    <section class="d-lg-block d-none">
          
          <style>
       
        .mobile .image{
    background-image:linear-gradient( rgba(1,1,1,.8), rgba(1,1,1 , .8)),url("images/offc.jpg");
                      background-size: cover;
                background-repeat: no-repeat;
                height: 340px;
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
       
       .mid{
           margin: 7% 0;
       }
       
       .mid input{
           margin-bottom: 25px;
           
       }
   </style>
    
   
           <div class="container-fluid">

      <?php include("header.php"); ?>

       <div class="row mobile">
          
          
           <div class="col-12 p-0">
              <div class="image">
                 <h1 style="padding:8% 10%;font-size:2rem;color:white;font-weight:bold;">Apply Now</h1>
                <hr style="border-bottom:3px solid green; width:5%;position:absolute;top:47%;left:10%;">
                <p style="color:white;font-size:40px;position:absolute;left:12%;top:40%;">.</p>
                  
                  <a href="#" style="position:absolute;left:75%;top:37%;font-size:20px;font-weight:bold;">Home</a>
                  
                  <i class="fa fa-angle-double-right" aria-hidden="true" style="color:white;position:absolute;left:80%;top:39%;font-size:1rem;font-weight:bold;"></i>
                  
                   <a href="contactus.php" style="color:green;position:absolute;left:82%;top:37%;font-size:20px;font-weight:bold;">Contact Us</a>
              </div>
               
           </div>
            
        </div>
        
        <div class="row mid">
            <div class="col-7 ml-5" >
                
                  <form action="<?php $_PHP_SELF ?>" method="post">
                   
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
                         
                         
                         <div class="col-6">
                   <select name="state" class="form-control form-control-lg">
                         <option value="" selected disabled>Please Select State</option>
                        <option value="data">Andaman and Nicobar islands</option>
                         <option value="sms">Andhra Pradesh</option>
                        <option value="email">Arunachal Pradesh</option>
                         <option value="Capatcha">Assam</option>
                         <option value="form">Bihar</option>
                         </select>
                         </div>
                         
                         <div class="col-6">
                 <input type="text" class="form-control form-control-lg"  placeholder="Address *" name="address">
                  
              </div>
                        
                        
                <div class="col-6">
                 <input type="text" class="form-control form-control-lg"  placeholder="District *" name="district">
                  
              </div>
                       
                         <div class="col-6">
                 <input type="text" class="form-control form-control-lg"  placeholder="Pincode *" name="pincode">
                  
              </div>  
              
              </div>
               <input type="submit" name="register" value="Submit" class="btn btn-success btn-lg" >
               
               </form>
                
            </div>
            <div class="col-4">
                <img src="images/jobseeke.jpg" style="width:450px;height:500px;">
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
           margin: 7% 0;
       }
       
       .midd input {
           margin-bottom: 25px;
           
       }
         
   </style>
    
   
     <div class="container-fluid">
     
    <?php include("headermobview.php"); ?> 
     
     <div class="row mobilee">
          
          
           <div class="col-12 p-0">
              <div class="imagee">
                 <h1 style="font-size:25px;color:white;position:absolute;top:20%;left:5%;">Apply Now</h1>
                <hr style="border-bottom:3px solid green; width:20%;position:absolute;top:32%;left:6%;">
                <p style="color:white;font-size:30px;position:absolute;left:14%;top:26%;">.</p>
                  
                  <a href="#" style="position:absolute;left:5%;top:57%;font-size:15px;font-weight:bold;">Home</a>
                  
                  <i class="fa fa-angle-double-right" aria-hidden="true" style="color:white;position:absolute;left:20%;top:59%;font-size:12px;font-weight:bold;"></i>
                  
                   <a href="contactus.php" style="color:green;position:absolute;left:26%;top:57%;font-size:15px;font-weight:bold;">Contact Us</a>
              </div>
               
           </div>
            
        </div>
        
       <div class="row midd">
           <div class="col-12 p-0">
                <form action="<?php $_PHP_SELF ?>" method="post">
                   
                  <input type="text" class="form-control form-control-lg"  placeholder="full name *" name="fullname">
           
                  <input type="email" class="form-control form-control-lg"  placeholder="email *" name="email">
                  
             
                 <input type="text" class="form-control form-control-lg"  placeholder="contact number *" name="contact">
                  
             
                   <select name="job" class="form-control form-control-lg" style="margin-bottom:25px;">
                         <option value="" selected disabled>Select Job</option>
                        <option value="data">Data Entry Job</option>
                         <option value="sms">SMS Sending Job</option>
                        <option value="email">Email Sending Job</option>
                         <option value="Capatcha">Capatcha Entry Job</option>
                         <option value="form">Form Filling Job</option>
                         </select>
                         
                   <select name="state" class="form-control form-control-lg" style="margin-bottom:25px;">
                         <option value="" selected disabled>Please Select State</option>
                        <option value="data">Andaman and Nicobar islands</option>
                         <option value="sms">Andhra Pradesh</option>
                        <option value="email">Arunachal Pradesh</option>
                         <option value="Capatcha">Assam</option>
                         <option value="form">Bihar</option>
                         </select>
                        
                 <input type="text" class="form-control form-control-lg"  placeholder="Address *" name="address">
                  
             
                 <input type="text" class="form-control form-control-lg"  placeholder="District *" name="district">
                  
             
                 <input type="text" class="form-control form-control-lg"  placeholder="Pincode *" name="pincode">
                  
               
              
              
               <input type="submit" name="register" value="Submit" class="btn btn-success btn-lg" >
               
               </form>
               
           </div>
           <div class="col-12">
                 <img src="images/jobseeke.jpg" style="width:250px;height:400px;">
           </div>
       </div> 
     
         <?php include("mobviewfooter.php");?>

     </div>
      
       </section>
    
</body>
</html>