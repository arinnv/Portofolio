import express from "express";
import {
    getSinger,
    // getSingerAll,
    getSingerById,

    createSinger,
    updateSinger,
    deleteSinger,
    deleteSingerOpt
} from "../controllers/SingerController.js";

const router = express.Router();

router.get(`/singer`, getSinger);
// router.get(`/singer`, getSingerAll);
router.get(`/singer/:id`, getSingerById);

router.post('/singer', createSinger);
router.patch('/singer/:id', updateSinger);
router.delete('/singer/:id', deleteSinger);
router.delete('/singer', deleteSingerOpt);



export default router;