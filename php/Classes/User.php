<?php

class User{
    private $userID;
    private $firstName;
    private $lastName;
    private $userName;
    private $profilePhoto;
    private $password;

    public function __construct($userID, $firstName, $lastName, $userName, $profilePhoto, $password) {
        $this->userID = $userID;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userName = $userName;
        $this->profilePhoto = $profilePhoto;
        $this->password = $password;
    }
    public function getUserID() {
        return $this->userID;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getProfilePhoto() {
        return $this->profilePhoto;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setUserID($userID) {
        $this->userID = $userID;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function setProfilePhoto($profilePhoto) {
        $this->profilePhoto = $profilePhoto;
    }

    public function setPassword($password) {
        $this->password = $password;
    }


}