# Semaine 2 - Lundi : Les Boucles en PHP 🔄

**Durée totale : 3 heures**  
**Date : 13 janvier 2026**

---

## 📋 Plan de la Séance

1. **Introduction et Rappel** (15 min)
2. **Les Boucles `for`** (45 min)
3. **Les Boucles `while` et `do-while`** (30 min)
4. **Les Boucles `foreach`** (45 min)
5. **Exercices Guidés** (30 min)
6. **Résumé et Devoirs** (15 min)

---

## 🎯 Objectifs d'Apprentissage

À la fin de cette leçon, vous serez capable de :

- ✅ Comprendre le concept de boucle et son utilité
- ✅ Utiliser la boucle `for` pour des itérations définies
- ✅ Maîtriser les boucles `while` et `do-while`
- ✅ Parcourir des tableaux avec `foreach`
- ✅ Contrôler l'exécution des boucles avec `break` et `continue`
- ✅ Éviter les boucles infinies
- ✅ Choisir la boucle appropriée selon le contexte

---

## 1️⃣ Introduction et Rappel (15 min)

### Qu'est-ce qu'une Boucle ?

Une **boucle** est une structure de contrôle qui permet de répéter un bloc de code plusieurs fois, tant qu'une condition est vraie.

### Pourquoi Utiliser des Boucles ?

**Sans boucle** (répétitif et inefficace) :

```php
<?php
echo "Ligne 1<br>";
echo "Ligne 2<br>";
echo "Ligne 3<br>";
echo "Ligne 4<br>";
echo "Ligne 5<br>";
// ... et si on veut 100 lignes ?
?>
```

**Avec une boucle** (élégant et flexible) :

```php
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Ligne $i<br>";
}
?>
```

### Types de Boucles en PHP

| Boucle     | Usage Principal           | Quand l'Utiliser                 |
| ---------- | ------------------------- | -------------------------------- |
| `for`      | Nombre d'itérations connu | Compteurs, tableaux avec indices |
| `while`    | Condition testée avant    | Tant qu'une condition est vraie  |
| `do-while` | Condition testée après    | Au moins une exécution garantie  |
| `foreach`  | Parcours de tableaux      | Tableaux associatifs et indexés  |

### Diagramme Conceptuel

```
┌─────────────────────────────────────┐
│     DÉBUT DU PROGRAMME              │
└──────────────┬──────────────────────┘
               │
               ▼
        ┌──────────────┐
        │ Initialisation│
        └──────┬────────┘
               │
               ▼
        ┌──────────────┐
    ┌───│  Condition?  │
    │   └──────┬───────┘
    │          │ OUI
    │          ▼
    │   ┌──────────────┐
    │   │ Exécuter le  │
    │   │ bloc de code │
    │   └──────┬────────┘
    │          │
    │          ▼
    │   ┌──────────────┐
    │   │ Incrémenter  │
    │   └──────┬────────┘
    │          │
    └──────────┘
         │ NON
         ▼
    ┌──────────────┐
    │ Sortie boucle│
    └──────────────┘
```

---

## 2️⃣ Les Boucles `for` (45 min)

### Syntaxe de Base

```php
for (initialisation; condition; incrémentation) {
    // Code à répéter
}
```

**Composants :**

1. **Initialisation** : Exécutée une seule fois au début
2. **Condition** : Testée avant chaque itération
3. **Incrémentation** : Exécutée après chaque itération

### Exemple Simple

```php
<?php
// Compter de 1 à 5
for ($i = 1; $i <= 5; $i++) {
    echo "Itération numéro $i<br>";
}

/* Sortie :
Itération numéro 1
Itération numéro 2
Itération numéro 3
Itération numéro 4
Itération numéro 5
*/
?>
```

### Diagramme d'Exécution d'une Boucle `for`

```
for ($i = 0; $i < 3; $i++)
     │        │       │
     │        │       └─→ Après chaque itération
     │        └─→ Testée avant chaque itération
     └─→ Exécutée une seule fois

Étape 1: $i = 0 → Condition (0 < 3) = VRAI → Exécution → $i++ (i=1)
Étape 2: $i = 1 → Condition (1 < 3) = VRAI → Exécution → $i++ (i=2)
Étape 3: $i = 2 → Condition (2 < 3) = VRAI → Exécution → $i++ (i=3)
Étape 4: $i = 3 → Condition (3 < 3) = FAUX → Sortie
```

### Variations de la Boucle `for`

#### Compter à Rebours

```php
<?php
for ($i = 10; $i >= 1; $i--) {
    echo "$i... ";
}
echo "Décollage ! 🚀<br>";

// Sortie : 10... 9... 8... 7... 6... 5... 4... 3... 2... 1... Décollage ! 🚀
?>
```

#### Pas d'Incrémentation Personnalisé

```php
<?php
// Compter de 2 en 2
for ($i = 0; $i <= 20; $i += 2) {
    echo "$i ";
}
echo "<br>";

// Sortie : 0 2 4 6 8 10 12 14 16 18 20
?>
```

#### Boucles Imbriquées (Tables de Multiplication)

