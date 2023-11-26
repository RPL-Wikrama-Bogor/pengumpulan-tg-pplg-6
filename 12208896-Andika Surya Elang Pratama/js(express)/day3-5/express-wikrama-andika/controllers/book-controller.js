
const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const getBooks = (req, res) => {
    const tahun  = req.query;

    let query = 'SELECT * FROM books;';

    if (tahun != null){
        query = 'SELECT * FROM books ORDER BY tahun DESC';
    }
    

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, 
            results) => {
                if (error) throw error;

                sendResponse(res, true, 'Berhasil Mengambil List Buku', results, 200);
                connection.release();
            });
    });
};
const getBook = (req, res) => {
    const id_book = req.params.id;
    const query = 'SELECT * FROM books WHERE id = ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [id_book], (error, results) => {
                if (error) throw error;

                if (results.length < 1){
                    res.status(404).json({
                        success: false,
                        message: 'Buku tidak ditemukan'
                    });
                    return;
                }

                sendResponse(res, true, 'Berhasil Mengambil List Buku', results, 200);
                connection.release();
            });
    });
};
const addBook = (req, res) => 
{
    //id, nama, penulis, penerbit, halaman, tahun

    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        halaman: req.body.halaman,
        tahun: req.body.tahun,
    }

    //prepared statement
    const query = 'INSERT INTO books SET ? ;';

    pool.getConnection ((error, Connection) => {
        if (error) throw error;

        Connection.query(query, [dataBuku], (error, results) => {
            if (error) throw error;

          sendResponse(res, true, 'Berhasil Menambahkan Buku', results, 200);
            Connection.release();
        });
    });
};
const editBook = (req, res) => {
    const { id } = req.params;
    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        halaman: req.body.halaman,
        tahun: req.body.tahun,
    };

    const query = `UPDATE books SET ? WHERE id = ${id} ;`;

    pool.getConnection((err, connection) => {

        if (err) throw err;

        connection.query(query, [dataBuku, id], (err, results) => {
            
            if(results.affectedRows < 1){
                sendResponse(res, false, "Buku Tidak Ditemukan", null, 404);
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
        if (err) throw err; // not connected!

        connection.query(query, (err, results) => {

            if(err) throw err;

            if(results.affectedRows < 1) {
                sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
                return;

            }

            sendResponse(res, true, 'Buku berhasil dihapus', results, 200);
        });
        connection.release();
    });

};

const sendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data: data
});



module.exports = {
    getBooks, getBook,
    addBook, editBook,
    deleteBook
}