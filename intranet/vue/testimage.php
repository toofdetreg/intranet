<!-- Le type d'encodage des donn�es, enctype, DOIT �tre sp�cifi� comme ce qui suit -->
<form enctype="multipart/form-data" action=afficherImage.php method="post">
  <!-- MAX_FILE_SIZE doit pr�c�der le champ input de type file -->
  <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
  <!-- Le nom de l'�l�ment input d�termine le nom dans le tableau $_FILES -->
  Envoyez ce fichier : <input name="userfile" type="file" />
  <input type="submit" value="Envoyer le fichier" />
</form>