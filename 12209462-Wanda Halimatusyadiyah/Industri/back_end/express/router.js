// app.get("/", (req, res) => {
//   res.send("Welcome To Express");
// });

const handler = (req, res) => {
    res.send("Ini Halaman Home");
  };
  
  const handlerabout = (req, res) => {
    res.send("Ini Halaman About");
  };
  
  const handlerservices = (req, res) => {
    res.send("Ini Halaman Services");
  };
  
  const handlerportofolio = (req, res) => {
    res.send("Ini Halaman Portofolio");
  };
  
  const handlercontact = (req, res) => {
    res.send("Ini Halaman Contact");
  };

  module.exports = {handler, handlerabout, handlercontact, handlerservices, handlerportofolio};