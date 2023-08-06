<?php
require 'assets/php/sql.php'
?>

<!DOCTYPE html>
<html>
<head>
  <title>Détails du projet</title>
</head>
<body>
  <?php
    // Vérifier si l'identifiant du projet est passé en tant que paramètre d'URL
    if (isset($_GET['project_id'])) {
      $project_id = $_GET['project_id'];


      // Préparez et exécutez la requête SQL pour récupérer les détails du projet
      $sql = "SELECT * FROM projects WHERE id = $project_id";
      $result = $conn->query($sql);

      // Vérifier si le projet avec l'identifiant donné existe dans la base de données
      if ($result->num_rows > 0) {
        $project = $result->fetch_assoc();
  ?>
        <section id="portfolio-details" class="portfolio-details">
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                  <div class="swiper-wrapper align-items-center">
                    <!-- Vous pouvez ajouter ici les images du projet avec un code PHP pour générer les balises d'image dynamiquement -->
                    <div class="swiper-slide">
                      <img src="chemin_vers_votre_dossier_img/<?php echo $project['image1']; ?>" alt="">
                    </div>
                    <div class="swiper-slide">
                      <img src="chemin_vers_votre_dossier_img/<?php echo $project['image2']; ?>" alt="">
                    </div>
                    <!-- Ajoutez d'autres images ici -->
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="portfolio-info">
                  <h3>Informations sur le projet</h3>
                  <ul>
                    <li><strong>Catégorie</strong>: <?php echo $project['category']; ?></li>
                    <li><strong>Client</strong>: <?php echo $project['client']; ?></li>
                    <li><strong>Date du projet</strong>: <?php echo $project['project_date']; ?></li>
                    <li><strong>URL du projet</strong>: <a href="<?php echo $project['project_url']; ?>"><?php echo $project['project_url']; ?></a></li>
                  </ul>
                </div>
                <div class="portfolio-description">
                  <h2><?php echo $project['title']; ?></h2>
                  <p>
                    <?php echo $project['description']; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
  <?php
      } else {
        echo "<p>Projet non trouvé.</p>";
      }

      // Fermer la connexion à la base de données
      $conn->close();
    } else {
      echo "<p>Identifiant du projet non spécifié.</p>";
    }
  ?>
</body>
</html>
