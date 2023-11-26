const dbConfig = require('../config/db-config')
const mysql = require('mysql2')
const jwt = require('jsonwebtoken')
const pool = mysql.createPool(dbConfig)

pool.on('error',(error)=>{
    console.log(error);
})

const secretAccessToken = '2023-Wikrama-Exp'

const register = (req,res)=>{
    const email = req.body.email
    const password = req.body.password

    if (email == null || password == null) {
        sendFailResponse(res, 422, 'Email atau password tidak boleh kosong')
        return
    }

    const data = {
        email: email,
        password: password
    }

    const query = 'INSERT INTO users SET ? ;'

    pool.getConnection((err,connection)=>{
        if(err) throw err

        connection.query(query, [data], (err, results)=>{
            if(err) throw err

            if(results.affectedRows >= 1){
                const user = {
                    email
                }
                const token = jwt.sign(user,secretAccessToken)
                sendAuthResponse(res,token,user)
                return
            };
            sendFailResponse(res, 500, 'Failed When Creating user')
        })
    })
}
const login = (req,res)=>{
    const email = req.body.email
    const password = req.body.password
    
    if (!email || !password) {
        sendFailResponse(res ,404,'Email/Password wajib diisi')
        return;
    }

//semakin sedikit data yang kita ambil maka semakin baik
    const query = `SELECT users.email FROM users WHERE email = ? AND password = ?;`

    pool.getConnection((err,connection)=>{
        if(err) throw err

        connection.query(query,[email,password],(err, results)=>{
            if(err) throw err

            if(results.length >= 1){
                const user = results.pop()

                const token = jwt.sign({email: user.email},secretAccessToken)

                sendAuthResponse(res,token,user)
                return;
            };
            res.status(404).json({success:false, message: 'Email or Password is wrong'})
        })
        connection.release()
    })
}
const sendAuthResponse = (res,token,user) =>{
    res.status(200).json({
        success: true,
        token: token,
        message: 'Otentifikasi Berhasil',
        user: user,
    })
}
const sendFailResponse = (res, status, message)=>{
    res.status(status).json({
        success: false,
        message: message
    })
}

module.exports = {
    register,
    login,
    secretAccessToken
}