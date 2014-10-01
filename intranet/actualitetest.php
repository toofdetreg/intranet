<?php
require 'connexion.php';
     
$sql = 'SELECT * FROM actualite Order By date asc';  

$req = $bdd->query($sql);  
 while($row = $req->fetch()) {
 $image = '<a class ="actualite" href="actualite.php?page='.$row['id'].'"><img src="' . substr($row['photo'],18).'" width="70" height="60" align=left >';
 $titre=$row['titre'];
 $chapeau=$row['chapeau'];
 $texte =$row['texte'];?>
<div id="affichactcu"><p><?php 
 echo $image;
 echo '<font color = "red">'.$titre.'</font></br></p></a>';
 echo $chapeau;
 ?></br></div>
<?php
}
$req->closeCursor();    
?>
