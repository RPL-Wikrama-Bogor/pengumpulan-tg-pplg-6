const express = require('express');
const authorController = require('../controllers/author-controller')

const router = express.Router();

router.get('/', authorController.getAuthors);
router.get('/:id', authorController.getAuthor);
router.post('/', authorController.addAuthors);
router.put('/:id', authorController.editAuthors);
router.delete('/:id', authorController.deleteAuthors);

module.exports = router;