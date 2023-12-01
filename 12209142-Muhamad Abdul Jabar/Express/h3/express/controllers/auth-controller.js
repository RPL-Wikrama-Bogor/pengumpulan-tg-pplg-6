const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const jwt = require('jsonwebtoken');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error)
});

const secretAccessToken = '2023-Wikrama-exp';

const register = (req, res) => {
    const email = req.body.email;
    const password = req.body.password;


    if(!email || !password ){
        //422 Unprocessable Content
        sendFailResponse(res, 422, 'Email atau password tidak boleh kosong');
        return;
    }
    const data = {
        email: email,
        password: password,
    }

    const query = 'INSERT INTO users SET ? ;';

    pool.getConnection((err, connection) => {
        if(err) throw err;

        connection.query(query, [data], (err, results) => {
            if(err) throw err;

            if(results.affectedRows >= 1){
                const user = {
                    email
                }

                const token = jwt.sign(user, secretAccessToken)

                sendAuthResponse(res, token, user)
                return;
            }
            //gagal
            sendFailResponse(res, 500, 'Failed when creating user')

        });
    });
}
const login = (req, res) => {
    const Email = req.body.email;
    const Password = req.body.password
    if(!Email || !Password){
        sendFailResponse(res, 422 ,'Email/Password wajib diisi');
        return;
        
    }

    const { email, password } = req.body;
    const query = `SELECT users.email FROM users WHERE email = '${email}' AND password = '${password}' ;`;

    pool.getConnection((err, connection) => {
        if(err) throw err;

        connection.query(query, [email, password],  (err, results) => {
            if(err) throw err;

            if(results.length >= 1){
                const user = results.pop();

                const token = jwt.sign(
                    { email: user.email,},
                    secretAccessToken
                );

                sendAuthResponse(res, token, user);

                return;
            };
            sendFailResponse(res, 404, 'Email atau password salah')
            
        });
        connection.release();
    });


    
}

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
    register,
    login,
    secretAccessToken

}



