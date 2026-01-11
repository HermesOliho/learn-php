# 📘 Semaine 1 - Lundi : Introduction au PHP

**Durée** : 3 heures  
**Objectif** : Comprendre les bases du développement web dynamique et créer votre premier script PHP

---

## 📋 Plan de la séance

1. Présentation du bootcamp et objectifs (15 min)
2. Web statique vs Web dynamique (30 min)
3. Rôle de PHP dans le développement web (30 min)
4. Installation de l'environnement de développement (45 min)
5. Premier script PHP (45 min)
6. Synthèse et devoirs (15 min)

---

## 🎯 1. Présentation du bootcamp et objectifs

### Bienvenue !

Ce bootcamp est conçu pour vous transformer en développeur web capable de créer des applications complètes avec PHP et Laravel.

### Objectifs du bootcamp

À la fin de ces 12 semaines, vous serez capable de :
- Développer des sites web dynamiques
- Créer des applications avec base de données
- Utiliser le framework Laravel
- Déployer vos projets en ligne
- Travailler en équipe sur des projets réels

### Votre parcours

```
Semaines 1-4  : PHP de base + MySQL
Semaines 5-6  : PHP Orienté Objet + MVC
Semaines 7-11 : Framework Laravel
Semaine 12    : Projet final
```

---

## 🌐 2. Web statique vs Web dynamique

### 🔹 Web statique

Un site web statique affiche **toujours le même contenu** pour tous les visiteurs.

**Exemple** : Une page HTML simple

```html
<!DOCTYPE html>
<html>
<head>
    <title>Mon site statique</title>
</head>
<body>
    <h1>Bonjour tout le monde!</h1>
    <p>Ce texte est toujours identique pour tous les visiteurs.</p>
</body>
</html>
```

**Caractéristiques du web statique :**
- ✅ Rapide à charger
- ✅ Simple à héberger
- ❌ Pas d'interaction avec l'utilisateur
- ❌ Pas de personnalisation
- ❌ Pas de base de données
- ❌ Contenu fixe (HTML/CSS/JavaScript côté client)

