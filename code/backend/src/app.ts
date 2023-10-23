import express, { Application, Request, Response } from 'express';
import * as dotenv from 'dotenv';
import * as mariadb from 'mariadb';

dotenv.config();

const app: Application = express();

const PORT: number = 3001;

app.use('/', async (req: Request, res: Response): Promise<void> => {
    console.log("/db");
    let conn;
    try {
        conn = await pool.getConnection();
        const rows = await conn.query('SELECT * FROM recipes');
        res.send(rows);
    } catch (err) {
        console.error(err); // Utilisez console.error pour afficher les erreurs
        throw err;
    } finally {
        if (conn) {
            conn.release(); // Libère la connexion pour d'autres utilisations
        }
    }
});


app.listen(PORT, (): void => {
    console.log('SERVER IS UP ON PORT:', PORT);
});

const pool = mariadb.createPool({
    host: process.env.DB_HOST,
    user: process.env.DB_USER,
    port: process.env.DB_PORT ? parseInt(process.env.DB_PORT) : undefined,
    password: process.env.DB_PASSWORD,
    database: process.env.DB_DATABASE,
    connectionLimit: 5, // Limite de connexions simultanées
});
