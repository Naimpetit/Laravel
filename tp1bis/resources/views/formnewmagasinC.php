<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
    </head>
    <body>
    <div id="pagewidth" >
        <div id="header"><h1>Laravel - mon application</h1></div>
        <div id="maincol" ><h2>Tp1Bis. Mise  en pratique</h2>
        <form action=ajoutersave method="POST">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
            <label>Nom</label>
            <input type="text" name="txtNom">
            <label>Ville</label>
            <input type="text" name="txtVille">
            <input type="submit" value = "valider">
        </form>
        </div>
        <div id="leftcol"> <h2>Menu</h2>
                <ul>
                    <?php include('menuV.php'); ?>
                </ul>
        </div>
    </div>
    </body>
</html>




