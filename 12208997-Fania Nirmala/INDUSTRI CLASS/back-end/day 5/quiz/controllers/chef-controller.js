const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const getChefs = (req, res) => {

    let query = 'SELECT * FROM chefs;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'Berhasil mengambil seluruh list chef', results, 200);

            connection.release();
        });
    });
};
const getChef = (req, res) => {

    const { id } = req.params;
    const query = `SELECT * FROM chefs WHERE id= '${id}';`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {  
            if (error) throw error;

            if (results.length < 1){
                res.status(404).json({
                    success: false,
                    message: 'Chef tidak ditemukan',
                });
                return;
            };
            sendResponse(res, true, 'Berhasil mengambil 1 list chef', results, 200);

            connection.release();
        });
    });
};
const addChefs = (req, res) => {
    const dataPegawai = {
        nama:req.body.nama,
    };
    const query = 'INSERT INTO chefs SET ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataPegawai], (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'Berhasil menambahkan chef', results, 200);

            connection.release();
        });
    });
};
const editChefs = (req, res) => {
    const { id } = req.params;

    const dataChefs = {
        nama:req.body.nama,
    };

    const query = `UPDATE chefs SET ? WHERE id = ${id} ; `;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataChefs], (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1){
                sendResponse(res, false, 'Chef tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'Data chef berhasil diedit', results, 200)
        });
        connection.release();
    });
};
const deleteChefs = (req, res) => {
    const { id } = req.params;

    const query = `DELETE FROM chefs WHERE id = ${id} ; `;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1){
                sendResponse(res, false, 'Chef tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'Data chef berhasil dihapus', results, 200);

        })
    })
};

const sendResponse =  (res, success, message, data, statuscode) => res.status(statuscode).json({
    success: success,
    message: message,
    data: data
});

module.exports = {
    getChefs,
    getChef,
    addChefs,
    editChefs,
    deleteChefs
}