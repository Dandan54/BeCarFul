<?php
    require_once ("modele/modele.class.php");

    class Controleur {

        private $unModele;
        public function __construct (){
            //instanciation de la classe Modele
            $this->unModele = new Modele ();
        }

        /********** Contact **********/

        public function envoiFormulaire (){
            //appel de la fonction du modele
            $lesClasses = $this->unModele->envoiFormulaire ();

            //on réalise des traitements

            //on retourne les classes
            return $lesClasses;
        }

    }//fin de la classe
?>