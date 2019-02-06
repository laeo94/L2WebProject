<?php $page_title = "Listes des produits des vendeurs";
include("headvendeur.php");
require("auth/EtreAuthentifie.php");
?>

<table >
    <legend>Produit</legend>
    <thead>
        <tr>
            <th>N°de Produit</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Quantite</th>
            <th>Prix</th>
            <th>N°catégorie</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
             
    <tbody>
        
        <?php
        try {
            $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
            $vendid=$idm-> getUid();
            $SQL="SELECT * FROM produits WHERE uid ='$vendid' ORDER BY pid ASC ";
            $res=$db->query($SQL);
            while($row=$res->fetch()){
        ?>
        <tr>
            <td><?php echo $row['pid'] ?></td>
            <td><?php echo htmlspecialchars($row['nom']) ?></td>
            <td><?php echo htmlspecialchars($row['description']) ?></td>
            <td><?php echo $row['qte'] ?></td>
            <td><?php echo $row['prix'] ?></td>
            <td><?php echo $row['ctid'] ?></td>
            <td><a href="modifier_produit_form.php?pid=<?php echo $row['pid'] ?> & nom=<?php echo $row['nom'] ?> & description=<?php echo $row['description'] ?> & qte=<?php echo $row['qte'] ?> & prix=<?php echo $row['prix'] ?> & ctid=<?php echo $row['ctid'] ?>">Modifer</a> </td>
            <td><a  href="deleteproduit.php?pid=<?php echo $row['pid']?>">Supprimer</a> </td>
        </tr>

        <?php }
        }
       catch (PDOException $e){
           echo "Erreur SQL: ".$e->getMessage();
       }
        ?>
    </tbody>
</table>
                                        
 <?php include("footer.php"); ?>
         