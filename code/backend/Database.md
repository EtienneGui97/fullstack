# Configuration de la base de données

### Installez les dépendances
Assurez-vous d'avoir les dépendances nécessaires installées. Vous aurez besoin de dotenv pour charger les variables d'environnement et de mariadb pour interagir avec la base de données.

Utilisez npm pour les installer :

```cmd
npm install dotenv mariadb
```

### Créez un fichier .env
À la racine de votre projet, créez un fichier .env et ajoutez les variables d'environnement pour configurer la base de données. Par exemple :

```cmd
DB_HOST=localhost
DB_USER=root
DB_PASSWORD=yourpassword
DB_DATABASE=yourdatabase
```

Assurez-vous de remplacer ces valeurs par les informations spécifiques de votre base de données MariaDB.

### Charger les variables d'environnement
Dans votre application TypeScript, au début de votre fichier (par exemple, app.ts), ajoutez la ligne suivante pour charger les variables d'environnement depuis le fichier .env :

```ts
import * as dotenv from 'dotenv';
dotenv.config();
```

### Configurer la connexion à la base de données
Utilisez les variables d'environnement pour configurer la connexion à la base de données MariaDB. Voici un exemple :

```ts
import * as mariadb from 'mariadb';

const pool = mariadb.createPool({
  host: process.env.DB_HOST,
  user: process.env.DB_USER,
  password: process.env.DB_PASSWORD,
  database: process.env.DB_DATABASE,
  connectionLimit: 5, // Limite de connexions simultanées
});
```

### Utilisez la connexion à la base de données dans votre application :
Vous pouvez utiliser la piscine (pool) pour exécuter des requêtes vers la base de données MariaDB. Voici un exemple d'exécution d'une requête :

```ts
async function queryDatabase() {
  let conn;
  try {
    conn = await pool.getConnection();
    const rows = await conn.query('SELECT * FROM votre_table');
    console.log(rows);
  } catch (err) {
    throw err;
  } finally {
    if (conn) {
      conn.release(); // Libère la connexion pour d'autres utilisations
    }
  }
}
```
Avec ces étapes, vous avez configuré une base de données MariaDB dans votre application Node.js avec TypeScript en utilisant un fichier .env pour stocker des informations sensibles. Vous pouvez désormais interagir avec la base de données en toute sécurité en utilisant les variables d'environnement pour stocker des informations sensibles. Assurez-vous d'adapter le code pour répondre à vos besoins spécifiques en matière de gestion de base de données.