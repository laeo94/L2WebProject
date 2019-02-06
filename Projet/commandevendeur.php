<?php include("headvendeur.php");
require("auth/EtreAuthentifie.php");?>
<div> 
                                       
    <table>
    <legend>Les Commandes</legend>
    <thead>
        <tr>
            <th>N° de Commande</th>
            <th>N° Produit</th>
            <th>N° Acheteur</th>
            <th>Quantité</th>
            <th>Statut</th>
        </tr>
    </thead>
    <tbody>
        <?php      
        try {
            $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
            $vendid= $idm->getUid();
            $SQL="SELECT co.cmdid,co.pid,co.uid AS couid,co.qte, co.statut FROM commande co INNER JOIN produits po ON  co.pid = po.pid WHERE po.uid = '$vendid' ";
            $res=$db->query($SQL);
            while($row=$res->fetch()) {
        ?>
        <tr>
            <td><?php echo $row['cmdid'] ?></td>
            <td><?php echo $row['pid'] ?></td>
             <td><?php echo $row['couid'] ?></td>
             <td><?php echo $row['qte'] ?></td>
            <td> <?php echo $row['statut']?></td>
        </tr>

        <?php   }
        }

        catch(Exception $e) {
            echo 'Echec de la connexion à la base de données';
            exit();
        }
        ?> 
   </tbody>
    </table>

  <form  method= "post" action="modifierstatut.php" >
   N° de de commande: <input type="number" name="cmdid"/>
  Statut:
      <select name="statut">
          <option>Selectionnez</option>
          <option>acceptee</option>
          <option>refusee</option>
      </select>
      <input type="submit" name="modifier" value="Modifier">
    </form>


                                    
        <?php include("footer.php"); ?>

