<?php

class Signup extends DBConnector{

 protected function setuser( $uname,$email,$fname,$lname,$pw)   {
    $stmt =$this->connect()->prepare('INSERT INTO user(firstname,lastname,username,password) VALUES (?,?,?,?)');

    $hashedpwd = password_hash($pw, PASSWORD_DEFAULT);

    if (!$stmt->execute(array($uname,$email,$fname,$lname,$hashedpwd))) {
        $stmt = null;
        header("location: ../index.html?error=stmtfailed");
        exit();
    }
    $stmt=null;

     } 


//for login
 protected function checkuser( $uname,$email)   {
    $stmt =$this->connect()->prepare('SELECT username FROM user WHERE username=? or email =?;');

    if (!$stmt->execute(array($uname,$email))) {
        $stmt = null;
        header("location: ../index.html?error=stmtfailed");
        exit();
    }

    $resultCheck;
    if ($stmt-> rowCount() 0) {
        $resultCheck= false;
        # code...
    }
    else{
        $resultCheck = true;

    }

    return $resultCheck; 
 } 

}