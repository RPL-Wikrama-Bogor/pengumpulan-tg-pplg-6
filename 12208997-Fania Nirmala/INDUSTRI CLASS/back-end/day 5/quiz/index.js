//import
const express = require('express');
const cakeRouter = require('./router/cake-router');
const chefRouter = require('./router/chef-router');
const penggunaRouter = require('./router/chf-router');
const authenticateJWT = require('./middleware/jwt-auth-middleware');

//instansiasi
const app = express();

//middleware JSON Parser
app.use(express.json());

//middleware request body
app.use(express.urlencoded({
    extended: true
}));

// book routing with book router
app.use('/cake', authenticateJWT, cakeRouter);
app.use('/chef', chefRouter);
app.use('/pengguna', penggunaRouter);

//HTTP Method: GET, POST, PUT/PATCH, DELETE

app.listen(3000, () => {
    console.log(`Server berjalan di http://localhost:3000`);
});