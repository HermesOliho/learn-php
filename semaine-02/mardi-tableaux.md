# Semaine 2 - Mardi : Les Tableaux en PHP 📦

**Durée totale : 3 heures**  
**Date : 14 janvier 2026**

---

## 📋 Plan de la Séance

1. **Introduction aux Tableaux** (15 min)
2. **Les Tableaux Indexés** (40 min)
3. **Les Tableaux Associatifs** (40 min)
4. **Les Tableaux Multidimensionnels** (35 min)
5. **Fonctions Utiles pour les Tableaux** (35 min)
6. **Exercices Guidés** (30 min)
7. **Résumé et Devoirs** (15 min)

---

## 🎯 Objectifs d'Apprentissage

À la fin de cette leçon, vous serez capable de :

- ✅ Comprendre ce qu'est un tableau et son utilité
- ✅ Créer et manipuler des tableaux indexés
- ✅ Utiliser des tableaux associatifs (clé-valeur)
- ✅ Travailler avec des tableaux multidimensionnels
- ✅ Accéder et modifier les éléments d'un tableau
- ✅ Utiliser les fonctions PHP courantes pour les tableaux
- ✅ Choisir le bon type de tableau selon le contexte

---

## 1️⃣ Introduction aux Tableaux (15 min)

### Qu'est-ce qu'un Tableau ?

Un **tableau** (array en anglais) est une structure de données qui permet de stocker **plusieurs valeurs** dans une seule variable.

### Pourquoi Utiliser des Tableaux ?

**Sans tableau** (répétitif et difficile à maintenir) :
```php
<?php
$etudiant1 = "Alice";
$etudiant2 = "Bob";
$etudiant3 = "Charlie";
$etudiant4 = "Diana";
$etudiant5 = "Eve";

echo $etudiant1 . "<br>";
echo $etudiant2 . "<br>";
echo $etudiant3 . "<br>";
echo $etudiant4 . "<br>";
echo $etudiant5 . "<br>";
?>
```

**Avec un tableau** (propre et flexible) :
```php
<?php
$etudiants = ["Alice", "Bob", "Charlie", "Diana", "Eve"];

foreach ($etudiants as $etudiant) {
    echo $etudiant . "<br>";
}
?>
```

### Types de Tableaux en PHP

| Type | Description | Exemple |
|------|-------------|---------|
| **Tableaux indexés** | Indices numériques automatiques (0, 1, 2...) | `["Pomme", "Banane", "Orange"]` |
| **Tableaux associatifs** | Paires clé-valeur personnalisées | `["nom" => "Alice", "age" => 25]` |
| **Tableaux multidimensionnels** | Tableaux contenant d'autres tableaux | `[["Alice", 25], ["Bob", 30]]` |

### Visualisation Conceptuelle

```
┌─────────────────────────────────────────────────────┐
│                  VARIABLE SIMPLE                     │
│  $prenom = "Alice"                                   │
│  ┌─────────┐                                         │
│  │  Alice  │                                         │
│  └─────────┘                                         │
└─────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────┐
│                  TABLEAU INDEXÉ                      │
│  $prenoms = ["Alice", "Bob", "Charlie"]              │
│  ┌───┬───────┬─────┬─────────┬─────────┐            │
│  │ 0 │ Alice │  1  │   Bob   │ Charlie │            │
│  └───┴───────┴─────┴─────────┴─────────┘            │
│    ↑                                                 │
│  Indices automatiques                                │
└─────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────┐
│               TABLEAU ASSOCIATIF                     │
│  $personne = ["nom" => "Alice", "age" => 25]         │
│  ┌─────┬───────┬─────┬─────┐                        │
│  │ nom │ Alice │ age │ 25  │                        │
│  └─────┴───────┴─────┴─────┘                        │
│    ↑                                                 │
│  Clés personnalisées                                 │
└─────────────────────────────────────────────────────┘
```

---

## 2️⃣ Les Tableaux Indexés (40 min)

### Création de Tableaux Indexés

Il existe plusieurs façons de créer un tableau indexé :

```php
<?php
// Syntaxe courte (recommandée depuis PHP 5.4)
$fruits = ["Pomme", "Banane", "Orange"];

// Syntaxe longue (ancienne)
$legumes = array("Carotte", "Tomate", "Laitue");

// Création élément par élément
$couleurs = [];
$couleurs[0] = "Rouge";
$couleurs[1] = "Vert";
$couleurs[2] = "Bleu";

// PHP ajoute automatiquement aux indices suivants
$nombres = [];
$nombres[] = 10;  // Indice 0
$nombres[] = 20;  // Indice 1
$nombres[] = 30;  // Indice 2

var_dump($fruits);
var_dump($nombres);

/* Sortie :
array(3) {
  [0]=>string(5) "Pomme"
  [1]=>string(6) "Banane"
  [2]=>string(6) "Orange"
}
array(3) {
  [0]=>int(10)
  [1]=>int(20)
  [2]=>int(30)
}
*/
?>
```

### Accès aux Éléments

```php
<?php
$animaux = ["Chat", "Chien", "Oiseau", "Poisson", "Lapin"];

// Accès par indice (commence à 0)
echo "Premier animal : " . $animaux[0] . "<br>";  // Chat
echo "Troisième animal : " . $animaux[2] . "<br>"; // Oiseau
echo "Dernier animal : " . $animaux[4] . "<br>";  // Lapin

// Accès au dernier élément avec count()
$dernierIndex = count($animaux) - 1;
echo "Dernier animal (dynamique) : " . $animaux[$dernierIndex] . "<br>";

// ⚠️ Attention aux indices inexistants
// echo $animaux[10]; // Warning: Undefined array key 10

// Vérification avant accès
if (isset($animaux[10])) {
    echo $animaux[10];
} else {
    echo "Cet indice n'existe pas<br>";
}
?>
```

