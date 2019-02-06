<?php $page_title = "Suppression produits mise en page";
include ("headvendeur.php");
require ("auth/EtreAuthentifie.php");?>

<?php
    $_SESSION['pid'] = $_GET['pid'];
    if (!isset($_GET['nom']) || !isset($_GET['description']) || !isset($_GET['qte']) || !isset($_GET['prix']) ||
        !isset($_GET['ctid']) ) {
        echo "<p>Erreur1</p>\n";
        }else{
        $nom = $_GET['nom'];
        $description = $_GET['description'];
        $qte = $_GET['qte'];
        $prix = $_GET['prix'];
        $ctid = $_GET['ctid'];
?> 
              
<!--mofifier le produit-->

<form action="modifier_produit.php" method="post">
    <legend>Modifer un produit </legend>
    Nom: <input type="text" name="nom" value="<?php echo $nom ?>" />
    Description: <textarea name="description" ><?php echo $description ?></textarea>
    Quantité: <input type="number"  name="qte"  value="<?php echo intval($qte) ?>" />
    Prix: <input type="number" name="prix" step=0.1 value="<?php echo floatval($prix );?>"/>
    N°de Categorie: <select name="ctid" >
    <option><?php echo $ctid ?></option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
    <option>11</option>
    </select>
    <input type="submit" value="Modifer">
</form>  
       
        <?php 
        } ?>
