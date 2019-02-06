<?php include("headvendeur.php");?>
    <?php include("db_config.php");?>
    
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
                      <th></th>
                      <th></th>
                  </tr>          
              </thead>
                                      
              <tbody>
                  <?php
                  try{
                      $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
                      if (isset($_GET['ctid'])) {
                          $ctid = $_GET['ctid'];
                          $SQL="SELECT * FROM produits WHERE ctid='".$ctid."' ORDER BY pid ASC";
                          $res=$db->query($SQL);
                          while($row=$res->fetch()){ ?>
                  <tr>
                      <td><?php echo $row['pid'] ?></td>
                      <td><?php echo htmlspecialchars($row['nom']) ?></td>
                      <td><?php echo htmlspecialchars($row['description']) ?></td>
                      <td><?php echo $row['qte'] ?></td>
                      <td><?php echo $row['prix'] ?></td>
                      <td><?php echo $row['ctid'] ?></td>
                      <td><?php echo $row['uid'] ?></td>
                      <td><a  href="modifier_produit_form.php?pid=<?php echo $row['pid'] ?> & nom=<?php echo htmlspecialchars($row['nom']) ?> & description=<?php echo htmlspecialchars($row['description']) ?> & qte=<?php echo $row['qte'] ?> & prix=<?php echo $row['prix'] ?> & ctid=<?php echo $row['ctid'] ?>">Modifer</a> </td>
                      <td><a  href="deleteproduit.php?pid=<?php echo $row['pid']?>">Supprimer</a> </td>
                  </tr>
                  
                  <?php }
                      }else if (isset($_GET['uid'])){
                          $uid= $_GET['uid'];
                          $SQL="SELECT * FROM produits WHERE uid='".$uid."' ORDER BY pid ASC";
                          $res=$db->query($SQL);
                          while($row=$res->fetch()){ ?>
                  <tr>
                      <td><?php echo $row['pid'] ?></td>
                      <td><?php echo htmlspecialchars($row['nom']) ?></td>
                      <td><?php echo htmlspecialchars($row['description']) ?></td>
                      <td><?php echo $row['qte'] ?></td>
                      <td><?php echo $row['prix'] ?></td>
                      <td><?php echo $row['ctid'] ?></td>
                      <td><?php echo $row['uid'] ?></td>
                      <td><a  href="modifier_produit_form.php?pid=<?php echo $row['pid'] ?> & nom=<?php echo $row['nom'] ?> & description=<?php echo $row['description'] ?> & qte=<?php echo $row['qte'] ?> & prix=<?php echo $row['prix'] ?> & ctid=<?php echo $row['ctid'] ?>">Modifer</a> </td>
                       <td><a  href="deleteproduit.php?pid=<?php echo $row['pid']?>">Supprimer</a> </td>
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
     
  <?php include("footer.php"); ?>
            