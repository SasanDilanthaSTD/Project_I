 <?php
 class DBConnector{
     
    protected function connect() {
        try {
            $uname = "root";
            $pw = "";
            $con= new PDO('mysql:localhost;dbname=mhs',$uname,$pw);
            return $con;
        } catch (PDOException $e) {
            print "Error!: ".$e->getMessage() . "<br>"
            die();
        }
    }
 }