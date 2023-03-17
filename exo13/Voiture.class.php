<?php
    class Voiture{
        private string $_marque;
        private string $_modele;
        private int $_nbPortes;
        private int $_vitesseActuelle;
        private bool $_allume = false;

        public function __construct(string $marque, string $modele, int $nbPortes){
            $this->_marque = $marque;
            $this->_modele = $modele;
            $this->_nbPortes = $nbPortes;
            $this->_vitesseActuelle = 0;

        }

        public function getMarque() : string{
            return $this->_marque;
        }
        public function setMarque(string $marque){
            $this->_marque = $marque;
        }

        public function getModele() : string{
            return $this->_modele;
        }
        public function setModele(string $modele){
            $this->_modele = $modele;
        }

        public function getNbPortes() : int{
            return $this->_nbPortes;
        }
        public function setNbPortes(int $nbPortes){
            $this->_nbPortes = $nbPortes;
        }

        public function getVitesseActuelle() : int{
            return $this->_vitesseActuelle;
        }
        public function setVitesseActuelle(int $vitesseActuelle){
            $this->_vitesseActuelle = $vitesseActuelle;
        }

        public function getAllume() : bool{
            return $this->_allume;
        }
        public function demarrer(){
            $this->_allume = true;
            echo "Le véhicule ". $this . " démarre<br>";
        }
        public function stopper(){
            $this->_allume = false;
            $this->_vitesseActuelle = 0;
            echo "Le véhicule " . $this->getMarque() . " " . $this->getModele() . " est stoppé<br>";
        }

        public function accelerer(int $ajouterVitesse){
            if($this->getAllume()){
                $this->_vitesseActuelle += $ajouterVitesse;
                echo "Le véhicule ". $this . " accélère de " . $ajouterVitesse . "km / h<br>";
            }
            else{
                echo "Le véhicule ". $this . " veut accélèrer de " . $ajouterVitesse ."<br>
                Pour accélèrer, il faut démarrer le véhicule " . $this . " !<br>";
            }
        }

        public function ralentir(int $enleverVitesse){
            if($this->getAllume() && $enleverVitesse <= $this->getVitesseActuelle()){
                $this->_vitesseActuelle -= $enleverVitesse;
                echo "Le véhicule ". $this . " ralentit de " . $enleverVitesse . "km / h<br>";
            }
            elseif($this->getAllume() && $enleverVitesse > $this->getVitesseActuelle()){
                $this->setVitesseActuelle(0);
                echo "Le véhicule " . $this . " veut ralentir de $enleverVitesse km / h, ce qui est plus que sa vitesse actuelle, alors sa vitesse sera alors de 0<br>";
            }
            else{
                echo "Le véhicule ". $this . " veut ralentir de " . $enleverVitesse ."<br>
                Pour ralentir, il faut démarrer le véhicule " . $this . " et avoir une vitesse strictement positive !<br>";
            }
        }
        
        public function infoVehicule() : string{
            return "\"$this->_marque\", \"$this->_modele\", $this->_nbPortes <br>";
        }

        public function infoDetailVehicule() : string{
            $result = "Nom et modèle du véhicule : " . $this . "<br>
            Nombre de portes : " . $this->getNbPortes() ."<br>
            Le véhicule " . $this->getMarque() . " est ";
            
            if($this->getAllume()){
                $result .= "démarré<br>";
            }
            else
            {
                $result .= "à l'arrêt<br>";
            }

            $result .= "Sa vitesse actuelle est de : " . $this->getVitesseActuelle() . " km / h<br>";
            return $result;
        }

        public function __toString(){
            return $this->getMarque() . " " . $this->getModele();
        }
    }