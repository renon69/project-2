<!-- model class which connects to database -->

<?php 

class Signup extends Dbh {

    protected function checkUser($username, $email) {
        $stmt = $this->connect()->prepare('SELECT users_username FROM users WHERE users_username = ? OR users_email = ?;');

        
    }
}