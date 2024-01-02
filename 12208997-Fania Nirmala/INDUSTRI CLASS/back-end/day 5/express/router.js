const home = (req, res) => {
    res.send('<h1>Welcome to Home</h1>');
}
const about = (req, res) => {
    res.send('<h1>Welcome to About</h1>');
}
const contact = (req, res) => {
    res.send('<h1>Welcome to Contact</h1>');
}
const news = (req, res) => {
    res.send('<h1>Welcome to News</h1>');
};
module.exports ={
    home,
    about,
    contact,
    news
}