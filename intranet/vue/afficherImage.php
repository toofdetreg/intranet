<?php
echo $_FILES['userfile']['name'];?> </br> <?php 
echo $_FILES['userfile']['tmp_name'];?> </br> <?php 
echo $_FILES['userfile']['type'];?> </br> <?php 
echo $_FILES['userfile']['size'];?> </br> <?php 
?>
<?php
// Dans les versions de PHP antiéreures à 4.1.0, la variable $HTTP_POST_FILES
// doit être utilisée à la place de la variable $_FILES.

$uploaddir = "/wamp/www/intranet/upload/";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo $uploadfile;
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Le fichier est valide, et a été téléchargé
           avec succès. Voici plus d'informations :\n";
} else {
    echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
}

echo 'Voici quelques informations de débogage :';
print_r($_FILES);
echo $uploadfile;

echo '</pre>';

?>