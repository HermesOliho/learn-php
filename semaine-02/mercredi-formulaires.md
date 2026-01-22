# Semaine 2 - Mercredi : Les Formulaires en PHP 📝

**Durée totale : 3 heures**  
**Date : 15 janvier 2026**

---

## 📋 Plan de la Séance

1. **Introduction aux Formulaires HTML** (15 min)
2. **Les Méthodes GET et POST** (40 min)
3. **Récupération des Données en PHP** (40 min)
4. **Validation et Sécurisation des Données** (35 min)
5. **Traitement et Affichage des Résultats** (35 min)
6. **Exercices Guidés** (30 min)
7. **Résumé et Devoirs** (15 min)

---

## 🎯 Objectifs d'Apprentissage

À la fin de cette leçon, vous serez capable de :

- ✅ Comprendre le fonctionnement des formulaires HTML
- ✅ Différencier les méthodes GET et POST
- ✅ Récupérer les données d'un formulaire avec PHP
- ✅ Valider les données côté serveur
- ✅ Sécuriser les entrées utilisateur
- ✅ Afficher des messages d'erreur et de confirmation
- ✅ Créer un formulaire complet et fonctionnel

---

## 1️⃣ Introduction aux Formulaires HTML (15 min)

### Qu'est-ce qu'un Formulaire ?

Un **formulaire** est une interface qui permet aux utilisateurs d'**envoyer des données** au serveur. C'est le principal moyen d'interaction entre l'utilisateur et l'application web.

### Structure de Base d'un Formulaire HTML

```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Formulaire</title>
</head>
<body>
    <form action="traitement.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
```

### Attributs Importants de la Balise `<form>`

| Attribut | Description | Valeurs Possibles |
|----------|-------------|-------------------|
| `action` | URL du script PHP qui traitera les données | `traitement.php`, `process.php`, etc. |
| `method` | Méthode HTTP utilisée pour envoyer les données | `GET` ou `POST` |
| `enctype` | Type d'encodage (pour les fichiers) | `multipart/form-data` |

### Types d'Inputs Courants

```html
<!-- Texte simple -->
<input type="text" name="prenom">

<!-- Email -->
<input type="email" name="email">

<!-- Mot de passe -->
<input type="password" name="motdepasse">

<!-- Nombre -->
<input type="number" name="age" min="18" max="100">

<!-- Date -->
<input type="date" name="naissance">

<!-- Zone de texte multiligne -->
<textarea name="message" rows="5"></textarea>

<!-- Liste déroulante -->
<select name="pays">
    <option value="fr">France</option>
    <option value="be">Belgique</option>
    <option value="ca">Canada</option>
</select>

<!-- Case à cocher -->
<input type="checkbox" name="newsletter" value="oui">

<!-- Boutons radio -->
<input type="radio" name="genre" value="homme"> Homme
<input type="radio" name="genre" value="femme"> Femme
```

---

## 2️⃣ Les Méthodes GET et POST (40 min)

### La Méthode GET

#### Caractéristiques
- Les données sont **visibles dans l'URL**
- Limitée en taille (environ 2000 caractères)
- Les données peuvent être **mises en cache** et en favoris
- **Idéale pour** : recherches, filtres, pagination

#### Exemple

**Formulaire HTML :**
```html
<form action="recherche.php" method="GET">
    <input type="text" name="q" placeholder="Rechercher...">
    <button type="submit">Rechercher</button>
</form>
```

**URL Résultante :**
```
https://monsite.com/recherche.php?q=php+tutorial
```

**Récupération en PHP :**
```php
<?php
// recherche.php
$recherche = $_GET['q'] ?? '';
echo "Vous avez recherché : " . htmlspecialchars($recherche);
?>
```

### La Méthode POST

#### Caractéristiques
- Les données sont **invisibles dans l'URL**
- **Aucune limite de taille** pratique
- Les données ne sont **pas mises en cache**
- **Idéale pour** : connexion, inscription, envoi de données sensibles

#### Exemple

**Formulaire HTML :**
```html
<form action="inscription.php" method="POST">
    <input type="text" name="nom" required>
    <input type="email" name="email" required>
    <input type="password" name="motdepasse" required>
    <button type="submit">S'inscrire</button>
</form>
```

