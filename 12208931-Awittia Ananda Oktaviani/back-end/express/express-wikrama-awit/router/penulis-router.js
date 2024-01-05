<<<<<<< HEAD
const express = require('express');
const penulisController = require('../controllers/penulis-controller');

const router = express.Router();

router.get('/', penulisController.getPenulis1);
router.get('/:id', penulisController.getPenulis);
router.post('/', penulisController.addPenulis);
router.put('/:id', penulisController.editPenulis);
router.delete('/:id', penulisController.deletePenulis);

=======
const express = require('express');
const penulisController = require('../controllers/penulis-controller');

const router = express.Router();

router.get('/', penulisController.getPenulis1);
router.get('/:id', penulisController.getPenulis);
router.post('/', penulisController.addPenulis);
router.put('/:id', penulisController.editPenulis);
router.delete('/:id', penulisController.deletePenulis);

>>>>>>> bdde0b02df05d1389d7945c78e501d2f46604574
module.exports = router;