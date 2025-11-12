<?php

class Signup extends Dbh{ 
    private $username;
    private $password; 


    public function __construct($username,$password){
        $this -> username = $username;
        $this -> password = password_hash($password,PASSWORD_DEFAULT);
    }


    private function insertUser(){
        $query = "INSERT into users (username,hash_password)
        VALUES (:username, :password);";
        $stmt = parent::connect() -> prepare($query);
        $stmt -> bindParam(":username",$this -> username);
        $stmt -> bindParam(":password",$this -> password);   
        $stmt->execute();
     }

     private function isInputEmpty(){
        if(empty($_POST["username"]) || empty($_POST["password"])){
            return true;
        }else{
            return false;
        }
     }
      public function signupUser(){
      if($this ->isInputEmpty()){

        die();
      }else{
        $this -> insertUser();

        header("Location:" . "/index.php");
        die();
      }
     }
}