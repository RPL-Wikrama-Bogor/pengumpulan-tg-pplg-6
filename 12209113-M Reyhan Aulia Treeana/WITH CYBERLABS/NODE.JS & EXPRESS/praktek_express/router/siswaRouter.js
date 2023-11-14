const express = require('express')
const router = express.Router()
const {getSiswas, getSiswa, addSiswa, editSiswa, deleteSiswa} = require('../controllers/siswaController');

router.use(express.json());

router.get('/', getSiswas);
router.get('/:id', getSiswa);
router.post('/', addSiswa);
router.put('/:id', editSiswa);
router.delete('/:id', deleteSiswa);

module.exports = router;
