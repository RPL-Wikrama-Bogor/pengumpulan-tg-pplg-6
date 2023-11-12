// const nilai = 87;

// if (nilai >= 90) {
//   console.log("A");
// } else if (nilai >= 75) {
//   console.log("B");
// } else {
//   console.log("C");
// }

// const nilaiString = "E";

// switch (nilaiString) {
//     case 'A':
//         console.log("Sangat Memuaskan");
//         break;
//     case 'B':
//         console.log("Memuaskan");
//         break;
//     case 'C':
//         console.log("Cukup");
//         break;
//     default:
//         console.log("Tidak Memuaskan");
// }


// const user = {
//     name: "John",
//     userType: "admin"
// }

// switch (nilaiString) {
//     case 'admin':
//         console.log("kamu admin");
//         break;
//     case 'student':
//         console.log("kamu user biasa");
//         break;
//     default:
//         console.log("wkwkw siapa km");
// }

// for(let i = 0; i <= 10; i++) {
//     console.log(i);
// }

// for(let i = 10; i >= 0; --i) {
//     console.log(i);
// }

// let n = 0;
// for(let i = 0; i <= 10; ++i) {
//     console.log(++n);
// }


// n = 0;
// for(let i = 0; i <= 10; ++i) {
//     console.log(n++);
// }

// // 

// const array = [1, 5, 9, 11];

// for(let i = 0; i < array.length; ++i) {
//     console.log(array[i]);
// }

// array.forEach(element => {
//     console.log(element)
// }
// );

// let x = 9

// while (x <= 10) {
//     console.log(x);
//     ++x;
// }

// do{
//     console.log(x);
//     ++x;
// } while(x <= 10)

const students = [
    {
        'nama': 'Spencer',
        'nilai': 74
    },
    {
        'nama': 'Sheldon',
        'nilai': 100
    },
    {
        'nama': 'Aip',
        'nilai': 50
    },
];

// const underPerformingStudents = students.filter(students => students.nilai <= 75 );

// const studentsName = students.filter(student => student.nama == "Spencer" );


// console.log(studentsName);

// console.log(underPerformingStudents);

// ini dibawah adalah map

// const studentsWithGrade = students.map(student => {
//     if(student.nilai >= 90){
//         return {
//             ...student,
//             grade: "A"
//         };
//     } else if (student.nilai >= 70){
//         return {
//             ...student,
//             grade: "B"
//         };
//     } else{
//         return {
//             ...student,
//             grade: "C"
//         };
//     }
// });

// const studentsWithGrade = students.map(student => {
//     if(student.nama == "Spencer"){
//     let grade;

//     if(student.nilai >= 90){
//         grade = "A";
//     } else if (student.nilai >= 70){
//         grade = "B";
//     } else{
//         grade = "C";
//     }
//     return {
//         ...student,
//         grade,
//     }
// }
// return student
// });

// console.log(studentsWithGrade);

// const totalNilai = students.reduce((total, student) => total + student.nilai, 0);

// console.log("Total nilai ", totalNilai);

// console.log("rata rata nilai ", totalNilai / students.length);

const cart = [
    {
        namaProduk: "Kaos kaki",
        harga: 10000,
        checked: true
    },
    {
        namaProduk: "Buku",
        harga: 5000,
        checked: true
    },
    {
        namaProduk: "Lampu",
        harga: 35000,
        checked: true
    },
    {
        namaProduk: "Pensil",
        harga: 2000,
        checked: true
    },
];

const totalHarga = cart.reduce((total, produk) => produk.checked ? total + produk.harga : total, 0);

console.log('total harga: ', totalHarga);

const nilai = [100, 50, 78, 11, 89, 500];

nilai.sort((a, b) => b - a);

console.log(nilai);

nilai.sort((a, b) => a > b ? 1 : -1);

cart.sort((a, b) => a.harga > b.harga ? 1 : -1);

console.log(cart);

const produk = cart.find(produk => produk.harga == 35000);

console.log(produk);


// First-Class Function
// Pure Function

// const variabelFungsi = () => {
//     console.log("ini variabel fungsi");
// }

// const fungsi2 = (message) => {
//     console.log(message);
// }

// function callFunction (aFunction) {
//     aFunction('ini message');
// }

// callFunction(fungsi2);
let multiply = 3
const multiplyByTwo = (number) => {
    console.log(number * multiply)
}

multiplyByTwo(150);