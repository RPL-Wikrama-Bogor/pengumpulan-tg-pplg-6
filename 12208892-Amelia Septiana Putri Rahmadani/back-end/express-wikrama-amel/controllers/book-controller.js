const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);
//pool untuk menghubungkan mysql ke database 
pool.on('error', (error) => {
    console.log(error);
});  

//filter & sort
const getBooks = (req, res) => {
    //sortBy & ascdesc
    const {sortBy, order} = req.query;

    let query = 'SELECT * FROM book;';
    //const query = 'SELECT * FROM books;';

    if (sortBy != null) {
        console.log(order);

        // const newAscDesc = (ascDesc != null) ? ascDesc : 'ASC';
        let query = `SELECT * FROM book WHERE ORDER BY ${sortBy} ${order};`;

        console.log(query);
         };
    // if (nama != null) {
    //     query = `SELECT * FROM books WHERE nama LIKE '%${nama}%';`;
    // }
    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            if (results.length < 1){
                res.status(404).json({
                    success: false,
                    message: 'Buku tidak ditemukan',
                });
                return;
            }
            sendResponse(res, true, 'Berhasil mengambil list buku', results, 200);

            connection.release();
        });
    });
};

const getBook = (req, res) => {
    const { id } = req.params;
    
    const query = `SELECT * FROM book WHERE id= '${id}' ;`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {  
            if (error) throw error;

            if (results.length < 1){
                res.status(404).json({
                    success: false,
                    message: 'Buku tidak ditemukan',
                });
                return;
            }
            sendResponse(res, true, 'Berhasil mengambil 1 list buku', results, 200);

            connection.release();
        });
    });
};
const addBook = (req, res) => {
    const dataBuku = {
        nama:req.body.nama,
        penulis:req.body.penulis,
        penerbit:req.body.penerbit,
        tahun:req.body.tahun,
        halaman:req.body.halaman,
    };

    //tanda tanya (prepared statement)
    //bedanya jika pake tanda tanya lebih aman karena sqlnya di mysql 2 nya 
    const query = 'INSERT INTO book SET ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataBuku], (error, results) => {
            if (error) throw error;
            
            sendResponse(res, true, 'Buku berhasil ditambahkan', results, 200);

            connection.release();
        });
    });
};
const editBook = (req, res) => {
    const { id } = req.params;
    const dataBuku = {
        nama:req.body.nama,
        penulis:req.body.penulis,
        penerbit:req.body.penerbit,
        tahun:req.body.tahun,
        halaman:req.body.halaman,
    };

    const query = 'UPDATE book SET ? WHERE id = ? ;';

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataBuku, id], (err, results) => {
            if (results.affectedRows < 1){
                sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
                return;
            }
            sendResponse(res, true, 'Buku berhasil diedit', results, 200);
        });
        connection.release();
    });
};
const deleteBook = (req, res) => {
    const { id } = req.params;

    const query = `DELETE FROM book WHERE id= ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1){
                sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
                return;
            }
            sendResponse(res, true, 'Buku berhasil dihapus', results, 200);
        });
        connection.release();
    });
};

const sendResponse =  (res, success, message, data, statuscode) => res.status(statuscode).json({
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