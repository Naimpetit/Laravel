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

        <div id="maincol"><h2>Tp2Ter. Contexte Joueur du sport <span class='argent'><?php echo $enregAll->first()->sonsport->libelleSport; ?></span></h2>
        
          <?php
            echo"<ul>";
             foreach($enregAll as $uneligne)    
              echo "<li> <span class='vert gras'>". $uneligne->nomJoueur. "</span></li>";
            echo"</ul>";
          ?>
        </div>
          
      </div>

    </body>
</html>



