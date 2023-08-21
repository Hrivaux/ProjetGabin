


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

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between position-relative">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>Sellerie Personeni</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">A propos de nous</a></li>
          <!--<li><a class="nav-link scrollto" href="#services">Nos prjets </a></li>-->
          <li><a class="nav-link scrollto" href="index.php#services">Mes services</a></li>
          <!--<li><a class="nav-link scrollto" href="#team">Team</a></li>-->
          <!--<li class="dropdown"><a href="#"><span>Mes projets</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
          <?php
// Supposons que vous avez une connexion PDO établie et stockée dans la variable $bdd
// Requête pour récupérer le dernier élément de chaque catégorie
$query = "SELECT * FROM projects GROUP BY categorie ORDER BY id DESC";
$stmt = $bdd->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<li class="dropdown megamenu">
  <a class="nav-link scrollto" href="index.php#portfolio">
    <span>Mes Projets</span> <i class="bi bi-chevron-down"></i>
  </a>
  <ul>
    <?php foreach ($result as $row): ?>
    <li>
      <strong>Mes derniers <?= $row['categorie'] ?></strong>
      <a href="#"><?= $row['titre'] ?></a>
      <!-- Ajoutez plus d'informations sur le projet au besoin -->
    </li>
    <?php endforeach; ?>
  </ul>
</li>
              <!--<li>
                <strong>Column 4</strong>
                <a href="#">Column 4 link 1</a>
                <a href="#">Column 4 link 2</a>
                <a href="#">Column 4 link 3</a>
              </li>
              <li>
                <strong>Column 5</strong>
                <a href="#">Column 5 link 1</a>
                <a href="#">Column 5 link 2</a>
                <a href="#">Column 5 link 3</a>
              </li>-->
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<?php
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
            <li><a href="index.php">Projets</a></li>
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
                    <li><strong>Catégorie</strong>: <?php echo $article['categorie']; ?></li>
                    <li><strong>Client</strong>: <?php echo $article['client']; ?></li>
                    <li><strong>Date du projet</strong>: <?php echo $article['date']; ?></li>
                    <li><strong>URL du projet</strong>: <a href="<?php echo $article['project_url']; ?>"><?php echo $article['project_url']; ?></a></li>
                  </ul>
                </div>
                <div class="portfolio-description">
                  <h1><?php echo $article['titre']; ?></h1>
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
$bdd = null;
} else {
  echo "<p>Identifiant du projet non spécifié.</p>";
}
?>

<?php
    // Inclure le pied de page
    include '<assets/php/footer.php';
    ?>
