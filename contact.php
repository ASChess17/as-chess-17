<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Vérifier les données
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse email invalide.";
        exit;
    }

    // Paramètres pour envoyer l'email
    $to = "aschess17@gmail.com"; // Ton adresse email
    $fullSubject = "Contact depuis le site : $subject";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoyer l'email
    if (mail($to, $fullSubject, $body, $headers)) {
        echo "Merci, votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur est survenue. Veuillez réessayer plus tard.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
