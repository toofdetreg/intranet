<div id="hebdo"></div>
<div id="affichehebdo">
    <?php
    require 'connexion.php';
    $i = 0;
    $sql = 'SELECT chemin, dateHebdo, nom FROM Hebdo ORDER BY dateHebdo DESC ';
    $req = $bdd->query($sql);

    while ($row = $req->fetch()) {
        if ($i <= 3) {
            ?>
    <img src="./images/flecheHebdo.png">
            hebdo du  : <?php
            $dateRecu = $row['dateHebdo'];
            $date = strftime("%A %d %B %Y", strtotime("$dateRecu"));
            
            $link = '<a href="' . substr($row['chemin'], 18) . "/" . $row['nom'] . '">'.$date.'</a><br>';
            echo $link;
            $i++;
        }
    }
    $req->closeCursor();
    ?>
</div>
<div id = "recherchehebdo">

</div>

