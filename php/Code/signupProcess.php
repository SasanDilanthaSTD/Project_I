<?php

require_once '../Classes/DB_Conector.php';

class SignupProcess
{

    private $fname;
    private $lname;
    private $uname;
    private $email;
    private $pw;
    private $rpw;
    private $position;
    private $userID;
    private $therapistID;


    public function __construct($fname, $lname, $uname, $email, $pw, $rpw, $position)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->uname = $uname;
        $this->email = $email;
        $this->pw = $pw;
        $this->rpw = $rpw;
        $this->position = $position;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function signupuser()
    {
        if ($this->emptyinput() == false) {
            echo "empty input!";
            header("location: ../register.php?error=emptyinput");
            exit();
        }

        if ($this->invaliemail() == FALSE) {
            echo "Invalid email!";
            header("location: ../register.php?error=invalidemail");
            exit();
        }
        if ($this->pwdmatch() == FALSE) {
            echo "Password don't match!";
            header("location: ../../pages/register.php?error=em");
            exit();
        }
        //   if($this->uidtakecheck() == FALSE){
        //     echo "Username or email taken!";
        //    header("location: ../register.php?error=emptyinput");
        //     exit();
        // }
        // $this->__construct($this->fname, $this->lname, $this->uname, $this->email, $this->pw, $this->position, $this->rpw);

    }

    private function invaliemail()
    {

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function pwdmatch()
    {

        if ($this->pw !== $this->rpw) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // private function uidtakecheck(){
        
    //     if(!$this->chechuser($this->uname ,$this->email))
    //     {
    //         $result = false;
    //     }
    //     else
    //     {
    //         $result = true;
    //     }
    //     return $result;
    // }

    private function emptyinput()
    {

        if (empty($this->fname) || empty($this->lname) || empty($this->uname) || empty($this->email) || empty($this->pw) || empty($this->rpw) || empty($this->position)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    public function insertUser($cv, $uid, $tid)
    {
        $dbcon = DB_Conector::get_connection();

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
            $pstmt->bindValue(2, $this->fname);
            $pstmt->bindValue(3, $this->lname);
            $pstmt->bindValue(4, $this->uname);
            $pstmt->bindValue(5, "defaultImage.png");
            $pstmt->bindValue(6, $this->pw);
            $pstmt->bindValue(7, $this->email);
            $pstmt->execute();
        } elseif ($this->position == "doctor" || $this->position == "counselor") {
            $pstmt = $dbcon->prepare($query);
            $pstmt->bindValue(1, $uid);
            $pstmt->bindValue(2, $this->fname);
            $pstmt->bindValue(3, $this->lname);
            $pstmt->bindValue(4, $this->uname);
            $pstmt->bindValue(5, "defaultImage.png");
            $pstmt->bindValue(6, $this->pw);
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
            //echo 'Data enterd successfully';
            header("Location:../../pages/login.php");
        } else {
            echo 'Please check again';
        }
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
}
