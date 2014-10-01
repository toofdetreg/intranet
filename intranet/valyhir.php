<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
                        <link rel="stylesheet" href="css/style_ie.css" />
        <![endif]-->

        <script src="js/jquery-1.10.2.min.js"></script>

        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/texte.css" />


        <title>Intranet BMH</title>

    </head>

    <body>
        <div id="wrapper">
            <nav>
                <a href="index.php" style="cursor:pointer;"><div id="titreimg"></div></a>
                <a href="index.php" style="cursor:pointer;"><div id="logo"></div></a>
                <?php include 'menu.php'; ?>
            </nav>
            <header>

                <div id="recherche" >

                    <form id="search" method="post">

                        <input class="search_data" name="saisie" type="text" placeholder="Mots-Clefs..." required />
                        <input class="btn-right-fleche" name="go" type="submit" value="" />
                    </form>

                </div>
                <div id="demarquation">
                    <img src="./images/barre.png">
                </div>
            </header>
            <div id="page">
                <div id='description'> 
                <pre>
<h1>LES JARDINS DU VALY HIR</h1>
NOMBRE DE PAVILLONS : 18 </br>
DATE DE LIVRAISON PREVUE : Fin du 1er semestre 2014</br>
REPARTITION DES PAVILLONS : T3 : 2, T4 : 13, T5 : 3</br>
PAVILLONS DISPONIBLES &agrave; ce jour : T4 : 4</br>
PRIX ACHAT (selon le lot choisi) : T4 : de 170 500 &euro; &agrave; 174 000 &euro;</br>
LOYER MENSUEL (hors part acquisitive) : T4 : 661,43 &euro;</br>
SURFACE HABITABLE PAVILLONS DISPONIBLES, HORS GARAGE : T4 : 80 m&sup2;</br>
SURFACE TERRAINS DES LOTS DISPONIBLES : T4 : de 212 &agrave; 310 m&sup2;</br>
</pre>
            </div>
            </div> 
            <aside>
                <div id="annuaire"><img src="./images/annuaire.png">
                    <div id="idannuaire">
                                            <?php include 'formannuaire.php'; ?>
                    </div>
                </div>
                <div id="nouvelleembauche"><img src="./images/nouvelleembauche.png"></div>
            </aside>
            <div id="coinpage"><img src="./images/coinpage.png"></div>
        </div>
    </body>
</html>