```php
<?php
echo "<h3>Table de Multiplication</h3>";
echo "<table border='1' cellpadding='5'>";

for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        $resultat = $i * $j;
        echo "<td>$i × $j = $resultat</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
```

### Parcourir un Tableau avec `for`

```php
<?php
$fruits = ["Pomme", "Banane", "Orange", "Fraise", "Kiwi"];
$nombre_fruits = count($fruits);

echo "<ul>";
for ($i = 0; $i < $nombre_fruits; $i++) {
    echo "<li>Fruit #" . ($i + 1) . " : " . $fruits[$i] . "</li>";
}
echo "</ul>";

/* Sortie :
• Fruit #1 : Pomme
• Fruit #2 : Banane
• Fruit #3 : Orange
• Fruit #4 : Fraise
• Fruit #5 : Kiwi
*/
?>
```

### Exemple Pratique : Générateur de Motifs

```php
<?php
// Créer un triangle de caractères
$hauteur = 5;

for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "★ ";
    }
    echo "<br>";
}

/* Sortie :
★ 
★ ★ 
★ ★ ★ 
★ ★ ★ ★ 
★ ★ ★ ★ ★ 
*/
?>
```

### 🎯 Points Clés sur la Boucle `for`

- ✅ Idéale quand on connaît le nombre d'itérations
- ✅ Parfaite pour les compteurs et indices de tableaux
- ✅ Les trois expressions sont optionnelles (mais les `;` sont obligatoires)
- ⚠️ Attention aux boucles infinies : vérifier la condition de sortie

---

## 3️⃣ Les Boucles `while` et `do-while` (30 min)

### La Boucle `while`

**Syntaxe :**

```php
while (condition) {
    // Code à répéter
}
```

La condition est testée **AVANT** chaque itération.

#### Exemple Basique

```php
<?php
$compteur = 1;

while ($compteur <= 5) {
    echo "Compteur : $compteur<br>";
    $compteur++;
}

/* Sortie :
Compteur : 1
Compteur : 2
Compteur : 3
Compteur : 4
Compteur : 5
*/
?>
```

#### Exemple Pratique : Jeu de Devinette

```php
<?php
$nombre_secret = 7;
$tentative = 0;
$trouve = false;

// Simuler des essais
$essais = [3, 5, 9, 7];
$index = 0;

while (!$trouve && $index < count($essais)) {
    $tentative++;
    $essai = $essais[$index];

    echo "Tentative $tentative : $essai<br>";

    if ($essai == $nombre_secret) {
        echo "✅ Bravo ! Vous avez trouvé en $tentative tentatives !<br>";
        $trouve = true;
    } else {
        echo "❌ Raté ! Essayez encore.<br>";
    }

    $index++;
}
?>
```

#### Lecture de Fichiers avec `while`

```php
<?php
$fichier = fopen("donnees.txt", "r");

if ($fichier) {
    while (!feof($fichier)) {
        $ligne = fgets($fichier);
        echo htmlspecialchars($ligne) . "<br>";
    }
    fclose($fichier);
}
?>
```

### La Boucle `do-while`

**Syntaxe :**

```php
do {
    // Code à répéter
} while (condition);
```

Le code est exécuté **AU MOINS UNE FOIS**, puis la condition est testée.

#### Différence entre `while` et `do-while`

```php
<?php
echo "<h4>Avec while :</h4>";
$i = 10;
while ($i < 5) {
    echo "Cette ligne ne s'affichera jamais<br>";
    $i++;
}
echo "Nombre d'exécutions : 0<br>";

echo "<h4>Avec do-while :</h4>";
$j = 10;
do {
    echo "Cette ligne s'affiche une fois (j = $j)<br>";
    $j++;
} while ($j < 5);
echo "Nombre d'exécutions : 1<br>";
?>
```

#### Diagramme Comparatif

```
┌─────────── WHILE ───────────┐    ┌────────── DO-WHILE ──────────┐
│                             │    │                              │
│   ┌──────────────┐          │    │   ┌──────────────┐           │
│   │  Condition?  │          │    │   │  Exécuter le │           │
│   └──────┬───────┘          │    │   │ bloc de code │           │
│          │ NON              │    │   └──────┬────────┘           │
│          ▼                  │    │          │                    │
│   ┌──────────────┐          │    │          ▼                    │
│   │    SORTIE    │          │    │   ┌──────────────┐           │
│   └──────────────┘          │    │   │  Condition?  │           │
│          │ OUI              │    │   └──────┬───────┘           │
│          ▼                  │    │          │ OUI               │
│   ┌──────────────┐          │    │          │                    │
│   │  Exécuter le │          │    │   [Retour au début]          │
│   │ bloc de code │          │    │          │ NON               │
│   └──────┬────────┘          │    │          ▼                    │
│          │                  │    │   ┌──────────────┐           │
│   [Retour à Condition]     │    │   │    SORTIE    │           │
│                             │    │   └──────────────┘           │
└─────────────────────────────┘    └──────────────────────────────┘
```

#### Exemple Pratique : Menu Interactif

