<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
  </head>
    <body>
      <div id="maincol"><h2>Tp1. Initiation</h2>
        <?php
          echo"<ul>";       
          foreach($enregAll as $uneligne) 
            echo "<li>".$uneligne->libellePdt . " " .$uneligne->prixPdt . " €" . "</li>";
                      
          echo"</ul>";
          echo "=> Nb de produits : " . $enregCount . "<br />";
        ?>
      </div>
    </body>
</html>



