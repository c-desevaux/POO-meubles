<?php

    require_once('classes/Batiment.class.php');
    require_once('classes/Contenant.class.php');
    require_once('classes/Meuble.class.php');
    require_once('classes/Piece.class.php');


    class Meuble {

        private $largeur;
        private $hauteur;
        private $profondeur;
        private $nom;

        public function __constructor(int $largeur, int $hauteur, int $profondeur, string $nom){

            $this->setLargeur($largeur);
            $this->setHauteur($hauteur);
            $this->setHauteur($profondeur);
            $this->nom = $nom;

        }


//GETTERS

        public function getNom(): string{
            return $this->$nom;
        }


        public function getLargeur(): int{
            return $this->largeur;
        }

        public function getHauteur(): int{
            return $this->hauteur;
        }

        public function getProfondeur(): int{
            return $this->profondeur;
        }

        public function getVolume(){
            $volume = ($this->largeur*$this->hauteur*$this->profondeur);
            return $volume;
        }

        public function getSurface(){
            $surface = ($this->largeur*$this->profondeur);
            return $volume;
        }





//SETTERS


        public function setLargeur($largeur): void{

            if($largeur>0){
                $this->largeur = $largeur;
            }
        }

        public function setHauteur($hauteur): void{
            
            if($hauteur>0){
                $this->hauteur = $hauteur;
            }
        }

        public function setProfondeur($profondeur): void{

            if($profondeur>0){
                $this->profondeur = $profondeur;
            }
        }


//FUNCTIONS

        public function affiche(): string{

            $infos = "Meuble ".$this->name." de dimenssions (L/H/P): ".$this->largeur."/".$this->hauteur."/".$this->profondeur;
            return
        }

    }

?>