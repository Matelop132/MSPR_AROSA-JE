<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Création de Compte</title>
</head>
<body>
    <header>
        <iframe src="/header" width="100%" height="100"></iframe>
    </header>
    <main>
        <h1>Création de Compte</h1>
        <form action="/inscription" method="POST">
            @csrf <!-- Laravel CSRF token -->
            
            <!-- Informations personnelles -->
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="date_naissance">Date de Naissance :</label>
            <input type="date" id="date_naissance" name="date_naissance" required>

            <!-- Informations de contact -->
            <label for="email">Adresse E-mail :</label>
            <input type="email" id="email" name="email" required>

            <label for="mot_de_passe">Mot de Passe :</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required>

            <label for="telephone">Téléphone :</label>
            <input type="tel" id="telephone" name="telephone">

            <!-- Informations d'adresse -->
            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville">

            <label for="code_postal">Code Postal :</label>
            <input type="text" id="code_postal" name="code_postal">

            <label for="nom_voie">Nom de la Voie :</label>
            <input type="text" id="nom_voie" name="nom_voie">

            <label for="numero_voie">Numéro de Voie :</label>
            <input type="text" id="numero_voie" name="numero_voie">

            <!-- Bouton de soumission -->
            <button type="submit">Créer le Compte</button>
        </form>
    </main>
    <footer>
        <iframe src="/footer" width="100%" height="100"></iframe>
    </footer>
</body>
</html>