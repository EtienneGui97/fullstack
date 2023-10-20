# TypeScript Intermédiaire

1. [Classes et POO](#classes-et-poo)
2. [Gestion des erreurs](#gestion-des-erreurs)
3. Modules et Espace de Noms
4. [Génériques](#génériques)
5. Types Avancés
6. Décorateurs

## Classes et POO
En TypeScript, vous pouvez créer des classes typées en définissant la structure de vos classes à l'aide de types ou d'interfaces. Vous pouvez également utiliser l'héritage et les interfaces pour définir des relations entre vos classes. Les classes permettent de créer des objets concrets avec des données et des méthodes associées. Les objets sont créés grâce au constructeur de la classe.


### Classe typées
```ts
interface Person {
    firstName: string;
    lastName: string;
    age: number;
}

class Employee implements Person {
    constructor(public firstName: string, public lastName: string, public age: number) {
        // Le constructeur initialise les propriétés.
    }
}

const employee1: Employee = new Employee("Alice", "Smith", 30);
const employee2: Employee = new Employee("Bob", "Johnson", 25);
```

### Heritage
En TypeScript, vous pouvez utiliser l'héritage de classes pour créer une nouvelle classe basée sur une classe existante.
```ts
class Manager extends Employee {
    constructor(
        firstName: string, 
        lastName: string, 
        age: number, 
        public employees: Employee[]
    ) {
        super(firstName, lastName, age);
    }

    const manager1 = new Manager("John", "Doe", 40, [
        new Employee("Alice", "Smith", 30),
        new Employee("Bob", "Johnson", 25),
    ]);
}
```

## Gestion des erreurs
En TypeScript, vous pouvez utiliser des exceptions pour gérer des erreurs et des situations exceptionnelles. Pour ce faire, vous pouvez créer des classes d'exception personnalisées ou utiliser les exceptions intégrées. 

```ts
try {
    // Code qui peut générer une erreur
} catch (e) {
    // Gérer l'erreur
    console.error("Erreur attrapée :", e.message);
}
```

Exception personnalisées :
```ts
class CustomError extends Error {
    constructor(message: string) {
        super(message);
        this.name = "CustomError";
    }
}

try {
    throw new CustomError("Une erreur personnalisée s'est produite !");
} catch (e) {
    if (e instanceof CustomError) {
        console.error("Erreur personnalisée attrapée :", e.message);
    } else {
        console.error("Erreur inattendue :", e.message);
    }
}
```

## Génériques
Les génériques sont un concept en TypeScript qui vous permet d'écrire des fonctions et des classes réutilisables en définissant des types de données flexibles. Les génériques vous permettent de créer du code qui fonctionne avec différentes structures de données tout en conservant la sécurité des types.

### Fonctions
Les fonctions génériques permettent de définir des types de données flexibles pour les paramètres et les valeurs de retour.

```ts
function reverseArray<T>(array: T[]): T[] {
    return array.reverse();
}

const numbers = [1, 2, 3, 4, 5];
const reversedNumbers = reverseArray(numbers);

const fruits = ["apple", "banana", "cherry", "date"];
const reversedFruits = reverseArray(fruits);
```

### Fonctions
Les classes génériques permettent de créer des classes réutilisables en définissant des types flexibles pour les propriétés et les méthodes. 
```ts
class KeyValue<T, U> {
    constructor(public key: T, public value: U) {}

    getKey(): T {
        return this.key;
    }

    getValue(): U {
        return this.value;
    }
}

const stringAndNumber = new KeyValue("Hello", 42);
const string1: string = stringAndNumber.getKey();
const number1: number = stringAndNumber.getValue();
```