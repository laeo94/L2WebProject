<!DOCTYPE html>
<html>
 <head>
     <meta charset="utf-8" />
     <link rel = "stylesheet" href ="miseenpage/stylemenu.css"/>
     <link rel = "stylesheet" href ="miseenpage/styletab.css"/>
     <style>h1 {
text-align: center;
  width:100%;
  margin-top:25px;
  font-family:'Times',serif;
  font-size: 40px;
  text-align: center;
  color: #8B4513;
}</style>
</head>
<?php include("db_config.php");
?>
<body>
   <h1>{TOPBAZAR}</h1>
    
        <div id="menu">
          <ul>
            <li><a href="home.php">Accueil</a></li>  
              
            <li>
                <a href="">Produit</a>
                <ul>
                  <li><a href="listeproduits.php">Listes des produits</a></li>
                    <li><a href="produitvendeur.php">Mes produits</a></li>
                  <li><a href="add_produit_form.php">Ajouter</a></li>     
                </ul>
            </li>
              
            <li> <a href="commandevendeur.php">Commandes</a></li>
              
             <li><a href="">Catégories</a>
                          <ul>
                          <?php 
                            try {
                              $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
                              $SQL="SELECT * FROM categories ";
                              $res=$db->prepare($SQL);
                              $res->execute();
                              while($row=$res->fetch()){
                          ?>
                               <li><a href="categorie_vendeur.php?ctid=<?php echo $row['ctid']; ?>" > <?php echo $row['nom'] ?></a></li>
                           <?php
                              }
                           }
                            catch(Exception $e) {
                              echo 'Echec de la connexion à la base de données';
                               exit();
                           }
        
                           ?>
                          </ul>
                        </li>
              
              
              <li><form action= "recherchevendeur.php" method ="post">
                        <input type="search" placeholder="Recherche" name="rech">
                        <button type="submit" ><span></span>Chercher</button>
                  </form>
              </li>
              <button>
              <a href="deconnexion.php" >Deconnexion</a>
              </button>
           
            </ul>
        </div>
     
    
                      
    
                    
   
  <?php include("footer.php"); 
            
    ?>
