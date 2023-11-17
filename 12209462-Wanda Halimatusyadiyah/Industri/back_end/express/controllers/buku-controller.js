const db_Config = require('../config/db-config');
const mysql = require ('mysql2');
const pool = mysql.createPool(db_Config);

pool.on('error' , (error) => {
    console.log(error);
});


//filter dan sort
const getBukuu = (req, res) => {
    const { sortBy, order} = req.query;

    let query = 'SELECT * FROM buku;';

    if (sortBy != null) {
        console.log(order);

        let query = `SELECT * FROM buku ORDER BY ${sortBy} ${order} ;`;

        console.log(query);

        // const newAscDesc = (ascDesc != null) ? ascDesc: 'ASC';
        //sprt by tahun / halaman
        // + ASC & DESC
     }
    

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;
            
            sendResponse(res, true, 'penulis berhasil ditambahkan', results, 200);
            connection.release();
            
        })
    })
};
 //filter & sort
const getBuku = (req, res) => {
    const { id } = req.params;
    const query = `SELECT * FROM buku WHERE id = '${id}';`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;
            if (results.length < 1) {
                res.status(404).json({
                    success: false,
                    message: 'penulis tidak ditemukan'

                });
                return;
            }
            // res.json ({
            //     seccess:true,
            //     message: 'berhasil mengambil buku',
            //     data: results
                
            // });
            sendResponse(res, true, 'penulis berhasil mengambil buku', results, 200);
            connection.release();
        })
    })

};

const addBuku = (req, res) => {
    //id, nama, penulis, penerbit, halaman, tahun

    const dataBuku = {
        nama: req.body.nama,
    }
    //prepared statement lebih aman 
    const query = 'INSERT INTO buku SET ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataBuku], (error, results) => {
            if (error) throw error;
            
            sendResponse(res, true, 'penulis berhasil ditambahkan', results, 200);

            connection.release();
        });
    });

};

const editBuku = (req, res) => {
    const { id } = req.params;

    const dataBuku = {
        nama:req.body.nama,

    };

    const query = `UPDATE buku SET ? WHERE id = ${id} ; ` ;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataBuku] , (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1) {
                sendResponse (res, false, 'penulis tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'penulis berhasil di edit', results, 200);

                });
                connection.release();
                
            });

        };
   

const deletebuku = (req, res) => {
    const {id} = req.params;

    const query = `DELETE FROM buku WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;

            if(results.affectedRows < 1) {
                sendResponse(res, false, 'penulis tidak ditemukan', null, 404);
                
                return;
            }

            sendResponse(res, true, 'penulis berhasil dihapus', results, 200);
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
    getBukuu, getBuku, addBuku, editBuku, deletebuku, sendResponse
}