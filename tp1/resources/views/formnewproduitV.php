<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
    </head>
    <body>
        <form action=ajoutersave method="POST">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
            <label>Libelle</label>
            <input type="text" name="txtLib">
            <label>Prix</label>
            <input type="text" name="txtPrix">
            <label>Stock</label>
            <input type="text" name="txtStock">
            <input type="submit" value = "valider">
        </form>
    </body>
</html>




