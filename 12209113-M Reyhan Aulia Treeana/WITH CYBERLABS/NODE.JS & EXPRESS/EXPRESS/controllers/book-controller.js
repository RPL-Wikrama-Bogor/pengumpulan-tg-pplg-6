// const { Connection } = require('mysql2/typings/mysql/lib/Connection');
const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const getBooks = (req, res) => {
    const {sort, nama} = req.query;

    let query = 'SELECT * FROM books';

    if(nama != null){
        query = `SELECT * FROM books WHERE nama LIKE '%${nama}%'`;
    }

    if (sort != null) {
        query += " ORDER BY " + sort + " DESC";
      }

    pool.query(query, (error, results) => {
        if(error) throw error;

        res.json({
            success: true,
            message: 'Buku ditampilkan!',
            data: results
        })
    });
}


const getBook = (req, res) => {
    const query = 'SELECT * FROM books WHERE id = ?';

    pool.query(query, [req.params.id], (error, results) => {
        if(error) throw error;

        res.json({
            success: true,
            message: 'satu Buku ditampilkan!',
            data: results
        })
    });
}


const addBook = (req, res) => {
    // id nama penulis penerbit halaman tahun
    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        halaman: req.body.halaman,
        tahun: req.body.tahun,
    }

    const query = `INSERT INTO books SET ? ;`;
        pool.query(query, [dataBuku], (error, results) => {
            if(error) throw error;

            res.json({
                success: true,
                message: 'Buku ditambahkan!',
                data: results
            })
        });
    }


const editBook = (req, res) => {
    const query = 'UPDATE books SET ? WHERE id = ?';

    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        halaman: req.body.halaman,
        tahun: req.body.tahun,
    }

    pool.query(query, [dataBuku, req.params.id], (error, results) => {

        if(error) throw error;
        res.json({
            success: true,
            message: 'Buku diubah!',
            data: results
        })
    })
}


const deleteBook = (req, res) => {
    const id = req.params.id
    const query = `DELETE FROM books WHERE id = ?`;

    

    pool.query(query, [id], (error, results) => {

        if(error) throw error;
        res.json({
            success: true,
            message: 'Buku dihapus!',
            data: results
        })
    })
}

module.exports = {
    getBooks,
    getBook,
    addBook,
    editBook,
    deleteBook
}