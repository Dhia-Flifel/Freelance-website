<?php
session_start();
$con = mysqli_connect('localhost','root','','freelace_db');
//check connection
if($con === false){
                   die("ERROR: Could not connect. " . mysqli_connect_error());
        }
if(isset($_POST["profile"]))
{   
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email =$_POST["email"];
    $password =$_POST["password"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $section = $_POST["section"];
    $skills = $_POST["skills"];
    $checkskills = implode("," , $skills );
  
       $sql = " INSERT INTO freelancer (fname,lname,email,password,state,city,section,skills ) VALUE ('$fname','$lname','$email','$password','$state','$city','$section','$checkskills') "; 
         if(mysqli_query($con, $sql)){
          echo "Records inserted successfully.";
         } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
          }
     
          $_SESSION["user"] = $fname;
        header('location:Home.php');
    // Close connection
    mysqli_close($link);
  
}

?>