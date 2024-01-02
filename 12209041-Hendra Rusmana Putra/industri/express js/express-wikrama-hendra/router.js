const handler = (req,res) =>{
        res.send('<h1>Welcome to Express</h1>');
    }
const handleHome = (req,res) =>{
        res.send('<h1>Welcome to Home</h1>');
    }
const handleContact = (req,res) =>{
        res.send('<h1>Welcome to Contact</h1>');
    }
const handleAbout = (req,res) =>{
        res.send('<h1>Welcome to About</h1>');
    }
const handleNews = (req,res) =>{
        res.send('<h1>Welcome to News</h1>');
    }

module.exports = {
    handleAbout,
    handleContact,
    handleHome,
    handleNews,
    handler
}