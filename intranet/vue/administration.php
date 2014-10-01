<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
<!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
                       
        <![endif]-->

<script src="/js/jquery-1.10.2.min.js"></script>
<script src="/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/js/jquery.ui.datepicker-fr.js"></script>
<script src="/js/lightbox-2.6.min.js"></script>

<link rel="stylesheet" href="../css/jquery-ui-1.10.3.custom.min.css" />
<link rel="stylesheet" href="../css/style.css" />
<link rel="stylesheet" href="../css/texte.css" />
<link rel="stylesheet" href="../css/lightbox.css" />


<title>Intranet BMH Administration</title>

</head>

<body>
	<div id="wrapper">
		<nav>
			<a href="../index.php"><div id="titreimg"></div></a> <a href="index.php"><div
					id="logo"></div></a> <a href="../index.php">Accéder à l'accueil du site</a>
		</nav>
		<header>

			<div id="recherche">

				<form id="search" method="post">

					<input class="search_data" name="saisie" type="text"
						placeholder="Mots-Clefs..." required /> <input
						class="btn-right-fleche" name="go" type="submit" value="" />
				</form>

			</div>
			<div id="demarquation">
				<img src="../images/barre.png">
			</div>
		</header>
		<div id="page">
		<?php
require_once '../controler/BaseDonneesFactory.php';
require_once '../model/news.php';
require_once '../controler/GestionnaireNews.php';
require_once '../controler/GestionnaireNews_PDO.php';

$db = BaseDonneesFactory::getMysqlConnexionWithPDO ();
$manager = new GestionnaireNews_PDO ( $db );

if (isset ( $_FILES ['image'] )) {
	$uploaddir = "/wamp/www/intranet/upload/";
	$uploadfile = $uploaddir . basename ( $_FILES ['image'] ['name'] );

	if (move_uploaded_file ( $_FILES ['image'] ['tmp_name'], $uploadfile )) {
		echo "Le fichier est valide, et a été téléchargé
           avec succès.\n";
	} else {
		echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
		echo 'Voici quelques informations de débogage :';
		print_r ( $_FILES );
		echo $uploadfile;
	}
}

if (isset ( $_GET ['modifier'] )) {
	$news = $manager->getId ( ( int ) $_GET ['modifier'] );
}

if (isset ( $_GET ['supprimer'] )) {
	$manager->supprimer ( ( int ) $_GET ['supprimer'] );
	$message = 'La news a bien été supprimée !';
}

if (isset ( $_POST ['auteur'] )) {
	$news = new News ( array (
			'auteur' => $_POST ['auteur'],
			'titre' => $_POST ['titre'],
			'contenu' => $_POST ['contenu'],
			'image' => $_FILES ['image'] ['name'] 
	) );
	
	if (isset ( $_POST ['id'] )) {
		$news->setId ( $_POST ['id'] );
	}
	
	if ($news->isValid ()) {
		$manager->sauver ( $news );
		
		$message = $news->isNew () ? 'La news a bien été ajoutée !' : 'La news a bien été modifiée !';
	} else {
		$erreurs = $news->erreurs ();
	}
}
?>
			<form action="administration.php" method="post"
				enctype="multipart/form-data">
				<p style="text-align: center">

        <?php if (isset($erreurs) && in_array(News::AUTEUR_INVALIDE, $erreurs)) echo 'L\'auteur est invalide.<br />'; ?>
        Auteur : <input type="text" name="auteur"
						value="<?php if (isset($news)) echo $news->auteur(); ?>" /><br />
        
        <?php if (isset($erreurs) && in_array(News::TITRE_INVALIDE, $erreurs)) echo 'Le titre est invalide.<br />'; ?>
        Titre : <input type="text" name="titre"
						value="<?php if (isset($news)) echo $news->titre(); ?>" /><br />
        
        <?php if (isset($erreurs) && in_array(News::CONTENU_INVALIDE, $erreurs)) echo 'Le contenu est invalide.<br />'; ?>
        Contenu :<br />
					<textarea rows="8" cols="60" name="contenu"><?php if (isset($news)) echo $news->contenu(); ?></textarea>
					<br />
        
        <?php if (isset($erreurs) && in_array(News::FORMAT_INVALIDE, $erreurs)) echo 'Le format d\'image est invalide.<br />'; ?>
         
         <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
					<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
					<!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
					Envoyez ce fichier : <input name="image" type="file" />
<?php
if (isset ( $news ) && ! $news->isNew ()) {
	?>
        
        <input type="hidden" name="id"
						value="<?php echo $news->id(); ?>" /> <input type="submit"
						value="Modifier" name="modifier" />
<?php
} else {
	?>
        <input type="submit" value="Ajouter" />
<?php
}
?>
      </p>
			</form>
			
			
			
			<p style="text-align: center">Il y a actuellement <?php echo $manager->compter(); ?> news. En voici la liste :</p>

			<table>
				<tr>
					<th>Auteur</th>
					<th>Titre</th>
					<th>Date d'ajout</th>
					<th>Dernière modification</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
<?php
foreach ( $manager->getList () as $news ) {
	echo '<tr><td>', $news->auteur (), '</td><td>', $news->titre (), '</td><td>', $news->dateAjout (), '</td><td>', ($news->dateAjout () == $news->dateModif () ? '-' : $news->dateModif ()), '</td><td><a href="?modifier=', $news->id (), '">Modifier</a> | <a href="?supprimer=', $news->id (), '">Supprimer</a></td><td>', $news->image (), '</td></tr>', "\n";
}
?>
<?php
if (isset ( $message )) {
	echo $message, '<br />';
}
?>
    </table>


		</div>
	</div>
</body>
</html>
