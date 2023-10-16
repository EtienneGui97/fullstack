# HTML
HTML (Hypertext Markup Language) est un langage de balisage utilisé pour structurer le contenu des pages web. 

Cette documentation est une version abrégée, la documentation complète sur trouve [ici](https://www.w3schools.com/html/).

## Table des matières

1. [Structure d'une page](#structure-dune-page)
2. [Elément HTML](#elément-html)
3. [Attribut](#attribut)
4. [Commentaire](#commentaire)
5. [Titre](#titre)
6. [Paragraphe](#paragraphe)
7. [Barre horizontale](#barre-horizontale)
8. [Retour à la ligne](#retour-à-la-ligne)
9. [Style](#style)
10. [Format des éléments](#format-des-éléments)
11. [Liste](#liste)
12. [Tableau](#tableau)
13. [Lien](#lien)
14. [Image](#image)


## Structure d'une page 
```HTML
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Titre de la page</title>
</head>
<body>
    <!-- Votre contenu va ici -->
</body>
</html>
```
- `<!DOCTYPE html>` définit la version HTML (HTML5 dans ce cas).
- `<html>` enveloppe l'ensemble du document.
- `<head>` contient des informations sur la page, telles que le titre de la page.
- `<title>` définit le titre de la page, qui s'affiche dans l'onglet du navigateur.
- `<body>` contient le contenu visible de la page.

## Elément HTML
Les éléments HTML sont définis par :
- Une balise de début (exemple : `<h1>`)
- Un contenu
- Une balise de fin (exemple : `</h1>`)

Un élément peut contenir d'autres éléments :
```HTML
<div>
    <p>Voici un paragraphe</p>
</div>
```

## Attribut
Un attribut HTML fournit plus d'informations sur un élément HTML.
- Tous les éléments HTML peuvent avoir des attributs.
- Ils fournissent des informations supplémentaires sur l'élément HTML.
- Ils sont spécifiés dans la balise début.
- Ils sont généralement définis avec un nom et une valeur `name="valeur"`.

```HTML
<img src="monImg.jpg" width="500" height="600">
```


## Commentaire
Les commentaires sont ajoutés avec cette syntaxe:
```HTML
<!-- Mon commentaire -->
```


## Titre
Les titres utilisent les balises `<h1>` jusqu'à `<h6>`.
```HTML
<h1>Titre de niveau 1</h1>
<h2>Titre de niveau 2</h2>
<h3>Titre de niveau 3</h3>
```

## Paragraphe
```HTML
<p>Paragraphe 1</p>
<p>Paragraphe 2</p>
```

## Barre horizontale
```HTML
<hr>
```

## Retour à la ligne
```HTML
<p>C'est<br>un paragraphe<br>avec des retours à la ligne.</p>
```

## Style
L'attribut **style** permet d'ajouter du CSS à l'élément HTML.
```HTML
<p style="color: red; font-size:50px;">Mon texte est rouge</p>
```

## Format des éléments
- `<b>` <b>Gras</b>
- `<strong>` <strong>Important</strong>
- `<i>` <i>Italique</i>
- `<mark>` <mark>Surligné</mark>
- `<small>` <small>Petit</small>
- `<del>` <del>Barré</del>
- `<ins>` <ins>Souligné</ins>
- `<sub>` <sub>Inférieur</sub>
- `<sup>` <sup>Supérieur</sup>

## Liste
### Liste HTML non ordonnée
Les éléments de la liste sont marqués par un point.
```HTML
<ul>
  <li>Café</li>
  <li>Thé</li>
  <li>Lait</li>
</ul>
```
<ul>
  <li>Café</li>
  <li>Thé</li>
  <li>Lait</li>
</ul>

### Liste HTML ordonnée
Les éléments de la liste sont marqués avec un nombre.
```HTML
<ol>
  <li>Café</li>
  <li>Thé</li>
  <li>Lait</li>
</ol>
```
<ol>
  <li>Café</li>
  <li>Thé</li>
  <li>Lait</li>
</ol>

### Liste HTML descriptive
Les éléments ont une description.
```HTML
<dl>
  <dt>Café</dt>
  <dd>Boisson chaude</dd>
  <dt>Lait</dt>
  <dd>Boisson froide</dd>
</dl>
```
<dl>
  <dt>Café</dt>
  <dd>Boisson chaude</dd>
  <dt>Lait</dt>
  <dd>Boisson froide</dd>
</dl>

## Tableau
Le tableau est définit avec la balise `<table>`, les lignes par `<tr>`, les colonnes par `<td>` et les en-têtes par `<th>`.

```HTML
<table>
    <tr>
        <th>Prénom</th>
        <th>Nom</th>
    </tr>
    <tr>
        <td>John</td>
        <td>Doe</td>
    </tr>
    <tr>
        <td>Jane</td>
        <td>Smith</td>
    </tr>
    <tr>
        <td>Bob</td>
        <td>Johnson</td>
    </tr>
</table>
```

<table>
    <tr>
        <th>Prénom</th>
        <th>Nom</th>
    </tr>
    <tr>
        <td>John</td>
        <td>Doe</td>
    </tr>
    <tr>
        <td>Jane</td>
        <td>Smith</td>
    </tr>
    <tr>
        <td>Bob</td>
        <td>Johnson</td>
    </tr>
</table>

## Lien
```HTML
<a href="https://www.exemple.com">Exemple</a>
```

## Image
```HTML
<img src="monImg.jpg" alt="Mon Image" width="104" height="142">
```