<!--Mise en page de la page s'enregistrer-->

<?php
 $title= "Ajout de l'utilisateur";
 include("header.php");
?>

<p class="error"><?= $error??""?></p>
<div class="center">
 <h1>Inscription</h1>
    <form method="post" >

        <table>
            <tr>
                <td><label for="inputNom" class="control-label">Nom</label></td>
                <td><input type="text" name="nom" class="form-control" id="inputNom" placeholder="Nom" required value="<?= $data['nom']??""?>">
               </td>
            </tr>
            
            <tr>
                <td> <label for="inputPrenom" class="control-label">Prénom</label></td>
                <td>  <input type="text" name="prenom" class="form-control" id="inputPrenom" placeholder="Prénom" required aria-required="true" value="<?= $data['prenom']??""?>"></td>
            </tr>
            
            <tr>
                <td><label for="inputLogin" class="control-label">Login</label></td>
                <td><input type="text" name="login" class="form-control" id="inputLogin" placeholder="Login" required value="<?= $data['login']??""?>"></td>
            </tr>
            
            <tr>
                <td><label for="inputMDP" class="control-label">MDP</label></td>
                <td><input type="password" name="mdp" class="form-control" id="inputMDP" placeholder="Mot de passe" required value=""></td>
            </tr>
            
            <tr>
                <td><label for="inputMDP2" class="control-label">Répéter MDP</label></td>
                <td><input type="password" name="mdp2" class="form-control" id="inputMDP" placeholder="Répéter le mot de passe" required value=""></td>
            </tr>
            
            <tr>  
                <td> <label for = "inputSelect" class="control-label" >Acheteur/Vendeur</label> </td>
                <td>
                    <select name="role" class="control-label">
                        <option>Selectionnez</option>
                        <option>acheteur</option>
                        <option>vendeur</option>
                    </select>
                         
                </td>
            </tr>
       </table>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">S'enregistrer</button>
        </div>
    </form>
</div>


<?php

include("footer.php");
