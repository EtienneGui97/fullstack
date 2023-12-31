# CSS Débutant
Ce document contient les fondamentaux du CSS.

## Table des matières
1. [Introduction au CSS](#introduction-au-css)
2. [Intégration du CSS](#intégration-du-css)
3. [Sélecteurs CSS](#sélecteur-en-css)
4. [Propriétés CSS de base](#propriétés-css-de-base)
5. [Boîte modèle CSS](#boîte-modèle-css)
6. [Arrière-plans et bordures](#arrière-plan-et-bordures)
7. [Mise en page de base](#mise-en-page-de-base)

## Introduction au CSS
CSS (Cascading Style Sheets) est un langage de feuilles de style qui est utilisé pour définir l'apparence visuelle des éléments HTML sur une page web. Avec CSS, vous pouvez contrôler la couleur, la police, la taille, la mise en page, les marges, les bordures, ... 

## Intégration du CSS
Le CSS peut être ajouter dans le fichier HTML avec la balise `<style>` dans le `<head>`.
```HTML
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Exemple avec la balise style</title>
    <style>
        /* Styles CSS définis dans la balise style */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Exemple de balise style</h1></p>
</body>
</html>
```
Le CSS peut également être contenu dans un fichier CSS et intégré dans le fichier HTML.
```HTML
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
```

## Sélecteur en CSS
Le code CSS peut être appliqué sur différents éléments selon le sélecteur utilisé.

### Sélécteur d'un élément HTML
Tous les paragraphes seront écris en bleu
```HTML
<p>Mon paragraphe</p>
```

```CSS
p {
    color: blue;
}
```

### Sélecteur d'une classe ( . )
Une classe peut être attribuées à plusieurs éléments HTML.
```HTML
<p class="maClasse">Mon paragraphe</p>
```

```CSS
.maClasse {
    font-size: 16px;
}
```

### Sélecteur d'id ( # )
L'id est unique dans un un document HTML.
```HTML
<p id="monParagraphe">Mon paragraphe</p>
```

```CSS
#monParagraphe {
    font-size: 16px;
}
```

## Propriétés CSS de base
Quelques exemples de propriétés de base :
1. **`color` :** Cette propriété définit la couleur du texte à l'intérieur d'un élément HTML.  
   Exemple : `color: red;` définira la couleur du texte en rouge.
2. **`font-family` :** Cette propriété permet de spécifier la police de caractères à utiliser pour le texte à l'intérieur de l'élément.  
   Exemple : `font-family: Arial, sans-serif;` spécifie la police Arial, suivie de polices de secours sans-serif.

3. **`font-size` :** Cette propriété définit la taille du texte. Vous pouvez utiliser des valeurs comme des pixels (`px`), des ems (`em`), des pourcentages (`%`), etc.  
   Exemple : `font-size: 16px;` définira la taille du texte à 16 pixels.

4. **`background-color` :** Cette propriété permet de définir la couleur de fond d'un élément HTML.  
   Exemple : `background-color: #f0f0f0;` définira la couleur de fond en gris clair.

5. **`margin` et `padding` :** Ces propriétés permettent de gérer les marges et les espacements autour et à l'intérieur des éléments HTML. Vous pouvez définir des valeurs pour le haut, le bas, la gauche et la droite.  
   Exemple : `margin: 10px;` définira une marge de 10 pixels sur tous les côtés.

6. **`border` :** Cette propriété permet de définir des bordures autour des éléments HTML. Vous pouvez spécifier l'épaisseur, le style et la couleur de la bordure.  
   Exemple : `border: 1px solid #000;` définira une bordure de 1 pixel d'épaisseur, de style solide et de couleur noire.

7. **`text-align` :** Cette propriété définit l'alignement horizontal du texte à l'intérieur de l'élément.  
   Exemple : `text-align: center;` alignera le texte au centre de l'élément.

8. **`text-decoration` :** Cette propriété permet de définir la décoration du texte, telle que le soulignement.  
   Exemple : `text-decoration: underline;` soulignera le texte.

9. **`text-transform` :** Cette propriété permet de gérer la transformation du texte, telle que la mise en majuscules ou en minuscules.  
   Exemple : `text-transform: uppercase;` transformera le texte en majuscules.

10. **`width` et `height` :** Ces propriétés permettent de définir la largeur et la hauteur d'un élément.  
   Exemple : `width: 200px;` définira la largeur de l'élément à 200 pixels.

11. **`display` :** Cette propriété contrôle le modèle de rendu de l'élément, tel que `block`, `inline`, ou `inline-block`.

12. **`position` :** Cette propriété est utilisée pour contrôler la position des éléments. Vous pouvez utiliser des valeurs comme `relative`, `absolute`, et `fixed`.

13. **`float` :** Cette propriété est utilisée pour aligner un élément à gauche ou à droite de son conteneur.

14. **`clear` :** Cette propriété permet de contrôler le comportement des éléments par rapport aux éléments flottants.

15. **`list-style` :** Cette propriété contrôle le style des listes, tel que les puces (`list-style-type`) et la position (`list-style-position`).

## Boîte modèle CSS

La "Boîte modèle CSS" (CSS Box Model en anglais) est un concept fondamental en CSS qui définit comment chaque élément HTML est rendu en tant que boîte rectangulaire, avec des propriétés telles que la largeur, la hauteur, les marges, les bordures, les rembourrages et le contenu. Comprendre le modèle de boîte est essentiel pour contrôler la mise en page et le design des éléments sur une page web.

Le modèle de boîte CSS se compose de plusieurs parties :

1. **Contenu (Content)** : C'est la zone intérieure de la boîte où le texte ou le contenu de l'élément est affiché. Vous pouvez définir la largeur et la hauteur du contenu avec les propriétés `width` (largeur) et `height` (hauteur).

2. **Rembourrage (Padding)** : C'est la zone entre le contenu et la bordure de la boîte. Vous pouvez définir l'épaisseur du rembourrage avec les propriétés `padding-top`, `padding-right`, `padding-bottom` et `padding-left`. Le rembourrage est généralement utilisé pour créer de l'espace autour du contenu.

3. **Bordure (Border)** : C'est la bordure autour de la boîte. Vous pouvez définir l'épaisseur, le style et la couleur de la bordure avec les propriétés `border-width`, `border-style` et `border-color`. Par exemple, `border: 1px solid #000;` définit une bordure d'un pixel d'épaisseur, de style solide et de couleur noire.

4. **Marge (Margin)** : C'est la zone en dehors de la bordure, qui sépare cette boîte des autres éléments voisins. Vous pouvez définir la marge avec les propriétés `margin-top`, `margin-right`, `margin-bottom` et `margin-left`. La marge est utilisée pour contrôler l'espacement entre les éléments.

En combinant ces éléments, vous pouvez contrôler la mise en page et la présentation de votre contenu HTML. Par exemple, vous pouvez définir la largeur et la hauteur du contenu, ajouter du rembourrage pour l'espace intérieur, une bordure pour l'encadrement et des marges pour l'espacement autour de l'élément.

Le modèle de boîte CSS est un concept clé pour le positionnement des éléments sur une page web, et il est essentiel de le maîtriser pour créer des mises en page web efficaces et esthétiques.

```css
/* Styles CSS */
.my-box {
    width: 200px;               /* Largeur du contenu */
    height: 100px;              /* Hauteur du contenu */
    padding: 20px;              /* Rembourrage autour du contenu */
    border: 2px solid #333;     /* Bordure de 2 pixels de large, de style solide, couleur #333 */
    margin: 10px;               /* Marge autour de la boîte */
}
```

```HTML
<!-- Élément HTML -->
<div class="my-box">
    Ceci est un exemple de contenu dans une boîte CSS.
</div>
```

## Arrière plan et bordures
```HTML
<div class="example-box">
    <h1>Arrière-plans et bordures en CSS</h1>
    <p>
        Cet exemple illustre l'utilisation des arrière-plans et des bordures en CSS.
    </p>
</div>
```

```CSS
/* Style de l'arrière-plan */
.example-box {
    background-color: #f0f0f0; /* Couleur de fond */
    background-image: url('background.jpg'); /* Image de fond */
    background-size: cover; /* Redimensionner l'image pour couvrir toute la boîte */
    background-repeat: no-repeat; /* Ne pas répéter l'image */
    background-position: center center; /* Position de l'image centrée */
}

/* Style de la bordure */
.example-box {
    border: 2px solid #333; /* Bordure de 2 pixels de large, de style solide, couleur #333 */
}
```
## Mise en page de base
### Position
Le positionnement en CSS vous permet de contrôler l'emplacement des éléments sur une page web. Il existe plusieurs valeurs de propriété position que vous pouvez utiliser :

- **static** (position statique) : C'est la valeur par défaut. L'élément est positionné en fonction du flux normal de la page.

- **relative** (position relative) : L'élément est positionné par rapport à sa position normale. Vous pouvez utiliser les propriétés top, right, bottom, et left pour ajuster sa position.

- **absolute** (position absolue) : L'élément est positionné par rapport à son premier parent positionné. Si aucun parent n'est positionné, il est positionné par rapport au corps du document.

- **fixed** (position fixe) : L'élément est positionné par rapport à la fenêtre du navigateur, ce qui signifie qu'il reste à la même position même lorsque la page est défilée.

### Float
Le flottement (ou float) en CSS est principalement utilisé pour mettre en page du texte autour d'une image ou d'un autre élément. Vous pouvez utiliser la propriété float avec les valeurs left ou right pour indiquer dans quelle direction l'élément doit être flotté.

```CSS
.image {
    float: left; /* Ou float: right; */
}
```

Cela permet aux éléments situés après l'élément flotté de s'ajuster autour de lui.

### Display
La propriété display en CSS vous permet de contrôler comment un élément est affiché. Voici quelques valeurs courantes :

- **block** : L'élément est affiché comme un bloc et occupe toute la largeur disponible.

- **inline** : L'élément est affiché comme une ligne en ligne avec le texte. Il ne prend pas toute la largeur.

- **inline-block** : L'élément est affiché comme une ligne, mais vous pouvez définir une largeur et une hauteur.

- **none** : L'élément est complètement masqué et n'occupe pas d'espace sur la page.
