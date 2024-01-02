const dbConfig = require('../config/db-config')
const mysql = require('mysql2')
const pool = mysql.createPool(dbConfig)

pool.on('error',(error)=>{
    console.log(error);
})

const getPenulis = (req,res)=>{
    
    const query = 'SELECT * FROM penulis;';

    pool.getConnection((error,connection) =>{
        if (error) throw error

        connection.query(query, (error, results)=>{
            if (error) throw error

            if (results.length < 1) {
                sendResponse(res, false, 'Penulis tidak ditemukan', null, 404)
                return;
            }

            sendResponse(res, true, 'Berhasil mengambil list Penulis', results, 200)
            connection.release()
        })
    })
}
const getPenulisId = (req,res)=>{
    
    const { id } = req.params;
    const query = `SELECT * FROM penulis WHERE id = '${id}' ;`

    
    pool.getConnection((error,connection) =>{
        if (error) throw error

        connection.query(query,(error, results)=>{
            if (error) throw error

           if (results.length < 1) {
                sendResponse(res, false, 'Penulis tidak ditemukan', null, 404)
                return;
            }
            sendResponse(res, true, 'Berhasil Mencari Penulis', results, 200)
            connection.release()
        })
    })
}
const addPenulis = (req,res)=>{
    const dataPenulis = {
        nama: req.body.nama,
    }

    // Jika sebuah query terdapat sebuah tanda ? itu disebut sebagai : prepared statement
    const query = 'INSERT INTO penulis SET ? ;'

    pool.getConnection((error,connection)=>{
        if (error) throw error;
        connection.query(query, [dataPenulis],(error,results)=>{
            if(error) throw error;

            if (results.affectedRows < 1) {
                sendResponse(res, false, 'Penulis gagal ditambahkan', null, 404)
                return;
            }

            sendResponse(res, true, 'Penulis berhasil ditambahkan', results, 200)
            connection.release();
        })
    })
}
const editPenulis = (req,res)=>{
    
    const {id} = req.params

    const dataPenulis = {
    nama: req.body.nama,
    }

    const query = `UPDATE penulis SET ? WHERE id = ${id} ;`

    pool.getConnection((err,connection)=>{
        if (err) throw err;
        connection.query(query, [dataPenulis],(err,results)=>{
            if(err) throw err;

            if (results.affectedRows < 1) {
                sendResponse(res, false, 'Buku tidak ditemukan', null, 404)
                return; //return digunakan untuk memberhentikan code 
            }

            sendResponse(res, true, 'Buku berhasil diedit', results, 200)
            connection.release();
        })
    })
}
const deletePenulis = (req,res)=>{
    
    const {id} = req.params

    const query = `DELETE FROM penulis WHERE id = ${id};`

    pool.getConnection((error,connection) =>{
        if (error) throw error

        connection.query(query,(error, results)=>{
            if (error) throw error

           if (results.affectedRows < 1) {
                sendResponse(res, false, 'Buku tidak ditemukan', null, 404)
                return;
            }
            sendResponse(res, true, 'Buku berhasil dihapus', results, 200)
            connection.release()
        })
    })
}

const sendResponse = (res, succes, message, data, statusCode) => res.status(statusCode).json({
    succes: succes,
    message: message,
    data: data
})

module.exports = {
    getPenulis,
    getPenulisId,
    addPenulis,
    editPenulis,
    deletePenulis
}