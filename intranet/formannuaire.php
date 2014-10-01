




<form method="POST" action="annuaire.php">
    <input type="text" name="nom" size="20" placeholder="Nom" > <br>
<input type="text" name="prenom" size="20" placeholder="Prenom" > <br>
<script src="js/placeholders.min.js"></script>
    <?php
    
    mysql_connect("localhost", "root", ""); //connexion à MySQL 
    mysql_select_db("Trombinoscope");
    mysql_query("SET NAMES 'utf8'");
    $reponse = mysql_query("SELECT DISTINCT service FROM annuaire order by service asc");
    ?>
    <select  name="service" id="Agence">
        <option value="" selected>Service</option>
        <?php
        while ($donnees = mysql_fetch_array($reponse)) {
            ?> 

            <option value="<?php echo $donnees['service']; ?>"><?php echo $donnees['service']; ?></option> 
        <?php } ?>
    </select> <br>
    <?php
    mysql_connect("localhost", "root", ""); //connexion à MySQL 
    mysql_select_db("Trombinoscope");
    $reponse = mysql_query("SELECT DISTINCT bureau FROM annuaire order by bureau asc");
    ?>
    <select name="bureau">
        <option value="" selected >Bureau</option>
        <?php
        while ($donnees = mysql_fetch_array($reponse)) {
            ?> 

            <option value="<?php echo $donnees['bureau']; ?>"><?php echo $donnees['bureau']; ?></option> 
        <?php } ?>
    </select>
    <input type="submit" value="Rechercher" name="envoyer"/>
</form>

