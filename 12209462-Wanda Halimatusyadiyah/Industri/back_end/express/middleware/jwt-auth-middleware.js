const jwt = require('jsonwebtoken');
const { secretAccessToken } = require('../controllers/auth-controller');

const authenticateJWT = (req, res, next) => {
    const bearerToken = req.headers.authorization; 

    if (!bearerToken) {
       return res.status(403).json({ message : 
        'Unauthorizes'});
    }
    //bearer
    const token = bearerToken.split(' ')[1]; //split untuk memisahkan menjadi array yang berisi string

    jwt.verify(token, secretAccessToken, (err, user) =>{
        if (err) {
           return res.status(403).json({ message : 
            'Unauthorizes'});
        }

        next();
    });

};

module.exports = authenticateJWT;
//untuk mengakses web keselanjutan authetication