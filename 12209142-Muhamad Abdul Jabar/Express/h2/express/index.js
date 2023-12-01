const express = require('express');
const { handFirst, handleHome, handleAbout, handleContact, handleNews } = require('./router');


// instansiasi
const app = express();


//Url Root
app.get('/', handFirst);
app.get('/home',  handleHome);
app.get('/about', handleAbout);
app.get('/contact', handleContact);
app.get('news', handleNews);
// app.get('/', (req, res) => {
//     res.send('<h1>Welcome to Express</h1>')
// });

app.listen(3000, () => {
    console.log(`Server berjalan di http://localhost:3000`);
})