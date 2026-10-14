<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
    </head>
    <body>
    <div id="pagewidth" >
        <div id="header"><h1>Laravel - Ds1. Contrôle compétences</h1></div>
        <div id="maincol" ><h2>Fournisseur à rechercher</h2>
        <form action=consulterFour method="POST">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
            <label>Ville : </label><select name=cboVille>
                <?php       
                    foreach($enregAll as $uneligne) 
                    echo "<option value=$uneligne->villeFour>$uneligne->villeFour</option>";
                ?>
            </select>
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




