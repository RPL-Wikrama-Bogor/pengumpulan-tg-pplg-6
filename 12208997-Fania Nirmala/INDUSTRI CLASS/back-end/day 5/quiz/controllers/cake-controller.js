const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const getCakes = (req, res) => {

    let query = 'SELECT * FROM cakes;';


    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'Berhasil mengambil seluruh list data kue', results, 200);

            connection.release();
        });
    });
};
const getCake = (req, res) => {
    const { id } = req.params;
    const query = `SELECT * FROM cakes WHERE id= '${id}';`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {  
            if (error) throw error;

            if (results.length < 1){
                res.status(404).json({
                    success: false,
                    message: 'Kue tidak ditemukan',
                });
                return;
            };
            sendResponse(res, true, 'Berhasil mengambil 1 list data kue', results, 200);

            connection.release();
        });
    });
};
const addCakes = (req, res) => {
    const dataCakes = {
        nama:req.body.nama,
        harga:req.body.harga,
    };
    const query = 'INSERT INTO cakes SET ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataCakes], (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'Kue berhasil ditambahkan', results, 200);

            connection.release();
        });
    });
};
const editCakes = (req, res) => {
    const { id } = req.params;

    const dataCakes = {
        nama:req.body.nama,
        harga:req.body.harga,
    };

    const query = `UPDATE cakes SET ? WHERE id = ${id} ; `;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataCakes], (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1){
                sendResponse(res, false, 'Kue tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'Kue berhasil diedit', results, 200)
        });
        connection.release();
    });
};
const deleteCakes = (req, res) => {
    const { id } = req.params;

    const query = `DELETE FROM cakes WHERE id = ${id} ; `;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1){
                sendResponse(res, false, 'Kue tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'Kue berhasil dihapus', results, 200);

        });
    });
};

const sendResponse =  (res, success, message, data, statuscode) => res.status(statuscode).json({
    success: success,
    message: message,
    data: data
});

module.exports = {
    getCakes,
    getCake,
    addCakes,
    editCakes,
    deleteCakes
}