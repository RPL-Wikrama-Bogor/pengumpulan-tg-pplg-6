const handlerHome = (req, res) => {
    res.send('Selamat Datang');
};

const handlerContact = (req, res) => {
    res.send('Halaman Contact');
};


const handlerAbout = (req, res) => {
    res.send('Halaman About');
};
module.exports = {handlerHome, handlerContact, handlerAbout}