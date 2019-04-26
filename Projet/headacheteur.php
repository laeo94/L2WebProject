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
<?php include("db_config.php"); ?>
<title>Head Acheteur</title>

</head>
    
    <body> 
             <h1>{TOPBAZAR}</h1> 
            <nav >
                <div id="menu" >
                    <ul >
                        <li><a href="home.php">Accueil</a></li>  
                        <li><a href="produitacheteur.php">Les produits</a></li>
                        <li><a href="commande_acheteur.php">Mes commandes</a></li>
                        <li><a href="">Catégories</a>
                          <ul>
                          <?php 
                            try {
                              $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
                              $SQL="SELECT * FROM categories";
                              $res=$db->prepare($SQL);
                              $res->execute();
                              while($row=$res->fetch()){
                          ?>
                               <li><a href="categorie_acheteur.php?ctid=<?php echo $row['ctid']; ?>" > <?php echo $row['nom'] ?></a></li>
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

                        <li> <a href="">Par vendeur </a>
                        <ul>
                          <?php 
                            try {
                              $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
                              $SQL="SELECT uid, nom, prenom FROM users WHERE role='vendeur' ";
                              $res=$db->prepare($SQL);
                              $res->execute();
                              while($row=$res->fetch()){
                          ?>
                               <li><a href="categorie_acheteur.php?uid=<?php echo $row['uid']; ?>" > <?php echo $row['nom']; echo "  ";echo $row['prenom'];?></a></li>
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
              
                        <li>
                          <form action= "rechercheacheteur.php" method ="post">
                            <input type="search" placeholder="Recherche" name="rech">
                              <button type="submit" ><span></span>Chercher</button>
                          </form>
                        </li>
                        
                        <button>
                          <a href="deconnexion.php" >Deconnexion</a>
                        </button>
                    </ul>   
            </div>
        </nav>
        
    </body>
</html>