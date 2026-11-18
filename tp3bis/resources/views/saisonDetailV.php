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

        <div id="maincol"><h2>Tp3bis. Contexte SAISON</h2>
          <?php
          echo $enregall->libelleSais;
          echo "<ul>";
            foreach ($enregall->sesaliments as $aliment) {
              echo "<li> ==> " . $aliment->libelleAl . " " . $aliment->stockAl  . " qté - " .   $aliment->pivot->prix  ." €</li>";
            }
          echo "</ul>";
          ?>
        </div>
          
      </div>

    </body>
</html>



