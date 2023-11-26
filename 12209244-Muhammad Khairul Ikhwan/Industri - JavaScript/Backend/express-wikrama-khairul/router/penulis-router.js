const express = require('express');
const penulisController = require('../controllers/penulis-controller');

const router = express.Router();

router.get('/', penulisController.getpenuliss);
router.get('/:id', penulisController.getpenulis);
router.post('/', penulisController.addpenulis);
router.put('/:id', penulisController.editpenulis);
router.delete('/:id', penulisController.deletepenulis);

module.exports = router;

