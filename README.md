# L2WebProject
2017 Projet web :Plateforme de vente
Rapport Programmation Web - Projet 3 : Plateforme de Vente
Page principale index.php
Page principale du site là où l’utilisateur se connectera ou s’enregistrera.
Sur chaque page qui suit les pages exigent automatiquement une connexion pour y accéder afin de sécuriser les pages.
La page contient donc un lien vers la connexion ou l’enregistrement
Apres l’enregistrement ou la connexion l’utilisateur est renvoyé dans la page principale vendeur.php ou acheteur.php selon le rôle qu’il aura.

Inscription/ Connexion/Deconnexion
• Identifiants de connexion
Les mots de passe sont identiques aux logins qui sont
Pour les vendeurs : v1 et v2
Pour les acheteurs : a1 et a2
• Enregistrement d’un nouvel utilisateur
Un formulaire (adduser_form.php) avec le choix de l’utilisateur voulant être soit vendeur ou acheteur. Les données sont envoyées dans la BDD (avec adduser.php), le numéro de l’utilisateur se fait automatiquement après s’être enregistrer. Après l’enregistrement l’user est automatique connecté et est renvoyé vers sa page.
• Déconnexion
Un lien vers deconnexion.php est disponible déconnectant l’utilisateur en supprimant la session et le fait retourner vers la page index.php

Page vendeur
Le vendeur peut avoir accès à tout moment à son menu une barre de navigation (headvendeur.php) qui est incluse dans toute les pages concernant le vendeur.
Le menu contient un accès vers la page d’accueil, les produits où l’on peut voir la liste des produits de l’ensemble du site(listeproduit.php), la liste des produits du vendeur actuellement connecté (produitvendeur.php) et un ajout direct de produit (add_produit_form.php). Le vendeur peut consulter la liste des commandes passées par les acheteurs (commandevendeur.php) concernant ses produits. Il peut aussi avoir accès à une liste de produits par catégorie ou par vendeur(categorie_vendeur.php) ou directement par
une recherche dont les produits,catégorie et vendeurs peut être rechercher (recherchevendeur.php)
• Enregistrement/Modification/Suppression Produit
Le vendeur peut donc ajouter un produit (add_produit_form.php), le modifier (modifier_produit_form.php) ou le supprimer ( deleteproduit.php). Ces options sont disponibles à chaque fois que le vendeur regarde les produits. Il ne peut cependant modifier et supprimer que ses propres produits. L’uid est automatiquement ajouté.
• Les commandes
La page commandevendeur.php affiche toutes les commandes que les acheteurs on fait concernant les produits du vendeur. Il y a un formulaire afin de modifier le statut de la commande en entrant le numéro de la commande et le statut (modifierstatut.php) .

Page Acheteur
L’acheteur peut avoir accès à tout moment à son menu une barre de navigation (headacheteur.php) qui est incluse dans toute les pages concernant l’acheteur.
Le menu contient un accès vers la page d’accueil, la liste des produits de l’ensemble du site(produitacheteur.php) et consulter la liste des commandes passées par l’acheteur (commande_acheteur.php). Il peut aussi avoir accès à une liste de produits par catégorie ou par vendeur(categorie_acheteur.php) ou directement par une recherche dont les produits,catégorie et vendeurs peut être rechercher (rechercheacheteur.php).
Pour chaque produit afficher l’acheteur peut acheter le produit. (ne marchant pas dans la page rechercheacheteur.php)

• Les commandes
La page commande_acheteur.php affiche toutes les commandes que l’acheteur a fait.
Il contient notamment un bouton détail ne marchant pas qui devait afficher la liste des détails du produit commandé.

Points non terminés – Problemes
• Ne peut retrouver le montant et le détail de chaque commande ainsi que l’historique
• Gerer l’épuisement des stocks (quantités) chez le vendeur
• Pas d’utilisation de Boostrap
