<?php


    abstract class Contenant {

        private int $largeur;
        private int $hauteur;
        private int $profondeur;
        private string $nom;

        public function __construct(int $largeur, int $hauteur, int $profondeur, string $nom){

            $this->setLargeur($largeur);
            $this->setHauteur($hauteur);
            $this->setProfondeur($profondeur);
            $this->setNom($nom);

        }


//GETTERS

        public function getNom(): string{
            return $this->nom;
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

        public function getVolume(): float{
            $volume = ($this->largeur*$this->hauteur*$this->profondeur);
            return $volume;
        }

        public function getSurface(): float{
            $surface = ($this->largeur*$this->profondeur);
            return $surface;
        }





//SETTERS

        public function setNom(string $nom): void{
           
                $this->nom=$nom;
           
            
        }

        public function setLargeur(int $largeur): void{

            if($largeur>0){
                $this->largeur = $largeur;
            }else{
                echo "La largeur de l'element créer doit être positive. <br>";
            }
        }

        public function setHauteur(int $hauteur): void{
            
            if($hauteur>0){
                $this->hauteur = $hauteur;
            }else{
                echo "La hauteur de l'element créer doit être positive. <br>";
            }
        }

        public function setProfondeur(int $profondeur): void{

            if($profondeur>0){
                $this->profondeur = $profondeur;
            }else{
                echo "La profondeur de l'element créer doit être positive. <br>";
            }
        }


//FUNCTIONS

       public abstract function affiche();

    }

?>