```php
<?php
$continuer = true;
$iteration = 0;

do {
    $iteration++;
    echo "=== Menu Principal (Itération $iteration) ===<br>";
    echo "1. Option A<br>";
    echo "2. Option B<br>";
    echo "3. Quitter<br>";

    // Simuler un choix utilisateur
    $choix = ($iteration < 3) ? $iteration : 3;

    echo "Choix simulé : $choix<br>";

    switch ($choix) {
        case 1:
            echo "→ Vous avez choisi l'option A<br><br>";
            break;
        case 2:
            echo "→ Vous avez choisi l'option B<br><br>";
            break;
        case 3:
            echo "→ Au revoir !<br>";
            $continuer = false;
            break;
    }

} while ($continuer);
?>
```

### ⚠️ Attention aux Boucles Infinies !

```php
<?php
// ❌ MAUVAIS - Boucle infinie !
/*
$i = 1;
while ($i <= 10) {
    echo $i;
    // Oups ! On a oublié $i++
}
*/

// ✅ BON
$i = 1;
while ($i <= 10) {
    echo $i;
    $i++; // N'oubliez pas d'incrémenter !
}
?>
```

---

## 4️⃣ Les Boucles `foreach` (45 min)

### Syntaxe de Base

La boucle `foreach` est spécialement conçue pour parcourir des **tableaux**.

```php
// Syntaxe 1 : Valeurs seulement
foreach ($tableau as $valeur) {
    // Utiliser $valeur
}

// Syntaxe 2 : Clés et valeurs
foreach ($tableau as $cle => $valeur) {
    // Utiliser $cle et $valeur
}
```

### Parcourir un Tableau Indexé

```php
<?php
$couleurs = ["Rouge", "Vert", "Bleu", "Jaune"];

echo "<h4>Parcours simple :</h4>";
foreach ($couleurs as $couleur) {
    echo "- $couleur<br>";
}

echo "<h4>Parcours avec indices :</h4>";
foreach ($couleurs as $index => $couleur) {
    echo "Couleur #$index : $couleur<br>";
}

/* Sortie :
Parcours simple :
- Rouge
- Vert
- Bleu
- Jaune

Parcours avec indices :
Couleur #0 : Rouge
Couleur #1 : Vert
Couleur #2 : Bleu
Couleur #3 : Jaune
*/
?>
```

### Parcourir un Tableau Associatif

```php
<?php
$etudiant = [
    "nom" => "Dupont",
    "prenom" => "Marie",
    "age" => 22,
    "ville" => "Paris",
    "note" => 15.5
];

echo "<h4>Informations de l'étudiant :</h4>";
echo "<ul>";
foreach ($etudiant as $cle => $valeur) {
    echo "<li><strong>" . ucfirst($cle) . "</strong> : $valeur</li>";
}
echo "</ul>";

/* Sortie :
• Nom : Dupont
• Prenom : Marie
• Age : 22
• Ville : Paris
• Note : 15.5
*/
?>
```

### Tableau Multidimensionnel

```php
<?php
$etudiants = [
    [
        "nom" => "Dupont",
        "prenom" => "Marie",
        "note" => 15.5
    ],
    [
        "nom" => "Martin",
        "prenom" => "Jean",
        "note" => 14.0
    ],
    [
        "nom" => "Bernard",
        "prenom" => "Sophie",
        "note" => 16.5
    ]
];

echo "<h4>Liste des étudiants :</h4>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Nom</th><th>Prénom</th><th>Note</th><th>Statut</th></tr>";

foreach ($etudiants as $etudiant) {
    $statut = $etudiant["note"] >= 15 ? "✅ Admis" : "❌ Refusé";

    echo "<tr>";
    echo "<td>{$etudiant['nom']}</td>";
    echo "<td>{$etudiant['prenom']}</td>";
    echo "<td>{$etudiant['note']}/20</td>";
    echo "<td>$statut</td>";
    echo "</tr>";
}

echo "</table>";
?>
```

### Modification des Valeurs par Référence

Par défaut, `foreach` travaille sur une **copie** des valeurs. Pour modifier le tableau original, utilisez `&`.

```php
<?php
$nombres = [1, 2, 3, 4, 5];

echo "Tableau original : " . implode(", ", $nombres) . "<br>";

// ❌ Sans référence - ne modifie PAS le tableau
foreach ($nombres as $nombre) {
    $nombre = $nombre * 2;
}
echo "Après boucle sans & : " . implode(", ", $nombres) . "<br>";

// ✅ Avec référence - modifie le tableau
foreach ($nombres as &$nombre) {
    $nombre = $nombre * 2;
}
unset($nombre); // Important : détruire la référence
echo "Après boucle avec & : " . implode(", ", $nombres) . "<br>";

/* Sortie :
Tableau original : 1, 2, 3, 4, 5
Après boucle sans & : 1, 2, 3, 4, 5
Après boucle avec & : 2, 4, 6, 8, 10
*/
?>
```

### Exemple Pratique : Panier d'Achat

