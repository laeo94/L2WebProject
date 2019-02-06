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
                <li><a href="categorie_acheteur.php?ctid=1" > Humour</a></li>
                <li><a href="categorie_acheteur.php?ctid=2"> Scolaire</a></li>
                <li><a href="categorie_acheteur.php?ctid=3" > Théatre</a></li>
                <li><a href="categorie_acheteur.php?ctid=4"> Romance</a></li>
                <li><a href="categorie_acheteur.php?ctid=5">SF,Fantasy</a></li>
                <li><a href="categorie_acheteur.php?ctid=6" >Sport, Loisirs</a></li>
                <li><a href="categorie_acheteur.php?ctid=7">Guides</a></li>
                <li><a href="categorie_acheteur.php?ctid=8">Cuisines</a></li>
                <li><a href="categorie_acheteur.php?ctid=9" >Histoires</a></li>
                <li><a href="categorie_acheteur.php?ctid=10" >Litteratures</a></li>
                <li><a href="categorie_acheteur.php?ctid=11" >Info,Internet</a></li>
               </ul>
              </li>
             
            <li> <a href="">Par vendeur </a>
                  <ul>
                      <li> <a href ="categorie_acheteur.php?uid=5"> Vendeur 1</a></li>
                      <li> <a href= "categorie_acheteur.php?uid=6">Vendeur 2 </a></li>
                     
                      
                  </ul>
              </li>
              
              <li><form action= "rechercheacheteur.php" method ="post">
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