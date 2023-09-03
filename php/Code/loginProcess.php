<?PHP

session_start();
require_once '../Classes/DB_Conector.php';

class loginProcess{

    private $email;
    private $password;
    private $userID;

    public function __construct($email,$userID, $password){

        $this->email = $email;
        $this->password = $password;
      


    }

    public function loguser(){

        if ($this->emptyinput() == false) {
           
            header("location: ../login.php?error=emptyinput");
            exit();
        }

           if($this->uidtakecheck() == FALSE){
           
           header("location: ../login.php?error=emailORpassworsIncorrect");
            exit();
        }
       


        

    }


     private function uidtakecheck(){
       
        if(!$this->chechuser($this->password ,$this->email))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }



    private function emptyinput()
    {

        if (empty($this->email) || empty($this->password) ) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    public function chechInputs(){

        $dbcon = DB_Conector::get_connection();

        $query = "SELECT * FROM user WHERE email=$email AND password=$password ";

        



        

        
    }
    



}