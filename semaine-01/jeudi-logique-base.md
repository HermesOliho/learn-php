# 📘 Semaine 1 - Jeudi : Logique de base

**Durée** : 3 heures  
**Objectif** : Maîtriser les opérateurs et les structures conditionnelles en PHP

---

## 📋 Plan de la séance

1. Rappel et questions (15 min)
2. Les opérateurs en PHP (45 min)
3. Les conditions - if / else / elseif (45 min)
4. La structure switch (30 min)
5. Exercices guidés (30 min)
6. Synthèse et devoirs (15 min)

---

## 🔄 1. Rappel de la séance précédente

### Quiz rapide

**Question 1** : Comment déclare-t-on une variable en PHP ?  
**Réponse** : `$nomVariable = valeur;`

**Question 2** : Quelle est la différence entre `"texte $var"` et `'texte $var'` ?  
**Réponse** : Les guillemets doubles interprètent les variables, les guillemets simples non

**Question 3** : Comment afficher le type d'une variable ?  
**Réponse** : Avec `var_dump($variable)`

**Question 4** : Que fait l'opérateur `++` ?  
**Réponse** : Il incrémente (ajoute 1) à une variable

---

## ⚙️ 2. Les opérateurs en PHP

Les opérateurs permettent d'effectuer des opérations sur les variables et les valeurs.

### 🔹 Opérateurs arithmétiques

Ces opérateurs effectuent des calculs mathématiques.

```php
<?php
$a = 10;
$b = 3;

echo $a + $b;  // Addition : 13
echo $a - $b;  // Soustraction : 7
echo $a * $b;  // Multiplication : 30
echo $a / $b;  // Division : 3.333...
echo $a % $b;  // Modulo (reste de la division) : 1
echo $a ** $b; // Puissance : 1000 (10³)
?>
```

**Le modulo `%` expliqué :**
```php
<?php
echo 10 % 3;  // Affiche 1 (10 ÷ 3 = 3 reste 1)
echo 15 % 4;  // Affiche 3 (15 ÷ 4 = 3 reste 3)
echo 20 % 5;  // Affiche 0 (20 ÷ 5 = 4 reste 0)

// Utilisation pratique : vérifier si un nombre est pair
$nombre = 8;
if ($nombre % 2 == 0) {
    echo "$nombre est pair";
}
?>
```

---

### 🔹 Opérateurs de comparaison

Ces opérateurs comparent deux valeurs et retournent `true` (vrai) ou `false` (faux).

```php
<?php
$a = 10;
$b = 5;
$c = "10";

// Égalité (valeur uniquement)
var_dump($a == $b);   // false (10 n'est pas égal à 5)
var_dump($a == $c);   // true (10 égal "10", PHP convertit)

// Identité (valeur ET type)
var_dump($a === $c);  // false (10 est int, "10" est string)
var_dump($a === 10);  // true (même valeur ET même type)

// Différent
var_dump($a != $b);   // true (10 est différent de 5)
var_dump($a !== $c);  // true (types différents)

// Comparaisons
var_dump($a > $b);    // true (10 est plus grand que 5)
var_dump($a < $b);    // false
var_dump($a >= 10);   // true (supérieur ou égal)
var_dump($a <= 5);    // false
?>
```

**⚠️ Important : `==` vs `===`**

```php
<?php
$nombre = 0;
$chaine = "";
$faux = false;

// == compare les valeurs (avec conversion)
var_dump($nombre == $faux);   // true (0 et false sont "équivalents")
var_dump($chaine == $faux);   // true

// === compare valeur ET type (recommandé !)
var_dump($nombre === $faux);  // false (int vs boolean)
var_dump($chaine === $faux);  // false (string vs boolean)

// Recommandation : Utilisez toujours === et !== pour éviter les surprises !
?>
```

---

### 🔹 Opérateurs logiques

Ces opérateurs combinent plusieurs conditions.

```php
<?php
$age = 25;
$permis = true;

// ET logique (AND) : && ou "and"
// Les deux conditions doivent être vraies
if ($age >= 18 && $permis) {
    echo "Vous pouvez conduire";
}

// OU logique (OR) : || ou "or"
// Au moins une condition doit être vraie
$weekend = true;
$vacances = false;
if ($weekend || $vacances) {
    echo "Pas de travail !";
}

// NON logique (NOT) : !
// Inverse la valeur booléenne
$pluie = false;
if (!$pluie) {
    echo "Il fait beau !";
}
?>
```

