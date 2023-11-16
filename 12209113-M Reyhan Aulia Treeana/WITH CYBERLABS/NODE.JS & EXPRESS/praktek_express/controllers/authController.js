const dbConfig = require("../config/dbConfig");
const mysql = require("mysql2");
const jwt = require("jsonwebtoken");
const pool = mysql.createPool(dbConfig);

pool.on("error", (err) => {
  console.error(err);
});

const accessTokenSecret = "12209113";

const register = (req, res) => {
  if (req.body.email == null || req.body.username == null || req.body.password == null) {
    responseFailValidate(res, "email, username, password wajib diisi");
  }

  const data = {
    email: req.body.email,
    username: req.body.username,
    password: req.body.password,
  };

  const query = "INSERT INTO users SET ?; ";

  pool.getConnection((err, connection) => {

    connection.query(query, [data], (err, results) => {
      if (err) throw err;

      if (results.affectedRows >= 1) {
        const token = jwt.sign({ email: req.body.email, username: req.body.username }, accessTokenSecret);

        responseAuthSuccess(res, token, "Register Berhasil", { email: data.email, username: data.username });
        return;
      }
      res.status(500).json("Failed creating user");
    });
    connection.release();
  });
};

const responseFailValidate = (res, message) => res.status(400).json({
  success: false,
  message: message
});

const responseAuthSuccess = (res, token, message, user) => res.status(200).json({
  success: true,
  message: message,
  token: token,
  user: user
});

const login = (req, res) => {
  if (req.body.email == null ||req.body.password == null) {
    responseFailValidate(res, "email dan password wajib diisi");
  }

  const {email, password} = req.body;

  const query = `SELECT * FROM users WHERE email = '${email}' AND password = '${password}'`;

  pool.getConnection((err, connection) => {
      if (err) throw err;

      connection.query(query, (err, results) => {
          if (err) throw err;

          if(results.length >= 1) {
            const user = results.pop();

            const token = jwt.sign(
              { email: user.email},
              accessTokenSecret
            );

            responseAuthSuccess(res, token, 'Login successful', {
                email: user.email,
              });
              return;
          }
          res.status(404).json({message: "Email atau password salah!"});
      })
  })
}

module.exports = {
  register,
  login
};
