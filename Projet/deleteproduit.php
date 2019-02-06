
 <?php
        $page_title = "Suppression produits";
            include("headvendeur.php"); 
            include("db_config.php");
session_start();?>
    

<p>Êtes vous sûr?</p>
<form method="post">
<input type="submit" name="supprimer" value="Supprimer">
<input type="submit" name="annuler" value="Annuler">
</form>
<?php
    if (isset($_POST["supprimer"]) ){
    try{
        $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
        $vendid = $_SESSION['uid'];
        $pid  = $_GET['pid'];
        $SQL = "DELETE FROM produits WHERE pid='$pid' AND uid='$vendid' ";
        $st = $db->prepare($SQL);
        $res = $st->execute(array('pid'=>"$pid",'uid'=>"$vendid"));
        if (!$res){
            echo 'Erreur de suppresion ou vous n etez pas autorisée.';}
        else {
            header ("Location: produitvendeur.php");
        }
    }
   catch (PDOException $e){
			echo "Erreur SQL: ".$e->getMessage();
		
    }
}

if (isset($_POST["annuler"])){
	header("Location:produitvendeur.php") ;
} 

?>

