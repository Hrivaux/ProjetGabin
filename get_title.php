<?php
include('assets/php/header.php')

// Récupérer la catégorie sélectionnée depuis la requête AJAX
$categorie = $_GET['categorie'];

// Requête pour récupérer les titres ayant la même catégorie que celle sélectionnée
$query = "SELECT titre FROM projects WHERE categorie = :categorie";
$stmt = $bdd->prepare($query);
$stmt->bindParam(':categorie', $categorie, PDO::PARAM_STR);
$stmt->execute();
$titres = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Afficher les titres dans une liste non ordonnée
echo '<ul>';
foreach ($titres as $titre) {
  echo '<li>' . $titre['titre'] . '</li>';
}
echo '</ul>';
?>