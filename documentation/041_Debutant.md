# TypeScript Débutant

1. [Introduction à TypeScript](#introduction-à-typescript)
2. [Environnement TypeScipt](#environnement-typescipt)
3. [Types de Base](#types-de-base)
4. [Structure de contrôles](#structure-de-contrôles)
5. [Fonctions](#fonctions)
6. [Interfaces](#interfaces)
7. [Tableaux et Tuples](#tableaux-et-tuples)


## Introduction à TypeScript
TypeScript est un langage de programmation open source développé par Microsoft qui s'appuie sur JavaScript en y ajoutant des fonctionnalités de typage statique. Il est principalement utilisé pour le développement d'applications web front-end et back-end, bien qu'il puisse également être utilisé dans d'autres contextes.

## Environnement TypeScipt
1. Installer Node.js et npm
2. Installer TypeScript
```cmd
npm install -g typescript
```
3. Vérifier que TypeScript est installé
```cmd
tsc -v
```

4. Créer un projet TypeScript
```cmd
npm install -g typescript
```

5. Créer un fichier tsconfig.json
```json
{
  "compilerOptions": {
    "target": "ES6", 
    "module": "commonjs",
    "outDir": "./dist",
    "rootDir": "./src",
    "strict": true
  },
  "include": ["src/**/*.ts"],
  "exclude": ["node_modules"]
}
```
- **target** : La version d'ECMAScript que vous ciblez (par exemple, "ES6" pour ECMAScript 2015).
- **module** : Le système de modules à utiliser (par exemple, "commonjs" pour Node.js).
- **outDir** : Le répertoire où les fichiers JavaScript transpilés seront générés.
- **rootDir** : Le répertoire contenant vos fichiers TypeScript sources.
- **strict** : Active des vérifications de type strictes.

6. Créer un répertoire source (rootDir) et écrire son code.
7. Compiler le code TypeScript en JavaScript (outDir)
```cmd
tsc
```

## Types de Base
Voici les types de base en TypeScript.

**`number`** : Le type number est utilisé pour les valeurs numériques, qu'elles soient entières ou à virgule flottante.
```ts
let count: number = 42;
let price: number = 19.99;
```

**`boolean`** : Le type boolean représente des valeurs true ou false.
```ts
let isActive: boolean = true;
let isWorking: boolean = false;
```
**`array`** : Vous pouvez déclarer un tableau en utilisant la notation Type[] ou Array<Type>.
```ts
let numbers: number[] = [1, 2, 3];
let names: Array<string> = ["Alice", "Bob"];
```

**`tuple`** : Les tuples sont des tableaux de longueur fixe dont les éléments peuvent avoir des types différents. Vous devez spécifier les types pour chaque élément du tuple.
```ts
let coordinate: [number, number] = [10, 20];
```

**`enum`** : Les énumérations permettent de définir un ensemble de constantes nommées.
```ts
enum Color {
    Red,
    Green,
    Blue
}

let chosenColor: Color = Color.Blue;
```

**`any`** : Le type any est utilisé pour représenter des valeurs dont le type n'est pas connu à la compilation. Cependant, il est préférable d'éviter autant que possible l'utilisation de any car elle élimine les avantages de la vérification de type statique de TypeScript.
```ts
let unknownValue: any = "This could be anything.";
```

**`void`** : Le type void est utilisé pour indiquer qu'une fonction ne renvoie aucune valeur.
```ts
function logMessage(message: string): void {
    console.log(message);
}
```

**`null`** et **undefined** : TypeScript a des types null et undefined qui sont utilisés pour représenter l'absence de valeur.
```ts
let emptyValue: null = null;
let notDefined: undefined = undefined;
```

**`never`** : Le type never représente les valeurs qui ne se produiront jamais. C'est souvent utilisé pour les fonctions qui lancent des exceptions ou entrent dans des boucles infinies.
```ts
function throwError(message: string): never {
    throw an Error(message);
}

function infiniteLoop(): never {
    while (true) {
        // Code ici
    }
```

## Structure de contrôles
En TypeScript, vous pouvez utiliser des instructions conditionnelles (if, else if, else) pour exécuter un bloc de code en fonction d'une condition, ainsi que des boucles (for, while) pour répéter des opérations. 

### Conditions
**`if`** : L'instruction `if` permet d'exécuter un bloc de code si une condition est vraie.
```ts
let age: number = 25;

if (age >= 18) {
    console.log("Vous êtes un adulte.");
}
```

**`else`** : L'instruction `else` est exécutée lorsque la condition de l'instruction if n'est pas vraie.
```ts
let age: number = 25;

if (age >= 18) {
    console.log("Vous êtes un adulte.");
} else {
    console.log("Vous êtes un enfant.");
}
```

**`else if`** : Vous pouvez utiliser `else if` pour ajouter des conditions supplémentaires.
```ts
let age: number = 25;

if (age >= 18) {
    console.log("Vous êtes un adulte.");
} else if (age >= 12) {
    console.log("Vous êtes un adolescent.");
} else {
    console.log("Vous êtes un enfant.");
}
```

### Boucles
**`for`** : La boucle `for` vous permet de répéter une séquence d'instructions un certain nombre de fois.
```ts
for (let i = 1; i <= 5; i++) {
    console.log(i);
}
```

**`while`** : La boucle `while` répète une séquence d'instructions tant qu'une condition est vraie.
```ts
let count = 1;

while (count <= 5) {
    console.log(count);
    count++;
}
```

**`do-while`** : La boucle `do-while` est similaire à while, mais elle garantit qu'au moins une itération est effectuée avant de vérifier la condition.
```ts
let num = 1;

do {
    console.log(num);
    num++;
} while (num <= 5);
```

## Fonctions
Déclarer une fonction :
```ts
function add(x: number, y: number): number {
    return x + y;
}
```

Appeler une fonction :
```ts
const result: number = add(5, 3);
```

Fonction avec des paramètres optionnels et par défaut :
```ts
function add(x: number, y: number, z: number = 1): number {
    return x + y + z;
}

const result1: number = add(5, 3);
const result2: number = add(10, 20, 5);
```

## Interfaces
En TypeScript, les interfaces sont utilisées pour définir la structure d'un objet et pour créer des objets typés avec des propriétés spécifiques. Les interfaces n'ont pas de constructeur et n'ont pas de fonctions implémentées.


```ts
interface Person {
    firstName: string;
    lastName: string;
    age: number;
}

const person1: Person = {
    firstName: "Alice",
    lastName: "Smith",
    age: 30,
};
```

Elles peuvent également être utilisées afin de définir les types utilisés pour une fonction.
```ts
interface Calculator {
    add(x: number, y: number): number;
}

const simpleCalculator: Calculator = {
    add(x, y) {
        return x + y;
    }
};
```

## Tableaux et Tuples
En TypeScript, vous pouvez gérer les tableaux typés, ce qui signifie que vous pouvez définir le type des éléments que vous attendez dans un tableau. De plus, TypeScript prend en charge les tuples, qui sont des tableaux avec un nombre fixe d'éléments, chacun ayant son propre type spécifique.

Pour définir un `tableau typé`, vous utilisez la syntaxe `Type[]` pour spécifier le type des éléments du tableau. 

```ts
let numbers: number[] = [1, 2, 3, 4, 5];
let names: string[] = ["Alice", "Bob", "Charlie"];
let colors: Array<string> = ["red", "green", "blue"];

// Accéder aux éléments
let firstNumber: number = numbers[0];
let secondNumber: number = numbers[1];
```

Les `tuples` sont similaires aux tableaux, mais ils ont un nombre fixe d'éléments, et chaque élément peut avoir un type différent.
```ts
let person: [string, number] = ["Alice", 30];
// Accéder aux éléments
let name: string = person[0];
let age: number = person[1];
```

Les tableaux typés et les tuples supportent les méthodes standard des tableaux JavaScript, telles que `push`, `pop`, `shift`, `unshift`, `slice`, `forEach`, etc.