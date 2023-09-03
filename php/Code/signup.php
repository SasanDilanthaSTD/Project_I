<?php
session_start();
require_once '../Classes/RegisteredUser.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["submit"])) {

        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $uname = $_POST["uname"];
        $email = $_POST["email"];
        $pw = $_POST["pw"];
        $rpw = $_POST["rpw"];
        $position = $_POST["p"];
        $cv = $_POST["cv"];

        $sanitizeAndValidatefname = ucwords(trim(strip_tags($fname)));
        $sanitizeAndValidatelname = ucwords(trim(strip_tags($lname)));
        $sanitizeAndValidateuname = trim(strip_tags($uname));
        $sanitizeAndValidateemail = filter_var(trim(strip_tags($email)), FILTER_VALIDATE_EMAIL);
        //$hashedpw = password_hash($pw, PASSWORD_BCRYPT);
        $hashedpw = md5($pw);
        $hashedrpw =md5($rpw);

        $registereduser = new \Classes\RegisteredUser($sanitizeAndValidatefname, $sanitizeAndValidatelname, $sanitizeAndValidateuname, $sanitizeAndValidateemail, $hashedpw, $hashedrpw, $position);
//        $serializedregistereduser = serialize($registereduser);
        $_SESSION['registeredUser'] = serialize($registereduser);

 //       $_SESSION['registeredUser'] = $registereduser;

        $uid = $registereduser->createUserID();
        $tid = $registereduser->createTherapistID();

//        if (password_verify($pw, $hashedpw)) {
//            $registereduser->insertUser($cv, $uid, $tid);
//        } else {
//            header("Location:../../pages/register.php?error=1");
//        }


        if ($pw == $rpw) {
            if ($registereduser->getunregUserID() == "") {
                $registereduser->insertUser($cv, $uid, $tid);
            } else {
                $registereduser->updateUnregUserIDtoRegUID($registereduser->getunregUserID(), $uid);
            }
        } else {
            header("Location:../../pages/register.php?error=1");
        }





    }

}
