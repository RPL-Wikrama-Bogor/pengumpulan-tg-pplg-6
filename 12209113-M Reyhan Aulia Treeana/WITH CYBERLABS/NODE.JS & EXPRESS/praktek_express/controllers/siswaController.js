const dbConfig = require('../config/dbConfig');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const getSiswas = (req, res) => {
    const {sort, nama} = req.query;

    let query = `SELECT * FROM siswa`;

    if(nama != null){
        query = `SELECT * FROM siswa WHERE nama LIKE '%${nama}%'`;
    }

    if(sort != null){
        query += " ORDER BY " + sort + " ASC";
    }

    pool.query(query, (error, results) => {
        if(error) throw error; 

        res.json({
            success: true,
            message: 'Siswa ditampilkan',
            data: results
        });
    });
}

const getSiswa = (req, res) => {
    const query = 'SELECT * FROM siswa WHERE id = ?';

    pool.query(query, [req.params.id], (error, results) => {
        if(error) throw error;

        res.json({
            success: true,
            message: 'Satu siswa ditampilkan',
            data: results
        });
    })
}

const addSiswa = (req, res) => {
    // id nama penulis penerbit halaman tahun
    const dataSiswa = {
        nama: req.body.nama,
        nis: req.body.nis,
        rombel: req.body.rombel,
        rayon: req.body.rayon,
    }

    const query = `INSERT INTO siswa SET ? ;`;
    pool.query(query, [dataSiswa], (err, results) => {
        if (err) {
            console.log(err);  // Fix: use err instead of error
            res.status(500).json({
                success: false,
                message: 'Internal Server Error',
                error: err
            });
        } else {
            res.json(results)
        }
    });
}

const editSiswa = (req, res) => {
    const query =  `UPDATE siswa SET ? WHERE id = ?`;

    const dataSiswa = {
        nama: req.body.nama,
        nis: req.body.nis,
        rombel: req.body.rombel,
        rayon: req.body.rayon,
    }

    pool.query(query, [dataSiswa, req.params.id], (error, results) => {
        if(error) throw error;

        res.json({
            success: true,
            message: 'Siswa ditambahkan!',
            data: results
        });
    });
}

const deleteSiswa = (req, res) => {
    const query = `DELETE FROM siswa WHERE id = ?`;

    pool.query(query, [req.params.id], (error, results) => {
        if(error) throw error;

        res.json({
            success: true,
            message: 'Siswa ditambahkan!',
            data: results
        });
    })
}

module.exports = {
    getSiswas,
    getSiswa, 
    editSiswa,
    addSiswa,
    deleteSiswa
}
