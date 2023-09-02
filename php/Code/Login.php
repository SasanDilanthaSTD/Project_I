<?php

if ( $_SERVER["REQUEST_METHOD"] == "POST" ){
        
    // database connnection 

    require_once '../Classes/DB_Conector.php';

    $emailErr = $passErr = $loginErr =  "";
    $email = $pw = "";


    

    if ( empty($_POST["email"] )) {
        $emailErr = " <p style='color:red'>* Email Is required </p>";
      }else{
          $email = trim($_POST["email"]);
      }
    
    if ( empty($_POST["password"] )) {
        $passErr = " <p style='color:red'>* Password Is required </p>";
     }else {
         $pass = trim($_POST["password"]); 
    }
   

if (!empty($email) && !empty($pass) ){

   
$sql_command = " SELECT * FROM user WHERE email='$email' AND password='$pass' ";
$result =mysqli_query($dbcon , $sql_command);

$row = mysqli_num_rows($result);

if($row > 0){
    while( $row = mysqli_fetch_assoc($result) ){
        session_start();
        $_SESSION["email"] = $row["email"];
        $_SESSION["user_id "] = $row["user_id "];
   
         header("Location: login.php?login-success");           
    }
}else {
  $loginErr = " <script> alert('Sorry! Invalid Email/Password!!') </script>";
}

}
    
   
}