# Niveau Avancé

12. [Animations CSS](#animations-css)
13. [Préprocesseurs CSS](#préprocesseurs-css)
14. [Architecture CSS](#architecture-css)
15. [Responsive Web Design](#responsive-web-design)
16. Performance CSS
17. Cross-browser Compatibility
18. Nouveautés CSS
19. Projet personnel
20. Expérimentation avancée

## Animations CSS
Les animations CSS vous permettent de créer des transitions visuelles et des effets d'animation sur les éléments HTML de votre site web.

### Elément de base
```HTML
<div class="mon-element"></div>
```

```CSS
.mon-element {
    width: 100px;
    height: 100px;
    background-color: blue;
}
```

### Animation
Utilisez la règle @keyframes pour définir l'animation en spécifiant des étapes clés et les propriétés CSS à animer à chaque étape.
```CSS
@keyframes mon-animation {
    0% {
        background-color: blue;
    }
    50% {
        background-color: red;
    }
    100% {
        background-color: green;
    }
}
```

### Appliquer l'animation
Appliquez l'animation à l'élément en utilisant la propriété `animation`. Vous devez spécifier le nom de l'animation, la durée et d'autres paramètres.
```CSS
.mon-element {
    animation: mon-animation 3s infinite alternate;
}
```

- `mon-animation` est le nom de l'animation défini précédemment.
- `3s` est la durée de l'animation (3 secondes dans cet exemple).
- `infinite` signifie que l'animation se répète en continu.
- `alternate` signifie que l'animation change de direction à chaque répétition.

## Préprocesseurs CSS
Un préprocesseur CSS est un langage de programmation qui permet aux développeurs web de créer des feuilles de style CSS de manière plus efficace et organisée. Les préprocesseurs CSS introduisent des fonctionnalités supplémentaires qui ne sont pas disponibles dans CSS natif, telles que des variables, des mixins, des fonctions, des opérateurs, des boucles, et bien d'autres. Les feuilles de style écrites avec un préprocesseur sont ensuite compilées en CSS standard, que les navigateurs web peuvent interpréter.

### SCSS

**Variables** : Vous pouvez définir des variables pour stocker des valeurs réutilisables, telles que des couleurs, des tailles de police, etc.

```SCSS
$primary-color: #3498db;
$font-size: 16px;
```
**Nesting** : Vous pouvez imbriquer des règles CSS pour mieux organiser votre code.

```SCSS
.container {
    width: 100%;
    padding: 20px;

    .header {
        background-color: $primary-color;
        color: #fff;
    }

    .content {
        font-size: $font-size;
    }
}
```

**Mixin** : Les mixins sont des morceaux de code réutilisables. Vous pouvez les définir avec @mixin et les inclure avec @include.

```SCSS
@mixin flex-center {
    display: flex;
    justify-content: center;
    align-items: center;
}

.box {
    @include flex-center;
}
```

**Fonctions** Les fonctions personnalisées permettent d'effectuer des opérations ou générer des styles réutilisables.

```SCSS
@function calculate-width($element-width, $parent-width) {
  @return ($element-width / $parent-width) * 100%;
}

$container-width: 800px;

.main-content {
  width: calculate-width(600px, $container-width);
}
```


**Opérations mathématiques** : Vous pouvez effectuer des opérations mathématiques sur les valeurs.

```SCSS
$margin: 10px;
$padding: $margin * 2;
```

**Importation** : Vous pouvez importer d'autres fichiers SCSS pour organiser votre code en plusieurs fichiers.
```SCSS
@import "variables";
@import "layout";
```
## Architecture CSS
L'architecture CSS joue un rôle essentiel dans le développement web, car elle permet d'organiser, de gérer et de maintenir des feuilles de style de manière efficace. Parmi les méthodologies de CSS les plus couramment utilisées pour gérer la complexité des feuilles de style, on trouve BEM, SMACSS et OOCSS. Voici un aperçu de ces méthodologies :

### BEM (Block Element Modifier)
BEM est une méthodologie qui encourage une structure CSS basée sur des noms de classes significatifs et modulaires. Elle repose sur trois concepts principaux :

**Block (B)** : Représente un composant ou un élément autonome de l'interface utilisateur, tel qu'un bouton, un formulaire, un en-tête, etc.

**Element (E)** : Représente une partie d'un bloc qui n'a pas de signification autonome et est liée au bloc. Par exemple, un bouton peut avoir un élément pour son libellé.

**Modifier (M)** : Représente une variante ou une modification de l'apparence ou du comportement d'un bloc ou d'un élément. Par exemple, un bouton peut avoir une classe de modification pour le rendre plus grand.

Exemple BEM :
```CSS
/* Block */
.btn {
  /* Styles for the button block */
}

/* Element */
.btn__label {
  /* Styles for the button label element */
}

/* Modifier */
.btn--large {
  /* Styles for a large button */
}
```

### SMACSS (Scalable and Modular Architecture for CSS)
SMACSS est une méthodologie qui se concentre sur la structuration de votre CSS en modules indépendants, favorisant la réutilisation et la scalabilité. Elle propose cinq types de règles CSS :

**Base** : Les styles de base s'appliquent aux éléments HTML (ex. body, p, a).

**Layout** : Les styles de mise en page sont utilisés pour définir la structure de la page (ex. en-tête, pied de page, colonnes).

**Module** : Les modules sont des composants réutilisables et indépendants (ex. boutons, formulaires).

**State** : Les styles d'état décrivent l'apparence de l'interface dans un état particulier (ex. :hover, :active).

**Theme** : Les styles de thème gèrent les variations visuelles (ex. thèmes clair/foncé).

Exemple SMACSS :
```CSS
/* Base */
body {
  font-family: Arial, sans-serif;
}

/* Layout */
.header {
  background-color: #333;
}

/* Module */
.btn {
  padding: 10px 20px;
}

/* State */
.btn:hover {
  background-color: #555;
}

/* Theme */
.theme-dark .btn {
  color: #fff;
}
```

### OOCSS (Object-Oriented CSS)
OOCSS est une approche qui consiste à abstraire les styles en objets réutilisables, ce qui favorise la réduction de la duplication de code. Elle met l'accent sur la séparation des contenus et des structures.

Exemple OOCSS :
```CSS
/* Object */
.button {
  display: inline-block;
  padding: 10px 20px;
  border: 1px solid #333;
}

/* Modifier */
.button-primary {
  background-color: #3498db;
  color: #fff;
}
```

### Gestion de la complexité des feuilles de style
Pour gérer la complexité des feuilles de style, il est important de suivre les meilleures pratiques telles que la réduction de la duplication de code, la hiérarchisation des styles, la documentation et la mise en place de conventions de nommage. Il est également conseillé d'utiliser des outils de compilation CSS tels que Sass ou Less, qui permettent d'organiser et de réutiliser du code de manière plus efficace.

## Responsive Web Design
Le Responsive Web Design (RWD) est une approche de conception web qui vise à rendre les sites web accessibles et fonctionnels sur une variété de dispositifs et de tailles d'écran. Cette approche garantit une expérience utilisateur optimale, quel que soit l'appareil utilisé (smartphone, tablette, ordinateur de bureau, etc.). Voici un aperçu des principes clés du Responsive Web Design :

- Utilisation de CSS Media Queries : Les Media Queries sont utilisées pour appliquer des styles CSS spécifiques en fonction de la largeur de l'écran ou d'autres caractéristiques du dispositif. Par exemple, vous pouvez définir des styles différents pour les écrans larges et étroits.

```CSS
@media screen and (min-width: 600px) and (max-width: 1024px) {
  /* Styles à appliquer pour les écrans entre 600px et 1024px de largeur */
}
```

- Conception fluide (Fluid Layouts) : Plutôt que d'utiliser des dimensions fixes, utilisez des unités relatives telles que pourcentages pour créer des mises en page fluides qui s'ajustent automatiquement à la taille de l'écran.

```CSS
.container {
  width: 90%; /* La largeur de la boîte est de 90% de la largeur parente */
}
```

- Images adaptatives : Utilisez des images adaptatives qui se redimensionnent en fonction de la taille de l'écran. Vous pouvez également utiliser l'élément <img> avec l'attribut srcset pour charger des images différentes en fonction de la résolution de l'écran.
```CSS
img {
  max-width: 100%;
  height: auto; /* Optionnel, maintient le rapport hauteur/largeur de l'image */
}
```

```HTML
<img src="image-small.jpg" srcset="image-small.jpg 320w, image-medium.jpg 768w, image-large.jpg 1024w" alt="Image adaptative">
```

- Contenu réorganisé (Content Reordering) : Concevez votre contenu de manière à ce qu'il puisse être réorganisé pour s'adapter à des écrans plus petits. Par exemple, les menus de navigation peuvent être affichés en tant que menus déroulants sur les écrans étroits.

- Menus de navigation mobiles : Pour les écrans étroits, utilisez des menus de navigation adaptatifs tels que les menus déroulants, les icônes de menu hamburger, etc.

- Utilisation de polices adaptatives : Utilisez des polices qui s'ajustent en fonction de la taille de l'écran pour garantir une lisibilité optimale.

```CSS
font-size: 16px; /* Taille de police de base pour le corps du texte */
font-size: 1em; /* 1em équivaut à la taille de police de base (16px) */
font-size: 2em; /* 2em équivaut à 32px (2 * 16px) */  
font-size: 5vh; /* La taille de police est de 5% de la hauteur de la fenêtre */
```

- Tests multi-dispositifs : Assurez-vous de tester votre site sur une variété de dispositifs réels ou à l'aide d'émulateurs et d'outils de débogage pour garantir son bon fonctionnement sur toutes les plateformes.

- Approche "Mobile-First" : Envisagez de concevoir d'abord pour les appareils mobiles, puis d'étendre votre conception pour les écrans plus grands. Cela garantit une expérience utilisateur de base solide sur les petits écrans.

- Priorisation du contenu : Assurez-vous que le contenu le plus important est visible en premier sur les écrans mobiles, puis ajoutez des détails supplémentaires pour les écrans plus larges.