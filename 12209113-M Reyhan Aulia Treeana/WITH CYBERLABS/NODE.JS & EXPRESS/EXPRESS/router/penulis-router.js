const express = require('express')
const router = express.Router()
const {addPenulis, getPenulises, deletePenulis, getPenulis, editPenulis} = require('../controllers/penulis-controller')

router.use(express.json());

router.get('/', getPenulises);
router.get('/:id', getPenulis);
router.post('/', addPenulis);
router.put('/:id', editPenulis);
router.delete('/:id', deletePenulis);

module.exports = router;