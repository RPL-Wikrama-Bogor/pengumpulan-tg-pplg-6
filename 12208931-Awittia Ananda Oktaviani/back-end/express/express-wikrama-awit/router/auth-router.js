<<<<<<< HEAD
const express = require('express');
const authController = require('../controllers/auth-controller');

const router = express.Router();

router.post('/register', authController.register);
router.post('/login', authController.login);


=======
const express = require('express');
const authController = require('../controllers/auth-controller');

const router = express.Router();

router.post('/register', authController.register);
router.post('/login', authController.login);


>>>>>>> bdde0b02df05d1389d7945c78e501d2f46604574
module.exports = router;