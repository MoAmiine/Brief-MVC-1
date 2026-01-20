<?php 
namespace App\Model;
use App\Core\Database;
use App\Model\Categorie;
use PDO;

class Produit {
    private int $id;
    private string $nom;
    private int $stock;
    private Categorie $categorie;
    private float $prix;
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::dbConnect();
    }
    

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
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

    public function getStock(): int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getCategorie(): Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }
    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function showAllProduits(){
        $query  ='SELECT * FROM produits';
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Produit::class);
        return $stmt->fetch();
    }


}