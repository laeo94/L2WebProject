<?php $page_title = "Catégories pour les acheteurs";
include("headacheteur.php");
require("auth/EtreAuthentifie.php");?>

<form method= "post" >
    <table >
        <legend>Recherche</legend>
        <thead>
            <tr>
                <th>N°Produit</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Quantite</th>
                <th>Prix</th>
                <th>N°de categorie</th>
                <th>N°du Vendeur</th>
                <th>Commander</th>
            </tr>          
        </thead>
                                      
        <tbody>
            <?php
            try{
                $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
                $acheteurid = $idm->getUid();
                if (isset($_GET['ctid'])) {
                    $ctid = $_GET['ctid'];
                    $SQL="SELECT * FROM produits WHERE ctid='".$ctid."' ORDER BY pid ASC";
                    $res=$db->query($SQL);
                    while($row=$res->fetch()){ ?>
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
            <?php }
                }else if (isset($_GET['uid'])){
                    $uid= $_GET['uid'];
                    $SQL="SELECT * FROM produits WHERE uid='".$uid."' ORDER BY pid ASC";
                    $res=$db->query($SQL);
                    while($row=$res->fetch()){ ?>
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
            <?php }
                }
            }
            catch(Exception $e) {
                echo 'Echec de la connexion à la base de données';
                exit();
            }
            ?>
        </tbody>
    </table>
    
<br>
    <input type="submit" value="Commander" />
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
            