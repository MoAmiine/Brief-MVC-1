<?php 
namespace App\Model;
use App\Core\Database;
use PDO;
use role;

class User {
    public string $id;
    public string $Lastname;
    public string $Firstname;
    public string $email;
    public string $password;
    public role $role;
    public $db;

    public function __construct()
    {
        $this->db = Database::dbConnect();
    }


    public function getLastname(): string
    {
        return $this->Lastname;
    }

    public function setLastname(string $Lastname): self
    {
        $this->Lastname = $Lastname;

        return $this;
    }

    public function getFirstname(): string
    {
        return $this->Firstname;
    }

    public function setFirstname(string $Firstname): self
    {
        $this->Firstname = $Firstname;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getRole(): role
    {
        return $this->role;
    }

    public function setRole(role $role): self
    {
        $this->role = $role;

        return $this;
    }
        public function save(){
        $query = 'INSERT INTO users(Firstname, Lastname, email, password) VALUES(:Firstname, :Lastname, :email, :password)';
        $stmt = $this->db->prepare($query);
        $stmt->execute([
            'Firstname' => $this->Firstname,
            'Lastname' => $this->Lastname,
            'email' => $this->email,
            'password' => password_hash($this->password, PASSWORD_DEFAULT)
        ]);
        echo 'data saved';
    }

    public function findUserByEmail(string $email){
        $query = 'SELECT * FROM users where email = ?';
        $stmt = $this->db->prepare($query);
        $stmt->execute([$email]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        return $stmt->fetch();
    }
}