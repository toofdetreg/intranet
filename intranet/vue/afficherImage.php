<?php
echo $_FILES['userfile']['name'];?> </br> <?php 
echo $_FILES['userfile']['tmp_name'];?> </br> <?php 
echo $_FILES['userfile']['type'];?> </br> <?php 
echo $_FILES['userfile']['size'];?> </br> <?php 
?>
<?php
// Dans les versions de PHP anti�reures � 4.1.0, la variable $HTTP_POST_FILES
// doit �tre utilis�e � la place de la variable $_FILES.

$uploaddir = "/wamp/www/intranet/upload/";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo $uploadfile;
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Le fichier est valide, et a �t� t�l�charg�
           avec succ�s. Voici plus d'informations :\n";
} else {
    echo "Attaque potentielle par t�l�chargement de fichiers.
          Voici plus d'informations :\n";
}

echo 'Voici quelques informations de d�bogage :';
print_r($_FILES);
echo $uploadfile;

echo '</pre>';

?>