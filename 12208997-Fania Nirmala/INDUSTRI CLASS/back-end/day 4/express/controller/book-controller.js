const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const getBooks = (req, res) => {
    const query = 'SELECT * FROM books;';

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;

            responseSuccess(res, results, 'Berhasil mengambil semua data buku');
        });
        connection.release();
    });
};

const getBook = (req, res) => {
    const id = req.params.id;

    const query = `SELECT * FROM books WHERE id = ${id};`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;

            if (results.length == 0){
                responseBookNotFound(res);
                return;
            }

            responseSuccess(res, results, 'Berhasil mengambil data buku');
        });
        connection.release();
    });
};

const addBook = (req, res) => {
    const data = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman,
    };

    const query = 'INSERT INTO books SET ?;';

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [data], (err, results) => {
            if (err) throw err;

            responseSuccess(res, results, 'Buku berhasil ditambahkan');
        });
        connection.release();
    });
};

const editBook = (req, res) => {
    const data = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman,
    };

    const id = req.params.id;
    const query = `UPDATE books SET ? WHERE id = ${id};`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [data], (err, results) => {
            if (err) throw err;

            if(results.affectedRows == 0){
                responseBookNotFound(res);
                return;
            }

            responseSuccess(res, results, 'Buku berhasil diupdate');
        });
        connection.release();
    });
};

const deleteBook = (req, res) => {
    const id = req.param.id;

    const query = `DELETE FROM books WHERE id = ${id};`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [data], (err, results) => {
            if (err) throw err;

            if(results.affectedRows == 0){
                responseBookNotFound(res);
                return;
            }

            responseSuccess(res, results, 'Buku berhasil dihapus');
        });
        connection.release();
    });
};

const responseBookNotFound = (res) => res.status(404).json({
    success: false,
    message: 'Buku tidak ditemukan',
});

const responseSuccess = (res, results, message) => res.status(200).json({
    success: true,
    message: message,
    data: results
});

module.exports = {
    getBooks, getBook, addBook, editBook, deleteBook
}