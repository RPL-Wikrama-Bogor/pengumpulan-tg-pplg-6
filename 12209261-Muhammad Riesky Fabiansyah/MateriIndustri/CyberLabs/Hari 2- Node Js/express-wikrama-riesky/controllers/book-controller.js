const dbConfig = require("../config/db-config");
const mysql = require("mysql2");
const pool = mysql.createPool(dbConfig);

pool.on("error", (error) => {
  console.log(error);
});

//Filter & Sort
const getBooks = (req, res) => {
  
  // orderBy & ascDesc
  const { sortBy, order } = req.query;

  let query = "SELECT * FROM books;";

  if (sortBy != null) {;
    console.log(order);

    let query = `SELECT * FROM books ORDER BY ${sortBy} ${order};`;

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
        message: "Berhasil Mengambil List Buku",
        data: results,
      });

      connection.release();
    });
  });
};

const getBook = (req, res) => {
  const { id } = req.params;

  // ${} memanggil variable di backtick
  const query = `SELECT * FROM books WHERE id = '${id}';`;

  pool.getConnection((error, connection) => {
    if (error) throw error;

    connection.query(query, (error, results) => {
      if (error) throw error;

      if (results.length < 1) {
        res.status(404).json({
          success: false,
          message: " Buku Tidak ditemukan ",
          data: results,
        });
        return;
      }

      res.json({
        success: true,
        message: "Berhasil Mengambil Buku",
        data: results,
      });

      connection.release();
    });
  });
};

const addBook = (req, res) => {
  // id, nama, penulis, penerbit, halaman, tahun

  const dataBuku = {
    nama: req.body.nama,
    penulis: req.body.penulis,
    penerbit: req.body.penerbit,
    halaman: req.body.halaman,
    tahun: req.body.tahun,
  };
  const query = "INSERT INTO books SET ? ;";

  pool.getConnection((error, connection) => {
    if (error) throw error;

    connection.query(query, [dataBuku], (error, results) => {
      if (error) throw error;
      // res.json({
      //   success: true,
      //   message: 'Buku berhasil ditambahkan',
      //   data: results,
      // });
      sendResponse(res, true, "Buku Berhasil Ditambahkan", results, 200);

      connection.release();
    });
  });
};

const editBook = (req, res) => {
  const { id } = req.params;

  const dataBuku = {
    nama: req.body.nama,
    penulis: req.body.penulis,
    penerbit: req.body.penerbit,
    halaman: req.body.halaman,
    tahun: req.body.tahun,
  };

  const query = "UPDATE books SET ? WHERE id = ?;";

  pool.getConnection((err, connection) => {
    if (err) throw err;
    connection.query(query, [dataBuku, id], (err, results) => {
      if (err) throw err;

      if (results.affectedRows < 1) {
        sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
        return;
      }

      sendResponse(res, true, ' Buku Berhasil DiEdit ', results, 200);
    });
    connection.release();
  });
};

const deleteBook = (req, res) => {
  const { id } = req.params;

  const query = `DELETE FROM books WHERE id = ${id} ;`;

  pool.getConnection((err, connection) => {
    if (err) throw err;

    connection.query(query, (err, results) => {
      if (err) throw err;

      if (results.affectedRows < 1) {
        sendResponse(res, false, "Buku tidak ditemukan", null, 404);
        return;
      }
      sendResponse(res, true, " Buku Berhasil DiHapus ", results, 200);
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
  getBooks,
  getBook,
  editBook,
  deleteBook,
  addBook,
};