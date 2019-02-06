<!--Page Accueil du vendeur-->
<!DOCTYPE html>
<html>
 <head>
   <title>Accueil</title>
      <style>
         #text
{
text-align :center;
    font-size: 20px;   
}
     </style>
 </head>
       
<body>
    <?php  
    include ("headvendeur.php");
    
    
    echo "Bonjour " . $idm->getIdentity().". Votre identité est: ". $idm->getUid() .". Vous êtes: ".$idm->getRole();
       ?>
   <p id="text"> "L'homme du monde lit quinze cents volumes dans sa vie, sans être un homme instruit ; l'homme de lettres en étudie la dixième partie, et devient un homme précieux. Cette différence vient de ce que l'un ne fait qu'aborder les idées; qu'il ne conserve de ses lectures, peu choisies, sans suite , et souvent futiles, que de quoi alimenter les conversations du jour ; il perd en solidité et en profondeur, ce qu'il acquiert en superficie; tandis que l'autre , tout entier à ses études, ne lit que des ouvrages essentiels, et qui, pour ainsi dire, se lient au même système, se complètent; ne s'attache qu'aux idées mères, les recueille, les médite, les développe, les lie entre elles, et en forme une masse d'idées et de connaissances, qu'il a toujours à sa disposition, et qu'il peut appliquer à tout ce qu'il veut traiter."
       -- Citation de Paul Thiébault ; Recueil de pensées (1805)   </p>   
    <a href="http://www.proverbes-francais.fr/citations-lire/#d7tasDcRFPhLAQeV.99"> Read more </a>
    
    <?php include("footer.php"); 
            
    ?>
