const testFunction = () => {
    console.log('Saya berasal dari test function.js')
};
const newFunction = (param) => {
    console.log(param)
};

module.exports = {newFunction, testFunction};