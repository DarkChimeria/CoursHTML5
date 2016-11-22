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
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="./vue/sArticle.html">Articles</a></li>
                <li><a href="./vue/sArticle.html">Détails</a></li>
                <li><a href="./vue/sListe.html">Listes</a></li>
                <li><a href="./vue/sFormulaire.php">Formulaires</a></li>
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

                <form method="POST" action="nouveautes.php" oninput="result.value=parseInt(nombre.value)*parseInt(taxe.value)">

                    <input type="number" name="nombre" value="" id/>
                    <input type="hidden" name="taxe" value="19,6"/>
                    <output for="nombre taxe" name="ttc" form="tva_form"></output> €
                </form>




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



                <form oninput='tva.value=((a.value)*(b.value))' action="nouveautes.php" method="POST">
                    <input type="number" name="a" value="" />
                    <input type="hidden" name="b" value="0.052133" /> =
                    <output id="tva" name="result" value="0"></output>€
                </form>


            </div>
        </div>
        <footer id = "footer">Footer</footer>
    </body>
</html>