### Modification des Éléments

```php
<?php
$notes = [12, 15, 18, 10];

echo "Notes originales : " . implode(", ", $notes) . "<br>";

// Modifier un élément existant
$notes[1] = 16;
echo "Après modification : " . implode(", ", $notes) . "<br>";

// Ajouter un nouvel élément à la fin
$notes[] = 14;
echo "Après ajout : " . implode(", ", $notes) . "<br>";

// Modifier le dernier élément
$notes[count($notes) - 1] = 20;
echo "Dernier élément modifié : " . implode(", ", $notes) . "<br>";

/* Sortie :
Notes originales : 12, 15, 18, 10
Après modification : 12, 16, 18, 10
Après ajout : 12, 16, 18, 10, 14
Dernier élément modifié : 12, 16, 18, 10, 20
*/
?>
```

### Parcourir un Tableau Indexé

```php
<?php
$villes = ["Paris", "Lyon", "Marseille", "Toulouse", "Nice"];

echo "<h4>Méthode 1 : Boucle for</h4>";
for ($i = 0; $i < count($villes); $i++) {
    echo "Ville #" . ($i + 1) . " : " . $villes[$i] . "<br>";
}

echo "<h4>Méthode 2 : Boucle foreach (recommandée)</h4>";
foreach ($villes as $ville) {
    echo "- $ville<br>";
}

echo "<h4>Méthode 3 : Foreach avec index</h4>";
foreach ($villes as $index => $ville) {
    echo "[$index] $ville<br>";
}
?>
```

### Opérations Courantes

```php
<?php
$nombres = [5, 2, 8, 1, 9, 3];

// Nombre d'éléments
echo "Nombre d'éléments : " . count($nombres) . "<br>";

// Vérifier si un tableau est vide
if (empty($nombres)) {
    echo "Le tableau est vide<br>";
} else {
    echo "Le tableau contient " . count($nombres) . " éléments<br>";
}

// Vérifier si une valeur existe
if (in_array(8, $nombres)) {
    echo "Le nombre 8 est dans le tableau<br>";
}

// Trouver l'indice d'une valeur
$position = array_search(9, $nombres);
echo "Le nombre 9 est à l'indice : $position<br>";

// Minimum et maximum
echo "Valeur minimale : " . min($nombres) . "<br>";
echo "Valeur maximale : " . max($nombres) . "<br>";

// Somme et moyenne
$somme = array_sum($nombres);
$moyenne = $somme / count($nombres);
echo "Somme : $somme<br>";
echo "Moyenne : " . number_format($moyenne, 2) . "<br>";

/* Sortie :
Nombre d'éléments : 6
Le tableau contient 6 éléments
Le nombre 8 est dans le tableau
Le nombre 9 est à l'indice : 4
Valeur minimale : 1
Valeur maximale : 9
Somme : 28
Moyenne : 4.67
*/
?>
```

### Exemple Pratique : Gestion de Notes

```php
<?php
$notes = [12, 15, 18, 10, 14, 16, 9, 17];

echo "<h4>📊 Analyse des Notes</h4>";
echo "<p>Notes : " . implode(", ", $notes) . "</p>";

$somme = array_sum($notes);
$moyenne = $somme / count($notes);
$min = min($notes);
$max = max($notes);

echo "<ul>";
echo "<li>Nombre de notes : " . count($notes) . "</li>";
echo "<li>Moyenne : " . number_format($moyenne, 2) . " / 20</li>";
echo "<li>Note minimale : $min / 20</li>";
echo "<li>Note maximale : $max / 20</li>";
echo "</ul>";

// Compter les notes >= 10
$reussites = 0;
foreach ($notes as $note) {
    if ($note >= 10) {
        $reussites++;
    }
}

$taux_reussite = ($reussites / count($notes)) * 100;
echo "<p>✅ Taux de réussite : " . number_format($taux_reussite, 1) . "%</p>";

/* Sortie :
📊 Analyse des Notes
Notes : 12, 15, 18, 10, 14, 16, 9, 17

• Nombre de notes : 8
• Moyenne : 13.88 / 20
• Note minimale : 9 / 20
• Note maximale : 18 / 20

✅ Taux de réussite : 87.5%
*/
?>
```

---

## 3️⃣ Les Tableaux Associatifs (40 min)

### Qu'est-ce qu'un Tableau Associatif ?

Un tableau associatif utilise des **clés personnalisées** (chaînes de caractères) au lieu d'indices numériques.

### Création de Tableaux Associatifs

```php
<?php
// Syntaxe courte
$personne = [
    "nom" => "Dupont",
    "prenom" => "Marie",
    "age" => 28,
    "ville" => "Paris",
    "email" => "marie.dupont@example.com"
];

// Syntaxe longue
$produit = array(
    "nom" => "Ordinateur Portable",
    "prix" => 899.99,
    "stock" => 15,
    "marque" => "TechPro"
);

// Création élément par élément
$voiture = [];
$voiture["marque"] = "Renault";
$voiture["modele"] = "Clio";
$voiture["annee"] = 2022;
$voiture["couleur"] = "Bleu";

var_dump($personne);

/* Sortie :
array(5) {
  ["nom"]=>string(6) "Dupont"
  ["prenom"]=>string(5) "Marie"
  ["age"]=>int(28)
  ["ville"]=>string(5) "Paris"
  ["email"]=>string(27) "marie.dupont@example.com"
}
*/
?>
```

