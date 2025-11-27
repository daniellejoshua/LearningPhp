<?php

class Signup extends Dbh{ 
    private $username;
    private $password; 
    private $email;
    private $age;

    public function __construct($username, $password, $email, $age){
        $this -> username = $username;
        $this -> password = password_hash($password,PASSWORD_BCRYPT);
        $this -> email = $email;
        $this -> age = $age;
    }
    public function getUsers(){
    $query = "SELECT * FROM users";
    $stmnt = parent::connect() -> prepare($query);
    $stmnt ->execute();
    return $stmnt ->fetchAll(PDO::FETCH_ASSOC);
    }
    
    private function insertUser(){
        $query = "INSERT into users (username,hash_password,email,age)
        VALUES (:username, :password, :email, :age);";
        $stmt = parent::connect() -> prepare($query);
        $stmt -> bindParam(":username",$this -> username);
        $stmt -> bindParam(":password",$this -> password);
        $stmt -> bindParam(":email", $this->email);
        $stmt -> bindParam(":age", $this -> age);   
        $stmt->execute();
     }

     private function isInputEmpty(){
        if(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["email"]) || empty($_POST["age"]) ){
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