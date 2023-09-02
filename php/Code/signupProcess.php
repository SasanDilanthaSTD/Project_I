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
        //$this->__construct($this->fname, $this->lname, $this->uname, $this->email, $this->pw, $this->position, $this->rpw);

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
    //     $result;
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

    public function insertUser()
    {
        $dbcon = DB_Conector::get_connection();

        $query = "INSERT INTO user(user_id,firstname, lastname, username, profile_photo, password, email) VALUES (?,?,?,?,?,?,?)";

        $this->createUserID();

        $pstmt = $dbcon->prepare($query);
        $pstmt->bindValue(1, $this->userID);
        $pstmt->bindValue(2, $this->fname);
        $pstmt->bindValue(3, $this->lname);
        $pstmt->bindValue(4, $this->uname);
        $pstmt->bindValue(5, "sdfds");
        $pstmt->bindValue(6, $this->pw);
        $pstmt->bindValue(7, $this->email);



        if ($pstmt->execute()) {

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
        $max = 1000;
        $randomNumberInRange = rand($min, $max);


        if($rs = $this->userID){
            $this->createUserID();
        }else{
            if ($this->position = "patient") {
                $this->userID = "PAT".$randomNumberInRange;
            }elseif($this->position = "doctor"){
                $this->userID = "DOC".$randomNumberInRange;
            }elseif($this->position = "counselor"){
                $this->userID = "COU".$randomNumberInRange;
            }
        }

    }
}
