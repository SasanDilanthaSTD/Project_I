<?php

class Admin extends User
{
    private $adminID;

    public function __construct()
    {
        $this->adminID = parent::getUserID();
    }

}