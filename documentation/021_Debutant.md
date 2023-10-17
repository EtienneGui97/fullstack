# HTML Débutant
Ce document contient les fondamentaux HTML.
## Table des matières
1. [Introduction à HTML](#introduction-à-html)
2. [Structure d'une page HTML](#structure-dune-page-html)
3. [Eléments HTML](#eléments-html)
4. [Commentaires](#commentaires)
5. [Liens et Ancres](#liens-et-ancres)
6. [Images](#images)
7. [Listes](#listes)
8. [Tableaux](#tableaux)
9. [Formulaires HTML](#formulaires-html)
10. [Balises sémantiques](#balises-sémantiques)



## Introduction à HTML
HTML, acronyme de "HyperText Markup Language" (Langage de balisage hypertexte en français), est un langage de balisage utilisé pour créer et structurer le contenu d'une page web. HTML est un élément clé de la création de sites web, car il permet de définir la structure des documents web, y compris le texte, les images, les liens hypertextes et d'autres éléments.

HTML est un langage de balisage "markup", ce qui signifie que vous utilisez des balises pour envelopper et décrire le contenu de la page. Les navigateurs web interprètent ces balises pour afficher le contenu de manière structurée et lisible.

## Structure d'une page HTML
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
- `<head>` contient des informations sur la page, telles que le titre de la page et les métadonnées.
- `<title>` définit le titre de la page, qui s'affiche dans l'onglet du navigateur.
- `<body>` contient le contenu visible de la page.

## Eléments HTML
Les éléments HTML structurent la page web, ils sont définis par :
- Une balise de début (exemple : `<h1>`)
- Un contenu
- Une balise de fin (exemple : `</h1>`)

Un élément peut contenir d'autres éléments :
```HTML
<div>
    <p>Voici un paragraphe</p>
</div>
```

Exemples :
- `<h1>` : Balises de titre pour les niveaux de titre de 1 à 6.
- `<p>` : Balise de paragraphe.
- `<a>` : Balise de lien hypertexte.
- `<img>` : Balise d'image.
- `<ul>` : Balise de liste non ordonnée.
- `<ol>` : Balise de liste ordonnée.
- `<li>` : Balise d'élément de liste.
- `<div>` : Balise de division générique.
- `<span>` : Balise de conteneur en ligne.
- `<table>` : Balise de tableau.
- `<tr>` : Balise de ligne de tableau.
- `<th>` : Balise d'en-tête de colonne de tableau.
- `<td>` : Balise de cellule de tableau.
- `<form>` : Balise de formulaire.
- `<input>` : Balise d'entrée de formulaire.
- `<button>` : Balise de bouton.
- `<select>` : Balise de menu déroulant.
- `<option>` : Balise d'option dans un menu déroulant.
- `<iframe>` : Balise d'iframe pour incorporer des contenus externes.

## Commentaires
Les commentaires sont ajoutés avec cette syntaxe:
```HTML
<!-- Mon commentaire -->
```

## Liens et Ancres
La navigation en HTML se fait grâce à la balise `<a>` et l'attribut `href`. La navigation peut se faire sur un lien externe ou un élément interne à la page (ancre).
```HTML
<p><a href="https://www.google.com/">Aller sur google.com</a></p>

<p><a href="#section1">Aller à la Section 1</a></p>

<h2><a name="section1">Section 1</a></h2>
<p>Contenu de la section 1.</p>
```
## Images
Une image est affichée grâce à la balise `<img>` et l'attribut `src`. L'attribut `alt` permet de mettre du texte altérnatif à l'image.
```HTML
<img src="monImg.jpg" alt="Mon Image" width="104" height="142">
```

## Listes
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

## Tableaux
Un tableau est définit avec la balise `<table>`, les lignes par `<tr>`, les colonnes par `<td>` et les en-têtes par `<th>`.

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


## Formulaires HTML
Un formulaire HTML est créé avec la balise `<form>`, l'action effectuée lors du "submit" est définie avec l'attribut `action`. Un formulaire est composé essentiellement de `<input>` qui peuvent être de différents types.

```HTML
<form action="/validateForm.php">
  <label for="txtFirstName">First name:</label><br>
  <input type="text" id="txtFirstName" name="txtFirstName" value="John"><br>
  <label for="txtLastName">Last name:</label><br>
  <input type="text" id="txtLastName" name="txtLastName" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 
```

- Texte (text) : `<input type="text">`
- Mot de passe (password) : `<input type="password">`
- E-mail (email) : `<input type="email">`
- Numérique (number) : `<input type="number">`
- Case à cocher (checkbox) : `<input type="checkbox">`
- Bouton radio (radio) : `<input type="radio">`
- Bouton (button) : `<input type="button">`
- Soumission (submit) : `<input type="submit">`
- Annulation (reset) : `<input type="reset">`
- Fichier (file) : `<input type="file">`
- Date (date) : `<input type="date">`
- URL (url) : `<input type="url">`

## Balises sémantiques
Les balises sémentiques donnent un sens et une structure au contenu d'une page web.
- `<header>` : En-tête d'une section ou de la page.
- `<nav>` : Navigation principale d'une page.
- `<main>` : Partie principale du contenu de la page.
- `<article>` : Section indépendante de contenu.
- `<section>` : Division logique du contenu.
- `<aside>` : Contenu complémentaire ou secondaire.
- `<footer>` : Pied de page d'une section ou de la page.
- `<figure>` : Conteneur pour éléments multimédias.
- `<figcaption>` : Légende pour les éléments multimédias.
- `<time>` : Marqueur de date ou d'heure.
