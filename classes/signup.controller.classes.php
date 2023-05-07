<?php

class SignupController extends Signup {

    //These properties are used to store the values entered by users during the signup process.
    private $username;
    private $email;
    private $password;
    private $repeat_password;
    
    public function __construct($username,$email,$password,$repeat_password) {
        
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->repeat_password =  $repeat_password;
    }
    //checks if input fields are empty

    private function emptyInput() {
        $result;
        if(empty($this->username) || empty($this->email) || empty($this->password) || empty($this->repeat_password) ){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function invalidUsername() {
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function invalidPassword() {
        $result;
        if($this->password !== $this->repeat_password)
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