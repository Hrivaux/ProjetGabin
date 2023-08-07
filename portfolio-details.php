<body>
<?php
include('assets/php/header.php')
?>
<?php
    if (isset($_GET['article_id'])) {
      $article_id = $_GET['article_id'];

      // Préparez et exécutez la requête SQL pour récupérer les détails de l'article
      $sql = "SELECT * FROM projects WHERE id = :article_id";
      $stmt = $bdd->prepare($sql);
      $stmt->bindParam(':article_id', $article_id, PDO::PARAM_INT);
      $stmt->execute();

      // Vérifier si l'article avec l'identifiant donné existe dans la base de données
      if ($stmt->rowCount() > 0) {
        $article = $stmt->fetch(PDO::FETCH_ASSOC);
  ?>

<main id="main">
        <section id="portfolio-details" class="portfolio-details">
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                  <div class="swiper-wrapper align-items-center">
                    <!-- Vous pouvez ajouter ici les images du projet avec un code PHP pour générer les balises d'image dynamiquement -->
                    <div class="swiper-slide">
                      <img src="<?php echo $article['image1']; ?>" alt="">
                    </div>
                    <div class="swiper-slide">
                      <img src="chemin_vers_votre_dossier_img/<?php echo $article['image2']; ?>" alt="">
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
                    <li><strong>Catégorie</strong>: <?php echo $article['categorie']; ?></li>
                    <li><strong>Client</strong>: <?php echo $article['client']; ?></li>
                    <li><strong>Date du projet</strong>: <?php echo $article['date']; ?></li>
                    <li><strong>URL du projet</strong>: <a href="<?php echo $article['project_url']; ?>"><?php echo $article['project_url']; ?></a></li>
                  </ul>
                </div>
                <div class="portfolio-description">
                  <h2><?php echo $article['title']; ?></h2>
                  <p>
                    <?php echo $article['description']; ?>
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
      $bdd->close();
    } else {
      echo "<p>Identifiant du projet non spécifié.</p>";
    }
  ?>
</body>
</html>
