<form id="catLogRecherche" method="POST" action="catlogement.php">
<h4>S&eacute;lectionnez une commune :</h4>
    <p>  Commune : 
        <?php
        setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
        mysql_connect("localhost", "root", "jlt0183"); //connexion à MySQL 
        mysql_select_db("catalogue");
        $reponse = mysql_query("select clcu from catalogue.commune order by clcu asc");
        ?>
       
        <select id = "commune" name ="commune" onchange="change();">
            <option name="" value=""></option>
            <?php
            while ($donnees = mysql_fetch_array($reponse)) {
                ?> 
                <option value="<?php echo $donnees['clcu']; ?>"><?php echo $donnees['clcu']; ?></option> 
            <?php } ?>
        </select>
    </p>


    <div id ="quart">Quartier :
        <?php
        mysql_connect("localhost", "root", "jlt0183"); //connexion à MySQL 
        mysql_select_db("catalogue");
        $reponse = mysql_query("select qlqt from catalogue.quartier inner join commune on quartier.ccin = commune.ccin where commune.clcu='BREST'  order by qlqt asc");
        ?>
        <select id = "quartier" name ="quartier">
            <option name="" value=""></option>
            <?php
            while ($donnees = mysql_fetch_array($reponse)) {
                ?> 
                <option value="<?php echo $donnees['qlqt']; ?>"><?php echo $donnees['qlqt']; ?></option> 
            <?php } ?>
        </select>
    </div> 
    
    <h4>Pr&eacute;cisez votre demande :</h4>
    <p>
     Logement :

        <INPUT type= "checkbox" name="pavillon" value="O"> Pavillon
        <INPUT type= "checkbox" name="pavillon" value=""> Immeuble

    </p>


    <p> Type :

        Type 1 <INPUT type= "checkbox" name="type[]" value="TYPE 1">
        Type 2 <INPUT type= "checkbox" name="type[]" value="TYPE 2"> 
        Type 3 <INPUT type= "checkbox" name="type[]" value="TYPE 3"> 
        Type 4 <INPUT type= "checkbox" name="type[]" value="TYPE 4"> 
        Type 5 <INPUT type= "checkbox" name="type[]" value="TYPE 5">
        Type 6 ou plus <INPUT type= "checkbox" name="type[]" value="TYPE 6">
    </p>
        <p> Acc&egrave;s handicap&eacute; :

        <INPUT type= "checkbox" name="handicap" value="O">

    </p>
    <p> Ascenseur :

        <INPUT type= "checkbox" name="ascenseur" value="O">

    </p>
    <p> Loyer : entre <input name ="loyer1" type="number" step="10"  min="100" max="2000">
        et <input name ="loyer2"  type="number" step="10"  min="100" max="2000">
    </p>

    <input name="go" type="submit" value="rechercher" />                   
</form>

