
    <form id="rprecherche2" method="POST" action="revuepresse.php">
        <select name ="journal">
            <option name="" value="">Recherche par source</option>
            <option name="LT" value="LT">Le Telegramme</option>                                    
            <option name="OF" value="OF">Ouest France</option>
            <option name="LE" value="LE">Les Echos</option>
        </select>                                
        <input  type="text" class="datepicker" name="dateEntre" value="Pr&eacute;cisez la date">
        <input name="go" type="submit" value="go" />                   
    </form>

<?php
setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
if (isset($_POST['go']) && $_POST['go'] != NULL) {// on vérifie d'abord l'existence du POST et aussi si la requete n'est pas vide.
    extract($_POST);
    $journal = htmlspecialchars($_POST["journal"]);
    $dateEntre = htmlspecialchars($_POST["dateEntre"]);
    require 'connexion.php';
    $sql = "SELECT chemin, nom FROM RevueDePresse WHERE dateEnr like '%$dateEntre%' and  nom like '%$journal%'  ";
    $req = $bdd->query($sql);
    while ($row = $req->fetch()) {
	
        $image = '<a href="' . substr($row['chemin'], 18) . "/" . $row['nom'] . '" data-lightbox="revuepresse"><img src="../Miniatures' . substr($row['chemin'], 18) . "/" . $row['nom'] . '" width="70" height="90"></a>';
        echo $image;

    }

    $req->closeCursor();
} else {
    require 'connexion.php';
    $sql = "SELECT DISTINCT `dateEnr` FROM RevueDePresse where dateEnr between '2013-09-01' AND '2014-12-31'  order by `dateEnr` desc";
    $req = $bdd->query($sql);
	
    ?> 

    <div id ="accordion"> <?php
        while ($row = $req->fetch()) {
            $dateRP = $row['dateEnr'];
            $date = strftime("%A %d %B %Y", strtotime("$dateRP"));
            
           // $datePrecedente = $dateRP;
            ?>

            <h3> Revue de presse du : <?php echo $date; ?> </h3> 
            <div class="test">
                <p> 
                    <?php
                    require 'connexion.php';
                    $sql2 = "SELECT chemin, nom FROM RevueDePresse WHERE dateEnr = '$dateRP' ";
                    $req2 = $bdd->query($sql2);
                    while ($row = $req2->fetch()) {
                        $image = '<a href="/intranet/ressources' . substr($row['chemin'], 18) . "/" . $row['nom'] . '" data-lightbox="revuepresse"><img src="/intranet/ressources/Miniatures' . substr($row['chemin'], 18) . "/" . $row['nom'] . '" width="70" height="90"></a>';
                        echo $image;  						
                    }
                    $bdd = null;
                    ?>  
                </p>
                </div>
            
            <?php
        }
        ?>  </div>
        <?php
    $req->closeCursor();
}
?>