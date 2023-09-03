<?php
namespace Classes;
use Classes\DB_Conector;

class Admin extends User
{
    private $adminID;

    public function isLoggedIn(){
        return ((isset($_SESSION["position"])) ? true : false);
    }

}