
const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const getAuthors = (req, res) => {
    const id  = req.query;

    let query = 'SELECT * FROM penulis;';

    if (id != null){
        query = 'SELECT * FROM penulis ORDER BY id ASC';
    }
    

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, 
            results) => {
                if (error) throw error;

                sendResponse(res, true, 'Berhasil Mengambil List Author', results, 200);
                connection.release();
            });
    });
};
const getAuthor = (req, res) => {
    const id_author = req.params.id;
    const query = 'SELECT * FROM penulis WHERE id = ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [id_author], (error, results) => {
                if (error) throw error;

                if (results.length < 1){
                    res.status(404).json({
                        success: false,
                        message: 'Author tidak ditemukan'
                    });
                    return;
                }

                sendResponse(res, true, 'Berhasil Mengambil List Author', results, 200);
                connection.release();
            });
    });
};
const addAuthor = (req, res) => 
{
    //id, nama, penulis, penerbit, halaman, tahun

    const dataPenulis = {
        nama: req.body.nama,
    }

    //prepared statement
    const query = 'INSERT INTO penulis SET ? ;';

    pool.getConnection ((error, Connection) => {
        if (error) throw error;

        Connection.query(query, [dataPenulis], (error, results) => {
            if (error) throw error;

          sendResponse(res, true, 'Berhasil Menambahkan Author', results, 200);
            Connection.release();
        });
    });
};
const editAuthor = (req, res) => {
    const { id } = req.params;
    const dataAuthor = {
        nama: req.body.nama
       
    };

    const query = `UPDATE penulis SET ? WHERE id = ${id} ;`;

    pool.getConnection((err, connection) => {

        if (err) throw err;

        connection.query(query, [dataAuthor, id], (err, results) => {
            
            if(results.affectedRows < 1){
                sendResponse(res, false, "Author Tidak Ditemukan", null, 404);
                    return;
                };

            sendResponse(res, true, 'Author berhasil di edit', results, 200);
               
        });
        connection.release();
    });
};

const deleteAuthor = (req, res) => {
    const { id } = req.params;
    
    const query = `DELETE FROM penulis WHERE id = ${id}`;
    
    pool.getConnection((err, connection) => {
        if (err) throw err; // not connected!

        connection.query(query, (err, results) => {

            if(err) throw err;

            if(results.affectedRows < 1) {
                sendResponse(res, false, 'Author tidak ditemukan', null, 404);
                return;

            }

            sendResponse(res, true, 'Author berhasil dihapus', results, 200);
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
   getAuthors, getAuthor,
   addAuthor, editAuthor, deleteAuthor
}