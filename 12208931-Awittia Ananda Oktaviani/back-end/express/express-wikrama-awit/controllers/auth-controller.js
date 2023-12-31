const dbConfig = require('../config/db-config');
const mysql = require ('mysql2');
const jwt = require('jsonwebtoken');
// const { Connection } = require('mysql2/typings/mysql/lib/Connection');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log('error');
});
 
const secretAccessToken ='2023-Wikrama-exp';
const register = (req, res) => {
    const email = req.body.email;
    const password = req.body.password;

    if (email == null || password == null) {
        sendFailResponse(res, 422, 'Email atau Password tidak boleh kosong');
        return;
    };

    const data = {
        email: email,
        password: password,
    }

    const query = 'INSERT INTO users SET ?';

    pool.getConnection((err, connection) => {
        if ( err) throw err;

        connection.query(query, [data], (err, results) => {
            if (err) throw err;

            if(results.affectedRows >= 1){
                const user = {
                    email
                };

                const token = jwt.sign(user, secretAccessToken);
                // berhasil
                sendAuthResponse(res, token, user);
            }
            // gagal
            sendFailResponse(res, 500, 'failed when creating user');
        });
    });
};

const login = (req, res) => {
    const email = req.body.email;
    const password = req.body.password;

    if(!email || !password ) {
        sendFailResponse(res, 422, 'Email/Password wajib diisi');
        return;
    }
    // const { email, password} = req.body;
    const query = `SELECT users.email FROM users WHERE email = '${email}' AND password = '${password}'; `;

    pool.getConnection((err, connection) => {
        if(err) throw err;

        connection.query(query, [ email, password], (err, results) => {
            if(err) throw err;

            if(results.length >= 1 ){
                const user = results.pop();

                const token = jwt.sign(
                    { email: user.email },
                    secretAccessToken
                );

                sendAuthResponse(res, token, user);
                return;

                // sendAuthResponse(res, token, {
                //     email: user.email,
                //     // password: user.password,
                // });
                // return;
            };
            sendFailResponse(res, 404, 'Email or Password salah');
            // res.status(404).json({ message: 'Email or password is wrong'});
        });
        connection.release();
    });
};

const sendAuthResponse = (res, token, user) => res.status(200).json({
    success: true,
    token: token,
    message: 'Otentikasi berhasil',
    user: user,
});
const sendFailResponse = (res, statusCode, message) => res.status(statusCode).json({
    success: false,
    message: message,
});

module.exports = {
    register, login, secretAccessToken
}