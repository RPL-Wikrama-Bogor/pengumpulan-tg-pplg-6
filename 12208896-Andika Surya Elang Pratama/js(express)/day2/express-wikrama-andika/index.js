//impor
const express = require('express');
const { handle,
    handleHome,
    handleAbout,
    handleContact,
    handleNews } = require('./router');


//instansiasi
const app = express();

//HTTP method: GET, POST, PUT/PATCh, DElETE

//root
app.get('/', handle);
app.get('/home', handleHome);
app.get('/about', handleAbout);
app.get('/contact', handleContact);
app.get('/news', handleNews);

app.listen(7000, () => {
    console.log(`Server berjalan di http://localhost:7000`);
});
