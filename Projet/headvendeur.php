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
                <li><a href="categorie_vendeur.php?ctid=1" > Humour</a></li>
                <li><a href="categorie_vendeur.php?ctid=2"> Scolaire</a></li>
                <li><a href="categorie_vendeur.php?ctid=3" > Théatre</a></li>
                <li><a href="categorie_vendeur.php?ctid=4"> Romance</a></li>
                <li><a href="categorie_vendeur.php?ctid=5">SF,Fantasy</a></li>
                <li><a href="categorie_vendeur.php?ctid=6" >Sport, Loisirs</a></li>
                <li><a href="categorie_vendeur.php?ctid=7">Guides</a></li>
                <li><a href="categorie_vendeur.php?ctid=8">Cuisines</a></li>
                <li><a href="categorie_vendeur.php?ctid=9" >Histoires</a></li>
                <li><a href="categorie_vendeur.php?ctid=10" >Litteratures</a></li>
                <li><a href="categorie_vendeur.php?ctid=11" >Info,Internet</a></li>
               </ul>
              </li>
              
              <li> <a href="">Par vendeur </a>
                  <ul>
                      <li> <a href ="categorie_vendeur.php?uid=5"> Vendeur 1</a></li>
                      <li> <a href= "categorie_vendeur.php?uid=6">Vendeur 2 </a></li>
                     
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
