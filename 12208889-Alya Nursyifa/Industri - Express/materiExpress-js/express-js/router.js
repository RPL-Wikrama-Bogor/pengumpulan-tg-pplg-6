const handler = (req, res) => {
    res.send('<h1>Welcome to Express</h1>');
}

const handleHome = (req, res) => {
    res.send('<h1>Ini home</h1>');
}

const handleContact = (req, res) => {
    res.send('<h1>Ini contact</h1>');
}

const handleAbout = (req, res) => {
    res.send('<h1>Ini about</h1>');
}

const handleNews = (req, res) => {
    res.send('<h1>Ini news</h1>');
}

module.exports = {
    handler,
    handleHome,
    handleContact,
    handleAbout,
    handleNews,
};