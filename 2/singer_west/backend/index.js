import express from "express";
import cors from "cors";
import dotenv from "dotenv";
import SingerRoute from "./routes/SingerRoute.js";
dotenv.config();

import { PrismaClient } from "@prisma/client";

const prisma = new PrismaClient();

const app = express();

app.use(cors());
app.use(express.json());
app.use(SingerRoute);


app.listen(process.env.APP_PORT, () => {
    console.log('Server terhubung pada http://localhost:5000 dan menjalankan...');
});