<?php
session_start(); // Démarre la session
// Définir les identifiants administratifs
$adminUser = 'admin';
$adminPass = 'password'; 

// Vérifiez si l'utilisateur est déjà connecté
if (isset($_SESSION['loggedin'])) {
    header('Location: admin_dashboard.php'); 
    exit;
}

// Vérifiez les identifiants à chaque accès
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['identifiant']; 
    $password = $_POST['password'];

    if ($username === $adminUser && $password === $adminPass) {
        $_SESSION['loggedin'] = true; // Crée une session
        header('Location: admin_dashboard.php'); // Redirige vers le tableau de bord
        exit;
    } else {
        $error = "Identifiants incorrects. Veuillez réessayer.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Administrateur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8rem;
            font-weight: bold;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .btn-login {
            background-color: #007bff;
            color: white;
            width: 100%;
        }
        .btn-login:hover {
            background-color: #0056b3;
        }
        .password-field {
            position: relative;
        }
        .password-field .toggle-password {
            position: absolute;
            top: 70%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h1>Connexion</h1>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>
    <form method="post">
        <div class="form-group">
            <label for="identifiant">Identifiant</label>
            <input type="text" id="identifiant" name="identifiant" class="form-control" required>
        </div>
        <div class="form-group password-field">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" class="form-control"  required>
            <span class="toggle-password" onclick="togglePassword()">
                <img src="https://img.icons8.com/ios-filled/20/000000/visible.png" alt="Afficher le mot de passe">
            </span>
        </div>
        <button type="submit" class="btn btn-login">Se connecter</button>
    </form>
</div>

<script>
    // Fonction pour basculer la visibilité du mot de passe
    function togglePassword() {
        const passwordInput = document.getElementById("password");
        const toggleIcon = document.querySelector(".toggle-password img");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleIcon.src = "https://img.icons8.com/ios-filled/20/000000/invisible.png";
        } else {
            passwordInput.type = "password";
            toggleIcon.src = "https://img.icons8.com/ios-filled/20/000000/visible.png";
        }
    }
</script>
</body>
</html>