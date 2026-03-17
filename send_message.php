<?php

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Nettoyage des données
    $nom = htmlspecialchars(trim($_POST['nom'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $telephone = htmlspecialchars(trim($_POST['telephone'] ?? ''));
    $sujet = htmlspecialchars(trim($_POST['sujet'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Vérifier champs obligatoires
    if (empty($nom) || empty($email) || empty($message)) {
        header("Location:index.php?error=empty");
        exit;
    }

    // Vérifier email valide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:index.php?error=email");
        exit;
    }

    // Sujet par défaut
    if (empty($sujet)) {
        $sujet = "Message depuis le site";
    }

    $mail = new PHPMailer(true);

    try {

        // Debug SMTP (mettre 2 si problème)
        $mail->SMTPDebug = 0;

        // Configuration SMTP Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'bettothierry005@gmail.com';
        $mail->Password = 'udff frsz jzco cogq';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Correction erreur SSL en local 
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ];

        $mail->CharSet = 'UTF-8';

        // Expéditeur
        $mail->setFrom('bettothierry005@gmail.com', 'Formulaire Site');

        // Destinataire
        $mail->addAddress('bettothierry005@gmail.com', 'Betto');

        // Permet de répondre au visiteur
        $mail->addReplyTo($email, $nom);

        // Email HTML
        $mail->isHTML(true);
        $mail->Subject = "📩 Nouveau message : " . $sujet;

        $mail->Body = "
        <h2>Nouveau message du site</h2>
        <p><strong>Nom :</strong> $nom</p>
        <p><strong>Email :</strong> $email</p>
        <p><strong>Téléphone :</strong> $telephone</p>
        <p><strong>Sujet :</strong> $sujet</p>

        <hr>

        <p><strong>Message :</strong></p>
        <p>$message</p>
        ";

        // Version texte
        $mail->AltBody = "
        Nouveau message du site

        Nom : $nom
        Email : $email
        Téléphone : $telephone
        Sujet : $sujet

        Message :
        $message
        ";

        // Envoi du mail
        $mail->send();

        header("Location:index.php?success=1");
        exit;

    } catch (Exception $e) {

        echo "Erreur : " . $mail->ErrorInfo;

    }
}
?>