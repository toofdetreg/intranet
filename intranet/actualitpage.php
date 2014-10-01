<?php

if (isset($_GET['page'])) 
{
    $page=$_GET['page'];
    
    require 'connexion.php';

    $sql = "SELECT * FROM actualite where id='$page' ";
   
    $req = $bdd->query($sql);
    while ($row = $req->fetch()) {
        $image = '<a href="' . substr($row['photo'],18).'"data-lightbox="actualite"><img src="' . substr($row['photo'],18).'" width="70" height="60" align=left ></br></a>';
        $titre=$row['titre'];
        $chapeau=$row['chapeau'];
        $texte =$row['texte'];?>
<div id="article">
<?php echo $image;?> 
<h1> <?php echo $titre;?></h1>
<h3> <?php echo $chapeau;?></h3>
 <?php echo $texte; ?>
<br>
</div>
<?php
}
$req->closeCursor();  
}

?>