```php
<?php
$panier = [
    [
        "produit" => "Ordinateur Portable",
        "prix" => 899.99,
        "quantite" => 1
    ],
    [
        "produit" => "Souris Sans Fil",
        "prix" => 25.50,
        "quantite" => 2
    ],
    [
        "produit" => "Clavier Mécanique",
        "prix" => 79.99,
        "quantite" => 1
    ]
];

$total_general = 0;

echo "<h4>🛒 Votre Panier</h4>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Produit</th><th>Prix Unitaire</th><th>Quantité</th><th>Sous-total</th></tr>";

foreach ($panier as $article) {
    $sous_total = $article["prix"] * $article["quantite"];
    $total_general += $sous_total;

    echo "<tr>";
    echo "<td>{$article['produit']}</td>";
    echo "<td>" . number_format($article['prix'], 2) . " €</td>";
    echo "<td>{$article['quantite']}</td>";
    echo "<td>" . number_format($sous_total, 2) . " €</td>";
    echo "</tr>";
}

echo "<tr style='font-weight: bold; background-color: #f0f0f0;'>";
echo "<td colspan='3'>TOTAL</td>";
echo "<td>" . number_format($total_general, 2) . " €</td>";
echo "</tr>";

echo "</table>";

/* Sortie :
┌──────────────────────┬──────────────┬──────────┬────────────┐
│ Produit              │ Prix Unit.   │ Quantité │ Sous-total │
├──────────────────────┼──────────────┼──────────┼────────────┤
│ Ordinateur Portable  │ 899.99 €     │ 1        │ 899.99 €   │
│ Souris Sans Fil      │ 25.50 €      │ 2        │ 51.00 €    │
│ Clavier Mécanique    │ 79.99 €      │ 1        │ 79.99 €    │
├──────────────────────┴──────────────┴──────────┼────────────┤
│ TOTAL                                          │ 1030.98 €  │
└────────────────────────────────────────────────┴────────────┘
*/
?>
```

### Boucles Foreach Imbriquées

```php
<?php
$categories = [
    "Fruits" => ["Pomme", "Banane", "Orange"],
    "Légumes" => ["Carotte", "Tomate", "Laitue"],
    "Viandes" => ["Poulet", "Bœuf", "Porc"]
];

echo "<h4>🛍️ Catalogue de Produits</h4>";

foreach ($categories as $categorie => $produits) {
    echo "<h5>$categorie :</h5>";
    echo "<ul>";

    foreach ($produits as $produit) {
        echo "<li>$produit</li>";
    }

    echo "</ul>";
}
?>
```

---

## 5️⃣ Contrôle de Flux : `break` et `continue`

### La Commande `break`

Permet de **sortir immédiatement** d'une boucle.

```php
<?php
echo "<h4>Recherche du nombre 7 :</h4>";

for ($i = 1; $i <= 10; $i++) {
    echo "Vérification de $i... ";

    if ($i == 7) {
        echo "<strong>TROUVÉ ! Arrêt de la recherche.</strong><br>";
        break; // Sort de la boucle
    }

    echo "Pas encore trouvé.<br>";
}

echo "Fin du programme.<br>";

/* Sortie :
Vérification de 1... Pas encore trouvé.
Vérification de 2... Pas encore trouvé.
Vérification de 3... Pas encore trouvé.
Vérification de 4... Pas encore trouvé.
Vérification de 5... Pas encore trouvé.
Vérification de 6... Pas encore trouvé.
Vérification de 7... TROUVÉ ! Arrêt de la recherche.
Fin du programme.
*/
?>
```

### La Commande `continue`

Permet de **sauter l'itération actuelle** et passer à la suivante.

```php
<?php
echo "<h4>Nombres pairs de 1 à 10 :</h4>";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue; // Sauter les nombres impairs
    }

    echo "$i ";
}

echo "<br>";

/* Sortie :
Nombres pairs de 1 à 10 :
2 4 6 8 10
*/
?>
```

### Exemple Pratique : Validation de Données

```php
<?php
$utilisateurs = [
    ["nom" => "Alice", "age" => 25, "actif" => true],
    ["nom" => "Bob", "age" => 17, "actif" => true],
    ["nom" => "Charlie", "age" => 30, "actif" => false],
    ["nom" => "Diana", "age" => 22, "actif" => true],
    ["nom" => "Eve", "age" => 16, "actif" => true]
];

echo "<h4>Utilisateurs valides (18+ et actifs) :</h4>";
echo "<ul>";

foreach ($utilisateurs as $user) {
    // Ignorer les utilisateurs inactifs
    if (!$user["actif"]) {
        continue;
    }

    // Ignorer les mineurs
    if ($user["age"] < 18) {
        continue;
    }

    echo "<li>✅ {$user['nom']} - {$user['age']} ans</li>";
}

echo "</ul>";

/* Sortie :
• ✅ Alice - 25 ans
• ✅ Diana - 22 ans
*/
?>
```

### Break avec Boucles Imbriquées

