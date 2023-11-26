// import modul dari moment dan salam.js
let moment = require("moment");
let salam = require("./salam");

// console.log(salam.salamPagi());
// console.log(salam.sapaNama("Deyna"));
console.log(salam.sapaPenggemar("Deyna"));
console.log(salam.sayGoodbye("Deyna"));
console.log("Sekarang: " + moment().format('D MMMM YYYY, h:mm:ss a'));