<?php

class User{
    private $userId;
    private $firstName;
    private $lastName;
    private $email;
    private $password;
}

function getUserId() {
    return $this->userId;
}

 function getFirstName() {
    return $this->firstName;
}

 function getLastName() {
    return $this->lastName;
}

 function getEmail() {
    return $this->email;
}

 function getPassword() {
    return $this->password;
}

 function setUserId($userId) {
    $this->userId = $userId;
}

 function setFirstName($firstName) {
    $this->firstName = $firstName;
}

 function setLastName($lastName) {
    $this->lastName = $lastName;
}

 function setEmail($email) {
    $this->email = $email;
}

 function setPassword($password) {
    $this->password = $password;
}


