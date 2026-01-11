# 📘 Semaine 1 - Mercredi : Bases de PHP

**Durée** : 3 heures  
**Objectif** : Maîtriser la syntaxe PHP, les variables et les types de données

---

## 📋 Plan de la séance

1. Rappel et questions (15 min)
2. Syntaxe PHP en détail (30 min)
3. Variables en PHP (45 min)
4. Types de données (30 min)
5. echo vs print (15 min)
6. Exercices guidés (30 min)
7. Synthèse et devoirs (15 min)

---

## 🔄 1. Rappel de la séance précédente

### Quiz rapide

**Question 1** : Où doit-on placer nos fichiers PHP ?  
**Réponse** : Dans le dossier `htdocs` (ou équivalent)

**Question 2** : Comment ouvre-t-on un bloc de code PHP ?  
**Réponse** : Avec `<?php`

**Question 3** : Comment affiche-t-on du texte en PHP ?  
**Réponse** : Avec `echo` ou `print`

**Question 4** : Comment accède-t-on à nos fichiers PHP ?  
**Réponse** : Via `http://localhost/nom-du-fichier.php`

---

## ✍️ 2. Syntaxe PHP en détail

### 🔹 Structure de base

```php
<?php
// Votre code PHP ici
?>
```

**Règles importantes :**

1. **Balises PHP** : Le code PHP doit être entre `<?php` et `?>`
2. **Point-virgule** : Chaque instruction se termine par `;`
3. **Sensibilité à la casse** : 
   - Les mots-clés (`echo`, `if`, `while`) ne sont PAS sensibles à la casse
   - Les variables (`$nom`, `$Nom`) SONT sensibles à la casse
4. **Espaces** : PHP ignore les espaces multiples et les sauts de ligne

---

### 🔹 Commentaires en PHP

Les commentaires permettent de documenter votre code. Ils ne sont pas exécutés.

```php
<?php

// Ceci est un commentaire sur une ligne

# Ceci est aussi un commentaire sur une ligne

/*
   Ceci est un commentaire
   sur plusieurs lignes
   Très utile pour des explications longues
*/

echo "Bonjour"; // Commentaire en fin de ligne

?>
```

**Pourquoi commenter ?**
- ✅ Expliquer votre logique
- ✅ Aider les autres développeurs (ou vous-même plus tard)
- ✅ Désactiver temporairement du code
- ✅ Documenter les fonctions complexes

**Bonnes pratiques :**
```php
<?php
// ✅ BON : Commentaire clair et utile
// Calcul du prix TTC avec une TVA de 20%
$prixTTC = $prixHT * 1.20;

// ❌ MAUVAIS : Commentaire inutile
// Affiche bonjour
echo "Bonjour";
?>
```

---

### 🔹 Instructions et blocs de code

```php
<?php
// Une instruction simple
echo "Bonjour";

// Plusieurs instructions
echo "Ligne 1";
echo "Ligne 2";
echo "Ligne 3";

// Instructions sur plusieurs lignes (possible mais pas recommandé)
echo "Ce texte est
     sur plusieurs
     lignes";
?>
```

---

### 🔹 Affichage avec HTML

PHP génère du HTML, vous pouvez donc mélanger les deux :

```php
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Syntaxe PHP</title>
</head>
<body>
    <h1>Mon site dynamique</h1>
    
    <?php
    echo "<p>Ce paragraphe est généré par PHP</p>";
    echo "<p>Voici un autre paragraphe</p>";
    ?>
    
    <p>Ce paragraphe est du HTML pur</p>
</body>
</html>
```

---

## 📦 3. Variables en PHP

### 🔹 Qu'est-ce qu'une variable ?

Une **variable** est un conteneur qui stocke une valeur. Imaginez une boîte avec une étiquette.

```
┌─────────────────┐
│  Étiquette: $nom│
│                 │
│  Contenu: "Ali" │
└─────────────────┘
```

---

### 🔹 Déclaration et affectation

En PHP, les variables commencent toujours par le symbole **`$`**

```php
<?php

// Déclaration et affectation
$nom = "Hermès";
$age = 25;
$ville = "Kinshasa";

// Afficher une variable
echo $nom;      // Affiche : Hermès
echo $age;      // Affiche : 25
echo $ville;    // Affiche : Kinshasa

?>
```

