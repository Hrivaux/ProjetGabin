
<?php
    include 'assets/php/header.php';
    ?>
    
<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      
      
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <section id="about" class="section-bg about">
      <div class="container">
      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <span>À propos de moi</span>
          <h2>À propos de moi</h2>
          <p>Voici ma présentation</p>
        </div>
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/ceinture4.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Voici ma présentation en quelques mots.</h3>
            <p class="fst-italic">
              texte à remplir
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Texte à remplir.</li>
              <li><i class="bi bi-check-circle"></i> Texte à remplir.</li>
              <li><i class="bi bi-check-circle"></i> Texte à remplir.</li>
            </ul>
            <p>
              Texte à remplir ici
            </p>
          </div>
        </div>

      </div>
    </section>

    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <span>Services</span>
          <h2>Services</h2>
          <p>Vous retrouverez ci-dessous les différents services que je propose.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Confection d'équipements pour chevaux</a></h4>
              <p class="description">Bref texte descriptif</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Confection d'équipements pour voitures/bateaux</a></h4>
              <p class="description">Bref texte descriptif</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Confection d'objets (fourreaux/portes monnaie)</a></h4>
              <p class="description">Bref texte descriptif</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Confection de mobiliers</a></h4>
              <p class="description">Bref texte descriptif</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="counts" class="counts  section-bg">
      <div class="container">
      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <span>Quelques chiffres clés</span>
          <h2>Quelques chiffres clés</h2>
          <p>Retrouvez ci-dessous les chiffres clés</p>
        </div>
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile">     </i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p style="text-align: left;"><strong>Projets réalisés</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Autre</strong> titre</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Autre</strong> titre</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Autre</strong> titre</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <span>Mes créations</span>
          <h2>Mes créations</h2>
          <p>Retrouvez ci-dessous mes galeries de créations. </p>
        </div>

        <div class="row" data-aos="fade-in">
        
        
        <?php
$query_categories = "SELECT DISTINCT categorie FROM projects";
$stmt_categories = $bdd->prepare($query_categories);
$stmt_categories->execute();
$categories = $stmt_categories->fetchAll(PDO::FETCH_COLUMN);

$query_articles = "SELECT * FROM projects";
$stmt_articles = $bdd->prepare($query_articles);
$stmt_articles->execute();
$articles = $stmt_articles->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="col-lg-12 d-flex justify-content-center">
  <ul id="portfolio-flters">
    <li data-filter="*" class="filter-active">Tout</li>
    <?php foreach ($categories as $category): ?>
      <li data-filter=".<?= strtolower($category) ?>"><?= $category ?></li>
    <?php endforeach; ?>
  </ul>
</div>
</div>

<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
  <?php foreach ($articles as $article): ?>
    <div class="col-lg-4 col-md-6 portfolio-item <?= strtolower($article['categorie']) ?>">
      <img src="<?= $article['image1'] ?>" class="img-fluid" alt="">
      <div class="portfolio-info">
        <h4><?= $article['titre'] ?></h4>
        <p style="text-align: left;"><?= $article['categorie'] ?></p>
        <a href="<?= $article['image1'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
        <a href="portfolio-details.php?article_id=<?= $article['id'] ?>" class="details-link" title="Plus de détails"><i class="bx bx-link"></i></a>
      </div>
    </div>
  <?php endforeach; ?>
</div>
</div>
        </div>

      </div>
    </section>

    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <span>Me Contacter</span>
          <h2>Me Contacter</h2>
          <p>Vous pouvez me joindre par une de ces différentes façons : </p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Mon adresse : </h3>
              <p>20 Rue Beau Site, 25160 Labergement-Sainte-Marie</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Mon adresse mail : </h3>
              <p>sophie@sellerie-personeni.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Mon numéro de téléphone : </h3>
              <p>06 82 49 05 18</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110917.14384974421!2d6.309105780405189!3d46.720538242456435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478dafb9b2bfd21f%3A0x3d8e5398cdceca22!2s20%20Rue%20Beau%20Site%2C%2025160%20Labergement-Sainte-Marie!5e0!3m2!1sfr!2sfr!4v1636912268752!5m2!1sfr!2sfr" frameborder="0" style="border:0; width: 100%; height: 600px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="assets/php/formulaire_contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="Name" class="form-control" id="name" placeholder="Votre nom" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Votre prénom" required>
            </div>
            <br><br><br>
            <div class="row">
            <div class="col-md-6 form-group">
              <input type="tel" name="tel" class="form-control" id="tel" placeholder="Votre téléphone" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="Email" id="email" placeholder="Votre email" required>
            </div>
            <br><br><br>
            <div class="form-group">
            <input type="text" class="form-control" name="Object" id="subject" placeholder="Sujet" required>
          </div>
          <br>
          </div>
          <div class="form-group">
            <label for="categorie"></label>
            <select id="categorie" name="categorie"  class="form-control">
              <option value="" disabled selected>Choisissez une catégorie :</option>
              <option value="bovin">Matériels bovins</option>
              <option value="equin">Matériel équins</option>
              <option value="bateau">Coussin bateaux</option>
              <option value="automobile">Intérieurs automobile</option>
              <option value="maroquinerie">Maroquineries</option>
              <option value="ceinture">Ceintures</option>
              <option value="jacuzzi">Houuse de Jacuzzi</option>
              <option value="canape">Canapé</option>
              <option value="terrasse">Matériel terrasse et extérieur</option>
            </select>
          </div>
          <div class="form-group">
            <label for="categorie2"></label>
            <select id="categorie2" name="categorie2"  class="form-control">
              <option value="" disabled selected>Choisissez votre statut :</option>
              <option value="pro">Professionnel</option>
              <option value="particulier">Particulier</option>
              
            </select>
          </div>
          <div id="option-container">
            <!-- Les options seront ajoutées dynamiquement ici -->
          </div>

          <br>
          <div class="form-group">
            <textarea class="form-control" name="Message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Chargement</div>
            <div class="error-message"></div>
            <div class="sent-message">Votre message a été envoyé, Merci Beaucoup !</div>
          </div>
          <div class="text-center"><button type="submit" class="btn btn-primary">Envoyer le message</button></div>
        </form>
      </div>
    </div>
  </div>
          </div>

        </div>

      </div>
    </section>

  </main>

  <?php
    // Inclure le pied de page
    include '<assets/php/footer.php';
    ?>

  