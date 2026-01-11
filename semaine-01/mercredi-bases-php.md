# Mercredi - Les Bases de PHP

## 📚 Objectifs du jour
- Comprendre la syntaxe de base de PHP
- Maîtriser les variables et leurs types
- Différencier `echo` et `print`
- Pratiquer avec des exercices guidés

---

## 1. Syntaxe de Base PHP

### Structure d'un fichier PHP

```php
<?php
// Votre code PHP ici
?>
```

### Points importants :
- **Balises d'ouverture** : `<?php` (toujours obligatoire)
- **Balises de fermeture** : `?>` (optionnel si le fichier contient uniquement du PHP)
- **Point-virgule** : Chaque instruction se termine par `;`
- **Commentaires** :
  ```php
  // Commentaire sur une ligne
  
  /* Commentaire
     sur plusieurs
     lignes */
  
  # Commentaire style shell (moins utilisé)
  ```

### Exemple de base
```php
<?php
echo "Bonjour, monde!";
// Pas besoin de ?> à la fin si c'est du PHP pur
```

---

## 2. Variables en PHP

### Déclaration et règles

```php
<?php
$nom = "Alice";           // Variable texte
$age = 25;                // Variable nombre entier
$prix = 19.99;            // Variable nombre décimal
$estActif = true;         // Variable booléenne
```

### Règles de nommage :
- ✅ Commence par `$`
- ✅ Suivi d'une lettre ou underscore `_`
- ✅ Peut contenir lettres, chiffres, underscores
- ❌ Sensible à la casse (`$nom` ≠ `$Nom`)
- ❌ Pas d'espaces ni de caractères spéciaux

### Conventions de nommage

```php
<?php
// Camel Case (recommandé)
$nomComplet = "Jean Dupont";
$nombreDeVisiteurs = 150;

// Snake Case (alternative)
$nom_complet = "Jean Dupont";
$nombre_de_visiteurs = 150;
```

---

## 3. Types de Données

### Types Scalaires

#### String (Chaîne de caractères)
```php
<?php
$simple = 'Texte simple';
$double = "Texte avec $simple";  // Interpolation possible
$concat = 'Bonjour' . ' ' . 'monde';  // Concaténation
```

#### Integer (Entier)
```php
<?php
$positif = 42;
$negatif = -15;
$hexadecimal = 0x1A;  // 26 en décimal
```

#### Float (Nombre décimal)
```php
<?php
$pi = 3.14159;
$scientifique = 1.5e3;  // 1500
```

#### Boolean (Booléen)
```php
<?php
$vrai = true;
$faux = false;
```

### Types Composés

#### Array (Tableau)
```php
<?php
// Tableau indexé
$fruits = ["pomme", "banane", "orange"];

// Tableau associatif
$personne = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 30
];
```

#### NULL
```php
<?php
$vide = null;
```

### Vérifier le type

```php
<?php
$valeur = 42;

var_dump($valeur);      // Affiche type et valeur détaillés
echo gettype($valeur);  // Affiche "integer"

// Tests de type
is_string($valeur);     // false
is_int($valeur);        // true
is_float($valeur);      // false
is_bool($valeur);       // false
is_array($valeur);      // false
is_null($valeur);       // false
```

---

## 4. Echo vs Print

### Echo

```php
<?php
echo "Hello World";
echo "Une", " ", "phrase", " ", "complète";  // Accepte plusieurs arguments

// Pas de valeur de retour
$resultat = echo "test";  // ERREUR
```

**Caractéristiques :**
- ✅ Plus rapide (légèrement)
- ✅ Peut afficher plusieurs arguments
- ❌ N'a pas de valeur de retour
- ✅ Pas de parenthèses nécessaires

### Print

```php
<?php
print "Hello World";
print("Hello avec parenthèses");  // Parenthèses optionnelles

// Retourne toujours 1
$resultat = print "test";  // $resultat = 1
```

