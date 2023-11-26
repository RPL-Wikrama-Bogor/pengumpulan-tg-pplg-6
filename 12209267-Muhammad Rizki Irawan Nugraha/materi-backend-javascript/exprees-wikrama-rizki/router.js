const handle = (req, res) => {
    res.send('Selamat Datang')
};
const handleHome = (req, res) => {
    res.send('Halaman Home')
};
const handleAbout= (req, res) => {
    res.send('Halaman About')
};
const handleContact = (req, res) => {
    res.send('Halaman Contact')
};
const handleNews = (req, res) =>{
     res.send('Halaman News')
};

module.exports = {
    handle,
    handleHome, 
    handleAbout,
    handleContact,
    handleNews
}