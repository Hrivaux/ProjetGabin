<?php
include('assets/php/sql.php')

// Requête pour récupérer toutes les catégories uniques
$query_categories = "SELECT DISTINCT categorie FROM projects";
$stmt_categories = $bdd->prepare($query_categories);
$stmt_categories->execute();
$categories = $stmt_categories->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Liste déroulante pour les catégories -->
<select id="categorie" name="categorie" onchange="showTitres(this.value)">
  <option value="">Sélectionnez une catégorie</option>
  <?php foreach ($categories as $categorie): ?>
    <option value="<?= $categorie['categorie'] ?>"><?= $categorie['categorie'] ?></option>
  <?php endforeach; ?>
</select>

<!-- Conteneur pour afficher les titres correspondant à la catégorie sélectionnée -->
<div id="titres-container">
  <?php
  // Fonction pour afficher les titres correspondant à la catégorie sélectionnée
  function afficherTitres($categorie, $bdd) {
    $query_titres = "SELECT titre FROM projects WHERE categorie = :categorie";
    $stmt_titres = $bdd->prepare($query_titres);
    $stmt_titres->bindParam(':categorie', $categorie, PDO::PARAM_STR);
    $stmt_titres->execute();
    $titres = $stmt_titres->fetchAll(PDO::FETCH_ASSOC);

    // Afficher les titres dans une liste non ordonnée
    echo '<ul>';
    foreach ($titres as $titre) {
      echo '<li>' . $titre['titre'] . '</li>';
    }
    echo '</ul>';
  }

  // Vérifier si une catégorie est sélectionnée et afficher les titres correspondants
  if (isset($_GET['categorie'])) {
    $categorie_selectionnee = $_GET['categorie'];
    afficherTitres($categorie_selectionnee, $bdd);
  }
  ?>
</div>

<!-- Script JavaScript pour envoyer la requête de récupération des titres -->
<script>
function showTitres(categorie) {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        document.getElementById('titres-container').innerHTML = xhr.responseText;
      } else {
        alert('Une erreur est survenue lors de la récupération des titres.');
      }
    }
  };
  xhr.open('GET', 'get_titles.php?categorie=' + encodeURIComponent(categorie), true);
  xhr.send();
}
</script>
