const express = require('express');
const router = express.Router();

router.get('/', (req, res) => {
    res.send('GET book code');
});
router.post('/', (req, res) => {
    res.send('POST book code');
});
router.put('/', (req, res) => {
    res.send('PUT book code');
});
router.delete('/', (req, res) => {
    res.send('DELETE book code');
});

module.exports = router;