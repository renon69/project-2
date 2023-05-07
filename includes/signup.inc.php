<?php
        if(isset($_POST['submit']))
        {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repeat_password = $_POST['repeat_password'];

            //intantiate SignupController class
            include "../classes/signup.classes.php";
            include "../classes/signup.controller.classes.php";

            $signup = new SignupController($username,$email,$password,$repeat_password);
        }
?>