<?php 
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


    

    include "../classes/DBConnector.php";
    include "../classes/signupProcess.php";
    include "../classes/SignupControler.php";

    $signup = new SignupProcess($fname,$lname,$uname,$email,$pw,$rpw,$position); 
   // echo "work";
    $signup ->signupuser();



    header("location: ../test.php?error=none");  
    }

}
