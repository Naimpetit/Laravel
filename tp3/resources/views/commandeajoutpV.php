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

        <div id="maincol"><h2>Tp3. Contexte COMMANDE</h2>
          <?php 
            echo "<span class='vert gras'>".$lac->nomClient . " : " . $lac->dateCommande ."</span>";
            echo "<ul>";
            foreach($lac->sesproduits as $unp)
            { 
              echo "<li>=> ".$unp->libelleProduit . " " . $unp->pivot->quantite . " x " . $unp->prixProduit . " : " . $unp->pivot->quantite*$unp->prixProduit . " € </li>";
            }
            echo "</ul>";
          ?>
          <form action= lepchoisi method="POST">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
            <!-- nécessaire pour identifer la commande dans laquelle le produit sera à ajouter -->
            <input type="hidden" name="lac" value="<?php echo $lac->idCommande; ?>">
            <label>Produit à ajouter : </label><select name=cboProduit>
            <?php
              foreach ($lesproduits as $unprod)
                echo "<option value=$unprod->idProduit>$unprod->libelleProduit $unprod->prixProduit €</option>";
              ?>
            </select>
            <br />
            <label>Quantité à ajouter : </label><input type="text" name="txtquantite" size="3">
            <br />
            <input type="submit" value = "valider">
          </form>
          </div>
                    
      </div>
    </body>
</html>



