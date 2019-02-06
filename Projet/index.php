<!--PAGE Principale du site-->
<!DOCTYPE html>
<html>
<head>
    <title>TOPBAZAR - Site de vente </title>
    <link rel = "stylesheet" href ="miseenpage/style.css"/>
   
</head>
     
<body>
 <h1>{ TOPBAZAR }</h1>
 <h2>Site de vente de livres </h2>
 
 <ul>
     <li> <a href="home.php">Connexion</a> </li>
     <li> <a href="adduser.php" >S'inscrire </a> </li>
 </ul>

      
    
 <div>
  <img class="mySlides" src="miseenpage/a.jpg" style="width:50%;float:left">
  <img class="mySlides" src="miseenpage/b.jpg" style="width:50%;float:left">   
  
 </div>
    
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change l'image toutes les 3 secondes
}
</script>

<div id="text">
    <p>
    {TOPBAZAR} est un site en ligne francais de vente de livres qui propose plus de 10 000 produits mis en vente sur cette plate-forme par des milliers de vendeurs du monde entier. Ce site vous propose d'acheter des dizaine de milliers de livres d’occasion ou livres neufs. Vendez en ligne vos livres.</p>
    <br>
    <p>
    "L'homme du monde lit quinze cents volumes dans sa vie, sans être un homme instruit ; l'homme de lettres en étudie la dixième partie, et devient un homme précieux. Cette différence vient de ce que l'un ne fait qu'aborder les idées; qu'il ne conserve de ses lectures, peu choisies, sans suite , et souvent futiles, que de quoi alimenter les conversations du jour ; il perd en solidité et en profondeur, ce qu'il acquiert en superficie; tandis que l'autre , tout entier à ses études, ne lit que des ouvrages essentiels, et qui, pour ainsi dire, se lient au même système, se complètent; ne s'attache qu'aux idées mères, les recueille, les médite, les développe, les lie entre elles, et en forme une masse d'idées et de connaissances, qu'il a toujours à sa disposition, et qu'il peut appliquer à tout ce qu'il veut traiter."
-- Citation de Paul Thiébault ; Recueil de pensées (1805)
    </p>
    
   <p> <a href="https://unsplash.com/search/books">(Images gratuites libres de droit)</a></p>  
    </div>  
    
</body>

</html>