**Table de vérité :**

| A | B | A && B | A \|\| B | !A |
|---|---|--------|----------|-----|
| true | true | true | true | false |
| true | false | false | true | false |
| false | true | false | true | true |
| false | false | false | false | true |

---

### 🔹 Opérateurs d'affectation

```php
<?php
$nombre = 10;

$nombre += 5;   // $nombre = $nombre + 5  → 15
$nombre -= 3;   // $nombre = $nombre - 3  → 12
$nombre *= 2;   // $nombre = $nombre * 2  → 24
$nombre /= 4;   // $nombre = $nombre / 4  → 6

// Incrémentation et décrémentation
$compteur = 5;
$compteur++;    // $compteur = 6
++$compteur;    // $compteur = 7
$compteur--;    // $compteur = 6
--$compteur;    // $compteur = 5
?>
```

**Différence entre `$i++` et `++$i` :**

```php
<?php
// Post-incrémentation ($i++)
$a = 5;
$b = $a++;  // $b reçoit 5, puis $a devient 6
echo "a = $a, b = $b";  // a = 6, b = 5

// Pré-incrémentation (++$i)
$x = 5;
$y = ++$x;  // $x devient 6, puis $y reçoit 6
echo "x = $x, y = $y";  // x = 6, y = 6
?>
```

---

### 🔹 Opérateur ternaire

Raccourci pour une condition simple.

**Syntaxe :** `condition ? valeur_si_vrai : valeur_si_faux`

```php
<?php
$age = 20;

// Version longue avec if/else
if ($age >= 18) {
    $statut = "Majeur";
} else {
    $statut = "Mineur";
}

// Version courte avec ternaire
$statut = ($age >= 18) ? "Majeur" : "Mineur";
echo $statut;  // Affiche : Majeur

// Autre exemple
$note = 15;
$resultat = ($note >= 10) ? "Admis" : "Recalé";
echo $resultat;  // Affiche : Admis
?>
```

---

## 🔀 3. Les conditions - if / else / elseif

Les conditions permettent d'exécuter du code uniquement si une condition est vraie.

### 🔹 Structure if simple

```php
<?php
$age = 20;

if ($age >= 18) {
    echo "Vous êtes majeur";
}
// Si la condition est vraie, le code entre { } est exécuté
?>
```

**Syntaxe :**
```php
if (condition) {
    // Code exécuté si la condition est vraie
}
```

---

### 🔹 Structure if / else

```php
<?php
$age = 15;

if ($age >= 18) {
    echo "Vous êtes majeur";
} else {
    echo "Vous êtes mineur";
}
?>
```

**Organigramme :**
```
        ┌─────────────┐
        │ age >= 18 ? │
        └──────┬──────┘
               │
        ┌──────┴──────┐
        │             │
      OUI            NON
        │             │
        ▼             ▼
   "Majeur"      "Mineur"
```

---

### 🔹 Structure if / elseif / else

Pour tester plusieurs conditions successives.

```php
<?php
$note = 15;

if ($note >= 16) {
    echo "Excellent !";
} elseif ($note >= 14) {
    echo "Très bien";
} elseif ($note >= 12) {
    echo "Bien";
} elseif ($note >= 10) {
    echo "Passable";
} else {
    echo "Insuffisant";
}
?>
```

**Important :** Seul le premier bloc dont la condition est vraie est exécuté !

---

### 🔹 Conditions multiples

```php
<?php
$age = 25;
$permis = true;

// Avec ET logique
if ($age >= 18 && $permis) {
    echo "Vous pouvez conduire";
} else {
    echo "Vous ne pouvez pas conduire";
}

// Avec OU logique
$role = "admin";
$estProprietaire = true;

if ($role === "admin" || $estProprietaire) {
    echo "Accès autorisé";
} else {
    echo "Accès refusé";
}
?>
```

---

### 🔹 Conditions imbriquées

```php
<?php
$age = 25;
$permis = true;
$voiture = true;

if ($age >= 18) {
    if ($permis) {
        if ($voiture) {
            echo "Vous pouvez conduire votre voiture";
        } else {
            echo "Vous avez le permis mais pas de voiture";
        }
    } else {
        echo "Vous êtes majeur mais sans permis";
    }
} else {
    echo "Vous êtes mineur";
}
?>
```

