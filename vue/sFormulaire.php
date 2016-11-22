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
                <li class="active"><a href="../index.html">Home</a></li>
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
                <h3>Formulaire 1</h3>
                <form method="POST" action="sFormulaire.php">

                    <p>Votre nom : <input type="text" name="ztext" valeur=""/>
                        <input type="submit" name="bvalider" valeur="VALIDER"/>

                </form>
                <br>
                <?php
                $msg = "";
                if (isset($_POST['bvalider'])) {
                    $msg = $_POST['ztext'];
                    echo "Voici votre message : $msg";
                }
                ?>

                <hr>

                <h3>Formulaire 2</h3>
                <form method="POST" action="sFormulaire.php">

                    <p>Votre nom : <input type="text" name="ztext2" valeur="" size="5" maxlength="6"/>
                        <input type="submit" name="bvalider2" valeur="VALIDER"/>

                </form>
                <br>
                <?php
                $msg = "";
                if (isset($_POST['bvalider2'])) {
                    $msg = $_POST['ztext2'];
                    echo "Voici votre message : $msg";
                }
                ?>

                <hr>

                <h3>Formulaire 3</h3>
                <form method="GET" action="sFormulaire.php">

                    <p>Votre nom : <input type="password" name="zpassword" valeur="" size="5" maxlength="6"/>
                        <input type="submit" name="bvalider3" valeur="VALIDER"/>

                </form>
                <br>
                <?php
                $msg = "";
                if (isset($_GET['bvalider3'])) {
                    $msg = $_GET['zpassword'];
                    echo "Voici votre mot de passe : $msg";
                }
                ?>


                <hr>


                <h3>Formulaire 4</h3>
                <form action="sFormulaire.php" method="post" >

                    De quel sexe êtes-vous ?<br>

                    <label><input type="radio" name="sexe" value="M" /> Masculin <br></label>
                    <label><input type="radio" name="sexe" value="F" /> Féminin <br></label>
                    <label><input type="radio" name="sexe" value="?" checked="checked" /> Inconnu! <br></label>
                    <input type="submit" name="alors" value="Alors ?" />

                </form>
                <?php
                if (isset($_POST['alors'])) {
                    $msg4 = $_POST['sexe'];
                    echo "Valeur : $msg4";
                }
                ?>

                <br>
                <hr>

                <h3>Formulaire 5</h3>


                <form action="sFormulaire.php" method="post" >
                    Une zone de type checkbox : Avez-vous faim aujourd'hui ?<br />
                    <input type="checkbox" name="faim[]" value="Entrée" /> Entrée<br />
                    <input type="checkbox" name="faim[]" value="Plat" /> Plat<br />
                    <input type="checkbox" name="faim[]" value="Dessert" /> Dessert <br />
                    <input type="checkbox" name="faim[]" value="Café" /> Café<br />
                    <input type="checkbox" name="faim[]" value="whisky" /> Whisky<br />
                    <input type="submit" name="choisir02" value="Choisir"/>
                </form>
                <?php
                if (isset($_POST['choisir02'])) {
                    $msg = implode(',', $_POST['faim']);
                    echo "Valeur : $msg";
                }
                ?>
                <br>


                <h3>Formulaire 6</h3>


                <form action="sFormulaire.php" method="post" >

                    Liste : Marque de voitures ?<br />
                    <select name="cars">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                    </select>
                    <input type="submit" name="choisir03" value="Choisir"/>

                </form>
                <?php
                if (isset($_POST['choisir03'])) {
                    $msg = $_POST['cars'];
                    echo "Valeur : $msg";
                }
                ?>

                <br>




                <h3>Formulaire 6</h3>


                <form action="sFormulaire.php" method="post" >

                    Liste : Marque de voitures ?<br />
                    <select name="cars[]" multiple="multiple" size="4">
                        <option value="">Choisir</option>
                        <option value="saab">Saab</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                        <option value="bmw">BMW</option>
                    </select>
                    <input type="submit" name="choisir04" value="Choisir"/>

                </form>
                <?php
                if (isset($_POST['choisir04'])) {
                    $msg = implode(',', $_POST['cars']);
                    echo "Valeur : $msg";
                }
                ?>

                <br>






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
