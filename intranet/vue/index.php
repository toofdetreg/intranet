<?php
require_once '../controler/BaseDonneesFactory.php';
require_once '../model/news.php';
require_once '../controler/GestionnaireNews.php';
require_once '../controler/GestionnaireNews_PDO.php';

$db = BaseDonneesFactory::getMysqlConnexionWithPDO();
$manager = new GestionnaireNews_PDO($db);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  <head>
    <title>Accueil du site</title>
    <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
  </head>
  
  <body>
    <p><a href="administration.php">Accéder à l'espace d'administration</a></p>

<p style="text-align: center">Il y a actuellement <?php echo $manager->compter(); ?> news. En voici la liste :</p>

     
  
    
    
    <table>
      <tr><th>Auteur</th><th>Titre</th><th>Date d'ajout</th><th>Dernière modification</th><th>Image</th><th>Action</th></tr>
<?php
foreach ($manager->getList() as $news)
{
  echo '<tr><td>', $news->auteur(), '</td><td>', $news->titre(), '</td><td>', $news->dateAjout(), '</td><td>', ($news->dateAjout() == $news->dateModif() ? '-' : $news->dateModif()), '</td><td><a href="?modifier=', $news->id(), '">Modifier</a> | <a href="?supprimer=', $news->id(), '">Supprimer</a></td><td>', $news->image(), '</td></tr>', "\n";

}
?>
    </table>
    <?php
if (isset($_GET['id']))
{
	$imagedir = "/intranet/upload/";
  $news = $manager->getId((int) $_GET['id']);
  echo  $imagedir.$news->image();
  
  echo '<p>Par <em>', $news->auteur(), '</em>, ', $news->dateAjout(), '</p>', "\n",
       '<h2>', $news->titre(), '</h2>', "\n",
       '<p>', nl2br($news->contenu()), '</p>', "\n",
  	   '<p>', nl2br($news->image()), '</p>', "\n",
  '<p>', '<img src="',$imagedir.$news->image(),'"></p>', "\n";
  
  if ($news->dateAjout() != $news->dateModif())
  {
    echo '<p style="text-align: right;"><small><em>Modifiée ', $news->dateModif(), '</em></small></p>';
  }
}

else
{
  echo '<h2 style="text-align:center">Liste des 5 dernières news</h2>';
  
  foreach ($manager->getList(0, 5) as $news)
  {
    if (strlen($news->contenu()) <= 200)
    {
      $contenu = $news->contenu();
    }
    
    else
    {
      $debut = substr($news->contenu(), 0, 200);
      $debut = substr($debut, 0, strrpos($debut, ' ')) . '...';
      
      $contenu = $debut;
    }
    
    echo '<h4><a href="?id=', $news->id(), '">', $news->titre(), '</a></h4>', "\n",
         '<p>', nl2br($contenu), '</p>';
  }
}
?>
  </body>
</html>