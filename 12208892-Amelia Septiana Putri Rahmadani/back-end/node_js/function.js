const testfunction = () => {
    console.log('Saya berasal dari function.js')
};

const newFunction = (message) => {
    console.log(message)
}
module.exports = {
    testfunction,
    newFunction,
}

// module.exports = testfunction;