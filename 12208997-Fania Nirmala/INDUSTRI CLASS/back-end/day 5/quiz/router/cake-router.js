const express = require('express');
const cakeController = require('../controllers/cake-controller')

const router = express.Router();

router.get('/', cakeController.getCakes);
router.get('/:id', cakeController.getCake);
router.post('/', cakeController.addCakes);
router.put('/:id', cakeController.editCakes);
router.delete('/:id', cakeController.deleteCakes);

module.exports = router;