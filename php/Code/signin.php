<?php
session_start();
require_once '../Classes/DB_Conector.php';
use Classes\DB_Conector;
use Classes\RegisteredUser;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $hashedpw = md5($password);

        $dbcon = DB_Conector::get_connection();
        $query = "SELECT * FROM user WHERE email = ?";
        $pstmt = $dbcon->prepare($query);
        $pstmt->bindValue(1, $email);
        $pstmt->execute();
        $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($rs as $user) {
            if ($hashedpw == $user->password) {
                $position = substr($user->user_id, 0, 3);
                $_SESSION['position'] = $position;
                if ($position == "COU") {
                    header("Location:../../pages/counseler.php");
                }elseif ($position == "DOC") {
                    header("Location:../../pages/doctor.php");
                }elseif ($position == "PAT") {
                    header("Location:../../pages/home.php");
                }
                //echo "success";
            }else{
                //echo "fail";
                header("Location:../../pages/login.php?error=1&$email&$user->password");
            }
        }

    }
}
?>