**Caractéristiques :**
- ❌ Légèrement plus lent
- ❌ Un seul argument
- ✅ Retourne toujours 1
- ✅ Peut être utilisé dans des expressions

### Comparaison

```php
<?php
// Echo - Usage courant
echo "Nom : ", $nom, " Age : ", $age;

// Print - Usage dans expression
$variable = print "test";  // Possible mais rare

// Les deux fonctionnent de la même façon pour l'affichage simple
echo "Bonjour";
print "Bonjour";
```

### Recommandation
💡 **Utilisez `echo`** dans la plupart des cas pour de meilleures performances.

---

## 5. Exercices Guidés

### Exercice 1 : Variables et Types
**Objectif** : Créer et manipuler différentes variables

```php
<?php
// TODO : Créez les variables suivantes
// 1. $prenom avec votre prénom
// 2. $nom avec votre nom
// 3. $age avec votre âge
// 4. $taille avec votre taille en mètres (ex: 1.75)
// 5. $estEtudiant avec true ou false

// Exemple de solution :
$prenom = "Alice";
$nom = "Martin";
$age = 22;
$taille = 1.68;
$estEtudiant = true;

// Affichage
echo "Prénom : " . $prenom . "\n";
echo "Nom : " . $nom . "\n";
echo "Âge : " . $age . " ans\n";
echo "Taille : " . $taille . " m\n";
echo "Étudiant : " . ($estEtudiant ? "Oui" : "Non") . "\n";
?>
```

### Exercice 2 : Concaténation
**Objectif** : Combiner des chaînes de caractères

```php
<?php
$ville = "Paris";
$pays = "France";
$population = 2161000;

// TODO : Créez une phrase complète avec ces variables
// Format attendu : "Paris est une ville de France avec 2161000 habitants."

// Solution :
$phrase = $ville . " est une ville de " . $pays . " avec " . $population . " habitants.";
echo $phrase;

// Alternative avec interpolation
$phrase2 = "$ville est une ville de $pays avec $population habitants.";
echo $phrase2;
?>
```

### Exercice 3 : Calculs avec Variables
**Objectif** : Effectuer des opérations mathématiques

```php
<?php
// TODO : Calculez les valeurs suivantes
$prixHT = 100;
$tauxTVA = 0.20;  // 20%

// 1. Calculez le montant de la TVA
$montantTVA = $prixHT * $tauxTVA;

// 2. Calculez le prix TTC
$prixTTC = $prixHT + $montantTVA;

// 3. Affichez les résultats
echo "Prix HT : " . $prixHT . " €\n";
echo "TVA (20%) : " . $montantTVA . " €\n";
echo "Prix TTC : " . $prixTTC . " €\n";
?>
```

### Exercice 4 : Vérification de Types
**Objectif** : Tester et afficher les types de variables

```php
<?php
$valeur1 = "123";
$valeur2 = 123;
$valeur3 = 123.45;
$valeur4 = true;
$valeur5 = null;

// TODO : Utilisez var_dump() pour afficher le type et la valeur de chaque variable
echo "=== Analyse des types ===\n\n";

echo "Valeur 1 :\n";
var_dump($valeur1);

echo "\nValeur 2 :\n";
var_dump($valeur2);

echo "\nValeur 3 :\n";
var_dump($valeur3);

echo "\nValeur 4 :\n";
var_dump($valeur4);

echo "\nValeur 5 :\n";
var_dump($valeur5);
?>
```

### Exercice 5 : Tableaux Simple
**Objectif** : Créer et manipuler un tableau

```php
<?php
// TODO : Créez un tableau avec vos 3 films préférés
$films = ["Inception", "Matrix", "Interstellar"];

// Affichage
echo "Mes films préférés :\n";
echo "1. " . $films[0] . "\n";
echo "2. " . $films[1] . "\n";
echo "3. " . $films[2] . "\n";

// Bonus : Ajoutez un film
$films[] = "The Prestige";
echo "4. " . $films[3] . "\n";
?>
```

### Exercice 6 : Tableau Associatif
**Objectif** : Créer un profil utilisateur

