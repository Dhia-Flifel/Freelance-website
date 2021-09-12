<?php
 session_start();
 $con = mysqli_connect('localhost','root','');
 mysqli_select_db($con, 'freelancers_db' );
 
 
 $email =$_POST["email"];
 $password =$_POST["password"];
 
 
 $reg = " SELECT FROM users (email,password ) VALUE ('$email','$password') ";
  $result = mysqli_query($con , $reg);
    $num = mysqli_num_rows($result);
 
 if( $num == 1 )
 {
   header("location:Home.php");
 }else{
 echo "errorr";
 }
 

?>