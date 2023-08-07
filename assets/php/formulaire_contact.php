<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer les données du formulaire
  $name = $_POST["Name"];
  $email = $_POST["Email"];
  $categorie = $_POST["categorie"];
  $sous_categorie = $_POST["sous-categorie"];
  $subject = $_POST["Object"];
  $message = $_POST["Message"];

  // Adresse e-mail de destination
  $to = "hrivaux@sfr.fr";

  // En-têtes de l'e-mail
  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

  // Corps de l'e-mail
  $email_content = "
    <h3>Nouveau message depuis le formulaire</h3>
    <p><strong>Nom :</strong> $name</p>
    <p><strong>Email :</strong> $email</p>
    <p><strong>Catégorie :</strong> $categorie</p>
    <p><strong>Sous-catégorie :</strong> $sous_categorie</p>
    <p><strong>Objet :</strong> $subject</p>
    <p><strong>Message :</strong> $message</p>
  ";

  // Envoyer l'e-mail
  if (mail($to, $subject, $email_content, $headers)) {
    echo "Votre message a été envoyé avec succès.";
  } else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
  }
}
?>
