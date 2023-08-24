<?php

class SignupContr{

    private $fname;
    private $lname;
    private $uname;
    private $email;
    private $pw;
    private $rpw;
    private $position;
   

    public function _construct($fname,$lname,$uname,$email,$pw,$rpw,$position){
        $this->fname =$fname;
        $this->lname =$lname ;
        $this->uname =$uname;
        $this->email =$email;
        $this->pw =$pw;
        $this->rpw =$rpw;
        $this->position =$position;

    }
    public function signupuser() {
        if($this->emptyinput() == false){
            echo"empty input!";
            header("location: ../index.html?error=emptyinput");
            exit();
        }
        if($this->invaliduname() == FALSE){
            echo "Invalid username!";
           header("location: ../index.html?error=invaliduname");
            exit();
        }
         if($this->invalidemail() == FALSE){
            echo "Invalid email!";
           header("location: ../index.html?error=invalidemail");
            exit();
        }
         if($this->pwdmatch() == FALSE){
            echo "Password don't match!";
           header("location: ../index.html?error=emptyinput");
            exit();
        }
          if($this->uidtakecheck() == FALSE){
            echo "Username or email taken!";
           header("location: ../index.html?error=emptyinput");
            exit();
        }
        $this->setuser($this->uname, $this->pw, $this->email, $this->fname, $this->lname, $this->position);
        
    }
    
     private function emptyinput(){
        $result;
        if(empty($this->email)|| $this->fname|| empty($this->lname)|| empty($this->uname) || empty($this->position))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }
    
     private function invaliduname(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uname))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }
    
     private function invaliemail(){
        $result;
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function pwdmatch(){
        $result;
        if(!$this->pw !== $this->rpw)
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

   

    private function uidtakecheck(){
        $result;
        if(!$this->chechuser($this->uname ,$this->email))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }
}