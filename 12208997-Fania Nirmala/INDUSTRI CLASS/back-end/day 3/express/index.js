const express = require('express');
const bookRouter = require('./routes/book-route');
const authorRouter = require('./routes/author-route');

const app = express();

app.get('/', (req, res) => res.send('Hello World!'));

app.get('/contohparam/:username', (req, res) => {
    res.send(req.params);
});

app.use('/book', bookRouter);
app.use('/author', authorRouter);

app.listen(3000, () => {
    console.log(`Server berjalan di http://localhost:3000`);
});