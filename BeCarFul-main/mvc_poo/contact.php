<?php
// expéditeur du formulaire. Pour des raisons de sécurité, de plus en plus d'hébergeurs imposent que ce soit une adresse sur votre hébergement/nom de domaine.
// Par exemple si vous mettez ce script sur votre site "test-site.com", mettez votre email @test-site.com comme expéditeur (par exemple contact@test-site.com)
// Si vous ne changez pas cette variable, vous risquez de ne pas recevoir de formulaire.
$email_expediteur = 'contact@becarful.fr';
$nom_expediteur = 'Contact BeCarFul';
 
// destinataire est votre adresse mail (cela peut être la même que l'expéditeur ci-dessus). Pour envoyer à plusieurs destinataires à la fois, séparez-les par un point-virgule
$destinataire = 'mguelin37@gmail.com';
 
// copie ? (envoie une copie au visiteur)
$copie = 'oui'; // 'oui' ou 'non'
 
// Messages de confirmation du mail
$message_envoye = "Votre message nous est bien parvenu !";
$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer.";
 
// Messages d'erreur du formulaire
$message_erreur_formulaire = "Vous devez d'abord <a href=\"contact.html\">envoyer le formulaire</a>.";
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";
?>

<h2>Contactez-nous</h2>

    <form id="form" class="topBefore" method="post" action="">
        <input id="name" type="text" placeholder="NOM">
        <input id="email" type="text" placeholder="EMAIL">
        <textarea id="message" type="text" placeholder="MESSAGE"></textarea>
        <input id="submit" type="submit" value="ENVOYER">
    </form>

<footer>
    © 2020 - TOUS DROITS RÉSERVÉS
</footer>