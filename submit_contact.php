<?php
session_start();
require_once 'includes/db.php';
require_once 'includes/mail_config.php';

// Importation de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

function send_response($status, $msg = '') {
    $isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
    
    if ($isAjax) {
        header('Content-Type: application/json');
        echo json_encode(['status' => $status, 'message' => $msg]);
        exit;
    } else {
        header("Location: index.php?status=$status&msg=$msg");
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prenom = trim($_POST['prenom'] ?? '');
    $nom = trim($_POST['nom'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telephone = trim($_POST['telephone'] ?? '');
    $type_demande = $_POST['type_demande'] ?? 'chiot';
    $message = trim($_POST['message'] ?? '');
    
    // Champs spécifiques selon le type
    $question_specifique = null;
    if ($type_demande === 'chiot') {
        $question_specifique = trim($_POST['chiot_question'] ?? '');
    } elseif ($type_demande === 'bilan') {
        $question_specifique = trim($_POST['bilan_question'] ?? '');
    }

    // Validation
    if (empty($prenom) || empty($nom) || empty($email) || empty($message)) {
        send_response('error', 'Veuillez remplir tous les champs obligatoires.');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        send_response('error', 'L\'adresse email est invalide.');
    }

    if (!in_array($type_demande, ['chiot', 'bilan', 'mushing'])) {
        $type_demande = 'chiot'; // fallback
    }

    // Insertion BDD
    try {
        $stmt = $pdo->prepare("INSERT INTO contacts (prenom, nom, email, telephone, type_demande, question_specifique, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$prenom, $nom, $email, $telephone, $type_demande, $question_specifique, $message]);
    } catch (Exception $e) {
        send_response('error', 'Erreur de base de données.');
    }

    // Envoi de l'email
    $mail = new PHPMailer(true);

    try {
        // Configuration Serveur
        $mail->isSMTP();
        $mail->Host       = $smtp_host;
        $mail->SMTPAuth   = true;
        $mail->Username   = $smtp_user;
        $mail->Password   = $smtp_pass;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // ssl (port 465)
        $mail->Port       = $smtp_port;
        $mail->CharSet    = 'UTF-8';

        // Destinataires
        $mail->setFrom($smtp_user, 'Wapidogs Family - Site Web');
        $mail->addAddress($smtp_user); // Quentin s'envoie un email à lui-même
        $mail->addReplyTo($email, "$prenom $nom");

        // Contenu
        $mail->isHTML(true);
        $subjectType = ucfirst($type_demande);
        $mail->Subject = "Nouvelle demande de contact : $subjectType";
        
        $body = "<h2>Nouvelle demande de contact depuis le site Wapidogs Family</h2>";
        $body .= "<strong>Type de demande :</strong> $subjectType<br>";
        $body .= "<strong>Prénom :</strong> " . htmlspecialchars($prenom) . "<br>";
        $body .= "<strong>Nom :</strong> " . htmlspecialchars($nom) . "<br>";
        $body .= "<strong>Email :</strong> " . htmlspecialchars($email) . "<br>";
        $body .= "<strong>Téléphone :</strong> " . htmlspecialchars($telephone) . "<br><br>";
        
        if ($question_specifique) {
            $body .= "<strong>Question spécifique :</strong> " . nl2br(htmlspecialchars($question_specifique)) . "<br><br>";
        }
        
        $body .= "<strong>Message :</strong><br>" . nl2br(htmlspecialchars($message)) . "<br>";

        $mail->Body    = $body;
        $mail->AltBody = strip_tags(str_replace('<br>', "\n", $body));

        $mail->send();
        
        // Redirection succès
        send_response('success', 'Merci, votre demande a bien été envoyée, nous vous recontactons sous 48h.');
    } catch (Exception $e) {
        // L'email a échoué mais l'insertion BDD a réussi
        send_response('error', 'Une erreur est survenue lors de l\'envoi de l\'email.');
    }
} else {
    // Redirection si accès direct sans POST
    header('Location: index.php');
    exit;
}
?>
