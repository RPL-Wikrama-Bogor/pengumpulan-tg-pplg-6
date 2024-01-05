<<<<<<< HEAD
// npm i mysql2

// const { Connection } = require('mysql2/typings/mysql/lib/Connection');
const dbConfig = require('../config/db-config');
const mysql = require ('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log('error');
});

const getBooks = (req, res) => {
    const { sortBy, order } = req.query;
    let query = 'SELECT * FROM books;';

    if ( sortBy != null) {
        console.log(order);
        let query = `SELECT * FROM books ORDER BY ${sortBy} ${order} ;`;

        console.log(query);
    };

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            if(results.length < 1){
                res.status(404).json({
                    success: false,
                    message: 'Buku tidak di temukan',
                    data: results
                });
                return;
               };
            // res.json({
            //     success: true,
            //     message: 'Berhasil mengambil list buku!',
            //     data: results
            // });
            sendResponse(res, true, 'berhasil mengambil list buku', results, 200);  
            connection.release();
        });
    });
};
const getBook = (req,res) => {
    const { id } = req.params;
    const query = `SELECT * FROM books WHERE id = '${id}';`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            if(results.length < 1){
            res.status(404).json({
                success: false,
                message: 'Buku tidak di temukan',
                data: results
            });
            return;
           };
        //    res.json({
        //     success: true,
        //     message: 'Berhasil mengambil list buku!',
        //     data: results
        // });
        sendResponse(res, true, 'buku berhasil ditambahkan', results, 200);
            connection.release();
        });
    });
};
const addBook = (req,res) => 
{
    // res.send()
    // id, nama, penulis, penerbit, halaman, tahun
    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        halaman: req.body.halaman,
        tahun: req.body.tahun,
    }
    const query = 'INSERT INTO books SET ? ;'; // tanda tanya di sebut sbgi  prepared statement lebih aman. Sql nya di hilangkan. 

    pool.getConnection ((error, connection) => {
        if (error) throw error;


        connection.query(query, [dataBuku], (error, results) => {
            if (error) throw error;

            // res.json({
            //     success: true,
            //     message: 'Buku Berhasil ditambahkan!',
            //     data: results
            // });
            sendResponse(res, true, 'buku berhasil ditambahkan', results, 200);

            connection.release();
        });
    });
};
const editBook = (req,res) => {
    const { id } = req.params;
    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman,
    };
    const query = 'UPDATE books SET ? WHERE id = ? ;';
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query,[dataBuku, id], (err, results) => {
            if(results.affectedRows < 1){
                sendResponse(res, false, 'buku tidak ditemukan', null, 404);
                return;
            };

            sendResponse(res, true, 'Buku berhasil di edit', results, 200);
        });
        connection.release();
    });
};
const deleteBook = (req, res) => {
    const { id } = req.params;

    const query = `DELETE FROM books WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;
        connection.query(query, (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1) {
                sendResponse(res, false, 'buku tidak ditemukan', null, 404);
                return;
            };
            sendResponse(res, true, 'Buku berhasil dihapus', results, 200);
        }); 
    });
};

const sendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data: data
});

module.exports = {
    getBooks, getBook, addBook, editBook, deleteBook
=======
// npm i mysql2

// const { Connection } = require('mysql2/typings/mysql/lib/Connection');
const dbConfig = require('../config/db-config');
const mysql = require ('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log('error');
});

const getBooks = (req, res) => {
    const { sortBy, order } = req.query;
    let query = 'SELECT * FROM books;';

    if ( sortBy != null) {
        console.log(order);
        let query = `SELECT * FROM books ORDER BY ${sortBy} ${order} ;`;

        console.log(query);
    };

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            if(results.length < 1){
                res.status(404).json({
                    success: false,
                    message: 'Buku tidak di temukan',
                    data: results
                });
                return;
               };
            // res.json({
            //     success: true,
            //     message: 'Berhasil mengambil list buku!',
            //     data: results
            // });
            sendResponse(res, true, 'berhasil mengambil list buku', results, 200);  
            connection.release();
        });
    });
};
const getBook = (req,res) => {
    const { id } = req.params;
    const query = `SELECT * FROM books WHERE id = '${id}';`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            if(results.length < 1){
            res.status(404).json({
                success: false,
                message: 'Buku tidak di temukan',
                data: results
            });
            return;
           };
        //    res.json({
        //     success: true,
        //     message: 'Berhasil mengambil list buku!',
        //     data: results
        // });
        sendResponse(res, true, 'buku berhasil ditambahkan', results, 200);
            connection.release();
        });
    });
};
const addBook = (req,res) => 
{
    // res.send()
    // id, nama, penulis, penerbit, halaman, tahun
    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        halaman: req.body.halaman,
        tahun: req.body.tahun,
    }
    const query = 'INSERT INTO books SET ? ;'; // tanda tanya di sebut sbgi  prepared statement lebih aman. Sql nya di hilangkan. 

    pool.getConnection ((error, connection) => {
        if (error) throw error;


        connection.query(query, [dataBuku], (error, results) => {
            if (error) throw error;

            // res.json({
            //     success: true,
            //     message: 'Buku Berhasil ditambahkan!',
            //     data: results
            // });
            sendResponse(res, true, 'buku berhasil ditambahkan', results, 200);

            connection.release();
        });
    });
};
const editBook = (req,res) => {
    const { id } = req.params;
    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman,
    };
    const query = 'UPDATE books SET ? WHERE id = ? ;';
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query,[dataBuku, id], (err, results) => {
            if(results.affectedRows < 1){
                sendResponse(res, false, 'buku tidak ditemukan', null, 404);
                return;
            };

            sendResponse(res, true, 'Buku berhasil di edit', results, 200);
        });
        connection.release();
    });
};
const deleteBook = (req, res) => {
    const { id } = req.params;

    const query = `DELETE FROM books WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;
        connection.query(query, (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1) {
                sendResponse(res, false, 'buku tidak ditemukan', null, 404);
                return;
            };
            sendResponse(res, true, 'Buku berhasil dihapus', results, 200);
        }); 
    });
};

const sendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data: data
});

module.exports = {
    getBooks, getBook, addBook, editBook, deleteBook
>>>>>>> bdde0b02df05d1389d7945c78e501d2f46604574
}