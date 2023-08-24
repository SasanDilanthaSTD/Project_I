<?php 

if (isset($_POST["submit"])) {

    //grabbing the data
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $pw = $_POST["pw"];
    $rpw = $_POST["rpw"];
    $position=$_POST["p"];


    include "../classes/DBConnector.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr ($fname,$lname,$uname,$email,$pw,$rpw,$position); 

    
    header("location:../index.html");



    
    

    

    
}