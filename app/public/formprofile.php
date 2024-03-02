<?php

require_once '../vendor/autoload.php';

use App\Page;

$Page = new Page();
$msg = null;
 $userId = $Page->session->get('id');
if (isset($_POST['enregistrer'])) {
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $mail = $_POST['mail'] ?? '';
    $telephone = $_POST['telephone'] ?? '';
    $adresse_post = $_POST['adresse_post'] ?? '';
    $ville = $_POST['ville'] ?? '';
    $codepostal = $_POST['codepostal'] ?? '';
    $pays = $_POST['pays'] ?? '';
    $image = $_POST['image'] ?? '';
    $linkedin = $_POST['linkedin'] ?? '';
    $twitter = $_POST['twitter'] ?? '';
    $insta = $_POST['insta'] ?? '';
    $fb = $_POST['fb'] ?? '';
    $userdonneesData = [
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $mail,
        'telephone' => $telephone,
        'adressepostal' => $adresse_post,
        'ville' => $ville,
        'codepostal' => $codepostal,
        'pays' => $pays,
        'image' => $image,
        'linkedin' => $linkedin,
        'twitter' => $twitter,
        'insta' => $insta,
        'fb' => $fb,
        'id'=> $userId
    ];

    
    $Page->update_user('users', $userdonneesData);

    header("Location: profile.php");
    exit;
}

// Render formprofile.html.twig
echo $Page->render('profile/formprofile.html.twig', ["msg" => $msg]);
