<!DOCTYPE html>
<html>
 <head>
     <meta charset="utf-8" /> 
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel = "stylesheet" href ="miseenpage/styletab.css"/>
    <title>Liste des produits</title>
  
</head>
    
 <body>
    <?php include("headvendeur.php");
     require("auth/EtreAuthentifie.php");?>
     
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
         </tr>
     </thead>
              
     <tbody>
    <?php     
         try {

             $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);

             $SQL="SELECT * FROM produits ORDER BY pid ASC ";
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
         
        </tr>
        
         <?php }
         }
         catch(Exception $e){
             echo 'Echec de la connexion à la base de données';
             exit();
         }
         ?>
     </tbody>
     </table>
  
     
 <?php include("footer.php"); ?>
         