### Accès aux Éléments

```php
<?php
$livre = [
    "titre" => "Le Petit Prince",
    "auteur" => "Antoine de Saint-Exupéry",
    "annee" => 1943,
    "pages" => 96,
    "genre" => "Conte philosophique"
];

// Accès par clé
echo "Titre : " . $livre["titre"] . "<br>";
echo "Auteur : " . $livre["auteur"] . "<br>";
echo "Publié en : " . $livre["annee"] . "<br>";

// Vérification de l'existence d'une clé
if (isset($livre["isbn"])) {
    echo "ISBN : " . $livre["isbn"] . "<br>";
} else {
    echo "ISBN non disponible<br>";
}

// Opérateur de coalescence nulle (PHP 7+)
$isbn = $livre["isbn"] ?? "Non renseigné";
echo "ISBN : $isbn<br>";

/* Sortie :
Titre : Le Petit Prince
Auteur : Antoine de Saint-Exupéry
Publié en : 1943
ISBN non disponible
ISBN : Non renseigné
*/
?>
```

### Modification et Ajout

```php
<?php
$produit = [
    "nom" => "Smartphone",
    "prix" => 599.99,
    "stock" => 25
];

echo "Produit initial :<br>";
print_r($produit);

// Modifier une valeur existante
$produit["prix"] = 549.99;  // Promotion !

// Ajouter de nouvelles clés
$produit["marque"] = "TechPhone";
$produit["couleur"] = "Noir";

// Supprimer une clé
unset($produit["stock"]);

echo "<br>Produit après modifications :<br>";
print_r($produit);

/* Sortie :
Produit initial :
Array ( [nom] => Smartphone [prix] => 599.99 [stock] => 25 )

Produit après modifications :
Array ( [nom] => Smartphone [prix] => 549.99 [marque] => TechPhone [couleur] => Noir )
*/
?>
```

### Parcourir un Tableau Associatif

```php
<?php
$configuration = [
    "database" => "mysql",
    "host" => "localhost",
    "port" => 3306,
    "username" => "root",
    "charset" => "utf8mb4"
];

echo "<h4>Configuration de la Base de Données</h4>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Paramètre</th><th>Valeur</th></tr>";

foreach ($configuration as $cle => $valeur) {
    echo "<tr>";
    echo "<td><strong>$cle</strong></td>";
    echo "<td>$valeur</td>";
    echo "</tr>";
}

echo "</table>";
?>
```

### Fonctions Utiles pour les Tableaux Associatifs

```php
<?php
$etudiant = [
    "nom" => "Martin",
    "prenom" => "Lucas",
    "age" => 21,
    "filiere" => "Informatique"
];

// Obtenir toutes les clés
$cles = array_keys($etudiant);
echo "Clés : " . implode(", ", $cles) . "<br>";

// Obtenir toutes les valeurs
$valeurs = array_values($etudiant);
echo "Valeurs : " . implode(", ", $valeurs) . "<br>";

// Vérifier l'existence d'une clé
if (array_key_exists("age", $etudiant)) {
    echo "La clé 'age' existe<br>";
}

// Compter les éléments
echo "Nombre d'informations : " . count($etudiant) . "<br>";

/* Sortie :
Clés : nom, prenom, age, filiere
Valeurs : Martin, Lucas, 21, Informatique
La clé 'age' existe
Nombre d'informations : 4
*/
?>
```

### Exemple Pratique : Fiche Employé

```php
<?php
$employe = [
    "matricule" => "EMP001",
    "nom" => "Bernard",
    "prenom" => "Sophie",
    "poste" => "Développeuse Web",
    "departement" => "IT",
    "salaire" => 3500,
    "date_embauche" => "2020-03-15",
    "email" => "sophie.bernard@entreprise.com"
];

echo "<h4>👤 Fiche Employé</h4>";
echo "<div style='border: 2px solid #333; padding: 15px; width: 400px;'>";

echo "<p><strong>Matricule:</strong> {$employe['matricule']}</p>";
echo "<p><strong>Nom complet:</strong> {$employe['prenom']} {$employe['nom']}</p>";
echo "<p><strong>Poste:</strong> {$employe['poste']}</p>";
echo "<p><strong>Département:</strong> {$employe['departement']}</p>";
echo "<p><strong>Salaire:</strong> " . number_format($employe['salaire'], 2) . " €</p>";
echo "<p><strong>Date d'embauche:</strong> {$employe['date_embauche']}</p>";
echo "<p><strong>Email:</strong> <a href='mailto:{$employe['email']}'>{$employe['email']}</a></p>";

// Calculer l'ancienneté
$date_embauche = new DateTime($employe['date_embauche']);
$aujourd_hui = new DateTime();
$anciennete = $aujourd_hui->diff($date_embauche);

echo "<p><strong>Ancienneté:</strong> {$anciennete->y} ans et {$anciennete->m} mois</p>";

echo "</div>";
?>
```

---

## 4️⃣ Les Tableaux Multidimensionnels (35 min)

### Qu'est-ce qu'un Tableau Multidimensionnel ?

Un tableau qui contient d'autres tableaux. On parle souvent de tableaux à 2 dimensions (matrices) ou plus.

### Tableaux à 2 Dimensions

