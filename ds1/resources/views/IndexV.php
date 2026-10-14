<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
  </head>
    <body>
    <div id="pagewidth" >
      <div id="header"><h1>Laravel - Ds1. Contrôle compétences</h1></div>
      <div id="maincol"><h2>Liste des fournisseurs</h2>
        <?php
          echo"<ul>";       
          foreach($enregAll as $uneligne) 
            echo "<li>".$uneligne->nomFour . " - " .$uneligne->villeFour . "</li>";
                      
          echo"</ul>";
        ?>
      </div>
      <div id="leftcol"> <h2>Menu</h2>
                <ul>
                    <?php include('menuV.php'); ?>
                </ul>
            </div>
    </div>
    </body>
</html>



