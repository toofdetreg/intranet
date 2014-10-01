
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5shiv.js"></script>
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/PIE.js"></script>
                <link rel="stylesheet" href="css/style_ie8.css" />
        <![endif]-->

        
        <!--[if lt IE 8]>
        <link rel="stylesheet" href="css/style_ie.css" />
        <![endif]-->

  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
  <script src="js/jquery.ui.datepicker-fr.js"></script>
  <script src="js/lightbox-2.6.min.js"></script>
          <script src="js/placeme.js"></script>

  <link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/texte.css" />
  <link rel="stylesheet" href="css/lightbox.css" />


  <script>
  $(function() {

jQuery('input').filter('.datepicker').datepicker({ 
    dateFormat: "yy-mm-dd",
    changeMonth: true,
      changeYear: true
});  
  });  </script>
  <script>
    $(function() {
    $( "#accordion" ).accordion();
  });
  </script>


        <title>Intranet BMH</title>

    </head>

    <body>
        <div id="wrapper">
            <nav>
                <a href="index.php" style="cursor:pointer;"><div id="titreimg"></div></a>
                <a href="index.php" style="cursor:pointer;"><div id="logo"></div></a>
<?php include 'menu.php'; ?>
            </nav>
            <header>

                <div id="recherche" >

                </div>
                <div id="demarquation">
                    <img src="./images/barre.png">
                </div>
            </header>
            <aside>
                <div id="annuaire"><img src="./images/annuaire.png">
                    <div id="idannuaire">
                    <?php include 'formannuaire.php'; ?>
                    </div>
                </div>
                <div id="nouvelleembauche"><img src="./images/nouvelleembauche.png"></div>
                 <div id="coinpage"><img src="./images/coinpage.png"></div>
            </aside>
           
            <div id="page">      
                   
            <?php include 'rpall.php'; ?>
              
            </div>
            
        </div>
           
</html>
