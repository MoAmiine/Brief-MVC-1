<?php 

use App\Model\User;

class Client extends User
{
    public function __construct()
    {
        $this->role = role::client;
    }
}