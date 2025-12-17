<?php

    require_once('Meuble.class.php');
    require_once('Contenant.class.php');


    class Piece extends Contenant{

        private int $nbMeubleMax;
        private int $nbMeuble = 0;
        private array $tabMeuble = [];


        public function __construct(int $largeur, int $hauteur, int $profondeur, string $nom, int $nbMeubleMax){

            parent::__construct($largeur, $hauteur, $profondeur, $nom);

            $this->setNbMeubleMax($nbMeubleMax);
            
       }
        

    //GETTERS

       public function getNbMeubleMax(): int{
            return $this->nbMeubleMax;
       }

       public function getNbMeuble(): int{
            return $this->nbMeuble;
       }

       public function getSurfaceMeuble(): float{

            $sMeuble= 0;

            for($i=0 ; $i<count($this->tabMeuble) ; $i++){
                $j = ($this->tabMeuble[$i]);
                $sMeuble += $j->getSurface();
            }

            return $sMeuble;
       }

       public function getSurfaceLibre(): float{

            $sLibre = $this->getSurface()-$this->getSurfaceMeuble();
            return $sLibre;

       }


    //SETTERS

       private function setNbMeubleMax($nbMeubleMax): void{

            if($nbMeubleMax>=0){
                $this->nbMeubleMax=$nbMeubleMax;
            }else{
                echo "Le nombre de meuble maximum doit être positif ou nul. <br>";
            }
       }

       private function setNbMeuble($nbMeuble): void{
    
            $this->nbMeuble = $nbMeuble;
        
       }


    //FUNCTIONS

       public function ajouterMeuble(Meuble $meuble): void{

            if((($this->nbMeuble+1)<=$this->nbMeubleMax) && (($this->getSurfaceLibre()>$meuble->getSurface()) && ($this->getHauteur()>$meuble->getHauteur()))){
                array_push($this->tabMeuble, $meuble);
                $this->setNbMeuble(count($this->tabMeuble));
                echo "Le meuble ".$meuble->getNom()." a bien été ajouté à la pièce ".$this->getNom().".<br>";

            }else if(($this->getSurfaceLibre()<$meuble->getSurface()) || ($this->getHauteur()<$meuble->getHauteur())){
                echo "Les meubles doivent avoir des dimentions plus petites pour rentrer dans la pièce.<br>";
            }else{
                echo "Le nombre de meuble dans la piece doit être inférieur ou égale au nombre maximal de meuble de la pièce (".$this->getNbMeubleMax().").<br>";
            }
            
       }

        public function affiche(): string{

            $infos = "Piece ".$this->getNom()." de dimenssions (L/H/P): ".$this->getLargeur()."m/".$this->getHauteur()."m/".$this->getProfondeur()."m, comporte ".$this->nbMeuble." meuble(s).<br>";
            return $infos;


        }
    }


?>