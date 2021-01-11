<?php
    require_once ("modele/modele.class.php");

    class Controleur {

        private $unModele;
        public function __construct (){
            //instanciation de la classe Modele
            $this->unModele = new Modele ();
        }

        /********** Verif connexion **********/

        public function verifConnexion ($email,$mdp){
        return $this->unModele->verifConnexion($email,$mdp);
        }

        /********** Contact **********/

        public function envoiFormulaire (){
            //appel de la fonction du modele
            $lesClasses = $this->unModele->envoiFormulaire ();

            //on réalise des traitements

            //on retourne les classes
            return $lesClasses;
        }

        /********** Moniteur **********/

        public function selectAllMoniteur (){
            //appel de la fonction du modele
            $lesMoniteurs = $this->unModele->selectAllMoniteur ();

            //on réalise des traitements

            //on retourne les classes
            return $lesMoniteurs;
        }

        /********** Eleve **********/

        public function selectUnEleve (){
            //appel de la fonction du modele
            $leEleve = $this->unModele->selectUnEleve ();

            //on réalise des traitements

            //on retourne les classes
            return $leEleve;
        }

        /********** Formule **********/

        public function selectUneFormule (){
            //appel de la fonction du modele
            $laFormule = $this->unModele->selectUneFormule ();

            //on réalise des traitements

            //on retourne les classes
            return $laFormule;
        }

    }//fin de la classe
?>