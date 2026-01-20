<?php 
namespace App\Controller;
use App\Model\Produit;


class HomeController{
    private Produit $produit;
    public function Catalogue(){
           $this->produit->showAllProduits();
}
}