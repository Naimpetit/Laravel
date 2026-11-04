<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
    </head>
    <body>
        <div id="pagewidth" >
            <div id="leftcol"> <h2>Menu</h2>
                <ul>
                    <?php include('menuV.php'); ?>
                </ul>
            </div>
        
            <div id="maincol"><h2>Tp2Ter. Contexte Joueur</h2>
            <form action=lstSport method="POST">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                Type :
                <select name=cbosport>
                <?php       
                    foreach($enregAll as $uneligne) 
                    echo "<option value=$uneligne->idSport>$uneligne->libelleSport</option>";
                ?>
                </select>

                <input type="submit" value = "valider">
            </form>
            </div>

        </div>
    </body>
</html>




