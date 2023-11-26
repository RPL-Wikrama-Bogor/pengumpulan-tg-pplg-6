const express = require('express');
const router = express.Router();

router.get('/', (req, res) => {
    res.send('GET author code');
});
router.post('/', (req, res) => {
    res.send('POST author code');
});
router.put('/', (req, res) => {
    res.send('PUT author code');
});
router.delete('/', (req, res) => {
    res.send('DELETE author code');
});

module.exports = router;