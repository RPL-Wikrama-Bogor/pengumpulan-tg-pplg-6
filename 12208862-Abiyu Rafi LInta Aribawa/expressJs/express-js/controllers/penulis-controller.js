const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);



pool.on('error', () => {
    console.log(error);
});


const getPenulis = (req, res) => {
    const query = 'SELECT * FROM penulis';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, result) => {
            if (!!error) throw error;

            sendResponse(res, true, 'penulis berhasil diambil', result, 200);
            connection.release();
        });
    })
};
const getPenuliss = (req, res) => {
    const penulisId = req.params.id
    const query = 'SELECT * FROM penulis WHERE id = ? ';

    pool.getConnection((error, connection) => {
        if (!!error) throw error;

        connection.query(query, [penulisId], (error, result) => {
            if (!!error) throw error;

            if (result.length < 1) {
                res.status(404).json({
                    status: false,
                    message: `penulis dengan ID ${penulisId} tidak ditemukan`
                })
            }

            if (result.length > 0) {
                sendResponse(res, true, 'penulis berhasil diambil', result, 200);
                connection.release();
            }
        });
    });

}

const addPenulis = (req, res) => {

    const dataPenulis = {
        nama: req.body.nama,
    };

    const query = 'INSERT INTO penulis SET ? ';

    pool.getConnection((error, connection) => {
        if (!!error) throw error;

        connection.query(query, [dataPenulis], (error, result) => {
            if (!!error) throw error;

            sendResponse(res, true, 'penulis berhasil ditambahkan', result, 200);
            connection.release();
        });
    });
};

const editPenulis = (req, res) => {

    const { id } = req.params;

    const dataPenulis = {
        nama: req.body.nama,
    };

    const query = 'UPDATE penulis SET ? WHERE id = ?';

    pool.getConnection((error, connection) => {
        if (!!error) throw error;
        connection.query(query, [dataPenulis, id], (error, result) => {
            {
                if (result.affectedRows < 1) {
                    res.status(404).json({
                        status: false,
                        message: `Buku dengan ID ${id} tidak ditemukan`
                    });
                }
                sendResponse(res, true, 'penulis berhasil diedit', result, 200);
            }
        });
        connection.release();
    })

}

const deletePenulis = (req, res) => {
    const { id } = req.params;

    const query = 'DELETE FROM penulis WHERE id = ?';

    pool.getConnection((error, connection) => {
        if (!!error) throw error;

        connection.query(query, [id], (error, result) => {
            if (!!error) throw error;

            if (result.affectedRows < 1) {
                res.status(404).json({
                    success: false,
                    message: `Buku dengan ID ${id} tidak ditemukan`
                });
            } sendResponse(res, true, 'penulis berhasil dihapus', result, 200);
            connection.release();
        }
        );
    })
}


const sendResponse = (res, success, message, data, statusCode) =>
    res.status(statusCode).json({
        success: success,
        message: message,
        data: data
    });

module.exports = {
    getPenulis,
    getPenuliss,
    addPenulis,
    editPenulis,
    deletePenulis
}