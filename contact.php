<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html lang="fr-FR">
    <head>
        
        <meta charset="UTF-8">
        <meta name="author" content="Calvin N'Diaye">
        <meta name="description" content="Portfolio de Calvin"> 
        
        <!-- Lien avec fichier CSS -->
        <link href="contact.css" rel="stylesheet" type="text/css"/>
        
        <title>contact</title> 
    </head>

    <body>

        <!-- Barre de navigation --> 
        <nav> 
            <ul class="nav-list">
                <li class="nav-item"><a href="index.php">Accueil</a></li>
                <li class="nav-item"><a href="photos.php">Photographies</a></li>
                <li class="nav-item"><a href="contact.php">Contact</a></li>
            </ul> 
        </nav>  

        <!-- Formulaire de contact --> 
        <div class="container">
            <form action="action_page.php">

                <label for="fname">Prénom</label>
                <input type="text" id="fname" name="firstname" placeholder="Votre prénom..." required>

                <label for="lname">Nom</label>
                <input type="text" id="lname" name="lastname" placeholder="Votre nom..." required>

                <label for="lmail">Votre adresse mail</label>
                <input type="text" id="lmail" name="mail" placeholder="Votre adresse mail..." required>

                <label for="country">Pays</label>
                <select id="country" name="country">
                    <option value="France">France</option>
                    <option value="Philippines">Philippines</option>
                    <option value="USA">USA</option>
                </select>

                <label for="subject">Sujet</label>
                <textarea id="subject" name="subject" placeholder="Écrivez quelque chose..." style="height:200px" required></textarea>
                <input type="submit" value="Envoyer">
            </form>

            <!-- envoi des informations du formulaire de demande via mail, non fonctionnel... -->
            <?php 
                $retour = mail('calvin.ndiaye.pro@gmail.com', 'Envoi depuis la page contact.php', $_POST['subject'], 'From: cal.editionpro@gmail.com', );
                if ($retour) 
                    // echo '<p>Votre message a bien été envoyé. </p>'
             ?>
</div>