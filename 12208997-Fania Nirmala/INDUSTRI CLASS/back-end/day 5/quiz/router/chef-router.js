const express = require('express');
const chefController = require('../controllers/chef-controller')

const router = express.Router();

router.get('/', chefController.getChefs);
router.get('/:id', chefController.getChef);
router.post('/', chefController.addChefs);
router.put('/:id', chefController.editChefs);
router.delete('/:id', chefController.deleteChefs);

module.exports = router;