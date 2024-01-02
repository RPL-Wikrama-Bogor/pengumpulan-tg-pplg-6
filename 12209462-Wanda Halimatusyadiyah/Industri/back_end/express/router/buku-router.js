const express = require('express');
const bukuController = require('../controllers/buku-controller');

const router = express.Router();
router.get('/', bukuController.getBukuu);
router.get('/:id', bukuController.getBuku);
router.post('/', bukuController.addBuku);
router.put('/:id', bukuController.editBuku);
router.delete('/:id', bukuController.deletebuku);

module.exports = router;