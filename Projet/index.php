<!--PAGE Principale du site-->
<!DOCTYPE html>
<html>

<head>
    <title>TOPBAZAR - Site de vente </title>
    <link href="bootstrap-4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel = "stylesheet" href ="miseenpage/style.css"/>
</head>
     
<body>
	<div class="container text-center" >
 		<h1>{ TOPBAZAR }</h1>
 		<h2>Site de vente de livres </h2>
    <h2>Projet L2 Informatique</h2>
	</div>	
 	
 	<button type="button" class="btn btn-warning btn-lg btn-block" onclick="window.location.href='home.php'">
 		Connexion
 	</button>
	<button type="button" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href='adduser.php'">
		S'inscrire
	</button>
 
  </br></br> 
  <div class="row">
 	  <div class="col-md-6">
  		<img class="mySlides" src="miseenpage/a.jpg" style="width:100%;float:right">
  		<img class="mySlides" src="miseenpage/b.jpg" style="width:100%;float:right">
  		<img class="mySlides" src="miseenpage/c.jpg" style="width:100%;float:right">
  		<img class="mySlides" src="miseenpage/d.jpg" style="width:100%;float:right">
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

   <div class="col-md-6" id="text">
    </br></br>
    <h3>
      {TOPBAZAR} est un site en ligne francais de vente de livres qui propose plus de 10 000 produits mis en vente sur cette plate-forme par des milliers de vendeurs du monde entier. Ce site vous propose d'acheter des dizaine de milliers de livres d’occasion ou livres neufs. Vendez en ligne vos livres.</h3>
      <br>
    <h4>
      "L'homme du monde lit quinze cents volumes dans sa vie, sans être un homme instruit ; l'homme de lettres en étudie la dixième partie, et devient un homme précieux. Cette différence vient de ce que l'un ne fait qu'aborder les idées; qu'il ne conserve de ses lectures, peu choisies, sans suite , et souvent futiles, que de quoi alimenter les conversations du jour ; il perd en solidité et en profondeur, ce qu'il acquiert en superficie; tandis que l'autre , tout entier à ses études, ne lit que des ouvrages essentiels, et qui, pour ainsi dire, se lient au même système, se complètent; ne s'attache qu'aux idées mères, les recueille, les médite, les développe, les lie entre elles, et en forme une masse d'idées et de connaissances, qu'il a toujours à sa disposition, et qu'il peut appliquer à tout ce qu'il veut traiter."
      -- Citation de Paul Thiébault ; Recueil de pensées (1805)
    </h4>

    <p>
      <a href="https://unsplash.com/search/books">(Images gratuites libres de droit)</a>
    </p>
  </div>
    
  <div class="container py-5">
    <div class="row">
      <div class="col-sm-6">
            <img class="rounded-circle" src="miseenpage/vendors.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Vendeurs</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
         </div>
          <div class="col-sm-6">
            <img class="rounded-circle" src="miseenpage/acheteur.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Acheteurs</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            
         </div>
        </div><!-- /.row -->
      </br> </br>
 <!-- FOOTER -->
      <footer class="container py-5">
        <div class ="row">
          <div class="col-6 col-md">
            <h5>Siège France Ile de France</h5>
         </div>
         <div class="col-6 col-md">
            <h5>Contact: contact@topbazar.fr</h5>
          </div>
        </div>
        <p class="float-right"><a href="#">Back to top</a></p>
          <p>&copy; 2016-2017 Company, Inc. &middot;</p>
      </footer>
</body>

</html>