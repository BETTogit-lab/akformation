<?php
// === PARTIE TRAITEMENT (en haut du fichier) ===
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$erreurs = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération et nettoyage
    $nom       = trim($_POST['nom'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $telephone = trim($_POST['telephone'] ?? '');
    $sujet     = trim($_POST['sujet'] ?? '');
    $message   = trim($_POST['message'] ?? '');

    // Validations
    if (empty($nom))          $erreurs[] = "Le nom est obligatoire.";
    if (empty($email))        $erreurs[] = "L'email est obligatoire.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $erreurs[] = "Email invalide.";
    if (empty($message))      $erreurs[] = "Le message est obligatoire.";

    if (empty($erreurs)) {
        // Chemins corrects (utilise __DIR__ pour éviter les problèmes)
        require __DIR__ . '/PHPMailer/src/Exception.php';
        require __DIR__ . '/PHPMailer/src/PHPMailer.php';
        require __DIR__ . '/PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);

        // IMPORTANT : Pour tester sur localhost/WAMP → temporaire !
        // Enlève ces lignes une fois en ligne ou quand cacert.pem marche
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            ]
        ];

        try {
            // Debug pour voir ce qui se passe (mets à 0 en prod)
            $mail->SMTPDebug = 2;  // 0 = off, 2 = debug détaillé

            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'bettothierry005@gmail.com';  // Vérifie que c'est bien ton compte
            $mail->Password   = 'abcd efgh ijkl mnop';        // ← App Password (pas mot de passe normal !)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->CharSet = 'UTF-8';

            // Expéditeur (doit être le même que Username pour Gmail)
            $mail->setFrom($mail->Username, 'Formulaire AK Formations - ' . $nom);
            $mail->addAddress('bettothierry005@gmail.com');   // Destinataire (toi)
            $mail->addReplyTo($email, $nom);                  // Répondre au visiteur

            $mail->isHTML(true);
            $mail->Subject = 'Nouvelle demande - ' . ($sujet ?: 'Contact site');

            $body = "
            <h2>Nouvelle demande de contact</h2>
            <p><strong>Nom :</strong> " . htmlspecialchars($nom) . "</p>
            <p><strong>Email :</strong> " . htmlspecialchars($email) . "</p>
            <p><strong>Téléphone :</strong> " . htmlspecialchars($telephone) . "</p>
            <p><strong>Sujet :</strong> " . htmlspecialchars($sujet) . "</p>
            <hr>
            <p><strong>Message :</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
            ";

            $mail->Body    = $body;
            $mail->AltBody = strip_tags($body);

            $mail->send();
            $success = true;

        } catch (Exception $e) {
            $erreurs[] = "Erreur d'envoi : " . $mail->ErrorInfo;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de contact</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
  <h2 class="text-center mb-4">Contactez-nous</h2>

  <?php if ($success): ?>
    <div class="alert alert-success alert-dismissible fade show">
      Message envoyé avec succès ! Nous vous répondrons rapidement.
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  <?php endif; ?>

  <?php if (!empty($erreurs)): ?>
    <div class="alert alert-danger">
      <ul class="mb-0">
        <?php foreach ($erreurs as $err): ?>
          <li><?= htmlspecialchars($err) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <form method="POST" class="bg-white p-4 rounded shadow">
    <div class="mb-3">
      <label class="form-label">Nom complet *</label>
      <input type="text" name="nom" class="form-control" required value="<?= htmlspecialchars($nom ?? '') ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Email *</label>
      <input type="email" name="email" class="form-control" required value="<?= htmlspecialchars($email ?? '') ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Téléphone</label>
      <input type="tel" name="telephone" class="form-control" value="<?= htmlspecialchars($telephone ?? '') ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Sujet</label>
      <select name="sujet" class="form-select">
        <option value="">-- Choisir --</option>
        <option value="formation" <?= ($sujet ?? '') === 'formation' ? 'selected' : '' ?>>Formation</option>
        <option value="info" <?= ($sujet ?? '') === 'info' ? 'selected' : '' ?>>Demande d'info</option>
        <option value="autre">Autre</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Message *</label>
      <textarea name="message" rows="5" class="form-control" required><?= htmlspecialchars($message ?? '') ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary w-100">Envoyer</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>