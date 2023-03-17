<?php
    class VoitureElec extends Voiture{
        private int $_autonomie;

        public function __construct(string $data1, string $data2, int $autonomie){
            parent::__construct($data1, $data2);
            $this->_autonomie = $autonomie;
        }

        public function getAutonomie(): int{
            return $this->_autonomie;
        }
        public function setAutonomie(int $autonomie){
            $this->_autonomie = $_autonomie;
        }

        public function getInfos(){
            return "La voiture est une " . parent::__toString() . " et a une autonomie de " . $this->getAutonomie();
        }

        public function __toString(){
            return parent::__toString() . " " . $this->getAutonomie();
        }
    }
?>