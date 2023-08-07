<!DOCTYPE html>
<html>
<head>
  <title>Formulaire avec options dépendantes</title>
</head>
<body>
  <form>
    <label for="categorie">Choisissez une catégorie :</label>
    <select id="categorie" name="categorie" onchange="updateOptions()">
      <option value="equitation">Equitation</option>
      <option value="automobile">Automobile</option>
      <option value="objet">Objet</option>
      <option value="mobilier">Mobilier</option>
    </select>

    <div id="option-container">
      <!-- Les options seront ajoutées dynamiquement ici -->
    </div>

    <input type="submit" value="Valider">
  </form>

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
            <select id="sous-categorie" name="sous-categorie">
              <option value="selle">Selle</option>
              <option value="bride">Bride</option>
            </select>
          `;
          break;
        case "automobile":
          optionContainer.innerHTML = `
            <label for="sous-categorie">Sous-catégorie :</label>
            <select id="sous-categorie" name="sous-categorie">
              <option value="capote-de-voiture">Capote de voiture</option>
              <option value="interieur-camping-car">Intérieur camping-car</option>
            </select>
          `;
          break;
        case "objet":
          optionContainer.innerHTML = `
            <label for="sous-categorie">Sous-catégorie :</label>
            <select id="sous-categorie" name="sous-categorie">
              <option value="fourreaux">Fourreaux</option>
              <option value="porte-monnaie">Porte-monnaie</option>
            </select>
          `;
          break;
        case "mobilier":
          optionContainer.innerHTML = `
            <label for="sous-categorie">Sous-catégorie :</label>
            <select id="sous-categorie" name="sous-categorie">
              <option value="coussin-de-chaise">Coussin de chaise</option>
            </select>
          `;
          break;
        default:
          break;
      }
    }
  </script>
</body>
</html>
