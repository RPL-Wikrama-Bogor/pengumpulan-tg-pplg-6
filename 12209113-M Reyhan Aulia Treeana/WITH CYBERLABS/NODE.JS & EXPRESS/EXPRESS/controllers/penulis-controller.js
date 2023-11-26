const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const getPenulises = (req, res) => {
    const {sort, nama} = req.query;

    let query = 'SELECT * FROM penulis';

    if(nama != null){
        query = `SELECT * FROM penulis WHERE nama LIKE '%${nama}%'`;
    }

    if (sort != null) {
        query += " ORDER BY " + sort + " DESC";
      }

    pool.query(query, (error, results) => {
        if(error) throw error;

        res.json({
            success: true,
            message: 'Penulis ditampilkan!',
            data: results
        })
    });
}


const getPenulis = (req, res) => {

    const id = req.params.id;

    const query = 'SELECT * FROM penulis WHERE id = ?';

    pool.query(query, [id], (error, results) => {
        if(error) throw error;

        res.json({
            success: true,
            message: 'satu Penulis ditampilkan!',
            data: results
        })
    });
}


const addPenulis = (req, res) => {
    // id nama penulis penerbit halaman tahun
    const dataPenulis = {
        nama: req.body.nama,
    }

    const query = `INSERT INTO penulis SET ? ;`;
        pool.query(query, [dataPenulis], (error, results) => {
            if(error) throw error;

            res.json({
                success: true,
                message: 'Penulis ditambahkan!',
                data: results
            })
        });
    }


const editPenulis = (req, res) => {
    const query = 'UPDATE penulis SET ? WHERE id = ?';

    const dataPenulis = {
        nama: req.body.nama,
    }

    pool.query(query, [dataPenulis, req.params.id], (error, results) => {

        if(error) throw error;
        res.json({
            success: true,
            message: 'Penulis diubah!',
            data: results
        })
    })
}


const deletePenulis = (req, res) => {
    const id = req.params.id
    const query = `DELETE FROM penulis WHERE id = ?`;

    

    pool.query(query, [id], (error, results) => {

        if(error) throw error;
        res.json({
            success: true,
            message: 'Penulis dihapus!',
            data: results
        })
    })
}

module.exports = {
    getPenulises,
    getPenulis,
    addPenulis,
    editPenulis,
    deletePenulis
}