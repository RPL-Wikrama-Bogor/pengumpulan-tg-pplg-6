const jwt = require('jsonwebtoken');
const { secretAccessToken} = require ('../controllers/auth-controller')

const authenticateJWT = (req, res, next) => {
    const bearerToken = req.headers.authorization;

    if (!bearerToken) {
         return res.status(403).json({message : 'Unaothorized'});
    }

    const token = bearerToken.split(' ')[1];

    jwt.verify(token, secretAccessToken, (err, user) => {
        if (err) {
            return res.status(403).json({message : 'Unaothorized'});
        }
        next();
    });

};

module.exports = authenticateJWT