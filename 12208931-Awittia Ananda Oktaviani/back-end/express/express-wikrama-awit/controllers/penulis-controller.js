// npm i mysql2

// const { Connection } = require('mysql2/typings/mysql/lib/Connection');
const dbConfig = require('../config/db-config');
const mysql = require ('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log('error');
});

const getPenulis1 = (req, res) => {
    const { nama } = req.query;
    let query = 'SELECT * FROM penulis;';

    if ( nama != null) {
        query = `SELECT * FROM penulis WHERE nama LIKE '%${nama}%' ;`;

        console.log(query);
    };

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            if(results.length < 1){
                res.status(404).json({
                    success: false,
                    message: 'penulis tidak di temukan',
                    data: results
                });
                return;
               };
            // res.json({
            //     success: true,
            //     message: 'Berhasil mengambil list buku!',
            //     data: results
            // });
            sendResponse(res, true, 'berhasil mengambil list penulis', results, 200);  
            connection.release();
        });
    });
};
const getPenulis = (req,res) => {
    const { id } = req.params;
    const query = `SELECT * FROM penulis WHERE id = '${id}';`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            if(results.length < 1){
            res.status(404).json({
                success: false,
                message: 'penulis tidak di temukan',
                data: results
            });
            return;
           };
        //    res.json({
        //     success: true,
        //     message: 'Berhasil mengambil list buku!',
        //     data: results
        // });
        sendResponse(res, true, 'penulis berhasil ditambahkan', results, 200);
            connection.release();
        });
    });
};
const addPenulis = (req,res) => 
{
    // res.send()
    // id, nama, penulis, penerbit, halaman, tahun
    const dataPenulis = {
        nama: req.body.nama,
    }
    const query = 'INSERT INTO penulis SET ? ;'; // tanda tanya di sebut sbgi  prepared statement lebih aman. Sql nya di hilangkan. 

    pool.getConnection ((error, connection) => {
        if (error) throw error;


        connection.query(query, [dataPenulis], (error, results) => {
            if (error) throw error;

            // res.json({
            //     success: true,
            //     message: 'Buku Berhasil ditambahkan!',
            //     data: results
            // });
            sendResponse(res, true, 'penulis berhasil ditambahkan', results, 200);

            connection.release();
        });
    });
};
const editPenulis = (req,res) => {
    const { id } = req.params;
    const dataPenulis = {
        nama: req.body.nama,
    };
    const query = 'UPDATE penulis SET ? WHERE id = ? ;';
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query,[dataPenulis, id], (err, results) => {
            if(results.affectedRows < 1){
                sendResponse(res, false, 'penulis tidak ditemukan', null, 404);
                return;
            };

            sendResponse(res, true, 'penulis berhasil di edit', results, 200);
        });
        connection.release();
    });
};
const deletePenulis = (req, res) => {
    const { id } = req.params;

    const query = `DELETE FROM penulis WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;
        connection.query(query, (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1) {
                sendResponse(res, false, 'penulis tidak ditemukan', null, 404);
                return;
            };
            sendResponse(res, true, 'penulis berhasil dihapus', results, 200);
        }); 
    });
};

const sendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data: data
});

module.exports = {
    getPenulis1, getPenulis, addPenulis, editPenulis, deletePenulis
}