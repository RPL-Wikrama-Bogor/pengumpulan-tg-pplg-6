// import
const express = require('express');
const bookRouter = require('./router/book-router');
const writerRouter = require('./router/writer-router');
const authRouter = require("./router/auth-router");
const authenticateJWT = require("./middleware/jwt-auth-middleware");

// Instance
const app = express();

//Middleware JSON parser
app.use(express.json());

//Middleware Request Body
app.use(express.urlencoded({
  extended: true,
}));

//Book routing with book Router
app.use("/book", authenticateJWT ``, bookRouter);
app.use('/writer', writerRouter);
app.use("/auth", authRouter);


app.listen(3000, () => {
  console.log(`listening on port http://localhost:3000`);
}); 