```php
<?php
// Tableau de tableaux indexés
$notes_classe = [
    ["Alice", 15, 17, 14],
    ["Bob", 12, 10, 13],
    ["Charlie", 18, 16, 19]
];

// Accès aux éléments
echo "Première ligne : ";
print_r($notes_classe[0]);
echo "<br>";

echo "Nom du premier étudiant : " . $notes_classe[0][0] . "<br>";
echo "Deuxième note de Bob : " . $notes_classe[1][2] . "<br>";

/* Sortie :
Première ligne : Array ( [0] => Alice [1] => 15 [2] => 17 [3] => 14 )
Nom du premier étudiant : Alice
Deuxième note de Bob : 10
*/
?>
```

### Visualisation d'un Tableau 2D

```
$notes_classe = [
    ["Alice",   15, 17, 14],
    ["Bob",     12, 10, 13],
    ["Charlie", 18, 16, 19]
];

┌─────────┬──────┬──────┬──────┬──────┐
│  Index  │  [0] │  [1] │  [2] │  [3] │
├─────────┼──────┼──────┼──────┼──────┤
│   [0]   │Alice │  15  │  17  │  14  │
│   [1]   │ Bob  │  12  │  10  │  13  │
│   [2]   │Charlie│ 18  │  16  │  19  │
└─────────┴──────┴──────┴──────┴──────┘

Accès : $notes_classe[ligne][colonne]
Exemple : $notes_classe[1][2] = 10
```

### Tableaux Associatifs Multidimensionnels

```php
<?php
$etudiants = [
    [
        "nom" => "Dupont",
        "prenom" => "Marie",
        "age" => 22,
        "notes" => [15, 17, 14, 16]
    ],
    [
        "nom" => "Martin",
        "prenom" => "Jean",
        "age" => 23,
        "notes" => [12, 10, 13, 11]
    ],
    [
        "nom" => "Bernard",
        "prenom" => "Sophie",
        "age" => 21,
        "notes" => [18, 16, 19, 17]
    ]
];

// Accès aux données
echo "Premier étudiant : {$etudiants[0]['prenom']} {$etudiants[0]['nom']}<br>";
echo "Âge de Jean : {$etudiants[1]['age']} ans<br>";
echo "Première note de Sophie : {$etudiants[2]['notes'][0]}<br>";

/* Sortie :
Premier étudiant : Marie Dupont
Âge de Jean : 23 ans
Première note de Sophie : 18
*/
?>
```

### Parcourir un Tableau Multidimensionnel

```php
<?php
$produits = [
    [
        "nom" => "Ordinateur",
        "prix" => 899.99,
        "stock" => 5
    ],
    [
        "nom" => "Souris",
        "prix" => 25.50,
        "stock" => 50
    ],
    [
        "nom" => "Clavier",
        "prix" => 79.99,
        "stock" => 30
    ]
];

echo "<h4>📦 Inventaire des Produits</h4>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Produit</th><th>Prix</th><th>Stock</th><th>Valeur Totale</th></tr>";

$valeur_totale_inventaire = 0;

foreach ($produits as $produit) {
    $valeur_stock = $produit["prix"] * $produit["stock"];
    $valeur_totale_inventaire += $valeur_stock;
    
    echo "<tr>";
    echo "<td>{$produit['nom']}</td>";
    echo "<td>" . number_format($produit['prix'], 2) . " €</td>";
    echo "<td>{$produit['stock']}</td>";
    echo "<td>" . number_format($valeur_stock, 2) . " €</td>";
    echo "</tr>";
}

echo "<tr style='font-weight: bold; background-color: #f0f0f0;'>";
echo "<td colspan='3'>VALEUR TOTALE</td>";
echo "<td>" . number_format($valeur_totale_inventaire, 2) . " €</td>";
echo "</tr>";

echo "</table>";
?>
```

### Exemple Pratique : Carnet de Notes

```php
<?php
$classe = [
    [
        "nom" => "Dupont",
        "prenom" => "Alice",
        "notes" => [15, 17, 14, 16, 18]
    ],
    [
        "nom" => "Martin",
        "prenom" => "Bob",
        "notes" => [12, 10, 13, 11, 14]
    ],
    [
        "nom" => "Bernard",
        "prenom" => "Sophie",
        "notes" => [18, 16, 19, 17, 20]
    ],
    [
        "nom" => "Dubois",
        "prenom" => "Lucas",
        "notes" => [9, 11, 8, 10, 12]
    ]
];

echo "<h4>📚 Bulletin de Notes</h4>";
echo "<table border='1' cellpadding='8'>";
echo "<tr>";
echo "<th>Nom</th><th>Prénom</th><th>Notes</th><th>Moyenne</th><th>Statut</th>";
echo "</tr>";

foreach ($classe as $etudiant) {
    $somme = array_sum($etudiant["notes"]);
    $moyenne = $somme / count($etudiant["notes"]);
    
    $statut = $moyenne >= 10 ? "✅ Admis" : "❌ Redouble";
    $couleur = $moyenne >= 10 ? "#d4edda" : "#f8d7da";
    
    echo "<tr style='background-color: $couleur;'>";
    echo "<td>{$etudiant['nom']}</td>";
    echo "<td>{$etudiant['prenom']}</td>";
    echo "<td>" . implode(", ", $etudiant["notes"]) . "</td>";
    echo "<td><strong>" . number_format($moyenne, 2) . " / 20</strong></td>";
    echo "<td>$statut</td>";
    echo "</tr>";
}

echo "</table>";

/* Sortie :
┌──────────┬─────────┬─────────────────────┬──────────┬─────────────┐
│   Nom    │  Prénom │      Notes          │ Moyenne  │   Statut    │
├──────────┼─────────┼─────────────────────┼──────────┼─────────────┤
│ Dupont   │  Alice  │ 15, 17, 14, 16, 18  │  16.00   │ ✅ Admis    │
│ Martin   │   Bob   │ 12, 10, 13, 11, 14  │  12.00   │ ✅ Admis    │
│ Bernard  │ Sophie  │ 18, 16, 19, 17, 20  │  18.00   │ ✅ Admis    │
│ Dubois   │  Lucas  │  9, 11, 8, 10, 12   │  10.00   │ ✅ Admis    │
└──────────┴─────────┴─────────────────────┴──────────┴─────────────┘
*/
?>
```

