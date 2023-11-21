const handle = (req, res) => {
    res.send('<h1>Welcome to Express</h1>')
};
const Home = (req, res) => {
    res.send('<h1>Ini adalah Halaman Home</h1>')
};
const About = (req, res) => {
    res.send('<h1>Ini adalah Halaman About</h1>')
};
const Contact = (req, res) => {
    res.send('<h1>Ini adalah Halaman Contact</h1>')
};
const News = (req, res) => {
    res.send('<h1>Ini adalah Halaman News</h1>')
};

module.exports = {
    handle,
    Home,
    About,
    Contact,
    News
}