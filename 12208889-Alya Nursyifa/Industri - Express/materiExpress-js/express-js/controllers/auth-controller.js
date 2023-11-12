const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const jwt = require('jsonwebtoken');
// const { Connection } = require('mysql2/typings/mysql/lib/Connection');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const secretAccessToken = '2023-alya-express';

const register = (req, res) => {
    const email = req.body.email;
    const password = req.body.password;

    if (email == null || password == null) {
        //422 Unprocessable content
        sendFailResponse(res, 422, 'Email atau password tidak boleh kosong');
        return;
    };

    const data = {
        email: email,
        password: password,
    };

    const query = 'INSERT INTO users SET ?';

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [data], (err, results) =>{
            if (err) throw err;

            if (results.affectedRows >= 1) {
                //berhasil
                const user = {
                    email
                }
                const token = jwt.sign(user, secretAccessToken);
                sendAuthResponse(res, token, user);
            }
            //gagal
            sendFailResponse(res, 500, 'Failed when creating user');
        });
    });
};

const login = (req, res) => {
    if (req.body.email == null || req.body.password == null) {
    // if (!email || !password) 
        sendFailResponse(res, 422, 'Email atau Password tidak boleh kosong');
        // return;
    }

    const { email, password } = req.body;

    // const query = `SELECT * FROM users WHERE email = ? AND password = ?;`
    const query = `SELECT users.email FROM users WHERE email = ? AND password = ?;` //untuk menampilkan email aja

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [email, password], (err, results) => {
            if (err) throw err;

            if (results.length >= 1) {
                const user = results.pop();

                const token = jwt.sign(
                    { email: user.email },
                    secretAccessToken
                );

                sendAuthResponse(res, token, user);
                // sendAuthResponse(res, token, 'Login successfuly'{
                //     email: user.email,
                // });
                return;
            };
            // res.status(404).json ({ message: 'Email or password is wrong' });
            sendFailResponse(res, 404, 'Email atau password salah');
        });
        connection.release();
    });
};

const sendAuthResponse = (res, token, user) => res.status(200).json ({
    success: true,
    token: token,
    message: 'Otentikasi berhasil',
    user: user,
});

const sendFailResponse = (res, statusCode, message ) => res.status(statusCode).json ({
    success: false,
    message: message,
});

module.exports = {
    register, 
    login,
    secretAccessToken,
    sendAuthResponse,
    sendFailResponse
};