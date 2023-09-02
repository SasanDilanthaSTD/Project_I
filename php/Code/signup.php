<?php
require "signupProcess.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST["submit"])) {

    //grabbing the data
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $pw = $_POST["pw"];
    $rpw = $_POST["rpw"];
    $position=$_POST["p"];


    


    

    $signup = new SignupProcess($fname,$lname,$uname,$email,$pw,$rpw,$position); 
   // echo "work";
    $signup ->signupuser();

    $signup ->insertUser();






   


    

   
    // if($position == "patient"){
    //     header("Location: ../pages/home.php");

    // } else if ($position == "doctor"|| $position == "councelor" ) {
    //     header("Location: ../pages/test.php");
       
    // }




    }

}
