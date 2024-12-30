<?php
// Connexion à la base de données
$host = '127.0.0.1'; // Adresse du serveur MySQL
$dbname = 'u924654367_led'; // Nom de la base de données
$user = 'u924654367_led'; // Nom d'utilisateur MySQL
$pass = 'McJ[|Kw6a+5'; // Mot de passe MySQL

try {
    // Création de la connexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données depuis le formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $age = (int) $_POST['age'];
    $sexe = htmlspecialchars($_POST['sexe']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $nationalite = htmlspecialchars($_POST['nationalite']);
    $dateLieuNaissance = htmlspecialchars($_POST['dateLieuNaissance']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $adresseResidence = htmlspecialchars($_POST['adresseResidence']);
    $choixFormation = htmlspecialchars($_POST['choixFormation']);
    $motivation = htmlspecialchars($_POST['motivation']);
    $decouverteEcole = htmlspecialchars($_POST['decouverteEcole']);

    
    // Validation de base
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Adresse e-mail invalide.");
    }

    try {
        // Requête d'insertion
        $sql = "INSERT INTO  inscription_formation  (
            nom, prenom, age, sexe, email, nationalite, dateLieuNaissance ,
            telephone, adresseResidence, choixFormation, motivation, decouverteEcole
        ) VALUES (
            :nom, :prenom, :age, :sexe, :email, :nationalite, :dateLieuNaissance,
            :telephone, :adresseResidence, :choixFormation, :motivation, :decouverteEcole
        )";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'age' => $age,
            'sexe' => $sexe,
            'email' => $email,
            'nationalite' => $nationalite,
            'dateLieuNaissance' => $dateLieuNaissance,
            'telephone' => $telephone,
            'adresseResidence' => $adresseResidence,
            'choixFormation' => $choixFormation,
            'motivation' => $motivation,
            'decouverteEcole' => $decouverteEcole,
        ]);

        echo "Inscription réussie !";
    } catch (PDOException $e) {
        // Gestion des erreurs (ex : email déjà utilisé)
        if ($e->getCode() == 23000) {
            die("Erreur : cet e-mail est déjà utilisé.");
        }
        die("Erreur : " . $e->getMessage());
    }
}
?>
