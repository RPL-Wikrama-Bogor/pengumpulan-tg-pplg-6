const express = require('express');

const penulisController = require('../controllers/penulis-controller');

const router = express.Router();

router.get('/', penulisController.getPenulis);
router.get('/:id', penulisController.getPenuliss);
router.post('/', penulisController.addPenulis);
router.put('/:id', penulisController.editPenulis);
router.delete('/:id', penulisController.deletePenulis);

module.exports = router;