const { accessSecretToken } = require('../controllers/auth-controller');

const jwt = require('jsonwebtoken');
const authenticateJWT = (req, res, next) => {
const bearerToken = req.headers.authorization;

  if (!bearerToken) {
    return res.status(403).json({ message : 'unauthorized' });
  }

  // Bearer akdjnwajldnwakdnmandjkwana
  const token = bearerToken.split(' ')[1];

  jwt.verify(token, accessSecretToken, (err, user) => {
    if (err) {
      return res.status(403).json({ message: "unauthorized" });
    }

    next();
  });
};

module.exports = authenticateJWT;