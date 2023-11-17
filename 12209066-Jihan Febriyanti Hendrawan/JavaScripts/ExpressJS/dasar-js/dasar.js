// // Online Javascript Editor for free
// // Write, Edit and Run your Javascript code using JS Online Compiler

// First-Class Function
// Pure Function

// const multiply = 2;

// const multiplyByTwo = (number) => {
//     console.log(number * multiply);
// }

// multiplyByTwo(50);

// const variabelFungsi = () => {
//     console.log('I am a function');
// }

// const fungsi2 = (message) => {
//     console.log(message);
// }
// function callFunction (aFunction) {
//     aFunction('Ini message');
// }

// callFunction(fungsi2);

// // FOREACH------------------------
// // const array = [1, 5, 9, 11];

// // array.forEach(val =>{
// //     console.log(val);
// // });

// // array.forEach(val => console.log (val));

// // for (let i = 0; i < array.length; i++){
// //     console.log(array[i])
// // }


// // WHILE--------------------------------
// // const array = [1, 5, 9, 11];
// // let i = 0;
// // do{
// //     console.log(array[i]);
// //     i++;
// // } while (i < array.length)

// // while (i < array.length){
// //     console.log(array[i]);
// //     i++;
// // }



// // FILTER AND MAP----------------------------
const students =[
    {
        nama : 'Agus',
        nilai: 73
    },
    {
        nama : 'Irsyad',
        nilai: 100
    },
    {
        nama : 'Aip',
        nilai: 50
    },
    {
        nama : 'Asep',
        nilai: 10
    },
];

// // const totalNilai = students.reduce((total, student) => total + student.nilai, 0);
// // console.log('totalNilai', totalNilai);

const studentsWithGrade = students.map (student => {
    let grade;
    if (student.nilai >= 90){
        grade = 'A';
    } else if (student.nilai >= 75){
        grade = 'B';
    } else {
        grade = 'F';
    }
    
    return{
            ...student,
            grade,
    };
});

console.log(studentsWithGrade);

// // const underperformingStudents = students.filter(student => student.nama == 'Aip') 
// // console.log(underperformingStudents);

// const underperformingStudents = students.filter(student => student.nilai <= 75) 
// console.log(underperformingStudents);

// // -------------------------------------------------------------------------

// // const cart= [
// //     {
// //         namaProduk: 'kaos kaki',
// //         harga: 30000,
// //         checked: true,
// //     },
// //     {
// //         namaProduk: 'kaos kutang',
// //         harga: 20000,
// //         checked: false,
// //     },
// //     {
// //         namaProduk: 'kaos',
// //         harga: 400000,
// //         checked: true,
// //     },
// // ];

// // // FIND
// // const product = cart.find(produk => produk.namaProduk === 'kaos kaki');
// // console.log('product', product);

// // REDUCE
// // const totalHarga = cart.reduce((total, produk) => produk.checked ?
// // total + produk.harga : total, 0);
// // console.log('totalHarga', totalHarga);

// // SORT----------------------------------------------------------------------

// // const nilai = [100, 50, 78, 11, 89, 500];

// // // terbesar
// // nilai.sort((a, b) => a < b ? 1:-1)
// // // terkecil
// // nilai.sort((a, b) => a > b ? 1:-1)

// // // nilai.sort((a, b) => {
// // //     if (a < b ){
// // //         return - 1
// // //     }

// // //     if (a > b){
// // //         return 1
// // //     }
// // // });
// // console.log(nilai);

// // ------------------------------------------
// // perbedaan ++n dan n ++

// // ditambah dulu, baru ditampilin
// // let n = 0;
// // for ( let i = 0; i < 10; ++i) {
// //     console.log(++n);
// // }

// // console.log ('=============')

// // ditampilin dulu, baru ditambah (jd 0 nya tampil)
// // n = 0;
// // for ( let i = 0; i < 10; ++i) {
// //     console.log(n++);
// // }
    

// // -----------------------------------------

// // const user = {
// //     name: Aryanti,
// //     userType: 'Admin',
// // }
// // switch (user.userType) {
// //     case 'Admin';
// //         console.log ('Halo, Admin!');
// //         break;
// //     case 'Student';
// //         console.log ('Selamat Datang!');
// //         break;
// //     default;
// //          throw Exception('Tipe user tidak ditemukan');
// //     break;
// // }

// // -----------------------------------------------------
// // const nilai = 60;
// // conts nilaiString = 'A';

// // switch (nilaiString) {
// //     case 'A';
// //         console.log ('Sangat baik');
// //         break;
// //     case 'B';
// //         console.log ('Baik');
// //         break;
// //     case 'C';
// //         console.log ('Kurang');
// //         break;
// //     default;
// //          console.log ('Anda beban keluarga');
// //     break;
// // }

// // -------------------------------------------------------
// // if else

// // const nilai = 90;
// //  if (nilai >= 90) {
// //     console.log('A');
// //  }else if(nilai >= 75){
// //     console.log('B');
// // }else {
// //     console.log('C');
// // }


