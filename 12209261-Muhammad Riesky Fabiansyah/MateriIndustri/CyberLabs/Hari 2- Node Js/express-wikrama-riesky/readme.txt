//Url Root

//localhost:3000/contohparam/Riesky?siswa=:id

// const siswa = [
//   {
//     id: 1,
//     nama: "Ivan",
//   },
//   {
//     id: 2,
//     nama: "Gunawan",
//   },
//   {
//     id: 3,
//     nama: "Manca",
//   },
// ];

// app.post('/test', (req, res) => {
//   res.send('POST test')
// });
// app.put("/test", (req, res) => {q 
//   res.send("PUT test");
// });
// app.delete("/test", (req, res) => {
//   res.send("DELETE test");
// });

// app.get('/siswa/:id', (req, res) => {
//   const { id } = req.params;
//   const student = siswa.find((student) => student.id == parseInt(id))
//   res.send(student.nama);
// });

// app.get('/contohparam/:username', (req, res) => {
//   // const username = req.params.username;
//   // const test = req.params.test;
//   // const id = req.params.id;

//   // Deconstructor
//   // const {username, id} = req.params;
  
//   const { sort } = req.query;
//   res.send(req.query.sort ?? 'desc');
// });

// app.get('/', handler);
// app.get("/about", handlerabout);
// app.get("/contact", handlercontact);
// app.get("/services", handlerservices);
// app.get("/portofolio", handlerportofolio);