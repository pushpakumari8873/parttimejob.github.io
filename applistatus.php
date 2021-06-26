<?php

if(isset($_POST['submit']))
{
  $phonenum = $_POST['pnum'];
    
    $con=mysqli_connect("localhost","root","","bsnl");
    $qry = "SELECT * FROM `applynow` WHERE `contactnum`='$phonenum' ";
    $run = mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);
    $data = mysqli_fetch_assoc($run);
    if($data["contactnum"] == $phonenum)
{
    ?>
<script>
    alert('login successfull');
    <?php header('location:index.php');  ?>
</script>

<?php
    }
    
    else
    {
         ?>
<script>
    alert('invalid phonenum');
</script>

<?php
    }
}
    

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>check application status</title>
    <?php include("link.php");?>

</head>

<body>

    <section class="d-lg-block d-none">

        <style>
            .mobile .image {
                background-image: linear-gradient(rgba(1, 1, 1, .8), rgba(1, 1, 1, .8)), url("images/offc.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                height: 250px;
                background-position: center;
                position: relative;
            }

            .image a {
                color: white;

            }

            .image a:hover {
                text-decoration: none;
                color: green;
            }

            body {
                font-family: 'Noto Sans HK', sans-serif;

            }

            .midle {
                background-color: #f8f8f8;
            }
        </style>


        <div class="container-fluid">

            <?php include("header.php"); ?>

            <div class="row mobile">


                <div class="col-12 p-0">
                    <div class="image">
                        <h1 style="padding:7% 10%;font-size:2rem;color:white;font-weight:bold;">Login</h1>
                        <hr style="border-bottom:3px solid green; width:5%;position:absolute;top:47%;left:10%;">

                        <a href="index.php" style="position:absolute;left:75%;top:37%;font-size:20px;font-weight:bold;">Home</a>

                        <i class="fa fa-angle-double-right" aria-hidden="true" style="color:white;position:absolute;left:80%;top:39%;font-size:1rem;font-weight:bold;"></i>

                        <a href="applistatus.php" style="color:green;position:absolute;left:82%;top:37%;font-size:20px;font-weight:bold;">Login & View Profile</a>
                    </div>

                </div>

            </div>
            <form action="<?php $_PHP_SELF ?>" method="post">

                <div class=" row midle">
                    <div class="col-12">
                        <h3 align="center" style="margin:3% 0 2% 0;font-weight:bold;">Login & View Profile</h3>
                    </div>
                    <div class="col-6 text-center offset-3">
                        <input type="text" placeholder="Phone Number*" name="pnum" class="form-control" style="border:none; height:50px;">

                    </div>
                    <div class="col-12 text-center mb-5 mt-3">
                        <input type="submit" value="submit" name="submit" class="btn btn-success mt-3" style=" width:150px;height:50px;">

                    </div>


                </div>
            </form>

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
       
                   .midlee {
                background-color: #f8f8f8;
            }
   </style>
    
    <div class="container-fluid">
     
    <?php include("headermobview.php"); ?> 
     
     <div class="row mobilee">
          
          
           <div class="col-12 p-0">
              <div class="imagee">
                 <h1 style="font-size:25px;color:white;position:absolute;top:20%;left:5%;">Login</h1>
                <hr style="border-bottom:3px solid green; width:20%;position:absolute;top:32%;left:6%;">
                  
                  <a href="index.php" style="position:absolute;left:5%;top:57%;font-size:15px;font-weight:bold;">Home</a>
                  
                  <i class="fa fa-angle-double-right" aria-hidden="true" style="color:white;position:absolute;left:20%;top:59%;font-size:12px;font-weight:bold;"></i>
                  
                   <a href="applistatus.php" style="color:green;position:absolute;left:26%;top:57%;font-size:15px;font-weight:bold;">Login & View Profile</a>
              </div>
               
           </div>
            
        </div>
        
 <form action="<?php $_PHP_SELF ?>" method="post">

                <div class=" row midlee">
                    <div class="col-12 mt-5 mb-4">
                        <h3 align="center" style="margin:3% 0 2% 0;font-weight:bold;">Login & View Profile</h3>
                    </div>
                    <div class="col-12 text-center">
                        <input type="text" placeholder="Phone Number*" name="pnum" class="form-control" style="border:none; height:50px;">

                    </div>
                    <div class="col-12 text-center mb-5 mt-2">
                        <input type="submit" value="submit" name="submit" class="btn btn-success mt-3" style=" width:150px;height:50px;">

                    </div>


                </div>
            </form>
        

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