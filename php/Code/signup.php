<?php
require "signupProcess.php";

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST["submit"])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $pw = $_POST["pw"];
    $rpw = $_POST["rpw"];
    $position=$_POST["p"];
    $cv=$_POST["cv"];

    $sanitizeAndValidatefname = ucwords(trim(strip_tags($fname)));
    $sanitizeAndValidatelname = ucwords(trim(strip_tags($lname)));
    $sanitizeAndValidateuname = trim(strip_tags($uname));
    $sanitizeAndValidateemail = filter_var(trim(strip_tags($email)), FILTER_VALIDATE_EMAIL);
    $hashedpw = password_hash($pw, PASSWORD_BCRYPT);
    $hashedrpw = password_hash($rpw, PASSWORD_BCRYPT);


    $signup = new SignupProcess($sanitizeAndValidatefname,$sanitizeAndValidatelname,$sanitizeAndValidateuname,$sanitizeAndValidateemail,$hashedpw,$hashedrpw,$position);

    //$signup ->signupuser();
    $uid = $signup->createUserID();
    $tid = $signup->createTherapistID();

    $signup->insertUser($cv,$uid,$tid);

    }

}
