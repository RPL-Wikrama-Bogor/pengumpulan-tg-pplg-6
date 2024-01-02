// const { Connection } = require('mysql2/typings/mysql/lib/Connection');
const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

// Filter & Sort
const getpenuliss = (req, res) => 
{
    
    const id = req.query;

    let query = 'SELECT * FROM penulis;';
    
    if (id != null) {
        query = 'SELECT * FROM penulis ORDER BY id ASC';

        console.log(query);
    }

    // Sort by tahun / halaman
    // ASC & DESC

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'Berhasil mengambil list Penulis', results, 200);

            connection.release();
        });
    });
};

const getpenulis = (req, res) => 
{
    const PenulisId = req.params.id;
    const query = 'SELECT * FROM penulis WHERE id = ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [PenulisId], (error, results) => {
            if (error) throw error;

            if (results.length < 1) {
                sendResponse(res, false, 'Penulis tidak ditemukan', null, 404);

                return;
            }

            sendResponse(res, true, 'Berhasil mengambil detail penulis', results, 200);

            connection.release();
        });
    });
};

const addpenulis = (req, res) => 
{
    //id, nama, penulis, penerbit, halaman, tahun

    const dataPenulis = {
        nama: req.body.nama,
    }
    // Prepared Statement
    const query = 'INSERT INTO penulis SET ? ;';

    pool.getConnection ((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataPenulis], (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'Penulis berhasil ditambahkan', results, 200);

            connection.release();
        });
    });
};

const editpenulis = (req, res) => 
{
    const { id } = req.params;

    const dataPenulis = {
        nama: req.body.nama,
    };

    const query = `UPDATE penulis SET ? WHERE id = '${id}' ;`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataPenulis], (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1) {
                sendResponse(res, false, 'Penulis tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'Penulis Berhasil diedit', results, 200);

            connection.release();
        });
    });
};
const deletepenulis = (req, res) =>
{
    const { id } = req.params;
    
    const query = `DELETE FROM penulis WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [id], (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1) {
                sendResponse(res, false, 'Penulis tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'Penulis berhasil dihapus', results, 200);

            connection.release();
        });
    })
};

const sendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data: data
});

module.exports = {
    getpenuliss, getpenulis,
    addpenulis, editpenulis,
    deletepenulis
}