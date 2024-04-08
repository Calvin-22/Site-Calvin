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
        <link href="index.css" rel="stylesheet" type="text/css"/>
        
        <title>calvindiaye</title> 
    </head>
    
        
    <body>
        
        <?php
            // rien... 
        ?>
        
        <!-- Barre de navigation --> 
        <nav> 
            <ul class="nav-list">
                <li class="nav-item"><a href="index.php">Accueil</a></li>
                <li class="nav-item"><a href="photos.php">Photographies</a></li>
                <li class="nav-item"><a href="contact.php">Contact</a></li>
            </ul> 
        </nav>  
        
        <section>

           <!-- div : image qui par ses propriétés CSS devient le fond -->
            <div class="div-fond">
                <img class="arrière-plan" src="Code.jpg" alt="">
               
              <!-- div : propriété agissant sur le contenu de la page, permettant d'être au dessus du fond et de se distinguer -->
              
                <div class="content"> 
                    <!-- Espacement avant le titre -->
                    <p class="Espace"</p>
            
                    <h1>Calvin N'Diaye</h1>
            
                    <!-- Sous-titre -->
                    <p class="sous-titre">Étudiant en développement informatique 💻 </p>
            
                    <!-- Ligne blanche -->
                    <p class="Ligne"</p>
            
                    <!-- Paragraphe 1 -->
                    <p class="p1">"Hello world 👾 ... Je m'appelle Calvin, je suis un jeune étudiant en BTS Services Informatiques aux Organisations."</p>
            
                    <!-- Ligne blanche -->
                    <p class="Ligne"</p>
            
                    <p class="p1">Contact : calvin.ndiaye.pro@gmail.com 📩 </p>     

                    <!-- Espacement avant le titre -->
                    <p class="Espace"</p>
                    
                    <!-- Intégration CV.pdf --> 
                    <iframe class ="CV" src="CV - Calvin Nd.pdf" width="800" height="500"  type="application/pdf">
                    </iframe> 
                    <!-- Espacement avant le titre -->
                    <p class="Espace"</p>
                    
                    <p class="p1">Site conçu à la main par Calvin.</p>
                    
                </div> 
            </div> 
        </section>
        
        
    </body>
</html>
