const dbConfig = require('../config/db-config');

const mysql = require('mysql2');

const pool = mysql.createPool(dbConfig);


pool.on('error', () => {
    console.log(error);
});

//Filter & Sort     
const getBooks = (req, res) => {
    const { nama } = req.query;
    const { sortBy, order } = req.query;
    let query = 'SELECT * FROM books ';

    if (nama != null) {
        query = `SELECT * FROM books WHERE nama LIKE '%${nama}%';`;
    };

    if (sortBy != null) {
        console.log(order);

        let query = `SELECT * FROM books ORDER by ${sortBy} ${order};`;

        console.log(query);
    }
    // if (req.query.sort != null) {
    //     query += ` ORDER BY ${req.query.sort} `;
    // }
    pool.getConnection((error, connection) => {
        if (!!error) throw error;

        connection.query(query, (error, result) => {
            if (!!error) throw error;
            sendResponse(res, true, 'buku berhasil diambil', result, 200);
            connection.release();
        });
    });
}
const getBook = (req, res) => {
    const bookId = req.params.id;
    const query = 'SELECT * FROM books WHERE id = ?';

    pool.getConnection((error, connection) => {
        if (!!error) throw error;

        connection.query(query, [bookId], (error, result) => {
            if (!!error) throw error;

            if (result.length < 1) {
                res.status(404).json({
                    status: false,
                    message: `buku dengan ID ${bookId} tidak ditemukan`
                })
            }

            if (result.length > 0) {
                sendResponse(res, true, 'buku berhasil diambil', result, 200);
                connection.release();
            }
        });
    });
}

const addBook = (req, res) => {
    // Implementasi untuk menambahkan buku

    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman
    };
    //prepared statment
    const query = 'INSERT INTO books SET ? ';

    pool.getConnection((error, connection) => {
        if (!!error) throw error;

        connection.query(query, [dataBuku], (error, result) => {
            if (!!error) throw error;

            sendResponse(res, true, 'buku berhasil ditambahkan', result, 200);
            connection.release();
        });
    });
};

const editBook = (req, res) => {
    const { id } = req.params;

    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman
    };

    const query = 'UPDATE books SET ? WHERE id = ?';

    pool.getConnection((error, connection) => {
        if (!!error) throw error;
        connection.query(query, [dataBuku, id], (error, result) => {
            {
                if (result.affectedRows < 1) {
                    res.status(404).json({
                        status: false,
                        message: `Buku dengan ID ${id} tidak ditemukan`
                    });
                }
                sendResponse(res, true, 'buku berhasil diedit', result, 200);
            }
        });
        connection.release();
    })
}

const deleteBook = (req, res) => {
    const { id } = req.params;

    const query = 'DELETE FROM books WHERE id = ?';

    pool.getConnection((error, connection) => {
        if (!!error) throw error;

        connection.query(query, [id], (error, result) => {
            if (!!error) throw error;

            if (result.affectedRows === 0) {
                res.status(404).json({
                    success: false,
                    message: `Buku dengan ID ${id} tidak ditemukan`,
                });
            } else {
                res.status(200).json({
                    success: true,
                    message: 'Buku berhasil dihapus',
                });
            }
            connection.release();
        });
    });
}

const sendResponse = (res, success, message, data, statusCode) =>
    res.status(statusCode).json({
        success: success,
        message: message,
        data: data
    });

module.exports = {
    getBooks,
    getBook,
    addBook,
    editBook,
    deleteBook
}
