<?php $page_title = "Les commandes des acheteurs";
include("headacheteur.php");
require("auth/EtreAuthentifie.php");?>
<form method = "post" action="commande_acheteur.php">
<table>
    
    <legend>Commandes</legend>
    <thead>
        <tr>
            <th>N° de Commande</th>
            <th>N° Produit</th>
            <th>Statut</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php      
        try {
            $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
            $achetid= $idm->getUid();
            $SQL="SELECT commande.cmdid,commande.pid,commande.statut FROM commande WHERE uid= '$achetid' ORDER BY commande.cmdid ASC";
            $res=$db->query($SQL);
            while($row=$res->fetch()) {
        ?>
        <tr>
            <td><?php echo $row['cmdid'] ?></td>
            <td><?php echo $row['pid'] ?></td>
            <td><?php echo $row['statut'] ?></td>
            <td><input type="hidden" name="detail" value="<?php echo $row['pid'];?>"> <!-- Hidden field containing pid -->
            <input type="submit" name="detail" value="Detail"></td>
            
        </tr>

        <?php   }
        }

        catch(Exception $e) {
            echo 'Echec de la connexion à la base de données';
            exit();
        }
        ?>
    </tbody> </table>

    <?php if(isset($_POST['detail'])){
    ?>
<table>
<h3> Produit :</h3>
    <thead>
        <tr>
            <th>N°de Produit</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Quantite</th>
            <th>Prix</th>
            <th>N°de Categorie</th>
            <th>N° du Vendeur</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if (!isset($_GET['detail'])) {
            $achetid= $idm->getUid();
            try {
                $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
                $pid  = $_SESSION['pid'];
                $SQL="SELECT * FROM produits INNER JOIN commandes ON produits.pid = commande.pid WHERE commande.pid='$pid' AND commande.uid = '$achetid' ";
                $res=$db->prepare($SQL);
                $res->execute();

                while($row=$res->fetch()){
        ?>
        <tr>
            <td><?php echo $row['pid'] ?></td>
            <td><?php echo $row['nom'] ?></td>
            <td><?php echo $row['description'] ?></td>
            <td><?php echo $row['qte'] ?></td>
            <td><?php echo $row['prix'] ?></td>
            <td><?php echo $row['uid'] ?></td>
            <td><?php echo $row['ctid'] ?> </td>
        </tr>
        <?php
                }
            }
            catch(Exception $e) {
                echo 'Echec de la connexion à la base de données';
                exit();
            }
        }
        ?>
    </tbody>
    </table>
    <?php } ?>
                                    
        <?php include("footer.php"); ?>
        