```php
<?php
// TODO : Créez un tableau associatif représentant un utilisateur
$utilisateur = [
    "nom" => "Dupont",
    "prenom" => "Sophie",
    "email" => "sophie.dupont@example.com",
    "age" => 28,
    "ville" => "Lyon"
];

// Affichage formaté
echo "=== Profil Utilisateur ===\n\n";
echo "Nom complet : " . $utilisateur["prenom"] . " " . $utilisateur["nom"] . "\n";
echo "Email : " . $utilisateur["email"] . "\n";
echo "Âge : " . $utilisateur["age"] . " ans\n";
echo "Ville : " . $utilisateur["ville"] . "\n";
?>
```

### Exercice 7 : Echo vs Print
**Objectif** : Comparer les deux méthodes d'affichage

```php
<?php
$message1 = "Première ligne";
$message2 = "Deuxième ligne";

// Avec echo
echo "=== Utilisation d'echo ===\n";
echo $message1, " | ", $message2, "\n";

// Avec print
echo "\n=== Utilisation de print ===\n";
print $message1 . " | " . $message2 . "\n";

// Print dans une expression
$resultat = print "\nPrint retourne : ";
echo $resultat . "\n";  // Affiche 1
?>
```

---

## 📝 Mini-Projet : Carte de Visite

Créez un script PHP qui affiche votre carte de visite virtuelle en utilisant tout ce que vous avez appris :

```php
<?php
// Informations personnelles
$nom = "MARTIN";
$prenom = "Alice";
$profession = "Développeuse Web";
$email = "alice.martin@example.com";
$telephone = "+33 6 12 34 56 78";
$ville = "Paris";
$competences = ["PHP", "JavaScript", "MySQL", "HTML/CSS"];
$anneesExperience = 3;

// Affichage de la carte de visite
echo "╔════════════════════════════════════════╗\n";
echo "║         CARTE DE VISITE                ║\n";
echo "╠════════════════════════════════════════╣\n";
echo "║                                        ║\n";
echo "║  " . $prenom . " " . $nom . "\n";
echo "║  " . $profession . "\n";
echo "║                                        ║\n";
echo "║  📧 " . $email . "\n";
echo "║  📱 " . $telephone . "\n";
echo "║  📍 " . $ville . "\n";
echo "║                                        ║\n";
echo "║  🛠️  Compétences :                     ║\n";
foreach ($competences as $competence) {
    echo "║     • " . $competence . "\n";
}
echo "║                                        ║\n";
echo "║  💼 " . $anneesExperience . " ans d'expérience\n";
echo "║                                        ║\n";
echo "╚════════════════════════════════════════╝\n";
?>
```

---

## 🎯 Points Clés à Retenir

1. **Syntaxe** : `<?php` pour commencer, `;` pour terminer les instructions
2. **Variables** : Toujours préfixées par `$`, sensibles à la casse
3. **Types** : String, Integer, Float, Boolean, Array, NULL
4. **Echo** : Plus rapide, plusieurs arguments, pas de retour
5. **Print** : Un argument, retourne 1
6. **Concaténation** : Utilisez `.` pour joindre des chaînes
7. **Interpolation** : Variables dans des guillemets doubles

---

## 📚 Ressources Supplémentaires

- [Documentation PHP Officielle](https://www.php.net/manual/fr/)
- [PHP: The Right Way](https://phptherightway.com/)
- [W3Schools PHP Tutorial](https://www.w3schools.com/php/)

---

## ✅ Checklist de Progression

- [ ] J'ai compris la syntaxe de base de PHP
- [ ] Je sais créer et utiliser des variables
- [ ] Je connais les différents types de données
- [ ] Je peux expliquer la différence entre echo et print
- [ ] J'ai complété tous les exercices guidés
- [ ] J'ai créé mon mini-projet de carte de visite

---

**Prochaine étape** : Semaine 01 - Jeudi - Opérateurs et Structures de Contrôle

*Créé le 2026-01-11*
