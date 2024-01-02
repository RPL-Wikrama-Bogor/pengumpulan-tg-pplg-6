const dbConfig = require('../config/db-config');
const mysql = require('mysql2');


//instansiasi 
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});


// FILTER AND SORT
const getAuthors = (req, res) => {

    const { sortBy,order } = req.query;

    let query = 'SELECT * FROM authors;';

    // if (nama != null){
    //     query = `SELECT * FROM books WHERE nama LIKE '%${nama}%' ;`;
    // }

    
    if (sortBy != null){
        console.log(order);
        
        let query = `SELECT * FROM authors ORDER BY ${sortBy} ${order};`;

        console.log(query);
    }

         pool.getConnection((error, connection) => {
        if (error) throw error;

        //kalau tidak ada error lanjut ke
        connection.query(query, (error, results) => {
                if(error) throw error;

                sendResponse(res, true,
                'berhasil menemukan nama penulis', results, 200);
    

                connection.release();
        });
    });

};

const getAuthor = (req, res) => {

    const { id } = req.params;
    const query= `SELECT * FROM authors WHERE id = ${id};`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        //kalau tidak ada error lanjut ke
        connection.query(query, (error, results) => {
                if(error) throw error;

                if(results.length < 1){
                    res.status(404).json({
                        success: false,
                        message: 'nama tidak ditemukan',
                    });
                    return;
                }

                sendResponse(res, true,
                'berhasil menemukan nama penulis berdasarkan id', results, 200);
    

                connection.release();
        });
    });

};

const addAuthor = (req, res) => {

    // id, nama, penulis, penerbit, halaman, tahun

    const dataAuthor = {
        //body : tempat menyimpan data yg dikirim
        nama: req.body.nama
    }

    const query = 'INSERT INTO authors SET ? ;'

    // connection
    pool.getConnection((error, connection) => {
        if (error) throw error;

        //kalau tidak ada error lanjut ke
        connection.query(query, [dataAuthor],
            (error, results) => {
                if(error) throw error;

                // res.json({
                //     success: true,
                //     message: 'Buku berhasil ditambahkan',
                //     data: results
                // });

                sendResponse(res, true,
                'nama penulis berhasil di tambahkan', results, 200);

                connection.release();
            });
    });
};

const editAuthor = (req, res) => {
    const { id } = req.params;

    const dataAuthor ={
        nama: req.body.nama
    };

    const query = `UPDATE authors SET ? WHERE id = ? ;`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        //kalau tidak ada error lanjut ke
        connection.query(query, [dataAuthor, id], (err, results) => {
                if(err) throw err;

                if(results.affectedRows < 1){
                   sendResponse(res, false, 'nama Tidak diTemukan', null, 404);
                   return;
                }

                sendResponse(res, true,
                'berhasil mengedit nama author', results, 200);

                connection.release();
        });
    });

};

const deleteAuthor = (req, res) => {

    const { id } = req.params;

    const query = `DELETE FROM authors WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        //kalau tidak ada error lanjut ke
        connection.query(query,(err, results) => {
                if(err) throw err;

                if(results.affectedRows < 1){
                   sendResponse(res, false, 'nama Tidak diTemukan', null, 404);
                   return;
                }

                sendResponse(res, true,
                'berhasil menghapus nama', results, 200);

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
    getAuthors, getAuthor, 
    addAuthor, editAuthor,
    deleteAuthor
}