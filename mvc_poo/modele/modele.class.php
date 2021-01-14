<?php
    class Modele {
        private $unPdo;
        
        public function __construct () {
            $this->Pdo = null;
            //utilisation de la classe PDO
            try{
                //connexion à la BDD
                $this->unPdo = new PDO("mysql:host=localhost;dbname=auto_ecole","root","");
            }
            catch (PDOException $exp){
                echo "Erreur de connexion à la BDD";
            }
        }

        /********** Connexion **********/

        public function verifConnexion($email, $mdp){
            if ($this->unPdo != null){
                $requete = "select * from user where email = :email and mdp = :mdp; ";
            
                $donnees =array (":email"=>$email, ":mdp"=>$mdp) ;
            
                $select = $this->unPdo->prepare($requete);
                $select->execute ($donnees);
            
                return $select->fetch(); //retourner un seul résultat
            } else {
            return null;
            }
        }

        /********** Inscription **********/

        public function insertUser($tab){
            if ($this->unPdo != null) {
                $requete = "insert into user values (null, :nom, :prenom, :email, :mdp, 'user'); ";

                $donnees = array (":nom"=>$tab['nom'], ":prenom"=>$tab['prenom'], ":email"=>$tab['email'], ":mdp"=>$tab['mdp']);

                $insert = $this->unPdo->prepare($requete);
                $insert->execute ($donnees);
            }
        }

        /********** Contact **********/

        public function envoiFormulaire () {
            // on teste si le formulaire a été soumis
            if (!isset($_POST['submit'])) {
                // formulaire non envoyé
                echo '<p>'.$message_erreur_formulaire.'</p>'."\n";
            } else {
                /*
                * cette fonction sert à nettoyer et enregistrer un texte
                */
                function Rec($text) {
                    $text = htmlspecialchars(trim($text), ENT_QUOTES);
                    if (1 === get_magic_quotes_gpc())
                    {
                        $text = stripslashes($text);
                    }
            
                    $text = nl2br($text);
                    return $text;
                };
            
                /*
                * Cette fonction sert à vérifier la syntaxe d'un email
                */
                function IsEmail($email) {
                    $value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
                    return (($value === 0) || ($value === false)) ? false : true;
                }
            
                // formulaire envoyé, on récupère tous les champs.
                $nom     = (isset($_POST['name'])) ? Rec($_POST['name']) : '';
                $email   = (isset($_POST['email'])) ? Rec($_POST['email']) : '';
                $message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';
            
                // On va vérifier les variables et l'email ...
                $email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
            
                if (($nom != '') && ($email != '') && ($message != '')) {
                    // les 4 variables sont remplies, on génère puis envoie le mail
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'From:'.$nom_expediteur.' <'.$email_expediteur.'>' . "\r\n" .
                            'Reply-To:'.$email. "\r\n" .
                            'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
                            'Content-Disposition: inline'. "\r\n" .
                            'Content-Transfer-Encoding: 7bit'." \r\n" .
                            'X-Mailer:PHP/'.phpversion();
            
                    // envoyer une copie au visiteur ?
                    if ($copie == 'oui') {
                        $cible = $destinataire.';'.$email;
                    } else {
                        $cible = $destinataire;
                    };
            
                    // Remplacement de certains caractères spéciaux
                    $caracteres_speciaux     = array('&#039;', '&#8217;', '&quot;', '<br>', '<br />', '&lt;', '&gt;', '&amp;', '…',   '&rsquo;', '&lsquo;');
                    $caracteres_remplacement = array("'",      "'",        '"',      '',    '',       '<',    '>',    '&',     '...', '>>',      '<<'     );
            
                    $message = html_entity_decode($message);
                    $message = str_replace($caracteres_speciaux, $caracteres_remplacement, $message);
            
                    // Envoi du mail
                    $cible = str_replace(',', ';', $cible); // antibug : j'ai vu plein de forums où ce script était mis, les gens ne font pas attention à ce détail parfois
                    $num_emails = 0;
                    $tmp = explode(';', $cible);
                    foreach($tmp as $email_destinataire) {
                        if (mail($email_destinataire, $message, $headers))
                            $num_emails++;
                    }
            
                    if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1))) {
                        echo '<p>'.$message_envoye.'</p>';
                    } else {
                        echo '<p>'.$message_non_envoye.'</p>';
                    };
                } else {
                    // une des 3 variables (ou plus) est vide ...
                    echo '<p>'.$message_formulaire_invalide.' <a href="contact.html">Retour au formulaire</a></p>'."\n";
                };
            }; // fin du if (!isset($_POST['envoi']))
        }

        /********** Moniteur **********/

        public function selectAllMoniteur () {
            if ($this->unPdo != null) {
                $requete = "select nomMoniteur, prenomMoniteur, tel, mail from moniteur;";
    
                //preparation de la requete
                $select = $this->unPdo-> prepare($requete);
    
                //execution de la requete
                $select->execute();
    
                //extraction des données
                $lesMoniteurs = $select->fetchAll();
                return $lesMoniteurs;
            }else{
                return null;
            }
        }

        /********** Eleve **********/

        public function selectUnEleve () {
            if ($this->unPdo != null) {
                $requete = "select prenomEleve, nomEleve, tel, mail, adresse, cp, ville, d_naissance from eleve;";
    
                //preparation de la requete
                $select = $this->unPdo-> prepare($requete);
    
                //execution de la requete
                $select->execute();
    
                //extraction des données
                $leEleve = $select->fetchAll();
                return $leEleve;
            }else{
                return null;
            }
        }

        /********** Formule **********/

        public function selectUneFormule () {
            if ($this->unPdo != null) {
                $requete = "select libelle, prix from formule;";
    
                //preparation de la requete
                $select = $this->unPdo-> prepare($requete);
    
                //execution de la requete
                $select->execute();
    
                //extraction des données
                $laFormule = $select->fetchAll();
                return $laFormule;
            }else{
                return null;
            }
        }

    }//fin de la classe
?>