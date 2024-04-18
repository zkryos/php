<?php

// Définition de la classe Voiture
class Voiture {
    // Propriété publique
    public $couleur;

    // Propriétés privées
    private $marque;
    private $modele;
    private $km;

    // Setter pour la marque
    public function setMarque($marque) {
        $this->marque = $marque;
    }

    // Getter pour la marque
    public function getMarque() {
        return $this->marque;
    }

    // Setter pour le modèle
    public function setModele($modele) {
        $this->modele = $modele;
    }

    // Getter pour le modèle
    public function getModele() {
        return $this->modele;
    }

    // Setter pour les kilomètres
    public function setKm($km) {
        $this->km = $km;
    }

    // Getter pour les kilomètres
    public function getKm() {
        return $this->km;
    }
}

// Instanciation d'une voiture
$maVoiture = new Voiture();

// Renseigner les propriétés de la voiture
$maVoiture->couleur = "Rouge";
$maVoiture->setMarque("Peugeot");
$maVoiture->setModele("308");
$maVoiture->setKm(50000);

// Afficher les propriétés de la voiture
echo "Couleur : " . $maVoiture->couleur . "<br>";
echo "Marque : " . $maVoiture->getMarque() . "<br>";
echo "Modèle : " . $maVoiture->getModele() . "<br>";
echo "Kilométrage : " . $maVoiture->getKm() . " km<br>";

?>
