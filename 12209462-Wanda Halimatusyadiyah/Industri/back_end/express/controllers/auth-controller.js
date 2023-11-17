const db_Config = require('../config/db-config');
const mysql = require ('mysql2');
const jwt = require ('jsonwebtoken');
const pool = mysql.createPool(db_Config);

pool.on('error' , (error) => {
    console.log(error);
});

const secretAccessToken = '2023-WikramA-exp' ;

const register = (req, res) => { //
    const email = req.body.email;
    const password = req.body.password;

    if (!email || !password ) {
        sendFailResponse(res, 422, 'Email atau password tidak boleh kosong');
        return;
    }

    const data = {
        email: email,
        password: password,
    }

    const query = 'INSERT INTO users SET  ?';

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [data], (err, results) => { //query pertama query yang bawaan dri mysql2
            //kalo yg kedua yg database
            if (err) throw err;

            if (results.affectedRows >= 1) { //ketika data masuk akan menghasilkan 1 data
                const user = {
                    email
                };
                const token = jwt.sign(user, secretAccessToken); //inisiasi pertama web tokennya
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

    if (!email || !password ) {
        sendFailResponse(res, 422, 'Email/Password wajib diisi');

        return;
    }

    // const { email, password} = req.body;

    const query = `SELECT users.email FROM users WHERE email = ? AND password = ?;`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [email, password], (err, results) => {
            if(err) throw err;

            if( results.length >= 1) {
                const user = results.pop();

                const token = jwt.sign({
                    email: user.email 
                }, secretAccessToken);

                sendAuthResponse(res, token, user); 
                return;
                   
                }
                sendFailResponse(res, 404, 'Email atau password salah');
            });
            //remove connection => prevemt memory leak
        connection.release();
        });
    }



const sendAuthResponse = (res, token, user) => res.status(200).json({
    success: true,
    token: token,
    messsage: 'Otentikasi berhasil',
    user: user,
});


const sendFailResponse = (res, statusCode, message) => res.status(statusCode).json({
    success: false,
    message: message,
}) 


module.exports = {
    register, login , secretAccessToken
}