```php
<?php
echo "<h4>Recherche dans une matrice :</h4>";

$matrice = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$recherche = 5;
$trouve = false;

foreach ($matrice as $ligne_index => $ligne) {
    foreach ($ligne as $colonne_index => $valeur) {
        echo "Vérification [$ligne_index][$colonne_index] = $valeur<br>";

        if ($valeur == $recherche) {
            echo "<strong>✅ Trouvé à la position [$ligne_index][$colonne_index]</strong><br>";
            $trouve = true;
            break 2; // Sort de DEUX boucles imbriquées
        }
    }
}

if (!$trouve) {
    echo "❌ Valeur non trouvée<br>";
}
?>
```

---

## 6️⃣ Exercices Guidés (30 min)

### Exercice 1 : Table de Multiplication Simple ⭐

**Objectif :** Afficher la table de multiplication de 7.

```php
<?php
// SOLUTION
echo "<h4>Table de multiplication de 7 :</h4>";

for ($i = 1; $i <= 10; $i++) {
    $resultat = 7 * $i;
    echo "7 × $i = $resultat<br>";
}

/* Sortie :
7 × 1 = 7
7 × 2 = 14
7 × 3 = 21
...
7 × 10 = 70
*/
?>
```

---

### Exercice 2 : Somme des Nombres Pairs ⭐⭐

**Objectif :** Calculer la somme de tous les nombres pairs entre 1 et 50.

```php
<?php
// SOLUTION
$somme = 0;

for ($i = 2; $i <= 50; $i += 2) {
    $somme += $i;
}

echo "La somme des nombres pairs de 1 à 50 est : $somme<br>";

// Vérification avec la formule : 2+4+6+...+50 = 2(1+2+3+...+25) = 2×(25×26)/2 = 650
echo "Vérification : 650<br>";

/* Sortie :
La somme des nombres pairs de 1 à 50 est : 650
Vérification : 650
*/
?>
```

---

### Exercice 3 : Affichage Inversé d'un Tableau ⭐⭐

**Objectif :** Afficher les éléments d'un tableau dans l'ordre inverse.

```php
<?php
// SOLUTION
$animaux = ["Chat", "Chien", "Oiseau", "Poisson", "Lapin"];

echo "<h4>Ordre normal :</h4>";
foreach ($animaux as $animal) {
    echo "- $animal<br>";
}

echo "<h4>Ordre inverse :</h4>";
for ($i = count($animaux) - 1; $i >= 0; $i--) {
    echo "- {$animaux[$i]}<br>";
}

/* Sortie :
Ordre normal :
- Chat
- Chien
- Oiseau
- Poisson
- Lapin

Ordre inverse :
- Lapin
- Poisson
- Oiseau
- Chien
- Chat
*/
?>
```

---

### Exercice 4 : Pyramide d'Étoiles ⭐⭐⭐

**Objectif :** Créer une pyramide d'étoiles avec une hauteur donnée.

```php
<?php
// SOLUTION
$hauteur = 5;

echo "<h4>Pyramide de hauteur $hauteur :</h4>";
echo "<pre>";

for ($i = 1; $i <= $hauteur; $i++) {
    // Espaces
    for ($j = 1; $j <= ($hauteur - $i); $j++) {
        echo " ";
    }

    // Étoiles
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }

    echo "\n";
}

echo "</pre>";

/* Sortie :
    *
   ***
  *****
 *******
*********
*/
?>
```

---

### Exercice 5 : Compteur de Voyelles ⭐⭐⭐

**Objectif :** Compter le nombre de voyelles dans une chaîne de caractères.

```php
<?php
// SOLUTION
$texte = "Bonjour, comment allez-vous ?";
$voyelles = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];
$compteur = 0;

echo "<h4>Texte analysé :</h4>";
echo "<p>\"$texte\"</p>";

// Convertir la chaîne en tableau de caractères
$caracteres = str_split($texte);

foreach ($caracteres as $caractere) {
    if (in_array($caractere, $voyelles)) {
        $compteur++;
    }
}

echo "<p>Nombre de voyelles : <strong>$compteur</strong></p>";

/* Sortie :
Texte analysé :
"Bonjour, comment allez-vous ?"
Nombre de voyelles : 10
*/
?>
```

---

### Exercice 6 : Moyenne des Notes ⭐⭐

**Objectif :** Calculer la moyenne d'un tableau de notes et afficher le statut (admis/refusé).

```php
<?php
// SOLUTION
$notes = [12, 15, 8, 14, 16, 11, 9];
$somme = 0;
$nombre_notes = count($notes);

echo "<h4>Notes de l'étudiant :</h4>";
echo "<p>" . implode(", ", $notes) . "</p>";

foreach ($notes as $note) {
    $somme += $note;
}

$moyenne = $somme / $nombre_notes;

echo "<p>Somme : $somme</p>";
echo "<p>Nombre de notes : $nombre_notes</p>";
echo "<p>Moyenne : " . number_format($moyenne, 2) . "/20</p>";

if ($moyenne >= 10) {
    echo "<p style='color: green; font-weight: bold;'>✅ ADMIS</p>";
} else {
    echo "<p style='color: red; font-weight: bold;'>❌ REFUSÉ</p>";
}

/* Sortie :
Notes de l'étudiant :
12, 15, 8, 14, 16, 11, 9

Somme : 85
Nombre de notes : 7
Moyenne : 12.14/20
✅ ADMIS
*/
?>
```

