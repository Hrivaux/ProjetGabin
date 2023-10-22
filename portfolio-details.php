<?php
include('assets/php/sql.php')
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sellerie Personeni</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .swiper-slide img {
      height: 500px;
      /* Hauteur fixe pour chaque image (ajustez selon vos besoins) */
      width: 100%;
      /* Ajustez la largeur à 100% pour remplir le conteneur */
      object-fit: contain;
      /* Conserver le ratio de l'image et ajuster pour tout afficher */
    }
  </style>

</head>

<?php
include('assets/php/header.php');

if (isset($_GET['article_id'])) {
  $article_id = $_GET['article_id'];

  // Préparez et exécutez la requête SQL pour récupérer le titre de l'article
  $sql = "SELECT titre FROM projects WHERE id = :article_id";
  $stmt = $bdd->prepare($sql);
  $stmt->bindParam(':article_id', $article_id, PDO::PARAM_INT);
  $stmt->execute();

  // Vérifier si l'article avec l'identifiant donné existe dans la base de données
  if ($stmt->rowCount() > 0) {
    $article = $stmt->fetch(PDO::FETCH_ASSOC);
    $titre_article = $article['titre'];
  } else {
    $titre_article = "Projet non trouvé";
  }
} else {
  $titre_article = "Identifiant du projet non spécifié";
}
?>

<main id="main">
  <br><br>
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Détails du Projet</h2>
        <ol>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="index.php#portfolio">Projets</a></li>
          <li>Détails du projet <?php echo $titre_article; ?></li>
        </ol>
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->


  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <?php
              if (isset($_GET['article_id'])) {
                $article_id = $_GET['article_id'];

                // Préparez et exécutez la requête SQL pour récupérer les images associées à l'article
                $sql = "SELECT image FROM image_projets WHERE id_projets = :article_id";
                $stmt = $bdd->prepare($sql);
                $stmt->bindParam(':article_id', $article_id, PDO::PARAM_INT);
                $stmt->execute();

                // Afficher les images dans le carousel
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  echo '<div class="swiper-slide">
                          <img src="' . $row['image'] . '" alt="">
                        </div>';
                }
              }
              ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>


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
            <div class="col-lg-4">
              <div class="portfolio-info">
                <h3>Informations sur le projet</h3>
                <ul>
                  <li><strong>Titre </strong>: <?php echo $article['titre']; ?></li>
                  <li><strong>Catégorie </strong>: <?php echo $article['categorie']; ?></li>
                  <li><strong>Description </strong>: <?php echo $article['description']; ?></li>
                  <li><strong>Méthode employée </strong>: Couture </li>
                  <li><strong>Matériaux utilisés </strong>: Cuire</li>

                </ul>
              </div>


            </div>
      </div>
    </div>
  </section>
<?php
          } else {
            echo "<p>Oops, on dirait que ce projet n'existe pas!</p>";
          }

          $bdd = null;
        } else {
          echo "<p>Identifiant du projet non spécifié.</p>";
        }
?>

<?php
// Inclure le pied de page
include 'assets/php/footer.php';
?>