**Mieux : Simplifier avec des conditions multiples**
```php
<?php
if ($age >= 18 && $permis && $voiture) {
    echo "Vous pouvez conduire votre voiture";
} elseif ($age >= 18 && $permis) {
    echo "Vous avez le permis mais pas de voiture";
} elseif ($age >= 18) {
    echo "Vous êtes majeur mais sans permis";
} else {
    echo "Vous êtes mineur";
}
?>
```

---

### 🔹 Condition sans accolades (à éviter)

```php
<?php
// ⚠️ Possible mais DÉCONSEILLÉ
if ($age >= 18)
    echo "Majeur";

// ✅ RECOMMANDÉ : Toujours utiliser des accolades
if ($age >= 18) {
    echo "Majeur";
}
?>
```

---

## 🎯 4. La structure switch

`switch` est utile pour tester une variable contre plusieurs valeurs possibles.

### 🔹 Syntaxe de base

```php
<?php
$jour = "Lundi";

switch ($jour) {
    case "Lundi":
        echo "Début de semaine";
        break;
    case "Mercredi":
        echo "Milieu de semaine";
        break;
    case "Vendredi":
        echo "Bientôt le weekend !";
        break;
    case "Samedi":
    case "Dimanche":
        echo "C'est le weekend !";
        break;
    default:
        echo "Un autre jour";
        break;
}
?>
```

**Important :** Le `break` est crucial ! Sans lui, le code continue dans les cas suivants.

---

### 🔹 Exemple sans break (fallthrough)

```php
<?php
$note = 15;
$mention = "";

switch ($note) {
    case 18:
    case 19:
    case 20:
        $mention = "Excellent";
        break;
    case 16:
    case 17:
        $mention = "Très bien";
        break;
    case 14:
    case 15:
        $mention = "Bien";
        break;
    case 12:
    case 13:
        $mention = "Assez bien";
        break;
    case 10:
    case 11:
        $mention = "Passable";
        break;
    default:
        $mention = "Insuffisant";
        break;
}

echo "Mention : $mention";
?>
```

---

### 🔹 if/elseif vs switch

**Utilisez `if/elseif` quand :**
- Vous avez des conditions complexes
- Vous comparez des plages de valeurs
- Vous utilisez des opérateurs de comparaison

```php
<?php
// ✅ BON avec if
if ($age < 12) {
    echo "Enfant";
} elseif ($age < 18) {
    echo "Adolescent";
} else {
    echo "Adulte";
}
?>
```

**Utilisez `switch` quand :**
- Vous comparez une variable à plusieurs valeurs exactes
- Vous avez beaucoup de cas à tester
- Les valeurs sont des constantes

```php
<?php
// ✅ BON avec switch
switch ($langue) {
    case "fr":
        echo "Bonjour";
        break;
    case "en":
        echo "Hello";
        break;
    case "es":
        echo "Hola";
        break;
    default:
        echo "Language not supported";
}
?>
```

---

## 💪 5. Exercices guidés

### 📝 Exercice 1 : Vérifier la majorité

**Objectif** : Créer un script qui vérifie si une personne est majeure.

**Consigne** : 
- Variable `$age`
- Afficher "Majeur" ou "Mineur"

**Solution :**
```php
<?php
$age = 20;

if ($age >= 18) {
    echo "Vous êtes majeur";
} else {
    echo "Vous êtes mineur";
}
?>
```

---

### 📝 Exercice 2 : Calculer une mention

**Objectif** : Attribuer une mention selon une note.

**Barème :**
- 16-20 : Très bien
- 14-15 : Bien
- 12-13 : Assez bien
- 10-11 : Passable
- 0-9 : Insuffisant

**Solution :**
```php
<?php
$note = 15;

if ($note >= 16 && $note <= 20) {
    echo "Très bien";
} elseif ($note >= 14) {
    echo "Bien";
} elseif ($note >= 12) {
    echo "Assez bien";
} elseif ($note >= 10) {
    echo "Passable";
} else {
    echo "Insuffisant";
}
?>
```

---

### 📝 Exercice 3 : Nombre pair ou impair

**Objectif** : Déterminer si un nombre est pair ou impair.

