const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const getPenuliss = (req, res) => {
    const { sortBy, order } = req.query;

    let query = 'SELECT * FROM penulis;';
    
    if ( sortBy != null) {
        console.log(order);
       
        let query = `SELECT  * FROM penulis ORDER BY ${sortBy} ${order};`;

        console.log(query);
    }

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'Berhasil mengambil list nama', results, 200);

            connection.release();
        });
    });
};
const getPenulis = (req, res) => {
    const { id } = req.params;
    const query = `SELECT * FROM penulis WHERE id = '${id}' ;`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {  
            if (error) throw error;

            if (results.length < 1){
                res.status(404).json({
                    success: false,
                    message: 'nama tidak ditemukan',
                });
                return;
            };
            sendResponse(res, true, 'Berhasil mengambil 1 list nama', results, 200);

            connection.release();
        });
    });
};
const addPenulis = (req, res) => {
    const dataPenulis = {
        nama:req.body.nama,
    }
    const query = 'INSERT INTO penulis SET ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataPenulis], (error, results) => {
            
            sendResponse(res, true, 'Nama berhasil ditambahkan', results, 200);

            connection.release();
        });
    });
};
const editPenulis = (req, res) => {
    const { id } = req.params;

    const dataPenulis = {
        nama:req.body.nama,
    };

    const query = `UPDATE penulis SET ? WHERE id = ${id};`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataPenulis] , (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1){
                sendResponse(res, false, 'Nama tidak ditemukan', null , 404);
                return;
            }

            sendResponse(res, true, 'Nama Berhasil diedit', results, 200);
        });

        connection.release();
    });
};
const deletePenulis = (req, res) => {
    const { id } = req.params;

    const query = `DELETE FROM penulis WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if(err) throw err;

        connection.query(query, (err, results) => {
            if(err) throw err;

            if(results.affectedRows < 1) {
                sendResponse(res, false, 'Nama tidak ditemukan', null, 404);
                return;
            };

            sendResponse(res, true, 'Nama berhasil dihapus', results, 200);
        });
    });
};



const sendResponse =  (res, success, message, data, statuscode) => res.status(statuscode).json({
    success: success,
    message: message,
    data: data
});

module.exports = {
    getPenuliss,
    getPenulis,
    addPenulis,
    editPenulis,
    deletePenulis
}