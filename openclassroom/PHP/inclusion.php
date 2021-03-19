<?php // ci dessous un exemple de page html de base

 <!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
    </head>
 
    <body>
 
    <!-- L'en-tête -->
    
    <header>
       
    </header>
    
    <!-- Le menu -->
    
    <nav id="menu">        
        <div class="element_menu">
            <h3>Titre menu</h3>
            <ul>
                <li><a href="page1.html">Lien</a></li>
                <li><a href="page2.html">Lien</a></li>
                <li><a href="page3.html">Lien</a></li>
            </ul>
        </div>    
    </nav>
    
    <!-- Le corps -->
    
    <div id="corps">
        <h1>Mon super site</h1>
        
        <p>
            Bienvenue sur mon super site !<br />
            Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
        </p>
    </div>
    
    <!-- Le pied de page -->
    
    <footer id="pied_de_page">
        <p>Copyright moi, tous droits réservés</p>
    </footer>
    
    </body>
 </html>
 // ********************
 //Bloc menu à inclure dans une page php
 <nav id="menu">        
    <div class="element_menu">
        <h3>Titre menu</h3>
        <ul>
            <li><a href="page1.html">Lien</a></li>
            <li><a href="page2.html">Lien</a></li>
            <li><a href="page3.html">Lien</a></li>
        </ul>
    </div>    
 </nav>
 // ********************
 //page ou l'on fait appel au menu
 <!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
    </head>
 
    <body>
  
    <?php include("menus.php"); ?> // appel de la page menu.php et de son contenu
    
    <!-- Le corps -->
    
    <div id="corps">
        <h1>Mon super site</h1>
        
        <p>
            Bienvenue sur mon super site !<br />
            Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
        </p>
    </div>
    
    <!-- Le pied de page -->
    
    <?php include("pied_de_page.php"); ?>
    
    </body>
 </html>
?>