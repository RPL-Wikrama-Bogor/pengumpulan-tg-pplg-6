const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});  

//filter & sort
const getAuthors = (req, res) => {
    //sortBy & ascdesc
    const {nama} = req.query;

    let query = 'SELECT * FROM author;';
    //const query = 'SELECT * FROM Author;';

    if (nama != null) {
        query = `SELECT * FROM author WHERE nama LIKE '%${nama}%';`;
        // const newAscDesc = (ascDesc != null) ? ascDesc : 'ASC';

        console.log(query);
         };
    // if (nama != null) {
    //     query = `SELECT * FROM Author WHERE nama LIKE '%${nama}%';`;
    // }
    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (err, results) => {
            if (err) throw err;

            if (results.length < 1){
                sendResponse(res, false, 'Author tidak ditemukan', null, 404);
                return;
            }
            sendResponse(res, true, 'Berhasil mengambil list Author', results, 200);
        });
        connection.release();
    });
};

const getAuthor = (req, res) => {
    const { id } = req.params;
    
    const query = `SELECT * FROM author WHERE id= '${id}' ;`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {  
            if (error) throw error;

            if (results.length < 1){
                res.status(404).json({
                    success: false,
                    message: 'Author tidak ditemukan',
                });
                return;
            }
            sendResponse(res, true, 'Berhasil mengambil 1 list Author', results, 200);

            connection.release();
        });
    });
};
const addAuthor = (req, res) => {
    const dataAuthor = {
        nama:req.body.nama,
    };

    //tanda tanya (prepared statement)
    //bedanya jika pake tanda tanya lebih aman karena sqlnya di mysql 2 nya 
    const query = 'INSERT INTO author SET ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataAuthor], (error, results) => {
            if (error) throw error;
            
            sendResponse(res, true, 'Author berhasil ditambahkan', results, 200);

            connection.release();
        });
    });
};
const editAuthor = (req, res) => {
    const { id } = req.params;
    const dataAuthor = {
        nama:req.body.nama,
    };

    const query = 'UPDATE Author SET ? WHERE id = ? ;';

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataAuthor, id], (err, results) => {
            if (results.affectedRows < 1){
                sendResponse(res, false, 'Author tidak ditemukan', null, 404);
                return;
            }
            sendResponse(res, true, 'Author berhasil diedit', results, 200);
        });
        connection.release();
    });
};
const deleteAuthor = (req, res) => {
    const { id } = req.params;

    const query = `DELETE FROM author WHERE id= ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1){
                sendResponse(res, false, 'Author tidak ditemukan', null, 404);
                return;
            }
            sendResponse(res, true, 'Author berhasil dihapus', results, 200);
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
    getAuthors,
    getAuthor,
    addAuthor,
    editAuthor,
    deleteAuthor
}