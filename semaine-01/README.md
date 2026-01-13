# 📚 Semaine 1 - Sommaire et Synthèse

**Période** : Semaine 1  
**Thème** : Introduction au PHP et bases de la programmation  
**Durée totale** : 9 heures de cours (3 séances de 3h)

---

## 🎯 Objectifs de la semaine

À la fin de cette première semaine, vous serez capable de :

✅ Comprendre la différence entre web statique et web dynamique  
✅ Installer et configurer un environnement de développement PHP  
✅ Écrire des scripts PHP de base  
✅ Manipuler des variables et différents types de données  
✅ Utiliser les opérateurs arithmétiques, de comparaison et logiques  
✅ Créer des structures conditionnelles (if/else, switch)  
✅ Intégrer du PHP dans des pages HTML  

---

## 📅 Planning des séances

### 📘 [Lundi - Introduction au PHP](lundi-introduction-php.md)

**Durée** : 3 heures

#### Contenu

- 🌐 Présentation du bootcamp et objectifs
- 🔄 Web statique vs Web dynamique
- 🐘 Rôle de PHP dans le développement web
- 🛠️ Installation de l'environnement (XAMPP/WAMP/LAMP)
- 🚀 Premier script PHP
- 📝 Intégration HTML et PHP

#### Compétences acquises

- Installation d'un serveur local
- Création de fichiers PHP
- Utilisation de `echo` pour afficher du contenu
- Compréhension du cycle requête/réponse

#### Concepts clés

```php
<?php
echo "Bonjour tout le monde !";
?>
```

---

### 📗 [Mercredi - Bases de PHP](mercredi-bases-php.md)

**Durée** : 3 heures

#### Contenu

- ✍️ Syntaxe PHP (balises, commentaires, instructions)
- 📦 Variables (déclaration, affectation, nommage)
- 🎨 Types de données (string, int, float, boolean, null)
- 🖨️ Différence entre `echo` et `print`
- 🔗 Concaténation et interpolation
- ⚙️ Opérateurs d'affectation combinés

#### Compétences acquises

- Déclarer et manipuler des variables
- Comprendre les types de données
- Convertir des types (casting)
- Utiliser `var_dump()` pour déboguer
- Effectuer des calculs mathématiques

#### Concepts clés

```php
<?php
// Variables
$nom = "Alice";
$age = 25;
$prix = 19.99;
$estActif = true;

// Affichage
echo "Bonjour $nom, vous avez $age ans.";

// Calculs
$total = $prix * 2;
$compteur++;
?>
```

---

### 📙 [Jeudi - Logique de base](jeudi-logique-base.md)

**Durée** : 3 heures

#### Contenu

- ⚙️ Opérateurs arithmétiques (+, -, *, /, %, **)
- 🔍 Opérateurs de comparaison (==, ===, !=, !==, <, >, <=, >=)
- 🧠 Opérateurs logiques (&&, ||, !)
- 🔀 Structures conditionnelles (if/else/elseif)
- 🎯 Structure switch/case
- 🔄 Opérateur ternaire
- 📊 Conditions multiples et imbriquées

#### Compétences acquises

- Comparer des valeurs
- Prendre des décisions dans le code
- Utiliser la logique booléenne
- Créer des programmes interactifs
- Choisir entre if et switch

#### Concepts clés

```php
<?php
// Conditions
if ($age >= 18) {
    echo "Majeur";
} else {
    echo "Mineur";
}

// Switch
switch ($jour) {
    case "Lundi":
        echo "Début de semaine";
        break;
    case "Vendredi":
        echo "Bientôt le weekend !";
        break;
    default:
        echo "Un autre jour";
}

// Ternaire
$statut = ($age >= 18) ? "Majeur" : "Mineur";
?>
```

---

## 📊 Récapitulatif des concepts

### Syntaxe de base

```php
<?php
// Commentaire sur une ligne

/*
   Commentaire
   sur plusieurs lignes
*/

echo "Affichage";  // Instruction terminée par ;
?>
```

### Variables et types

| Type    | Exemple           | Utilisation       |
| ------- | ----------------- | ----------------- |
| String  | `$nom = "Alice";` | Texte             |
| Integer | `$age = 25;`      | Nombre entier     |
| Float   | `$prix = 19.99;`  | Nombre décimal    |
| Boolean | `$actif = true;`  | Vrai/Faux         |
| NULL    | `$valeur = null;` | Absence de valeur |

### Opérateurs principaux

| Catégorie     | Opérateurs                | Exemple     |
| ------------- | ------------------------- | ----------- |
| Arithmétiques | `+ - * / % **`            | `$a + $b`   |
| Comparaison   | `== === != !== < > <= >=` | `$a === $b` |
| Logiques      | `&&                       |             |
| Affectation   | `= += -= *= /= ++ --`     | `$a += 5`   |

### Structures de contrôle

```php
// if/else
if (condition) {
    // code
} else {
    // code alternatif
}