**Technologies** : HTML, CSS, JavaScript (pour l'interactivité côté client uniquement)

---

### 🔹 Web dynamique

Un site web dynamique peut **changer de contenu** selon :
- L'utilisateur connecté
- L'heure de la visite
- Les données en base de données
- Les interactions de l'utilisateur

**Exemples de sites dynamiques :**
- 📧 Gmail (affiche VOS emails)
- 🛒 Amazon (affiche des produits personnalisés)
- 📱 Facebook (votre fil d'actualité unique)
- 📺 YouTube (recommandations personnalisées)

**Caractéristiques du web dynamique :**
- ✅ Contenu personnalisé
- ✅ Interaction avec base de données
- ✅ Authentification utilisateur
- ✅ Traitement de formulaires
- ✅ Génération de contenu en temps réel

**Technologies** : PHP, Python, Node.js, Java, Ruby + Base de données (MySQL, PostgreSQL, etc.)

---

### 🔄 Comparaison visuelle

```
WEB STATIQUE
┌─────────────┐
│  Navigateur │
└──────┬──────┘
       │ Demande page.html
       ↓
┌──────────────┐
│   Serveur    │ → Envoie fichier HTML tel quel
└──────────────┘


WEB DYNAMIQUE
┌─────────────┐
│  Navigateur │
└──────┬──────┘
       │ Demande page.php
       ↓
┌──────────────┐
│   Serveur    │ → Exécute PHP
│     PHP      │ → Consulte base de données
└──────┬───────┘
       │ Génère HTML personnalisé
       ↓
┌─────────────┐
│  Navigateur │ → Affiche résultat
└─────────────┘
```

---

## 🐘 3. Rôle de PHP dans le développement web

### Qu'est-ce que PHP ?

**PHP** = **P**HP: **H**ypertext **P**reprocessor (acronyme récursif)

PHP est un **langage de programmation côté serveur** créé en 1995 par Rasmus Lerdorf.

### Pourquoi PHP ?

**Popularité**
- 📊 Utilisé par **77% des sites web** (W3Techs)
- 🌐 WordPress, Wikipedia, Facebook (début) utilisent PHP
- 💼 Énormément d'offres d'emploi

**Avantages**
- ✅ Facile à apprendre pour les débutants
- ✅ Gratuit et open source
- ✅ Compatible avec tous les systèmes (Windows, Mac, Linux)
- ✅ Excellente documentation
- ✅ Grande communauté
- ✅ Nombreux frameworks (Laravel, Symfony, CodeIgniter)

### Que peut-on faire avec PHP ?

1. **Générer du contenu dynamique**
   - Afficher la date et l'heure actuelles
   - Personnaliser l'affichage selon l'utilisateur

2. **Traiter des formulaires**
   - Inscription / Connexion
   - Formulaire de contact
   - Sondages

3. **Interagir avec des bases de données**
   - Créer, lire, modifier, supprimer des données (CRUD)
   - Sauvegarder les informations utilisateurs

4. **Gérer les sessions et cookies**
   - Garder l'utilisateur connecté
   - Panier d'achat en ligne

5. **Manipuler des fichiers**
   - Upload d'images
   - Génération de PDF
   - Lecture/écriture de fichiers

6. **Envoyer des emails**
   - Notifications
   - Newsletters

### Comment PHP fonctionne ?

```
1. Le navigateur demande une page PHP
   └─> http://monsite.com/accueil.php

2. Le serveur web reçoit la demande
   └─> Apache ou Nginx

3. Le serveur exécute le code PHP
   └─> <?php echo "Bonjour"; ?>

4. PHP génère du HTML
   └─> <html><body>Bonjour</body></html>

5. Le serveur envoie le HTML au navigateur
   └─> Le navigateur affiche la page

⚠️ IMPORTANT : Le navigateur ne voit JAMAIS le code PHP, seulement le HTML généré !
```

---

## 🛠️ 4. Installation de l'environnement de développement

Pour développer en PHP, vous avez besoin de :
1. **Un serveur web** (Apache)
2. **PHP** (interpréteur)
3. **MySQL** (base de données)
4. **phpMyAdmin** (interface pour gérer MySQL)

### Solutions tout-en-un

Au lieu d'installer chaque élément séparément, utilisez une solution tout-en-un :

#### 🪟 Pour Windows : **XAMPP**

1. **Télécharger XAMPP**
   - Aller sur : https://www.apachefriends.org
   - Télécharger la version pour Windows

2. **Installation**
   - Lancer l'installateur
   - Choisir le dossier d'installation (ex: `C:\xampp`)
   - Sélectionner : Apache, MySQL, PHP, phpMyAdmin

3. **Démarrer les services**
   - Ouvrir le **XAMPP Control Panel**
   - Cliquer sur "Start" pour **Apache** et **MySQL**
   - Les modules doivent être en vert

4. **Tester l'installation**
   - Ouvrir le navigateur
   - Aller sur : `http://localhost`
   - Vous devriez voir la page d'accueil XAMPP

#### 🍎 Pour Mac : **MAMP**

1. Télécharger sur : https://www.mamp.info
2. Installer l'application
3. Démarrer les serveurs
4. Tester sur `http://localhost:8888`

#### 🐧 Pour Linux : **LAMP**

```bash
# Installation sur Ubuntu/Debian
sudo apt update
sudo apt install apache2 php mysql-server phpmyadmin
```

---

### 📁 Structure des dossiers

Après l'installation de XAMPP, votre dossier racine est :

```
C:\xampp\htdocs\     (Windows)
/Applications/MAMP/htdocs/    (Mac)
/var/www/html/       (Linux)
```

**Règle importante** : Tous vos projets PHP doivent être dans le dossier `htdocs` !

---

### ⚙️ Configuration de l'éditeur de code

**Recommandation** : **Visual Studio Code** (VS Code)

1. **Télécharger VS Code**
   - https://code.visualstudio.com

2. **Extensions recommandées**
   - **PHP Intelephense** : Autocomplétion PHP
   - **PHP Debug** : Debugger
   - **HTML CSS Support** : Support HTML/CSS
   - **Prettier** : Formatage de code

3. **Installer une extension**
   - Ouvrir VS Code
   - Cliquer sur l'icône Extensions (carré à gauche)
   - Rechercher "PHP Intelephense"
   - Cliquer sur "Install"

---

## 🚀 5. Premier script PHP

### Créer votre premier fichier PHP

1. **Ouvrir le dossier htdocs**
   - Aller dans `C:\xampp\htdocs\`

2. **Créer un nouveau dossier**
   - Nommer le : `bootcamp-php`

3. **Créer un fichier**
   - Nom : `bonjour.php`
   - Emplacement : `C:\xampp\htdocs\bootcamp-php\bonjour.php`

4. **Écrire votre premier code PHP**

```php
<?php
echo "Bonjour tout le monde !";
?>
```

5. **Tester dans le navigateur**
   - Ouvrir : `http://localhost/bootcamp-php/bonjour.php`
   - Vous devriez voir : **Bonjour tout le monde !**

---

### 🔍 Explication du code

```php
<?php
// Tout le code PHP doit être entre <?php et ?>

echo "Bonjour tout le monde !";
// echo affiche du texte à l'écran

?>
```

**Points importants :**
- `<?php` : Balise d'ouverture PHP (obligatoire)
- `echo` : Instruction pour afficher du texte
- `"Bonjour tout le monde !"` : Chaîne de caractères (texte)
- `;` : Fin d'instruction (obligatoire)
- `?>` : Balise de fermeture PHP (optionnelle en fin de fichier)

---

### 📝 Exercice 1 : Afficher votre nom

Créer un fichier `monnom.php` qui affiche :
```
Je m'appelle [Votre Nom]
```

**Solution :**
```php
<?php
echo "Je m'appelle Hermès";
?>
```

---

### 📝 Exercice 2 : Mélanger HTML et PHP

PHP peut être intégré dans du HTML !

Créer `index.php` :

```php
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma première page PHP</title>
</head>
<body>
    <h1>Bienvenue sur mon site</h1>
    <p><?php echo "Cette partie est générée par PHP !"; ?></p>
    <p>Cette partie est du HTML pur.</p>
</body>
</html>
```

**Résultat dans le navigateur :**
- L'utilisateur voit le HTML final
- Le PHP a été exécuté et remplacé par le résultat

---

### 📝 Exercice 3 : Afficher la date

PHP peut afficher la date et l'heure actuelles !

```php
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Date dynamique</title>
</head>
<body>
    <h1>Quelle heure est-il ?</h1>
    <p>Nous sommes le : <?php echo date("d/m/Y"); ?></p>
    <p>Il est : <?php echo date("H:i:s"); ?></p>
</body>
</html>
```

**Explication :**
- `date()` : Fonction PHP pour afficher la date/heure
- `"d/m/Y"` : Format jour/mois/année
- `"H:i:s"` : Format heure:minutes:secondes

---

### 🎨 Exercice 4 : Calculs simples

PHP peut faire des calculs mathématiques !

```php
<?php
echo "5 + 3 = ";
echo 5 + 3;
echo "<br>"; // Saut de ligne en HTML

echo "10 - 4 = ";
echo 10 - 4;
echo "<br>";

echo "6 x 7 = ";
echo 6 * 7;
echo "<br>";

echo "20 ÷ 4 = ";
echo 20 / 4;
?>
```

**Résultat :**
```
5 + 3 = 8
10 - 4 = 6
6 x 7 = 42
20 ÷ 4 = 5
```

---

## 🎯 6. Synthèse de la séance

### Ce que vous avez appris aujourd'hui

✅ Différence entre web statique et web dynamique  
✅ Rôle et utilité de PHP  
✅ Installation de l'environnement XAMPP  
✅ Structure d'un fichier PHP  
✅ Première utilisation de `echo`  
✅ Intégration de PHP dans HTML  

### Points clés à retenir

1. **PHP s'exécute côté serveur**, pas dans le navigateur
2. **Le code PHP est entre `<?php` et `?>`**
3. **Chaque instruction se termine par `;`**
4. **`echo` permet d'afficher du contenu**
5. **Les fichiers PHP doivent être dans `htdocs`**
6. **On accède aux fichiers via `http://localhost/`**

---

## 📚 Devoirs pour Mercredi

### Exercice 1 : Page de présentation
Créer un fichier `presentation.php` qui affiche :
- Votre nom
- Votre âge
- Votre ville
- La date du jour
- Un calcul de votre choix

### Exercice 2 : Expérimentation
Essayer de :
- Afficher plusieurs lignes avec `echo`
- Utiliser `<br>` pour les sauts de ligne
- Mélanger HTML et PHP dans la même page
- Changer les formats de date (chercher sur Google : "PHP date format")

### Exercice 3 : Recherche
Chercher sur internet :
- Quelle est la différence entre `echo` et `print` ?
- À quoi sert la fonction `phpinfo()` ?
- Tester `phpinfo()` et observer le résultat

---

## 🔗 Ressources complémentaires

- 📖 Documentation PHP officielle : https://www.php.net/manual/fr/
- 🎥 Tutoriels PHP : https://www.youtube.com (rechercher "PHP débutant")
- 💬 Communauté : Stack Overflow (en anglais)
- 📚 W3Schools PHP : https://www.w3schools.com/php/

---

## ❓ Questions fréquentes

**Q : Pourquoi ma page PHP affiche le code au lieu de l'exécuter ?**  
R : Vous n'avez pas démarré Apache ou vous n'accédez pas via `http://localhost`

**Q : J'ai une erreur "Cannot modify header information"**  
R : Il y a du texte ou un espace avant `<?php`. Le fichier doit commencer directement par `<?php`

**Q : Faut-il toujours mettre `?>`à la fin ?**  
R : Non, c'est même recommandé de ne PAS le mettre pour éviter des erreurs

**Q : Quelle est la différence entre .php et .html ?**  
R : .html est statique, .php peut contenir du code PHP qui sera exécuté

---

**Bravo ! Vous avez terminé votre première séance de PHP ! 🎉**

Rendez-vous mercredi pour approfondir la syntaxe PHP et les variables !