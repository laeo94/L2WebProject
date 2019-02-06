
<?php

require("auth/EtreAuthentifie.php");

$title = 'Accueil';

$_SESSION ['uid']= $idm ->getUid();


//Redirection sur la page acheteur ou vendeur

if($idm ->getRole() == 'acheteur'){
     include("acheteur.php");
} else {
   include("vendeur.php");
}

include("footer.php");