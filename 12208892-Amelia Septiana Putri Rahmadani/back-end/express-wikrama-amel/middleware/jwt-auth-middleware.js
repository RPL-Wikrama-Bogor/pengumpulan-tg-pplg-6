const jwt = require('jsonwebtoken');
const { secretAccessToken } = require('../controllers/auth-controller');

const authenticateJWT = (req, res, next) =>{
    const bearerToken = req.headers.authorization;

    if (!bearerToken){
        res.status(403).json({mesage : 'Unauthorized'});
    }
    //bearer dfghjkvbn
    //['bearer', 'cdfvgbhnjmk']
    //amel-11-rpl-bandung => split('-')
    //[amel-10-rpl-bandung]
    const token = bearerToken.split(' ')[1];

    jwt.verify(token, secretAccessToken, (err,user)=>{
        if(err){
            return res.status(403).json({message : 'Unauthorized'});
        }
        next();
    });
};

module.exports = authenticateJWT;