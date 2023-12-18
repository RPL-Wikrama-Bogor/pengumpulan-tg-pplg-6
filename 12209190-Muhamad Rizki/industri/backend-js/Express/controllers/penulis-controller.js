// const { Connection } = require('mysql2/typings/mysql/lib/Connection');
// const { status } = require('express/lib/response');
const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});


// filter & sort
const getPenuliss = (req, res) => {``
    const {sortBy, order} = req.query;

    let query = 'SELECT * FROM penuliss;';

    if (sortBy != null){
        console.log(query);

        let query = `SELECT * FROM penuliss ORDER BY ${sortBy} ${order};`;

        console.log(query);
    }

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            res.json({
                success: true,
                massage: 'Berhasil mengambil list penulis',
                data: results
            });
 
            connection.release();
        })
    })
};
const getPenulis = (req, res) => {
    const { id } = req.params;

    const query = `SELECT * FROM penuliss WHERE id = '${id}';`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            if (results.length < 1) {
                res.status(404).json({
                    success: false,
                    massage: 'penulis tidak ditemukan',
                });
                return;
            }

            res.json({
                success: true,
                massage: 'Berhasil mengambil list penulis',
                data: results
            });
 
            connection.release();
        })
    })
};
const addPenulis = (req, res) => {
    // id nama penulis penerbit tahun halaman
    // res.send(req, body);
    const dataPenulis = {
        nama: req.body.nama,
    }

    // prepared statement
    const query = 'INSERT INTO penuliss SET ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataPenulis], (error, results) => {
            if (error) throw error;

            res.json({
                success: true,
                massage: 'penulis berhasil ditambahkan',
                data: results
            });

            connection.release();
        });
    });
};
const editPenulis = (req, res) => {
    const { id } = req.params;

    const dataPenulis = {
        nama: req.body.nama,
    };

    const query = `UPDATE penuliss SET ? WHERE id = ${id} ;`;

    pool.getConnection((err, connection) => {
        if(err) throw err;

    connection.query(query, [dataPenulis], (err, results) => {
        if (results.affectedRows < 1) {
            sendResponse(res, false, 'penulis tidak ditemukan', null, 404);
            return;
        }

        sendResponse(res, true, 'penulis berhasil diedit', results, 200);
    });
    connection.release();
    });
};
const deletePenulis = (req, res) => {
    const { id } = req.params;

    const query = `DELETE FROM penuliss WHERE id = ${id}`;
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1) {
                sendResponse(res, false, 'penulis tidak ditemukan', null, 404);
                return;
            }
            sendResponse(res, true, 'penulis berhasil dihapus', results, 200);
        });
    });
};

const sendResponse = (res, success, massage, data, statusCode) => res.status(statusCode).json({
    success: success,
    massage: massage,
    data: data
});

module.exports = {
    getPenuliss, getPenulis, addPenulis, editPenulis, deletePenulis
}