**Récupération en PHP :**
```php
<?php
// inscription.php
$nom = $_POST['nom'] ?? '';
$email = $_POST['email'] ?? '';
$motdepasse = $_POST['motdepasse'] ?? '';

echo "Inscription de : " . htmlspecialchars($nom);
?>
```

### Comparaison GET vs POST

| Critère | GET | POST |
|---------|-----|------|
| **Visibilité** | Données dans l'URL | Données invisibles |
| **Sécurité** | ⚠️ Moins sécurisé | ✅ Plus sécurisé |
| **Taille** | ~2000 caractères max | Illimitée |
| **Cache** | Peut être mis en cache | Non mis en cache |
| **Historique** | Stocké dans l'historique | Non stocké |
| **Usage** | Recherche, filtres | Formulaires sensibles |

---

## 3️⃣ Récupération des Données en PHP (40 min)

### Les Superglobales PHP

PHP fournit des **tableaux superglobaux** pour accéder aux données des formulaires :

| Superglobale | Description |
|--------------|-------------|
| `$_GET` | Données envoyées via GET |
| `$_POST` | Données envoyées via POST |
| `$_REQUEST` | Combinaison de GET, POST et COOKIE |
| `$_SERVER` | Informations sur le serveur et requête |
| `$_FILES` | Fichiers uploadés |

### Vérifier si un Formulaire est Soumis

```php
<?php
// Méthode 1 : Vérifier la méthode HTTP
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Le formulaire a été soumis
}

// Méthode 2 : Vérifier l'existence d'un champ
if (isset($_POST['nom'])) {
    // Le champ 'nom' existe
}

// Méthode 3 : Vérifier un bouton spécifique
if (isset($_POST['submit'])) {
    // Le bouton 'submit' a été cliqué
}
?>
```

### Récupérer les Données en Toute Sécurité

```php
<?php
// ❌ MAUVAISE PRATIQUE (risque de Notice si la clé n'existe pas)
$nom = $_POST['nom'];

// ✅ BONNE PRATIQUE (avec valeur par défaut)
$nom = $_POST['nom'] ?? ''; 

// ✅ ENCORE MIEUX (avec vérification et nettoyage)
$nom = isset($_POST['nom']) ? trim($_POST['nom']) : '';

// ✅ MÉTHODE MODERNE (PHP 7+)
$nom = $_POST['nom'] ?? 'Anonyme';
?>
```

### Exemple Complet

**Formulaire (contact.html) :**
```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Contact</title>
</head>
<body>
    <h1>Contactez-nous</h1>
    <form action="traitement_contact.php" method="POST">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        
        <button type="submit" name="envoyer">Envoyer</button>
    </form>
</body>
</html>
```

**Traitement (traitement_contact.php) :**
```php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    
    // Affichage (temporaire, pour le test)
    echo "<h2>Message reçu !</h2>";
    echo "<p><strong>Nom :</strong> " . htmlspecialchars($nom) . "</p>";
    echo "<p><strong>Email :</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Message :</strong> " . nl2br(htmlspecialchars($message)) . "</p>";
} else {
    echo "Aucune donnée reçue.";
}
?>
```

---

## 4️⃣ Validation et Sécurisation des Données (35 min)

### Pourquoi Valider les Données ?

1. **Sécurité** : Prévenir les attaques (XSS, SQL Injection)
2. **Intégrité** : S'assurer que les données sont au bon format
3. **Expérience utilisateur** : Fournir des messages d'erreur clairs

### Validation Côté Client vs Côté Serveur

| Type | Avantages | Inconvénients |
|------|-----------|---------------|
| **Client (HTML5/JS)** | Rapide, feedback immédiat | Peut être contournée |
| **Serveur (PHP)** | Sécurisée, obligatoire | Plus lente |

**⚠️ RÈGLE D'OR : Toujours valider côté serveur !**

### Fonctions de Validation PHP

```php
<?php
// Vérifier si un champ est vide
if (empty($_POST['nom'])) {
    echo "Le nom est obligatoire.";
}

// Vérifier la longueur
if (strlen($_POST['nom']) < 2) {
    echo "Le nom doit contenir au moins 2 caractères.";
}

// Valider un email
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "Email invalide.";
}

// Valider un nombre
if (!is_numeric($_POST['age'])) {
    echo "L'âge doit être un nombre.";
}

// Valider une URL
if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
    echo "URL invalide.";
}
?>
```

