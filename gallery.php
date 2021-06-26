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
            
            .page-wrapper2 a:hover{
                color: blue;
                text-decoration: none;
            }
            .post-slider2{
                
                position:relative;
            }
            
            .post-slider2 .post-wrapper2{
                width:84%;
                height:300px;
                margin:0px auto;
                
                overflow: hidden;
                padding: 10px 0px 10px 0px;
            }
            
            .post-slider2 .post-wrapper2 .post2{
                background-color: aqua;
                display: inline-block;
                width: 500px;
                height: 150px;
                margin: 0px 10px;
                background-color: white;
                border-radius: 5px;
                margin-top: 25px;
            }
            
            
            .post-slider2 .next2{
                position: absolute;
                top:50%;
                right: 15px;
                font-size: 2rem;
                cursor: pointer;
                color: white;
                 width: 50px;
                height: 50px;
                padding: 10px;
            }
            
       
            .post-slider2 .prev2{
                position: absolute;
                top:50%;
                cursor: pointer;
                color: white;
                left: 15px;
                font-size: 2rem;
                width: 50px;
                height: 50px;
                padding: 10px;
            
            }
            
            .post-slider2 .post-wrapper2 .post2 .slider-image2{
                width:100%;
                height:150px;
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
                $('.post-wrapper2').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
    nextArrow: $('.next2'),
  prevArrow: $('.prev2'),
                    
      });
            });
            
         
        </script>
        
        
        <div class="page-wrapper2">
            <div class="post-slider2">
               <div class="col-12 p-0">
                <h2 style="text-align:center; margin-top:8%;font-weight:bold;">OUR PATNERS</h2>
                <hr style="border-bottom:3px solid black; width:4%;position:relative;">
            </div>

               
               <i class="fa fa-chevron-left prev2 btn-success" aria-hidden="true" ></i>
               
               <i class="fa fa-chevron-right next2 btn-success" aria-hidden="true" ></i>

               <div class="post-wrapper2" style="margin-top:7%">
                 
                   <div class="post2">
                      <img src="images/client-7.jpg" alt="" class="slider-image2">
                                           
                   </div>
                   
                   <div class="post2">
                      <img src="images/client-1.jpg" alt="" class="slider-image2">
                                            
                   </div>
                   
                   <div class="post2">
                      <img src="images/client-2.jpg" alt="" class="slider-image2">
                                            
                   </div>
                   
                  <div class="post2">
                      <img src="images/client-3.jpg" alt="" class="slider-image2">
                                             
                   </div>
                   
                   <div class="post2">
                      <img src="images/client-4.jpg" alt="" class="slider-image2">
                                           
                   </div>
                   
                   <div class="post2">
                      <img src="images/client-5.jpg" alt="" class="slider-image2">
                                             
                   </div>
                   
                  
                   <div class="post2">
                      <img src="images/client-5.jpg" alt="" class="slider-image2">
                                             
                   </div>
                   
                   
                    <div class="post2">
                      <img src="images/client-7.jpg" alt="" class="slider-image2">
                                             
                   </div>
                   
                    <div class="post2">
                      <img src="images/client-2.jpg" alt="" class="slider-image2">
                                             
                   </div>
               </div>
                
            </div>
        </div>

      

          </div>
      
                      
</body>
</html>