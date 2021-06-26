<?php

if (isset($_POST["register"]))
{
 $con = mysqli_connect("localhost","root","","bsnl");
    
 $fullname = $_POST["fullname"];
 $email = $_POST["email"];
 $contact = $_POST["contact"];
 $job = $_POST["job"];
 $textarea = $_POST["textarea"];

 $sql= "insert into contactus(fullname,email,contactnum,job,textarea)values('".$fullname."','".$email."','".$contact."','".$job."','".$textarea."')";

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