### Fonctions de Sécurisation PHP

```php
<?php
// 1. htmlspecialchars() - Convertit les caractères spéciaux en entités HTML
$nom = htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8');
// "<script>" devient "&lt;script&gt;"

// 2. trim() - Supprime les espaces au début et à la fin
$nom = trim($_POST['nom']);

// 3. strip_tags() - Supprime les balises HTML et PHP
$texte = strip_tags($_POST['message']);

// 4. filter_input() - Filtre et valide en une seule fonction
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
?>
```

### Exemple de Validation Complète

```php
<?php
$erreurs = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération et nettoyage
    $nom = trim($_POST['nom'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $age = trim($_POST['age'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Validation du nom
    if (empty($nom)) {
        $erreurs[] = "Le nom est obligatoire.";
    } elseif (strlen($nom) < 2) {
        $erreurs[] = "Le nom doit contenir au moins 2 caractères.";
    }
    
    // Validation de l'email
    if (empty($email)) {
        $erreurs[] = "L'email est obligatoire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "L'email n'est pas valide.";
    }
    
    // Validation de l'âge
    if (empty($age)) {
        $erreurs[] = "L'âge est obligatoire.";
    } elseif (!is_numeric($age) || $age < 18 || $age > 120) {
        $erreurs[] = "L'âge doit être un nombre entre 18 et 120.";
    }
    
    // Validation du message
    if (empty($message)) {
        $erreurs[] = "Le message est obligatoire.";
    } elseif (strlen($message) < 10) {
        $erreurs[] = "Le message doit contenir au moins 10 caractères.";
    }
    
    // Si aucune erreur, traiter les données
    if (empty($erreurs)) {
        echo "<h2>✅ Formulaire validé avec succès !</h2>";
        echo "<p><strong>Nom :</strong> " . htmlspecialchars($nom) . "</p>";
        echo "<p><strong>Email :</strong> " . htmlspecialchars($email) . "</p>";
        echo "<p><strong>Âge :</strong> " . htmlspecialchars($age) . "</p>";
        echo "<p><strong>Message :</strong> " . nl2br(htmlspecialchars($message)) . "</p>";
    } else {
        // Afficher les erreurs
        echo "<h2>❌ Erreurs de validation :</h2>";
        echo "<ul>";
        foreach ($erreurs as $erreur) {
            echo "<li>" . htmlspecialchars($erreur) . "</li>";
        }
        echo "</ul>";
    }
}
?>
```

---

## 5️⃣ Traitement et Affichage des Résultats (35 min)

### Formulaire Auto-traité

Un formulaire **auto-traité** est un formulaire dont l'attribut `action` pointe vers lui-même.

```php
<?php
$nom = '';
$email = '';
$message_confirmation = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars(trim($_POST['nom'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    
    if (!empty($nom) && !empty($email)) {
        $message_confirmation = "✅ Merci $nom, votre inscription a été enregistrée !";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Auto-traité</title>
</head>
<body>
    <h1>Inscription</h1>
    
    <?php if ($message_confirmation): ?>
        <div style="background: #d4edda; padding: 10px; border: 1px solid #c3e6cb;">
            <?= $message_confirmation ?>
        </div>
    <?php endif; ?>
    
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="<?= $nom ?>" required>
        </div>
        
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="<?= $email ?>" required>
        </div>
        
        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
```

### Conservation des Valeurs après Soumission

Pour améliorer l'expérience utilisateur, on peut **conserver les valeurs** saisies en cas d'erreur :

```php
<input type="text" name="nom" value="<?= htmlspecialchars($nom ?? '') ?>">
```

### Redirection après Traitement

```php
<?php
if ($formulaire_valide) {
    // Redirection vers une page de confirmation
    header('Location: confirmation.php');
    exit(); // Important : arrêter l'exécution après la redirection
}
?>
```

### Pattern PRG (Post-Redirect-Get)

Le pattern **Post-Redirect-Get** évite la re-soumission du formulaire lors du rafraîchissement de la page.

