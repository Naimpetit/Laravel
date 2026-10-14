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
        
            <div id="maincol"><h2>Tp2bis. Contexte PRODUIT</h2>
            <form action=ajoutersave method="POST">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                <label>Libelle</label>
                <input type="text" name="txtLib">
                <label>Prix</label>
                <input type="text" name="txtPrix">

                <br><br>
                Type :
                <select name=cbotype>
                <?php       
                    foreach($enregAll as $uneligne) 
                    echo "<option value=$uneligne->idType>$uneligne->libelleType</option>";
                ?>
                </select>

                <input type="submit" value = "valider">
            </form>
            </div>

        </div>
    </body>
</html>




