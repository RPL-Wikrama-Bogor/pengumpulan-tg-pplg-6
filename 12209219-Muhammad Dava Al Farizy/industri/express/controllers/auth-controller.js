const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const jwt = require('jsonwebtoken');
const pool = mysql.createPool(dbConfig);



pool.on('error', () => {
    console.log(error);
});

const secretAccessToken = '2023-Wikrama-Exp';

const register = (req, res) => {
    const email = req.body.email;
    const password = req.body.password;

    if (!email || !password) {
        // 422 Unprocessable Content
        sendFailResponse(res, 422, 'Email atau Password tidak boleh kosong');
        return;
    }

    const data = {
        email: email,
        password: password,
    };

    const query = 'INSERT INTO users SET ? ';

    pool.getConnection((err, connection) => {
        if (err) {
            sendFailResponse(res, 500, 'Failed to connect to the database');
            return;
        }

        connection.query(query, [data], (err, result) => {
            connection.release(); // Always release the connection when done with it.

            if (err) {
                sendFailResponse(res, 500, 'Failed when creating user');
                return;
            }

            if (result.affectedRows >= 1) {
                const token = jwt.sign(data, secretAccessToken);
                sendAuthResponse(res, token, { email });
            } else {
                sendFailResponse(res, 500, 'Failed when creating user');
            }
        });
    });
};


const login = (req, res) => {
    const email = req.body.email;
    const password = req.body.password;

    if (!email || !password ) {
        // 422 Unprocessable Content
        sendFailResponse(res, 422, 'Email atau Password tidak boleh kosong');
        return;
    }

    const query = ` SELECT * FROM users WHERE email = ? AND password = ? ; `;
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [email, password], (err, result) => {
            if (err) throw err;

            if (result.length >= 1) {
                const user = result.pop();

                const token = jwt.sign({
                    email: user.email,

                }, secretAccessToken);
                sendAuthResponse(res, token, user);
                return
            }
            sendFailResponse(res, 404, 'email atau password salah');
        });
        //Remove Connection => prevent memory leak
        connection.release();
    })
}
const sendAuthResponse = (res, token, user) => res.status(200).json({
    status: true,
    token: token,
    message: " Otentikasi berhasil",
    user: user,
})

const sendFailResponse = (res, statusCode, message) => res.status(statusCode).json({
    status: false,
    message: message,
})

module.exports = {
    register,
    login,
    secretAccessToken
}


