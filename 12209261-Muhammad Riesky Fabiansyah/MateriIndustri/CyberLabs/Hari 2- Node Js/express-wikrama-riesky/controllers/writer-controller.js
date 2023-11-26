const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on("error", (error) => {
  console.log(error);
});

//Filter & Sort
const getWriters = (req, res) => {
  // orderBy & ascDesc
  const { sortBy, order } = req.query;

  let query = "SELECT * FROM writer;";

  if (sortBy != null) {
    console.log(order);

    let query = `SELECT * FROM writer ORDER BY ${sortBy} ${order};`;

    console.log(query);
  }

  // if(nama != null ) {
  //   // query = `SELECT * FROM books WHERE nama LIKE '%${nama}%' ;`;
  //   // query = `SELECT * FROM books ORDER BY halaman ASC ;`;
  // }

  pool.getConnection((error, connection) => {
    if (error) throw error;

    connection.query(query, (error, results) => {
      if (error) throw error;

      res.json({
        success: true,
        message: "Berhasil Mengambil Biodata Penulis",
        data: results,
      });

      connection.release();
    });
  });
};

const getWriter = (req, res) => {
  const { id } = req.params;

  // ${} memanggil variable di backtick
  const query = `SELECT * FROM writer WHERE id = '${id}';`;

  pool.getConnection((error, connection) => {
    if (error) throw error;

    connection.query(query, (error, results) => {
      if (error) throw error;

      if (results.length < 1) {
        res.status(404).json({
          success: false,
          message: " Biodata Tidak Ditemukan ",
          data: results,
        });
        return;
      }

      res.json({
        success: true,
        message: "Berhasil Mengambil Biodata",
        data: results,
      });

      connection.release();
    });
  });
};

const addWriter = (req, res) => {
  // id, nama

  const dataWriter = {
    nama: req.body.nama,

  };
  const query = "INSERT INTO writer SET ? ;";

  pool.getConnection((error, connection) => {
    if (error) throw error;

    connection.query(query, [dataWriter], (error, results) => {
      if (error) throw error;
      // res.json({
      //   success: true,
      //   message: 'Buku berhasil ditambahkan',
      //   data: results,
      // });
      sendResponse(res, true, "Biodata Berhasil Ditambahkan", results, 200);

      connection.release();
    });
  });
};

const editWriter = (req, res) => {
  const { id } = req.params;

  const dataWriter = {
    nama: req.body.nama,
    
  };

  const query = "UPDATE writer SET ? WHERE id = ?;";

  pool.getConnection((err, connection) => {
    if (err) throw err;
    connection.query(query, [dataWriter, id], (err, results) => {
      if (err) throw err;

      if (results.affectedRows < 1) {
        sendResponse(res, false, " Biodata tidak ditemukan ", null, 404);
        return;
      }

      sendResponse(res, true, " Biodata Berhasil DiEdit ", results, 200);
    });
    connection.release();
  });
};

const deleteWriter = (req, res) => {
  const { id } = req.params;

  const query = `DELETE FROM writer WHERE id = ${id} ;`;

  pool.getConnection((err, connection) => {
    if (err) throw err;

    connection.query(query, (err, results) => {
      if (err) throw err;

      if (results.affectedRows < 1) {
        sendResponse(res, false, " Biodata tidak ditemukan ", null, 404);
        return;
      }
      sendResponse(res, true, " Biodata Berhasil DiHapus ", results, 200);
    });
    connection.release();
  });
};

const sendResponse = (res, success, message, data, statusCode) =>
  res.status(statusCode).json({
    success: success,
    message: message,
    data: data,
  });

module.exports = {
  getWriters,
  getWriter,
  editWriter,
  deleteWriter,
  addWriter,
};