**Syntaxe :**
```php
$nomDeVariable = valeur;
```

---

### 🔹 Règles de nommage des variables

✅ **AUTORISÉ :**
```php
$nom
$prenom
$age
$ville_naissance
$villeNaissance    // CamelCase
$nombre1
$_variable         // Commence par underscore
```

❌ **INTERDIT :**
```php
$1nombre          // Ne peut pas commencer par un chiffre
$mon-nom          // Pas de tiret
$mon nom          // Pas d'espace
$élève            // Éviter les accents
```

**Convention** : Utilisez des noms descriptifs !
```php
// ✅ BON
$prixProduit = 100;
$nomUtilisateur = "Jean";

// ❌ MAUVAIS
$p = 100;
$x = "Jean";
```

---

### 🔹 Variables et chaînes de caractères

```php
<?php

$prenom = "Hermès";
$nom = "Oliho";

// Concaténation avec le point (.)
echo "Bonjour " . $prenom . " " . $nom;
// Affiche : Bonjour Hermès Oliho

// Interpolation dans les guillemets doubles
echo "Bonjour $prenom $nom";
// Affiche : Bonjour Hermès Oliho

// Avec guillemets simples (pas d'interpolation)
echo 'Bonjour $prenom $nom';
// Affiche : Bonjour $prenom $nom (texte littéral)

?>
```

**Différence importante :**
- **Guillemets doubles `" "`** : Les variables sont interprétées
- **Guillemets simples `' '`** : Les variables ne sont PAS interprétées

---

### 🔹 Modification de variables

```php
<?php

$compteur = 0;
echo $compteur;  // Affiche : 0

$compteur = 5;
echo $compteur;  // Affiche : 5

$compteur = 10;
echo $compteur;  // Affiche : 10

// Une variable peut changer de valeur à tout moment

?>
```

---

### 🔹 Variables et calculs

```php
<?php

$a = 10;
$b = 5;

$somme = $a + $b;
echo "Somme : $somme";  // Affiche : Somme : 15

$difference = $a - $b;
echo "Différence : $difference";  // Affiche : Différence : 5

$produit = $a * $b;
echo "Produit : $produit";  // Affiche : Produit : 50

$quotient = $a / $b;
echo "Quotient : $quotient";  // Affiche : Quotient : 2

?>
```

---

### 🔹 Opérateurs d'affectation combinés

```php
<?php

$nombre = 10;

$nombre = $nombre + 5;  // $nombre vaut maintenant 15

// Équivalent plus court :
$nombre += 5;   // Ajoute 5 à $nombre
$nombre -= 3;   // Soustrait 3 de $nombre
$nombre *= 2;   // Multiplie $nombre par 2
$nombre /= 4;   // Divise $nombre par 4

// Incrémentation et décrémentation
$compteur = 0;
$compteur++;    // Ajoute 1 : $compteur vaut 1
$compteur++;    // Ajoute 1 : $compteur vaut 2
$compteur--;    // Enlève 1 : $compteur vaut 1

?>
```

---

## 🎨 4. Types de données

PHP est un langage à **typage dynamique** : vous n'avez pas besoin de déclarer le type d'une variable.

### 🔹 Les principaux types

#### 1️⃣ **String (Chaîne de caractères)**

Texte entre guillemets.

```php
<?php

$prenom = "Alice";
$message = 'Bonjour tout le monde';
$phrase = "Il a dit : \"Bonjour\""; // Échapper les guillemets

echo $prenom;   // Affiche : Alice

?>
```

#### 2️⃣ **Integer (Entier)**

Nombre sans décimales.

```php
<?php

$age = 25;
$temperature = -10;
$population = 1000000;

echo $age;  // Affiche : 25

?>
```

#### 3️⃣ **Float / Double (Nombre décimal)**

Nombre avec décimales.

```php
<?php

$prix = 19.99;
$temperature = 36.6;
$pi = 3.14159;

echo $prix;  // Affiche : 19.99

?>
```

#### 4️⃣ **Boolean (Booléen)**

Vrai ou faux.

```php
<?php

$estConnecte = true;
$estMajeur = false;

// Utilisé surtout dans les conditions (on verra jeudi)

?>
```

#### 5️⃣ **NULL**

Absence de valeur.

```php
<?php

$variable = null;  // La variable existe mais n'a pas de valeur

?>
```

