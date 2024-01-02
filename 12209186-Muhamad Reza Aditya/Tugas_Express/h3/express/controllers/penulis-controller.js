// const { Connection } = require('mysql2/typings/mysql/lib/Connection');
const dbConfig = require('../config/db-config');
const mysql = require('mysql2');

const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error)
});


const getPenulisAll = (req, res) => {

 

    let query = 'SELECT * FROM penulis;';

    pool.getConnection((error, connection) => {
        if(error) throw error;

        connection.query(query, (error, results) => {
            if(error) throw error;
            sendResponse(res, true, 'Berhasil mengambil semua penulis', results, 200);
            connection.release();
        });
    })
};


const getPenulis = (req, res) => {
    const { id } = req.params;

    const query = `SELECT * FROM penulis WHERE id = '${id}' `;

    pool.getConnection((error, connection) => {
        if(error) throw error;

        connection.query(query, (error, results) => {
            if(error) throw error;

            if(results.length < 1){
                sendResponse(res, false, 'Penulis tidak ditemukan', null, 404);
                return;
            }
            sendResponse(res, true, 'Berhasil mengambil data penulis', results, 200);
            connection.release();
        });
    })
};


const addPenulis = (req, res)  => {
    const dataPunulis = {
        nama: req.body.nama,
    }

    const query = 'INSERT INTO penulis SET ?;';

    pool.getConnection((error, connection) => {
        if(error) throw error;

        connection.query(query, [dataPunulis], (error, results) => {
            if(error) throw error;
            sendResponse(res, true, 'Penulis berhasil ditambahkan', results, 200);
            connection.release();
        })
    });
};


const editPenulis = (req, res) => {
    const { id } = req.params;

    const dataPenulis = {
        nama: req.body.nama,

    }

    const query = `UPDATE penulis SET ? WHERE id = '${id}' ;`;

    pool.getConnection((err, connection) =>{
        if(err) throw err;

        connection.query( query, [dataPenulis], (err, results) => {
            if(err) throw err;

            if(results.affectedRows < 1){
                sendResponse(res, false, 'penulis tidak ditemukan', null, 404);
                return; // fungsi return agar ketika selesai menjalankan kodingan akan dihentikan
            }

            sendResponse(res, true, 'penulis Berhasil diedit', results, 200)
            connection.release();
        });
    })
};


const deletePenulis = (req, res) => {
    const { id } = req.params;
    const query =  `DELETE FROM penulis WHERE id = '${id}' `;


    pool.getConnection((error, connection) => {
        if(error) throw error;

        connection.query(query, (error, results) => {
            if(error) throw error;
            
            if(results.length < 1){
            sendResponse(res, false, 'penulis tidak ditemukan', null, 404);
            }
            sendResponse(res, true, 'Berhasil menghapus data penulis', results, 200)
            connection.release();
        })
    })
};



const sendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data:data
});


module.exports = {
    addPenulis,
    getPenulisAll,
    getPenulis,
    editPenulis,
    deletePenulis
}