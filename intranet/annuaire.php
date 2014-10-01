<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
                        <link rel="stylesheet" href="css/style_ie.css" />
        <![endif]-->

        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="js/jquery.ui.datepicker-fr.js"></script>
        <script src="js/lightbox-2.6.min.js"></script>
        

        <link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/texte.css" />
        <link rel="stylesheet" href="css/lightbox.css" />

        
        <title>Intranet BMH</title>
        


    </head>

    <body oncontextmenu="return false">
        <div id="wrapper">
            <nav>
                <a href="index.php" style="cursor:pointer;"><div id="titreimg"></div></a>
                <a href="index.php" style="cursor:pointer;"><div id="logo"></div></a>
<?php include 'menu.php'; ?>
            </nav>
            <header>

                <div id="recherche" >

 
                </div>
                <div id="demarquation">
                    <img src="./images/barre.png">
                </div>
            </header>
            
                
            
            <aside>
                <div id="annuaire"><img src="./images/annuaire.png">
                    <div id="idannuaire">
                        <?php include 'formannuaire.php'; ?>
                    </div>
                </div>
                <div id="nouvelleembauche"><img src="./images/nouvelleembauche.png"></div>
            </aside>
            <div id="coinpage"><img src="./images/coinpage.png"></div>
            <div id="page">
               <?php

if (isset($_POST['envoyer']) && $_POST['envoyer'] != NULL){// on vérifie d'abord l'existence du POST et aussi si la requete n'est pas vide.
    extract($_POST);
    $service=htmlspecialchars($service);
    $nom=htmlspecialchars($nom);
    $prenom=htmlspecialchars($prenom);
    $bureau=htmlspecialchars($bureau);
    $nom=addslashes($nom);
    
   try {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=Trombinoscope', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }
    

// Si tout va bien, on peut continuer
 $strSQL = "
select * from annuaire
left join telephone ON telephone.nom=annuaire.nom and telephone.prenom=annuaire.prenom
WHERE (service LIKE '%$service%' AND  bureau LIKE '%$bureau%' AND annuaire.prenom LIKE '%$prenom%' AND annuaire.nom LIKE '%$nom%') order by annuaire.nom asc";

$reponse = $bdd->query( $strSQL);

}
?>
    <div id=trombi>
 <?php
while ($donnees = $reponse->fetch()) { 
                 $image = '<a href="/Trombinoscope/'.$donnees['photo'].'" data-lightbox="trombi"><img src="/Trombinoscope/'.$donnees['photo'].'" width="70" height="90" align=left ></a>';                 		
                 ?>             

 <table>
<tr>
    <td><?php echo $image; ?></td> 
    <td style="width: 225px; "><strong>Nom</strong> :
            <?php echo $donnees['nom']; ?> <?php echo $donnees['prenom']; ?>
            </br>

    <strong>Service</strong> :
            <?php echo $donnees['service']; ?>
            </br>
            <strong>Bureau</strong> :
            <?php echo $donnees['bureau']; ?>
            </br>
            <strong>Fonction</strong> :
            <?php echo $donnees['Qualification']; ?>
            </br>
            
    </td> 


    <td style=" float: left; text-align: left;">    <strong>tel </strong> :
            <?php echo $donnees['numBur']; ?>
            </br>
            <strong>tel abrege </strong> :
            <?php echo $donnees['numBurAbre']; ?>
            </br>
                <strong>tel portable </strong> :
            <?php echo $donnees['numPort']; ?>
            </br>
                <strong>port abrege </strong> :
            <?php echo $donnees['numPortAbre']; ?>
                </br>
    </td>   

</table> 
<div id="demarquation2">
                    <img src="./images/barre2.png">
                </div>

        <?php }
		$reponse->closeCursor();
		?>
        </div>
        </div>
            </div>
    </body>
</html>
