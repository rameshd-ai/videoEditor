import express from 'express';
import { getEditly, postEditly, generateVideo } from '../controllers/editly.js';

const router = express.Router();

//all routes in here are starting with /editly
router.get('/', getEditly);
router.post('/',postEditly);
router.post('/generateVideo',generateVideo);


export default router;