```php
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars(trim($_POST['nom'] ?? ''));
    
    // Traitement des données...
    
    // Stocker le message dans la session
    $_SESSION['message'] = "Inscription réussie pour $nom !";
    
    // Redirection
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

// Afficher et supprimer le message
$message = $_SESSION['message'] ?? '';
unset($_SESSION['message']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire avec PRG</title>
</head>
<body>
    <?php if ($message): ?>
        <div><?= htmlspecialchars($message) ?></div>
    <?php endif; ?>
    
    <form method="POST">
        <input type="text" name="nom" required>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
```

---

## 6️⃣ Exercices Guidés (30 min)

### Exercice 1 : Formulaire de Connexion Simple

Créez un formulaire de connexion avec :
- Champ "Identifiant" (minimum 3 caractères)
- Champ "Mot de passe" (minimum 6 caractères)
- Validation côté serveur
- Affichage des erreurs

**Solution attendue :**
```php
<?php
$erreurs = [];
$identifiant = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $identifiant = trim($_POST['identifiant'] ?? '');
    $motdepasse = trim($_POST['motdepasse'] ?? '');
    
    if (strlen($identifiant) < 3) {
        $erreurs[] = "L'identifiant doit contenir au moins 3 caractères.";
    }
    
    if (strlen($motdepasse) < 6) {
        $erreurs[] = "Le mot de passe doit contenir au moins 6 caractères.";
    }
    
    if (empty($erreurs)) {
        echo "✅ Connexion réussie pour : " . htmlspecialchars($identifiant);
    }
}
?>
```

### Exercice 2 : Calculateur d'IMC

Créez un formulaire qui calcule l'IMC (Indice de Masse Corporelle) :
- Champ "Poids" (en kg)
- Champ "Taille" (en cm)
- Calcul : IMC = Poids / (Taille en mètres)²
- Affichage du résultat avec interprétation

### Exercice 3 : Formulaire de Sondage

Créez un formulaire de sondage avec :
- Nom (obligatoire)
- Âge (entre 13 et 100)
- Langage préféré (liste déroulante : PHP, JavaScript, Python, Java)
- Newsletter (case à cocher)
- Affichage récapitulatif

---

## 7️⃣ Résumé et Devoirs (15 min)

### Ce qu'on a Appris Aujourd'hui

✅ **Structure des formulaires HTML**  
✅ **Différence entre GET et POST**  
✅ **Récupération des données avec `$_GET` et `$_POST`**  
✅ **Validation côté serveur**  
✅ **Sécurisation avec `htmlspecialchars()` et autres fonctions**  
✅ **Affichage des erreurs et messages de confirmation**  
✅ **Pattern PRG et redirection**

### Points Clés à Retenir

1. **Toujours valider côté serveur** (ne jamais faire confiance au client)
2. **Utiliser `htmlspecialchars()` pour afficher les données utilisateur**
3. **GET pour les recherches, POST pour les données sensibles**
4. **Vérifier l'existence des variables avec `??` ou `isset()`**
5. **Rediriger après traitement pour éviter la re-soumission**

### Devoirs pour Jeudi

1. **Créer un formulaire d'inscription complet** avec :
   - Nom, prénom, email, mot de passe, confirmation du mot de passe
   - Validation de tous les champs
   - Vérification que les deux mots de passe correspondent
   - Affichage des erreurs et message de succès

2. **Créer un mini-calculateur** permettant de :
   - Saisir deux nombres
   - Choisir une opération (+, -, *, /)
   - Afficher le résultat

3. **Bonus** : Créer un formulaire de recherche qui filtre une liste de produits prédéfinie

---

## 📚 Ressources Complémentaires

- [Documentation PHP - Formulaires](https://www.php.net/manual/fr/tutorial.forms.php)
- [W3Schools - PHP Forms](https://www.w3schools.com/php/php_forms.asp)
- [MDN - Formulaires HTML](https://developer.mozilla.org/fr/docs/Learn/Forms)
- [OWASP - Validation des entrées](https://owasp.org/www-project-web-security-testing-guide/) 

---

**Prochain cours : Jeudi - Les Fonctions en PHP 🔧**