---

### Exercice 7 : FizzBuzz ⭐⭐⭐

**Objectif :** Afficher les nombres de 1 à 30, en remplaçant :

- Les multiples de 3 par "Fizz"
- Les multiples de 5 par "Buzz"
- Les multiples de 3 ET 5 par "FizzBuzz"

```php
<?php
// SOLUTION
echo "<h4>Jeu FizzBuzz (1-30) :</h4>";

for ($i = 1; $i <= 30; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo "$i ";
    }
}

echo "<br>";

/* Sortie :
1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz Fizz 22 23 Fizz Buzz 26 Fizz 28 29 FizzBuzz
*/
?>
```

---

### Exercice 8 : Générateur de Calendrier Mensuel ⭐⭐⭐⭐

**Objectif :** Créer un mini-calendrier pour un mois de 30 jours commençant un lundi.

```php
<?php
// SOLUTION
$jours_semaine = ["Lun", "Mar", "Mer", "Jeu", "Ven", "Sam", "Dim"];
$jours_mois = 30;
$premier_jour = 1; // 1 = Lundi

echo "<h4>📅 Calendrier du mois</h4>";
echo "<table border='1' cellpadding='5' style='text-align: center;'>";

// En-tête
echo "<tr>";
foreach ($jours_semaine as $jour) {
    echo "<th>$jour</th>";
}
echo "</tr>";

echo "<tr>";

// Jours vides au début si le mois ne commence pas un lundi
for ($i = 1; $i < $premier_jour; $i++) {
    echo "<td></td>";
}

// Jours du mois
$jour_actuel = $premier_jour;
for ($jour = 1; $jour <= $jours_mois; $jour++) {
    // Style spécial pour le dimanche
    $style = ($jour_actuel == 7) ? "style='background-color: #ffcccc;'" : "";

    echo "<td $style>$jour</td>";

    // Nouvelle ligne après le dimanche
    if ($jour_actuel == 7) {
        echo "</tr><tr>";
        $jour_actuel = 1;
    } else {
        $jour_actuel++;
    }
}

// Compléter la dernière semaine
while ($jour_actuel > 1 && $jour_actuel <= 7) {
    echo "<td></td>";
    $jour_actuel++;
}

echo "</tr>";
echo "</table>";

/* Sortie : Un calendrier formaté avec les jours de la semaine */
?>
```

---

## 7️⃣ Résumé et Comparaison des Boucles

### Tableau Comparatif

| Critère             | `for`              | `while`            | `do-while`           | `foreach`            |
| ------------------- | ------------------ | ------------------ | -------------------- | -------------------- |
| **Usage principal** | Itérations fixes   | Condition variable | Au moins 1 exécution | Parcours de tableaux |
| **Test condition**  | Avant itération    | Avant itération    | Après itération      | Automatique          |
| **Syntaxe**         | Compacte           | Simple             | Simple               | Très simple          |
| **Compteur**        | Intégré            | Manuel             | Manuel               | Automatique          |
| **Tableaux**        | Possible (indices) | Possible           | Possible             | Idéal                |
| **Lisibilité**      | ★★★★☆              | ★★★☆☆              | ★★★☆☆                | ★★★★★                |

### Quand Utiliser Quelle Boucle ?

#### Utilisez `for` quand :

- ✅ Vous connaissez le nombre d'itérations à l'avance
- ✅ Vous avez besoin d'un compteur
- ✅ Vous parcourez un tableau par indices

```php
for ($i = 0; $i < 10; $i++) { /* ... */ }
```

#### Utilisez `while` quand :

- ✅ La condition est dynamique
- ✅ Vous ne connaissez pas le nombre d'itérations
- ✅ Vous lisez des données jusqu'à une condition

```php
while ($donnee = lire_donnee()) { /* ... */ }
```

#### Utilisez `do-while` quand :

- ✅ Vous devez exécuter le code AU MOINS UNE FOIS
- ✅ Menu interactif
- ✅ Validation de saisie

```php
do { /* ... */ } while ($reessayer);
```

#### Utilisez `foreach` quand :

- ✅ Vous parcourez un tableau (simple ou associatif)
- ✅ Vous ne vous souciez pas des indices
- ✅ Vous voulez un code simple et lisible

```php
foreach ($tableau as $valeur) { /* ... */ }
```

---

## 📚 FAQ - Questions Fréquentes

### Q1 : Quelle est la différence entre `$i++` et `++$i` ?

**Réponse :**

- `$i++` : **Post-incrémentation** - retourne la valeur PUIS incrémente
- `++$i` : **Pré-incrémentation** - incrémente PUIS retourne la valeur

```php
<?php
$a = 5;
echo $a++; // Affiche 5, puis $a devient 6
echo $a;   // Affiche 6

$b = 5;
echo ++$b; // $b devient 6, puis affiche 6
echo $b;   // Affiche 6
?>
```

Dans une boucle `for`, les deux sont équivalents car la valeur n'est pas utilisée.

