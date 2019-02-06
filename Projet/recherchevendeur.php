 <?php $page_title = "Recherche pour le vendeur ";
include("headvendeur.php");
require("auth/EtreAuthentifie.php");

$rech = trim($_POST['rech']);
if (empty($rech)) {
    echo "Aucune recherche";
    exit();
}
else{
?>

<table >
    <legend>Recherche</legend>
    <thead>
        <tr>
            <th>N°Produit</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Quantité</th>
            <th>Prix</th>
            <th>N°Categorie</th>
            <th>N°Vendeur</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        
        <?php
    try {
        $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
        
        //Recherche nom produits
        $SQL="SELECT * FROM produits WHERE nom LIKE '%$rech%'ORDER BY nom";
        $st = $db->prepare($SQL);
        $st->execute();
        $res3 = $db -> query($SQL);
        $count = $st->rowCount();
        
        //Rercherche nom du vendeur
        if ($count == 0 ){
            $SQL1=" SELECT po.pid,po.nom AS pnom, po.description,po.qte, po.prix, po.uid, po.ctid FROM produits po INNER JOIN users us ON  po.uid = us.uid WHERE us.nom  LIKE '%$rech%' ORDER BY po.nom";
            $st1 = $db->prepare($SQL1);
            $st1->execute();
            $res = $db -> query($SQL1);
            $count1 = $st1->rowCount();
    
            if ($count1 != 0 ){
            
                while($row1 = $res->fetch()){
        ?>
        <tr>
            <td><?php echo $row1['pid'] ?></td>
            <td><?php echo $row1['pnom'] ?></td>
            <td><?php echo $row1['description'] ?></td>
            <td><?php echo $row1['qte'] ?></td>
            <td><?php echo $row1['prix'] ?></td>
            <td><?php echo $row1['ctid'] ?></td>
            <td><?php echo $row1['uid'] ?></td>
            <td><a href="modifier_produit_form.php?pid=<?php echo $row1['pid'] ?> & pnom=<?php echo $row1['pnom'] ?> & description=<?php echo $row1['description'] ?> & qte=<?php echo $row1['qte'] ?> & prix=<?php echo $row1['prix'] ?> & ctid=<?php echo $row1['ctid'] ?>">Modifer</a> </td>
            <td><a  href="deleteproduit.php?pid=<?php echo $row1['pid']?>">Supprimer</a> </td>
        </tr>
        <?php                   
                }
            }
            else{
                //Recherche nom de catégorie
                $SQL2="SELECT po.pid,po.nom AS pnom, po.description,po.qte, po.prix, po.uid, po.ctid FROM produits po INNER JOIN categories ca ON  po.ctid = ca.ctid WHERE ca.nom  LIKE '%$rech%' ORDER BY po.nom ";
                $st2 = $db->prepare($SQL2);
                $st2->execute();
                $res1 = $db -> query($SQL2);
                $count2 = $st2->rowCount();
                if ($count2 != 0 ){
                    while($row2 = $res1 ->fetch()){
        ?>
        <tr>
            <td><?php echo $row2['pid'] ?></td>
            <td><?php echo $row2['pnom'] ?></td>
            <td><?php echo $row2['description'] ?></td>
            <td><?php echo $row2['qte'] ?></td>
            <td><?php echo $row2['prix'] ?></td>
            <td><?php echo $row2['ctid'] ?></td>
            <td><?php echo $row2['uid'] ?></td>
            <td><a href="modifier_produit_form.php?pid=<?php echo $row2['pid'] ?> & pnom=<?php echo $row2['pnom'] ?> & description=<?php echo $row2['description'] ?> & qte=<?php echo $row2['qte'] ?> & prix=<?php echo $row2['prix'] ?> & ctid=<?php echo $row2['ctid'] ?>">Modifer</a></td>
            <td><a  href="deleteproduit.php?pid=<?php echo $row2['pid']?>">Supprimer</a> </td>
        </tr>

        <?php                              
                    } 
                }
                else echo "Pas de produits";
            }      
        }
                                                          
        else {
            while($row = $res3 -> fetch()){ ?>
        <tr>
            <td><?php echo $row['pid'] ?></td>
            <td><?php echo $row['nom'] ?></td>
            <td><?php echo $row['description'] ?></td>
            <td><?php echo $row['qte'] ?></td>
            <td><?php echo $row['prix'] ?></td>
            <td><?php echo $row['ctid'] ?></td>
            <td><?php echo $row['uid'] ?></td>
            <td><a href="modifier_produit_form.php?pid=<?php echo $row['pid'] ?> & nom=<?php echo $row['nom'] ?> & description=<?php echo $row['description'] ?> & qte=<?php echo $row['qte'] ?> & prix=<?php echo $row['prix'] ?> & ctid=<?php echo $row['ctid'] ?>">Modifer</a> </td>
            <td><a  href="deleteproduit.php?pid=<?php echo $row['pid']?>">Supprimer</a> </td>
        </tr>
        <?php                    
                                          }
        }
    }
    catch(Exception $e){
        echo 'Echec de la connexion à la base de données';
        exit();
    }
}
        ?>
    </tbody>
</table>
                           
                        
   