---

### 🔹 Vérifier le type d'une variable

```php
<?php

$nom = "Alice";
$age = 25;
$prix = 19.99;
$estActif = true;

var_dump($nom);      // string(5) "Alice"
var_dump($age);      // int(25)
var_dump($prix);     // float(19.99)
var_dump($estActif); // bool(true)

?>
```

**`var_dump()`** est très utile pour déboguer (voir le contenu et le type d'une variable).

---

### 🔹 Conversion de types (casting)

```php
<?php

$nombre = "123";  // C'est une chaîne de caractères
$entier = (int)$nombre;  // Conversion en entier

echo $nombre;   // Affiche : 123 (string)
echo $entier;   // Affiche : 123 (int)

// Autres conversions
$texte = "19.99";
$decimal = (float)$texte;   // Convertir en float

$valeur = 10;
$chaine = (string)$valeur;  // Convertir en string

?>
```

---

### 🔹 Opérations entre types différents

PHP convertit automatiquement les types si nécessaire :

```php
<?php

$a = "10";     // String
$b = 5;        // Integer

$resultat = $a + $b;  // PHP convertit "10" en 10
echo $resultat;       // Affiche : 15

// Attention aux pièges !
$x = "10 pommes";
$y = 5;
$z = $x + $y;  // PHP prend le 10 et ignore "pommes"
echo $z;       // Affiche : 15

?>
```

---

## 🖨️ 5. echo vs print

Les deux servent à afficher du contenu, mais il y a quelques différences.

### 🔹 echo

```php
<?php

// Affichage simple
echo "Bonjour";

// Plusieurs arguments (plus rapide)
echo "Bonjour", " ", "tout", " ", "le monde";

// Avec des variables
$nom = "Alice";
echo "Bonjour $nom";

// Afficher du HTML
echo "<h1>Titre</h1>";
echo "<p>Paragraphe</p>";

?>
```

### 🔹 print

```php
<?php

// Affichage simple
print "Bonjour";

// Avec des variables
$nom = "Alice";
print "Bonjour $nom";

// print retourne toujours 1
$resultat = print "Bonjour";  // $resultat vaut 1

?>
```

---

### 🔹 Différences principales

| Caractéristique | echo | print |
|----------------|------|-------|
| Vitesse | Plus rapide | Légèrement plus lent |
| Arguments multiples | ✅ Oui | ❌ Non |
| Retourne une valeur | ❌ Non | ✅ Oui (toujours 1) |
| Utilisation courante | ✅ Très fréquent | Moins fréquent |

**Recommandation** : Utilisez `echo` dans 99% des cas.

---

### 🔹 Sauts de ligne et mise en forme

```php
<?php

// En HTML, les sauts de ligne PHP n'apparaissent pas
echo "Ligne 1";
echo "Ligne 2";  // S'affiche collé à Ligne 1

// Il faut utiliser <br> pour un saut de ligne HTML
echo "Ligne 1<br>";
echo "Ligne 2<br>";

// Ou des balises de paragraphe
echo "<p>Paragraphe 1</p>";
echo "<p>Paragraphe 2</p>";

?>
```

**Dans le code source (pas visible par l'utilisateur) :**
```php
<?php
echo "Ligne 1\n";  // \n = saut de ligne dans le code source
echo "Ligne 2\n";
?>
```

---

## 💪 6. Exercices guidés

### 📝 Exercice 1 : Variables de présentation

**Objectif** : Créer une page de présentation personnelle.

**Consigne** : Créez un fichier `presentation.php` avec :
- Une variable `$prenom`
- Une variable `$nom`
- Une variable `$age`
- Une variable `$ville`
- Affichez : "Je m'appelle [prénom] [nom], j'ai [age] ans et j'habite à [ville]."

**Solution :**
```php
<?php
$prenom = "Hermès";
$nom = "Oliho";
$age = 25;
$ville = "Kinshasa";

echo "Je m'appelle $prenom $nom, j'ai $age ans et j'habite à $ville.";
?>
```

---

### 📝 Exercice 2 : Calculs simples

**Objectif** : Créer une calculatrice basique.

**Consigne** : Créez un fichier `calculatrice.php` qui :
- Définit deux variables `$nombre1` et `$nombre2`
- Affiche leur somme, différence, produit et quotient

**Solution :**
```php
<?php
$nombre1 = 20;
$nombre2 = 4;

echo "Nombre 1 : $nombre1<br>";
echo "Nombre 2 : $nombre2<br><br>";

echo "Addition : " . ($nombre1 + $nombre2) . "<br>";
echo "Soustraction : " . ($nombre1 - $nombre2) . "<br>";
echo "Multiplication : " . ($nombre1 * $nombre2) . "<br>";
echo "Division : " . ($nombre1 / $nombre2) . "<br>";
?>
```

---

### 📝 Exercice 3 : Prix TTC

**Objectif** : Calculer un prix TTC à partir d'un prix HT.

**Consigne** : 
- Prix HT : 100 €
- TVA : 20%
- Calculer et afficher le prix TTC

**Solution :**
```php
<?php
$prixHT = 100;
$tauxTVA = 0.20;  // 20% = 0.20

$montantTVA = $prixHT * $tauxTVA;
$prixTTC = $prixHT + $montantTVA;

echo "Prix HT : $prixHT €<br>";
echo "TVA (20%) : $montantTVA €<br>";
echo "Prix TTC : $prixTTC €<br>";
?>
```

---

### 📝 Exercice 4 : Âge dans 10 ans

**Objectif** : Calculer votre âge dans 10 ans.

**Consigne** : Créez une variable `$ageActuel` et calculez votre âge dans 10 ans.

**Solution :**
```php
<?php
$ageActuel = 25;
$ageDans10Ans = $ageActuel + 10;

echo "Aujourd'hui, j'ai $ageActuel ans.<br>";
echo "Dans 10 ans, j'aurai $ageDans10Ans ans.";
?>
```

---

### 📝 Exercice 5 : Conversion de température

**Objectif** : Convertir des degrés Celsius en Fahrenheit.

**Formule** : °F = (°C × 9/5) + 32

**Consigne** : 
- Température en Celsius : 25°C
- Afficher la température en Fahrenheit

**Solution :**
```php
<?php
$celsius = 25;
$fahrenheit = ($celsius * 9/5) + 32;

echo "$celsius°C = $fahrenheit°F";
?>
```

---

### 📝 Exercice 6 : Page HTML dynamique

**Objectif** : Créer une page HTML complète avec des variables PHP.

**Consigne** : Créez un fichier `profil.php` qui affiche un profil utilisateur avec :
- Photo (URL)
- Nom complet
- Âge
- Bio

**Solution :**
```php
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil utilisateur</title>
    <style>
        .profil {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }
        .profil img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <?php
    $photo = "https://via.placeholder.com/100";
    $nom = "Hermès Oliho";
    $age = 25;
    $bio = "Développeur web passionné par PHP et Laravel.";
    ?>
    
    <div class="profil">
        <img src="<?php echo $photo; ?>" alt="Photo de profil">
        <h2><?php echo $nom; ?></h2>
        <p><strong>Âge :</strong> <?php echo $age; ?> ans</p>
        <p><strong>Bio :</strong> <?php echo $bio; ?></p>
    </div>
</body>
</html>
```

---

### 📝 Exercice 7 : Débogage

**Objectif** : Trouver et corriger les erreurs.

**Code avec erreurs :**
```php
<?php
$nom = "Alice"
$age = 25;
echo "Bonjour $Nom, vous avez age ans.";
?>
```

**Erreurs :**
1. Ligne 2 : Manque le point-virgule
2. Ligne 4 : `$Nom` devrait être `$nom` (sensible à la casse)
3. Ligne 4 : Manque `$` devant `age`

**Code corrigé :**
```php
<?php
$nom = "Alice";
$age = 25;
echo "Bonjour $nom, vous avez $age ans.";
?>
```

---

## 🎯 7. Synthèse de la séance

### Ce que vous avez appris aujourd'hui

✅ Syntaxe PHP (commentaires, instructions)  
✅ Déclaration et utilisation de variables  
✅ Règles de nommage  
✅ Types de données (string, int, float, boolean, null)  
✅ Différence entre `echo` et `print`  
✅ Concaténation et interpolation de chaînes  
✅ Opérations mathématiques avec des variables  

---

### Points clés à retenir

1. **Les variables commencent toujours par `$`**
2. **PHP est sensible à la casse pour les variables**
3. **Guillemets doubles `" "` : interprètent les variables**
4. **Guillemets simples `' '` : texte littéral**
5. **`var_dump()` est votre ami pour déboguer**
6. **Utilisez `echo` dans la plupart des cas**
7. **Nommez vos variables de manière descriptive**

---

## 📚 Devoirs pour Jeudi

### Exercice 1 : Carte de visite

Créez un fichier `carte_visite.php` qui affiche une carte de visite avec :
- Votre nom
- Votre fonction (ex: Développeur web)
- Votre email
- Votre téléphone
- Stylisez avec du CSS

### Exercice 2 : Calcul de TVA avancé

Créez un fichier `tva_multiple.php` qui :
- Calcule le prix TTC de 3 produits différents
- Chaque produit a un prix HT différent
- Affiche un tableau HTML avec : Produit, Prix HT, TVA, Prix TTC

### Exercice 3 : Expérimentation

Testez ces différences :
```php
<?php
$nom = "Alice";

// Testez chacune de ces lignes et observez le résultat
echo "Bonjour $nom";
echo 'Bonjour $nom';
echo "Bonjour " . $nom;
echo 'Bonjour ' . $nom;
?>
```

### Exercice 4 : Mini-projet : Simulateur de salaire

Créez un fichier `salaire.php` qui :
- Définit un salaire brut mensuel
- Calcule les cotisations sociales (23% du brut)
- Calcule le salaire net
- Calcule le salaire annuel (net × 12)
- Affiche tous ces résultats de manière claire

**Exemple attendu :**
```
Salaire brut mensuel : 3000 €
Cotisations sociales (23%) : 690 €
Salaire net mensuel : 2310 €
Salaire net annuel : 27720 €
```

---

## 🔗 Ressources complémentaires

### Documentation
- 📖 Variables PHP : https://www.php.net/manual/fr/language.variables.php
- 📖 Types de données : https://www.php.net/manual/fr/language.types.php
- 📖 Opérateurs : https://www.php.net/manual/fr/language.operators.php

### Outils utiles
- 🛠️ PHP Sandbox (tester du code en ligne) : https://sandbox.onlinephpfunctions.com/
- 🛠️ W3Schools PHP : https://www.w3schools.com/php/

---

## ❓ Questions fréquentes

**Q : Faut-il toujours mettre `$` devant une variable ?**  
R : Oui, toujours ! Sans `$`, PHP pense que c'est une constante ou un mot-clé.

**Q : Peut-on utiliser des accents dans les noms de variables ?**  
R : Techniquement oui, mais c'est fortement déconseillé. Utilisez uniquement a-z, A-Z, 0-9, et _.

**Q : Quelle est la différence entre `=` et `==` ?**  
R : `=` affecte une valeur, `==` compare deux valeurs (on verra ça jeudi avec les conditions).

**Q : Comment afficher le symbole `$` dans echo ?**  
R : Utilisez `echo "\$";` ou `echo '$';`

**Q : Peut-on changer le type d'une variable ?**  
R : Oui ! PHP permet de réaffecter n'importe quel type à une variable.

```php
$variable = "texte";  // string
$variable = 123;      // int maintenant
$variable = true;     // boolean maintenant
```

---

## 🎓 Mini-quiz de fin de séance

**Question 1** : Quelle est la sortie de ce code ?
```php
<?php
$a = "5";
$b = 5;
echo $a + $b;
?>
```
<details>
<summary>Voir la réponse</summary>
Réponse : 10 (PHP convertit "5" en 5)
</details>

**Question 2** : Trouvez l'erreur :
```php
<?php
$prenom = "Alice";
echo "Bonjour Prenom";
?>
```
<details>
<summary>Voir la réponse</summary>
Réponse : Il manque $ devant Prenom → echo "Bonjour $prenom";
</details>

**Question 3** : Quelle est la différence entre ces deux lignes ?
```php
echo "Bonjour $nom";
echo 'Bonjour $nom';
```
<details>
<summary>Voir la réponse</summary>
Réponse : La première interprète $nom, la seconde affiche littéralement "$nom"
</details>

---

**Excellent travail ! Vous maîtrisez maintenant les bases de PHP ! 🎉**

Rendez-vous jeudi pour découvrir la logique de programmation avec les conditions et les opérateurs!