### Tableaux à 3 Dimensions et Plus

```php
<?php
// Exemple : Données de ventes par année, mois, et produit
$ventes = [
    2024 => [
        "janvier" => [
            "produit_a" => 150,
            "produit_b" => 200
        ],
        "fevrier" => [
            "produit_a" => 180,
            "produit_b" => 220
        ]
    ],
    2025 => [
        "janvier" => [
            "produit_a" => 190,
            "produit_b" => 250
        ],
        "fevrier" => [
            "produit_a" => 210,
            "produit_b" => 280
        ]
    ]
];

// Accès à une donnée spécifique
$ventes_produit_a_fev_2025 = $ventes[2025]["fevrier"]["produit_a"];
echo "Ventes du produit A en février 2025 : $ventes_produit_a_fev_2025 unités<br>";

// Parcours complet
foreach ($ventes as $annee => $mois_data) {
    echo "<h5>Année $annee</h5>";
    foreach ($mois_data as $mois => $produits) {
        echo "<strong>$mois :</strong> ";
        foreach ($produits as $produit => $quantite) {
            echo "$produit ($quantite unités) ";
        }
        echo "<br>";
    }
}
?>
```

---

## 5️⃣ Fonctions Utiles pour les Tableaux (35 min)

### Ajout et Suppression d'Éléments

```php
<?php
$fruits = ["Pomme", "Banane"];

// Ajouter à la fin
array_push($fruits, "Orange", "Fraise");
// Ou simplement : $fruits[] = "Orange";

echo "Après ajout : " . implode(", ", $fruits) . "<br>";

// Supprimer et retourner le dernier élément
$dernier = array_pop($fruits);
echo "Élément retiré : $dernier<br>";
echo "Tableau : " . implode(", ", $fruits) . "<br>";

// Ajouter au début
array_unshift($fruits, "Kiwi");
echo "Après ajout au début : " . implode(", ", $fruits) . "<br>";

// Supprimer et retourner le premier élément
$premier = array_shift($fruits);
echo "Premier élément retiré : $premier<br>";
echo "Tableau final : " . implode(", ", $fruits) . "<br>";

/* Sortie :
Après ajout : Pomme, Banane, Orange, Fraise
Élément retiré : Fraise
Tableau : Pomme, Banane, Orange
Après ajout au début : Kiwi, Pomme, Banane, Orange
Premier élément retiré : Kiwi
Tableau final : Pomme, Banane, Orange
*/
?>
```

### Tri de Tableaux

```php
<?php
// Tri de tableaux indexés
$nombres = [5, 2, 8, 1, 9, 3];

// Tri croissant (modifie le tableau original)
sort($nombres);
echo "Tri croissant : " . implode(", ", $nombres) . "<br>";

// Tri décroissant
rsort($nombres);
echo "Tri décroissant : " . implode(", ", $nombres) . "<br>";

// Tri de tableaux associatifs
$ages = [
    "Alice" => 25,
    "Bob" => 30,
    "Charlie" => 22,
    "Diana" => 28
];

// Tri par valeurs (croissant)
asort($ages);
echo "<br>Tri par âge (asort) :<br>";
foreach ($ages as $nom => $age) {
    echo "- $nom : $age ans<br>";
}

// Tri par clés
ksort($ages);
echo "<br>Tri alphabétique par nom (ksort) :<br>";
foreach ($ages as $nom => $age) {
    echo "- $nom : $age ans<br>";
}

// Tri par valeurs (décroissant)
arsort($ages);
echo "<br>Tri par âge décroissant (arsort) :<br>";
foreach ($ages as $nom => $age) {
    echo "- $nom : $age ans<br>";
}

/* Sortie :
Tri croissant : 1, 2, 3, 5, 8, 9
Tri décroissant : 9, 8, 5, 3, 2, 1

Tri par âge (asort) :
- Charlie : 22 ans
- Alice : 25 ans
- Diana : 28 ans
- Bob : 30 ans

Tri alphabétique par nom (ksort) :
- Alice : 25 ans
- Bob : 30 ans
- Charlie : 22 ans
- Diana : 28 ans

Tri par âge décroissant (arsort) :
- Bob : 30 ans
- Diana : 28 ans
- Alice : 25 ans
- Charlie : 22 ans
*/
?>
```

### Tableau des Fonctions de Tri

| Fonction | Description | Préserve les clés ? |
|----------|-------------|---------------------|
| `sort()` | Tri croissant par valeurs | ❌ Non |
| `rsort()` | Tri décroissant par valeurs | ❌ Non |
| `asort()` | Tri croissant par valeurs | ✅ Oui |
| `arsort()` | Tri décroissant par valeurs | ✅ Oui |
| `ksort()` | Tri croissant par clés | ✅ Oui |
| `krsort()` | Tri décroissant par clés | ✅ Oui |
| `usort()` | Tri personnalisé par valeurs | ❌ Non |

### Recherche dans les Tableaux

