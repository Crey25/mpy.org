<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $mail = htmlspecialchars($_POST['mail']);
    $message = htmlspecialchars($_POST['message']);
    
    // Adresse e-mail de destination
    $destinataire = "reichcrey@gmail.com"; // <-- REMPLACEZ PAR VOTRE ADRESSE E-MAIL

    // Sujet de l'e-mail
    $sujet = "Nouveau message de contact de: $nom";

    // En-têtes de l'e-mail
    $headers = "From: $mail" . "\r\n" .
               "Reply-To: $mail" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Contenu de l'e-mail
    $corps_email = "Nom: $nom\n";
    $corps_email .= "Email: $mail\n";
    $corps_email .= "Message:\n$message";

    // Envoyer l'e-mail
    if (mail($destinataire, $sujet, $corps_email, $headers)) {
        // Redirection en cas de succès
        header("Location: merci.html");
        exit();
    } else {
        // Gérer les erreurs
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
} else {
    // Si la page est accédée directement
    echo "Méthode de requête non autorisée.";
}
?>