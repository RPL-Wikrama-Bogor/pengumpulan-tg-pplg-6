<<<<<<< HEAD
const express = require('express');
const bookController = require('../controllers/book-controller');

const router = express.Router();

router.get('/', bookController.getBooks);
router.get('/:id', bookController.getBook);
router.post('/', bookController.addBook);
router.put('/:id', bookController.editBook);
router.delete('/:id', bookController.deleteBook);

=======
const express = require('express');
const bookController = require('../controllers/book-controller');

const router = express.Router();

router.get('/', bookController.getBooks);
router.get('/:id', bookController.getBook);
router.post('/', bookController.addBook);
router.put('/:id', bookController.editBook);
router.delete('/:id', bookController.deleteBook);

>>>>>>> bdde0b02df05d1389d7945c78e501d2f46604574
module.exports = router;