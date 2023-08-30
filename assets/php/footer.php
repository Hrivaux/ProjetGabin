<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Sellerie Personeni</h3>
              <p class="pb-3"><em>L'avenir appartient à ceux qui se lèvent tôt.</em></p>
              <p>
                Adresse : <br>
                20 Rue Beau Site, 25160 Labergement-Sainte-Marie<br><br>
                <strong>Téléphone : </strong>06 82 49 05 18<br>
                <strong>Email : </strong>sophie@sellerie-personeni.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/p/Sellerie-Sophie-Personeni-100072507413033/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Lien Utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#hero">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#about">À propose de moi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#portfolio">Mes créations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#services">Mes services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#contact">Contactez moi</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SELLERIE PERSONENI</span></strong>.
      </div>
      <div class="credits"
        <a href="https://bootstrapmade.com/" >Design par BootstrapMade</a> & développement par <a href="https://www.linkedin.com/in/gabin-tournier-a42552210/">Gabin TOURNIER</a>
      </div>
    </div>
  </footer><!-- End Footer -->
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

<script>
$(document).ready(function() {
  // Initialiser Isotope sur la liste d'articles
  var $grid = $('.portfolio-container').isotope({
    itemSelector: '.portfolio-item',
    layoutMode: 'fitRows'
  });

  // Filtrer les articles lorsque l'utilisateur clique sur un filtre
  $('#portfolio-flters li').on('click', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });

    // Appliquer la classe "filter-active" au filtre actif et la retirer des autres
    $('#portfolio-flters li').removeClass('filter-active');
    $(this).addClass('filter-active');
  });
});
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const loadMoreButton = document.getElementById("load-more-button");
        const portfolioContainer = document.querySelector(".portfolio-container");
        const hiddenProjects = <?= json_encode(array_slice($articles, $maxProjectsToShow)) ?>;

        loadMoreButton.addEventListener("click", function() {
            hiddenProjects.forEach(function(article) {
                const newProject = document.createElement("div");
                newProject.className = `col-lg-4 col-md-6 portfolio-item ${article.categorie}`;
                newProject.innerHTML = `
                <!-- Votre contenu de projet ici -->
            `;
                portfolioContainer.appendChild(newProject);
            });

            loadMoreButton.style.display = "none";
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialiser Isotope sur la liste d'articles
        var $grid = $('.portfolio-container').isotope({
            itemSelector: '.portfolio-item',
            layoutMode: 'fitRows'
        });

        // Filtrer les articles lorsque l'utilisateur clique sur un filtre
        $('#portfolio-flters li').on('click', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });

            // Appliquer la classe "filter-active" au filtre actif et la retirer des autres
            $('#portfolio-flters li').removeClass('filter-active');
            $(this).addClass('filter-active');
        });
    });
</script>
</body>

</html>