const handle = (req, res) => {
    res.send('<h1>Welcome to Express</h1>')
};
const Home = (req, res) => {
    res.send('<h1>Ini adalah Home</h1>')
};
const About = (req, res) => {
    res.send('<h1>Ini adalah About</h1>')
};
const Contact = (req, res) => {
    res.send('<h1>Ini adalah Contact</h1>')
};
const News = (req, res) => {
    res.send('<h1>Ini adalah News</h1>')
};

module.exports = {
    handle,
    Home,
    About,
    Contact,
    News
}