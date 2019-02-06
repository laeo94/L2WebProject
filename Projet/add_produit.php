<!-- Ajout produit -->
<?php

$page_title="Ajouter un produit";
include ("db_config.php");
require("auth/EtreAuthentifie.php");
// Récupération des données
if (!isset($_POST['nom']) || !isset($_POST['description']) || !isset($_POST['qte'])|| !isset($_POST['prix'])|| !isset($_POST['ctid'])) {
	include("add_produit_form.php");
} else {
	$nom = $_POST['nom'];
    $desc = $_POST['description'];
	$qte= $_POST['qte'];
	$prix= $_POST['prix'];
    $ctid = $_POST['ctid'];
    $vendid = $idm->getUid();

// Vérification des données
if ($nom=="" || $desc=="" || !is_numeric($qte) ||is_numeric($prix)||is_numeric($ctid)) {
	include("add_produit_form.php");
} else {
	
	// connexion à la BD
	require("db_config.php");}
	try {
		$db = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8", $username, $password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$SQL = "INSERT INTO produits (nom,description,qte,prix,uid,ctid) VALUES('$nom','$desc','$qte','$prix','$vendid','$ctid')";
		$st = $db->prepare($SQL);
		$res = $st->execute(array($nom, $desc, $qte,$prix,$vendid,$ctid));
		
		if (!$res) // ou if ($st->rowCount() ==0)
			echo "Erreur d’ajout";
		else echo "L'ajout a été effectué <br>";
		echo "<a href='produitvendeur.php'>Afficher</a> la liste de mes produits";
		$db=null;
	}
		catch (PDOException $e){
			echo "Erreur SQL: ".$e->getMessage();
		}
	}
	include("footer.php");
?>