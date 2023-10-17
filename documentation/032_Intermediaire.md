# Niveau intermédiaire en CSS

## Table des matières
8. [Disposition avancée](#disposition-avancée)
9. [Sélecteurs CSS avancés](#sélecteurs-css-avancés)
10. [Typographie avancée](#typographie-avancée)
11. [Transformations et transitions](#transformations-et-transitions)

## Disposition avancée

### Flexbox

Flexbox (Flexible Box Layout) est un modèle de mise en page en CSS qui permet de créer des mises en page plus efficaces et flexibles. Il vous permet de disposer les éléments de manière $ s'adapter automatiquement à l'espace disponible dans le conteneur parent.

- **Conteneur Flex (Flex Container)** : C'est l'élément parent qui contient les éléments que vous souhaitez organiser en utilisant flexbox. Pour activer le modèle de flexbox, vous devez définir `display: flex;` ou `display: inline-flex;` sur le conteneur flex.

- **Eléments Flex (Flex Items)** : Ce sont les éléments enfants du conteneur flex. Ils sont organisés en fonction des règles définies pour le conteneur flex.

- **Axe Principal (Main Axis)** : C'est l'axe le long duquel les éléments flex sont alignés. Il est généralement horizontal.

- **Axe Transversal (Cross Axis)** : C'est l'axe perpendiculaire à l'axe principal.

#### Propriétés CSS Flexbox

Voici quelques-unes des propriétés CSS les plus couramment utilisées pour le modèle de flexbox :

1. `display: flex;` : Définit le conteneur comme un conteneur flex.

2. `flex-direction: row|row-reverse|column|column-reverse;` : Définit la direction principale des éléments flex.

3. `flex-wrap: nowrap|wrap|wrap-reverse;` : Définit si les éléments flex doivent être enveloppés sur plusieurs lignes ou rester sur une seule ligne.

4. `justify-content: flex-start|flex-end|center|space-between|space-around;` : Contrôle l'alignement des éléments le long de l'axe principal.

5. `align-items: flex-start|flex-end|center|baseline|stretch;` : Contrôle l'alignement des éléments le long de l'axe transversal.

6. `align-self: auto|flex-start|flex-end|center|baseline|stretch;` : Permet de substituer l'alignement défini par `align-items` pour un élément flex spécifique.

7. `order: <nombre>;` : Contrôle l'ordre d'affichage des éléments flex.

8. `flex: <nombre>` : Combinaison des propriétés `flex-grow`, `flex-shrink`, et `flex-basis`.

#### Exemple de Mise en Page Flexbox

Voici un exemple de mise en page flexbox simple :

```html
<div class="flex-container">
    <div class="flex-item">1</div>
    <div class="flex-item">2</div>
    <div class="flex-item">3</div>
</div>
```

```CSS
.flex-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 200px;
}

.flex-item {
    width: 50px;
    height: 50px;
    background-color: #3498db;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
}
```

### Grid

CSS Grid Layout, communément appelé "Grid", est un modèle de mise en page en CSS qui permet de créer des mises en page en deux dimensions, offrant un contrôle précis sur la disposition des éléments.

- **Grille (Grid)** : Le conteneur principal de la mise en page en grille. Vous définissez les propriétés de la grille sur ce conteneur pour organiser les éléments.

- **Eléments de Grille (Grid Items)** : Les éléments que vous placez à l'intérieur de la grille. Vous les positionnez en fonction des lignes et des colonnes de la grille.

- **Lignes (Rows) et Colonnes (Columns)** : La grille est composée de lignes horizontales et de colonnes verticales. Vous pouvez définir le nombre, la taille et l'espacement de ces lignes et colonnes.

#### Propriétés CSS Grid

Voici quelques-unes des propriétés CSS couramment utilisées pour CSS Grid :

1. `display: grid;` : Définit le conteneur comme une grille.

2. `grid-template-columns` : Définit le nombre et la taille des colonnes.

3. `grid-template-rows` : Définit le nombre et la taille des lignes.

4. `grid-column` : Définit la position des éléments le long des colonnes.

5. `grid-row` : Définit la position des éléments le long des lignes.

6. `grid-gap` : Définit l'espace entre les cellules de la grille.

7. `grid-area` : Définit une zone nommée pour les éléments de grille.

#### Exemple de Mise en Page CSS Grid

Voici un exemple de mise en page CSS Grid simple :

```html
<div class="grid-container">
    <div class="grid-item">1</div>
    <div class="grid-item">2</div>
    <div class="grid-item">3</div>
    <div class="grid-item">4</div>
    <div class="grid-item">5</div>
    <div class="grid-item">6</div>
</div>
```

```CSS
.grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(2, 100px);
    grid-gap: 10px;
}

.grid-item {
    background-color: #3498db;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
}
```

## Sélecteurs CSS avancés

1. **Sélecteur d'Attribut** : Vous pouvez sélectionner des éléments en fonction de leurs attributs. Par exemple, `input[type="text"]` sélectionnera tous les champs de saisie de type texte.

2. **Sélecteur d'Enfant** : Vous pouvez cibler un élément qui est un enfant direct d'un autre élément en utilisant le sélecteur d'enfant. Par exemple, `ul > li` sélectionnera uniquement les éléments `<li>` qui sont des enfants directs d'un élément `<ul>`.

3. **Sélecteur d'Élément Négatif** : Vous pouvez exclure certains éléments de la sélection en utilisant le sélecteur `:not()`. Par exemple, `p:not(.special)` sélectionnera tous les éléments `<p>` qui n'ont pas la classe "special".

4. **Sélecteur de Pseudo-Élément** : Les pseudo-éléments tels que `::before` et `::after` vous permettent de cibler des éléments avant et après le contenu d'un élément.

5. **Sélecteur de N-ième Enfant** : Vous pouvez cibler le nième enfant d'un élément en utilisant le sélecteur `:nth-child()`. Par exemple, `ul li:nth-child(odd)` sélectionnera tous les éléments `<li>` qui sont des enfants impairs d'un élément `<ul>`.

6. **Sélecteur d'Élément Vide** : Le sélecteur `:empty` permet de sélectionner les éléments qui ne contiennent pas de contenu.

7. **Sélecteur de Premier Enfant** : Le sélecteur `:first-child` cible le premier enfant d'un élément.

8. **Sélecteur de Dernier Enfant** : Le sélecteur `:last-child` cible le dernier enfant d'un élément.

9. **Sélecteur d'Élément en Focus** : Le sélecteur `:focus` permet de cibler l'élément actuellement en focus, par exemple, un champ de saisie texte qui a le focus.

10. **Sélecteur d'Élément en Survol** : Le sélecteur `:hover` permet de cibler l'élément sur lequel la souris survole.

11. **Sélecteur d'Élément Actif** : Le sélecteur `:active` cible l'élément qui est actuellement en cours d'action, par exemple, un bouton qui est en train d'être cliqué.

12. **Sélecteur d'Élément en Visite** : Le sélecteur `:visited` cible les liens que l'utilisateur a déjà visités.

13. **Sélecteur de Premier Élément de Type** : Le sélecteur `:first-of-type` cible le premier élément d'un type spécifique, par exemple, le premier paragraphe dans une section.

14. **Sélecteur de Dernier Élément de Type** : Le sélecteur `:last-of-type` cible le dernier élément d'un type spécifique.

15. **Sélecteur de l'Élément Cible** : Le sélecteur `:target` cible l'élément de la page qui correspond à l'ancre URL en cours.

Ces sélecteurs CSS avancés vous permettent de personnaliser davantage la mise en page et le style de votre site web en ciblant des éléments spécifiques. Utilisez-les avec prudence pour éviter une complexité excessive dans votre code CSS.

## Typographie avancée
### Police web
Sélectionnez une police web adaptée à votre site. Vous pouvez trouver des polices web gratuites sur des sites tels que Google Fonts, Font Squirrel, ou Adobe Fonts.

```HTML
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nom+de+la+police">
```

```CSS
body {
    font-family: 'Nom de la police', sans-serif;
}
```

### Media Queries
Les Media Queries sont un moyen essentiel pour rendre un texte réactif, c'est-à-dire de l'adapter à différentes tailles d'écran et de périphériques.
```CSS
@media screen and (max-width: 768px) {
    body {
        font-size: 16px;
    }
}
```
## Transformations et transitions
Les transformations et les transitions CSS sont des techniques qui permettent d'animer et de transformer les éléments HTML de manière interactive.

### Transformation
Les transformations CSS vous permettent de modifier la position, la rotation, la mise à l'échelle et la déformation des éléments HTML. Voici quelques propriétés de transformation couramment utilisées :

- **translate** : Déplace un élément dans une direction donnée.
- **rotate** : Fait tourner un élément autour de son point d'origine.
- **scale** : Modifie la taille d'un élément en proportion.
- **skew** : Incline un élément selon un angle spécifique.

```CSS
#monElement {
    transform: translate(50px, 50px) rotate(45deg) scale(1.5);
}
```

### Transition
Les transitions CSS permettent d'animer les changements de propriétés CSS sur un élément lorsque ces propriétés changent. Vous pouvez définir la durée de la transition, l'effet de transition et d'autres paramètres.

```CSS
#monElement {
    width: 100px;
    height: 100px;
    background-color: blue;
    transition: width 0.5s, height 0.5s, background-color 0.5s;
}

#monElement:hover {
    width: 150px;
    height: 150px;
    background-color: red;
}
```