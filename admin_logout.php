<?php
session_start(); // Démarre la session
session_destroy(); // Détruit la session
header('Location: admin_login.php'); // Redirige vers la page de connexion
exit; 
?>