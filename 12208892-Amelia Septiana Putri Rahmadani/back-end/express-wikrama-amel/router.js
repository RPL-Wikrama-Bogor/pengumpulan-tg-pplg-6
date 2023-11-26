const handler = (req, res) =>{
    res.send('Welcome to express')
}
const handleHome = (req, res) => {
    res.send('Home')
};

const handleAbout = (req, res) => {
    res.send('About')
};

const handleContact = (req, res) => {
    res.send('contact')
};

const handleNews = (req, res) => {
    res.send('news')
};

module.exports = {
    handler,
    handleHome,
    handleAbout,
    handleContact,
    handleNews
}