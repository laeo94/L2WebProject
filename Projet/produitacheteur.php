<?php  $page_title = "Listes des produits pour le acheteurs";
include("headacheteur.php");
require("auth/EtreAuthentifie.php");
?>

<form method = "post" action="produitacheteur.php">
    <table >
        <legend>Produit</legend>
        <thead>
            <tr>
                <th>N°de Produit</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Quantite</th>
                <th>Prix</th>
                <th>N°du vendeur</th>
                <th> Commander </th>
            </tr>
        </thead>
               
        
        <tbody>
            
            <?php 
            try { 
                $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
                $acheteurid = $idm ->getUid(); 
                $SQL="SELECT * FROM produits ORDER BY nom ASC ";
                $res=$db->query($SQL);
                
                while($row=$res->fetch()){
            ?>
            <tr>
                <td><?php echo $row['pid'] ?></td>
                <td><?php echo htmlspecialchars($row['nom']) ?></td>
                <td><?php echo htmlspecialchars($row['description']) ?></td>
                <td><?php echo $row['qte'] ?></td>
                <td><?php echo $row['prix'] ?></td>
                <td><?php echo $row['uid'] ?></td>
                <td><input type="radio" name="leproduit" value="<?php echo $row['pid']?>" id="<?php echo $row['pid']?>" required/> <label for="<?php echo $row['pid']?>" ></label> </td>
            </tr>
            <?php }
            }
            catch (PDOException $e){
                  echo "Erreur SQL: ".$e->getMessage();
              }
            ?>
        </tbody>
    </table>
    <br>
    <input type="submit" value="Commander" />
   <img src="miseenpage/icone.jpg"style="width:10%;float:left"/>
    <br>
</form>
     
<?php  
if(isset($_POST['leproduit'])){
         
    $res=$db->prepare('INSERT INTO commande( pid,uid,qte,date,statut) VALUES (:x,:y,1,NOW(),"en_cours")');
    $res-> execute(array(
        'x' => $_POST['leproduit'],
        'y'=> $acheteurid));
    
    echo "<br> Commande passée <br>";
}
?>
  
<?php include("footer.php"); ?>
         