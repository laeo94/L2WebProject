<?php $page_title = "Recherche pour les acheteurs";
include("headacheteur.php");
require("auth/EtreAuthentifie.php");

$rech = trim($_POST['rech']);

if (empty($rech)) {
    echo "Aucune recherche";
    exit();
}
else{
?>

<form method = "post" action = "rechercheacheteur.php">

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
            <th>Commander</th>
        </tr>
    </thead>
    <tbody>
        <?php 
    try {
        $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
        $acheteurid = $idm ->getUid(); 
        
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
            <td><input type="radio" name="leproduit" value="<?php echo $row1['pid']?>" id="<?php echo $row1['pid']?>" required/> <label for="<?php echo $row1['pid']?>" ></label> </td>
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
            <td><input type="radio" name="leproduit" value="<?php echo $row2['pid']?>" id="<?php echo $row2['pid']?>" required/> <label for="<?php echo $row2['pid']?>" ></label> </td>
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
            <td><input type="radio" name="leproduit" value="<?php echo $row['pid']?>" id="<?php echo $row['pid']?>" required/> <label for="<?php echo $row['pid']?>" ></label> </td>
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
<br>
      <input type="submit" value="Acheter" />
      <br>
</form>

 <?php 
     if(isset($_POST['leproduit'])){
         
          $res01=$db->prepare('INSERT INTO commande( pid,uid,qte,date,statut) VALUES (:x,:y,1,NOW(),"en_cours")');
         $res01 -> execute(array(
         'x' => $_POST['leproduit'],
         'y'=> $acheteurid
         ));
         
         echo "<br> Commande passée <br>";
     }
     ?>
                                       
 <?php include("footer.php"); ?>
                        
   