<?php
if (isset($_POST['go']) && $_POST['go'] != NULL) {// on vÃ©rifie d'abord l'existence du POST et aussi si la requete n'est pas vide.
    extract($_POST);
    $quartier=$_POST['quartier'];

    if(empty($_POST['pavillon'])){
        $pavillon='';        
    }
    else $pavillon=$_POST['pavillon'];
    
    
    if(empty($_POST['handicap'])){        
        $handicap='';
        }
        else {
            $handicap=$_POST['handicap'];
        }
  if(empty($_POST['ascenseur'])){        
        $ascenseur='';
        }
        else {
            $ascenseur=$_POST['ascenseur'];
        }

    if ($commune != 'BREST') {
        require 'connexion_cat.php';
        $sql = "select distinct rlru
        from module
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune'  ORDER BY rlru DESC";
    } else {
        require 'connexion_cat.php';

        $sql = "select distinct rlru
        from module
        inner join commune on module.ccin = commune.ccin
        inner join quartier on module.qcqt = quartier.qcqt
        where commune.clcu = 'BREST'AND quartier.qlqt = '$quartier' ORDER BY rlru desc;";
    }

    $req = $bdd->query($sql);
    ?><div id ="accordion"><?php
    while ($row = $req->fetch()) {
        $rlr = $row['rlru'];
        $rlru=addslashes($rlr);
               ?>

            <h3><?php echo $rlr ?></h3>
            <div id="contenuAcc"><?php
            
            //juste la commune
        if (empty($type) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and pav='$pavillon' and lhdc='$handicap'and module.asc='$ascenseur' order by tltl asc";
        } else if (empty($type[1]) AND empty($type[2]) AND empty($type[3]) AND empty($type[4]) AND empty($type[5]) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and pav='$pavillon' and lhdc='$handicap'and module.asc='$ascenseur' and (tltl='$type[0]') order by tltl asc";
        } else if (empty($type[2]) AND empty($type[3]) AND empty($type[4]) AND empty($type[5])  AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and pav='$pavillon' and lhdc='$handicap'and module.asc='$ascenseur' and (tltl='$type[0]' xor tltl='$type[1]') order by tltl asc";
        } else if (empty($type[3]) AND empty($type[4]) AND empty($type[5]) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and pav='$pavillon' and lhdc='$handicap'and module.asc='$ascenseur' and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]') order by tltl asc";
        } else if (empty($type[4]) AND empty($type[5]) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and pav='$pavillon' and lhdc='$handicap'and module.asc='$ascenseur' and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]') order by tltl asc";
        } else if (empty($type[5]) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and pav='$pavillon' and lhdc='$handicap'and module.asc='$ascenseur' and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]'xor tltl='$type[4]') order by tltl asc";
        } else if ( empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%' and pav='$pavillon' and lhdc='$handicap'and module.asc='$ascenseur' and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]'xor tltl='$type[4]'xor tltl='$type[5]') order by tltl asc";
            
            
            
            
            
         //juste la commune et acsenseur   
        } else if (empty($type) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%' and module.asc ='$ascenseur' order by tltl asc";
        } else if (empty($type[1]) AND empty($type[2]) AND empty($type[3]) AND empty($type[4]) AND empty($type[5])   AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]') and module.asc ='$ascenseur' order by tltl asc";
        } else if (empty($type[2]) AND empty($type[3]) AND empty($type[4]) AND empty($type[5])   AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]' xor tltl='$type[1]')and module.asc ='$ascenseur'  order by tltl asc";
        } else if (empty($type[3]) AND empty($type[4]) AND empty($type[5])   AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]')and module.asc ='$ascenseur'  order by tltl asc";
        } else if (empty($type[4]) AND empty($type[5])   AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]')and module.asc ='$ascenseur'  order by tltl asc";
        } else if (empty($type[5])   AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]'xor tltl='$type[4]') and module.asc ='$ascenseur' order by tltl asc";
        } else if ( empty($pavillon) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]'xor tltl='$type[4]'xor tltl='$type[5]') and module.asc ='$ascenseur' order by tltl asc";
        } 
        
        
         //juste la commune et acc&eacute; handicap
         else if (empty($type)   AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and lhdc='$handicap' order by tltl asc";
        } else if (empty($type[1]) AND empty($type[2]) AND empty($type[3]) AND empty($type[4]) AND empty($type[5])   AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]')and lhdc='$handicap'  order by tltl asc";
        } else if (empty($type[2]) AND empty($type[3]) AND empty($type[4]) AND empty($type[5]) AND empty($loyer1)   AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]' xor tltl='$type[1]') and lhdc='$handicap' order by tltl asc";
        } else if (empty($type[3]) AND empty($type[4]) AND empty($type[5]) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]') and lhdc='$handicap' order by tltl asc";
        } else if (empty($type[4]) AND empty($type[5])  AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]') and lhdc='$handicap' order by tltl asc";
        } else if (empty($type[5])   AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]'xor tltl='$type[4]') and lhdc='$handicap' order by tltl asc";
        } else if ( empty($pavillon) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]'xor tltl='$type[4]'xor tltl='$type[5]') and lhdc='$handicap' order by tltl asc";
        } 
        
         //juste la commune et acsenseur et acces handicap&eacute;
         else if (empty($type)  AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%' and module.asc ='$ascenseur'and lhdc='$handicap' order by tltl asc";
        } else if (empty($type[1]) AND empty($type[2]) AND empty($type[3]) AND empty($type[4]) AND empty($type[5]) AND empty($pavillon)  AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]') and module.asc ='$ascenseur' order by tltl asc";
        } else if (empty($type[2]) AND empty($type[3]) AND empty($type[4]) AND empty($type[5])    AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]' xor tltl='$type[1]')and module.asc ='$ascenseur' and lhdc='$handicap' order by tltl asc";
        } else if (empty($type[3]) AND empty($type[4]) AND empty($type[5]) AND empty($pavillon)  AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]')and module.asc ='$ascenseur' and lhdc='$handicap' order by tltl asc";
        } else if (empty($type[4]) AND empty($type[5]) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]')and module.asc ='$ascenseur' and lhdc='$handicap' order by tltl asc";
        } else if (empty($type[5]) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]'xor tltl='$type[4]') and module.asc ='$ascenseur'and lhdc='$handicap' order by tltl asc";
        } else if ( empty($pavillon) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]'xor tltl='$type[4]'xor tltl='$type[5]') and module.asc ='$ascenseur'and lhdc='$handicap' order by tltl asc";
        } 
        
        
        
       
        
        
        //juste commune loeyer
        
                else if (empty($type) ) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%' and (loyer between '$loyer1' and '$loyer2') order by tltl asc";
        } else if (empty($type[1]) AND empty($type[2]) AND empty($type[3]) AND empty($type[4]) AND empty($type[5]) ) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]') and (loyer between '$loyer1' and '$loyer2') order by tltl asc";
        } else if (empty($type[2]) AND empty($type[3]) AND empty($type[4]) AND empty($type[5]) ) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]' xor tltl='$type[1]') and (loyer between '$loyer1' and '$loyer2') order by tltl asc";
        } else if (empty($type[3]) AND empty($type[4]) AND empty($type[5]) ) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]') and (loyer between '$loyer1' and '$loyer2') order by tltl asc";
        } else if (empty($type[4]) AND empty($type[5])) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]') and (loyer between '$loyer1' and '$loyer2') order by tltl asc";
        } else if (empty($type[5])) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]'xor tltl='$type[4]') and  (loyer between '$loyer1' and '$loyer2') order by tltl asc";
        }

        
        
        
        
        
        
        
         //juste la commune et loyer
        
        
        else if (empty($type)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'  and (loyer between '$loyer1' and '$loyer2') order by tltl asc";
        } else if (empty($type[1]) AND empty($type[2]) AND empty($type[3]) AND empty($type[4]) AND empty($type[5]) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]')and module.asc ='$ascenseur' and (loyer between '$loyer1' and '$loyer2') order by tltl asc";
        } else if (empty($type[2]) AND empty($type[3]) AND empty($type[4]) AND empty($type[5]) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]' xor tltl='$type[1]')and module.asc ='$ascenseur' and (loyer between '$loyer1' and '$loyer2') order by tltl asc";
        } else if (empty($type[3]) AND empty($type[4]) AND empty($type[5]) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]')and module.asc ='$ascenseur' and (loyer between '$loyer1' and '$loyer2') order by tltl asc";
        } else if (empty($type[4]) AND empty($type[5]) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]')and module.asc ='$ascenseur' and (loyer between '$loyer1' and '$loyer2') order by tltl asc";
        } else if (empty($type[5]) AND empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]'xor tltl='$type[4]') and module.asc ='$ascenseur'and (loyer between '$loyer1' and '$loyer2') order by tltl asc";
        } else if (empty($loyer1) AND empty($loyer2)) {
            $sql2 = "select distinct tltl, loha, esnru, rlru, module.asc, clcu, loyer, charge, ch, pav, loddeb, lklo, lhdc, lcvt
        from module
        inner join type on module.tctl = type.tctl
        inner join commune on module.ccin = commune.ccin
        where clcu = '$commune' and rlru like '%$rlru%'and (tltl='$type[0]'xor tltl='$type[1]' xor tltl='$type[2]' xor tltl='$type[3]'xor tltl='$type[4]'xor tltl='$type[5]') and module.asc ='$ascenseur' and (loyer between '$loyer1' and '$loyer2') order by tltl asc";
        } 
        
        




        $req2 = $bdd->query($sql2);
        while ($row = $req2->fetch()) {

            $surface = $row['loha'];
            $asc = $row['asc'];
            $esnru = $row['esnru'];
            $clcu = $row['clcu'];
            $loyer = $row['loyer'];
            $charge = $row['charge'];
            $chauffage = $row['ch'];
            $pavillon = $row['pav'];
            if ($pavillon == 'O') {
                $pavi = 'pavillon';
            } else if ($pavillon == '') {
                $pavi = 'immeuble';
            }

            if ($chauffage == '') {
                $cha = 'Collectif';
            }else if ($chauffage == 'C') {
                $cha = 'Collectif';
            }else if ($chauffage == 'I') {
                $cha = 'individuel';
            } else {
                $cha = '';
            }
            if (empty($_POST['ascenseur'])) {
                $ascen = 'non';
            } else {
                $ascen = 'oui';
            }



            $location = $row['loddeb'];
            $date = strftime("%d/%m/%Y", strtotime("$location"));
            $lklo = $row['lklo'];
            $handi = $row['lhdc'];
            if ($handi == 'O') {
                $hand = 'oui';
            } else {
                $hand = 'non';
            }
            $conv = $row['lcvt'];
            if ($conv == 'C') {
                $con = 'oui';
            } else {
                $con = 'non';
            }
            
  
            ?>


                    <TABLE  style ="text-align: left; border:1px solid #BECD00; border-radius: 10px;"> 
                        <TR> 
                            <TD style='height: 100px;'> <h4>Logement :</h4>
                                Adresse :<?php echo $esnru; echo " "; echo $rlr; ?><br>
                                Type : <?php echo $row['tltl']; ?><br>
                                Pavillon/Immeuble :<?php echo $pavi; ?><br>
                                Ann&eacute;e de mise en location : <?php echo $date; ?>
                            </TD>
                            <TD>
                                <h4>D&eacute;tail :</h4>
                                N&#176; de logement : <?php echo $lklo?><br>
                                Surface :<?php echo $surface; ?><br>
                                Loyer : <?php echo $loyer; ?><br>
                                Charges : <?php echo $charge; ?>
                            </TD>
                            <TD>
                                <h4>Prestations :</h4>
                                Conventionn&eacute; : <?php echo $con; ?><br>
                                Chauffage : <?php echo $cha; ?><br>
                                Ascenseur : <?php echo $ascen; ?><br>
                                Acc&egrave;s handi. : <?php echo $hand; ?>

                            </TD>
                        </TR> 
                    </TABLE>
                    <br>
                    <?php
        
                }
                ?></div>                   

                <?php
            }
            ?> </div><?php
        }
        ?>