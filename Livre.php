<?php

class Livre {
    private string $titre;
    private int $pages;
    private int $annee;
    private float $prix;
    private Auteur $auteur;


    // constructeur
    public function __construct(string $titre, int $pages, int $annee, float $prix, Auteur $auteur)
    {
        $this->titre = $titre;
        $this->pages = $pages;
        $this->annee = $annee;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->ajouterLivre($this);
    }


    //titre
    public function getTitre():string
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }


    //nbr de pages
    public function getpages():int
    {
        return $this->pages;
    }
 
    public function setpages($pages)
    {
        $this->pages = $pages;
        return $this;
    }


    //annee de sortie
    public function getAnnee():int
    {
        return $this->annee;
    }

    public function setAnnee($annee)
    {
        $this->annee = $annee;
        return $this;
    }


    //prix
    public function getPrix():float
    {
        return $this->prix;
    }
 
    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }


    //auteur
    public function getAuteur():Auteur
    {
        return $this->auteur;
    }
 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }


    
    public function __toString() {
        return "$this->titre ($this->annee) / $this->pages pages - $this->prix €";
    }
}

?>