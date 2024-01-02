const jwt = require('jsonwebtoken');
const { secretAccessToken } = require('../controller/auth-controller');

const authenticateJWT= (req, res, next) =>{
    const bearerToken = req.headers.authorization;

    if (!bearerToken) {
        return res.status(403).json({
            message: 'Unauthorized'
        })
    }

    //split digunakan untuk memecah menjadi array yang berisi string contoh:
    //bearer alfalkjfkjdff
    //dengan kode dibawah dipecah oleh spasi menjadi
    // ['bearer' 'alsklkfio']
    const token = bearerToken.split(' ')[1];

    jwt.verify(token, secretAccessToken,(err,user)=>{
        if (err) {
            return res.status(403).json({message: 'Unauthorized'})
        }

        next();
    })
}

module.exports = authenticateJWT;