// switch
switch ($variable) {
    case valeur1:
        // code
        break;
    case valeur2:
        // code
        break;
    default:
        // code par défaut
}
```

---

## 🎓 Compétences maîtrisées

Après cette semaine, vous savez :

### Environnement de développement

- ✅ Installer XAMPP/WAMP/LAMP
- ✅ Démarrer Apache et MySQL
- ✅ Créer des fichiers dans `htdocs`
- ✅ Accéder aux fichiers via `localhost`
- ✅ Utiliser VS Code avec les extensions PHP

### Syntaxe PHP

- ✅ Ouvrir et fermer des balises PHP
- ✅ Écrire des commentaires
- ✅ Terminer les instructions avec `;`
- ✅ Respecter la sensibilité à la casse

### Manipulation de données

- ✅ Déclarer des variables
- ✅ Assigner des valeurs
- ✅ Changer le type d'une variable
- ✅ Effectuer des calculs
- ✅ Concaténer des chaînes

### Logique de programmation

- ✅ Comparer des valeurs
- ✅ Utiliser des conditions
- ✅ Combiner plusieurs conditions
- ✅ Choisir entre plusieurs options
- ✅ Créer des programmes qui prennent des décisions

---

## 🔑 Points clés à retenir

### Les essentiels

1. **Toutes les variables commencent par `$`**
2. **Utilisez `===` au lieu de `==`** (comparaison stricte)
3. **Chaque instruction se termine par `;`**
4. **PHP est sensible à la casse pour les variables**
5. **Commentez votre code pour le rendre compréhensible**
6. **`var_dump()` est votre meilleur ami pour déboguer**

### Erreurs courantes à éviter

❌ Oublier le `$` devant une variable  
❌ Oublier le `;` en fin d'instruction  
❌ Confondre `=` (affectation) et `==` (comparaison)  
❌ Oublier les `break` dans un `switch`  
❌ Utiliser `==` au lieu de `===`  
❌ Accéder aux fichiers PHP sans passer par `localhost`  

---

## 💡 Conseils pour progresser

### Pratique quotidienne

- 📝 Codez tous les jours, même 30 minutes
- 🔄 Refaites les exercices sans regarder les solutions
- 🎯 Créez vos propres petits projets
- 🤔 Essayez de résoudre des problèmes différemment

### Ressources utiles

- 📖 Documentation officielle PHP : https://www.php.net/manual/fr/
- 🛠️ PHP Sandbox : https://sandbox.onlinephpfunctions.com/
- 💬 Stack Overflow : https://stackoverflow.com/questions/tagged/php
- 🎥 Tutoriels YouTube en français

### Débogage

- Utilisez `var_dump()` pour voir le contenu des variables
- Utilisez `echo` pour tracer le flux d'exécution
- Lisez attentivement les messages d'erreur
- Testez votre code par petites parties

---

## 🏆 Exercice global de la semaine

### 🎯 Mini-projet : Système de notation d'élèves

**Objectif** : Créer un système complet qui calcule et affiche les résultats d'un élève.

#### Cahier des charges

Créez un fichier `evaluation_eleve.php` qui :

1. **Définit les informations de l'élève**
   
   - Nom et prénom
   - Classe
   - 5 notes de matières différentes (Maths, Français, Histoire, Anglais, Sciences)

2. **Calcule automatiquement**
   
   - La moyenne générale
   - La note la plus haute
   - La note la plus basse

3. **Détermine**
   
   - La mention (selon le barème ci-dessous)
   - Si l'élève est admis (moyenne >= 10) ou recalé

4. **Affiche un bulletin scolaire complet** avec :
   
   - Informations de l'élève
   - Toutes les notes
   - Les statistiques (moyenne, max, min)
   - La mention et le résultat (admis/recalé)
   - Un message personnalisé selon la mention

#### Barème des mentions

- **Très bien** : moyenne >= 16
- **Bien** : moyenne >= 14
- **Assez bien** : moyenne >= 12
- **Passable** : moyenne >= 10
- **Insuffisant** : moyenne < 10

#### Messages personnalisés

- Très bien : "Félicitations ! Excellent travail !"
- Bien : "Très bon travail, continuez ainsi !"
- Assez bien : "Bon travail, vous pouvez faire encore mieux !"
- Passable : "Résultat acceptable, mais des efforts sont nécessaires."
- Insuffisant : "Résultat insuffisant, il faut redoubler d'efforts."

---

### 💪 Défis supplémentaires (optionnels)

Si vous voulez aller plus loin :

1. **Niveau 1** : Ajouter des coefficients aux matières
2. **Niveau 2** : Gérer plusieurs élèves
3. **Niveau 3** : Ajouter des appréciations par matière
4. **Niveau 4** : Créer un classement

---

## 📅 Prochaine étape : Semaine 2

La semaine prochaine, nous aborderons :

- 🔄 **Lundi** : Les boucles (for, while, foreach)
- 📊 **Mercredi** : Les tableaux (indexés et associatifs)
- 🧰 **Jeudi** : Les fonctions PHP

---

## 🎉 Félicitations !

Vous avez terminé la première semaine du bootcamp ! 

**Bon courage pour la suite ! 💪**