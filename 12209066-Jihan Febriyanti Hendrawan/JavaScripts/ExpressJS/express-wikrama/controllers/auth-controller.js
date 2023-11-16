const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const jwt = require('jsonwebtoken');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const secretAccessToken= '2023-Wikrama-exp';

const register= (req, res)=>{
    const email = req.body.email;
    const password = req.body.password;

    if(!email  ||  !password){
        // 422 unprocessable content
        sendFailResponse(res, 422, 'email atau password tidak boleh kosong');
        return;
    }

    const data= {
        email : email,
        password : password,
    }

    const query= 'INSERT INTO users SET ?';

    pool.getConnection((err, connection)=>{
        if(err) throw err;

        connection.query(query, [data], (err, results)=>{
            if(err) throw err;

            if(results.affectedRows >= 1){

                const user ={
                    email
                };

                const token = jwt.sign (user, secretAccessToken);

                // berhasil
                sendAuthResponse(res, token, user)
            }
            // gagal
            sendFailResponse(res, 500, 'failed when creating user');
        });
    });

};

const login= (req, res)=>{

    const email = req.body.email;
    const password = req.body.password;

    // falsy - null / empty
    if(!email || !password ){
        sendFailResponse(res, 422, 'Email atau Password tidak boleh kosong');
        return;
    }

    // const query = `SELECT * FROM users WHERE email = ? AND password = ?;`;

    const query = `SELECT users.email FROM users WHERE email = ? AND password = ?;`;

    // Thread pool / Multi-threading/connection
    pool.getConnection((err, connection)=>{
        if(err) throw err;

        connection.query(query, [email, password], (err, results)=>{
            if(err) throw err;

            if(results.length >= 1){
            const user = results.pop();

                const token = jwt.sign ({
                    email: user.email
                }, secretAccessToken);

                // berhasil
                sendAuthResponse(res, token, user)
                return;
            }
            // gagal
            sendFailResponse(res, 404, 'email atau password salah');
        });
        connection.release();
    });
}

const sendAuthResponse= (res, token, user)=> res.status(200).json({
    success: true,
    token: token,
    message: 'Otentikasi Berhasil',
    user: user,
});

const sendFailResponse= (res, statusCode, message)=> res.status(statusCode).json({
    success: false,
    message: message,
});

module.exports={
    register, login, secretAccessToken
}
