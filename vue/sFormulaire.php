




<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <title>Formulaire</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/template.css" rel="stylesheet">
    </head>
    <body>
        <div class="nav">
            <ul class="navbarleft">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="./sArticle.html">Article</a></li>
                <li><a href="./sArticle.html">Détails</a></li>
                <li><a href="./sListe.html">Listes</a></li>
                <li><a href="./sFormulaire.php">Listes</a></li>
            </ul>
            <ul class="navbarright">
                <li><a href="#">Connexion</a></li>
                <li><a href="#">Recherche</a></li>
            </ul>
        </div>
        <div id="banner"><img  alt="banner" src="../img/header.jpg"/></div>
        <div id="global">
            <div id="gauche">
                <form method="POST" action="sFormulaire.php">

                    <p>Votre nom : <input type="text" name="ztexte" valeur=""/>
                        <input type="submit" name="bvalider" valeur="VALIDER"/>

                </form>
                <br>
                <?php
                $msg="";
                if (isset($_POST['bvalider'])){
                    $msg = $_POST['ztext'];
                    echo "Voici votre message : $msg";
                }
                ?>
            </div><!-- correction whitespace
          
            --><div id="droite">
                Formulaire<br>
                Formulaire<br>
                Formulaire
            </div>
        </div>
        <div id="footer">
            Test
            test
        </div>
    </body>
</html>
