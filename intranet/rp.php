<div id="revuepresse">
    <?php
    setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
    echo (strftime("%d %B"));
    ?>
</div>
<div id="afficherp">
    <?php
    require 'connexion.php';

    $todayy = date("Y-m-d");
    $today = date("d/m/Y");
    $hier = $todayy - (24 * 60 * 60);  
    $date_hier=date('Y-m-d', time() - 3600 * 1200);

    $i = 0;
    $sql = "SELECT * FROM RevueDePresse WHERE dateEnr between '$date_hier' AND '$todayy' order by dateEnr desc";  
    $req = $bdd->query($sql);
    ?>

    <?php
    while ($row = $req->fetch()) {
        
            $image = '<a href="' . substr($row['chemin'], 18) . "/" . $row['nom'] . '" data-lightbox="revuepresse"><img src="/Miniatures/' . substr($row['chemin'], 18) . "/" . $row['nom'] . '" width="70" height="90"></a>';
          
            echo $image;

        
        }
   
  
    $req->closeCursor();
    ?>
</div>

<div id = "rechercherp">
    <form id="rprecherche" method="POST" action="revuepresse.php">
        <select name ="journal" >
            <option name="" value="">Recherche par source</option>
            <option name="LT" value="LT">Le Telegramme</option>                                    
            <option name="OF" value="OF">Ouest France</option>
            <option name="LE" value="LE">Les Echos</option>
        </select>                                
        <input  type="text" class="datepicker" name="dateEntre" value="Pr&eacute;cisez la date">
        <input name="go" type="submit" value="Rechercher" />                   
    </form>
</div>