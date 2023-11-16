module.exports = (req, res) => {
    switch (req.path) {
        case '/':
            res.send('hallo ini halaman home')
            break;
    }
}