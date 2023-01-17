import express from 'express';
import { getEditly, postEditly } from '../controllers/editly.js';

const router = express.Router();

//all routes in here are starting with /editly
router.get('/', getEditly);
router.post('/',postEditly);


export default router;