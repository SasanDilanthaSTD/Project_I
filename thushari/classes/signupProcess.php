<?php

class SignupProcess{

    private $fname;
    private $lname;
    private $uname;
    private $email;
    private $pw;
    private $rpw;
    private $position;
   

    public function __construct($fname,$lname,$uname,$email,$pw,$rpw,$position){
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
            header("location: ../register.php?error=emptyinput");
            exit();
        }
        // if($this->invaliduname() == FALSE){
        //     echo "Invalid username!";
        //    header("location: ../register.php?error=invaliduname");
        //     exit();
        // }
         if($this->invaliemail() == FALSE){
            echo "Invalid email!";
           header("location: ../register.php?error=invalidemail");
            exit();
        }
         if($this->pwdmatch() == FALSE){
            echo "Password don't match!";
           header("location: ../register.php?error=em");
            exit();
        }
        //   if($this->uidtakecheck() == FALSE){
        //     echo "Username or email taken!";
        //    header("location: ../register.php?error=emptyinput");
        //     exit();
        // }
        $this->__construct($this->uname, $this->pw, $this->email, $this->fname, $this->lname, $this->position, $this->rpw);
        
    }
    
     private function emptyinput(){
        
        if(empty($this->email)||empty($this->fname)|| empty($this->lname)|| empty($this->uname) || empty($this->position) || empty($this->pw) || empty($this->rpw))
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
        
        if($this->pw !== $this->rpw)
        {
            $result = false;
        }
        else
        {
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
}