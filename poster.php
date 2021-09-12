<?php
session_start();
$con = mysqli_connect('localhost','root','','freelace_db');
//check connection
if($con === false){
                   die("ERROR: Could not connect. " . mysqli_connect_error());
        }
   
if(isset($_POST["poster"]))
{   
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email =$_POST["email"];
    $company =$_POST["company"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $projectabout = $_POST["projectabout"];
    
  
 /* $fname = "fname";
  $lname = "lname";
  $email ="email";
  $company ="company";
  $state = "state";
  $city = "city";
  $projectabout = "projectabout"; */
       $sql = " INSERT INTO theposter (fname,lname,email,company,state,city,projectabout ) VALUE ('$fname','$lname','$email','$company','$state','$city','$projectabout') "; 
         if(mysqli_query($con, $sql)){
          echo "Records inserted successfully.";
         } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
          }
     
         
        header('location:Home.php');
    
   
  
}

?>