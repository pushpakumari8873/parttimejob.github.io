<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">


</head>
<body>
      <div class="container-fluid">
                     
    <style>
            
            .page-wrapper1 a:hover{
                color: blue;
                text-decoration: none;
            }
            .post-slider1{
                
                position:relative;
            }
            
            .post-slider1 .post-wrapper1{
                width:100%;
                height:250px;
                margin:0px auto;
                
                overflow: hidden;
                padding: 10px 0px 10px 0px;
            }
            
            .post-slider1 .post-wrapper1 .post1{
                background-color: aqua;
                display: inline-block;
                width: 500px;
                height: 150px;
                margin: 0px 10px;
                background-color: white;
                border-radius: 5px;
                margin-top: 25px;
            }
            
        
            .post-slider1 .post-wrapper1 .post1 .slider-image1{
                width:100%;
                height:130px;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }
             
            a {
                text-decoration:none;
                    color:black;
            }
        
        
        </style>
        
        <script>
            $(document).ready(function(){
                $('.post-wrapper1').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
    nextArrow: $('.next1'),
  prevArrow: $('.prev1'),
                    
      });
            });
            
         
        </script>
        
        
        <div class="page-wrapper1">
            <div class="post-slider1">
               <div class="col-12 p-0">
                <h2 style="text-align:center; margin-top:15%;">OUR PATNERS</h2>
                <hr style="border-bottom:2px solid black; width:8%;position:relative;">
                <p style="color:green;font-size:40px;position:absolute;left:48%;top:22%;">.</p>
            </div>

               

               <div class="post-wrapper1" style="margin-top:7%">
                 
                   <div class="post1">
                      <img src="images/client-7.jpg" alt="" class="slider-image1">
                                           
                   </div>
                   
                   <div class="post1">
                      <img src="images/client-1.jpg" alt="" class="slider-image1">
                                            
                   </div>
                   
                   <div class="post1">
                      <img src="images/client-2.jpg" alt="" class="slider-image1">
                                            
                   </div>
                   
                  <div class="post1">
                      <img src="images/client-3.jpg" alt="" class="slider-image1">
                                             
                   </div>
                   
                   <div class="post1">
                      <img src="images/client-4.jpg" alt="" class="slider-image1">
                                           
                   </div>
                   
                   <div class="post1">
                      <img src="images/client-5.jpg" alt="" class="slider-image1">
                                             
                   </div>
                   
                  
                   <div class="post1">
                      <img src="images/client-5.jpg" alt="" class="slider-image1">
                                             
                   </div>
                   
                   
                    <div class="post1">
                      <img src="images/client-7.jpg" alt="" class="slider-image1">
                                             
                   </div>
                   
                    <div class="post1">
                      <img src="images/client-2.jpg" alt="" class="slider-image1">
                                             
                   </div>
               </div>
                
            </div>
        </div>

      

          </div>
      
                      
</body>
</html>