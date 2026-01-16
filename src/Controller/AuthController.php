<?php 

namespace App\Controller;

use App\Model\User;

class AuthController{
    public function SignUp(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $user = new User();
            $user->setEmail($_POST['email']);
            $user->setNom($_POST['Lastname']);
            $user->setPrenom($_POST['Firstname']);
            $user->setPassword($_POST['password']);
            $user->save();    
        }

        }
}