**Solution :**
```php
<?php
$nombre = 7;

if ($nombre % 2 === 0) {
    echo "$nombre est pair";
} else {
    echo "$nombre est impair";
}
?>
```

---

### 📝 Exercice 4 : Plus grand de trois nombres

**Objectif** : Trouver le plus grand de trois nombres.

**Solution :**
```php
<?php
$a = 10;
$b = 25;
$c = 15;

if ($a >= $b && $a >= $c) {
    echo "Le plus grand est : $a";
} elseif ($b >= $a && $b >= $c) {
    echo "Le plus grand est : $b";
} else {
    echo "Le plus grand est : $c";
}
?>
```

---

### 📝 Exercice 5 : Jours de la semaine avec switch

**Objectif** : Afficher un message selon le jour de la semaine.

**Solution :**
```php
<?php
$jour = "Mercredi";

switch ($jour) {
    case "Lundi":
        echo "Courage, c'est le début de la semaine !";
        break;
    case "Mardi":
    case "Mercredi":
    case "Jeudi":
        echo "On avance bien !";
        break;
    case "Vendredi":
        echo "Bientôt le weekend !";
        break;
    case "Samedi":
    case "Dimanche":
        echo "Profitez du weekend !";
        break;
    default:
        echo "Jour inconnu";
        break;
}
?>
```

---

### 📝 Exercice 6 : Calculatrice simple

**Objectif** : Créer une calculatrice avec switch.

**Solution :**
```php
<?php
$nombre1 = 10;
$nombre2 = 5;
$operation = "+";

switch ($operation) {
    case "+":
        $resultat = $nombre1 + $nombre2;
        echo "$nombre1 + $nombre2 = $resultat";
        break;
    case "-":
        $resultat = $nombre1 - $nombre2;
        echo "$nombre1 - $nombre2 = $resultat";
        break;
    case "*":
        $resultat = $nombre1 * $nombre2;
        echo "$nombre1 * $nombre2 = $resultat";
        break;
    case "/":
        if ($nombre2 != 0) {
            $resultat = $nombre1 / $nombre2;
            echo "$nombre1 / $nombre2 = $resultat";
        } else {
            echo "Erreur : Division par zéro !";
        }
        break;
    default:
        echo "Opération inconnue";
        break;
}
?>
```

---

### 📝 Exercice 7 : Tarif cinéma

**Objectif** : Calculer le tarif d'une place de cinéma.

**Tarifs :**
- Moins de 12 ans : 5 €
- 12-17 ans : 7 €
- 18-64 ans : 10 €
- 65 ans et plus : 6 €

**Solution :**
```php
<?php
$age = 25;
$tarif = 0;

if ($age < 12) {
    $tarif = 5;
} elseif ($age < 18) {
    $tarif = 7;
} elseif ($age < 65) {
    $tarif = 10;
} else {
    $tarif = 6;
}

echo "Votre tarif : $tarif €";
?>
```

---

### 📝 Exercice 8 : Accès selon le rôle

**Objectif** : Vérifier les droits d'accès selon le rôle.

**Solution :**
```php
<?php
$role = "admin";
$estConnecte = true;

if ($estConnecte) {
    switch ($role) {
        case "admin":
            echo "Accès total au système";
            break;
        case "editeur":
            echo "Vous pouvez modifier le contenu";
            break;
        case "lecteur":
            echo "Vous pouvez seulement lire";
            break;
        default:
            echo "Rôle non reconnu";
            break;
    }
} else {
    echo "Veuillez vous connecter";
}
?>
```

---

## 🎯 6. Synthèse de la séance

### Ce que vous avez appris aujourd'hui

✅ Opérateurs arithmétiques (+, -, *, /, %, **)  
✅ Opérateurs de comparaison (==, ===, !=, !==, <, >, <=, >=)  
✅ Opérateurs logiques (&&, ||, !)  
✅ Structure if / else / elseif  
✅ Structure switch / case  
✅ Opérateur ternaire  
✅ Conditions multiples et imbriquées  

---

### Points clés à retenir

1. **Utilisez `===` au lieu de `==`** pour éviter les conversions implicites
2. **`&&` = ET** (toutes les conditions doivent être vraies)
3. **`||` = OU** (au moins une condition doit être vraie)
4. **`!` = NON** (inverse la condition)
5. **N'oubliez pas `break` dans switch**
6. **Le modulo `%` donne le reste d'une division**
7. **Utilisez des accolades `{}` même pour une seule ligne**