---

### Q2 : Comment éviter les boucles infinies ?

**Réponse :**

1. Toujours s'assurer que la condition peut devenir fausse
2. Vérifier que le compteur/variable est modifié dans la boucle
3. Utiliser un compteur de sécurité si nécessaire

```php
<?php
// ❌ Boucle infinie
/*
$i = 0;
while ($i < 10) {
    echo $i;
    // Oublié : $i++;
}
*/

// ✅ Sécurité avec compteur max
$i = 0;
$max_iterations = 1000;
while ($i < 10 && $max_iterations > 0) {
    echo $i;
    $i++;
    $max_iterations--;
}
?>
```

---

### Q3 : Puis-je modifier un tableau pendant que je le parcours avec `foreach` ?

**Réponse :**

- ❌ **Ne jamais modifier la structure** (ajouter/supprimer des éléments)
- ✅ **Possible de modifier les valeurs** avec la référence `&`

```php
<?php
// ✅ Modification des valeurs
$nombres = [1, 2, 3];
foreach ($nombres as &$nb) {
    $nb *= 2;
}
unset($nb);
// Résultat : [2, 4, 6]

// ❌ Ne pas faire
$fruits = ["Pomme", "Banane"];
foreach ($fruits as $fruit) {
    // Dangereux !
    $fruits[] = "Nouvelle valeur";
}
?>
```

---

### Q4 : `break` vs `return` dans une boucle ?

**Réponse :**

- `break` : Sort de la boucle, continue l'exécution du script
- `return` : Sort de la fonction entière

```php
<?php
function exemple() {
    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            break; // Sort de la boucle
        }
    }
    echo "Après la boucle"; // Cette ligne s'exécute
}

function exemple2() {
    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            return; // Sort de la fonction
        }
    }
    echo "Après la boucle"; // Cette ligne NE s'exécute PAS
}
?>
```

---

### Q5 : Comment parcourir plusieurs tableaux en même temps ?

**Réponse :**
Utilisez une boucle `for` avec un indice commun, ou `array_map()`.

```php
<?php
$noms = ["Alice", "Bob", "Charlie"];
$ages = [25, 30, 35];

echo "<h4>Méthode 1 : Boucle for</h4>";
for ($i = 0; $i < count($noms); $i++) {
    echo "{$noms[$i]} a {$ages[$i]} ans<br>";
}

echo "<h4>Méthode 2 : array_combine + foreach</h4>";
$personnes = array_combine($noms, $ages);
foreach ($personnes as $nom => $age) {
    echo "$nom a $age ans<br>";
}
?>
```

---

## 🎯 Mini-Quiz

### Question 1

Quelle boucle est la MEILLEURE pour afficher tous les éléments d'un tableau associatif ?

A) `for`  
B) `while`  
C) `foreach`  
D) `do-while`

<details>
<summary>Voir la réponse</summary>

**Réponse : C) `foreach`**

`foreach` est spécialement conçu pour parcourir les tableaux, qu'ils soient indexés ou associatifs. C'est la solution la plus simple et lisible.

</details>

---

### Question 2

Combien de fois ce code s'exécute-t-il ?

```php
<?php
$i = 10;
do {
    echo $i;
} while ($i < 5);
?>
```

A) 0 fois  
B) 1 fois  
C) 5 fois  
D) 10 fois

<details>
<summary>Voir la réponse</summary>

**Réponse : B) 1 fois**

`do-while` exécute le code AU MOINS UNE FOIS avant de tester la condition. Même si la condition est fausse dès le départ, le code s'exécute une fois.

</details>

---

### Question 3

Que fait cette instruction : `break 2;` ?

A) Sort de la boucle actuelle  
B) Sort de 2 boucles imbriquées  
C) Saute 2 itérations  
D) Provoque une erreur

<details>
<summary>Voir la réponse</summary>

**Réponse : B) Sort de 2 boucles imbriquées**

`break` peut prendre un argument numérique pour sortir de plusieurs niveaux de boucles imbriquées. `break 2` sort de 2 boucles.

</details>

---

### Question 4

Quelle est la sortie de ce code ?

```php
<?php
for ($i = 0; $i < 5; $i++) {
    if ($i == 2) continue;
    echo $i . " ";
}
?>
```

A) `0 1 2 3 4`  
B) `0 1 3 4`  
C) `2`  
D) `0 1`

<details>
<summary>Voir la réponse</summary>

**Réponse : B) `0 1 3 4`**

`continue` saute l'itération actuelle. Quand `$i` vaut 2, l'itération est sautée et on passe directement à `$i = 3`.

</details>

---

### Question 5

Comment modifier les valeurs d'un tableau avec `foreach` ?

A) C'est impossible  
B) Utiliser `foreach ($tab as $val)`  
C) Utiliser `foreach ($tab as &$val)`  
D) Utiliser `foreach ($tab => $val)`

<details>
<summary>Voir la réponse</summary>

**Réponse : C) Utiliser `foreach ($tab as &$val)`**

