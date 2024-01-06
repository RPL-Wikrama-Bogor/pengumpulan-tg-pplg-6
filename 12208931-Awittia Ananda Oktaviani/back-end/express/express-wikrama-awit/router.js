
const handleHome = (req, res) => {
    res.send('home');
};

const handleContact = (req, res) => {
    res.send('contact');
};

const handleAbout = (req, res) => {
    res.send('about');
};

const handleNews = (req, res) => {
    res.send('news');
};

module.exports = {
    handleHome,
    handleAbout,
    handleContact,
    handleNews
}