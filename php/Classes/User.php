<?php
require 'DB_Conector.php';
class user
{
public function getuserByUserID($userID){
 $dbcon = DB_Conector::get_connection();
 $query = "SELECT * FROM user WHERE user_id=?";
 $pstmt = $dbcon->prepare($query);
 $pstmt->bindValue(1, $userID);
 $pstmt->execute();
 $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);

 return $rs;
}
}