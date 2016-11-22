<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <title>Accueil - Cours HTML 5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/template.css" rel="stylesheet">
        <link rel="icon" href="http://92.39.241.41/plesk-site-preview/aslimani.fr/92.39.241.41/CoursHTML5/img/favicon.ico" />
    </head>
    <body>
        <div class="nav">
            <ul class="navbarleft">
                <li class="active"><a href="../index.html">Home</a></li>
                <li><a href="./sArticle.html">Articles</a></li>
                <li><a href="./sArticle.html">Détails</a></li>
                <li><a href="./sListe.html">Listes</a></li>
                <li><a href="./sFormulaire.php">Formulaires</a></li>
                <li><a href="./nouveautes.php">Nouveautés</a></li>
            </ul>
            <ul class="navbarright">
                <li><a href="#">Connexion</a></li>
                <li><a href="#">Recherche</a></li>
            </ul>
        </div>
        <div id="banner"><img  alt="banner" src="../img/header.jpg"/></div>
        <div id="global">
            <div id="gauche">
                <br>
                Meter<br><br>
                Code HTML du "meter" :
                <br>
                <br>
                <?php
                echo "<div class='code'>";
                echo htmlentities(nl2br("<meter min='1' max='10' value='5' low='3' optimum='8' name='stock'/>"));
                echo "</div>";
                ?> 

                <br>
                <meter min="10" max="150" value="60" low="50" optimum="80" high="120" name="stock">116 Cartons</meter>
                <meter min="10" max="150" value="116" low="50" optimum="8" high="120" name="stock">116 Cartons</meter>
                <meter min="10" max="150" value="145" low="50" optimum="8" high="120" name="stock">116 Cartons</meter>
                <br><br>

                <hr>
                <br>

                Progress<br><br>
                Code HTML du "progress" :
                <br>
                <br>
                <?php
                echo "<div class='code'>";
                echo htmlentities(nl2br("<progress max='150' value='116' name='stock' position='50'>116 Cartons</progress>"));
                echo "</div>";
                ?> 
                <br>
                <progress max='150' value='116' name='stock' position='50'>116 Cartons</progress>
                <br>
                <br>
                <hr>
                <br>
                Datalist<br><br>
                Code HTML du "Datalist" :
                <br>
                <br>
                <?php
                echo "<div class='code'>";
                echo htmlentities(nl2br("<datalist id='couleur'>"));
                echo "<br>";
                echo htmlentities(nl2br("           <option value = 'Verts'/>"));
                echo "<br>";
                echo htmlentities(nl2br("           <option value = 'Bleus'/>"));
                echo "<br>";
                echo htmlentities(nl2br("           <option value = 'Marrons'/>"));
                echo "<br>";
                echo htmlentities(nl2br("           <option value = 'Gris'/>"));
                echo "<br>";
                echo htmlentities(nl2br("</datalist>"));
                echo "</div>";
                ?> 

                <datalist id='couleur'>
                    <option value='Verts'/>
                    <option value='Bleus'/>
                    <option value='Marrons'/>
                    <option value='Gris'/>
                </datalist>
                <br>


                <br>
                <hr>
                <br>





            </div><!-- correction whitespace
          
            --><div id="droite">


                <datalist id='couleur'>
                    <option value='Verts'/>
                    <option value='Bleus'/>
                    <option value='Marrons'/>
                    <option value='Gris'/>
                </datalist>
                <br>
                <form method="POST" action="nouveautes.php">

                    Couleur de vos yeux <br>

                    <input type='text' name='zcolor' list='couleur'>
                    <input type='submit' name='valider' value='Valider'>

                </form>
                <br>
                <?php
                $msg = "";
                if (isset($_POST['valider'])) {

                    $msg = $_POST['zcolor'];
                    echo "<div class='code'>";
                    echo "Voici votre message : $msg";
                    echo "</div>";
                }
                ?>


                <br><br>


                Calcul dans output
                <form oninput='tva.value=((a.value)*(b.value))' action="nouveautes.php" method="POST">
                    <input type="number" name="a" value="" />
                    <input type="hidden" name="b" value="0.052133" /> =
                    <output id="tva" name="result" value="0"></output>€
                </form>

                
                <br>
                
                Date<br>


                 <form action="nouveautes.php" method="post" >

                    
                    <input type="date" name="anniversaire" max="2012-06-25" min="2011-08-13">
                    <input type="submit" name="choisir06" value="Choisir"/>

                </form>
                <?php
                if (isset($_POST['choisir06'])) {
                    $msg = $_POST['anniversaire'];
                    echo "Date anniversaire : $msg";
                }
                ?>
                
                
                <br>
                Heures 
                <form action="nouveautes.php" method="post" >

                    
                    <input type="time" name="time" max="18:00" min="14:00" value="" step="1800" />
                 
                </form>
                
                <br>
                Range + output
                <form oninput='range.value=(a.value)' action="nouveautes.php" method="post" >
                <input type="range" name="a"value="0" max="50" min="0" step="5">
                <output id="range" name="range" value="0"></output>
                </form>
                
                
                <br>
                Type Number
                <form oninput='range.value=(a.value)' action="nouveautes.php" method="post" >
                <input type="number" name="a"value="0" max="50" min="0" step="5">
                <output id="range" name="range" value="0"></output>
                </form>

            </div>
        </div>
        <footer id = "footer">Footer</footer>
    </body>
</html>
