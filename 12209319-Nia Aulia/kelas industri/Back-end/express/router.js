const handleHome = ((req, res) => {
    res.send('<h1>Welcome To Home</h1>');
});

const handleAbout = ((req, res) => {
    res.send('<h1>Welcome To About</h1>');
});

const handleContact = ((req, res) => {
    res.send('<h1>Welcome To Contact</h1>');
});

const handleNews = ((req, res) => {
    res.send('<h1>Welcome To News</h1>');
});

module.exports = {
    handleHome,
    handleAbout,
    handleContact,
    handleNews,
};