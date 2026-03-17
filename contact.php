<?php
// send_message.php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Nettoyage des données
    $nom       = trim(htmlspecialchars($_POST['nom'] ?? ''));
    $email     = trim(htmlspecialchars($_POST['email'] ?? ''));
    $telephone = trim(htmlspecialchars($_POST['telephone'] ?? ''));
    $sujet     = trim(htmlspecialchars($_POST['sujet'] ?? ''));
    $message   = trim(htmlspecialchars($_POST['message'] ?? ''));

    // Vérification des champs obligatoires
    if (empty($nom) || empty($email) || empty($message)) {
        header("Location: index.php?error=empty#contactForm");
        exit;
    }

    // Vérifier email valide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?error=email#contactForm");
        exit;
    }

    // Sujet par défaut
    if (empty($sujet)) {
        $sujet = "Message depuis le site";
    }

    $mail = new PHPMailer(true);

    try {

        // Debug (mettre 2 pour voir les erreurs)
        $mail->SMTPDebug = 0;

        // Configuration SMTP Gmail
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'bettothierry005@gmail.com';
        $mail->Password   = 'udff frsz jzco cogq'; // mot de passe application
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Encodage
        $mail->CharSet = 'UTF-8';

        // Expéditeur
        $mail->setFrom('bettothierry005@gmail.com', 'Formulaire du site');

        // Destinataire
        $mail->addAddress('bettothierry005@gmail.com', 'Betto');

        // Répondre au visiteur
        $mail->addReplyTo($email, $nom);

        // Format HTML
        $mail->isHTML(true);

        $mail->Subject = "📩 Nouveau message - " . ucfirst($sujet);

        $mail->Body = "
        <h2>Nouveau message depuis le site</h2>

        <p><strong>Nom :</strong> {$nom}</p>
        <p><strong>Email :</strong> {$email}</p>
        <p><strong>Téléphone :</strong> {$telephone}</p>
        <p><strong>Sujet :</strong> {$sujet}</p>

        <hr>

        <p><strong>Message :</strong></p>
        <p>{$message}</p>
        ";

        // Version texte
        $mail->AltBody = "
        Nouveau message depuis le site

        Nom : $nom
        Email : $email
        Téléphone : $telephone
        Sujet : $sujet

        Message :
        $message
        ";

        // Envoi
        $mail->send();

        header("Location: index.php?success=1#contactForm");
        exit;

    } catch (Exception $e) {

        // Pour debug (si problème)
        // echo "Erreur : " . $mail->ErrorInfo;

        header("Location: index.php?error=1#contactForm");
        exit;
    }
}
?>