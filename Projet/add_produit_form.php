<!DOCTYPE html>
<html>
  <head>
    <title>Ajouter produit</title>
         <link rel = "stylesheet" href ="miseenpage/styletab.css"/>
  </head>
    
  <body>
 <?php include("headvendeur.php");
      include("db_config.php"); ?>
        
      
      <form action="add_produit.php" method="post" name="ajoutform" >
          <legend>Ajouter un nouveau produit</legend>
          Nom: <input type="text" name="nom" />
          Description: <textarea type="text" name="description"></textarea>
          Quantité: <input type="number" name="qte" min = "1" />
          Prix: <input type="number" step=0.1 name="prix" min = "0.0"/>
          N°de Categorie: 
          <select name="ctid" >
              <option>Selectionnez</option>
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
              <option>12</option>
          </select>
          <input type="submit" value="Ajouter" >
     </form>

     
      Les Différents catégorie :
      <table >
          <thead>
              <tr>
                  <th>N° Categorie</th>
                  <th>Nom de la catégorie</th>
              </tr>
          </thead>
          
          <tbody>
              <?php      
              try {
                  $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
                  $SQL="SELECT * FROM categories";
                  $res=$db->query($SQL);
                  while($row=$res->fetch()){ ?>
              <tr>
                  <td><?php echo $row['ctid'] ?></td>
                  <td><?php echo $row['nom'] ?></td>
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
 