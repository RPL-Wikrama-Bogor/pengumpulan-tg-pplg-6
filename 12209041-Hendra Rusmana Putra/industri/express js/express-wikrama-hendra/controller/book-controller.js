const { Connection } = require('mysql2');
const dbConfig = require('../config/db-config')
const mysql = require('mysql2')
const pool = mysql.createPool(dbConfig)

pool.on('error',(error)=>{
    console.log(error);
})

const getBooks = (req, res) => {
    const query = 'SELECT * FROM books;';

    pool.getConnection((error,connection) =>{
        if (error) throw error

        connection.query(query, (error, results)=>{
            if (error) throw error

            if (results.length < 1) {
                sendResponse(res, false, 'Buku tidak ditemukan', null, 404)
                return;
            }

            sendResponse(res, true, 'Berhasil mengambil list buku', results, 200)
            connection.release()
        })
    })
}
const getBook = (req, res) => {
    const { id } = req.params;
    const query = `SELECT * FROM books WHERE id = '${id}' ;`

    
    pool.getConnection((error,connection) =>{
        if (error) throw error

        connection.query(query,(error, results)=>{
            if (error) throw error

           if (results.length < 1) {
                sendResponse(res, false, 'Buku tidak ditemukan', null, 404)
                return;
            }
            sendResponse(res, true, 'Berhasil mengambil buku', results, 200)
            connection.release()
        })
    })
}
const addBook = (req, res) => {
    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        halaman: req.body.halaman,
        tahun: req.body.tahun,
    }

    // Jika sebuah query terdapat sebuah tanda ? itu disebut sebagai : prepared statement
    const query = 'INSERT INTO books SET ? ;'

    pool.getConnection((error,connection)=>{
        if (error) throw error;
        connection.query(query, [dataBuku],(error,results)=>{
            if(error) throw error;

            if (results.affectedRows < 1) {
                sendResponse(res, false, 'Buku gagal ditambahkan', null, 404)
                return;
            }

            sendResponse(res, true, 'Buku berhasil ditambahkan', results, 200)
            connection.release();
        })
    })
}
const editBook = (req, res) => {
    const {id} = req.params

    const dataBuku = {
    nama: req.body.nama,
    penulis: req.body.penulis,
    penerbit: req.body.penerbit,
    halaman: req.body.halaman,
    tahun: req.body.tahun,
    }

    const query = `UPDATE books SET ? WHERE id = ${id} ;`

    pool.getConnection((err,connection)=>{
        if (err) throw err;
        connection.query(query, [dataBuku],(err,results)=>{
            if(err) throw err;

            if (results.affectedRows < 1) {
                sendResponse(res, false, 'Buku tidak ditemukan', null, 404)
                return; //return digunakan untuk memberhentikan code 
            }

            sendResponse(res, true, 'Buku berhasil diedit', results, 200)
            connection.release();
        })
    })
}
const deleteBook = (req, res) => {
    const {id} = req.params

    const query = `DELETE FROM books WHERE id = ${id};`

    pool.getConnection((error,connection) =>{
        if (error) throw error

        connection.query(query,(error, results)=>{
            if (error) throw error

           if (results.affectedRows < 1) {
                sendResponse(res, false, 'Buku tidak ditemukan', null, 404)
                return;
            }
            sendResponse(res, true, 'Buku berhasil dihapus', results, 200)
            connection.release()
        })
    })
}

const sendResponse = (res, succes, message, data, statusCode) => res.status(statusCode).json({
    succes: succes,
    message: message,
    data: data
})

module.exports = {
    getBook,
    getBooks,
    editBook,
    addBook,
    deleteBook
}