```php
<?php
$prenoms = ["Alice", "Bob", "Charlie", "Diana", "Eve"];

// Vérifier l'existence d'une valeur
if (in_array("Charlie", $prenoms)) {
    echo "Charlie est dans le tableau<br>";
}

// Trouver la position d'une valeur
$position = array_search("Diana", $prenoms);
echo "Diana est à l'indice $position<br>";

// Recherche qui échoue
$resultat = array_search("Frank", $prenoms);
if ($resultat === false) {
    echo "Frank n'est pas dans le tableau<br>";
}

// Filtrer un tableau
$nombres = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$pairs = array_filter($nombres, function($n) {
    return $n % 2 == 0;
});

echo "Nombres pairs : " . implode(", ", $pairs) . "<br>";

/* Sortie :
Charlie est dans le tableau
Diana est à l'indice 3
Frank n'est pas dans le tableau
Nombres pairs : 2, 4, 6, 8, 10
*/
?>
```

### Transformation de Tableaux

```php
<?php
$nombres = [1, 2, 3, 4, 5];

// array_map : appliquer une fonction à chaque élément
$carres = array_map(function($n) {
    return $n * $n;
}, $nombres);

echo "Nombres : " . implode(", ", $nombres) . "<br>";
echo "Carrés : " . implode(", ", $carres) . "<br>";

// array_reduce : réduire à une seule valeur
$somme = array_reduce($nombres, function($carry, $item) {
    return $carry + $item;
}, 0);

echo "Somme : $somme<br>";

// array_slice : extraire une portion
$selection = array_slice($nombres, 1, 3);
echo "Éléments 1 à 3 : " . implode(", ", $selection) . "<br>";

// array_merge : fusionner des tableaux
$tab1 = ["a", "b"];
$tab2 = ["c", "d"];
$fusion = array_merge($tab1, $tab2);
echo "Fusion : " . implode(", ", $fusion) . "<br>";

/* Sortie :
Nombres : 1, 2, 3, 4, 5
Carrés : 1, 4, 9, 16, 25
Somme : 15
Éléments 1 à 3 : 2, 3, 4
Fusion : a, b, c, d
*/
?>
```

### Conversion et Affichage

```php
<?php
$fruits = ["Pomme", "Banane", "Orange"];

// Convertir un tableau en chaîne
$chaine = implode(", ", $fruits);
echo "Chaîne : $chaine<br>";

// Convertir une chaîne en tableau
$texte = "PHP,JavaScript,Python,Java";
$langages = explode(",", $texte);
echo "Langages : " . print_r($langages, true) . "<br>";

// Afficher la structure d'un tableau
$personne = ["nom" => "Dupont", "age" => 30];

echo "<h5>print_r() :</h5>";
echo "<pre>";
print_r($personne);
echo "</pre>";

echo "<h5>var_dump() :</h5>";
echo "<pre>";
var_dump($personne);
echo "</pre>";

/* Sortie :
Chaîne : Pomme, Banane, Orange
Langages : Array ( [0] => PHP [1] => JavaScript [2] => Python [3] => Java )

print_r() :
Array
(
    [nom] => Dupont
    [age] => 30
)

var_dump() :
array(2) {
  ["nom"]=>string(6) "Dupont"
  ["age"]=>int(30)
}
*/
?>
```

### Récapitulatif des Fonctions Essentielles

| Fonction | Usage | Exemple |
|----------|-------|---------|
| `count()` | Compter les éléments | `count($tab)` |
| `array_push()` | Ajouter à la fin | `array_push($tab, "valeur")` |
| `array_pop()` | Retirer le dernier | `$dernier = array_pop($tab)` |
| `array_merge()` | Fusionner des tableaux | `array_merge($tab1, $tab2)` |
| `array_slice()` | Extraire une portion | `array_slice($tab, 1, 3)` |
| `in_array()` | Vérifier l'existence | `in_array("valeur", $tab)` |
| `array_search()` | Trouver la position | `array_search("valeur", $tab)` |
| `implode()` | Tableau → Chaîne | `implode(", ", $tab)` |
| `explode()` | Chaîne → Tableau | `explode(",", $chaine)` |
| `sort()` | Trier | `sort($tab)` |

---

## 6️⃣ Exercices Guidés (30 min)

### Exercice 1 : Liste de Courses ⭐

**Objectif :** Créer un tableau de courses et l'afficher.

```php
<?php
// SOLUTION
$courses = ["Pain", "Lait", "Œufs", "Fromage", "Tomates"];

echo "<h4>🛒 Liste de Courses</h4>";
echo "<ul>";
foreach ($courses as $article) {
    echo "<li>$article</li>";
}
echo "</ul>";

echo "<p>Nombre d'articles : " . count($courses) . "</p>";

/* Sortie :
🛒 Liste de Courses
• Pain
• Lait
• Œufs
• Fromage
• Tomates

Nombre d'articles : 5
*/
?>
```

---

### Exercice 2 : Calcul de Moyenne ⭐⭐

**Objectif :** Calculer la moyenne d'un tableau de notes.

```php
<?php
// SOLUTION
$notes = [15, 12, 18, 14, 16, 11, 17];

$somme = array_sum($notes);
$moyenne = $somme / count($notes);
$min = min($notes);
$max = max($notes);

echo "<h4>📊 Statistiques des Notes</h4>";
echo "<p>Notes : " . implode(", ", $notes) . "</p>";
echo "<ul>";
echo "<li>Nombre de notes : " . count($notes) . "</li>";
echo "<li>Somme : $somme</li>";
echo "<li>Moyenne : " . number_format($moyenne, 2) . " / 20</li>";
echo "<li>Note minimale : $min / 20</li>";
echo "<li>Note maximale : $max / 20</li>";
echo "</ul>";

/* Sortie :
📊 Statistiques des Notes
Notes : 15, 12, 18, 14, 16, 11, 17

• Nombre de notes : 7
• Somme : 103
• Moyenne : 14.71 / 20
• Note minimale : 11 / 20
• Note maximale : 18 / 20
*/
?>
```

