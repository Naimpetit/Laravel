<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
  </head>
    <body>
      <div id="pagewidth" >

        <div id="header"><h1>Laravel - mon application</h1></div>

        <div id="leftcol"> <h2>Menu</h2>
        <ul>
          <?php include('menuV.php'); ?>
          </ul>
        </div>

        <div id="maincol"><h2>Tp3bis. Contexte Location</h2>
          Gestion des tables contenant des CP - CE
          <?php
            foreach ($enregAll as $enreg) {
              echo "<ul>";
              echo "<li>" . $enreg->dureeLocation ." jours :" . $enreg->sonClient->nomClient ." (" . $enreg->sonClient->villeClient . ")</li>";
                echo "<ul>";
                foreach ($enreg->sesMateriaux as $materiau) {
                  echo "<li>" . $materiau->libelleMateriaux . "</li>";
                }
                echo "</ul>";
              echo "</ul>";
            }

          ?>
        </div>
          
      </div>

    </body>
</html>