---

## 📚 Devoirs pour la semaine prochaine

### Exercice 1 : Saisons

Créez un script `saisons.php` qui :
- Prend un numéro de mois (1-12)
- Affiche la saison correspondante
  - 3, 4, 5 : Printemps
  - 6, 7, 8 : Été
  - 9, 10, 11 : Automne
  - 12, 1, 2 : Hiver
- Utilisez switch

### Exercice 2 : Conversion de notes

Créez un script `conversion_notes.php` qui :
- Convertit une note sur 20 en lettre (A, B, C, D, E, F)
  - A : 18-20
  - B : 16-17
  - C : 14-15
  - D : 12-13
  - E : 10-11
  - F : 0-9

### Exercice 3 : Année bissextile

Créez un script qui détermine si une année est bissextile.

**Règles :**
- Divisible par 4 → bissextile
- SAUF si divisible par 100 → non bissextile
- SAUF si divisible par 400 → bissextile

Exemples : 2020 (oui), 1900 (non), 2000 (oui)

### Exercice 4 : Simulateur de prêt

Créez un script `pret.php` qui :
- Variables : montant du prêt, salaire mensuel
- Conditions :
  - Si salaire < 1500 € : Prêt refusé
  - Si prêt > 10 × salaire : Prêt refusé
  - Sinon : Prêt accepté
- Affiche le résultat avec un message explicatif

### Exercice 5 : Mini-jeu : Pierre/Papier/Ciseaux

Créez un script `jeu.php` qui :
- Deux variables : $joueur1 et $joueur2 (valeurs: "pierre", "papier", "ciseaux")
- Détermine le gagnant selon les règles
- Affiche le résultat

**Règles :**
- Pierre bat Ciseaux
- Ciseaux bat Papier
- Papier bat Pierre

---

## 🔗 Ressources complémentaires

### Documentation
- 📖 Opérateurs PHP : https://www.php.net/manual/fr/language.operators.php
- 📖 Structures de contrôle : https://www.php.net/manual/fr/language.control-structures.php
- 📖 Switch : https://www.php.net/manual/fr/control-structures.switch.php

---

## ❓ Questions fréquentes

**Q : Quelle est la différence entre `==` et `===` ?**  
R : `==` compare les valeurs, `===` compare les valeurs ET les types. Utilisez toujours `===` !

**Q : Que se passe-t-il si j'oublie `break` dans un switch ?**  
R : Le code continue dans les cas suivants (fallthrough). C'est rarement voulu !

**Q : Puis-je utiliser plusieurs conditions avec switch ?**  
R : Non, switch compare une seule variable. Utilisez if/elseif pour des conditions complexes.

**Q : Comment tester si un nombre est entre 10 et 20 ?**  
R : `if ($nombre >= 10 && $nombre <= 20)`

**Q : Que signifie `%` en PHP ?**  
R : C'est le modulo, il donne le reste d'une division entière.

---

## 🎓 Mini-quiz de fin de séance

**Question 1** : Quelle est la sortie ?
```php
<?php
$x = 5;
$y = 10;
if ($x > 3 && $y < 15) {
    echo "A";
} else {
    echo "B";
}
?>
```
<details>
<summary>Voir la réponse</summary>
Réponse : A (les deux conditions sont vraies)
</details>

**Question 2** : Trouvez l'erreur :
```php
<?php
$jour = "Lundi";
switch ($jour) {
    case "Lundi":
        echo "Bon lundi";
    case "Mardi":
        echo "Bon mardi";
        break;
}
?>
```
<details>
<summary>Voir la réponse</summary>
Réponse : Manque break après "Bon lundi", affichera "Bon lundiBon mardi"
</details>

**Question 3** : Que fait ce code ?
```php
<?php
$age = 20;
$statut = ($age >= 18) ? "Majeur" : "Mineur";
echo $statut;
?>
```
<details>
<summary>Voir la réponse</summary>
Réponse : Affiche "Majeur" (opérateur ternaire)
</details>

---

**Bravo ! Vous maîtrisez maintenant la logique conditionnelle ! 🎉**

La semaine prochaine, nous verrons les boucles (for, while, foreach) et les tableaux !