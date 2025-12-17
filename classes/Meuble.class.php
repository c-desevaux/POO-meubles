<?php

    require_once('Batiment.class.php');
    require_once('Contenant.class.php');
    require_once('Meuble.class.php');
    require_once('Piece.class.php');


    class Meuble extends Contenant{

       public function __construct(int $largeur, int $hauteur, int $profondeur, string $nom){

            parent::__construct($largeur, $hauteur, $profondeur, $nom);
       }
       


//GETTERS

        




//SETTERS

     

        

//FUNCTIONS

        public function affiche(): string{

            if($this->getNom()){
                $nomMeuble=$this->getNom();
            }else{
                $nomMeuble="Meuble";
            }

            $infos = $nomMeuble ."  de dimenssions (L/H/P): ".$this->getLargeur()."m/".$this->getHauteur()."m/".$this->getProfondeur()."m. <br>";
            return $infos;


        }

    }

?>