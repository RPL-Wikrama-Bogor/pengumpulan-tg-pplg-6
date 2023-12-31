const express = require('express');
const bookController = require('../controllers/book-controller');

const router = express.Router();
router.get('/', bookController.getBooks);
router.get('/:id', bookController.getBook);
router.post('/', bookController.addBook);
router.put('/:id', bookController.editBook);
router.delete('/:id', bookController.deletebook);

module.exports = router;