---

### Exercice 3 : Catalogue de Produits ⭐⭐

**Objectif :** Créer un catalogue avec tableaux associatifs.

```php
<?php
// SOLUTION
$produits = [
    [
        "nom" => "T-shirt",
        "prix" => 19.99,
        "taille" => "M",
        "couleur" => "Bleu"
    ],
    [
        "nom" => "Jean",
        "prix" => 49.99,
        "taille" => "L",
        "couleur" => "Noir"
    ],
    [
        "nom" => "Basket",
        "prix" => 79.99,
        "taille" => "42",
        "couleur" => "Blanc"
    ]
];

echo "<h4>👕 Catalogue Produits</h4>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Produit</th><th>Prix</th><th>Taille</th><th>Couleur</th></tr>";

foreach ($produits as $produit) {
    echo "<tr>";
    echo "<td>{$produit['nom']}</td>";
    echo "<td>" . number_format($produit['prix'], 2) . " €</td>";
    echo "<td>{$produit['taille']}</td>";
    echo "<td>{$produit['couleur']}</td>";
    echo "</tr>";
}

echo "</table>";
?>
```

---

### Exercice 4 : Tri de Notes ⭐⭐⭐

**Objectif :** Trier les étudiants par moyenne décroissante.

```php
<?php
// SOLUTION
$etudiants = [
    ["nom" => "Alice", "notes" => [15, 17, 14]],
    ["nom" => "Bob", "notes" => [12, 10, 13]],
    ["nom" => "Charlie", "notes" => [18, 16, 19]],
    ["nom" => "Diana", "notes" => [14, 15, 16]]
];

// Calculer les moyennes
foreach ($etudiants as &$etudiant) {
    $somme = array_sum($etudiant["notes"]);
    $etudiant["moyenne"] = $somme / count($etudiant["notes"]);
}
unset($etudiant); // Détruire la référence

// Trier par moyenne décroissante
usort($etudiants, function($a, $b) {
    return $b["moyenne"] <=> $a["moyenne"];
});

// Afficher le classement
echo "<h4>🏆 Classement des Étudiants</h4>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Rang</th><th>Nom</th><th>Notes</th><th>Moyenne</th></tr>";

$rang = 1;
foreach ($etudiants as $etudiant) {
    $medaille = "";
    if ($rang == 1) $medaille = "🥇";
    elseif ($rang == 2) $medaille = "🥈";
    elseif ($rang == 3) $medaille = "🥉";
    
    echo "<tr>";
    echo "<td>$medaille $rang</td>";
    echo "<td>{$etudiant['nom']}</td>";
    echo "<td>" . implode(", ", $etudiant["notes"]) . "</td>";
    echo "<td><strong>" . number_format($etudiant["moyenne"], 2) . " / 20</strong></td>";
    echo "</tr>";
    
    $rang++;
}

echo "</table>";

/* Sortie :
🏆 Classement des Étudiants
┌──────┬─────────┬────────────┬──────────┐
│ Rang │   Nom   │   Notes    │ Moyenne  │
├──────┼─────────┼────────────┼──────────┤
│ 🥇 1 │ Charlie │ 18, 16, 19 │  17.67   │
│ 🥈 2 │ Alice   │ 15, 17, 14 │  15.33   │
│ 🥉 3 │ Diana   │ 14, 15, 16 │  15.00   │
│    4 │ Bob     │ 12, 10, 13 │  11.67   │
└──────┴─────────┴────────────┴──────────┘
*/
?>
```

---

### Exercice 5 : Recherche dans un Inventaire ⭐⭐⭐

**Objectif :** Rechercher des produits selon des critères.

```php
<?php
// SOLUTION
$inventaire = [
    ["nom" => "Ordinateur", "categorie" => "Informatique", "prix" => 899, "stock" => 5],
    ["nom" => "Souris", "categorie" => "Informatique", "prix" => 25, "stock" => 50],
    ["nom" => "Chaise", "categorie" => "Mobilier", "prix" => 149, "stock" => 12],
    ["nom" => "Bureau", "categorie" => "Mobilier", "prix" => 299, "stock" => 8],
    ["nom" => "Clavier", "categorie" => "Informatique", "prix" => 79, "stock" => 30]
];

// Filtrer les produits Informatique
$produits_info = array_filter($inventaire, function($produit) {
    return $produit["categorie"] == "Informatique";
});

echo "<h4>💻 Produits Informatique</h4>";
echo "<ul>";
foreach ($produits_info as $produit) {
    echo "<li>{$produit['nom']} - {$produit['prix']} € (Stock: {$produit['stock']})</li>";
}
echo "</ul>";

// Trouver les produits avec stock faible (< 10)
$stock_faible = array_filter($inventaire, function($produit) {
    return $produit["stock"] < 10;
});

echo "<h4>⚠️ Produits avec Stock Faible</h4>";
echo "<ul>";
foreach ($stock_faible as $produit) {
    echo "<li>{$produit['nom']} - Stock: {$produit['stock']} unités</li>";
}
echo "</ul>";

// Calculer la valeur totale de l'inventaire
$valeur_totale = array_reduce($inventaire, function($total, $produit) {
    return $total + ($produit["prix"] * $produit["stock"]);
}, 0);

echo "<p><strong>💰 Valeur totale de l'inventaire : " . number_format($valeur_totale, 2) . " €</strong></p>";

/* Sortie :
💻 Produits Informatique
• Ordinateur - 899 € (Stock: 5)
• Souris - 25 € (Stock: 50)
• Clavier - 79 € (Stock: 30)

⚠️ Produits avec Stock Faible
• Ordinateur - Stock: 5 unités
• Bureau - Stock: 8 unités

💰 Valeur totale de l'inventaire : 10,132.00 €
*/
?>
```

