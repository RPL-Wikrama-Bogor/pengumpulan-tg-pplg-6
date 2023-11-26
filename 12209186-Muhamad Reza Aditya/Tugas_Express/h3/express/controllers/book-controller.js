const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
// const { Connection } = require('mysql2/typings/mysql/lib/Connection/');

const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error)
});


//  ===================================== TAMPIL ALL ===================================
const getBooks = (req, res) => {

    // const { nama } = req.query;

    const { sortBy, ascDesc } = req.query;

    let query = 'SELECT * FROM books;';

    if(sortBy != null){
        const newAscDc = (ascDesc != null) ? ascDesc : 'ASC';
        query = `SELECT * FROM books ORDER BY ${ sortBy } ${ newAscDc }`
    }
    // if(nama != null) {
    //     query = `SELECT * FROM books WHERE nama LIKE '%${nama}%'`;
    // }

    pool.getConnection((error, connection) => {
        if(error) throw error;

        connection.query(query, (error, results) => {
            if(error) throw error;

            // res.json({
            //     success: true,
            //     message: 'Barhasil memgambil List buku',
            //     data: results
            // });
            sendResponse(res, true, 'Berhasil mengambil semua list buku', results, 200);
            connection.release();
        });
    })
};
//  ===================================== END\ ===================================
/**
 * 
 * 
 *  
 */
//  ===================================== TAMPIL BERDASARKAN ID ===================================
const getBook = (req, res) => {
    const { id } = req.params;
    // const bookId = req.params.id;
    const query = `SELECT * FROM books WHERE id = '${id}' `;

    pool.getConnection((error, connection) => {
        if(error) throw error;

        connection.query(query, (error, results) => {
            if(error) throw error;

            if(results.length < 1){
                // res.status(404).json({
                //     success: false,
                //     message: "Buku tidak ditemukan"
                // })
            sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
            return;
            }

            // res.json({
            //     success: true,
            //     message: 'Barhasil memgambil List buku',
            //     data: results
            // });
            sendResponse(res, true, 'Berhasil mengambil list buku', results, 200);
            connection.release();
        });
    })
};
//  ===================================== END\ ===================================
/**
 * 
 *  
 * 
 */
//  ===================================== TAMBAH ===================================
const addBooks = (req, res) => {

    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        halaman: req.body.halaman,
        tahun: req.body.tahun,
        

    }

    // jika query diberi tanda tanya maka tanda tanya tersebut namanya : prepared statement
    const query = 'INSERT INTO books SET ? ;';

    pool.getConnection((error, connection) => {
        if(error) throw error;

        connection.query(query, [dataBuku], (error, results) => {
            if(error) throw error;

            sendResponse(res, true, 'Buku berhasil ditambahkan', results, 200);

            connection.release();
        });
    })
};
//  ===================================== END TAMBAH ===================================
/**
 * 
 *  
 * 
 */
//  ===================================== EDIT ===================================
const editBooks = (req, res) => {
    const { id } = req.params;

    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        halaman: req.body.halaman,
        tahun: req.body.tahun,
    }

    const query = `UPDATE books SET ? WHERE id = '${id}' ;`;

    pool.getConnection((err, connection) =>{
        if(err) throw err;

        connection.query( query, [dataBuku], (err, results) => {
            if(err) throw err;

            if(results.affectedRows < 1){
                sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
                return; // fungsi return agar ketika selesai menjalankan kodingan akan dihentikan
            }

            sendResponse(res, true, 'Buku Berhasil diedit', results, 200)
            connection.release();
        });
    })
};
//  ===================================== END EDIT ===================================
/**
 * 
 *  
 * 
 */
//  ===================================== DELETE  ===================================
const deleteBooks = (req, res) => {
    const { id } = req.params;
    const query =  `DELETE FROM books WHERE id = '${id}' `;


    pool.getConnection((error, connection) => {
        if(error) throw error;

        connection.query(query, (error, results) => {
            if(error) throw error;
            
            if(results.length < 1){
                // res.status(404).json({
                //     success: false,
                //     message: "Buku tidak ditemukan"
                // })
            sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
            }
            sendResponse(res, true, 'Berhasil menghapus buku', results, 200)
            connection.release();
        })
    })
};
//  ===================================== END DELETE ===================================


const sendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data:data
});

module.exports = {
    getBooks,
    getBook,
    addBooks,
    editBooks,
    deleteBooks
};