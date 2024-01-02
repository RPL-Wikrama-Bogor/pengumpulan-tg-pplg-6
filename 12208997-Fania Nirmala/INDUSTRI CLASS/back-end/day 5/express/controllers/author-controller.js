const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const getAuthors = (req, res) => {
    // const {nama} = req.query;

    let query = 'SELECT * FROM penulis;';

    // if (nama != null){
    //     query = `SELECT * FROM pegawai ORDER BY tahun, halaman DESC;`;
    // }

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'Berhasil mengambil list pegawai', results, 200);

            connection.release();
        });
    });
};
const getAuthor = (req, res) => {
    const { id } = req.params;
    const query = `SELECT * FROM penulis WHERE id= '${id}';`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {  
            if (error) throw error;

            if (results.length < 1){
                res.status(404).json({
                    success: false,
                    message: 'Pegawai tidak ditemukan',
                });
                return;
            };
            sendResponse(res, true, 'Berhasil mengambil 1 list pegawai', results, 200);

            connection.release();
        });
    });
};
const addAuthors = (req, res) => {
    const dataPegawai = {
        nama:req.body.nama,
    };
    const query = 'INSERT INTO penulis SET ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataPegawai], (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'Berhasil menambahkan pegawai', results, 200);

            connection.release();
        });
    });
};
const editAuthors = (req, res) => {
    const { id } = req.params;

    const dataPegawai = {
        nama:req.body.nama,
    };

    const query = `UPDATE penulis SET ? WHERE id = ${id} ; `;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataPegawai], (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1){
                sendResponse(res, false, 'Pegawai tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'Data pegawai berhasil diedit', results, 200)
        });
        connection.release();
    });
};
const deleteAuthors = (req, res) => {
    const { id } = req.params;

    const query = `DELETE FROM penulis WHERE id = ${id} ; `;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1){
                sendResponse(res, false, 'Pegawai tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'Data pegawai berhasil dihapus', results, 200);

        })
    })
};

const sendResponse =  (res, success, message, data, statuscode) => res.status(statuscode).json({
    success: success,
    message: message,
    data: data
});

module.exports = {
    getAuthors,
    getAuthor,
    addAuthors,
    editAuthors,
    deleteAuthors
}