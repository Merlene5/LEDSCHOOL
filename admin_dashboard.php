<?php
session_start(); // Démarre la session

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['loggedin'])) {
    header('Location: admin_dashboard.php'); // Redirige vers la page de connexion
    exit;
}

// Connexion à la base de données
$host = 'localhost';
$dbname = 'ledschool';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Récupérer les candidatures
$sql = "SELECT * FROM inscription_formation";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$candidatures = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord Administrateur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-5"> Listes des candidatures</h1>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Âge</th>
                <th>Email</th>
                <th>Choix de la formation</th>
                <th>Date de naissance</th>
                <th>Téléphone</th>
                <th>Nationalité</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($candidatures as $candidature): ?>
            <tr>
                <td><?= htmlspecialchars($candidature['nom']) ?></td>
                <td><?= htmlspecialchars($candidature['prenom']) ?></td>
                <td><?= htmlspecialchars($candidature['age']) ?></td>
                <td><?= htmlspecialchars($candidature['email']) ?></td>
                <td><?= htmlspecialchars($candidature['choixFormation']) ?></td>
                <td><?= htmlspecialchars($candidature['dateLieuNaissance']) ?></td>
                <td><?= htmlspecialchars($candidature['telephone']) ?></td>
                <td><?= htmlspecialchars($candidature['nationalite']) ?></td>        
             
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="admin_logout.php" class="btn btn-danger">Se déconnecter</a>
</div>
</body>
</html>