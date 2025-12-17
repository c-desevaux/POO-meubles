<?php

    require_once('Piece.class.php');

    class Batiment {


        private string $adresse;
        private int $nbPieceMax;
        private int $nbPiece = 0;
        private array $tabPiece = [];


        public function __construct(string $adresse, int $nbPieceMax){

            $this->adresse = $adresse;
            
            $this->setNbPieceMax($nbPieceMax);
           


        }

//GETTERS

        public function getAdresse(): string{
            return $this->adresse;
        }

        public function getNbPiece(): int{
            return $this->nbPiece;
        }

        public function getNbPieceMax(): int{
            return $this->nbPieceMax;
        }


        public function getNbPiecesLibres(): int{

            $pLibre = $this->nbPieceMax - $this->nbPiece;
            return $pLibre;

        }



//SETTERS

        private function setNbPieceMax($nbPieceMax): void{

            if($nbPieceMax>0){
                $this->nbPieceMax = $nbPieceMax;
            }else{
                echo "Le nombre de Piece du Bâtiment doit être strictement positif.<br>";
            }
        }

        private function setNbPiece($nbPiece): void{

            $this->nbPiece = $nbPiece;

        }




//FUNCTIONS


        public function ajouterPiece(Piece $piece): void{


            if((($this->nbPiece+1)<=$this->nbPieceMax)){
                array_push($this->tabPiece, $piece);
                $this->setNbPiece(count($this->tabPiece));
                echo "Le Piece ".$piece->getNom()." a bien été ajouté à le Batiment situé ".$this->getAdresse().".<br>";

            }else{
                echo "Le nombre de piece dans le bâtiment doit être inférieur ou égale au nombre maximal de piece du bâtiment (".$this->getNbPieceMax().").<br>";
            }


        }

        public function affiche(): string{

            $str = "Le bâtiement situé au ".$this->getAdresse()." comporte ".$this->getNbPiece()." pièce(s) et on pourait y ajouter ".$this->getNbPiecesLibres()." autre(s) pièce(s). <br>";
            return $str;

        }


    }


?>