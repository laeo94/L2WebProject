 <?php $page_title = "Changer statut de la commande";
include("headvendeur.php");
require ("auth/EtreAuthentifie.php");
if (!isset($_POST['cmdid'])|| !isset($_POST['statut'])) {
                                        echo'ERREUR DE SAISIE';
                                    } else {
                                            try {
                                                $vendid=$idm->getUid();
                                                $cmdid = $_POST['cmdid'];
                                                $statut= $_POST['statut'];
                                                $db = new PDO("mysql:hostname=$hostname;dbname=$dbname",$username,$password);
                                                $SQL = "UPDATE commande INNER JOIN produits ON commande.pid = produits.pid SET statut='$statut' WHERE cmdid='$cmdid'AND produits.uid='$vendid'";
                                                $st = $db->prepare($SQL);
                                                $res = $st->execute(array($statut));

                                                if($res) {
                                                    echo'La commande a été modifiée';
                                                    echo "<a href='commandevendeur.php'>\n Retour </a> à la liste des commandes";
                                                }else echo 'Vous n êtes pas autoriser';
                                            }
                                            catch (PDOException $e){
                                                echo "Erreur SQL: ".$e->getMessage();
                                            }
}
include("footer.php"); 
      