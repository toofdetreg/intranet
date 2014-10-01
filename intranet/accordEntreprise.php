<div class="test">
    <?php
    require 'connexion.php';

    $sql = "SELECT * FROM accordEntreprise ";  
    $req = $bdd->query($sql);
    ?>

    <?php
    while ($row = $req->fetch()) {
        
            $link = '<a href="' . substr($row['chemin'], 18) . $row['nom'] . '">'. $row['nom'] .'</a><br>';
            echo $link;       
        }
   
  
    $req->closeCursor();
    ?>
	</div>
