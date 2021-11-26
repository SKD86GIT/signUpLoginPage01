<?php

class Signup extends Dbh{
    // To check whether user already exists in DB

    protected function setUsers($uid, $email, $pwd){

        // creating prepared statements to prevent SQL Injection

        $stmt = $this->connect()->prepare(
            'INSERT INTO users(users_uid, users_email, users_pwd) VALUES (?, ?, ?);'
        );

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($uid, $email, $hashedPwd))){
            $stmt = null;
            header("location: ../php/signup.php?error=stmtfailed");
            exit();
        }
        
        $stmt = null;
    }

    protected function checkUsers($email){

        // creating prepared statements to prevent SQL Injection

        $stmt = $this->connect()->prepare(
            'SELECT users_email FROM users WHERE users_email =?;'
        );

        if (!$stmt->execute($email)){
            $stmt = null;
            header("location: ../php/signup.php?error=stmtfailed");
            exit();
        }
        
        $resultCheck;
        if($stmt->rowCount()>0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }
}