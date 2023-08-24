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
        $this->$fname =$fname;
        $this->$lname =$lname ;
        $this->$uname =$uname;
        $this->$email =$email;
        $this->$pw =$pw;
        $this->$rpw =$rpw;
        $this->$position =$position;

    }

   

    private function pwdMatch(){
        $result;
        if(!$this->chechuser($this->$uname ,$this->$email))
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