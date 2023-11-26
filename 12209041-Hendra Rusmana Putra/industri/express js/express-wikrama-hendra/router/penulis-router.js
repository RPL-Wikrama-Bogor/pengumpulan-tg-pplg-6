const express = require('express');
const penulisController = require('../controller/penulis-controller')

//inisialisasi
const router = express.Router()


router.get('/', penulisController.getPenulis)
router.get('/:id', penulisController.getPenulisId)
router.post('/', penulisController.addPenulis)
router.put('/:id',penulisController.editPenulis)
router.delete('/:id',penulisController.deletePenulis)

module.exports = router;