---

## 7️⃣ Résumé et Devoirs (15 min)

### 📝 Points Clés à Retenir

#### Tableaux Indexés
- ✅ Indices numériques automatiques (0, 1, 2...)
- ✅ Création : `$tab = ["valeur1", "valeur2"]`
- ✅ Accès : `$tab[0]`
- ✅ Parcours avec `for` ou `foreach`

#### Tableaux Associatifs
- ✅ Paires clé-valeur personnalisées
- ✅ Création : `$tab = ["cle" => "valeur"]`
- ✅ Accès : `$tab["cle"]`
- ✅ Parcours : `foreach ($tab as $cle => $valeur)`

#### Tableaux Multidimensionnels
- ✅ Tableaux contenant d'autres tableaux
- ✅ Accès : `$tab[0]["cle"]` ou `$tab[0][1]`
- ✅ Idéal pour des données structurées complexes

#### Fonctions Essentielles
- `count()` : Nombre d'éléments
- `in_array()` : Vérifier l'existence
- `array_push()` / `array_pop()` : Ajouter/Retirer
- `sort()` / `asort()` / `ksort()` : Trier
- `implode()` / `explode()` : Conversion chaîne ↔ tableau

---

### 🏠 Devoirs à Rendre (avant jeudi 16 janvier 2026, 18h00)

#### Devoir 1 : Gestionnaire de Contacts ⭐⭐

Créez un annuaire de contacts avec les fonctionnalités suivantes :

**Spécifications :**
- Un tableau de contacts (minimum 5 personnes)
- Chaque contact doit avoir : nom, prénom, téléphone, email, ville
- Afficher tous les contacts dans un tableau HTML
- Compter le nombre total de contacts
- Afficher uniquement les contacts d'une ville spécifique (ex: "Paris")

**Structure attendue :**
```php
$contacts = [
    [
        "nom" => "Dupont",
        "prenom" => "Marie",
        "telephone" => "01 23 45 67 89",
        "email" => "marie.dupont@example.com",
        "ville" => "Paris"
    ],
    // ... autres contacts
];
```

---

#### Devoir 2 : Système de Gestion de Bibliothèque ⭐⭐⭐

Créez un système de gestion pour une bibliothèque.

**Spécifications :**
- Un tableau de livres (minimum 8 livres)
- Chaque livre doit avoir : titre, auteur, année, genre, disponible (true/false)
- Afficher tous les livres dans un tableau HTML avec statut
- Compter le nombre de livres disponibles
- Afficher les livres par genre
- Trier les livres par année de publication (du plus récent au plus ancien)
- Calculer l'âge moyen de la collection

**Exemple de structure :**
```php
$bibliotheque = [
    [
        "titre" => "Le Petit Prince",
        "auteur" => "Antoine de Saint-Exupéry",
        "annee" => 1943,
        "genre" => "Conte",
        "disponible" => true
    ],
    // ... autres livres
];
```

---

#### Devoir 3 : Système de Notation d'Étudiants ⭐⭐⭐⭐

Créez un système complet de gestion de notes.

**Spécifications :**
- Un tableau d'au moins 6 étudiants
- Chaque étudiant a : nom, prénom, 5 notes minimum (dans différentes matières)
- Pour chaque étudiant, calculer :
  - La moyenne générale
  - La note minimale
  - La note maximale
  - Le nombre de notes >= 10
- Afficher un tableau récapitulatif avec toutes ces informations
- Afficher le classement des étudiants par moyenne (avec médailles 🥇🥈🥉)
- Calculer la moyenne de la classe
- Identifier le meilleur étudiant et afficher ses informations

**Bonus :**
- Ajouter des matières nommées (tableau associatif pour les notes)
- Calculer la moyenne par matière pour toute la classe
- Afficher un graphique ASCII de répartition des moyennes

---

### 📚 Ressources Supplémentaires

- [Documentation officielle PHP - Tableaux](https://www.php.net/manual/fr/language.types.array.php)
- [PHP Array Functions](https://www.php.net/manual/fr/ref.array.php)

---

### 🎯 Prochaine Séance

**Mercredi 15 janvier 2026 - Les Fonctions en PHP**
- Définir et appeler des fonctions
- Paramètres et valeurs de retour
- Portée des variables
- Fonctions anonymes

---

### ✅ Checklist de Validation des Devoirs

Avant de soumettre vos devoirs, vérifiez que :

- [ ] Votre code est correctement indenté
- [ ] Toutes les variables ont des noms explicites
- [ ] Vous avez commenté les parties complexes
- [ ] Le code s'exécute sans erreur
- [ ] L'affichage est clair et bien formaté
- [ ] Vous avez respecté toutes les spécifications
- [ ] Les fichiers sont nommés correctement :
  - `devoir1_contacts.php`
  - `devoir2_bibliotheque.php`
  - `devoir3_notation.php`

---

**Bon courage et à demain ! 💪**