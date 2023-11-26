const dbConfig = require('../config/db-config');
const mysql = require('mysql2');


//instansiasi 
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});


// FILTER AND SORT
const getBooks = (req, res) => {

    const { sortBy,order } = req.query;

    let query = 'SELECT * FROM books;';

    // if (nama != null){
    //     query = `SELECT * FROM books WHERE nama LIKE '%${nama}%' ;`;
    // }

    
    if (sortBy != null){
        console.log(order);
        let query = `SELECT * FROM books ORDER BY ${sortBy} ${order};`;

        console.log(query);
    }

         pool.getConnection((error, connection) => {
        if (error) throw error;

        //kalau tidak ada error lanjut ke
        connection.query(query, (error, results) => {
                if(error) throw error;

                sendResponse(res, true,
                'berhasil mengambil list buku', results, 200);
    

                connection.release();
        });
    });

};

const getBook = (req, res) => {

    const { id } = req.params;
    const query= `SELECT * FROM books WHERE id = ${id};`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        //kalau tidak ada error lanjut ke
        connection.query(query, (error, results) => {
                if(error) throw error;

                if(results.length < 1){
                    res.status(404).json({
                        success: false,
                        message: 'buku tidak ditemukan',
                    });
                    return;
                }

                sendResponse(res, true,
                'berhasil mengambil sesuai id', results, 200);
    

                connection.release();
        });
    });

};

const addBook = (req, res) => {

    // id, nama, penulis, penerbit, halaman, tahun

    const dataBuku = {
        //body : tempat menyimpan data yg dikirim
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        halaman: req.body.halaman,
        tahun: req.body.tahun,
    }

    const query = 'INSERT INTO books SET ? ;'

    // connection
    pool.getConnection((error, connection) => {
        if (error) throw error;

        //kalau tidak ada error lanjut ke
        connection.query(query, [dataBuku],
            (error, results) => {
                if(error) throw error;

                // res.json({
                //     success: true,
                //     message: 'Buku berhasil ditambahkan',
                //     data: results
                // });

                sendResponse(res, true,
                'buku berhasil di tambahkan', results, 200);

                connection.release();
            });
    });
};

const editBook = (req, res) => {
    const { id } = req.params;

    const dataBuku ={
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        halaman: req.body.halaman,
        tahun: req.body.tahun,
    };

    const query = `UPDATE books SET ? WHERE id = ? ;`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        //kalau tidak ada error lanjut ke
        connection.query(query, [dataBuku, id], (err, results) => {
                if(err) throw err;

                if(results.affectedRows < 1){
                   sendResponse(res, false, 'Buku Tidak diTemukan', null, 404);
                   return;
                }

                sendResponse(res, true,
                'berhasil mengedit buku', results, 200);

                connection.release();
        });
    });

};

const deleteBook = (req, res) => {

    const { id } = req.params;

    const query = `DELETE FROM books WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        //kalau tidak ada error lanjut ke
        connection.query(query,(err, results) => {
                if(err) throw err;

                if(results.affectedRows < 1){
                   sendResponse(res, false, 'Buku Tidak diTemukan', null, 404);
                   return;
                }

                sendResponse(res, true,
                'berhasil menghapus buku', results, 200);

                connection.release();
        });
    });



};


const sendResponse = 
(res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data: data
});

module.exports = {
    getBooks, getBook, 
    addBook, editBook,
    deleteBook
}