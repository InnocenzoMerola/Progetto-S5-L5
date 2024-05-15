<?php

include_once __DIR__ . "/includes/db.php";
include_once __DIR__ . "/includes/init.php";

class User{
    public $name;
    public $id;

    public $username;
    public $password;
    public $email;
    private $pdo;
    public $errore;

    public function __construct($pdo = null)
    {
        $this->pdo = $pdo;
    }
    

    public function login($username, $password){
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->execute([
                'username' => $username
            ]);

            $user = $stmt->fetch();

        if($user){
            if(password_verify($password, $user['password'])){
                $_SESSION['username'] = $user['username'];
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['loggato'] = true;
                
                header('Location: /IFOA-BackEnd/Progetto%20S5-L5/index.php');
                exit();
            }else{
                $this->errore = "Password errata";
            }
        }else{
            $this->errore = "Username o password errati";
        }
        return $this->errore;
        }
    


    public function register(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
             $this->username = $_POST['username'];
             $this->email = $_POST['email'];
             $this->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
             
             $stmt = $this->pdo->prepare('INSERT INTO users (username, email, password) VALUE (:username, :email, :password)');
            $stmt->execute([
                'username' => $this->username,
                'email' => $this->email,
                'password' => $this->password,
            ]);
        
    }

}

    public function logout(){
        session_destroy();
        header("Location: /IFOA-BackEnd/Progetto%20S5-L5/index.php");
        exit();
    }

   
}