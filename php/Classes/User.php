<?php
namespace Classes;

use PDO;

require_once 'DB_Conector.php';

class User{
    protected $userID;
    protected $firstName;
    protected $lastName;
    protected $userName;
    protected $profilePhoto;
    protected $password;
    protected $email;
    protected $rpassword;
    protected $position;
    protected $unregUserID;

    // public function __construct($userID, $firstName, $lastName, $userName, $profilePhoto, $password) {
    //     $this->userID = $userID;
    //     $this->firstName = $firstName;
    //     $this->lastName = $lastName;
    //     $this->userName = $userName;
    //     $this->profilePhoto = $profilePhoto;
    //     $this->password = $password;
    // }

    public function __construct($firstName, $lastName, $userName, $email, $password, $rpassword, $position) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
        $this->rpassword = $rpassword;
        $this->position = $position;
    }

    public function getUserID() {
        return $this->userID;
    }

    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function getunregUserID() {
        return $this->unregUserID;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    public function getProfilePhoto()
    {
        return $this->profilePhoto;
    }

    public function setProfilePhoto($profilePhoto)
    {
        $this->profilePhoto = $profilePhoto;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function createUserID()
    {
        $dbcon = DB_Conector::get_connection();
        $query = "SELECT user_id FROM user";
        $pstmt = $dbcon->prepare($query);
        $pstmt->execute();
        $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);

        $min = 1;
        $max = 100000;
        $randomNumberInRange = rand($min, $max);

        foreach ($rs as $user) {
            if ($user->user_id == $this->userID) {
                $this->createUserID();
            } else {
                if ($this->position == "patient") {
                    $this->userID = "PAT" . $randomNumberInRange;
                } elseif ($this->position == "doctor") {
                    $this->userID = "DOC" . $randomNumberInRange;
                } elseif ($this->position == "counselor") {
                    $this->userID = "COU" . $randomNumberInRange;
                }
                return $this->userID;
            }
        }
    }
    public function createUnregUserID()
    {
        $dbcon = DB_Conector::get_connection();
        $query = "SELECT user_id FROM user";
        $pstmt = $dbcon->prepare($query);
        $pstmt->execute();
        $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);

        $min = 1;
        $max = 100000;
        $randomNumberInRange = rand($min, $max);

        foreach ($rs as $user) {
            if ($user->user_id == $this->unregUserID) {
                $this->createUnregUserID();
            } else {
                $this->unregUserID = "URU" . $randomNumberInRange;
                return $this->unregUserID;
            }
        }
    }
    public function updateUnregUserIDtoRegUID($unregID, $regID){
        $dbcon = DB_Conector::get_connection();

        $query1 = "UPDATE `user` SET user_id = ?, firstname = ?, lastname = ?, username = ?, profile_photo = ?, password = ?, email = ? WHERE user_id = ?";
        $query2 = "UPDATE patient SET user_id = ? WHERE user_id = ?";

        $pstmt = $dbcon->prepare($query1);
        $pstmt->bindValue(1,$regID);
        $pstmt->bindValue(2, $this->firstName);
        $pstmt->bindValue(3, $this->lastName);
        $pstmt->bindValue(4, $this->userName);
        $pstmt->bindValue(5, "defaultImage.png");
        $pstmt->bindValue(6, $this->password);
        $pstmt->bindValue(7, $this->email);
        $pstmt->bindValue(8, $unregID);
        $pstmt->execute();

        $pstmt2 = $dbcon->prepare($query2);
        $pstmt2->bindValue(1,$regID);
        $pstmt2->bindValue(2,$unregID);
        $pstmt2->execute();

        if ($pstmt->rowCount() > 0) {
            //echo 'Data entered successfully';
            header("Location: ../../pages/signin.php");
        } else {
            echo 'Please check again';
        }
    }


}