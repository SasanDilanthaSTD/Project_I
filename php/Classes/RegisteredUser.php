<?php
namespace Classes;

require_once 'User.php';
use Classes\User;
use Classes\DB_Conector;
use PDO;

class RegisteredUser extends User{
    protected $status;
    protected $therapistID;

    public function __construct($firstName, $lastName, $userName, $email, $password, $rpassword, $position) {
        parent::__construct($firstName, $lastName, $userName, $email, $password, $rpassword, $position);

    }

    public function insertUser($cv, $uid, $tid) {
        $dbcon = DB_Conector::get_connection();

        // Use parent class property names here
        if ($this->position == "patient") {
            $query = "INSERT INTO user(user_id, firstname, lastname, username, profile_photo, password, email) VALUES (?,?,?,?,?,?,?)";
        } elseif ($this->position == "doctor") {
            $query = "INSERT INTO user(user_id, firstname, lastname, username, profile_photo, password, email) VALUES (?,?,?,?,?,?,?)";
            $query2 = "INSERT INTO therapist(therapist_id, description, cv) VALUES (?,?,?)";
            $query3 = "INSERT INTO doctor(user_id, therapist_id) VALUES (?,?)";
        } elseif ($this->position == "counselor") {
            $query = "INSERT INTO user(user_id,firstname, lastname, username, profile_photo, password, email) VALUES (?,?,?,?,?,?,?)";
            $query2 = "INSERT INTO therapist(therapist_id , description, cv) VALUES (?,?,?)";
            $query3 = "INSERT INTO counselor(user_id, therapist_id) VALUES (?,?)";
        }

        if ($this->position == "patient") {
            $pstmt = $dbcon->prepare($query);
            $pstmt->bindValue(1, $uid);
            $pstmt->bindValue(2, $this->firstName);
            $pstmt->bindValue(3, $this->lastName);
            $pstmt->bindValue(4, $this->userName);
            $pstmt->bindValue(5, "defaultImage.png");
            $pstmt->bindValue(6, $this->password);
            $pstmt->bindValue(7, $this->email);
            $pstmt->execute();
        } elseif ($this->position == "doctor" || $this->position == "counselor") {
            $pstmt = $dbcon->prepare($query);
            $pstmt->bindValue(1, $uid);
            $pstmt->bindValue(2, $this->firstName);
            $pstmt->bindValue(3, $this->lastName);
            $pstmt->bindValue(4, $this->userName);
            $pstmt->bindValue(5, "defaultImage.png");
            $pstmt->bindValue(6, $this->password);
            $pstmt->bindValue(7, $this->email);
            $pstmt->execute();

            $pstmt2 = $dbcon->prepare($query2);
            $pstmt2->bindValue(1, $tid);
            $pstmt2->bindValue(2, "Therapist Description");
            $pstmt2->bindValue(3, $cv);
            $pstmt2->execute();

            $pstmt3 = $dbcon->prepare($query3);
            $pstmt3->bindValue(1, $uid);
            $pstmt3->bindValue(2, $tid);
            $pstmt3->execute();
        }

        if ($pstmt->rowCount() > 0) {
            //echo 'Data entered successfully';
            header("Location:../../pages/login.php");
        } else {
            echo 'Please check again';
        }
    }
    public function createTherapistID()
    {
        $dbcon = DB_Conector::get_connection();
        $query = "SELECT therapist_id FROM therapist";
        $pstmt = $dbcon->prepare($query);
        $pstmt->execute();
        $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);

        $min = 1;
        $max = 100000;
        $randomNumberInRange = rand($min, $max);

        foreach ($rs as $user) {
            if ($user->therapist_id == $this->therapistID) {
                $this->createTherapistID();
            } else {
                $this->therapistID = "TRP" . $randomNumberInRange;
                return $this->therapistID;
            }
        }
    }

//    public function getUserPasswordByEmail($email){
//        $dbcon = DB_Conector::get_connection();
//        $query = "SELECT password FROM user WHERE email = ?";
//        $pstmt = $dbcon->prepare($query);
//        $pstmt->bindValue(1, $email);
//        $pstmt->execute();
//        $rs = $pstmt->fetch(PDO::FETCH_OBJ);
//        return $rs;
//    }
}