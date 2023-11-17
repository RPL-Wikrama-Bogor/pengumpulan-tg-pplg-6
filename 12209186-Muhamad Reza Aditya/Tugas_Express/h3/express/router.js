const handFirst = (req, res) => {
    res.send('<h1>Welcome</h1>')
}

const handleHome = (req, res) => {
    res.send('<h1>Welcome/home</h1>')

}

const handleAbout = (req, res) => {
    res.send('<h1>Welcome/about</h1>')
}

const handleContact = (req, res) => {
    res.send('<h1>Welcome/contact</h1>')

}

const handleNews = (req, res) => {
    res.send('<h1>Welcome/news</h1>')
    
}


module.exports = {
    handFirst,
    handleHome,
    handleAbout,
    handleContact,
    handleNews,
}
