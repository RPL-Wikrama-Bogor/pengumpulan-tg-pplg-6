const db_Config = require('../config/db-config');
const mysql = require ('mysql2');
const pool = mysql.createPool(db_Config);

pool.on('error' , (error) => {
    console.log(error);
});


//filter dan sort
const getBooks = (req, res) => {
    const { sortBy, order} = req.query;

    let query = 'SELECT * FROM books;';

    if (sortBy != null) {
        console.log(order);

        let query = `SELECT * FROM books ORDER BY ${sortBy} ${order} ;`;

        console.log(query);

        // const newAscDesc = (ascDesc != null) ? ascDesc: 'ASC';
        //sprt by tahun / halaman
        // + ASC & DESC
     }
    

    pool.getConnection((error, connection) => {
        if (error) throw error; //

        connection.query(query, (error, results) => {
            if (error) throw error; //
            
            sendResponse(res, true, 'buku berhasil ditambahkan', results, 200);
            connection.release();
            
        })
    })
};
 //filter & sort
const getBook = (req, res) => {
    const { id } = req.params;
    const query = `SELECT * FROM books WHERE id = '${id}';`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;
            if (results.length < 1) {
                res.status(404).json({ //res disini untuk keseluruhannya
                    success: false,
                    message: 'buku tidak ditemukan'

                });
                return;
            }
            // res.json ({
            //     seccess:true,
            //     message: 'berhasil mengambil buku',
            //     data: results
                
            // });
            sendResponse(res, true, 'berhasil mengambil buku', results, 200);
            connection.release();
        })
    })

};

const addBook = (req, res) => {
    //id, nama, penulis, penerbit, halaman, tahun

    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        halaman: req.body.halaman,
        tahun: req.body.tahun,
    }
    //prepared statement lebih aman 
    const query = 'INSERT INTO books SET ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataBuku], (error, results) => {
            if (error) throw error;
            
            sendResponse(res, true, 'buku berhasil ditambahkan', results, 200);

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

    const query = `UPDATE books SET ? WHERE id = ${id} ; ` ;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataBuku] , (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1) {
                sendResponse (res, false, 'buku tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'buku berhasil di edit', results, 200);

                });
                connection.release();
                
            });

        };
   

const deletebook = (req, res) => {
    const {id} = req.params;

    const query = `DELETE FROM books WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;

            if(results.affectedRows < 1) {
                sendResponse(res, false, 'buku tidak ditemukan', null, 404);
                
                return;
            }

            sendResponse(res, true, 'buku berhasil dihapus', results, 200);
        });
    });

};

const sendResponse = (res, success, message, data,
    statusCode) => res.status(statusCode).json({
    seccess: success,
    message: message,
    data: data
});

module.exports = {
    getBooks, getBook, addBook, editBook, deletebook, sendResponse
}