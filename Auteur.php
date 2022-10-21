<?php

class Auteur {
    private string $nom;
    private string $prenom;
    private string $sexe;
    private DateTime $dateNaissance;
    private array $livres;


    // constructeur
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->livres = [];
    }


    //nom de l'auteur 
    public function getNom():string
    {
        return $this->nom;
    }
     
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
    

    //prenom
    public function getPrenom():string
    {
        return $this->prenom;
    }
     
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }
    

    //sexe
    public function getSexe():string
    {
        return $this->sexe;
    }
    
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
        return $this;
    }
    

    //date de naissance
    public function getDateNaissance():DateTime
    {
        return $this->dateNaissance;
    }
    

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }


    //calcul de l age
    public function getAge():int
    {
        return date_diff(new DateTime(), $this->dateNaissance)->format("%Y");
    }


    public function ajouterLivre(Livre $livre) {
        $this->livres[] = $livre;
    }


    //affichage
    public function afficherBibliographie() {
        $result = "Livres de $this<br><ul>";
        foreach ($this->livres as $livre) {
            $result .= "<li>$livre</li>";
        }
        $result .= "</ul>";
        $result .= $this->getTotalPriceBibliographie();
        $result .= "<br> Longueur totale de ces livres : ";
        $result .= $this->getTotalLength();
        $result .= " pages.<br><br>";
        return $result;
    }


    //prix total
    public function getTotalPriceBibliographie() {
        $result = 0;
        foreach ($this->livres as $livre) {
            $result += $livre->getPrix();
        }
        return "Total de la bibliographie de ".$this->prenom." ".$this->nom." : $result €";
    }


    //longueur totale
    public function getTotalLength() {
        $result = 0;
        foreach ($this->livres as $livre) {
            $result += $livre->getpages();
        }
        return $result;
    }


    
    public function __toString() {
        return "<strong>$this->prenom $this->nom</strong>"." (".$this->getAge()." ans)";
    }
}

?>