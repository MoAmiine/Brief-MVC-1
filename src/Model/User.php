<?php 
namespace App\Model;
use App\Core\Database;
class User {
    private string $nom;
    private string $prenom;
    private string $email;
    private string $password;
    private $db;

    public function __construct()
    {
        $this->db = Database::dbConnect();
    }


    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

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

    public function save(){
        $query = 'INSERT INTO users(Firstname, Lastname, email, password) VALUES(:Firstname, :Lastname, :email, :password)';
        $stmt = $this->db->prepare($query);
        $stmt->execute([
            'Firstname' => $this->prenom,
            'Lastname' => $this->nom,
            'email' => $this->email,
            'password' => password_hash($this->password, PASSWORD_DEFAULT)
        ]);
        echo 'data saved';
    }
}