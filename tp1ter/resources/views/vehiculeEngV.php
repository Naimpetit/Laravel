<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
    </head>
    <body>
    <div id="pagewidth" >
        <div id="header"><h1>Laravel - mon application</h1></div>
        <div id="maincol"><h2>Tp1Ter. Mise en pratique - Contexte MAGASIN</h2>
            <h2 class='centre argent'>Liste des Véhicules <?php echo "<span class=vert>" . $modeleVehic ."</span>";  ?></h2>
            <?php
                echo"<ul>";       
                foreach($enregAll as $uneligne) 
                    echo "<li>".$uneligne->modeleVehic . "</li>";
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




