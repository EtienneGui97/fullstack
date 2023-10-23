import express, { Application, Request, Response } from 'express';
import * as dotenv from 'dotenv';
import * as mariadb from 'mariadb';
import { PrismaClient } from '@prisma/client';

dotenv.config();

const app: Application = express();

const PORT: number = 3001;



app.listen(PORT, (): void => {
    console.log('SERVER IS UP ON PORT:', PORT);
});



const prisma = new PrismaClient()

async function main() {
    await prisma.recipe.create({
        data: {
            name: 'Recette 2',
            description: 'Description de la recette 2',
            steps: {
                create: [
                    {
                        order: 1,
                        description: "Etape 1 de la recette 2"
                    },
                    {
                        order: 2, // Ordre de la deuxième étape
                        description: "Etape 2 de la recette 2"
                    }
                ]
            }
        }
    });

    console.log(await prisma.recipe.findMany())
}

main()
    .then(async () => {
        await prisma.$disconnect()
    })
    .catch(async (e) => {
        console.error(e)
        await prisma.$disconnect()
        process.exit(1)
    })