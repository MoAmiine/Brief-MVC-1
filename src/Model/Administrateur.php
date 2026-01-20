<?php 

use App\Model\User;

class Administrateur extends User
{
    public function __construct()
    {
        $this->role = role::admin;
    }
}