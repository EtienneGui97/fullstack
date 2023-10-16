# Markdown
Le Markdown est un langage de balisage léger utilisé pour formater du texte sur le web. Il a été créé pour être facile à lire et à écrire, tout en permettant de convertir rapidement du texte brut en HTML.

Le Markdown repose sur l'utilisation de caractères spéciaux et de symboles pour indiquer la mise en forme du texte, comme la création de titres, de listes, de liens hypertexte, d'images, etc.

Cette documentation est une version abrégée, la documentation complète sur trouve [ici](https://www.markdownguide.org/).

## Table des matières

- [Titre](#titre)
- [Mise en forme du texte](#mise-en-forme-du-texte)
- [Liste](#liste)
- [Lien](#lien)
- [Image](#image)
- [Ligne horizontale](#ligne-horizontale)
- [Code](#code)
- [Tableau](#tableau)



## Titre
Pour créer des titres, utilisez un à six symboles dièse **#** suivis d'un espace. Le nombre de **#** définit le niveau du titre.

```
# Titre de niveau 1
## Titre de niveau 2
### Titre de niveau 3
```

## Mise en forme du texte
Pour mettre du texte en **gras**, entourez-le de deux astérisques et d'un astérisque pour le mettre en *italique*.

```
**Texte en gras**
*Texte en italique*
```

## Liste
### Non ordonnée
Pour créer une liste non ordonnée, utilisez un astérisque ou un tiret, suivis d'un espace.
```
- Élément 1
- Élément 2
  - Élément 2.1
  - Élément 2.2
* Élément 3
```
### Ordonnée
Pour créer une liste ordonnée, utilisez un chiffre, suivis d'un point et d'un espace.
```
1. Premier élément
2. Deuxième élément
3. Troisième élément
```

## Lien
Pour insérer un lien, utilisez la syntaxe `[Texte du lien](URL)`.
```
[titre](https://www.example.com)
```

## Image
Pour afficher une image, utilisez la syntaxe `![Texte alternatif](URL de l'image)`.
```
![titre](https://www.example.com/img.png)
```

## Ligne horizontale
Pour insérer une ligne horizontale, utilisez trois astérisques, trois tirets ou trois traits de soulignement.
```
---
```

## Code
Pour afficher du code en ligne, entourez-le d'accent grave **`**. Pour afficher du code en bloc, utilisez trois accents graves.
```
```javascript
function add(a, b) {
return a + b;
}```
```


## Tableau
Les tableaux sont créés en utilisant des barres verticales **|** pour séparer les colonnes, et des tirets **-** pour créer une ligne de séparation. Vous pouvez également aligner le texte dans les colonnes avec les deux-points **:**.

```
| Colonne de gauche | Colonne du centre | Colonne de droite |
|:------------------ |:-----------------:| -----------------:|
| Alignée à gauche  | Centrée           | Alignée à droite   |
| Contenu           | Contenu           | Contenu            |
| Texte             | Texte             | Texte              |
```