<?php 

namespace App\Controller;

use App\Model\User;

class AuthController{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }
    public function SignUp(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->user = new User();
            $this->user->setEmail($_POST['email']);
            $this->user->setLastname($_POST['Lastname']);
            $this->user->setFirstname($_POST['Firstname']);
            $this->user->setPassword($_POST['password']);
            $this->user->save();    
        }

        }

public function Login() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = $this->user->findUserByEmail($email);

        if (!$user || !password_verify($password, $user->password)) {
            echo 'Email ou mot de passe incorrect';
        } else {
            $_SESSION['user'] = [
                'id' => $user->id,
                'Firstname' => $user->Firstname,
                'Lastname' => $user->Lastname,
                'email' => $user->email
            ];
            header('Location: ../../../../src/View/Home.php');
            exit();

        }
    } else {
        require_once './src/View/Login.html';
    }
}
public function Logout(){
    session_abort();
    header('Location: ../../../auth/Login');
}
}