Le symbole `&` crée une référence, permettant de modifier directement les valeurs du tableau original. N'oubliez pas `unset($val)` après la boucle !

</details>

---

## 🏠 Devoirs

### Devoir 1 : Calculateur de Factorielle ⭐⭐

Créez un programme qui calcule la factorielle d'un nombre donné.

**Exemple :**

- Factorielle de 5 : 5! = 5 × 4 × 3 × 2 × 1 = 120

**Indications :**

- Utilisez une boucle `for` ou `while`
- Testez avec différents nombres (0, 1, 5, 10)

---

### Devoir 2 : Analyseur de Texte ⭐⭐⭐

Créez un programme qui analyse un texte et affiche :

- Le nombre total de caractères
- Le nombre de voyelles
- Le nombre de consonnes
- Le nombre d'espaces
- Le nombre de chiffres

**Texte à analyser :**

```
"PHP 8 est un langage puissant pour le développement web en 2026 !"
```

---

### Devoir 3 : Gestionnaire de Produits ⭐⭐⭐⭐

Créez un système de gestion de produits avec les fonctionnalités suivantes :

1. Un tableau de produits avec nom, prix, et quantité en stock
2. Afficher tous les produits
3. Calculer la valeur totale du stock
4. Trouver le produit le plus cher
5. Trouver le produit le moins cher
6. Afficher les produits en rupture de stock (quantité = 0)

**Exemple de structure :**

```php
$produits = [
    ["nom" => "Laptop", "prix" => 999, "stock" => 5],
    ["nom" => "Souris", "prix" => 25, "stock" => 0],
    ["nom" => "Clavier", "prix" => 75, "stock" => 12],
    // ...
];
```

---

### Devoir 4 : Jeu du Plus ou Moins ⭐⭐⭐

Créez un jeu où :

1. Le programme génère un nombre aléatoire entre 1 et 100
2. L'utilisateur a 7 tentatives pour le deviner
3. Après chaque essai, afficher "Plus grand" ou "Plus petit"
4. Afficher le nombre de tentatives utilisées

**Bonus :** Afficher un score basé sur le nombre de tentatives.

---

### Devoir 5 : Générateur de Motifs Avancé ⭐⭐⭐⭐

Créez un programme qui affiche les motifs suivants :

**Motif 1 - Losange :**

```
   *
  ***
 *****
*******
 *****
  ***
   *
```

**Motif 2 - Sapin de Noël :**

```
    *
   ***
  *****
 *******
*********
    ||
```

---

## 📖 Ressources Complémentaires

### Documentation Officielle

- [PHP: for](https://www.php.net/manual/fr/control-structures.for.php)
- [PHP: while](https://www.php.net/manual/fr/control-structures.while.php)
- [PHP: foreach](https://www.php.net/manual/fr/control-structures.foreach.php)
- [PHP: break](https://www.php.net/manual/fr/control-structures.break.php)
- [PHP: continue](https://www.php.net/manual/fr/control-structures.continue.php)

### Tutoriels Recommandés

- W3Schools : PHP Loops
- PHP.net : Control Structures
- MDN : Loops and iteration

### Outils de Pratique

- [PHP Sandbox](https://sandbox.onlinephpfunctions.com/)
- [PHPFiddle](http://phpfiddle.org/)
- [3v4l.org](https://3v4l.org/) - Test PHP sur plusieurs versions

---

## 🎓 Points Clés à Retenir

### ✅ À Faire

- Choisir la boucle appropriée selon le contexte
- Toujours vérifier que la condition de sortie est atteignable
- Utiliser `foreach` pour les tableaux quand c'est possible
- Utiliser des noms de variables significatifs
- Indenter correctement le code dans les boucles

### ❌ À Éviter

- Les boucles infinies non intentionnelles
- Modifier la structure d'un tableau pendant `foreach`
- Oublier d'incrémenter le compteur dans `while`
- Oublier `unset()` après un `foreach` avec référence
- Boucles trop complexes (préférer des fonctions)

---

## 🎉 Félicitations !

Vous avez terminé la leçon sur les boucles en PHP ! Vous maîtrisez maintenant :

- ✅ Les 4 types de boucles : `for`, `while`, `do-while`, `foreach`
- ✅ Le contrôle de flux avec `break` et `continue`
- ✅ Le parcours de tableaux simples et multidimensionnels
- ✅ L'optimisation et le choix de la boucle appropriée

### 📅 Prochaine Séance

**Mardi : Les Fonctions en PHP**

- Déclaration et appel de fonctions
- Paramètres et valeurs de retour
- Portée des variables (scope)
- Fonctions anonymes et closures

---

**Bon courage pour les devoirs ! 🚀**

*N'hésitez pas à revoir cette leçon et à pratiquer avec les exercices.*

---

**Notes du formateur :**

- Temps estimé par section respecté ✅
- 8 exercices progressifs avec solutions ✅
- FAQ complète ✅
- Mini-quiz interactif ✅
- Devoirs variés (5 niveaux de difficulté) ✅
- Ressources complémentaires ✅
- Diagrammes visuels inclus ✅

**Dernière mise à jour : 13 janvier 2026**
