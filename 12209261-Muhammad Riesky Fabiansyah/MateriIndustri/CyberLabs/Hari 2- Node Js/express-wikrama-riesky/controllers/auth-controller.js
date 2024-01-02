const dbConfig = require('../config/db-config');
const mysql = require ('mysql2');
const jwt = require('jsonwebtoken');
// const { connect } = require('../router/writer-router');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const accessSecretToken = '2023-Wikrama-exp';

const register = (req, res) => {
  const email = req.body.email;
  const password = req.body.password;

  if (!email || !password){
    //422 unprocessable content
    sendFailResponse(res, 422, 'Email atau password tidak boleh kosong');
    return;
  }

  const data = {
    email: email,
    password: password,
  }

  const query = 'INSERT INTO users SET ?';

    pool.getConnection((err, connection) => {
      if (err) throw err;

      connection.query(query, [data], (err, results) => {
        if (err) throw err;

        if (results.affectedRows >= 1){
          const user = {
            email
          };

        const token = jwt.sign(user, accessSecretToken);
          //berhasil
          sendAuthResponse(res, token, user);
        }
        //gagal
        sendFailResponse(res, 500, 'Failed when creating user');
      });
    });
}

const login = (req, res) => {
  const email = req.body.email;
  const password = req.body.password;


  if (!email || !password){
    sendFailResponse(res, 422, 'Email Atau Password Tidak Boleh Kosong');
    return;
  }

  const data = {
    email: email,
    password: password,
  };

  const query = `SELECT * FROM users WHERE email = ? AND password = ?;`;

  const onlyemail = `SELECT users.email FROM users WHERE email = ? AND password = ?;`;

  // Thread Pool / Multi-thrading/connection
  pool.getConnection((err, connection) => {
    if(err) throw err;

    connection.query(query, [email, password], (err, results) => {
      if(err) throw err;

      if(results.length >= 1) {
        const user = results.pop();

        const token = jwt.sign(
          {
            email: user.email,
          },
          accessSecretToken);
        //berhasil
        sendAuthResponse(res, token, user)
        return;
      }
      //Gagal
      sendFailResponse(res, 404, 'Email atau Password Salah');
    });
    connection.release();
  });
}

const sendAuthResponse = (res, token, user) => res.status(200).json({
  success: true,
  token: token,
  message: 'Otentikasi Berhasil',
  user: user
});

const sendFailResponse = (res, statusCode, message) => res.status(statusCode).json({
  success: false,
  message: message,
});

module.exports = {
  register,
  login,
  accessSecretToken,
  
};