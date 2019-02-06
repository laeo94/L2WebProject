<?php 
$page_title = "Suppression produits";
include ("headvendeur.php");
require ("auth/EtreAuthentifie.php"); ?>
<?php
    try {
        $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
        $pid = $_SESSION["pid"]; 
        $vendid= $_SESSION['uid'];
        $SQL = "SELECT * FROM produits WHERE pid='$pid' AND uid='$vendid'";
        $st = $db->prepare($SQL);
        $st->execute(array('pid'=>"$pid", 'uid'=>"$vendid"));
        if ($st->rowCount() ==0) {
            echo "<p>Erreur dans l'ID Produit ou vous etes pas autoriser</p>\n";
        }  
        else if (!isset($_SESSION['pid']) || !isset($_POST['nom']) || !isset($_POST['description']) || !isset($_POST['qte']) || !isset($_POST['prix']) || !isset($_SESSION['uid']) || !isset($_POST['ctid'])){
            echo'ERREUR';
        } 
        else {
            $prodid = trim($_SESSION['pid']);
            $nom = trim($_POST['nom']);
            $description= trim($_POST['description']);
            $qte= trim($_POST['qte']);
            $prix= trim($_POST['prix']);
            $vendid= $_SESSION['uid'];
            $ctid= trim($_POST['ctid']);
            if(empty($prodid)|| empty($nom)|| empty($description)|| empty($qte)|| empty($prix)|| empty($ctid)) {
                echo "<p>Erreur dans les données\n";
                exit();
            }
            else{
                $SQL = "UPDATE produits SET nom='$nom',description = '$description', qte='$qte',prix='$prix',ctid='$ctid' WHERE pid='$pid' AND uid='$vendid'";
                $st = $db->prepare($SQL);
                $res = $st->execute(array($pid,$nom,$description,$qte,$prix,$vendid,$ctid));
                if (!$res)
                    echo "Erreur de modification  vous n'etes pas autorisée\n";
                
                else echo "La modification a été effectué\n ";
                
            }
        }
    } 
catch (PDOException $e){
			echo "Erreur SQL: ".$e->getMessage();
		}
  

?>
            
            
    