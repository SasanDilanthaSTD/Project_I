<?PHP

require_once 'loginProcess.php';

if ($_SERVER['REQUEST_METHOD'] ==='POST') {
if (isset('submit') ) {

    $email = $_POST['email'];
    $passwor = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = $email AND password = $passwor";
    $query = $this->connection->query($sql);

    if ($query->num_rows > 0) {
        
       
    }
       


}else{
    header("location: ../../pages/login.pgp?error=entersubmit"); 

} 
    
}else{
    header("location: ../../pages/login.pgp?error=submitpostmethod");
}
