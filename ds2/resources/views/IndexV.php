<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
  </head>
    <body>
      <div id="pagewidth" >

        <div id="header"><h1>Laravel - Ds2. Contrôle de compétences</h1></div>

        <div id="leftcol"> <h2>Menu</h2>
        <ul>
          <?php include('menuV.php'); ?>
          </ul>
        </div>

        <div id="maincol"><h2>Liste des contrats</h2>
          <?php
            $tot=0;
            echo"<ul>";       
            foreach($enregAll as $uneligne){
              echo "<li>".$uneligne->idContrat . " - " .$uneligne->montantContrat . " € => <span class='vert gras'>". $uneligne->sonClient->nomClient . "</span></li>";
              $tot+= $uneligne->montantContrat;
            }
            echo"</ul><br>";
            echo"Montant des contrats: " . $tot . "€"
          ?>
        </div>
          
      </div>

    </body>
</html>



