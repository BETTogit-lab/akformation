<?php
// === 1. Vérifier que le formulaire a été soumis ===
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: contact.php?status=error&message=Accès non autorisé");
    exit;
}

// === 2. Récupérer et nettoyer les données ===
$nom     = trim($_POST['nom']     ?? '');
$email   = trim($_POST['email']   ?? '');
$sujet   = trim($_POST['sujet']   ?? 'Message du site');
$message = trim($_POST['message'] ?? '');

// === 3. Validation simple côté serveur ===
$errors = [];

if (empty($nom))     $errors[] = "Le nom est obligatoire";
if (empty($email))   $errors[] = "L'email est obligatoire";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email invalide";
if (empty($message)) $errors[] = "Le message ne peut pas être vide";

if (!empty($errors)) {
    header("Location: contact.php?status=error&message=" . urlencode(implode(" - ", $errors)));
    exit;
}

// === 4. Charger PHPMailer ===
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';   // ← si Composer
// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';   ← si installation manuelle

// === 5. Créer l'objet mail ===
$mail = new PHPMailer(true);

try {
    // Configuration serveur SMTP Gmail (2025-2026)
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'ton.email@gmail.com';               // ← TON adresse Gmail
    $mail->Password   = 'xxxx xxxx xxxx xxxx';               // ← mot de passe d'application !
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      // ou ENCRYPTION_SMTPS pour port 465
    $mail->Port       = 587;                                 // 587 avec STARTTLS ou 465 avec SSL

    // Destinataire(s)
    $mail->setFrom($email, $nom);
    $mail->addAddress('bettothierry005@gmail.com');                // ← où tu veux recevoir
    $mail->addReplyTo($email, $nom);

    // Contenu
    $mail->isHTML(true);
    $mail->Subject = "[Site] " . $sujet;
    $mail->Body    = "
        <h2>Nouveau message du site</h2>
        <p><strong>De :</strong> $nom &lt;$email&gt;</p>
        <p><strong>Sujet :</strong> $sujet</p>
        <hr>
        <p>" . nl2br(htmlspecialchars($message)) . "</p>
    ";
    $mail->AltBody = "De : $nom <$email>\nSujet : $sujet\n\n$message";

    $mail->send();

    header("Location: contact.php?status=success");
    exit;

} catch (Exception $e) {
    header("Location: contact.php?status=error&message=" . urlencode("L'envoi a échoué : " . $mail->ErrorInfo));
    exit;
}