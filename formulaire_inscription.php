<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <style>
        .form-container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 50px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .form-group label {
            font-weight: 600;
            font-size: 1.1rem;
        }
        .btn{
            background-color: #0b1da5;
            color: white;
            text-transform: uppercase;
           
            padding: 10px
        }
        .btn:hover{
            background-color: black;
            color: white;
           
        }
       
    </style>
</head>
<body>

<div class="container form-container">
    <h3 class="mb-4 " style="font-weight: 600; font-size: 2rem;">Formulaire d'inscription</h3>
    <form>

        <!-- Informations personnelles -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nom">Nom<span style="color:red">*</span></label>
                <input type="text" class="form-control" id="nom" required>
            </div>
            <div class="form-group col-md-6">
                <label for="prenom">Prénom (s)<span style="color:red">*</span></label>
                <input type="text" class="form-control" id="prenom" required>
            </div>
        </div>
        
        <!-- Age, Sexe, etc. -->
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="age">Age <span style="color:red">*</span></label>
                <input type="number" class="form-control" id="age" required>
            </div>
            <div class="form-group col-md-4">
                <label for="sexe">Sexe <span style="color:red">*</span></label>
                <select id="sexe" class="form-control" required>
                    <option>Masculin</option>
                    <option>Féminin</option>
                    <option>Autre</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="email">Adresse mail <span style="color:red">*</span></label>
                <input type="email" class="form-control" id="email" required>
            </div>
        </div>

        <!-- Champs supplémentaires -->
        <div class="form-group">
            <label for="nationalite">Nationalité <span style="color:red">*</span></label>
            <input type="text" class="form-control" id="nationalite" required>
        </div>

        <div class="form-group">
            <label for="dateLieuNaissance">Date et lieu de naissance <span style="color:red">*</span></label>
            <input type="text" class="form-control" id="dateLieuNaissance" required>
        </div>

        <div class="form-group">
            <label for="telephone">Numéro de téléphone  *</label>
            <input type="tel" class="form-control" id="telephone" required>
        </div>

        <div class="form-group">
            <label for="adresseResidence">Adresse de résidence *</label>
            <input type="text" class="form-control" id="adresseResidence" required>
        </div>

        <!-- Motivation et autres informations -->
        <div class="form-group">
            <label for="motivation">Motivation <span style="color:red">*</span></label>
            <textarea class="form-control" id="motivation" rows="3" placeholder="Pourquoi voulez-vous rejoindre cette formation?"></textarea>
        </div>
        <div class="form-group">
            <label for="decouverteEcole">Comment avez-vous découvert l'école ?<span style="color:red">*</span></label>
            <textarea class="form-control" id="decouverteEcole" rows="3"></textarea>
        </div>

        <!-- Bouton d'envoi -->
        <div  style="text-align: center">
        <button type="submit" class="btn">Envoyer</button>
        </div>

    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
