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
        
            <div id="maincol"><h2>Ajout d'un contrat</h2>
            <form action=ajoutersave method="POST">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                <label>Prix</label>
                <input type="text" name="txtPrix">

                <br><br>
                Client :
                <select name=cboclient>
                <?php       
                    foreach($enregAll as $uneligne) 
                    echo "<option value=$uneligne->idClient>$uneligne->nomClient</option>";
                ?>
                </select>

                <input type="submit" value = "valider">
            </form>
            </div>

        </div>
    </body>
</html>




