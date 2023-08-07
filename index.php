
<?php
    // Inclure le pied de page
    include 'assets/php/header.php';
    ?>
    
<body>



  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Welcome to Squad</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="">
      <h1>Ma Présentation en Photos</h1>
    <p>Bienvenue sur ma page de présentation! Voici quelques photos qui me représentent :</p>

    <div class="photo-gallery">
        <img src="assets/img/buger.png" alt="Photo 1" onclick="showImage('assets/img/buger.png')">
        <img src="chemin/vers/photo2.jpg" alt="Photo 2" onclick="showImage('chemin/vers/photo2.jpg')">
        <img src="chemin/vers/photo3.jpg" alt="Photo 3" onclick="showImage('chemin/vers/photo3.jpg')">
        <!-- Ajoutez ici d'autres images si nécessaire -->
    </div>

    <div class="photo-modal" onclick="hideImage()">
        <img id="modal-image" src="" alt="Image agrandie">
    </div>

    <p class="photo-description">Cliquez sur une image pour l'agrandir.</p>

    <p>Merci de visiter ma page!</p>

    <script>
        function showImage(imageSrc) {
            const modal = document.querySelector('.photo-modal');
            const modalImage = document.getElementById('modal-image');
            modalImage.src = imageSrc;
            modal.style.display = 'flex';
        }

        function hideImage() {
            const modal = document.querySelector('.photo-modal');
            modal.style.display = 'none';
        }
    </script>
</body>
</html>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts  section-bg">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> consequuntur quae</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
   <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section>
  -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Mes Projets</h2>
          <p>Vous pourrez trouver ci dessous tout les projets que j'ai déjà réalisé : </p>
        </div>

        <div class="row" data-aos="fade-in">
  <div class="col-lg-12 d-flex justify-content-center">
    <ul id="portfolio-flters">
      <li data-filter="*" class="filter-active">Tout</li>
      <li data-filter=".equitation">Equitation</li>
      <li data-filter=".automobile">Automobile</li>
      <li data-filter=".autre">Autre</li>
    </ul>
  </div>
</div>

        <div class="row portfolio-container" data-aos="fade-up">

        
       <?php $sql = "SELECT * FROM projects";
    $stmt = $bdd->query($sql);

    // Vérifier si des articles existent dans la base de données
    if ($stmt->rowCount() > 0) {
      while ($article = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Récupérez la catégorie de l'article
        $category = $article['categorie'];
        // Remplacez les espaces par des tirets et convertissez en minuscules pour obtenir le nom de classe
        $category_class = 'filter-' . strtolower(str_replace(' ', '-', $category));
  ?>
         <div class="col-lg-4 col-md-6 portfolio-item <?php echo $category_class; ?>">
    <div class="portfolio-wrap">
      <img src="<?php echo $article['image1']; ?>" class="img-fluid custom-img" alt="">
      <div class="portfolio-links">
        <a href="<?php echo $article['image1']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
        <a href="portfolio-details.php?article_id=<?php echo $article['id']; ?>" title="More Details"><i class="bx bx-link"></i></a>
      </div>
    </div>
  </div>
  <?php
      }
    } else {
      echo "<p>Aucun article trouvé dans la base de données.</p>";
    }
  ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <!--<section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div> 

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>-->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>L'Equipe</h2>
          <p>Nous accordons une grandes importance à notre équipe que nous vous présentons ci-dessous : </p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="150">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Plusieurs manière de me contacter : </h2>
          <p>Pour réaliser nimporte lesquel de vos projets vous pouvez me contacter avec les manières suivantes :</p>
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
              <h3>Mon mail : </h3>
              <p>sophiebitz@windowslive.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Mon téléphone : </h3>
              <p>06 82 49 05 18</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110917.14384974421!2d6.309105780405189!3d46.720538242456435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478dafb9b2bfd21f%3A0x3d8e5398cdceca22!2s20%20Rue%20Beau%20Site%2C%2025160%20Labergement-Sainte-Marie!5e0!3m2!1sfr!2sfr!4v1636912268752!5m2!1sfr!2sfr" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="assets/php/formulaire_contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="Name" class="form-control" id="name" placeholder="Votre Nom" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="Email" id="email" placeholder="Votre Email" required>
            </div>
            <br><br><br>
            <div class="form-group">
            <input type="text" class="form-control" name="Object" id="subject" placeholder="Objet" required>
          </div>
          <br><br>
          </div>
          <div class="form-group">
            <label for="categorie"></label>
            <select id="categorie" name="categorie" onchange="updateOptions()" required class="form-control">
              <option value="" disabled selected>Choisissez une catégorie</option>
              <option value="equitation">Equitation</option>
              <option value="automobile">Automobile</option>
              <option value="objet">Objet</option>
              <option value="mobilier">Mobilier</option>
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
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
    // Inclure le pied de page
    include '<assets/php/footer.php';
    ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <!-- Vendor JS Files -->
  
  <script>
    function updateOptions() {
      // Récupérer la valeur sélectionnée dans la liste déroulante "categorie"
      const selectedCategorie = document.getElementById("categorie").value;

      // Récupérer le conteneur des options
      const optionContainer = document.getElementById("option-container");

      // Vider le conteneur des options actuelles
      optionContainer.innerHTML = "";

      // Ajouter les nouvelles options en fonction de la catégorie sélectionnée
      switch (selectedCategorie) {
        case "equitation":
          optionContainer.innerHTML = `
            <label for="sous-categorie">Sous-catégorie :</label>
            <select id="sous-categorie" name="sous-categorie" required>
              <option value="" disabled selected>Choisissez une sous-catégorie</option>
              <option value="selle">Selle</option>
              <option value="bride">Bride</option>
            </select>
          `;
          break;
        case "automobile":
          optionContainer.innerHTML = `
            <label for="sous-categorie">Sous-catégorie :</label>
            <select id="sous-categorie" name="sous-categorie" required>
              <option value="" disabled selected>Choisissez une sous-catégorie</option>
              <option value="capote-de-voiture">Capote de voiture</option>
              <option value="interieur-camping-car">Intérieur camping-car</option>
            </select>
          `;
          break;
        case "objet":
          optionContainer.innerHTML = `
            <label for="sous-categorie">Sous-catégorie :</label>
            <select id="sous-categorie" name="sous-categorie" required>
              <option value="" disabled selected>Choisissez une sous-catégorie</option>
              <option value="fourreaux">Fourreaux</option>
              <option value="porte-monnaie">Porte-monnaie</option>
            </select>
          `;
          break;
        case "mobilier":
          optionContainer.innerHTML = `
            <label for="sous-categorie">Sous-catégorie :</label>
            <select id="sous-categorie" name="sous-categorie" required>
              <option value="" disabled selected>Choisissez une sous-catégorie</option>
              <option value="coussin-de-chaise">Coussin de chaise</option>
            </select>
          `;
          break;
        default:
          break;
      }
    }
  </script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>