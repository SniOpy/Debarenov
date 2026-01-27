<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../phpmailer/src/Exception.php';
require __DIR__ . '/../phpmailer/src/PHPMailer.php';
require __DIR__ . '/../phpmailer/src/SMTP.php';

header('Content-Type: application/json; charset=UTF-8');

/* ===========================
   MÉTHODE HTTP
=========================== */

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        "success" => false,
        "message" => "Méthode non autorisée"
    ]);
    exit;
}

/* ===========================
   CHARGEMENT .ENV (FIX ERREUR 1)
=========================== */

$env = parse_ini_file(__DIR__ . '/../.env');


if ($env === false) {
    echo json_encode([
        "success" => false,
        "message" => "Erreur de configuration serveur."
    ]);
    exit;
}

$smtpHost = $env['SMTP_HOST'] ?? '';
$smtpPort = $env['SMTP_PORT'] ?? '';
$smtpUser = $env['SMTP_USER'] ?? '';
$smtpPass = $env['SMTP_PASS'] ?? '';

/* ===========================
   CHAMPS COMMUNS
=========================== */

$nom       = trim($_POST['nom'] ?? $_POST['fullname'] ?? '');
$email     = trim($_POST['email'] ?? '');
$telephone = trim($_POST['telephone'] ?? '');
$message   = trim($_POST['message'] ?? '');

/* ===========================
   DÉTECTION FORMULAIRE
=========================== */

$isDevis = isset($_POST['service']);

/* ===========================
   VALIDATION
=========================== */

if ($nom === '' || $email === '' || $telephone === '' || $message === '') {
    echo json_encode([
        "success" => false,
        "message" => "Veuillez remplir tous les champs obligatoires."
    ]);
    exit;
}

/* ===========================
   CHAMPS DEVIS (OPTIONNELS)
=========================== */

$clientType = trim($_POST['client_type'] ?? '');
$company    = trim($_POST['company'] ?? '');
$service    = trim($_POST['service'] ?? '');

/* ===========================
   SMTP CONFIG
=========================== */

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $smtpHost;
    $mail->SMTPAuth   = true;
    $mail->Username   = $smtpUser;
    $mail->Password   = $smtpPass;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = $smtpPort;

    $mail->CharSet  = 'UTF-8';
    $mail->Encoding = 'quoted-printable';

    $mail->setFrom($smtpUser, 'Site Debarenov');
    $mail->addAddress($smtpUser);
    $mail->addReplyTo($email, $nom);

    $safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

    if ($isDevis) {

        $mail->Subject = '📄 Nouvelle demande de devis – DEBARENOV';

        $mail->Body = "
        <html><body>
            <h2>Nouvelle demande de devis</h2>
            <p><strong>Nom :</strong> {$nom}</p>
            <p><strong>Email :</strong> {$email}</p>
            <p><strong>Téléphone :</strong> {$telephone}</p>
            <hr>
            <p><strong>Client :</strong> {$clientType}</p>"
            . ($company ? "<p><strong>Société :</strong> {$company}</p>" : "") . "
            <p><strong>Prestation :</strong> {$service}</p>
            <hr>
            <p><strong>Détails :</strong><br>{$safeMessage}</p>
        </body></html>";

    } else {

        $mail->Subject = '📩 Nouveau message – Site Debarenov';

        $mail->Body = "
        <html><body>
            <h2>Nouveau message du site</h2>
            <p><strong>Nom :</strong> {$nom}</p>
            <p><strong>Email :</strong> {$email}</p>
            <p><strong>Téléphone :</strong> {$telephone}</p>
            <hr>
            <p><strong>Message :</strong><br>{$safeMessage}</p>
        </body></html>";
    }

    $mail->isHTML(true);
    $mail->send();

    echo json_encode([
        "success" => true,
        "message" => $isDevis
            ? "Votre demande de devis a bien été envoyée."
            : "Votre message a bien été envoyé."
    ]);

} catch (Exception $e) {
    echo json_encode([
        "success" => false,
        "message" => "Erreur SMTP : " . $mail->ErrorInfo
    ]);
}
