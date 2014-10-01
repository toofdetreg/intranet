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
 <p>                   
Brest M&#233;tropole Habitat vend des appartements sur le secteur de K&#233;r&#233;dern.</br>
Voici la grille tarifaire applicable &#225; compter du 1er Juillet 2013 :</br>
</br>
T1 : 32 000 &euro;</br>
T2 : 41 000 &euro;</br>
T3 : 49 000 &euro;</br>
T4 : 57 000 &euro;</br>
T5 : 63 000 &euro;</br>
T6 : 70 000 &euro;</br>
 </p>               
                
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
