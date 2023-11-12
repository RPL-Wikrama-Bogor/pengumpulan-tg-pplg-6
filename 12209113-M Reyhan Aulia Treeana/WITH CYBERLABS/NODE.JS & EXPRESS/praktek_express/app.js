const express = require('express')
const app = express()
app.use(express.json())
const siswaRouter = require('./router/siswaRouter');
const authRouter = require('./router/authRouter');
const jwt = require('jsonwebtoken');
const accessTokenSecret = '12209113';

const PORT = 9090;

app.use(express.urlencoded({extended: true}));

const authencticateJWT = (req, res, next) => {
    const authHeader = req.headers.authorization;

    if(!authHeader){
        return res.status(403).json({message: "Unauthorized"});
    }

    const token = authHeader.split(' ')[1];

    jwt.verify(token, accessTokenSecret, (err, user) => {
        if(err) {
            return res.status(403).json({message: "coeg abis"});
        }

        next();
    });
};

app.get('/', (req, res) => res.send('Hello World!'));

app.listen(PORT, () => 
    console.log('Server berjalan di http://localhost:' + PORT)
);

app.use('/siswa', authencticateJWT, siswaRouter);
app.use('/auth', authRouter);