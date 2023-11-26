const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const getAuthors = (req, res) => {
    const { sortBy, order } = req.query;
    let query = 'SELECT * FROM authors;';

    if (sortBy != null ) {
        console.log(order);
        
        let query = `SELECT * FROM authors ORDER BY ${sortBy} ${order};`;
        console.log(query);
    }

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;
            sendResponse(res, true, 'Berhasil mengambil list author', results, 200);
            connection.release();
        });
    });
};

const getAuthor = (req, res) => {
    const id = req.params.id;
    const query = `SELECT * FROM authors WHERE id = ${id}`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            if (results.length < 1) {
                sendResponse(res, false, 'Author tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'Berhasil mengambil list author', results, 200);
            connection.release();
        });
    });
};

const addAuthor = (req, res) => {
    const dataAuthor = {
        nama: req.body.nama,
    };

    const query = 'INSERT INTO authors SET ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataAuthor], (error, results) => {
            if(error) throw error;

            sendResponse(res, true, 'Nama Author berhasil ditambahkan', results, 200);
            connection.release();
        });
    });
};

const editAuthor = (req, res) => {
    const { id } = req.params;

    const dataAuthor = {
        nama: req.body.nama,
    };

    const query = `UPDATE authors SET ? WHERE id = ${id} ;`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataAuthor, id], (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1) {
                sendResponse(res, false, 'Author tidak ditemukan', null, 404);
                return;
            };

            sendResponse(res, true, 'Author berhasil diedit', results, 200);
        });

        connection.release();
    });
};

const deleteAuthor = (req, res) => {
    const { id } = req.params;

    const query = `DELETE FROM authors WHERE id = ${id} ;`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;

            if(results.affectedRows < 1) {
                sendResponse(res, false, 'Author tidak ditemukan', null, 404);
                return;
            };

            sendResponse(res, true, 'Author berhasil dihapus', results, 200);
        });
    });
}

const sendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data: data
});

module.exports = {
    getAuthors,
    getAuthor,
    addAuthor,
    editAuthor,
    deleteAuthor
};